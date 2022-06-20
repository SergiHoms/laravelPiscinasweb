export let renderSearchBar = () => {

    let mainContainer = document.querySelector("main");
    let form = document.querySelector('.search-form');  
    let searchButton = document.querySelector('.search-button');

    document.addEventListener("renderProductModules",( event =>{
        renderSearchBar();
    }), {once: true});

    if(searchButton){

        searchButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            let data = new FormData(form);
            let url = form.action;

            console.log(url);

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

                    console.log(json.content);

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('renderProductModules'));
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
    }

}



