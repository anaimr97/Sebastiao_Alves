<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();

    $noticias = selectSQL("SELECT * FROM imprensa ORDER BY data_publicacao DESC");


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
        <link rel="stylesheet" href="../../public/CSS/estilo_backoffice.css">

        <!--JavaScrip Local-->
        <script src="../../public/JavaScript/main-backoffice.js"></script>

    </head>


    <body>

        <div class="margem content">

            <div class="sombra">

                <header class="container inicio-header-caixa">

                    <div class="row header-data m-0">

                        <div class="col-12 d-flex justify-content-between p-0">
                            <div>
                                <img class="icon-data" src="../../public/Imagens/Backoffice/icon-calendar.png" alt="icon-calendario">
                                <span id="calendario" class="texto-data"></span>
                            </div>
                            <div>
                                <img class="icon-data" src="../../public/Imagens/Backoffice/icon-relogio.png" alt="icon-relogio">
                                <span id="relogio" class="texto-data"></span>
                            </div>
                        </div>

                    </div>

                    <hr class="linha-header">
                    
                    <div class="row m-0 text-center">

                        <div class="col-12 p-0">

                            <h3 class="m-0 index-header-caixa-titulo-1">SEBASTIÃO ALVES</h3>

                            <hr class="mx-auto my-0 index-header-caixa-linha">

                            <h1 class="m-0 index-header-caixa-titulo-2">BACKOFFICE</h1>
                        </div>

                    </div>

                    <hr class="linha-header">

                    <div class="row inicio-header-navbar">

                        <div class="col-auto mx-auto">

                            <a class="inicio-header-link" href="../inicio.php">Início</a>
                            <a class="inicio-header-link" href="../carousel/listar.php">Carousel</a>
                            <a class="inicio-header-link" href="../home/index.php">Home</a>
                            <a class="inicio-header-link" href="../autor/index.php">Autor</a>
                            <a class="inicio-header-link" href="../livros/listar.php">Livros</a>
                            <a class="inicio-header-link" href="../destaques/index.php">Destaques</a>

                            <a class="inicio-header-link active" href="listar.php">Imprensa</a>

                            <a class="inicio-header-link" href="../contactos/index.php">Contactos</a>
                            <a class="inicio-header-link" href="../redes/index.php">Redes</a>
                            <a class="inicio-header-link" href="../configuracoes/index.php">Configurações</a>
                            <a class="inicio-header-link saida" href="../../config/logout.php">Sair</a>
                            
                        </div>

                    </div>

                </header>

                <main class="container inicio-main">

                    <div class="row">
                        <div class="col">
                        <h2 class="carouse-editar-titulo text-center">IMPRENSA - LISTA</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 d-flex justify-content-center">

                            <table>

                                <tr>
                                    <th>IMAGEM</th>
                                    <th>TÍTULO</th>
                                    <th>TEXTO</th>
                                    <th>DATA PUBLICAÇÃO</th>
                                    <th>ACÇÕES</th>
                                </tr>

                                <?php foreach($noticias as $n): ?>

                                    <tr>                                        
                                        <td>
                                            <?php if(!empty($n["imagem"])):?>
                                                <img class="carousel-listar-imagem-desktop" src="<?= $n["imagem"]; ?>" alt="">
                                            <?php endif;?>
                                        </td>

                                        <td><b><?= $n["titulo"]; ?></b></td>

                                        <td>
                                            <?php if(!empty($n["texto"])):?>
                                                <?= substr($n["texto"], 0, 50);?><?= (strlen($n["texto"]) > 50) ? "..." : "" ?>
                                            <?php else:?>
                                                ---
                                            <?php endif;?>
                                        </td>

                                        <td><?= escreverData($n["data_publicacao"]); ?></td>

                                        <td>
                                            <a href="editar.php?id=<?= $n["id"]; ?>" title="Editar">

                                                <img class="carousel-listar-icon" src="../../public/Imagens/Backoffice/icon-editar.svg" alt="icon editar">

                                            </a>

                                            <a href="apagar.php?id=<?= $n["id"]; ?>" title="Apagar">

                                                <img class="carousel-listar-icon" src="../../public/Imagens/Backoffice/icon-apagar.svg" alt="icon apagar">

                                            </a>


                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </table>



                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col">

                            <a href="criar.php">
                                <button class="index-header-login-botao mb-4">Nova Postagem</button>
                            </a>

                        </div>

                    </div>

                </main>

            </div>

        </div>

        <footer class="container-fluid p-0 footer">

            <div class="row m-0">

                <div class="col-12 text-center p-0">Ana Isabel Rocha © 2023</div>

            </div>

        </footer>
    
        <!--JavaScript Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
    </body>
</html>