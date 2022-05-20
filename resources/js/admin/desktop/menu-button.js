export let renderMenuButton = () => {

    let hamburguer = document.getElementById("hamburger");
    let menu = document.getElementById("menu");

    if(hamburguer){
        hamburguer.addEventListener("click", () => {
            menu.classList.toggle("active");
            hamburguer.classList.toggle("active");
        });
    }

}