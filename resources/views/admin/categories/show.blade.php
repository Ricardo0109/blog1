@extends('layouts/main')

@section('title')
	Datos de la categoria 
@endsection

@section('content')
	{!! Form::open (['route' => ['admin.category.show', $category->id], 'method' => 'GET'])!!}
	<dl class="dl-horizontal">
		<h3>
		  <dt>ID</dt>
		  <dd>{{ $category->id }}</dd>

		  <dt>Nombre</dt>
		  <dd>{{ $category->name}}</dd>
		  
	</dl>

	<a href="{{ route('admin.category.index') }}" class="label label-primary">Regresar a la lista de categorias  <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></a></h3>
	

@endsection