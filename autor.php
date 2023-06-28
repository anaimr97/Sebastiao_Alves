<?php

    require_once("config/requisitos.php");

    $ficheiro = "autor";

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

                <div class="col main-autor-bem-vindo" id="main-cabecalho">

                    <h2 class="main-autor-bem-vindo-titulo">Autor</h2>

                    <h1 class="T1 main-autor-bem-vindo-subtitulo m-0">Sobre Mim</h1>

                </div>
 
            </div>


            <div class="row main-autor-texto-caixa">

                <div class="col-12 d-flex justify-content-center p-0">

                    <img src="<?= $autor["imagem_autor"];?>" alt="Fotografia de Sebastião Alves">

                </div>

                <div class="col-12 p-0 main-autor-texto-paragrafo">


                    <?php if(strlen($autor["texto_autor"]) > 1000):?>

                        <!-- texto curto só visivel ate SM -->
                        <div class="P d-block d-sm-none" id="autor-texto-curto">
                            <?= substr($autor["texto_autor"], 0, 1000);?>...
                        </div> 

                        <!-- texto longo só visivel a partir do SM e quando se clica no botao-->
                        <div class="P d-none d-sm-block" id="texto-autor-completo">
                            <?= $autor["texto_autor"];?>
                        </div>  

                        <div onclick="verMaisAutor()" class="d-flex justify-content-center d-md-none" id="autor-botao-ver-mais">

                            <button class="main-autor-texto-botao-mobile mx-auto"></button>

                        </div>

                    <?php else: ?>

                        <div class="P">
                            <?= $autor["texto_autor"];?>
                        </div>  

                    <?php endif; ?>

                    <div onclick="history.back()" class="d-flex justify-content-center justify-content-md-start">

                        <button class="main-autor-texto-botao"></button>

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