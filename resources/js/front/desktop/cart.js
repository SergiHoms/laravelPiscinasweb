export let renderCart = () => {

    let mainContainer = document.querySelector("main");
    let storeButton = document.querySelector(".store-button");
    let forms = document.querySelectorAll(".form-cart");


    document.addEventListener("renderProductModules", (event => {
        renderCart();
    }), {once: true});


    if(storeButton){

        storeButton.addEventListener("click", (event) => {
            
            event.preventDefault();

            
            forms.forEach(form => { 
                    
                let data = new FormData(form);
                let url = form.action;
              
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
                    });
                };
        
                sendPostRequest();
            }
        )});
    
    }
};