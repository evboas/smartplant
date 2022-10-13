const botaoMenuLateral = document.querySelector("#mobile__botao-menu");
const menuLateral = document.querySelector(".conteudo__barra-lateral");

botaoMenuLateral.addEventListener('click', ()=>{
    menuLateral.classList.toggle('hidden-mobile');
    console.log("clicado")
});