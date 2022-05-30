export let renderModalDelete = () => {

    let modalDelete = document.getElementById('modal-delete');
    let deleteConfirm = document.getElementById('delete-confirm');
    let deleteCancel = document.getElementById('delete-cancel');

    document.addEventListener("openModalDelete",( event =>{
        deleteConfirm.dataset.url = event.detail.url;
        modalDelete.classList.add('modal-active');
    }), {once: true});

    deleteCancel.addEventListener("click", () => {
        modalDelete.classList.remove('modal-active');
    }, {once: true});

    deleteConfirm.addEventListener("click", () => {

        let url = deleteConfirm.dataset.url;

        console.log(url);
    
        let sendDeleteRequest = async () => {

            let response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                },
                method: 'DELETE', 
            })
            .then(response => {
                          
                if (!response.ok) throw response;

                return response.json();
            })
            .then(json => {

                if(json.table){
                    document.dispatchEvent(new CustomEvent('loadTable', {
                        detail: {
                            table: json.table,
                        }
                    }));
                }

                document.dispatchEvent(new CustomEvent('loadForm', {
                    detail: {
                        form: json.form,
                    }
                }));

                modalDelete.classList.remove('modal-active');

                document.dispatchEvent(new CustomEvent('renderFormModules'));
                document.dispatchEvent(new CustomEvent('renderTableModules'));
            })
            .catch(error =>  {

                if(error.status == '500'){
                    console.log(error);
                };
            });
        };

        sendDeleteRequest();
    });   
}

