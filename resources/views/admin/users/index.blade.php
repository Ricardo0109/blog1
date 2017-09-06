@extends('layouts/main')

@section('title')
	Lista de usuarios 
@endsection

@section('content')
	<H4><a href="{{ route('admin.users.create') }}" class="label label-primary">Registrar nuevo usuario  <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></a></H4>
	<table class="table table-striped">

		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>

		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td><a href="{{ route ('admin.users.show', $user->id) }}">{{ $user->name}}</a></td>
					<td>{{ $user->email}}</td>
					<td>
						@if($user->type == "admin")
							<span class="label label-success">{{ $user->type }}</span>
						@else
							<span class="label label-info">{{ $user->type }}</span>
						@endif
					</td> 
					<td><a href= "{{ route ('admin.users.destroy', $user->id) }}"  onclick="return confirm('¿Deseas eliminar este usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a> 

					<a href="{{ route ('admin.users.edit', $user->id) }}" class= "btn btn-warning"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></a> </td>
				</tr>
			@endforeach
		</tbody>

	</table>	
	<div class="text-center">
		{!! $users->render() !!}
	</div>
@endsection