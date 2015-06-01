<html ng-app="hackerApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hacker Helper</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/app.min.js"></script>
</head>
<body>
	<div class="container" ng-controller="langCtrl">
			<?php include 'components/header.php';?>
			<?php include 'components/sidebar.php';?>
			<section class="content">
				<article>
					<div class="main sub-page">
						<h5>We'd love to hear from you!</h5>
						<form class="contact-form">
							<i class="orange fa fa-user"></i><input type="text" placeholder="name">
							<i class="blue fa fa-envelope-o"></i><input type="text" placeholder="email">
							<i class="yellow fa fa-pencil"></i></i><input class="message" type="text" placeholder="message">
						  <button type="submit">SEND</button>
						</form>

						<ul class="contact-social">
							<li><a href="#/"><i class="fa fa-globe"></i></a></li>
							<li><a href="#/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#/"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>

				</article>
			</section>
	</div>
</body>
</html>