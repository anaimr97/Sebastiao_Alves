<?php

    require_once("../../config/config.php");
    require_once("../../config/base_dados.php");
    require_once("../../config/funcoes.php");

    existeSessao();

    $contactos = selectSQLUnico("SELECT * FROM contactos");

    $form = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["codigo_postal"]) && isset($_GET["email"]) && isset($_GET["horario"]);

    if($form){

        $form = !empty($_GET["telefone"]) && !empty($_GET["morada"]) && !empty($_GET["codigo_postal"]) && !empty($_GET["email"]) && !empty($_GET["horario"]);

        if($form){

            $telefone = $_GET["telefone"];
            $morada = $_GET["morada"];
            $codigo_postal = $_GET["codigo_postal"];
            $email = $_GET["email"];
            $horario = $_GET["horario"];

            iduSQL("UPDATE contactos SET telefone='$telefone', morada='$morada', codigo_postal='$codigo_postal', email='$email', horario='$horario' WHERE id=1");

            $mensagem = "SUCESSO!";

        }
        else{
            $mensagem = "ERRO! PREENCHA TODOS OS CAMPOS";

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
                            <a class="inicio-header-link" href="../imprensa/listar.php">Imprensa</a>

                            <a class="inicio-header-link active" href="index.php">Contactos</a>

                            <a class="inicio-header-link" href="../redes/index.php">Redes</a>
                            <a class="inicio-header-link" href="../configuracoes/index.php">Configurações</a>

                            <a class="inicio-header-link saida" href="../../config/logout.php">Sair</a>

                        </div>

                    </div>

                </header>

                <main class="container inicio-main">

                    <div class="row">
                        <div class="col">
                        <h2 class="carouse-editar-titulo text-center">EDITAR CONTACTOS</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">

                            <?php if(empty($mensagem)):?>

                                <form action="" class="text-center">

                                    <label for="telefone" class="mb-2"><b>Telefone</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="telefone" style="width: 90%;" required="required" value="<?= $contactos["telefone"]; ?>">
                                    
                                    <br><br>                                    

                                    <label for="morada" class="mb-2"><b>Morada</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="morada" style="width: 90%;" required="required" value="<?= $contactos["morada"]; ?>">
                                    
                                    <br><br> 

                                    <label for="codigo_postal" class="mb-2"><b>Código Postal</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="codigo_postal" style="width: 90%;" required="required" value="<?= $contactos["codigo_postal"]; ?>">
                                    
                                    <br><br> 

                                    <label for="email" class="mb-2"><b>Email</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="email" style="width: 90%;" required="required" value="<?= $contactos["email"]; ?>">
                                    
                                    <br><br>

                                    <label for="horario" class="mb-2"><b>Horário</b></label>
                                    <br>
                                    <input class="input-editar" type="text" name="horario" style="width: 90%;" required="required" value="<?= $contactos["horario"]; ?>">
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