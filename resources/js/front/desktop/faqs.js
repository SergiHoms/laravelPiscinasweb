export let renderFaqs = () => {

    let lists = document.querySelectorAll(".list");
    let contents = document.querySelectorAll(".content");

    document.addEventListener("products",( event =>{
        
        renderFaqs();

    })), {once: true};

    lists.forEach(list => { 

        list.addEventListener("click", () => {

            lists.forEach(tab => {
                list.classList.remove("active");
            });

            list.classList.add("active");

            contents.forEach( content => {
                
                if(content.dataset.content == list.dataset.list){
                    content.classList.add("active");
                }else{
                    content.classList.remove("active");
                }
            });
                
        });
    });
} 