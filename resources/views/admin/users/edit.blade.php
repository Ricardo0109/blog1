@extends('layouts/main')

@section('title')
	Editar un usuario
@endsection

@section('content')
{!! Form::open (['route' => ['admin.users.update', $user->id], 'method' => 'PUT'])!!}

	<div class = "form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
	</div>

	<div class = "form-group">
		{!! Form::label('email', 'Correo electronico') !!}
		{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@example', 'required']) !!}
	</div>

		<div class = "form-group">
		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('type', [ 'member' => 'Miembro', 'admin' => 'Administrador'], $user->type,  ['class' => 'form-control', 'required', 'placeholder' => '-- Selecciona un nivel --' ]) !!}
	</div>
		
	<div class="form-group">
		{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

@endsection