

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
			<title> Fight for Your Rights </title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
				</head>
				<body>
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

					<a href="{{ route('register') }}">Register</a>
					</li>
					<li class="right">
					<a href="{{ route('login') }}">Login</a>

            @else

            <a href="{{ url('/home') }}">Home</a>
          </li>
          <li>
            <a href="#About">ABOUT</a>
          </li>
          <li>
            <a href="{{ url('/petition') }}">Browse Petition</a>
          </li>
          <li>

          <a href="{{ route('register') }}">Register</a>
        </li>
        <li class="right">
          <a href="{{ route('login') }}">Login</a>

        @endauth

						</li>
					</ul>
@endif








					<img src="{{ asset('svg/media/lawf.jpg') }}" class="img1" alt="No image" width="100%" >



									<div class="left">
										<div style="margin-top:200px; margin-left:50px;">
											<h1 style="font-size:40px;">

         WHAT IS A PETITION?</h1>
											<p style="font-size:25px;">

           A petition is a request signed by many people against or for a particular cause. Many people come together to support a particular
           cause of their liking. A petition has a goal set for the number of people signing up for it. As a particular petition reaches the goal,
                                    the petition is then forwarded to the legal authorities who then can take some legal action. </p>
										</div>
									</div>
									<div class="right1">
										<a name="About">
											<img src="{{ asset('svg/media/what is a petition.jpg') }}" style="border-radius:50%; margin-top:100px;" alt="no image" class="what" />
										</a>
									</div>

								<div class="start">
									<img src="{{ asset('svg/media/why sign a peition.jpg') }}" alt="no image" class="why" />
									<h1 style="font-size:30px;"> WHY SIGN A PETITION?</h1>
									<p style="font-size:22px;">
                                Witnessed something unjust happening in the society?
                               Want to bring people together to support
                                your cause?
                             Sign up for a petition!
          </p>
								</div>
								<div class="mid">
									<img src="{{ asset('svg/media/online petition.jpg') }}" alt="no image" class="why" />
									<h1 style="font-size:30px;">
         ONLINE PETITION</h1>
									<p style="font-size:22px;">

                                An online petition can be signed by any person across the globe!
                            It can be easily forwarded to people across globe supporting
                                the   same cause. So go ahead and support a cause of your liking now!
         </p>
								</div>
								<div class="end">
									<img src="{{ asset('svg/media/want to raise your voice.jpg') }}" alt="no image" class="why" />
									<h1 style="font-size:30px;">  WANT TO RAISE YOUR VOICE?</h1>
									<p style="font-size:22px;">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Then vote for a petition or start your own petition.
         </p>
								</div>


								<br/>
								<br/>
								<a name="createyourpetition"></a>


						<div class="start">
										<img src="{{ asset('svg/media/step1.png') }}" alt="no image" class="why" />
										<h1 style="font-size:30px;">
                                Click on 'start your own petition' </h1>
									</div>
									<div class="mid">
										<img src="{{ asset('svg/media/step2.png') }}" alt="no image" class="why" />
										<h1 style="font-size:30px;"> Fill in the required details </h1>
                    		</div>
                        <div class="end">


                    <img src="{{ asset('svg/media/step3.png') }}" alt="no image" class="why" />
                    <h1 style="font-size:30px;">
         Voila! Your own petition is created!</h1>
           </div>




           <a href="{{ url('/register') }}" class="button" style="margin-top:80px; margin-left: 80px;">Start your own Petition</a>



        <footer style="margin-top:100px;">
        <p align="center" style="font-size:25px;"> &copy; ONLINE PETITION </p>

              <p align="center"> Developed and Maintained by</p>

            <center>

              <p> Ranjit Desai &nbsp;  &nbsp;  Arafaat Chaudhary &nbsp; &nbsp;   Gauri Deshpande  &nbsp;  &nbsp; Arpita Hirlekar </p>
      </center></footer>


					</body>
				</html>
