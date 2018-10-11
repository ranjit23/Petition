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


        <ul class="topnav">
          <li>
            <a  href="{{ url('/')}}">HOME</a>
          </li>

          <li>
            <a href="{{ url('/petition') }}" class="active"> BROWSE PETITIONS</a>
          </li>
          <li>
            <a href="{{ route('register') }}">START YOUR OWN PETITION</a>
          </li>
          <li class="right">
            <a href="login.html">LOG IN</a>

          </li>
        </ul>


<h1 align="center" style="font-size:50px;margin-top:30px;font-family: 'Mali', cursive ;"> LIST OF PETITIONS </h1>

<div class="start">

  @foreach($petitions as $petition)
  <h1 style="font-size:30px;"> <a href="/petition/{{ $petition->id }}/show">
  {{ $petition->title }}</a>
  <br></h1>
  <p>
    {{ $petition->description }}
<br />
    Created by {{ $petition->user->name }}
  </p>
  @endforeach




  </body>
</head>
</html>
