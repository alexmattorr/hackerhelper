<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String Methods</title>
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
			<div class="sub-page-header js">String Methods</div>

			<h5>String Methods help you to work with strings</h5>
			<p class="sub-page-disc">Popular string methods include:</p>
			<ul class="sub-page-ul js">
				<li>indexOf()</li>
				<li>match()</li>
				<li>replace()</li>
				<li>search()</li>
				<li>slice()</li>
				<li>split()</li>
				<li>toString()</li>
				<li>valueOf()</li>
			</ul><br>
			<p class="sub-page-disc">The indexOf() method returns the index of the first occurrence of a specified tect in a string.</p>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	var str = "Hello! please locate where 'Hello!' appears!";
	var pos = str.indexOf('Hello!');
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="strings.php">Strings</a></li>
			<li><a href="arrays.php">Arrays</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>