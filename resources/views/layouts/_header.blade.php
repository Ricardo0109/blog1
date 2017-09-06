<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ isActiveURL('/') }}"><a href="/">Home</a></li>
            <li class="{{ isActiveRoute('admin.users.index') }}"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
            <li class="{{ isActiveRoute('admin.category.index') }}"><a href="{{ route('admin.category.index') }}">Categorias</a></li>
            <li class="{{ isActiveRoute('posts.index') }}"><a href="/posts">List</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

