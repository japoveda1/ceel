<?php 
namespace App\Http\Controllers\Servicios ;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    public function servicios(){
    	return view ('servicios/servicios');
    }
}
