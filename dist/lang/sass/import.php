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
			<div class="sub-page-header css">Import</div>

			<h5>Imports are used to import and combine partial sass files then output as a single css file.</h5>
			<p class="sub-page-disc">SASS code used for Import:</p>
			<ul class="sub-page-ul css">
				<li>&#64;import: " ";</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">&#64;import: "</span> <span class="value">base/typography</span><span class="title">" ;</span>
<span class="title">&#64;import: "</span> <span class="value">base/buttons</span><span class="title">" ;</span>

</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="include.php">Include</a></li>
			<li><a href="extend.php">Extend</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>