<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Meta Tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<!-- JQuery first, then Popper.js, then Bootstrap.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--Title of project -->
		<title>Joseph Isbell's Portfolio</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link" href="#about">About <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Portfolio</a>
					<a class="nav-item nav-link" href="#">Skillset</a>
					<a class="nav-item nav-link" href="#">Contact</a>
				</div>
			</div>
		</nav>
		<div class="jumbotron jumbotron-fluid pt-0">
			<img src="images/coffee-cup-on-decking.jpg" alt="Jumbotron BG Image">
			<div class="container pt-5">
				<h1 class="display-1 pt-5">Joseph Isbell</h1>
				<p class="lead">Professional Web Developer. Coffee Lover</p>
			</div>
		</div>
		<div class="container-fluid" id="about">
			<div class="row about-me justify-content-center">
				<h3 class="text-light display-3">About Me</h3>
			</div>
			<div class="row about-me p-5">
				<div class="col-md-3 offset-1 mr-2">
					<img src="images/self-portrait.jpg" alt="Picture of Self" class="img-fluid rounded-circle p-4" width="350px" height="350px">
				</div>
				<div class="col-md-3">
					<p class="text-light text-center border-right border-light pr-5">Hi, my name is Joe and I am a professional, full-stack web developer. I recently graduated from the
						Deep Dive Bootcamp at the CNM Stemulus Center. I am passionate about coding and I love learning new
						languages. As a life-long native of the Albuquerque area, I want to help grow the developing tech industry
						here. Check out my portfolio or feel free to contact me anytime.</p>
				</div>
				<div class="col-md-4">
					<h3 class="text-light text-center display-5">Skillset <i class="fas fa-code text-light"></i></h3>
					<ul class="list-group">
						<li class="list-group-item list-group-item-dark"><i class="fab fa-html5 text-light"> HTML 5</i></li>
						<li class="list-group-item list-group-item-dark"><i class="fab fa-css3 text-light"> CSS 3</i></li>
						<li class="list-group-item list-group-item-dark"><i class="fab fa-js text-light"></i> JavaScript</li>
						<li class="list-group-item list-group-item-dark"><i class="fab fa-php text-light"> Php</i></li>
						<li class="list-group-item list-group-item-dark"><i class="fab fa-angular text-light"></i> Angular 5</li>
						<li class="list-group-item list-group-item-dark"><i class="fas fa-database text-light"></i> mySQL</li>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>
