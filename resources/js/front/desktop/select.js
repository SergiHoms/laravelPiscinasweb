export let renderSelect = () => {

    let selects = document.querySelectorAll(".button-submit");
    

    selects.forEach(select => { 

        select.addEventListener("change", () => {

            selects.forEach(select => {
                select.classList.remove("active");
            });
            select.classList.add("active");
                
        });
    });
}
