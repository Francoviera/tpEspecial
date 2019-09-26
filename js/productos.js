"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let divAgregar= document.querySelector(".formAgregar");
    let divEditar= document.querySelector(".formEditar");
    let btnAgregar= document.querySelector(".btnAgregar");
    let btnEdits= document.querySelectorAll(".btnEdit");


    for(let btnEdit of btnEdits){
        btnEdit.addEventListener("click", function(){
            divEditar.classList.remove("d-none");
            divAgregar.classList.add("d-none");   
            let nombre= this.getAttribute("data-nombre");
            let cantidad= this.getAttribute("data-cantidad");
            let precio= this.getAttribute("data-precio");
            let categoria= this.getAttribute("data-categoria");
            let id= this.getAttribute("data-id");
            
            document.querySelector(".valueNombre").value= nombre;
            document.querySelector(".valueCantidad").value= cantidad;
            document.querySelector(".valuePrecio").value= precio;
            document.querySelector(".valueCategoria").value= categoria;
            document.querySelector(".valueId").value= id;
            
        })
    }
    btnAgregar.addEventListener("click", function(){
        divEditar.classList.toggle("d-none");
        divAgregar.classList.toggle("d-none");
    });
});