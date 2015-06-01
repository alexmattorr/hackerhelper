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
			<div class="sub-page-header js">Switch</div>

			<h5>Switch statements is similar to if/else statement chain. It will check list of conditions in order and start executing cases that are true until it find breaking statement. If there is no true condition in switch statement, it will execute the default case.</h5>
			<p class="sub-page-disc">Switch statements syntax are:</p>
			<ul class="sub-page-ul js">
				<li>switch (expression) {</li>
				<li>case label1:</li>
				<li>statements1</li>
				<li>[break;]</li>
				<li>case label2:</li>
				<li>statements2</li>
				<li>[break;]</li>
				<li>default:</li>
				<li>statements</li>
				<li>[break;]</li>
				<li>}</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> weather = sunny</span><span class="title">;</span>

<span class="title">switch</span><span class="value"> (weather)</span><span class="title"> {</span>
	<span class="title">case</span><span class="value">"rainny":
		console.log("Today is a rainny day");</span>
	<span class="title">case</span><span class="value">"sunny":
		console.log("Today is a sunny day");</span>
		<span class="title">break;</span>
	<span class="title">default:</span><span class="value">
		console.log("Today is a nice day");</span>
	<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="logical.php">Logical</a></li>
			<li><a href="comparisons.php">Comparisons</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>