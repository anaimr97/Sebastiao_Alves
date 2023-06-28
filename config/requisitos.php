<?php

    require_once("config.php");
    require_once("base_dados.php");
    require_once("funcoes.php");


    $contactos = selectSQLUnico("SELECT * FROM contactos");
    $redes = selectSQLUnico("SELECT * FROM redes");
    $home = selectSQLUnico("SELECT * FROM home");
    $autor = selectSQLUnico("SELECT * FROM autor");
    

    $livros = selectSQL("SELECT * FROM livros");
    $carousel = selectSQL("SELECT * FROM carousel ORDER BY posicao");
    $destaques = selectSQL("SELECT * FROM destaques");
    // $imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC");

?>