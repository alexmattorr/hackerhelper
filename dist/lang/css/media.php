<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Media</title>
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
			<div class="sub-page-header css">Media</div>

			<h5>CSS @media rule makes it possible to define diffrent style rules for diffrent media types.</h5>
			<p class="sub-page-disc">CSS3 media properties:</p>
			<ul class="sub-page-ul css">
				<li>all</li>
				<li>aural</li>
				<li>braille</li>
				<li>embossed</li>
				<li>handheld</li>
				<li>print</li>
				<li>projection</li>
				<li>screen</li>
				<li>tty</li>
				<li>tv</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">@media screen {</span>
	<span class="title">p {</span>
		<span class="value">font-family: verdana, sans-serif
		font-weight 300;</span>
	<span class="title">}</span>
<span class="title">}</span>
</code>
</pre>
		</div>	

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="display.php">Display</a></li>
			<li><a href="tables.php">Tables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>