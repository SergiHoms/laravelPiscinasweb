export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll(".view-button");
    let storeButton = document.querySelector(".store-button");
    let forms = document.querySelectorAll(".form-cart");
    let categoryButtons = document.querySelectorAll(".category");
    let orderSelect = document.querySelector(".order-select");
    let form = document.querySelector(".search-form");  
    let searchButton = document.querySelector(".search-button");

    document.addEventListener("products",( event =>{
        
        renderProducts();

    })), {once: true};


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

                        document.dispatchEvent(new CustomEvent('cart'));

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

    viewButtons.forEach(viewButton => {

        viewButton.addEventListener("click", () => {
            
            let url = viewButton.dataset.url;

            let sendViewRequest = async () => {

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

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('products'));

                   
                })
                
                .catch(error =>  {

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendViewRequest();


        });
    });


    categoryButtons.forEach(categoryButton => {

        categoryButton.addEventListener("click", () => {
            
            let url = categoryButton.dataset.url;

            let sendViewRequest = async () => {

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

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('products'));

                })
                
                .catch(error =>  {

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendViewRequest();


        });
    });

  
    if(orderSelect){
        orderSelect.addEventListener("change", () => {
            
            let url = orderSelect.value;

            console.log(url);

            let sendViewRequest = async () => {

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

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('products'));

                })
                .catch(error =>  {

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendViewRequest();
        
        });
    }

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

                    document.dispatchEvent(new CustomEvent('products'));

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
