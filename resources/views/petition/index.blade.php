<html>
<head>


  <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

  <title>Browse Petitions </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styleb.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleb.css">
      </head>

      <body>
        <center>


          @if (Route::has('login'))

  					<ul class="topnav">
  						<li>
              @auth
  						<a href="{{ url('/home') }}">Home</a>
  					</li>
  					<li>
  						<a href="#About">ABOUT</a>
  					</li>
  					<li>
  						<a href="{{ url('/petition') }}">Browse Petition</a>
  					</li>

  					<li>



  									<a class="right" href="{{ route('logout') }}"
  										 onclick="event.preventDefault();
  																	 document.getElementById('logout-form').submit();">
  											{{ __('Logout') }}
  									</a>
  </li>
  									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  											@csrf
  									</form>

              @else

              <a href="{{ url('/') }}">Home</a>
            </li>

            <li>
              <a href="{{ url('/petition') }}">Browse Petition</a>
            </li>
            <li>

            <a href="{{ route('register') }}">Start your own petition</a>
          </li>
          <li class="right">
            <a href="{{ route('login') }}">Login</a>

          @endauth

  						</li>
  					</ul>
  @endif

<h1 align="center" style="font-size:50px;margin-top:30px;font-family: 'Mali', cursive ;"> LIST OF PETITIONS </h1>



  @foreach($petitions as $petition)

  <center>
  <h1 style="font-size:30px;"> <a href="/petition/{{ $petition->id }}/show">

<center>


  <div class="mid">
  {{ $petition->title }}</a>
  <br></h1></center>
  <h3><center>


    {{ $petition->description }}</h3></center>
<center>


    Created by {{ $petition->user->name }}
</center>    <h3><center>

VOTES :
    {{ $petition-> votes }}</center></h3>
  </center>
  </div>
  @endforeach




  </body>
</head>
</html>
