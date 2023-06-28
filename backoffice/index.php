<?php

    require_once("../config/funcoes.php");

    $form = isset($_GET["login"]);

    existeSessaoIndex();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves - BackOffice</title>

        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <!--CSS Local-->
        <link rel="stylesheet" href="../public/CSS/estilo_backoffice.css">

    </head>

    <body class="d-flex align-items-center justify-content-center">

        <header class="container p-0 d-flex justify-content-center flex-column index-header">

            <div class="row m-0 text-center index-header-caixa">

                <div class="col-12 p-0">

                    <h3 class="m-0 index-header-caixa-titulo-1">SEBASTIÃO ALVES</h3>

                    <hr class="mx-auto my-0 index-header-caixa-linha">

                    <h1 class="m-0 index-header-caixa-titulo-2">BACKOFFICE</h1>
                </div>

            </div>

            <div class="row m-0 text-center index-header-login">

                <div class="col-12 p-0">

                    <h3 class="">LOGIN</h3>

                    <?php if($form): ?>

                        <p class="text-danger index-header-login-invalido">Login Inválido</p>

                    <?php endif; ?>

                    <form action="../config/login.php" method="POST" class="text-center">

                        <input type="text" name="login" placeholder="Usuário" required="required">

                        <br><br>

                        <input type="password" name="senha" placeholder="Senha" required="required">

                        <br><br>

                        <input class="index-header-login-botao" type="submit" value="Entrar">

                    </form>
                </div>
            </div>
            
        </header>



        <!--JavaScript Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
    </body>
</html>