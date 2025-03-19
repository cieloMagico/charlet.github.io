<?php
session_start(); // Inicia la sesión
// Verificar si el usuario está logueado y tiene privilegios de administrador
if (!isset($_SESSION['user_logged_in']) || $_SESSION['privilegios'] != 1) {
    // Si no está logueado o no tiene privilegios de administrador, redirigir a la página principal
    header("Location: index.php");
    exit;
}
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
    <link rel="stylesheet" href="assets/css/customButton.css">

    <style>
        body {
            position: relative;
            height: 100vh;
            margin: 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('images/images/logo.png');
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            opacity: 0.6;
            z-index: -1;
        }

        /* Estilos del internal frame */
        .internal-frame {
            display: none;
            /* Inicialmente oculto */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 60%;
            background-color: white;
            border: 2px solid #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            /* Asegura que esté por encima del contenido */
            padding: 20px;
            overflow: auto;
        }

        .internal-frame .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
    </style>

</head>

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
    <!-- Preloader End -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
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
                                            <li><a href="#">productos</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#createModal">Crear</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editModal">Editar</a>
                                                    </li>

                                                    <li><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#infoModal">Eliminar</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="pedidos.php">Pedidos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <!-- Internal Frame (Modal) -->
    <div id="internalFrame" class="internal-frame">
        <span class="close-btn" onclick="closeInternalFrame()">&times;</span>
        <h2 id="frameTitle">Título del Internal Frame</h2>
        <p id="frameContent">Contenido del Internal Frame</p>
    </div>

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Producto</h5>
                    <button type="button" class="custom-btn-close" data-bs-dismiss="modal" aria-label="Close">✖</button>
                </div>
                <div class="modal-body">
                    <!-- Buscador con botón de lupa -->
                    <div class="mb-3">
                        <label for="edit-buscador" class="form-label">Buscar</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="edit-buscador" placeholder="Ingrese SKU">
                            <button type="button" class="custom-btn custom-btn-info">🔍</button>
                        </div>
                    </div>
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="edit-nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="edit-nombre">
                    </div>
                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="edit-descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="edit-descripcion" rows="3"></textarea>
                    </div>
                    <!-- SKU -->
                    <div class="mb-3">
                        <label for="edit-sku" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="edit-sku">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="custom-btn custom-btn-primary"
                        style="background-color: blue;">Editar</button>
                    <button type="button" class="custom-btn custom-btn-secondary"
                        data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal eliminar-->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Buscar Producto</h5>
                    <button type="button" class="custom-btn-close" data-bs-dismiss="modal" aria-label="Close">✖</button>
                </div>
                <div class="modal-body">
                    <!-- Buscador con botón de lupa -->
                    <div class="mb-3">
                        <label for="buscador" class="form-label">Buscar</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="buscador" placeholder="Ingrese búsqueda">
                            <button type="button" class="custom-btn custom-btn-info">🔍</button>
                        </div>
                    </div>
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" disabled>
                    </div>
                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" disabled></textarea>
                    </div>
                    <!-- SKU -->
                    <div class="mb-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="sku" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="custom-btn custom-btn-danger">Eliminar</button>
                    <button type="button" class="custom-btn custom-btn-secondary"
                        data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Crear Producto -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear Producto</h5>
                <button type="button" class="custom-close" data-bs-dismiss="modal">✖</button>
            </div>
            <div class="modal-body">
                <!-- Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
                </div>
                <!-- Precio -->
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" placeholder="Ingrese precio">
                </div>
                <!-- Disponibles -->
                <div class="mb-3">
                    <label for="disponibles" class="form-label">Disponibles</label>
                    <input type="number" class="form-control" id="disponibles" placeholder="Cantidad disponible">
                </div>
                <!-- SKU -->
                <div class="mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" placeholder="Ingrese SKU">
                </div>
                <!-- Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese descripción"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="custom-btn custom-save">Guardar</button>
                <button type="button" class="custom-btn custom-cancel" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap JS (Si aún no lo tienes en tu proyecto) -->



    <script>
        // Función para abrir el internal frame
        function openInternalFrame(action) {
            document.getElementById("frameTitle").innerText = action + " Producto";  // Cambiar el título según la acción
            document.getElementById("frameContent").innerText = "Aquí puedes " + action.toLowerCase() + " un producto."; // Contenido dinámico
            document.getElementById("internalFrame").style.display = "block";  // Mostrar el internal frame
        }

        // Función para cerrar el internal frame
        function closeInternalFrame() {
            document.getElementById("internalFrame").style.display = "none";  // Ocultar el internal frame
        }
    </script>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>