fazerSroll();
function mudarIcon(){

    let icon = document.getElementById("navbar-icon");

    if(icon.getAttribute("src") == 'public/Imagens/Mobile/menu.svg'){

        icon.setAttribute("src", "public/Imagens/Mobile/fechar.svg");
        icon.setAttribute("alt", "icon-menu-fechar");
    }
    else{

        icon.setAttribute("src", "public/Imagens/Mobile/menu.svg");
        icon.setAttribute("alt", "icon-menu");

    }
}

function verMaisAutor(){

    //remover o texto curto e o botao
    document.getElementById("autor-texto-curto").remove();
    document.getElementById("autor-botao-ver-mais").remove();

    //remover as classes desnecessárias
    document.getElementById("texto-autor-completo").classList.remove('d-none');
    document.getElementById("texto-autor-completo").classList.remove('d-sm-block');

}

function aguardar(){

    setTimeout(abrirDropdown, 800);
}

function abrirDropdown(){
    $("#dropdown-livros").dropdown("toggle");
}

function fazerSroll(){
    document.getElementById("main-cabecalho").scrollIntoView();
}
