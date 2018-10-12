<html>
<head>


  <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

  <title>Browse Petitions </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/browse.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
#more {display: none;}
</style>
    <link rel="stylesheet" type="text/css" href="styleb.css">

      </head>

      <body>

        <center>


        <ul class="topnav">
          <li>
            <a class="active" href="{{ url('/')}}">HOME</a>
          </li>

          <li>
            <a href="{{ url('/petition') }}">BROWSE PETITION</a>
          </li>
          <li>
          <a href="{{ route('register') }}">START YOUR OWN PETITION</a>
          </li>
          <li class="right">
            <a href="{{ route('login') }}">LOGIN</a>

          </li>
        </ul>

<center>
<section class="sec2">

        <h1 align="center">{{ $petition->title }}</h1>

        <p align="center"> {{ $petition-> description }} </p>

        Votes <progress value="22" max="100">
        </progress>
        <br /> <br />
          @if (Route::has('login'))
            @auth
        <a href="/petition/{{ $petition->id }}/vote/store" class="button"> Vote </a>
        @else
        <a href="{{ route('register') }}" class="button"> Vote </a>
@endauth
@endif


</center>
   <footer>
  <p align="center" style="font-size:25px;"> &copy; ONLINE PETITION </p>

        <p align="center"> Developed and Maintained by</p>

        <p> Ranjit Desai &nbsp;  &nbsp;  Arafaat Chaudhary &nbsp; &nbsp;   Gauri Deshpande  &nbsp;  &nbsp; Arpita Hirlekar </p>
</footer>



</section>
          </center>
  </body>

</html>
