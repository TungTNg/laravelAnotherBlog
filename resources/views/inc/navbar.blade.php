<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/laravelAnotherBlog">{{ config('app.name', 'Another Laravel Blog') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/laravelAnotherBlog">Home</a></li>
            <li><a href="/laravelAnotherBlog/about">About</a></li>
            <li><a href="/laravelAnotherBlog/services">Services</a></li>
            <li><a href="/laravelAnotherBlog/posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/laravelAnotherBlog/posts/create">Create Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>