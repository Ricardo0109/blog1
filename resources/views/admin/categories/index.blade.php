@extends('layouts/main')

@section('title')
	Listado de categorias
@endsection

@section('content')
	<H4><a href="{{ route('admin.category.create') }}" class="btn btn-info">Registrar nueva categoria  <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></a></H4>
	
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>
						<a href="{{ route ('admin.category.show', $category->id) }}">{{ $category->name }}</a>
					</td>
					<td>
						<a href= "{{ route ('admin.category.destroy', $category->id) }}"  onclick="return confirm('¿Deseas eliminar esta categoria?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a> 

						<a href="{{ route ('admin.category.edit', $category->id) }}" class= "btn btn-warning"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $categories->render() !!}
	</div>
@endsection