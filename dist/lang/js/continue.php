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
			<div class="sub-page-header js">Continue</div>

			<h5>Continue is used to skip one iteration of the loop in case we assigned a condition.</h5>
			<p class="sub-page-disc">Continue syntax is:</p>
			<ul class="sub-page-ul js">
				<li>continue;</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> i = 1</span><span class="title">;</span>
<span class="title">while</span><span class="value">(i &lt; 20)</span><span class="title"> {</span>
	<span class="value">i++;</span>
	<span class="title">if (i == 10) { continue; }
	<span class="value">document.write(i + "&lt;br&gt;");</span><span class="code-comment">// it will skip outputting number 10 and continue with 11</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="break.php">Break</a></li>
			<li><a href="whileloop.php">While Loop</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>