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
			<div class="sub-page-header js">Conditions</div>

			<h5>Conditional statements will excecute statements according to a condition.</h5>
			<p class="sub-page-disc">Conditional statement syntax is:</p>
			<ul class="sub-page-ul js">
				<li>if(condition1) { statement1 }</li>
				<li>else if (condition2) { statement2 }</li>
				<li>else { statement3 }</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> x = 20</span><span class="title">;</span>
<span class="title">if</span><span class="value">(x &gt; 20) {
	document.write("x is greater than 20");
} else if(x &lt; 20) {
	document.write("x is less than 20");
} else {
	document.write("x is 20");
}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="ternary.php">Ternary</a></li>
			<li><a href="comparisons.php">Comparisons</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>