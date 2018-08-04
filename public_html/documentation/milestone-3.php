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
					<a class="nav-item nav-link " href="#about">About <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Portfolio</a>
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
				<h3 class="text-light display-4 pt-4">About Me</h3>
			</div>
			<div class="row about-me p-5">
				<div class="col-md-3 offset-1 mr-2">
					<img src="images/self-portrait.jpg" alt="Picture of Self" class="img-fluid rounded-circle p-4" width="350px" height="350px">
				</div>
				<div class="col-md-3">
					<p class="about-text text-light text-center border-light p-4">Hi, my name is Joe and I am a professional, full-stack web developer. I recently graduated from the
						Deep Dive Bootcamp at the CNM Stemulus Center. I am passionate about coding and I love learning new
						languages. As a life-long native of the Albuquerque area, I want to help grow the developing tech industry
						here. Check out my portfolio or feel free to contact me anytime.</p>
				</div>
				<div class="col-md-4">
					<div class="row justify-content-center">
						<h3 class="text-light text-center display-5">Skillset <i class="fas fa-code text-light"></i></h3>
					</div>
					<div class="col-sm-6 mx-auto float-left">
						<ul class="list-group">
							<li class="list-group-item"><i class="fab fa-html5 text-light"> HTML 5</i></li>
							<li class="list-group-item"><i class="fab fa-css3 text-light"> CSS 3</i></li>
							<li class="list-group-item"><i class="fab fa-js text-light"></i> JavaScript</li>
						</ul>
					</div>
					<div class="col-sm-6 mx-auto float-right">
						<ul class="list-group">
							<li class="list-group-item"><i class="fab fa-php text-light"> Php</i></li>
							<li class="list-group-item"><i class="fab fa-angular text-light"></i> Angular5</li>
							<li class="list-group-item"><i class="fas fa-database text-light"></i> mySQL</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<!--Container for portfolio section-->
		<div class="container-fluid pt-5">
			<div class="row justify-content-center portfolio-section">
				<div class="text-center pt-5">
					<h3 class="display-4">Portfolio</h3>
					<p>Examples of my previous work: </p>
				</div>
				<div class="row d-block d-md-none">
				<!--JC-Angus Ranch Card-->
					<div class="card col-md-3 offset-md-3 p-3 mx-auto mb-5">
						<img class="card-img-top img-fluid" src="images/jcangus-ranch.jpg" alt="JCAngus Ranch Site Photo" width="200px" height="150">
						<div class="card-body">
							<h5 class="card-title">JC-Angus</h5>
							<p class="card-text">Beginning Website built for my family's ranching business</p>
							<button type="button" class="btn btn-light" data-toggle="modal" data-target="#jcModal">
								Visit Project
							</button>
						</div>
					</div>
					<!--End JC-Angus Ranch Card -->
					<!--Taco Bear Card-->
					<div class="card col-md-3 offset-md-3 p-3 mx-auto mb-5">
						<img class="card-img-top img-fluid" src="images/taco-bear.jpg" alt="Taco Bear Site Photo" width="200px" height="150">
						<div class="card-body">
							<h5 class="card-title">Taco Bear Site</h5>
							<p class="card-text">A fun landing page that displays the flexibility and power of Bootstrap.</p>
							<button type="button" class="btn btn-light" data-toggle="modal" data-target="#tacoBearModal">
								Visit Project
							</button>
						</div>
					</div>
					<!--End Taco Bear Card -->
				</div>
				<div class="container-fluid d-none d-md-block">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100 img-fluid" src="images/jcangus-ranch.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
								<div class="carousel-caption">
									<h5>JC Angus</h5>
									<p  class= "d-none d-md-block">Beginning Website built for my family's cattle ranch.</p>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#jcModal">
										Visit Project
									</button>
								</div>
							</div>
							<div class="carousel-item taco-bear">
								<img class="d-block w-100 img-fluid" src="images/taco-bear.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide" />
								<div class="carousel-caption">
									<h5>Taco Bear</h5>
									<p class= " d-none d-md-block">A fun landing that displays the flexibility and power of Bootstrap.</p>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#tacoBearModal">
										Visit Project
									</button>
								</div>

							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide" />
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<!-- Modal JC-Angus Ranch-->
				<div class="modal fade" id="jcModal" tabindex="-1" role="dialog" aria-labelledby="jcModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="jcModalLabel">JC-Angus Ranch</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/jcangus-ranch2.jpg" alt="Image of JC-Angus Ranch" class="img-fluid">
								<hr>
								<p>This is the first website I created. The purpose of the project was to provide a modern website
									for my family's cattle ranch.</p>
								<p>The website itself was created based upon an example project by Jonas Schetmann. I used my own
									custom css styling and html to create a unique project based upon the skills I acquired.
									The website uses only html and css to display animations and effects</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-light"><a href="http://jcangus.com">Go to Site</a></button>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Taco Bear-->
				<div class="modal fade" id="tacoBearModal" tabindex="-1" role="dialog" aria-labelledby="tacoBearModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="tacoBearModalLabel">Taco Bear</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/taco-bear2.jpg" alt="Image of Taco Bear Challenge" class="img-fluid">
								<hr>
								<p>This is a fun landing page created for a challenge during Deep Dive Bootcamp.</p>
								<p>The website is used to display the power and flexibility of Bootstrap's grid system.
									This site was created for mobile-first design and uses bootstrap components along with
									custom css styling. This site can be further expanded to add additional pages and features.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-light"><a href="https://bootcamp-coders.cnm.edu/~jisbell1/bootstrap-4-challenge/">Go to Site</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>
