<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();

    $livros = selectSQL("SELECT * FROM livros");
    $destaque = selectSQLUnico("SELECT * FROM destaques WHERE id='$_GET[id]'");


    // $destaque_especifico;
    $form = false;

    if(isset($_GET["id"])){

        $id = $_GET["id"];

        if(!empty($_GET["id"]) || $id < 1 || $id >3 ){

            // $destaque_especifico = selectSQLUnico("SELECT * FROM carousel WHERE id='$_GET[id]'");

            $form = isset($_GET["id"]) && isset($_GET["livro"]) && isset($_GET["observacao"]) && isset($_GET["estado"]);

            if($form){

                $form = !empty($_GET["id"]) && !empty($_GET["livro"]) && !empty($_GET["estado"]);

                if($form){

                    $livro = $_GET["livro"];
                    $observacao = $_GET["observacao"];
                    $estado = $_GET["estado"];
                    if($_GET["estado"] == "true"){
                        $estado = 1;
                    }
                    else{
                        $estado = 0;
                    }

                    if($id >= 1 && $id <= 3){

                        $destaque_especifico = selectSQLUnico("SELECT * FROM destaques WHERE id='$id'");

                        // || (()
                        if(empty($destaque_especifico)){

                            iduSQL("UPDATE destaques SET id_livro='$livro', observacao='$observacao', estado='$estado' WHERE id='$_GET[id]'");

                            $mensagem = "SUCESSO!";
                            
                        }
                        elseif(($destaque_especifico["id_livro"]) == $livro){
                            iduSQL("UPDATE destaques SET id_livro='$livro', observacao='$observacao', estado='$estado' WHERE id='$_GET[id]'");

                            $mensagem = "SUCESSO!";
                        }
                        else{
                            $mensagem = "ERRO! JÁ TEM UM DESTAQUE COM ESSE LIVRO!";
                            
                        }
                        
                    }
                    else{
                        $mensagem = "ERRO! DESTAQUE NÃO ENCONTRADO";
                    }

                }
                else{
                    
                    header("Location: index.php");
                    exit();
                }

                
            }
            else{
                if(empty($destaque)){
                    header("Location: index.php");
                    exit();
                }
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

                            <a class="inicio-header-link active" href="index.php">Destaques</a>

                            <a class="inicio-header-link" href="../imprensa/listar.php">Imprensa</a>
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
                        <h2 class="carouse-editar-titulo text-center">EDITAR DESTAQUES</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">

                            <?php if(!$form):?>

                                <form action="" class="text-center">

                                    <input type="hidden" name="id" value="<?= $destaque["id"]; ?>">

                                    <label for="titulo"><b>Livro de destaque</b></label>
                                    <br>
                                    
                                    <select name="livro" id="" required="required">

                                        <?php foreach($livros as $l): ?>

                                            <option value="<?= $l["id"]; ?>" <?= (($l["id"]) == ($destaque["id_livro"])) ? "selected" : "" ?>>
                                                <?= $l["titulo"]; ?>
                                            </option>

                                        <?php endforeach; ?>
                                        
                                    </select>
                                    
                                    <br><br>

                                    <label for="titulo"><b>Observação (facultativo):</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="observacao" style="width: 90%;" value="<?= $destaque["observacao"]; ?>">
                                    
                                    <br><br>

                                    <label for="estado"><b>Estado:</b></label>
                                    <br>

                                    <select name="estado">
                                        <option <?= ($destaque["estado"] == 1) ? "selected" : "" ?> value="true">Ativo</option>
                                        <option <?= ($destaque["estado"] == 1) ? "" : "selected" ?> value="false">Desativo</option>
                                    </select>    
                                    <br>                     

                                    <input class="index-header-login-botao mb-4" type="submit" value="Editar">

                                </form>

                            <?php else: ?>

                                <div class="text-center">

                                    <h2 class="mensagem"><?=$mensagem;?></h2>

                                    <br>

                                    <a href="index.php">
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