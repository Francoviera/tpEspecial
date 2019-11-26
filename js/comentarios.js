"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let app = new Vue({
        el: "#section-comentarios",
        data: {
            title: "Comentarios",
            loading: false,
            comentarios: [],
            promedio: 0
        }, 

        methods: {
            agregarComentario: function (){
                app.loading = true;

                let data = {
                    texto:  document.querySelector("#comentario").value,
                    puntaje:  document.querySelector("#puntajeComentario").value,
                    idUsuario:  document.querySelector("#idUsuario").value,
                    idProducto:  document.querySelector("#idProducto").value
                }
                console.log(data);
            
                fetch("api/comentario", {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},       
                    body: JSON.stringify(data) 

                })
                .then(response => {
                    alert("se cargo");
                    getComentarios();
                })   
                .catch(error => console.log(error));
            },
            
            
            borrarComentario: function (event, id) {    
                console.log(id);
                fetch("api/comentario/"+ id, {
                    "method": "DELETE"

                }).then(response => {
                    if (response.ok){
                        getComentarios();
                        console.log("Borrado exitoso");
                    }
                })
                .catch(error => console.log(error));
            },

            getComentariosDesc: function (event){ 
                event.preventDefault();
                app.loading = true;
        
                let id= document.querySelector("#idProducto").value;
                console.log(id);
                fetch("api/comentariosDesc/"+id)
                .then(response => response.json())
                .then(comentarios => {
                    alert("hola");
                    app.comentarios= comentarios;
                    app.promedio= calcularPromedio(comentarios);
                    console.log(app.promedio);
                    app.loading = false;
                })
                .catch(error => console.log(error));
            },
            getComentariosAsc: function (event){ 
                event.preventDefault();
                app.loading = true;
        
                let id= document.querySelector("#idProducto").value;
                console.log(id);
                fetch("api/comentariosAsc/"+id)
                .then(response => response.json())
                .then(comentarios => {
                    alert("hola");
                    app.comentarios= comentarios;
                    app.promedio= calcularPromedio(comentarios);
                    console.log(app.promedio);
                    app.loading = false;
                })
                .catch(error => console.log(error));
            }
        }
    });
    // function getComentariosDesc (event){ 
    //     event.preventDefault();
    //     app.loading = true;

    //     let id= document.querySelector("#idProducto").value;
    //     console.log(id);
    //     fetch("api/comentariosDesc/"+id)
    //     .then(response => response.json())
    //     .then(comentarios => {
    //         alert("hola");
    //         app.comentarios= comentarios;
    //         app.promedio= calcularPromedio(comentarios);
    //         console.log(app.promedio);
    //         app.loading = false;
    //     })
    //     .catch(error => console.log(error));
    // }
    let btnObtenerComentariosDesc= document.querySelector("#btnObtenerComentariosDesc");
    // btnObtenerComentariosDesc.addEventListener('click', getComentariosDesc());

    function getComentarios (){ 
        app.loading = true;

        let id= document.querySelector("#idProducto").value;
        console.log(id);
        fetch("api/comentarios/"+id)
        .then(response => response.json())
        .then(comentarios => {
            alert("hola");
            app.comentarios= comentarios;
            app.promedio= calcularPromedio(comentarios);
            console.log(app.promedio);
            app.loading = false;
        })
        .catch(error => console.log(error));
    }
    getComentarios();

    let btnRefrescar= document.querySelector(".btnRefrescar");
    // btnRefrescar.addEventListener('click', getComentarios());
    
    function calcularPromedio(comentarios){
        let puntaje= 0;
        let contador= 0;
        let resultado= 0;

        for (let comentario of comentarios){
            puntaje += Number(comentario.puntaje);
            contador++;
        }
        puntaje = puntaje/contador;
        resultado= puntaje.toFixed(1);

        return resultado;
    }
});