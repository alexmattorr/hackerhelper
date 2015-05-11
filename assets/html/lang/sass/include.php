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
			<div class="sub-page-header css">Include</div>

			<h5>Include elements are used to call and pass value into mixin.</h5>
			<p class="sub-page-disc">SASS code used for Include:</p>
			<ul class="sub-page-ul css">
				<li>&#64;include: ;</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.box1 {</span> <span class="value">@include border-radius(20px);</span><span class="title"> }</span>
<span class="title">.box2 {</span> <span class="value">@include border-radius(5px);</span><span class="title"> }</span>


</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="mixins.php">Mixins</a></li>
			<li><a href="variables.php">Variables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>