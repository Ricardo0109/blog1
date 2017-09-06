@extends('layouts/main')

@section('title')
	Editar una categoria 
@endsection

@section('content')
	{!! Form::open(['route' =>['admin.category.update', $category], 'method' => 'PUT'])!!}
		<div class="form-gruop">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
		</div>
		<br><br>
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close()!!}
@endsection