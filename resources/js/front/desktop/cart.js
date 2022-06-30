export let renderCart = () => {

    let mainContainer = document.querySelector("main");
    let sendButton = document.querySelector(".send-button");
    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");

    document.addEventListener("cart",( event =>{
        
        renderCart();

    })), {once: true}; 

    if(sendButton){

        sendButton.addEventListener("click", () => {
            
            let url = sendButton.dataset.url;

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

                    document.dispatchEvent(new CustomEvent('checkout'));
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

    plusMinusButtons.forEach(plusMinusButton => { 

        plusMinusButton.addEventListener("click", () => {
            
            let url = plusMinusButton.dataset.url;

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

                    document.dispatchEvent(new CustomEvent('cart'));

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
    
};