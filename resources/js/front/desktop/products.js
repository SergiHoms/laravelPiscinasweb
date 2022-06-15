export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll(".view-button");

    document.addEventListener("renderProductModules", (event => {
        renderProducts();
    }), {once: true});

    viewButtons.forEach(viewButton => {

        viewButton.addEventListener("click", () => {
            
            let url = viewButton.dataset.url;

            let sendViewRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                              
                    if (!response.ok) throw response;

                    return response.json();
                })
                // .then(json => {

                //     document.dispatchEvent(new CustomEvent('loadForm', {
                //         detail: {
                //             form: json.form,
                //         }
                //     }));

                //     document.dispatchEvent(new CustomEvent('renderProductsModules'));
                // })

                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent("renderFormModules"));
                })
                
                .catch(error =>  {

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendViewRequest();


        });
    });
}

// deleteConfirm.addEventListener("click", () => {

//     let url = deleteConfirm.dataset.url;

//     console.log(url);

//     let sendDeleteRequest = async () => {

//         let response = await fetch(url, {
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest',
//                 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
//             },
//             method: 'DELETE', 
//         })
//         .then(response => {
                      
//             if (!response.ok) throw response;

//             return response.json();
//         })
//         .then(json => {

//             if(json.table){
//                 document.dispatchEvent(new CustomEvent('loadTable', {
//                     detail: {
//                         table: json.table,
//                     }
//                 }));
//             }

//             document.dispatchEvent(new CustomEvent('loadForm', {
//                 detail: {
//                     form: json.form,
//                 }
//             }));

//             modalDelete.classList.remove('modal-active');

//             document.dispatchEvent(new CustomEvent('renderFormModules'));
//             document.dispatchEvent(new CustomEvent('renderTableModules'));
//         })
//         .catch(error =>  {

//             if(error.status == '500'){
//                 console.log(error);
//             };
//         });
//     };

//     sendDeleteRequest();
// });


//   try {
//     var response = await fetch(form.action, init);
//     if (response.ok) {
//       // obtenemos la respuesta del servidor web
//       // se supone que el servidor nos responderá
//       // si todo ha ido bien o no
//       var respuesta = await response.json();
//       // asumimos que todo ha ido bien,
//       // damos las gracias y limpiamos el formulario
//       result.innerHTML = "Gracias por contactar con nosotros.";
//       form.reset();
//     } else {
//       throw new Error(response.statusText);
//     }
//   } catch (err) {
//     result.innerHTML = "Error al enviar el formulario: " + err.message;
//   }
//   // permitimos volver a enviar el formulario de nuevo
//   enviarFormulario.enviando = false;


// document.addEventListener("DOMContentLoaded", function() {
//   document.querySelector("form").addEventListener("submit", enviarFormulario);
// });