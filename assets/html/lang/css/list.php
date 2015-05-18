<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Font</title>
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
			<div class="sub-page-header css">List</div>

			<h5>CSS list properties are used to set diffrent list item markers for ordered and unordered lists and to set an image as the list item marker.</h5>
			<p class="sub-page-disc">CSS properties used for list properties:</p>
			<ul class="sub-page-ul css">
				<li>list-style</li>
				<li>list-style-image</li>
				<li>list-style-position</li>
				<li>list-style-type</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">ur {</span>
	<span class="value">list-style: square;
	list-style-image: url('tree.png');
	list-style-position: outside;
	list-style-type: upper-roman;</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="link.php">Links</a></li>
			<li><a href="background.php">Background</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>