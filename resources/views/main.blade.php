<!Doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ISACA UNT FullDay</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="./img/untisg_icon.jpeg">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/themify-icons.css">
    <link rel="stylesheet" href="./css/nice-select.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/slicknav.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area" id="inicio">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="./img/untisg_logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><p onclick="toInicio()">Inicio</´p></li>
                                        <li><p onclick="toInscripcion()">Inscripción</p></li>
                                        <li><p href="#nosotros">Nosotros</p></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- Inicio -->
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">

                    <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                        <div class="col">
                            <div class="title_text">
                                <h3>VI<br>
                                    ISACA UNT <br>
                                    FULLDAY</h3>
                                <button onclick="toInscripcion()" class="boxed-btn-white">Inscripción</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio end -->

    <!-- Incripción -->
    <div class="inscripcion_area" id="inscripcion">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="#" id="form-inscripcion" class="request-form ftco-animate">
                        @csrf
                        <div class="serction_title_large">
                            <h3 style="color:#003D4F ;font-size: 2rem;">Inscripción</h3>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="apellidos" class="label">Apellidos</label>
                                <input name="apellidos" type="text" class="form-control" id="apellidos" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="nombres" class="label">Nombres</label>
                                <input name="nombres" type="text" class="form-control" id="nombres" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-8">
                                <label for="email" class="label">Dirección de correo electronico</label>
                                <input name="email" type="text" class="form-control" id="email" required>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label for="telefono" class="label">Nro de Teléfono</label>
                                <input name="telefono" type="text" class="form-control" id="telefono" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-4">
                                <label for="tipo" class="label">Tipo de inscripción</label>
                                <select name="tipo" id="tipo" class="custom-select my-1 mr-sm-2" required>
                                    <option value="" selected="selected" disabled="disabled">Seleccione un tipo</option>
                                    <option value="PREGRADO">Estudiante de Pregrado</option>
                                    <option value="POSGRADO">Profesional</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-8">
                                <label for="organizacion" class="label">Organización o Universidad asociada</label>
                                <input name="organizacion" type="text" class="form-control" id="organizacion" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="aprobacion">
                                <label class="custom-control-label" for="aprobacion">Autorizo a UNT Isaca Student Group
                                    a compartir mi información de contacto. Ayudando a soportar los eventos y
                                    conferencias del ISG por parte de patrocinadores y expositores que apoyan para
                                    mantener los precios de las conferencias asequibles a nuestros participantes. Su
                                    nombre, título profesional y su dirección de correo electrónico pueden ser
                                    proporcionados a los patrocinadores.</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="btn-isaca-sub" type="submit" value="Registrar"
                                class="submit-btn btn btn-primary mt-4 py-2 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Incripción end -->

    <!-- faq_area_Start -->
    <div class="faq_area" id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="serction_title_large">
                        <h3>
                            Beneficios
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 beneficios-titulo">
                    <h3 class="mb-0 ">


                        Acceso completo

                    </h3>
                    <p> Tendrás acceso completo a la conferencia en vivo, podrás interactuar con los ponentes y vivir la
                        experiencia FullDay.</p>

                </div>
                <div class="col-lg-4 beneficios-titulo">
                    <h3 class="mb-0 ">

                        Certificado

                    </h3>
                    <p>
                        Tu inscripción te otorgará un certificado completamente validado por ISACA Lima Chapter e ISACA
                        UNT.</p>
                </div>
                <div class="col-lg-4 beneficios-titulo">
                    <h3 class="mb-0 ">
                        Impacto social
                    </h3>
                    <p> El dinero recaudado será destinado a la ayuda social para un albergue de nuestra localidad</p>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="">
                        <h3 style="color:#003D4F; font-size:2rem">
                            ISACA UNT FullDay
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 ">
                    <span>Presentamos la tercera edición del Fullday ISACA UNT. Donde nos acompañarán ponentes de gran
                        trayectoria nacional e internacional para darnos a conocer sus experiencias en Gobierno de TI,
                        Seguridad de Información, Auditoría y Gestión de Riesgos de TI</span>
                </div>
                <div class="col-lg-1 col-md-1 ">

                </div>
            </div>

        </div>
    </div>
    <!-- about_area_end -->

    <!-- footer_start -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Síguenos
                            </h3>
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/ISACAUNT">Facebook</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Links
                            </h3>
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li><a href="#inicio">Inscripción</a></li>
                                <li><a href="#nosotros">Beneficios</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">

                            ISACA UNT ISG &copy;
                            <script>
                                document.write(new Date().getFullYear());

                            </script>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->

    <!-- JS here -->
    <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/ajax-form.js"></script>
    <script src="./js/waypoints.min.js"></script>
    <script src="./js/jquery.counterup.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/scrollIt.js"></script>
    <script src="./js/jquery.scrollUp.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/nice-select.min.js"></script>
    <script src="./js/jquery.slicknav.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/jquery.countdown.js"></script>
    <script src="./js/plugins.js"></script>

    <!--contact js-->

    <script src="./js/jquery.ajaxchimp.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/mail-script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="./js/main.js"></script>
    <script src="./js/inscripcion.js"></script>

</body>

</html>
