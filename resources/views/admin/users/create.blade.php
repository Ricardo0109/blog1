@extends('layouts/main')

@section('title')
	Crear un usuario 
@endsection

@section('content')
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	 @endif
	

	{!! Form::open (['route' => 'admin.users.store', 'method' => 'POST'])!!}

		<div class = "form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@example', 'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password',  ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
		</div>

			<div class = "form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', [ 'member' => 'Miembro', 'admin' => 'Administrador'], null,  ['class' => 'form-control', 'required', 'placeholder' => '-- Selecciona un nivel --' ]) !!}
		</div>
			
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection