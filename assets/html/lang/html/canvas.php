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
			<div class="sub-page-header html">Canvas</div>

			<h5>Canvas allows you to output 2d shapes with html5 and javascript.</h5>
			<p class="sub-page-disc">HTML code used for canvas:</p>
			<ul class="sub-page-ul html">
				<li>&lt;canvas&gt; &lt;/canvas&gt;</li>
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;canvas id="canvas"&gt; &lt;/canvas&gt;

	&lt;script&gt;
		var canvas = document.getElementById('canvas');
		var canvasObj = c.getContext("2d");
		canvasObj.fillStyle = "#333";
		canvasObj.fillRect(0,0,120,50);
	&lt;/script&gt;
	</span>
<span class="title">&lt;/body&gt;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also html">
			<li><a href="iframe.php">Iframe</a></li>
			<li><a href="media.php">Media</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>