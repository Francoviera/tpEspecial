"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let divAgregar= document.querySelector(".agregar");
    let divEditar= document.querySelector(".editar");
    let btnAgregar= document.querySelector(".btnAgregar");
    let btnEditar= document.querySelector(".btnEditar");
    let btnEdits= document.querySelectorAll(".btnEdit");
    let actionForm= document.querySelector(".actionForm");

    for(let btnEdit of btnEdits){
        btnEdit.addEventListener("click", function(){
            divEditar.classList.toggle("d-none");
            divAgregar.classList.toggle("d-none");                
        })
    }
    btnEditar.addEventListener("click", function(){
        divEditar.classList.toggle("d-none");
        divAgregar.classList.toggle("d-none");
    });
    btnAgregar.addEventListener("click", function(){
        divEditar.classList.toggle("d-none");
        divAgregar.classList.toggle("d-none");
    });
});