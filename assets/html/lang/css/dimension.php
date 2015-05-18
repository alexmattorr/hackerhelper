<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dimension</title>
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
			<div class="sub-page-header css">Dimension</div>

			<h5>CSS dimension allows you to specifie the height and width of an element.</h5>
			<p class="sub-page-disc">CSS properties used for dimensions:</p>
			<ul class="sub-page-ul css">
				<li>height</li>
				<li>max-height</li>
				<li>min-height</li>
				<li>width</li>
				<li>max-width</li>
				<li>min-width</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">body {</span>
	<span class="value">height: 70%;
	width: 80%;</span>
<span class="title">}</span><br>
<span class="title">div {</span>
	<span class="value">min-height: 300px;
	min-width: 500px;</span>
<span class="title">}</span><br>
<span class="title">p {</span>
	<span class="value">max-height: 100px;
	max-width: 150px;</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="boxmodel.php">Box Model</a></li>
			<li><a href="padding.php">Padding</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>