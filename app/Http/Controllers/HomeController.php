<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $participantes = Participante::all();
        return view('home',compact('participantes'));
    }
    
    public function sortear()
    {
        $participantes = Participante::where("pago", "!=", "PENDIENTE")->where("tipo", "PREGRADO")->get();
        return $participantes;
    }
    
    public function participante()
    {
        $participantes = Participante::all();
        return view('inscripcion', compact('participantes'));
    }
}
