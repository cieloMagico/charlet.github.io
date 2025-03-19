<?php
session_start(); // Inicia la sesión
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charlet index </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="assets/css/main.css">

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a style="font-size: 45px; text-shadow: 2px 2px 5px black;">CHARLET</a>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="#">Categorias</a>
                                                <ul class="submenu">
                                                    <li><a href="mdf.php"> MDF</a></li>
                                                    <li><a href="#"> Grabados</a></li>
                                                    <li><a href="robotica.php"> Robotica</a></li>
                                                    <li><a href="diseños.php"> Diseños</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contacto</a></li>
                                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Buscar">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                    </li>



                                    <!-- Alternar entre "Iniciar sesión" y "Cerrar sesión" -->
                                    <li class="d-none d-lg-block">
                                        <?php
                                        if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
                                            echo '<a href="#" class="btn header-btn" onclick="confirmLogout()">Cerrar sesión</a>';
                                        } else {
                                            echo '<a href="log.php" class="btn header-btn">Iniciar sesión</a>';
                                        }
                                        ?>
                                        <script>
                                            function confirmLogout() {
                                                // Mostrar la ventana de confirmación
                                                if (confirm("¿Estás seguro de que deseas cerrar sesión?")) {
                                                    // Si el usuario confirma, redirigir a logout.php
                                                    window.location.href = "logout.php";
                                                }
                                            }
                                        </script>

                                    </li>
                                </ul>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <section class="card-container">
        <section class="card-container">
            <section class="card-container">
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
                <div class="card">
                    <div class="card-title">Productos Diseños</div>
                    <img src="" alt="Imagen del producto">
                    <div class="card-description">Descripción del producto en Diseños</div>
                    <div class="product-price">$$$$$</div>
                    <div style="color: green; font-weight: bold; margin-top: 5px;">En stock</div>
                    <button class="add-to-cart">Agregar al carrito</button>
                </div>
            </section>

        </section>

    </section>

    <footer>

        <footer id="footer" class="footer light-background" style="background-color: black !important;">

            <div class="container">
                <div class="copyright text-center ">
                    <p><a>Carlos Alberto Carranza Ramirez</a> <strong class="px-1 sitename"><br>+52
                            55-4930-0829</br></strong></p>
                </div>
                <div class="social-links d-flex justify-content-center">
                    <a href="https://www.instagram.com/dcharlyd/">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </i>
                    </a>
                    <a href="https://www.facebook.com/carlosalberto.carranzaramires">
                        <i class="bi bi-facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </i>
                    </a>
                    <a href="https://www.tiktok.com/@dcdpubg?is_from_webapp=1&sender_device=pc">
                        <i class="bi bi-tiktok">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path
                                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                            </svg>
                        </i>
                    </a>
                    <a href="https://wa.me/+525549300829">
                        <i class="bi bi-whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </i>
                    </a>
                </div>
                <div class="credits">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This site was
                        made with <i class="ti-heart" aria-hidden="true"></i> by <a
                            target="_blank"><strong>Polet&Company</strong></a>
                </div>
            </div>

        </footer>
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>