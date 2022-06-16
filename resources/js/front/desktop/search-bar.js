export let renderSearchBar = () => {


let search = document.getElementById('searcher-input');
let buttonSearch = document.getElementById('searcher-button');
let display = document.getElementById('display');

    if(search == 'hola'){
        
            display = 'Hola';
        
    }

    console.log(search);
    console.log(buttonSearch);
    console.log(display);
}