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
			<div class="sub-page-header js">Functions</div>

			<h5>Functions are created and used to preform a particular task</h5>
			<p class="sub-page-disc">How to write a function:</p>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	function name(parameter, parameter, parameter) {
	 <span class="code-comment">// code to be executed.</span>
	}

	function yourFunction(p1, p2) {
		return p1 + p2;
	}

	var x = document.getElementByID("hello").innerHTML();
	var y = "world";

	function helloWorld() {
	 x + y;
	 return;
	}

	helloWorld();
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="operators.php">Operators</a></li>
			<li><a href="variables.php">Variables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>