		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header css">2D Transforms</div>

			<h5>2D Transforms allows you to skew, rotate, translate, and scale any elements.</h5>
			<p class="sub-page-disc">CSS code used for 2D Transforms:</p>
			<ul class="sub-page-ul css">
				<li>translate( )</li>
				<li>rotate( )</li>
				<li>scale( )</li>
				<li>skewX( )</li>
				<li>skewY( )</li>
				<li>matrix( )</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.gradientbox1 { </span><span class="value">
	transform: translate(60px,150px);
	transform: rotate(20deg);
	transform: scale(1.5,3);
	transform: skewX(45deg);
	transform: skewY(15deg);
	transform: skew(45deg, 15deg);
	transform: matrix(2, 0.1, 1, 0, 1, 0);</span>
<span class="title"> }</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="3dtransforms.php">3D Transforms</a></li>
			<li><a href="transitions.php">Transitions</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>