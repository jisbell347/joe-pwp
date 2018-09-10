<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Meta Tags -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet" />
		<!-- Link to own CSS Sheet -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- JQuery first, then Popper.js, then Bootstrap.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Javascript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!--Title of project -->
<!--		Icon in tab. Credit to Flaticon.com for use of the image-->
		<link rel="shortcut icon" type="image/png" href="images/hot-coffee.png" />
		<title>Joseph Isbell's Portfolio</title>
	</head>
	<body>
		<!--Begin navigation elements-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#"><img src="images/hot-coffee-rounded-cup-on-a-plate-from-side-view.png" alt="Credit to Flaticon for the image" class="img-fluid nav-icon ml-4"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link " href="#about">About <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#portfolio">Portfolio</a>
					<a class="nav-item nav-link" href="#contact">Contact</a>
				</div>
			</div>
		</nav>
		<!-- End navigation elements -->
		<!-- Begin Jumbotron section -->
		<div class="jumbotron jumbotron-fluid pt-0">
			<img src="images/coffee-cup-on-decking.jpg" alt="Jumbotron BG Image" />
			<!-- Container for main jumbotron elements -->
			<div class="container pt-5">
				<h1 class="display-1 pt-5">Joseph Isbell</h1>
				<p class="lead">Professional Web Developer | Coffee Lover</p>
			</div>
		</div>
		<!-- End Jumbotron section -->
		<!-- Begin About Me section -->
		<div class="container-fluid" id="about">
			<div class="row about-me justify-content-center">
				<h3 class="text-light display-4 pt-4">About Me</h3>
			</div>
			<!-- Left side of about me section containing image and short paragraph -->
			<div class="row about-me p-5">
				<div class="col-lg-3 col-md-4 offset-1 mr-2 mb-3 about-img">
					<img src="images/self-portrait.jpg" alt="Picture of Self" class="img-fluid rounded-circle p-4" />
				</div>
				<div class="col-lg-3 col-md-6">
					<p class="about-text text-light text-center border-light p-4">Hi, my name is Joe and I am a professional, full-stack web developer. I recently graduated from the
						Deep Dive Bootcamp at the CNM Stemulus Center. I am passionate about coding and I love learning new
						languages. As a life-long native of the Albuquerque area, I want to help grow the developing tech industry
						here. Check out my portfolio or feel free to contact me anytime.</p>
				</div>
				<!-- Right side of about me section containing skills -->
				<div class="col-lg-4">
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
							<li class="list-group-item"><i class="fab fa-angular text-light"></i> Angular6</li>
							<li class="list-group-item"><i class="fas fa-database text-light"></i> mySQL</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End About Me section -->

		<!--Begin portfolio section-->
		<div class="container-fluid py-5">
			<div class="row justify-content-center portfolio-section" id="portfolio">
				<div class="text-center pt-5">
					<h3 class="display-4">Portfolio</h3>
					<p>Examples of my previous work: </p>
				</div>
				<!-- Mobile version of Portfolio section - websites are displayed using cards -->
				<div class="row d-block d-md-none">
					<!--Lost Paws Card-->
					<div class="card col-md-3 offset-md-3 p-3 mx-auto mb-5">
						<img class="card-img-top img-fluid" src="images/lost-paws.png" alt="Lost Paws" />
						<div class="card-body">
							<h5 class="card-title">Lost Paws</h5>
							<p class="card-text">A fullstack site that allows users to post about animals they lost/found. </p>
							<button type="button" class="btn btn-light" data-toggle="modal" data-target="#lostPawsModal">
								Visit Project
							</button>
						</div>
					</div>
					<!--End Lost Paws Card -->
				<!--JC-Angus Ranch Card-->
					<div class="card col-md-3 offset-md-3 p-3 mx-auto mb-5">
						<img class="card-img-top img-fluid" src="images/jcangus-ranch.jpg" alt="JCAngus Ranch Site Photo" />
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
						<img class="card-img-top img-fluid" src="images/taco-bear.jpg" alt="Taco Bear Site Photo" />
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
				<!-- Desktop version of Portfolio section - Websites are displayed as a carousel-->
				<div class="container-fluid d-none d-md-block pb-5">
					<!-- indicator located on the bottom of the carousel that states which image in the carousel the user is currently on -->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<!-- Main section of the carousel -->
						<div class="carousel-inner">
							<!-- Lost Paws carousel version -->
							<div class="carousel-item active">
								<img class="d-block w-100 img-fluid" src="images/lost-paws.png?auto=yes&bg=777&fg=555" alt="First slide" />
								<div class="carousel-caption">
									<h5>Lost Paws</h5>
									<p  class= "d-none d-md-block">A fullstack site that allows users to post about animals they lost/found.</p>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#jcModal">
										Visit Project
									</button>
								</div>
							</div>
							<!-- End Lost Paws carousel -->
							<!-- JC Angus carousel version -->
							<div class="carousel-item">
								<img class="d-block w-100 img-fluid" src="images/jcangus-ranch.jpg?auto=yes&bg=555&fg=333" alt="First slide" />
								<div class="carousel-caption">
									<h5>JC Angus</h5>
									<p  class= "d-none d-md-block">Beginning Website built for my family's cattle ranch.</p>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#jcModal">
										Visit Project
									</button>
								</div>
							</div>
							<!-- End JC Angus carousel -->
							<!-- Taco Bear carousel -->
							<div class="carousel-item taco-bear">
								<img class="d-block w-100 img-fluid" src="images/taco-bear.jpg?auto=yes&bg=666&fg=444" alt="Second slide" />
								<div class="carousel-caption">
									<h5>Taco Bear</h5>
									<p class= " d-none d-md-block">A fun landing page that displays the flexibility and power of Bootstrap.</p>
									<button type="button" class="btn btn-light" data-toggle="modal" data-target="#tacoBearModal">
										Visit Project
									</button>
								</div>
							</div>
							<!-- End Taco Bear carousel -->
						</div>
						<!-- Carousel controls that allow the user to switch to the next or previous image -->
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
				<!-- Modal Box that is displayed when a user clicks on the button element inside the carousel -->
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
							<!-- Main body of JC Angus Modal Box -->
							<div class="modal-body">
								<!-- Image displayed when modal box is visible -->
								<img src="images/jcangus-ranch2.jpg" alt="Image of JC-Angus Ranch" class="img-fluid" />
								<hr>
								<p>This is the first website I created. The purpose of the project was to provide a modern website
									for my family's cattle ranch.</p>
								<p>The website itself was created based upon an example project on Udemy by Jonas Schemdtmann. I used my own
									custom css styling and html to create a unique project based upon the skills I acquired.
									The website uses only html and css to display animations and effects</p>
							</div>
							<!-- footer section of the modal box that contains the buttons allowing a user to dismiss the modal or visit the portfolio page -->
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
								<a href="http://jcangus.com" class="btn btn-light">Go to Site</a>
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
							<!-- Main body of the Taco Bear modal box -->
							<div class="modal-body">
								<!-- Image displayed when modal box is visible -->
								<img src="images/taco-bear2.jpg" alt="Image of Taco Bear Challenge" class="img-fluid" />
								<hr>
								<p>This is a fun landing page created for a challenge during Deep Dive Bootcamp.</p>
								<p>The website is used to display the power and flexibility of Bootstrap's grid system.
									This site was created for mobile-first design and uses bootstrap components along with
									custom css styling. This site can be further expanded to add additional pages and features.</p>
							</div>
							<!-- footer section of the modal box that contains the buttons allowing a user to dismiss the modal or visit the portfolio page -->
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
								<a href="https://bootcamp-coders.cnm.edu/~jisbell1/bootstrap-4-challenge/" class="btn btn-light">Go to Site</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal Box -->
			</div>
		</div>
		<!-- End Portfolio Section -->
		<!-- Begin Contact Form -->
		<div class="container-fluid contact-section mb-5 pb-5" id="contact">
			<div class="row justify-content-center py-4">
				<h4 class="display-4">Contact</h4>
			</div>
			<!-- Main form of the contact section -->
			<form id="contact-form" action="php/mailer.php" method="post" class="col-md-8 offset-2 mx-auto">
				<!-- Name section of the form -->
				<div class="form-group">
					<label for="contactFormName">Name</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-id-badge" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="contactFormName" name="contactFormName" placeholder="Name">
					</div>
				</div>
				<!-- Email section of the form -->
				<div class="form-group">
					<label for="contactFormEmail">Email</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-envelope-square" aria-hidden="true"></i>
							</span>
						</div>
						<input type="email" class="form-control" id="contactFormEmail" name="contactFormEmail" placeholder="Email">
					</div>
				</div>
				<!-- Subject section of the form -->
				<div class="form-group">
					<label for="contactFormSubject">Subject</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-spinner" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="contactFormSubject" name="contactFormSubject" placeholder="Subject of Message">
					</div>
				</div>
				<!-- Message section of the form -->
				<div class="form-group">
					<label for="contactFormMessage">Message</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-pencil-alt" aria-hidden="true"></i>
							</span>
						</div>
						<textarea class="form-control" rows="5" id="contactFormMessage" name="contactFormMessage" placeholder="Enter Message for Joe Here"></textarea>
					</div>
				</div>
				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6LdRW2oUAAAAALBueb5-MP0WIh9V3W-8goZyArdA"></div>

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-danger" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
			<!-- End contact form section -->
			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>
		<!-- End Main Body of the Page -->
		<!-- Begin Footer Section -->
		<footer class="footer py-3 fixed-bottom">
			<div class="container">
				<div class="row justify-content-center text-center">
					<!-- Links to Social Media -->
					<span class="footer-link"><a href="https://twitter.com/JoeIsbell8?lang=en"><i class="fab fa-twitter"></i></a></span>
					<span class="footer-link"><a href="https://github.com/jisbell347"><i class="fab fa-github"></i></a></span>
					<span class="footer-link"><a href="https://www.linkedin.com/in/joseph-isbell-5267b2163/"><i class="fab fa-linkedin"></i></a></span>
				</div>
				<div class="row justify-content-center text-center">
					<p>Joe Isbell &copy; 2018</p>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->
	</body>

</html>
