<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number Methods</title>
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
			<div class="sub-page-header js">Number Methods</div>

			<h5>In JavaScript, number methods help you work with numbers.</h5>
			<p class="sub-page-disc">Global functions can be used in all JS data types:</p>
			<ul class="sub-page-ul js">
				<li>Number()</li>
				<li>parseFloat()</li>
				<li>parseInt()</li>
			</ul><br>
			<p class="sub-page-disc">Number methods can be used on numbers:</p>
			<ul class="sub-page-ul js">
				<li>toString()</li>
				<li>toExponential()</li>
				<li>toFixed()</li>
				<li>toPrecision()</li>
				<li>valueOf()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	//The valueOf() method

	var x = 21;
	x.valueOf()
	(21).valueOf()l
	(21 + 4).valueOf();
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="strings.php">Strings</a></li>
			<li><a href="numbers.php">Numbers</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>