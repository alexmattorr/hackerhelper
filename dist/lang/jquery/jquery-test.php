<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Page</title>
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
			<div class="sub-page-header js">background</div>

			<h5>CSS background properties are used to define the background effects of an element.</h5>
			<p class="sub-page-disc">CSS properties used for background effects:</p>
			<ul class="sub-page-ul js">
				<li>background-color</li>
				<li>background-image</li>
				<li>background-repeat</li>
				<li>background-attachmen</li>
				<li>background-position</li>
				<li>background-clip</li>
				<li>background-origin</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
<span class="title">body {</span>
	<span class="value">background-image: url(&quot;img_tree.png&quot;);
	background-repeat: no-repeat;
	background-position: right top;
	background-attachment: fixed;
	background-clip: padding-box;
	background-origin: padding-box;</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="#">Margin</a></li>
			<li><a href="#">Padding</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>