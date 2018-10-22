@extends('layouts.app')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('servicios') }}">Servicios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Servicios</li>
      </ol>
    </nav>
	</br>
	<button class="btn btn-success" style="margin-bottom:3%">Agregar</button>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th class="col-md-8" style="text-align: center;">Descripción</th>
	      <th class="col-md-4" style="text-align: center;">Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach($servicios as $servicio)
	    <tr>
	      <th><label>{{$servicio->nombre}}</label></th>
	      <th style="text-align: center;"><label><a href="{{ route('serviciosCrearEditar',$servicio->id) }}" title="Editar"><i class="fa fa-edit" ></i></a>|<a href="" title="Eliminar"><i class="fa fa-times"></i></a></label></th>
	    </tr>
		@endforeach
	  </tbody>
	</table>
</div>
@endsection
