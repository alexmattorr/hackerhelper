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
			<div class="sub-page-header js">Get & Set</div>

			<h5>Get is used to recieve values from html, set is used to assign</h5>
			<p class="sub-page-disc">Example of get:</p>
			<ul class="sub-page-ul js">
				<li>.text()</li>
				<li>.html()</li>
				<li>.val()</li>
				<li>.attr()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("button").click(function() {
		console.log( $(h1).text() );
		console.log( $(h1).text("header") );

		console.log( $(h2).html() );
		console.log( $(h2).html("subheader") );

		console.log( $('#input').val() );
		console.log( $('#input').val(6) );

		console.log( $('#home-link').attr("href") );
		console.log( $('#home-link').attr("index.html") );
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="ajax.php">Ajax</a></li>
			<li><a href="dimensions.php">Dimensions</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>