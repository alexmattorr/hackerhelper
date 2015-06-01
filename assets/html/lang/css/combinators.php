<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Combinators</title>
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
			<div class="sub-page-header css">Combinators</div>

			<h5>CSS combinators explain the relationship between the selectors.</h5>
			<p class="sub-page-disc">There are four diffrent CSS3 combinators:</p>
			<ul class="sub-page-ul css">
				<li>descentant selector</li>
				<li>child selector</li>
				<li>adjacent sibling selector</li>
				<li>general sibling selector</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">div p {</span>
	<span class="value">background-color: blue;	//descentant selector</span>
<span class="title">}</span><br>
<span class="title">div > p {</span>
	<span class="value">background-color: blue;	//child selector</span>
<span class="title">}</span><br>
<span class="title">div + p {</span>
	<span class="value">background-color: blue;	//adjacent sibling selector</span>
<span class="title">}</span><br>
<span class="title">div ~ p {</span>
	<span class="value">background-color: blue;	//general sibling selector</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="dimension.php">Dimensions</a></li>
			<li><a href="transitions.php">Transitions</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>