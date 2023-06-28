<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();

    $post_especifico;
    $form = false;
    date_default_timezone_set("Europe/Lisbon");

    if(isset($_GET["id"])){

        if(!empty($_GET["id"])){

            $post_especifico = selectSQLUnico("SELECT * FROM imprensa WHERE id='$_GET[id]'");

            $form = isset($_GET["id"]) && isset($_GET["titulo"]) && isset($_GET["data"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);

            if($form){

                $form = !empty($_GET["id"]) && !empty($_GET["titulo"]) && !empty($_GET["data"]);

                if($form){

                    $titulo = $_GET["titulo"];
                    $imagem = $_GET["imagem"];
                    $texto = $_GET["texto"];

                    $data = $_GET["data"];

                    iduSQL("UPDATE imprensa SET titulo='$titulo', data_publicacao='$data', imagem='$imagem', texto='$texto' WHERE id='$_GET[id]'");

                    $mensagem = "SUCESSO!";

                }
                else{
                    $mensagem = "ERRO! TENTE NOVAMENTE";
                }

                
            }
            else{
                if(empty($post_especifico)){
                    header("Location: listar.php");
                    exit();
                }
            }

        }
        else{
            header("Location: listar.php");
            exit();
        }

        

    }
    else{
        header("Location: listar.php");
        exit();
    }


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

        <!--Editor de Texto-->
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

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
                        <h2 class="carouse-editar-titulo text-center">IMPRENSA - EDITAR</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">

                            <?php if(!$form):?>

                                <form action="" class="text-center">

                                    <input type="hidden" name="id" value="<?= $post_especifico["id"]; ?>">

                                    <label for="titulo"><b>Título do Post:</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="titulo" style="width: 90%;" required="required" value="<?= $post_especifico["titulo"]; ?>">
                                    
                                    <br><br>

                                    <label for="data"><b>Data de Publicação: </b></label>
                                    <br>
                                    <input class="input-editar" type="date" name="data" style="width: 90%;" required="required" value="<?= $post_especifico["data_publicacao"]; ?>">
                                    
                                    <br><br>

                                    <label for="imagem"><b>Link da imagem do post:</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="imagem" style="width: 85%;" value="<?= $post_especifico["imagem"]; ?>">
                                    <button type="button" onclick="abrirPopUp()" title="Upload Imagem">

                                        <img class="carousel-listar-icon" src="../../public/Imagens/Backoffice/icon-upload.svg" alt="icon upload">

                                    </button>
                                    <br><br>
                                    

                                    <label for="texto" class="mb-2"><b>Texto do post:</b></label>
                                    <textarea id="editor" class="input-editar" name="texto" ><?= $post_especifico["texto"]; ?></textarea>

                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>                                                                   

                                    <input class="index-header-login-botao mb-4" type="submit" value="Editar">

                                </form>

                            <?php else: ?>

                                <div class="text-center">

                                    <h2 class="mensagem"><?=$mensagem;?></h2>

                                    <br>

                                    <a href="listar.php">
                                        <button class="index-header-login-botao mb-3">Voltar atrás</button>
                                    </a>

                                </div>


                            <?php endif;?>



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