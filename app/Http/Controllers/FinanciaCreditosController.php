<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FinanciaObras;

class FinanciaCreditosController extends Controller
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


    public function index(){
    	$obras = FinanciaObras::All();
    	return view('resumen.financiacreditos.index', array('obras' => $obras));
    }

    public function old(){
    	$obras = PlandeObras::where('year', '<', $this->year)->get();
    	return view('resumen.planobras.old', array('obras' => $obras));
    }

    public function create(){
    	return view('resumen.financiacreditos.create');
    }

    public function store(Request $request){
    	$obras = new PlandeObras();
    	$obras->nombre = $request->nombre;
    	$obras->financiamiento_id = 1;
    	$obras->year = $request->anio;
    	$obras->asignado = $request->monto;
    	$obras->beneficiados = $request->beneficiados;
    	$obras->sector_id = 1;
    	$obras->avance_fisico = $request->fisico;
    	$obras->avance_financiero = $request->financiero;
    	$obras->estado = $request->estado;
	 	$obras->municipio_id = 1; //$request->municipios;
	 	$obras->ente_id = 1; //$request->organos;
	 	$obras->status = 1;
	 	$obras->save();
	 	Session::flash('message-success', 'Plan de Obra Guardada!!');
	 	return Redirect::Route('planobras.index');

	 }
	}
