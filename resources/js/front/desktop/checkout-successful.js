export let renderCheckoutSuccessful = () => {

    let forms = document.querySelectorAll('.front-form');
    let mainContainer = document.querySelector("main");
    let successfulButton = document.querySelector(".successful-button");

    document.addEventListener("renderProductModules", (event => {
        renderCheckoutSuccessful();
    }), {once: true});


    if(successfulButton){

        successfulButton.addEventListener("click", (event) => {


            event.preventDefault();
    
            forms.forEach(form => {

                console.log("successfulButton");
                    
                let data = new FormData(form);
                let url = form.action;

                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
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

                        console.log('sigue¿¿??');
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        console.log(json.content);

                        mainContainer.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('renderFormModules'));
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
    
