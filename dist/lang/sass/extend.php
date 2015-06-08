		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header css">Extend</div>

			<h5>Extend elements allow you to share a set of CSS properties from one selector to another.</h5>
			<p class="sub-page-disc">SASS code used for Extend:</p>
			<ul class="sub-page-ul css">
				<li>&#64;extend: ;</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.box1 {</span> 
<span class="value">	background-color: #000;
	padding: 10px;
	margin:5px 5px;</span>
<span class="title"> }</span>
<span class="title">.box2 {</span> <span class="value">@extend .box1;</span><span class="title"> }</span>


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