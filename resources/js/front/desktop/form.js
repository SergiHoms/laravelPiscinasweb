export let renderForm = () => {

    let formContainer = document.querySelector(".form");
    let storeButton = document.querySelector('.store-button');
    let createButton = document.querySelector('.create-button');
    let forms = document.querySelectorAll('.admin-form');

    document.addEventListener("loadForm",( event =>{
        formContainer.innerHTML = event.detail.form;
    }), {once: true});

    document.addEventListener("renderFormModules",( event =>{
        renderForm();
    }), {once: true});

    
    if(createButton){

        createButton.addEventListener("click", () => {

            let url = createButton.dataset.url;

            

            let sendCreateRequest = async () => {

                
                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    formContainer.innerHTML = json.form;
                    

                    
                    document.dispatchEvent(new CustomEvent('renderFormModules'));
                })
                .catch(error =>  {

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };
    
            sendCreateRequest();
        });
    }

    if(storeButton){

        storeButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 
                    
                let data = new FormData(form);
                let url = form.action;


                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }



    
                if( ckeditors != 'null'){
    
                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
                }

                
    
                let sendPostRequest = async () => {
    
                    
                    
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })
                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        formContainer.innerHTML = json.form;

                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('renderFormModules'));
                        document.dispatchEvent(new CustomEvent('renderTableModules'));
                    })
                    .catch ( error =>  {
    
                        
    
                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
                                    errorMessage += '<li>' + errors[key] + '</li>';
                                })
                
                                document.dispatchEvent(new CustomEvent('message', {
                                    detail: {
                                        message: errorMessage,
                                        type: 'error'
                                    }
                                }));
                            })   
                        }
    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendPostRequest();
            });
        });
    }

}