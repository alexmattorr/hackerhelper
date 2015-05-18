<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Background</title>
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
			<div class="sub-page-header css">background</div>

			<h5>CSS background properties are used to control the background of an element.</h5>
			<p class="sub-page-disc">CSS properties used for background effects:</p>
			<ul class="sub-page-ul css">
				<li>background-color</li>
				<li>background-image</li>
				<li>background-repeat</li>
				<li>background-attachmen</li>
				<li>background-position</li>
				<li>background-clip</li>
				<li>background-origin</li>
			</ul>
			<br>
			<p class="sub-page-disc">CSS3 properties used for background effects:</p>
			<ul class="sub-page-ul css">
				<li>background-size</li>
				<li>background-origin</li>
				<li>background-clip</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">body {</span>
	<span class="value">background-image: url(&quot;img_tree.png&quot;);
	background-repeat: no-repeat;
	background-position: right top;
	background-attachment: fixed;
	background-clip: padding-box;
	background-origin: padding-box;
	background-size: 150px 100px;
	background-origin: content-box;
	background-clip: content-box;</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
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