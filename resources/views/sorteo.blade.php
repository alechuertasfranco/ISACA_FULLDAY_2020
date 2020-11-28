@extends('layouts.isaca')

@section('style')
    <style>
        #form-sorteo > .cuenta_regresiva{
            text-align: center;
        }
        #form-sorteo > .cuenta_regresiva span{
            font-size: 12rem;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }
    </style>
@endsection

@section('nav_bar_items')
    <div class="col-xl-8 col-lg-8">
        <div class="main-menu  d-none d-lg-block">
            <nav>
                <ul id="navigation">
                    <li>
                        <p onclick="toInicio()">Inicio</p>
                    </li>
                    <li>
                        <p onclick="toNosotros()">Nosotros</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection



<!-- pay_area_Start -->
@section('pago')
    <div class="pay_area" id="pago">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col">
                    <div id="form-sorteo" class="card request-form mt-3" style="height: 330px">
                        <div id="section_sorteo">
                        	<div class="section_title_large">
                        	    <h3 style="color:#003D4F ;font-size: 2rem;">SORTEO!</h3>
                        	</div>
                        	<div class="form-row">
                        	    <div class="form-group">
                        	        <label for="sorteo" class="label">Sortearemos:</label>
                        	        <select name="sorteo" id="sorteo" class="custom-select my-1 mr-sm-2" required>
                        	            <option value="" selected="selected" disabled="disabled">Seleccione un premio</option>
                        	            <option value="una beca en Beta Computer">Beca Completa - Beta Computer</option>
                        	            <option value="una media beca en Beta Computer">Media Beca - Beta Computer</option>
                        	            <option value="un certificado de CertiPro">Certificado Dsct - CertiPro64</option>
                        	        </select>
                        	    </div>
                        	</div>
                        	<div class="form-group text-center">
                        	    <button id="btn-sortear" class="btn btn-primary mt-4 py-2 px-4">Sortear</button>
                        	</div>
                        </div>
                        <div class="cuenta_regresiva" style="display: none">
                            <span id="cuenta"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- pay_area_end -->

@section('modal')
        <!-- Modal -->
        <div class="modal fade" id="modal_sorteo" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
@endsection


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
