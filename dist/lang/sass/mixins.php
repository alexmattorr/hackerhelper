		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header css">Mixins</div>

			<h5>Mixins elements are used to define groups of CSS declarations or arguments that can be reuse thoughout the site.</h5>
			<p class="sub-page-disc">SASS code used for Mixins:</p>
			<ul class="sub-page-ul css">
				<li>&#64;mixin mixinName($variableName) { }</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">&#64;mixin</span><span class="attribute"> border-radius</span><span class="value">($radius)</span><span class="title"> {</span>
<span class="value">	-webkit-border-radius: $radius;
	-moz-border-radius: $radius;
	-ms-border-radius: $radius;
	border-radius: $radius;</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="include.php">Include</a></li>
			<li><a href="variables.php">Variables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>