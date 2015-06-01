<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dates</title>
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
			<div class="sub-page-header js">Dates</div>

			<h5>In JavaScript, the date object lets you work with dates I.E. years, months, days, hours, minutes, seconds, and milliseconds.</h5>
			<p class="sub-page-disc">The date format can be written as a string:</p>
			<ul class="sub-page-ul js">
				<li>Fri May 28 2015 15:28:45 GMT-0700 (Pacific Daylight Time)</li>
			</ul><br>
			<p class="sub-page-disc">Or as a number:</p>
			<ul class="sub-page-ul js">
				<li>1433111327859</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	document.getElementById("demo").innerHTML = Date();
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="numbers.php">Numbers</a></li>
			<li><a href="math.php">Math</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>