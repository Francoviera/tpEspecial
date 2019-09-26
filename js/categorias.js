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
            let desc= this.getAttribute("data-desc");
            let tipo= this.getAttribute("data-tipo");
            let id= this.getAttribute("data-id");
            
            document.querySelector(".valueTipo").value= tipo;
            document.querySelector(".valueDesc").value= desc;
            document.querySelector(".valueId").value= id;
            
        })
    }
    btnAgregar.addEventListener("click", function(){
        divEditar.classList.toggle("d-none");
        divAgregar.classList.toggle("d-none");
    });
});