export let renderPlusMinusButton = () => {
    
    let minuses = document.querySelectorAll(".minus");
    let pluses = document.querySelectorAll(".plus");

    document.addEventListener("product",( event =>{
        
        renderPlusMinusButton();
        
    })), {once: true};

    pluses.forEach(plus => { 

        plus.addEventListener("click", (event) => {

            event.preventDefault();

            let number = plus.parentNode.querySelector('.plus');

            number.value = (parseInt(number.value) + 1);

        });
    });

    minuses.forEach(minus => { 

        minus.addEventListener("click", (event) => {

            event.preventDefault();

            let number = minus.parentNode.querySelector('.minus');

             if(number.value > 1) {
                 number.value = (parseInt(number.value) - 1);
            }

        });
    });
}




