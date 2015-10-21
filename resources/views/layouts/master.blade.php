<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  	<title>@yield('title')</title>
    
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/css/select2.min.css" rel="stylesheet" />

  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        @if (Auth::check())
        <nav class="blog-nav">
          <a class="blog-nav-item" href="{{ action('Issues@displayGridAction') }}"><i class="glyphicon glyphicon-th-list"></i> Issues</a>
          <a class="blog-nav-item" href="/auth/logout"><i class="glyphicon glyphicon-remove-sign"></i> Logout</a>
        </nav>
        @endif
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">Mabbit</h1>
        <p class="lead blog-description"><i class="glyphicon glyphicon-briefcase"></i> Minimalistic issue tracking system</p>
      </div>

      @if (Session::has('status'))
		 <div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> {{ Session::get('status') }}</div>
	  @endif
	    
  	  @yield('content')

    </div>

    <footer class="blog-footer">
      <p><a href="#">Back to top</a></p>
    </footer>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/app.js"></script>

  </body>
</html>
