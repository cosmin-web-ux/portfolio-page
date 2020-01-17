<?php

if (
	!empty($_POST['name']) &&
	!empty($_POST['email']) &&
	!empty($_POST['message'])
) {

	// print_r($_POST);
	// die();

	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	];

	$link = 'mysql:host=localhost;dbname=portfolio;chatset=utf8';

	$connection = new PDO($link, 'root', '', $options);

	$data = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message'],
	];
	$query = $connection->prepare("insert into contact(name, email, message) values(:name, :email, :message)");
	$query->execute($data);

	echo '<div class="alert alert-success">Your message was submitted.</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Bootstrap Theme</title>
	<style>
		a.darken {
			display: inline-block;
			background: black;
			padding: 0;
		}

		a.darken img {
			display: block;
			-webkit-transition: all 0.5s linear;
			-moz-transition: all 0.5s linear;
			-ms-transition: all 0.5s linear;
			-o-transition: all 0.5s linear;
			transition: all 0.5s linear;
		}

		a.darken:hover img {
			opacity: 0.7;
		}
	</style>

</head>

<body>
	<div class="container">
		<header id="main-header">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-5"> <img src="img/profil.jpg" alt="profil"> </div>
				<div class="col-lg-8 col-md-7">
					<div class="d-flex flex-column">
						<div class="p-5 bg-dark text-white">
							<div class="d-flex flex-row justify-content-between align-items-center">
								<h1 class="display-4">Cosmin Stanjic</h1>
								<div class="d-none d-md-block">
									<a href="https://www.linkedin.com/in/cosmin-web-ux/" target="_blank" class="text-white"> <i class="fab fa-linkedin"></i> </a>
								</div>
								<div>
									<a href="https://www.facebook.com/cs01234" target="_blank" class="text-white"> <i class="fab fa-facebook"></i> </a>
								</div>
								<div>
									<a href="https://codepen.io/cosmin-web-ux" target="_blank" class="text-white"> <i class="fab fa-codepen"></i> </a>
								</div>
								<div>
									<a href="https://github.com/cosmin-web-ux" target="_blank" class="text-white"> <i class="fab fa-github"></i> </a>
								</div>
							</div>
						</div>
						<div class="pl-5 pb-4 pt-2 bg-dark text-white lead"> Web Developer Seeking a New Opportunity </div>
						<div>
							<div class="d-flex flex-row text-white align-items-stretch text-center">
								<div class="port-item p-4 bg-primary" data-toggle='collapse' data-target='#home'> <i class="fas fa-home fa-2x d-block"></i> <span class="d-none d-sm-block">Home</span> </div>
								<div class="port-item p-4 bg-success" data-toggle='collapse' data-target='#resume'> <i class="fas fa-graduation-cap fa-2x d-block"></i> <span class="d-none d-sm-block">Resume</span> </div>
								<div class="port-item p-4 bg-warning" data-toggle='collapse' data-target='#work'> <i class="fas fa-folder-open fa-2x d-block"></i> <span class="d-none d-sm-block">Work</span> </div>
								<div class="port-item p-4 bg-danger" data-toggle='collapse' data-target='#contact'> <i class="fas fa-envelope fa-2x d-block"></i> <span class="d-none d-sm-block">Contact</span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- HOME	-->
		<div id="home" class="collapse show">
			<div class="card card-body bg-primary text-white py-4">
				<h2>Welcome To My Page</h2>
				<p class="lead">I am currently looking for a job that will give me the opportunity to improve my skills and learn new frameworks, responsive design principles and website optimization. </p>

				<p class="lead">My goal is to bring value to the organization by improving the efficiency of procedures and being part of a team of passionate people that bring ideas to life, make work fun, fulfilling and exciting.</p>
			</div>
			<div class="card card-body py-5">
				<h3>My Skills</h3>
				<p>So far, I have gained good knowledge of HTML, CSS, SASS, TypeScript, Bootstrap, Wordpress, PHP, Node.js, Java, SQL and NoSQL Databases.</p>
				<hr>
				<h4>HTML 5 / CSS 3 / JavaScript</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 90%"></div>
				</div>
				<h4>React / Angular / Typescript</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 75%"></div>
				</div>
				<h4>Wordpress</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 75%"></div>
				</div>
				<h4>PHP / Node.js</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 80%"></div>
				</div>
				<h4>SQL & NoSQL Databases</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 85%"></div>
				</div>
				<h4>Java</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 75%"></div>
				</div>
				<h4>Git</h4>
				<div class="progress mb-3">
					<div class="progress-bar bg-success" style="width: 90%"></div>
				</div>
			</div>
		</div>
		<!-- RESUME	-->
		<div id="resume" class="collapse">
			<div class="card card-body bg-success text-white py-4">
				<h2>My Resume</h2>
				<p class="lead">Please use the <i>Download Resume</i> button below for details of my employment.</p>
			</div>
			<div class="card card-body py-5">
				<h3>Where Have I Studied?</h3>
				<p>My two most recent courses</p>
				<div class="card-deck">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">IT School</h4>
							<p class="card-text">Accredited Course</p>
							<p class="p-2 mb-3 bg-dark text-white"> PHP & SQL Databases </p>
							<p class="p-2 mb-3 bg-dark text-white"> Timisoara </p>
						</div>
						<div class="card-footer">
							<h6 class="text-muted">Period: October 2019 – February 2020</h6>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Informal School of IT</h4>
							<p class="card-text">Accredited Course</p>
							<p class="p-2 mb-3 bg-dark text-white"> Java Development </p>
							<p class="p-2 mb-3 bg-dark text-white"> Timisoara </p>
						</div>
						<div class="card-footer">
							<h6 class="text-muted">Period: November 2019 – May 2020</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- WORK -->
		<div id="work" class="collapse">
			<div class="card card-body bg-warning text-white py-4">
				<h2>My Work</h2>
				<p class="lead"><i>"The only way to do great work is to love what you do."</i></p>
			</div>
			<div class="card card-body py-5">
				<h3>What Have I Built?</h3>
				<p>Below are some of my projects using the technical skills outlined in my resume.</p>
				<div class="row no-gutters">
					<div class="col-md-3">
						<a href="https://blooming-earth-24006.herokuapp.com/" data-toggle='lightbox' class="darken"> <img src="img/newsletter.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/To-do-List/" data-toggle='lightbox' class="darken"> <img src="img/todo.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://dry-reef-90795.herokuapp.com/" data-toggle='lightbox' class="darken"> <img src="img/todo2.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/Orbiting-Planet-Animation/" data-toggle='lightbox' class="darken"> <img src="img/orbit.jpg" alt="" class="img-fluid"> </a>
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/PenLAB/" data-toggle='lightbox' class="darken"> <img src="img/penlab.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/Mixuze/" data-toggle='lightbox' class="darken"> <img src="img/mixuze.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/Inline-Computer-Services/" data-toggle='lightbox' class="darken"> <img src="img/ics.jpg" alt="" class="img-fluid"> </a>
					</div>
					<div class="col-md-3">
						<a href="https://cosmin-web-ux.github.io/Bloggen-Admin-UI/index.html" data-toggle='lightbox' class="darken"> <img src="img/bloggen.jpg" alt="" class="img-fluid"> </a>
					</div>
				</div>
			</div>
		</div>
		<!-- CONTACT -->
		<div id="contact" class="collapse">
			<div class="card card-body bg-danger text-white py-4">
				<h2>Contact</h2>
				<p class="lead">I am really looking forward to opportunities that would help me maximize my skills so that I can contribute to the success of the company that will hire me.</p>
			</div>
			<div class="card card-body py-5">
				<h3>Get In Touch</h3>
				<p>Please send me a message using the form below.</p>
				<form action="" method="post">
					<div class="form-group">
						<div class="input-group input-group-lg">
							<div class="input-group-prepend"> <span class="input-group-text bg-danger text-white">
									<i class="fas fa-user"></i>
								</span> </div>
							<input type="text" name="name" class="form-control bg-dark text-white" placeholder="Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-lg">
							<div class="input-group-prepend"> <span class="input-group-text bg-danger text-white">
									<i class="fas fa-envelope"></i>
								</span> </div>
							<input type="email" name="email" class="form-control bg-dark text-white" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-lg">
							<div class="input-group-prepend"> <span class="input-group-text bg-danger text-white">
									<i class="fas fa-pencil-alt"></i>
								</span> </div>
							<textarea class="form-control bg-dark text-white" name="message" placeholder="Message" required></textarea>
						</div>
					</div>
					<input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block btn-lg text-white">
				</form>
			</div>
		</div>
		<!-- FOOTER -->
		<footer id="main-footer" class="p-5 bg-dark text-white">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="btn btn-outline-light"> <i class="fas-fa-cloud"></i> Download Resume </a>															
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
	<script>
		$('.port-item').click(function() {
			$('.collapse').collapse('hide');
		});
		$(document).on('click', '[data-toggle="lightbox"]', function(e) {
			e.preventDefault();
			$(this).ekkoLightbox();
		});

		$('#year').text(new Date().getFullYear());
	</script>
</body>

</html>