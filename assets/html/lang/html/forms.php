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
			<div class="sub-page-header html">Forms</div>

			<h5>Forms allow users to input information and send it to a server</h5>
			<p class="sub-page-disc">HTML code used for forms:</p>
			<ul class="sub-page-ul html">
				<li>&lt;form&gt; &lt;/form&gt;</li>
				<li>&lt;input&gt;
				<li>&lt;select&gt;
				<li>&lt;textarea&gt;
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;form action="form.php"&gt;
		&lt;input type="text" name="firstname"&gt;
		&lt;input type="text" name="lastname"&gt;

		&lt;input type="radio" name="sex" value="male"&gt;Male
		&lt;input type="radio" name="sex" value="female"&gt;Female

		&lt;select name="Job"&gt;
			&lt;options value="front-end"&gt;Front-End&lt;/options&gt;
			&lt;options value="back-end"&gt;Back-End&lt;/options&gt;
			&lt;options value="full-stack"&gt;Full Stack&lt;/options&gt;
			&lt;options value="UX"&gt;UX/UI&lt;/options&gt;
			&lt;options value="designer"&gt;Designer&lt;/options&gt;
		&lt;/select&gt;

		&lt;textarea rows="5" cols="15"&gt; &lt;/textarea&gt;

		&lt;input type="checkbox" name="terms" value="terms"&gt;Do you agree to the terms?

		&lt;input type="submit" value="submit"&gt;
	&lt;/form&gt;
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