<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hackerhelper</title>
	<link rel="stylesheet" href="../../assets/css/style.css">
	<script src="../../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../../assets/js/app.min.js"></script>
</head>
<body>
	<div class="container">
		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Objects</div>

			<h5>Objects are everything in Javascript</h5>
			<p class="sub-page-disc">Objects contain properties, methods, values, functions.</p>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	var car = "mustang";

	var mustang = {
		year: "2015",
		type: "sport",
		model: "shelby-gt 500",
		color: "black",
		mph: 662
	};

	console.log( mustang.type() );
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="functions.php">Functions</a></li>
			<li><a href="variables.php">Variables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>