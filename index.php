<?php

    require_once("config/requisitos.php");

    $ficheiro = "index";

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

            <div class="row main-bem-vindo-caixa d-flex flex-column flex-md-row">

                <div class="col-auto mx-auto mx-md-0 main-bem-vindo-div-imagem">

                    <img class="main-bem-vindo-imagem" src="<?= $home["imagem_autor"];?>" alt="Fotografia de Sebastião Alves">
                
                </div>

                <div class="col main-bem-vindo-texto">

                    <h1 class="T1 main-boas-vindas-texto-titulo">Bem vindo ao meu Website</h1>

                    <div class="P main-boas-vindas-texto-paragrafo">

                        <?= substr($autor["texto_autor"], 0, 1000); ?> <?= (strlen($autor["texto_autor"]) > 1000) ? "..." : ""; ?>

                    </div>

                    <a href="autor.php" class="d-flex justify-content-center justify-content-md-end">

                        <div class="main-boas-vindas-texto-botao"></div>

                    </a>

                </div>
            </div>


            <div class="row main-ultimos-livros-caixa">

                <div class="col p-0">
                    
                    <h1 class="T1 m-0">Últimos Livros</h1>

                    <div class="P main-ultimos-livros-paragrafo">
                        <?= $home["texto_ultimos_livros"];?>
                    </div>

                </div>

            </div>

            <div class="row main-destaques-livros d-flex <?= (($destaques[0]["estado"] == 0) || ($destaques[1]["estado"] == 0) || ($destaques[2]["estado"] == 0)) ? "justify-content-center gap-5" :  "justify-content-between" ?>">

                <?php foreach($destaques as $d):?>

                    <?php if($d["estado"] == 1): ?>

                        <?php $livro = getLivroID($d["id_livro"]); ?>

                        <div class="col-auto card main-destaques-livros-card p-0">

                            <img src="<?= $livro["imagem"]; ?>" class="card-img-top main-destaques-livros-card-imagem" alt="Capa do livro <?= $livro["titulo"]; ?>">

                            <div class="card-body main-destaques-livros-card-info">
                                
                                <h1 class="card-title main-destaques-livros-card-info-titulo"><?= $livro["titulo"]; ?></h1>

                                <h3 class="m-0 main-destaques-livros-card-info-categoria"><?= $d["observacao"];?></h3>

                                <div class="card-text P main-destaques-livros-card-info-paragrafo">
                                    <?= substr($livro["descricao"], 0, 200); ?> <?= (strlen($livro["descricao"]) > 200) ? "..." : ""; ?>
                                </div>
                                
                                <a href="livros.php?livro=<?= $d["id_livro"];?>" class="d-flex justify-content-end">

                                    <div class="main-destaques-livros-card-info-botao"></div>

                                </a>
                                
                            </div>

                        </div>

                    <?php endif; ?>

                <?php endforeach;?>

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