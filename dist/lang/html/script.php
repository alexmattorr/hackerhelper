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
			<div class="sub-page-header html">Script</div>

			<h5>Script allows you to write javascript inside of your HTML or include it.</h5>
			<p class="sub-page-disc">HTML code used for scripts:</p>
			<ul class="sub-page-ul html">
				<li>&lt;script&gt; &lt;/script&gt;</li>
				<li>&lt;noscript&gt; &lt;/noscript&gt;</li>
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;head&gt;</span>
<span class="title">&lt;script src="assets/scripts.js"&gt;&lt;/script&gt;</span>
<span class="title">&lt;/head&gt;</span>
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;script"&gt;
		alert("this is how you write javascript in html!");
		document.getElementById("date").innerHTML = Date();
	&lt;/script&gt;

	&lt;noscript"&gt; Why do you disable JS?!&lt;/noscript"&gt;
	</span>
<span class="title">&lt;/body&gt;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also html">
			<li><a href="head.php">Head</a></li>
			<li><a href="links.php">Links</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>