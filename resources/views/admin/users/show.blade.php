@extends('layouts/main')

@section('title')
	Datos del usuario 
@endsection

@section('content')
	{!! Form::open (['route' => ['admin.users.show', $user->id], 'method' => 'GET'])!!}
	<dl class="dl-horizontal">
		<h3>
		  <dt>ID</dt>
		  <dd>{{ $user->id }}</dd>

		  <dt>Nombre</dt>
		  <dd>{{ $user->name}}</dd>

		  <dt>Correo</dt>
		  <dd>{{ $user->email}}</dd>

		  <dt>Tipo</dt>
		  <dd>{{ $user->type }}</dd>
		  
	</dl>

	<a href="{{ route('admin.users.index') }}" class="label label-primary">Regresar a la lista de usuarios  <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></a></h3>
	

@endsection