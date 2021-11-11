<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>XTERZ Delivery</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://www.xterz.com/files/footer_animation.css">
    <link rel="stylesheet" href="https://www.xterz.com/files/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
       @media only screen and (max-width: 500px) {
  .small_image_banner {
    width: 20%!important;
  }
}
.center_div{
  margin-left: auto;
  margin-right: auto;
}

    </style>
    <style>
  label {
    font-weight: normal !important;
}

.btnz {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
}
.btnz:hover, .btnz:focus {
  color: #000;
  outline: 0;
}

.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}

.center_div{
  margin-left: auto;
  margin-right: auto;
}

/* Create two equal columns that floats next to each other */
.column_two {
  float: left;
  width: 50%;
  padding: 10px;
}
.column_one {
  float: left;
  width: 100%;
  padding: 10px;
}
.left_70 {
  width: 70%;
}

.right_30 {
  width: 30%;
}

.left_two {
  width: 20%;
}

.right_two {
  width: 80%;
}
@media only screen and (max-width: 500px) {
  .column_two {
    float: none!important;
    width: 100%!important;
  }
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.no_float
{
  float: left;
}

@media only screen and (max-width: 400px) {
  .no_float {
    float: none!important;
  }
}

.margin_input_right
{
 margin-right: 10px;
}

@media only screen and (max-width: 400px) {
  .margin_input_right {
    margin-right: 0px!important;
    width: 50%!important;
  }
}

.margin_input_left
{
 margin-left: -10px;
}

@media only screen and (max-width: 400px) {
  .margin_input_left {
    margin-left: 0px!important;
  }
}
.custom_textarea {
  border: 0 none;
  overflow: hidden; /*overflow is set to auto at max height using JS */
  outline: none;
  min-height:100px;
  max-height:314px;
  height: auto;
  resize: none;
  width:100%;
}

.margin_top_small{
  margin-top: 0px;
}
@media only screen and (max-width: 400px) {
  .margin_top_small {
    margin-top: 100px!important;
  }
}

.gradientz {
  background: linear-gradient(262deg, #3461c1, #00b3ed, #639fee);
    background-size: 600% 600%;

    -webkit-animation: AnimationName 9s ease infinite;
    -moz-animation: AnimationName 9s ease infinite;
    animation: AnimationName 9s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}


table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>
    @yield('styles')
</head>
<body>
    <div id="app">
        

        <nav class="nav-bar" style="position: relative;">
	<div class="container">
		<input type="checkbox" id="drop-down-cbox"/>
		<label for="drop-down-cbox">
			<span></span>
			<span></span>
			<span></span>
		</label>

		<a class="site-logo" href="{{ url('/') }}"><img src="https://www.xterz.com/files/logo_ezv.jpg" alt="logo_2" class="small_image_banner" style="width: 20%;"><a>

		<ul class="main-nav small-caps">
    <li class="nav-item" style="height: auto; line-height: 15px; margin-top: 13px;">
      <!-- <a class="nav-link" href="{{ route('outlets.index') }}">{{ __('outlet.list') }}</a> -->
      <a href="{{ route('outlets.create') }}"class="nav-link">{{ __('outlet.create') }}</a>
     </li>

			@guest
			<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
			<li>
        @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
      </li>
      @else
      <li class="nav-item" style="height: auto; line-height: 15px; margin-top: 13px;"><a class="nav-link" href="{{ route('outlet_map.index') }}">{{ __('menu.our_outlets') }}</a></li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
</ul>
		@endguest
	</div>
</nav>

        <main class="py-4 container">
            @yield('content')
        </main>
        @include('layouts.partials.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://npmcdn.com/leaflet-geometryutil"></script>
    @stack('scripts')
</body>
</html>
