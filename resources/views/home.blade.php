@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Participantes</div>

                <div class="card-body">
                    <table class="table">
                        <caption>Lista de Participantes</caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Correo</th>
                                <th scope="col" class="text-center">Tipo</th>
                                <th scope="col" class="text-center">Estado</th>
                                <th scope="col" class="text-center">Pago</th>
                                <th scope="col" class="text-center">$</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $cont_total = 0;
                                $cont_bcp = 0;
                                $cont_interbank = 0;
                                $monto_total = 0;
                                $monto_bcp = 0;
                                $monto_interbank = 0;
                            @endphp
                            @foreach ($participantes as $participante)
                            <tr>
                                <td>{{ $participante->id_participante }}</td>
                                <td>{{ $participante->nombres }} {{ $participante->apellidos }}</td>
                                <td>{{ $participante->email }}</td>
                                <td class="text-center">{{ $participante->tipo }}</td>
                                @if ($participante->pago != 'PENDIENTE')
                                <td class="text-center"><span class="btn btn-sm btn-success">{{ $participante->pago }}</span></td>
                                <td class="text-center">{{ $participante->monto }}</td>
                                <td class="text-center"><button id_participante="{{ $participante->id_participante }}" class="btn btn-sm btn-primary btn-pagar" disabled>Pagar</button></td>
                                @else
                                <td class="text-center"><span class="btn btn-sm btn-secondary">{{ $participante->pago }}</span></td>
                                <td class="text-center">{{ $participante->monto }}</td>
                                <td class="text-center"><button id_participante="{{ $participante->id_participante }}" class="btn btn-sm btn-primary btn-pagar">Pagar</button></td>
                                @endif
                            </tr>
                            @php
                                if ($participante->monto > 0) {
                                    $monto_total += $participante->monto;
                                    $cont_total += 1;
                                    if ($participante->metodo == "INTERBANK") {
                                        $monto_interbank += $participante->monto;
                                        $cont_interbank += 1;
                                    } else {
                                        $monto_bcp += $participante->monto;
                                        $cont_bcp += 1;
                                    }
                                }
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <caption>Lista de Participantes</caption>
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">TOTAL</th>
                                <th colspan="2" class="text-center">BCP</th>
                                <th colspan="2" class="text-center">INTERBANK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">{{ $cont_total }}</td>
                                <td class="text-center">S/.{{ $monto_total }}</td>
                                <td class="text-center">{{ $cont_bcp }}</td>
                                <td class="text-center">S/.{{ $monto_bcp }}</td>
                                <td class="text-center">{{ $cont_interbank }}</td>
                                <td class="text-center">S/.{{ $monto_interbank }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="modal_pagar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Pagar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="nombre_participante" class="col-form-label">Participante:</label>
                                        <input type="text" class="form-control" id="nombre_participante" value="Nombre" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="message-text" class="col-form-label">Pago:</label>
                                        <select id="pago_participante" class="form-control">
                                            <option value="COMPLETO">COMPLETO</option>
                                            <option value="PENDIENTE">PENDIENTE</option>
                                            <option value="DESCUENTO">DESCUENTO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="message-text" class="col-form-label">Método:</label>
                                        <select id="metodo_participante" class="form-control">
                                            <option value="YAPE">YAPE</option>
                                            <option value="BCP">BCP</option>
                                            <option value="INTERBANK">INTERBANK</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="message-text" class="col-form-label">Monto:</label>
                                        <input type="text" class="form-control" id="monto_participante">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" id="btn_pagar" class="btn btn-primary">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
