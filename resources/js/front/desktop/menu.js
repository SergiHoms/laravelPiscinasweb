export let renderMenu = () => {

    let mainContainer = document.querySelector("main");
    let menuButtons = document.querySelectorAll(".menu-button");

    menuButtons.forEach(menuButton => { 

        menuButton.addEventListener("click", () => {
            
            let url = menuButton.dataset.url;

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

                    document.dispatchEvent(new CustomEvent("mainModules"));
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

