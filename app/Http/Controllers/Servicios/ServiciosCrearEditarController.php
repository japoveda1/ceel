<?php
//Controlador de la vista para adicion y edicion de un servicio
namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Servicios\Servicios;

class ServiciosCrearEditarController extends Controller
{
    public function show($id){
    	$servicio= Servicios::find($id);

    	//dd($servicio);

    	return view ('servicios.ServiciosCrearEditar',[
    		'servicio'=>$servicio
    	]);
    }
}
