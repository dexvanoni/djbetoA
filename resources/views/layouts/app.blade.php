<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'DJ Beto Andrade') }}</title>


  <!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">-->
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'DJ Beto Andrade') }}
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('editar.index') }}">Index</a></li>
                <li><a href="{{ route('volta') }}">Seu site</a></li>
                <li><a href="{{ route('lista') }}">Mensagens</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Administração</div>

          <div class="panel-body">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <!--<div class="pull-right">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">
          <a href="{{ route('editar.index') }}" class="btn btn-info"><span class="glyphicon glyphicon-cog"></span> Index</a>
          <a href="{{ route('volta') }}" class="btn btn-danger"><span class="glyphicon glyphicon-headphones"></span> Site</a>
          <a title="Ver meus emails recebidos" href="{{ route('lista') }}" class="btn btn-success"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Mensagens</a><br><br>
        </div>
      </div>
    </div>-->
  </div>
</div>

<script src="/bst/js/jquery-1.12.4.min.js"></script>
<script src="/bst/js/bootstrap.min.js"></script>
<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/bst/js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!-- Scripts -->
<script>

window.Laravel = <?php echo json_encode([
  'csrfToken' => csrf_token(),
]); ?>

$(document).ready(function() {
  $('#lista').DataTable( {
    "language": {
        "url": "/localisation/Portuguese-Brasil.json"
      }
    } );
} );
$(document).ready(function(){

  $('#botoes').show();
  $('#aboutme').hide();
  $('#settop').hide();
  $('#albumrelease').hide();
  $('#events').hide();
  $('#blogs').hide();
  $('#playlistdown').hide();
  $('#bt_submit').hide();

  $("#bt_aboutme").click(function(){
    $('#aboutme').show();
    $('#bt_submit').show();
    $('#settop').hide();
    $('#albumrelease').hide();
    $('#events').hide();
    $('#blogs').hide();
    $('#playlistdown').hide();
  });
  $("#bt_settop").click(function(){
    $('#aboutme').hide();
    $('#settop').show();
    $('#albumrelease').hide();
    $('#events').hide();
    $('#blogs').hide();
    $('#playlistdown').hide();
    $('#bt_submit').show();
  });
  $("#bt_albumrelease").click(function(){
    $('#aboutme').hide();
    $('#settop').hide();
    $('#albumrelease').show();
    $('#events').hide();
    $('#blogs').hide();
    $('#playlistdown').hide();
    $('#bt_submit').show();
  });
  $("#bt_events").click(function(){
    $('#aboutme').hide();
    $('#settop').hide();
    $('#albumrelease').hide();
    $('#events').show();
    $('#blogs').hide();
    $('#playlistdown').hide();
    $('#bt_submit').show();
  });
  $("#bt_blogs").click(function(){
    $('#aboutme').hide();
    $('#settop').hide();
    $('#albumrelease').hide();
    $('#events').hide();
    $('#blogs').show();
    $('#playlistdown').hide();
    $('#bt_submit').show();
  });
  $("#bt_playlistdown").click(function(){
    $('#aboutme').hide();
    $('#settop').hide();
    $('#albumrelease').hide();
    $('#events').hide();
    $('#blogs').hide();
    $('#playlistdown').show();
    $('#bt_submit').show();
  });

});

</script>
</body>
</html>
