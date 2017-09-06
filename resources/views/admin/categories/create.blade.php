@extends('layouts/main')

@section('title')
	Crear una nueva categoria 
@endsection

@section('content')
	{!! Form::open(['route' => 'admin.category.store', 'method' => 'POST'])!!}
		<div class="form-gruop">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
		</div>
		<br><br>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close()!!}
@endsection