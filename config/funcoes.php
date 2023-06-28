<?php

function fazerLogin($login, $senha){

    date_default_timezone_set("Europe/Lisbon");

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE login='$login'");

    if(!empty($usuario)){
        if(password_verify($senha, $usuario["senha"])){
            session_start();
            $_SESSION["usuario"] = $usuario;
            
            $id = $usuario["id"];
            $data_atual = date("H:i:s - d/m/Y");
            iduSQL("UPDATE usuarios SET ultimo_acesso='$data_atual' WHERE id='$id'");

            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }

}

function mudarSenha($id_usuario, $senha_antiga, $senha_nova, $senha_nova_confirmacao){

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE id='$id_usuario'");

    if(password_verify($senha_antiga, $usuario["senha"])){

        if($senha_nova == $senha_nova_confirmacao){

            $senha_cif = password_hash($senha_nova, PASSWORD_DEFAULT);

            iduSQL("UPDATE usuarios SET senha='$senha_cif' WHERE id='$id_usuario'");

            return true;

        }
        else{

            return false;
        }
    }
    else{

        return false;
    }

}

function existeSessao(){

    session_start();

    if(empty($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
    }
    
}

function existeSessao2(){

    session_start();

    if(empty($_SESSION["usuario"])){
        header("Location: ../backoffice/index.php");
        exit();
    }
    
}

function existeSessaoIndex(){

    session_start();

    if(!empty($_SESSION["usuario"])){
        header("Location: ../backoffice/inicio.php");
        exit();
    }
    
}

function getLivroID($id){
    return selectSQLUnico("SELECT titulo, imagem, descricao FROM livros WHERE id='$id'");
}

function getUsuarioID($id){
    return selectSQLUnico("SELECT nome FROM usuarios WHERE id='$id'");
}

function saudacao(){

    date_default_timezone_set("Europe/Lisbon");

    $hora = date("H");

    if($hora >= 6 && $hora < 13){
        return "Bom dia";
    }
    elseif($hora >= 13 && $hora < 20){
        return "Boa tarde";
    }
    else{
        return "Boa noite";
    }
}

function mesEscrito($mes){

    switch($mes){
        case "1":
            return "Janeiro";
            break;
        case "2":
            return "Fevereiro";
            break;
        case "3":
            return "Março";
            break;
        case "4":
            return "Abril";
            break;
        case "5":
            return "Maio";
            break;
        case "6":
            return "Junho";
            break;
        case "7":
            return "Julho";
            break;
        case "8":
            return "Agosto";
            break;
        case "9":
            return "Setembro";
            break;
        case "10":
            return "Outubro";
            break;
        case "11":
            return "Novembro";
            break;
        case "12":
            return "Dezembro";
            break;

    }

    return "erro";
}

function escreverData($data){

    $componentes = explode("-", $data);
                    
    $ano = $componentes[0];
    $mes = $componentes[1];
    $dia = $componentes[2];

    return $dia . " " . mesEscrito($mes) . " " . $ano;

}

?>