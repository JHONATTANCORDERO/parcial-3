@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('documento','documento:')!!}
		{!!Form::text('documento',null,['class'=>'form-control','placeholder'=>'Ingresa documento'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('direccion','direccion:')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa la direccion'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('telefono','telefono:')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa el telefono'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('motivo','motivo de solicitud:')!!}
		{!!Form::text('motivo',null,['class'=>'form-control','placeholder'=>'Ingresa el motivo de la solicitud'])!!}
	</div>
	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection