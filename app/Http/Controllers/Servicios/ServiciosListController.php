<?php
namespace App\Http\Controllers\Servicios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiciosListController extends Controller
{
    public function serviciosList(){
    	return view ('servicios/serviciosList');
    }
}
