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
			<div class="sub-page-header js">Variables</div>

			<h5>Variables are used to store data in javascript</h5>
			<p class="sub-page-disc">How to assign a variable:</p>
			<ul class="sub-page-ul js">
				<li>var x = ("something")</li>
				<li>var y = x;</li>
				<li>var z = 26;</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	var a = "Hello";
	
	var fName = "John",
	var mName = "Q",
	var lName = "Adams";

	var fullName = fName + " " + mName + " " + lName;

	var firstValue = 14;
	var secondValue = 22;
	var totalValue = firstValue + secondValue;

	var numbers = 12 + 21 + totalValue;


	var carName;
	var carType;

	carName = "Toyota";
	carType = "Corolla";


	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="statements.php">Statements</a></li>
			<li><a href="syntax.php">Syntax</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>