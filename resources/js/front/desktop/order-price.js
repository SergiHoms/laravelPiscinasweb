export let renderOrderPrice = () => {

    let mainContainer = document.querySelector("main");
    let orderSelect = document.querySelector(".order-select");

    document.addEventListener("renderProductModules", (event => {
        renderProducts();
    }), {once: true});

    document.addEventListener("renderOrderPriceModules", (event => {
        renderOrderPrice();
    }), {once: true});
  
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

                    document.dispatchEvent(new CustomEvent("renderOrderPriceModules"));
                    document.dispatchEvent(new CustomEvent("renderProductModules"));
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