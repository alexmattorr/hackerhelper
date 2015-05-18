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
			<div class="sub-page-header css">Border Images</div>

			<h5>Border Images allows you to assign an image as border instead of regular border.</h5>
			<p class="sub-page-disc">CSS code used for Rounded Corner:</p>
			<ul class="sub-page-ul css">
				<li>border-image-source: ;</li>
				<li>border-image-slice: ;</li>
				<li>border-image-width: ;</li>
				<li>border-image-outset: ;</li>
				<li>border-image-repeat: ;</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.banner { </span><span class="value">
	border-image-source: url(assets/svg/border.svg);
	border-image-slice: 80%;
	border-image-width: 2px;
	border-image-outset: 5px;
	border-image-repeat: repeat;</span>
<span class="title"> }</span>
<span class="title">.banner { </span><span class="value">
	border-image: url("assets/svg/border.svg") 10 10 repeat;</span>
<span class="title"> }</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="border.php">Border</a></li>
			<li><a href="roundedcorner.php">Rounded Corner</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>