@extends('layouts/main')

@section('content')
		<h1> Posts </h1>
			<ul>
				@foreach ($posts as $post)
				 <li>
					 <a href="/posts/{{ $post ->id }}">
		 				{{ $post->body }} 
					</a>
				</li>
	 			@endforeach 
			</ul>
@endsection