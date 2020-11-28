@extends('layouts.isaca')

@section('nav_bar_items')
    <div class="col-xl-8 col-lg-8">
        <div class="main-menu  d-none d-lg-block">
            <nav>
                <ul id="navigation">
                    <li>
                        <p onclick="toInicio()">Inicio</p>
                    </li>
                    <li>
                        <p onclick="toInscripcion()">Inscripción</a>
                    </li>
                    <li>
                        <p onclick="toPago()">Pago</a>
                    </li>
                    <li>
                        <p onclick="toNosotros()">Nosotros</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

<!-- Inicio -->
@section('inicio')
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">

                    <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                        <div class="col">
                            <div class="title_text">
                                <h4>VI UNT ISACA</h4>
                                <h3><span>FULL</span><br>
                                    DAY</h3>
                                <button onclick="toInscripcion()" class="boxed-btn-white">Inscripción</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-end flex-column">
                            <div class="title_text text-right mt-auto p-2">
                                <button class="boxed-btn-date">
                                    <div class="btn-box box-dia">
                                        19
                                    </div>
                                    <div class="btn-box box-mes">Diciembre</div>
                                    <div class="btn-box box-hora">8:30 AM</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Inicio end -->

<!-- Incripción -->
@section('inscripcion')
    <div class="inscripcion_area" id="inscripcion">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="#" id="form-inscripcion" class="request-form ftco-animate">
                        @csrf
                        <div class="section_title_large">
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
                                <input type="checkbox" class="custom-control-input" id="aprobacion" checked="true">
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
@endsection
<!-- Incripción end -->

<!-- pay_area_Start -->
@section('pago')
    <div class="pay_area" id="pago">
        <div class="container mb-5">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="section_title_medium">
                        <h4>
                            Contribución
                        </h4>
                    </div>
                    <div class="section_title_large">
                        <h3>
                            Precios
                        </h3>
                    </div>
                </div>
            </div>

            <section id="precios" class="site-section wow section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow bounceInUp" data-aos-delay="0.1s" data-aos-duration="1.4s">
                            <div class="box">
                                <div class="box-header box-estudiante">
                                    <h4 class="title"><a>ESTUDIANTES</a></h4>
                                </div>
                                <div class="precio">
                                    <h3>S/. 15</h3>
                                </div>
                                <div class="precio-dsct">
                                    <h3>S/. 25</h3>
                                </div>

                                <div class="description">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fas fa-certificate mr-3"></i> Certificado</li>
                                        <li class="list-group-item"><i class="fas fa-graduation-cap mr-3"></i> Ponencias
                                            Magistrales</li>
                                        <li class="list-group-item"><i class="fas fa-file-powerpoint mr-3"></i> Material
                                            visual</li>
                                        <li class="list-group-item"><i class="fas fa-gifts mr-3"></i> Participacion en
                                            sorteos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow bounceInUp" data-aos-delay="0.1s" data-aos-duration="1.4s">
                            <div class="box">
                                <div class="box-header box-profesional">
                                    <h4 class="title"><a>PROFESIONALES</a></h4>
                                </div>
                                <div class="precio">
                                    <h3>S/. 25</h3>
                                </div>
                                <div class="precio-dsct">
                                    <h3>S/. 40</h3>
                                </div>
                                <div class="description">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fas fa-certificate mr-3"></i> Certificado</li>
                                        <li class="list-group-item"><i class="fas fa-graduation-cap mr-3"></i> Ponencias
                                            Magistrales</li>
                                        <li class="list-group-item"><i class="fas fa-file-powerpoint mr-3"></i> Material
                                            visual</li>
                                        <li class="list-group-item"><i class="fas fa-gifts mr-3"></i> Participacion en
                                            sorteos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-12 text-center">
                    <div class="section_title_large">
                        <h3>
                            Metodos de Pago
                        </h3>
                        <p style="color: white">Al titular: Max Alec Huertas Franco</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon">
                                <img src="./img/pago/bcp-logo.jpg" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h4>Ahorro Soles:</h4>
                            <h3>57090807640041</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon">
                                <img src="./img/pago/interbank-logo.jpg" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h4>Ahorro Soles:</h4>
                            <h3>8983157898789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon">
                                <img src="./img/pago/yape-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h4>Yape al:</h4>
                            <h3>949171842</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="alert alert-success text-center" role="alert">
                        Una vez realizado el pago envianos tu voucher al correo <a target="_blank"
                            href="mailto:untstudentgroup.isaca@gmail.com">untstudentgroup.isaca@gmail.com</a> o un whatsapp
                        al número 949171842
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- pay_area_end -->

<!-- about_area_start -->
@section('about')
    <div class="about_area" id="nosotros">
        {{-- <div class="container">
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

        </div> --}}
    </div>
@endsection
<!-- about_area_end -->


<!-- sponsor_area_Start -->
@section('sponsor')
    <div class="sponsor_area" id="nosotros">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-12 text-center">
                    <div class="section_title_medium">
                        <h4>
                            Agradecimiento
                        </h4>
                    </div>
                    <div class="section_title_large">
                        <h3>
                            Nuestros Auspiciadores
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon" onclick="redirect(`https://www.kunak.com.pe/`)">
                                <img src="./img/sponsor/kunak-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content section_title_medium">
                            <h3>Kunak</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon" onclick="redirect(`https://www.facebook.com/bse.com.pe`)">
                                <img src="./img/sponsor/bse-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h3>Busines Solution <br> Enterprise</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon" onclick="redirect(`https://www.facebook.com/beta.computer1`)">
                                <img src="./img/sponsor/beta-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h3>Beta Computer</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon" onclick="redirect(`https://www.facebook.com/certipro`)">
                                <img src="./img/sponsor/certi-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h3>Certipro 64</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="vira-card">
                        <div class="vira-card-header">
                            <div class="card-icon" onclick="redirect(`https://www.facebook.com/idoconsultingcompany`)">
                                <img src="./img/sponsor/ido-logo.png" alt="Image" class="img-fluid ">
                            </div>
                        </div>
                        <div class="vira-card-content">
                            <h3>iDO Consulting</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- sponsor_area_end -->

<!-- footer_start -->
@section('footer')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer_widget footer_isaca">
                    <h3 class="footer_title">
                        UNT ISACA Student Group
                    </h3>
                    <span>Somos un grupo estudiantil de la UNT, que motivados por los temas de Auditoría y
                        Seguridad de la Información promueve la educación más allá del aula y el interes en
                        estos temas con el objetivo de apoyar en el crecimiento de la región como una cuna
                        del desarrollo y la innovación tecnológica.</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget">
                    <h3 class="footer_title">
                        Enlaces
                    </h3>
                    <ul>
                        <li>
                            <p onclick="toInicio()">
                                <i class="fas fa-angle-up footer_icon mr-1"></i>
                                Inicio
                            </p>
                        </li>
                        <li>
                            <p onclick="toInscripcion()">
                                <i class="fas fa-angle-up footer_icon mr-1"></i>
                                Inscripción
                            </p>
                        </li>
                        <li>
                            <p onclick="toPago()">
                                <i class="fas fa-angle-up footer_icon mr-1"></i>
                                Pago
                            </p>
                        </li>
                        <li>
                            <p onclick="toNosotros()">
                                <i class="fas fa-angle-up footer_icon mr-1"></i>
                                Nosotros
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget">
                    <h3 class="footer_title">
                        Síguenos
                    </h3>
                    <ul>
                        <li><i class="fab fa-facebook mr-3 footer_icon"></i><a target="_blank"
                                href="https://www.facebook.com/ISACAUNT">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- footer_end -->
