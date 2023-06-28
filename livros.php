<?php

    require_once("config/requisitos.php");

    $ficheiro = "livros";

    if(isset($_GET["livro"])){

        if(!empty($_GET["livro"])){

            $livro_especifico = selectSQLUnico("SELECT * FROM livros WHERE id='$_GET[livro]'");

            if(empty($livro_especifico)){
                header("Location: index.php");
                exit();

            }

        }
        else{
            header("Location: index.php");
            exit();
        }
        
    }
    else{
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves</title>

        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
        <!--CSS Local-->
        <link rel="stylesheet" href="public/CSS/estilo_header.css">
        <link rel="stylesheet" href="public/CSS/estilo_main.css">
        <link rel="stylesheet" href="public/CSS/estilo_footer.css">

        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    </head>

    <body>

        <!--HEADER-->
        <?php require_once("templates/header.php"); ?>

        <!--MAIN-->
        <main class="container-fluid p-0">

            <div class="row m-0">              

                <div class="col main-livro-cabecalho" id="main-cabecalho">

                    <h2 class="main-livro-cabecalho-titulo">Livro</h2>

                    <h1 class="T1 main-livro-cabecalho-subtitulo m-0"><?= $livro_especifico["titulo"]; ?></h1>

                </div>
 
            </div>


            <div class="row main-livro-texto">

                <div class="col-12 p-0 d-flex flex-column d-md-block">

                    <img class="main-livro-texto-imagem align-self-center" src="<?= $livro_especifico["imagem"]; ?>" alt="Capa do livro <?= $livro_especifico["titulo"]; ?>">

                    <div class="P">
                        <?= $livro_especifico["descricao"]; ?>
                    </div>
                    
                </div>

            </div>

            <div class="row main-livro-texto-detalhes">

                <div class="col p-0">

                    <?php if(!empty($livro_especifico["detalhes"])):?>

                        <div class="P m-0">
                            <?= $livro_especifico["detalhes"]; ?>
                        </div>

                    <?php endif;?>

                    <div onclick="history.back()" class="d-flex justify-content-center justify-content-md-end">

                        <button class="main-livro-texto-botao"></button>

                    </div>
                    

                </div>

                
            </div>

        </main>

        <!--FOOTER-->
        <?php require_once("templates/footer.php"); ?>
        

        <!--JavaScript Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <!--JavaScrip Local-->
        <script src="public/JavaScript/main.js"></script>
        
    </body>
</html>