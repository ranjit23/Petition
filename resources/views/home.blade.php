
<html>
<head>


  <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

  <title>Browse Petitions </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/browse.css') }}">
      </head>

      <body>



        <ul class="topnav">
          <li>
            <a class="active" href="#home">HOME</a>
          </li>
          <li>
            <a href="{{ url('/petition/create')}}">START YOUR OWN PETITION</a>
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
        </ul>


<h1 align="center" style="font-size:50px;margin-top:30px;font-family: 'Mali', cursive ;"> LIST OF PETITIONS </h1>
<center>



@foreach($petitions as $petition)
    <h1>  {{ $petition->title }} </h1> created by <h2>{{ $petition->user->name }}</h2>
    {{ $petition->description }}<br />
    <br>
  VOTES:  {{ $petition->votes }}

@endforeach
</center>







  </body>
</head>
</html>
