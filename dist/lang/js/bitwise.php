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
			<div class="sub-page-header js">Bitwise</div>
			<h5>Bitwise operator treats numeric operands as a set of 32 bits in binary system (0 and 1).</h5>
			<p class="sub-page-disc">Bitwise operators are:</p>
			<ul class="sub-page-ul js">
				<li>&amp;&amp;  AND</li>
				<li>|  OR</li>
				<li>&#94; XOR</li>
				<li>&#126; NOT</li>
				<li>&#171; Left Shift</li>
				<li>&#187; Right Shift</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="code-comment">//Example of &amp;&amp;  AND bitwise operator</span>
<span class="value">a = 20 &amp;&amp; 2</span><span class="title">;</span><span class="code-comment">//The result is 0</span>
<span class="code-comment">//Example of | OR bitwise operator</span>
<span class="value">a = 20 | 2</span><span class="title">;</span><span class="code-comment">//The result is 22</span>
<span class="code-comment">//Example of &#94;  XOR bitwise operator</span>
<span class="value">a = 20 &#94; 2</span><span class="title">;</span><span class="code-comment">//The result is 22</span>
<span class="code-comment">//Example of &#126;  NOT bitwise operator</span>
<span class="value">a = 20 &#126; 2</span><span class="title">;</span><span class="code-comment">//The result is -21</span>
<span class="code-comment">//Example of &#171;  Left Shift bitwise operator</span>
<span class="value">a = 20 &#171; 2</span><span class="title">;</span><span class="code-comment">//The result is 80</span>
<span class="code-comment">//Example of &#187;  Right Shift bitwise operator</span>
<span class="value">a = 20 &#187; 2</span><span class="title">;</span><span class="code-comment">//The result is 5</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="comparisons.php">Comparisons</a></li>
			<li><a href="logical.php">Logicals</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>