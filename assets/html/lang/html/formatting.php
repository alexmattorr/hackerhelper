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
			<div class="sub-page-header html">formatting</div>

			<h5>Formatting allows you to apply generic styles to html</h5>
			<p class="sub-page-disc">HTML code used for formatting:</p>
			<ul class="sub-page-ul html">
				<li>&lt;b&gt; &lt;/b&gt;</li>
				<li>&lt;strong&gt; &lt;/strong&gt;</li>
				<li>&lt;i&gt; &lt;/i&gt;</li>
				<li>&lt;em&gt; &lt;/em&gt;</li>
				<li>&lt;small&gt; &lt;/small&gt;</li>
				<li>&lt;marked&gt; &lt;/marked&gt;</li>
				<li>&lt;del&gt; &lt;/del&gt;</li>
				<li>&lt;ins&gt; &lt;/ins&gt;</li>
				<li>&lt;sup&gt; &lt;/sup&gt;</li>
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;b&gt; this text will be bold &lt;/b&gt;
	&lt;strong&gt; this text will be strong &lt;/strong&gt;
	&lt;i&gt; this text will be italic &lt;/i&gt;
	&lt;em&gt; this text will be emphazised &lt;/em&gt;
	&lt;small&gt; this text will be smaller &lt;/small&gt;
	&lt;marked&gt; this text will be highlighted &lt;/marked&gt;
	&lt;del&gt; this will remove text &lt;/del&gt;
	&lt;ins&gt; this will insert text &lt;/ins&gt;
	&lt;sup&gt; this will be superscript &lt;/sup&gt;
	&lt;sub&gt; this will be subscript &lt;/sub&gt;
	</span>
<span class="title">&lt;/body&gt;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also html">
			<li><a href="headings.php">Headings</a></li>
			<li><a href="paragraph.php">Paragraph</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>