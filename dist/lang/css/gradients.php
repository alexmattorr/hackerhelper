		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header css">Gradients</div>

			<h5>Gradients allow you to create continuious transition between colors.</h5>
			<p class="sub-page-disc">CSS code used for Gradients:</p>
			<ul class="sub-page-ul css">
				<li>linear-gradient( )</li>
				<li>radial-gradient( )</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.gradientbox1 { </span><span class="value">
	background: -webkit-linear-gradient(50deg, orange, pink); 
  	background: -o-linear-gradient(50deg, orange, pink); 
  	background: -moz-linear-gradient(50deg, orange, pink); 
  	background: linear-gradient(50deg, orange, pink);</span>
<span class="title"> }</span>
<span class="title">.gradientbox2 { </span><span class="value">
	background: -webkit-radial-gradient(orange, pink); 
  	background: -o-radial-gradient(orange, pink); 
  	background: -moz-radial-gradient(orange, pink); 
  	background: radial-gradient(orange, pink);</span>
<span class="title"> }</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="shadows.php">Shadows</a></li>
			<li><a href="transitions.php">Transitions</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>