<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Participante;

class ParticipanteController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $participantes = Participante::all();

        foreach ($participantes as $participante) {
            if ($participante->email == $request->email) {
                return $participante->email;
            }
        }

        $participante = new Participante();
        $participante->apellidos = strtoupper($request->apellidos);
        $participante->nombres = strtoupper($request->nombres);
        $participante->email = $request->email;
        $participante->telefono = $request->telefono;
        $participante->tipo = $request->tipo;
        $participante->organizacion = strtoupper($request->organizacion);
        $participante->aprobacion = $request->aprobacion;
        $participante->pago = 'PENDIENTE';
        $participante->monto = 0;
        $participante->save();

        return 1;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
