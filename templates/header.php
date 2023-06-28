
<header class="container-fluid p-0">

    <!--Div para topo-->
    <div class="header-topo w-100">

        <!--Div para titulo-->
        <div class="row d-flex justify-content-center header-topo-titulo m-0">

            <div class="col">Sebastião Alves</div>

            <!--Botão da nav quando colapsa-->
            <button class="d-block d-md-none navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="public/Imagens/Mobile/menu.svg" alt="icon-menu" id="navbar-icon" onclick="mudarIcon()">
            </button>

        </div>

        <!--Div para linha separadora-->            
        <div class="row header-topo-linha"></div>

        <!--Div para navbar-->
        <div class="row m-0">

            <div class="col-12 p-0 d-flex justify-content-center">

                <nav class="navbar navbar-expand-md p-0">

                    <div class="container-fluid p-0">

                        <!--Link da Navbar-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link <?= ($ficheiro == "index") ? "active" : ""?> header-topo-navbar-menu" <?= ($ficheiro == "index") ? "aria-current='page'" : ""?> href="index.php">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?= ($ficheiro == "autor") ? "active" : ""?> header-topo-navbar-menu" <?= ($ficheiro == "autor") ? "aria-current='page'" : ""?> href="autor.php">Autor</a>
                                </li>

                                <!--Dropdown dos livros-->
                                <li class="nav-item dropdown">
                                    <a id="dropdown-livros" class="nav-link <?= ($ficheiro == "livros") ? "active" : ""?> header-topo-navbar-menu" <?= ($ficheiro == "livros") ? "aria-current='page'" : ""?> href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Livros
                                    </a>
                                    <ul class="dropdown-menu header-topo-navbar-dropdown">

                                        <?php foreach($livros as $l):?>
                                            <li><a class="dropdown-item header-topo-navbar-submenu <?= ($ficheiro == "livros" && $l['id'] == ($_GET["livro"])) ? "active teste" : "" ?>" href="livros.php?livro=<?= $l["id"];?>"><?= $l["titulo"];?></a></li>
                                        <?php endforeach;?>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?= ($ficheiro == "imprensa") ? "active" : ""?> header-topo-navbar-menu" <?= ($ficheiro == "imprensa") ? "aria-current='page'" : ""?> href="imprensa.php">Imprensa</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?= ($ficheiro == "contactos") ? "active" : ""?> header-topo-navbar-menu" <?= ($ficheiro == "contactos") ? "aria-current='page'" : ""?> href="contactos.php">Contactos</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

        </div>

    </div>

    <!--Div para carousel-->
    <div class="row m-0">

        <div class="col-12 p-0">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <!--Slides-->
                <div class="carousel-inner">

                    <?php foreach($carousel as $chave => $c):?>

                        <div class="carousel-item <?= ($chave ==  0) ? "active" : ""; ?>">
                        
                            <!--Imagem Desktop-->
                            <img src="<?= $c["imagem_desktop"];?>" class="d-none d-sm-block w-100 header-carousel-img" alt="Capa do livro <?= $c["titulo"];?>">
                            <!--Imagem Mobile-->
                            <img src="<?= $c["imagem_mobile"];?>" class="d-block d-sm-none w-100 header-carousel-img-mobile" alt="Capa do livro <?= $c["titulo"];?>">
                            
                            <div class="carousel-caption p-0 header-carousel-info">

                                <div class="header-carousel-info-novidade">
                                    <?php if(!empty($c["observacao"])):?>

                                        <?= $c["observacao"];?>

                                    <?php endif;?>
                                </div>
                                
                                <h1 class="header-carousel-info-titulo"><?= $c["titulo"];?></h1>

                                <div class="header-carousel-info-paragrafo">
                                    <?= substr($c["descricao"], 0, 250);?><?= (strlen($c["descricao"]) > 250) ? "..." : "" ?>
                                </div>

                                <a href="<?= $c["link_botao"];?>">
                                    <div class="header-carousel-info-botao"></div>
                                </a>

                            </div>

                        </div>


                    <?php endforeach?>

                </div>

                <!--Indicadores-->
                <ol class="carousel-indicators d-flex justify-content-start header-carousel-indicadores">

                    <?php foreach($carousel as $chave => $c):?>
                        <li type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $chave; ?>" class="<?= ($chave ==  0) ? "active" : ""; ?> header-carousel-indicadores-icon" aria-current="<?= ($chave ==  0) ? "true" : ""; ?>" aria-label="Slide Slide <?= intval($chave) +1; ?>"></li>
                    <?php endforeach?>

                </ol>

            </div>

        </div>

    </div>

</header>