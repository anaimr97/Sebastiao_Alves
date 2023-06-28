<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();

    $form = isset($_GET["id"]);
    $ultimo_elemento = selectSQLUnico("SELECT * FROM carousel ORDER BY posicao DESC");
    $ultima_posicao = $ultimo_elemento["posicao"];

    if(isset($_GET["id"])){

        if(!empty($_GET["id"])){

            $id = $_GET["id"];     
        
            $banner = selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");

            if(empty($banner)){
                header("Location: listar.php");
                exit();
            }
        }
        else{
            header("Location: listar.php");
            exit();
        }

    }
    elseif(isset($_GET["apagar"])){

        if(!empty($_GET["apagar"])){

            $id = $_GET["apagar"];     
        
            $banner_apagar = selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");

            $posicao = $banner_apagar["posicao"];


            if(!empty($banner_apagar)){

                if($posicao != $ultima_posicao){

                    for($i = $posicao; $i <= $ultima_posicao; $i++){

                        $posicao_nova = $i-1;

                        iduSQL("UPDATE carousel SET posicao='$posicao_nova' WHERE posicao='$i'");

                    }
                }

                iduSQL("DELETE FROM carousel WHERE id='$id'");
               

                $mensagem = "SUCESSO! BANNER APAGADO";

            }
            else{
                $mensagem = "ERRO! BANNER NÃO CADASTRADO"; 
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

                            <a class="inicio-header-link active" href="listar.php">Carousel</a>

                            <a class="inicio-header-link" href="../home/index.php">Home</a>
                            <a class="inicio-header-link" href="../autor/index.php">Autor</a>
                            <a class="inicio-header-link" href="../livros/listar.php">Livros</a>
                            <a class="inicio-header-link" href="../destaques/index.php">Destaques</a>
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
                        <h2 class="carouse-editar-titulo text-center">APAGAR CAROUSEL</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 text-center">

                            <?php if($form):?>

                                <h5 class="mensagem">Tem certeza que desejas apagar o banner "<u><?= $banner["titulo"] ?></u>"?</h5>

                                <p class="mensagem-2 m-0">Atenção, esta ação não pode ser desfeita</p>

                                <br>

                                <div class="d-flex justify-content-center gap-4 mb-3">

                                    <form action="">

                                        <button class="index-header-login-botao mb-3" name="apagar" value="<?= $id; ?>">Sim</button>

                                    </form>

                                    <a href="listar.php">
                                        <button class="index-header-login-botao mb-3">Não</button>
                                    </a>

                                </div>

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