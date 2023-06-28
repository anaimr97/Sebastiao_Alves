<footer class="container-fluid">

    <!--Div para navbar-->
    <div class="row m-0 d-none d-md-block">

        <div class="col-12 p-0">

            <nav class="navbar navbar-expand-sm w-100 p-0 footer-navbar">

                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContentFooter">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

                            <li class="nav-item">
                                <a class="nav-link <?= ($ficheiro == "index") ? "active" : ""?> footer-navbar-menus" <?= ($ficheiro == "index") ? "aria-current='page'" : ""?> href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= ($ficheiro == "autor") ? "active" : ""?> footer-navbar-menus" <?= ($ficheiro == "autor") ? "aria-current='page'" : ""?> href="autor.php">Autor</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= ($ficheiro == "livros") ? "active" : ""?> footer-navbar-menus" <?= ($ficheiro == "livros") ? "aria-current='page'" : ""?> href="#" onclick="aguardar()">Livros</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= ($ficheiro == "imprensa") ? "active" : ""?> footer-navbar-menus" <?= ($ficheiro == "imprensa") ? "aria-current='page'" : ""?> href="imprensa.php">Imprensa</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= ($ficheiro == "contactos") ? "active" : ""?> footer-navbar-menus" <?= ($ficheiro == "contactos") ? "aria-current='page'" : ""?> href="contactos.php">Contactos</a>
                            </li>

                        </ul>

                    </div>
                </div>

            </nav>

        </div>

    </div>

    <!--Div para linha separadora, só no mobile-->            
    <div class="row footer-linha d-block d-md-none"></div>

    <!--Div para Contactos e Redes Sociais-->
    <div class="row m-0">

        <div class="col-0 col-xl-1"></div>

        <!--Div para Contactos-->
        <div class="<?= ($ficheiro == "contactos") ? "d-none d-md-block" : ""?> col-12 col-lg-7 col-xl-6 footer-contactos p-0">

            <h1 class="T1 footer-contactos-titulo-geral">Contactos</h1>

            <div class="row m-0">

                <div class="col-12 col-sm-5 p-0">

                    <h3 class="footer-contactos-titulo">Morada</h3>

                    <p class="footer-contactos-paragrafo">
                        <?= $contactos["morada"];?>
                        <br>
                        <?= $contactos["codigo_postal"];?>
                    </p>

                </div>

                <div class="col-12 col-sm-4 p-0">

                    <h3 class="footer-contactos-titulo">Telefone</h3>

                    <p class="m-0 footer-contactos-paragrafo">
                        <?= $contactos["telefone"];?>
                    </p>

                </div>

                <div class="col-12 col-sm-3 p-0">

                    <h3 class="footer-contactos-titulo">Email</h3>

                    <p class="m-0 footer-contactos-paragrafo">
                        <?= $contactos["email"];?>
                    </p>

                </div>

            </div>
        </div>

        <!--Div para Redes Sociais-->
        <?php if(!empty($redes["instagram"]) || !empty($redes["facebook"]) || !empty($redes["linkedin"])):?>

            <div class="col-12 col-lg-5 footer-redes-sociais p-0">

                <h1 class="T1 footer-redes-sociais-seguir">Siga-me nas Redes Sociais</h1>

                <div class="row m-0">

                    <div class="col d-flex justify-content-center p-0">

                        <?php if(!empty($redes["instagram"])):?>
                            <a href="<?= $redes["instagram"];?>">
                                <div class="footer-rede-social-instagram"></div>
                            </a>
                        <?php endif;?>

                        <?php if(!empty($redes["facebook"])):?>
                            <a href="<?= $redes["facebook"];?>">
                                <div class="footer-rede-social-facebook"></div>
                            </a>
                        <?php endif;?>

                        <?php if(!empty($redes["linkedin"])):?>
                            <a href="<?= $redes["linkedin"];?>">
                                <div class="footer-rede-social-linkedin"></div>
                            </a>
                        <?php endif;?>

                    </div>

                </div>

            </div>

        <?php endif;?>


    </div>

    <!--Div para Livro Reclamações, RALC, Política de Cookies e Copyright-->
    <div class="row m-0">

        <div class="col-0 col-xl-1"></div>

        <!--Div para Livro Reclamações, RALC-->
        <div class="col-12 col-sm-5 footer-reclamacao-ralc d-flex">

            <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">
                <div class="footer-reclamacao"></div>
            </a>

            <a href="https://sebastiaoalves.com/ralc" target="_blank">
                <div class="footer-ralc"></div>
            </a>

        </div>

        <div class="col-0  col-sm-2 col-xl-1"></div>

        <!--Política de Cookies e Copyright-->
        <div class="col-12 col-sm-5 p-0">

            <p class="P footer-cookies-copyright">
                Politica de Cookies.
                <br>
                Copyright &copy; 2023 Ana Isabel Rocha. 
                <br class="d-block d-sm-none">
                Todos os direitos reservados.
            </p>

        </div>

    </div>

</footer>