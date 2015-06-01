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
			<div class="sub-page-header js">Classes</div>

			<h5>Classes are methods for css and html manipulation.</h5>
			<p class="sub-page-disc">Example of classes:</p>
			<ul class="sub-page-ul js">
				<li>.addClass()</li>
				<li>.removeClass()</li>
				<li>.toggleClass()</li>
				<li>.css()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("ul li").mouseenter(function() {
		$("ul li").removeClass("is-active");
		$(this).addClass("is-active");
	});

	$("button").click(function() {
		$("h1").toggleClass("blue");
		$("h2").css({
			"color": "blue",
			"opacity": 1
		});
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="fade.php">Fade</a></li>
			<li><a href="remove.php">Remove</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>