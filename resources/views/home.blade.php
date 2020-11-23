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
                                @foreach ($participantes as $participante)
                                    <tr>
                                        <td>{{ $participante->id_participante }}</td>
                                        <td>{{ $participante->nombres }} {{ $participante->apellidos }}</td>
                                        <td>{{ $participante->email }}</td>
                                        <td class="text-center">{{ $participante->tipo }}</td>
                                        @if ($participante->pago == 'COMPLETO')
                                            <td class="text-center"><span class="btn btn-sm btn-success">{{ $participante->pago }}</span></td>
                                        @else
                                            <td class="text-center"><span class="btn btn-sm btn-secondary">{{ $participante->pago }}</span></td>
                                        @endif
                                        <td class="text-center">{{ $participante->monto }}</td>
                                        <td class="text-center"><button class="btn btn-sm btn-primary">Pagar</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
