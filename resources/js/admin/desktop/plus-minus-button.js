export let renderPlusMinusButton = () => {
    
    let minuses = document.querySelectorAll(".minus");
    let pluses = document.querySelectorAll(".plus");

    pluses.forEach(plus => { 

        plus.addEventListener("click", () => {

            let number = plus.parentNode.querySelector('.plus-minus-input');

            number.value = (parseInt(number.value) + 1);

        });
    });

    minuses.forEach(minus => { 

        minus.addEventListener("click", () => {
            let number = minus.parentNode.querySelector('.plus-minus-input');

             if(number.value > 1) {
                 number.value = (parseInt(number.value) - 1);
            }

        });
    });
}




