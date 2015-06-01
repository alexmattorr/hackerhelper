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
			<div class="sub-page-header html">Lists</div>

			<h5>Lists allow you to add items to a list of similiar information</h5>
			<p class="sub-page-disc">HTML code used for lists:</p>
			<ul class="sub-page-ul html">
				<li>&lt;ul&gt;Unordered List&lt;/ul&gt;</li>
				<li>&lt;ol&gt;Ordered List&lt;/ol&gt;</li>
				<li>&lt;dl&gt;Description List&lt;/dl&gt;</li>
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;ul&gt;
		&lt;li&gt;First Item&lt;/li&gt;
		&lt;li&gt;Second Item&lt;/li&gt;
		&lt;li&gt;Third Item&lt;/li&gt;
	&lt;/ul&gt;

	&lt;li&gt;
		&lt;li&gt;First Item&lt;/li&gt;
		&lt;li&gt;Second Item&lt;/li&gt;
		&lt;li&gt;Third Item&lt;/li&gt;
	&lt;/li&gt;

	&lt;dl&gt;
		&lt;dt&gt;First Item&lt;/dt&gt;
			&lt;dd&gt;First item description&lt;/dd&gt;
		&lt;dt&gt;Second Item&lt;dti&gt;
			&lt;dd&gt;Second item description&lt;/dd&gt;
	&lt;/dl&gt;
	</span>
<span class="title">&lt;/body&gt;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also html">
			<li><a href="styles.php">styles</a></li>
			<li><a href="paragraph.php">Paragraph</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>