export let renderCheckoutSuccessful = () => {

    let mainContainer = document.querySelector("main");
    let successfulButton = document.querySelector(".successful-button");

    document.addEventListener("renderProductModules", (event => {
        renderCheckoutSuccessful();
    }), {once: true});


    if(successfulButton){

        successfulButton.addEventListener("click", () => {
            
            let url = successfulButton.dataset.url;

            let sendViewRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    method: 'POST', 
                })
                .then(response => {
                              
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent("renderProductModules"));
                })
                
                .catch(error =>  {

                    console.log("hola??")

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendViewRequest();


        });
    
    }
    
};