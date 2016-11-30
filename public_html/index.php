<!DOCTYPE html>
<html>
	<head lang="en">
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>
<!--		reCaptcha client-side integration step1-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Bootstrap: Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">


		<!-- echo the $PAGE_TITLE variable here -->
		<title>Jon Sheafe</title>
	</head>
	<body>
		<header>
			<div class="container" id="nav-t">
				<div class="row col-sm-offset-4 navbar-fixed-top">
					<div class="col-sm-2">
						<!--Home button -->
						<button type="button" class="btn btn-primary btn-lg" id="btn-home">Home</button>
					</div>
					<div class="col-sm-2">
						<!-- Tech Button -->
						<button type="button" class="btn btn-primary btn-lg" id="btn-tech">Tech Disc</button>
					</div>
					<div class="col-sm-2">
						<!-- Contact Button -->
						<button type="button" class="btn btn-primary btn-lg" id="btn-contact">Contact</button>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-sm-3"><img src="img/headShot.png" rel="portrait" class="img-rounded img-responsive">
					</div>
					<div class="col-sm-offset-4">
						<h2>Welcome to my personal page</h2><br/>
						<p> I am pursuing a new career in web development because I discovered that I have a passion to
							problem solve and find solutions using technology and process improvements. At my previous
							position, I realized that there were limitations to the reports and databases used in the
							department. I then began learning on my own and improved those databases and reports to better fit
							my department. However, the databases were limited as they were all in Microsoft access, which they
							could easily be deleted or changed. I then realize that I needed additional skills to make them
							more secure and resilient. This is the reason I decided to return to school and learn current
							computer languages and techniques. As a developer, I am able to use different languages,
							frameworks, and dev tools to find solutions to complex problems without having the same limitations
							that I had in the past. </p>
					</div>
				</div>

				<div class="container " id="tech">

					<div class="col-sm-9 col-sm-offset-3" id="tech-boarder">
						<h2>Tech Details</h2>
						<div class="row">
							<div class="col-sm-1">
								<a href="https://en.wikipedia.org/wiki/PHP" target="_blank"> <img src="img/php.png" rel="php 7" class="img-responsive"></a>
							</div>
							<div class="col-sm-1"><a href="https://en.wikipedia.org/wiki/mysql" target="_blank">
									<img src="img/mySql.png" rel="mySQL" class="img-responsive"></a>
							</div>
							<div class="col-sm-1">
								<a href="https://en.wikipedia.org/wiki/AngularJS#Angular_2" target="_blank">
									<img src="img/angular2.jpg" rel="angular 2" class="img-rounded img-responsive">
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<a href="https://en.wikipedia.org/wiki/HTML5" target="_blank">
									<img src="img/html5.png" rel="HTML 5" class="img-responsive">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets#CSS_3" target="_blank">
									<img src="img/css3.png" rel="CSS 3" class="img-responsive">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">
									<img src="img/javaScript.png" rel="javaScript" class="img-rounded img-responsive">
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-1">
								<a href="https://en.wikipedia.org/wiki/Node.js" target="_blank">
									<img src="img/nodeJs.png" rel="nodeJs" class="img-responsive">
								</a>
							</div>
						</div>
						index.php
					</div>
					</p>
				</div>
			</div>
			<!--Begin Contact Form-->
			<form id="contact-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<label for="name">Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6LdFcA0UAAAAABjSu7jnwQeuiF931FBPoX_h44Zx"></div>

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>

			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</main>
		<footer>
			<div class="container"
				  <div class="row col-sm-offset-4 navbar-fixed-bottom" id="nav-b">
					  <div class="col-sm-12" >
						  <!--Home button -->
						  <button type="button" class="btn btn-primary btn-lg" id="btn-home2">Home</button>
					  </div>
					  <div class="col-sm-12">
						  <!-- Tech Button -->
						  <button type="button" class="btn btn-primary btn-lg" id="btn-tech2">Tech Disc</button>
					  </div>
					  <div class="col-sm-12">
						  <!-- Contact Button -->
						  <button type="button" class="btn btn-primary btn-lg" id="btn-contact2">Contact</button>
					  </div>
				  </div>

		</footer>
	</body>

</html>