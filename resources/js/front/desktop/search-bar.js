export let renderSearchBar = () => {


let search = document.getElementById('searcher-input');
let buttonSearch = document.getElementById('searcher-button');


    if(search){

        buttonSearch.addEventListener('click', () => {
            // console.log(search.value);

            let url = search.value;
            window.location.href = url;
            console.log(url);

            

        });

        

    }


        


        
        



}
    // if(search == 'hola'){
        
    //     console.log('hola');
        
    // }