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
			<div class="sub-page-header js">Comparisons</div>

			<h5>Comparison operators are used to compare equality and difference between values.</h5>
			<p class="sub-page-disc">Comparisons operators are:</p>
			<ul class="sub-page-ul js">
				<li>==  equality</li>
				<li>!=  inequality</li>
				<li>===  strict equality</li>
				<li>&gt; greater than</li>
				<li>&lt; less than</li>
				<li>&ge; greater than or equal</li>
				<li>&le; less than or equal</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> x = 19</span><span class="title">;</span>
<span class="title">if</span><span class="value">(x == 19) {
	document.write("x is equal to 19");
} else {
	document.write("x is not equal to 19");
}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="logical.php">Logical</a></li>
			<li><a href="ternary.php">Ternary</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>