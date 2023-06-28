<?php

    require_once("config/requisitos.php");

    $ficheiro = "contactos";

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

                <div class="col main-contactos-cabecalho" id="main-cabecalho">

                    <h2 class="main-contactos-cabecalho-titulo">Contactos</h2>

                    <h1 class="T1 main-contactos-cabecalho-subtitulo m-0">
                        Pode contactar-me através do e-mail ou telefone
                    </h1>

                </div>
 
            </div>


            <div class="row main-contactos-caixa d-flex justify-content-center">
            
                <div class="col-12 col-md-3 col-lg-2">

                    <h3 class="main-contactos-caixa-titulo">Telefone</h3>

                    <p class="m-0 main-contactos-caixa-paragrafo">
                        <?= $contactos["telefone"];?>
                    </p>

                </div>

                <div class="col-12 col-md-5 col-lg-4">

                    <h3 class="main-contactos-caixa-titulo main-contactos-espacamento">Morada</h3>

                    <p class="main-contactos-caixa-paragrafo m-0">
                        <?= $contactos["morada"];?>
                        <br>
                        <?= $contactos["codigo_postal"];?>
                    </p>

                </div>

                <div class="col-12 col-md-3 col-lg-2">

                    <h3 class="main-contactos-caixa-titulo main-contactos-espacamento">Email</h3>

                    <p class="m-0 main-contactos-caixa-paragrafo">
                        <?= $contactos["email"];?>
                    </p>

                </div>

            </div>

            <!--Div para linha separadora-->            
            <div class="row contactos-linha"></div>

            <div class="row main-contactos-caixa-inferior d-flex justify-content-center">

                <div class="col-12 col-md-5 col-lg-4">

                    <h3 class="main-contactos-caixa-titulo">Horário</h3>

                    <p class="main-contactos-caixa-paragrafo">
                        <?= $contactos["horario"];?>
                    </p>

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