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
			<div class="sub-page-header css">Transitions</div>

			<h5>Transitions allows you to smoothly transform css property within a period of time. </h5>
			<p class="sub-page-disc">CSS code used for Transitions:</p>
			<ul class="sub-page-ul css">
				<li>@keyframes</li>
				<li>animation: ;</li>
    			<li>animation-delay: ;</li>
			    <li>animation-direction: ;</li>
			    <li>animation-duration: ;</li>
			    <li>animation-fill-mode: ;</li>
			    <li>animation-iteration-count: ;</li>
			    <li>animation-name: ;</li>
			    <li>animation-play-state: ;</li>
			    <li>animation-timing-function: ;</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">button { </span><span class="value">
    animation-name: animate1;
    animation-duration: 4s;
    animation-timing-function: ease-in;
    animation-delay: 1s;
    animation-iteration-count: initial;
    animation-direction: normal;
    animation-fill-mode: forwards;
    animation-play-state: running;</span>
<span class="title"> }</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="2dtransforms.php">2D Transforms</a></li>
			<li><a href="3dtransforms.php">3D Transforms</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>