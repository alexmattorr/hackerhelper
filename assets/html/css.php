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
					<div class="search-filter cf">
						<input type="text" placeholder="search" id="query" ng-model="query" /><i class="fa fa-search"></i>
						<div class="filter cf">
							<div class="lang css is-active">css</div>
							<div class="lang css">scss</div>
						</div>

						<div class="lang-tri-wrap">
							<div class="lang-tri-content blue-tri-content is-active">
								<div class="lang-tri blue-tri-color"></div>
							</div>
							<div class="lang-tri-content blue-tri-content">
								<div class="lang-tri blue-tri-color"></div>
							</div>
						</div>
						<div class="lang-tri-wrap light-blue"></div>

					</div>

					<div class="main">
						<ul class="lang-items is-active">
							<li class="css-border" ng-repeat="css in cssLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{css.url}}">{{css.name}}</a>
							</li>
						</ul>
						<ul class="lang-items">
							<li class="css-border" ng-repeat="sass in sassLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{sass.url}}">{{sass.name}}</a>
							</li>
						</ul>
					</div>
				</article>
			</section>
	</div>
</body>
</html>