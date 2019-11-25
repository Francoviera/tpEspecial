"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let app = new Vue({
        el: "#section-comentarios",
        data: {
            title: "Comentarios",
            loading: false,
            comentarios: [] // es como el $this->smarty->assign("tareas", $tareas);
        }
    }), 

    methods: {

    }
});
    let btnRefrescar= document.querySelector(".btnRefrescar");
    btnRefrescar.addEventListener('click', getComentarios());

    function getComentarios() {
        // inicia la carga
        app.loading = true;
        
        let id= document.querySelector("#idProducto").value;
        console.log(id);
        fetch("api/comentarios/"+id)
        .then(response => response.json())
        .then(comentarios => {
            alert("hola");
            app.comentarios= comentarios;
            app.loading = false;
        })
        .catch(error => console.log(error));
    }
    getComentarios();

    function agregarComentario(e) {
        e.preventDefault();
        // inicia la carga
        app.loading = true;

        let data = {
            texto:  document.querySelector("#comentario").value,
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
            getComentarios();
        })   
        .catch(error => console.log(error));
    }
    let btnAgregarComentario= document.querySelector("#btnAgregarComentario");
    btnAgregarComentario.addEventListener('click', agregarComentario(event));
    

    function borrarComentario() {
        // inicia la carga
        app.loading = true;

        let id=  document.querySelector("input[name=descripcion]").value;
    
        fetch("api/borrar/comentario/"+ id)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios  = comentarios;
            //app.loading = false;
        })
        .catch(error => console.log(error));
    }
});