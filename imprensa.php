<?php

    require_once("config/requisitos.php");

    $ficheiro = "imprensa";

    $pagina = (isset($_GET["pagina"])) ? intval($_GET["pagina"]) : 1;
    if($pagina <= 0){
        header("Location: imprensa.php");
        exit();
    }

    $total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM imprensa");
    $total_elementos = $total_elementos["total"];

    $elementos_por_pagina = 2;

    $total_paginas = ceil($total_elementos / $elementos_por_pagina);
    if($pagina > $total_paginas){
        $erro = "Página não existe"; 
    }

    $total_a_saltar = (($pagina - 1) * $elementos_por_pagina);
    $imprensa = selectSQL("SELECT * FROM imprensa ORDER BY data_publicacao DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");


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

                <div class="col main-imprensa-cabecalho" id="main-cabecalho">

                    <h2 class="main-imprensa-cabecalho-titulo">Imprensa</h2>

                    <h1 class="T1 main-imprensa-cabecalho-subtitulo m-0">
                        Últimas Notícias
                    </h1>

                </div>
 
            </div>

            <?php if(empty($erro)): ?>

                <?php foreach($imprensa as $chave => $i):?>

                    <?php if($chave == 1):?>
                        <div class="row m-0 main-imprensa-linha"></div>
                    <?php endif; ?>

                    <div class="row main-imprensa-caixa">

                        <div class="col-12 p-0 T1"><?= $i["titulo"]; ?></div>

                        <div class="col-12 p-0 main-imprensa-caixa-linha"></div>

                        <div class="col-12 p-0 main-imprensa-caixa-data">Publicado a <?= escreverData($i["data_publicacao"]); ?></div>

                        <?php if(!empty($i["imagem"])):?>
                            <div class="col-12 p-0 d-flex justify-content-center">

                                <img class="main-imprensa-caixa-imagem" src="<?= $i["imagem"]; ?>" alt="Lançamento livro O Velho que pensava que fugia">

                            </div>
                        <?php endif; ?>


                        <?php if(!empty($i["texto"])):?>
                            <div class="col-12 p-0 P main-imprensa-caixa-paragrafo">
                                <?= $i["texto"]; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endforeach;?>


                <div class="row d-flex justify-content-center main-imprensa-paginacao">

                    <form action="" class="d-flex align-items-start justify-content-center">

                        <button name="pagina" value="<?= ($pagina > 1) ? ($pagina-1) : 1;?>">
                            <div class="col-auto main-imprensa-paginacao-esquerda"></div>
                        </button>

                        <?php for($i=1; $i <= $total_paginas; $i++):?>

                            <button class="col-auto main-imprensa-paginacao-numeros <?= ($i == $pagina) ? "active" : ""; ?>"  name="pagina" value="<?= $i; ?>"><?= $i; ?></button>

                        <?php endfor;?>

                        <button name="pagina" value="<?= ($pagina < $total_paginas) ? ($pagina+1) : $total_paginas;?>">
                            <div class="col-auto main-imprensa-paginacao-direita"></div>   
                        </button>
                    </form>

                </div> 

            <?php else: ?>

                <div class="text-center main-imprensa-erro">

                    <h1 class="main-imprensa-erro-texto m-0"><?= $erro; ?></h1>

                    <div onclick="history.back()" class="d-flex justify-content-center">

                        <button class="main-imprensa-texto-botao"></button>

                    </div>

                </div>

            <?php endif; ?>

            
        </main>

        <!--FOOTER-->
        <?php require_once("templates/footer.php"); ?>

        <!--JavaScript Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <!--JavaScrip Local-->
        <script src="public/JavaScript/main.js"></script>
        
    </body>
</html>