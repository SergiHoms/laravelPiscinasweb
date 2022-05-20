import {renderNotification} from './notification.js';

export let renderProduct = () => {

    let addButton = document.querySelector(".product-button");

    if(addButton){
        addButton.addEventListener("click", () => {

            renderNotification("El producto ha sido añadido a la cesta", "success");
    
        });  
    }

}