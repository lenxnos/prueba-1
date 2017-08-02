<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlandeObras;
use App\FinanciaObras;
use App\Sector;
use App\Municipio;
use Redirect;
use Session;



class PlanObraController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
	 public function __construct()
	 {
	 	$this->middleware('auth');
	 	$this->year = date('Y');
	 }


	 public function index(){
	 	$obras = PlandeObras::where('year', '=', $this->year)->get();
	 	
	 	return view('resumen.planobras.index', array('obras' => $obras));
	 }

	 public function old(){
	 	$obras = PlandeObras::where('year', '<', $this->year)->get();
	 	return view('resumen.planobras.old', array('obras' => $obras));
	 }

	 public function create(){
	 	$sector = Sector::orderBy('detalle')->pluck('detalle', 'id');
	 	$municipios = Municipio::orderBy('nombre')->pluck('nombre', 'id');
	 	$financiamiento = FinanciaObras::orderBy('nombre')->pluck('nombre', 'id');
	 	return view('resumen.planobras.create', compact('financiamiento', 'sector', 'municipios'));
	 }

	 public function store(Request $request){

	 	var_dump($request->municipios);

	 	/*$obras = new PlandeObras();
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
		*/
	 }

	}
