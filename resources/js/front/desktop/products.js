export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll(".view-button");

    document.addEventListener("renderProductModules", (event => {
        renderProducts();
    }), {once: true});

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
    });
}
