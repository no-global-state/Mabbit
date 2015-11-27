<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="nav-head">
      <div class="container">
        @if (Auth::check())
        <nav>
          <a href="{{ action('Issues@grid') }}"><i class="glyphicon glyphicon-th-list"></i> Issues</a>
          <a href="{{ action('Tag@index') }}"><i class="glyphicon glyphicon-tag"></i> Tags</a>
          <a href="/auth/logout"><i class="glyphicon glyphicon-remove-sign"></i> Logout</a>
        </nav>
        @endif
      </div>
    </div>

    <div class="container">
      <header>
        <h1>Mabbit</h1>
        <p class="lead"><i class="glyphicon glyphicon-briefcase"></i> Minimalistic issue tracking system</p>
      </header>

      @if (Session::has('status'))
        <div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> {{ Session::get('status') }}</div>
      @endif
        
      @yield('content')
    </div>

    <footer>
      <p>Copyright &copy; 2015 No Global State Lab</p>
    </footer>

    <div class="modal fade" id="remove-confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Are you sure?</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to remove this permanently?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-issue-button="remove"><i class="glyphicon glyphicon-ok"></i> Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> No</button>
          </div>
        </div>
      </div>
    </div>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
