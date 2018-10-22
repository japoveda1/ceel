@extends('layouts.app')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('servicios') }}">Servicios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Servicio</li>
      </ol>
    </nav>
	</br>
	<form>
		<div class="row">
			<div class="col-md-1">Codigo:</div>
			<div class="col-md-3"><input class="form-control"  type="text" name="codigo" value="{{$servicio->codigo}}"></div>
			<div class="col-md-1">Nombre:</div>
			<div class="col-md-7"><input  class="form-control" type="text" name="nombre" value="{{$servicio->nombre}}"></div>
		</div>
		</br>
		<div class="row">
			<div class="col-md-2">Descripcion:</div>
			<div class="col-md-10"><textarea class="form-control"  type="area" name="descripcion">{{$servicio->descripcion}}</textarea>
		</div>

		<div>
			<button class="btn btn-success" value="submit">Guardar</button>	
		</div>
	</form>
</div>
@endsection
