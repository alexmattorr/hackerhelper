<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math</title>
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
			<div class="sub-page-header js">Math</div>

			<h5>In JavaScript, the math object alloes you to preform mathematical task on numbers.</h5>
			<p class="sub-page-disc">The math object includes several mathematical methods, here are a few:</p>
			<ul class="sub-page-ul js">
				<li>round(x)</li>
				<li>atan2(y,x)</li>
				<li>cos(x)</li>
				<li>max(x,y,z,...,n)</li>
				<li>random()</li>
				<li>sin(x)</li>
				<li>tan(x)</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	Math.random();	//returns a random number
	Math.round(3.7)	//returns 4
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="numbers.php">Numbers</a></li>
			<li><a href="events.php">Events</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>