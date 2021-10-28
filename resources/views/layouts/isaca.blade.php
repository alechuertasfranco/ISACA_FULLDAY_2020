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
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/themify-icons.css">
    <link rel="stylesheet" href="./css/nice-select.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/slicknav.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

@yield('style')

<!-- modal_area_start -->
@yield('modal')
<!-- modal_area_end -->

<body>
    <!-- header-start -->
    <header>
        <div class="header-area" id="inicio">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <img src="./img/untisg_logo.png" alt="">
                                </a>
                            </div>
                        </div>

                        @yield('nav_bar_items')

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
    @yield('inicio')
    <!-- Inicio end -->

    <!-- Incripción -->
    @yield('inscripcion')
    <!-- Incripción end -->

    <!-- pay_area_Start -->
    @yield('pago')
    <!-- pay_area_end -->

    <!-- about_area_start -->
    @yield('about')
    <!-- about_area_end -->


    <!-- sponsor_area_Start -->
    @yield('sponsor')
    <!-- sponsor_area_end -->

    <!-- footer_start -->
    <footer class="footer footer_bg_1">
        @yield('footer')
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">

                            UNT ISACA Student Group &copy;
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
    <script src="./js/plugins.js"></script>
    <script src="./js/jquery.ajaxchimp.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/mail-script.js"></script>
    <script src="./js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="./js/main.js"></script>
    <script src="./js/inscripcion.js"></script>
    <script src="./js/sorteo.js"></script>

</body>

</html>
