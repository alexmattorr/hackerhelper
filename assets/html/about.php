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
					<div class="main sub-page about">
							<h1>Hi, We are Hacker Helper</h1>
							<p>Bacon ipsum dolor amet ball tip porchetta brisket fatback sausage tenderloin spare ribs kevin boudin. Alcatra meatball landjaeger jerky shank hamburger. Beef bresaola ball tip ham chuck tail shoulder. Short loin turkey beef ham hock kielbasa. Beef turkey drumstick rump chuck. Ball tip ribeye brisket, short ribs doner pastrami ham hock ham cow flank strip steak beef ribs porchetta pork chop chicken.</p>
							<div class="columns">
								<div class="column">
									<img src="assets/img/alex.png"/>
									<h5>Alexander Orr</h5>
									<p>Developer / Team lead</p>
								</div>
								<div class="column">
									<img src="assets/img/alex.png"/>
									<h5>Minnie Tantiphipop</h5>
									<p>UX & UI Developer / Designer</p>
								</div>
								<div class="column">
									<img src="assets/img/alex.png"/>
									<h5>Ryan Coughlin</h5>
									<p>UX & UI Developer / Designer</p>
								</div>
							</div>
		
						<h3>We'd love to hear from you!</h3>
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
			
						<div class="columns">
							<div class="column">
								<img src="assets/svg/coffeecup.svg"/>
							</div>
							<div class="column">
								<h4>&lt;LIKE OUR APP?&#47;&gt;</h4>	
								<h4>&lt;BUY US A CUP OF COFFEE&#47;&gt;</h4>
								<div class="button paypal"></div>	
							</div>
						</div>
					</div>

				</article>
			</section>
	</div>
</body>
</html>