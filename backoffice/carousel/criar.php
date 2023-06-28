<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();
    date_default_timezone_set("Europe/Lisbon");

    //conseguir a ultima opcao só preciso quanndo é criado um nova banner
    $carousel = selectSQL("SELECT * FROM carousel ORDER BY posicao");
    $ultimo_elemento = selectSQLUnico("SELECT * FROM carousel ORDER BY posicao DESC");
    $proxima_posicao = ($ultimo_elemento["posicao"]) + 1;
    

    $form = isset($_GET["posicao"]) && isset($_GET["titulo"]) && isset($_GET["observacao"]) && isset($_GET["imagem-desktop"]) && isset($_GET["imagem-mobile"]) && isset($_GET["descricao"]) && isset($_GET["link-botao"]);

    if($form){

        $form = !empty($_GET["posicao"]) && !empty($_GET["titulo"]) && !empty($_GET["imagem-desktop"]) && !empty($_GET["imagem-mobile"]) && !empty($_GET["descricao"]) && !empty($_GET["link-botao"]);

        if($form){

            $resultado = selectSQLUnico("SELECT * FROM carousel WHERE titulo='$_GET[titulo]'");

            if(empty($resultado)){

                $posicao = $_GET["posicao"];
                $titulo = $_GET["titulo"];
                $observacao = $_GET["observacao"];
                $imagem_desktop = $_GET["imagem-desktop"];
                $imagem_mobile = $_GET["imagem-mobile"];
                $descricao = $_GET["descricao"];
                $link_botao = $_GET["link-botao"];
                $data_atual = date("H:i:s - d/m/Y");
                $ultimo_usuario_editar = $_SESSION["usuario"]["id"]; 

                // echo $ultimo_usuario_editar;

                if($posicao <= $proxima_posicao){
                    //ver se é a ultima posicao
                    if($posicao != $proxima_posicao){

                        //é preciso atualizar os alguns que vao passar para a frente
                        $ultima_posicao = ($ultimo_elemento["posicao"]);

                        for($i = $ultima_posicao; $i >= $posicao; $i--){

                            $posicao_nova = $i + 1;

                            iduSQL("UPDATE carousel SET posicao='$posicao_nova' WHERE posicao='$i'");
                            //pensar se atualizo tambem a hora

                        }
                    }

                    iduSQL("INSERT INTO carousel (posicao, titulo, observacao, imagem_desktop, imagem_mobile, descricao, link_botao, ultima_atualizacao, id_usuario_editou) VALUE ('$posicao', '$titulo', '$observacao','$imagem_desktop', '$imagem_mobile', '$descricao', '$link_botao', '$data_atual', '$ultimo_usuario_editar')");


                    $mensagem = "SUCESSO! BANNER ADICIONADO";
                }
                else{
                    $mensagem = "ERRO! TENTE NOVAMENTE";
                }

                
            }
            else{
                $mensagem = "ERRO! JÁ EXISTE UM BANNER COM O MESMO TÍTULO";
            }

            
        }
        else{
            header("Location: listar.php");
            exit();
        }

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
                        <h2 class="carouse-editar-titulo text-center">CRIAR CAROUSEL</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">

                            <?php if(empty($mensagem)):?>

                                <form action="" class="text-center">

                                    <label for="posicao"><b>Posição:</b></label>
                                    <br>
                                    <select name="posicao">

                                        <?php foreach($carousel as $c): ?>

                                            <option value="<?= $c["posicao"]; ?>">
                                                <?= $c["posicao"]; ?>
                                            </option>

                                        <?php endforeach; ?>

                                        <!-- so se for para criaar que se precisa de uma nova posicao -->
                                        <option value="<?=$proxima_posicao?>" selected><?=$proxima_posicao?></option>
                                    </select>

                                    <br><br>

                                    <label for="titulo"><b>Título do Banner:</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="titulo" style="width: 90%;" required="required">
                                    
                                    <br><br>

                                    <label for="titulo"><b>Observação (facultativo):</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="observacao" style="width: 90%;">
                                    
                                    <br><br>

                                    <label for="imagem-desktop"><b>Link da imagem para Desktop:</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="imagem-desktop" style="width: 84%;" required="required">
                                    <button type="button" onclick="abrirPopUp()" title="Upload Imagem">

                                        <img class="carousel-listar-icon" src="../../public/Imagens/Backoffice/icon-upload.svg" alt="icon upload">

                                    </button>
                                    <br><br>

                                    <label for="imagem-mobile"><b>Link da imagem para Mobile:</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="imagem-mobile" style="width: 84%;" required="required">
                                    
                                    <button type="button" onclick="abrirPopUp()"  title="Upload Imagem">

                                        <img class="carousel-listar-icon" src="../../public/Imagens/Backoffice/icon-upload.svg" alt="icon upload">

                                    </button>
                                    <br><br>
                                    

                                    <label for="descricao"><b>Descrição do Banner:</b></label>
                                    <textarea class="input-editar" name="descricao" ></textarea>

                                    <br><br>

                                    <label for="link-botao"><b>Link do botão "Saber Mais":</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="link-botao" style="width: 90%;" required="required">
                                    <br>
                                    
                                    <input class="index-header-login-botao mb-4" type="submit" value="Criar">

                                </form>

                            <?php else: ?>

                                <div class="text-center">

                                    <h2 class="mensagem"><?=$mensagem;?></h2>

                                    <br>

                                    <a href="criar.php">
                                        <button class="index-header-login-botao mb-3">Criar novo banner</button>
                                    </a>

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