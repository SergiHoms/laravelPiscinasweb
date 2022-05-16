export let renderTabs = () => {

    let tabs = document.querySelectorAll(".tab-button")
    let displays = document.querySelectorAll(".tab-display")

    tabs.forEach(tab => { 

        tab.addEventListener("click", () => {

            tabs.forEach(tab => {
                tab.classList.remove("active");
            });

            tab.classList.add("active");

            displays.forEach( display => {
                
                if(display.dataset.display == tab.dataset.tab){
                    display.classList.add("active");
                }else{
                    display.classList.remove("active");
                }
            });
                
        });
    });
}
