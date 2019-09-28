"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let btnSingup= document.querySelector(".btnSingup");
    let divSingup= document.querySelector(".btnSingup");

    btnSingup.addEventListener("click", function(){
        document.querySelector(".divSingup").classList.toggle("d-none");
        document.querySelector(".divLogin").classList.toggle("d-none");
    })
})