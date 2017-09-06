<nav class="bs-docs-sidebar hidden-print hidden-sm hidden-xs affix">
	<ul class="nav bs-docs-sidenav">
	@foreach ($posts as $post)
		 <li>
			 <a href="/posts/{{ $post ->id }}">
				{{ $post->body }} 
			</a>
		</li>
	 @endforeach 
	</ul>
</nav>