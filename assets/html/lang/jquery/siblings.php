		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Siblings</div>

			<h5>Siblings are used to travese sideways through the DOM</h5>
			<p class="sub-page-disc">Example of classes:</p>
			<ul class="sub-page-ul js">
				<li>.siblings()</li>
				<li>.next()</li>
				<li>.nextAll()</li>
				<li>.nextUntil()</li>
				<li>.prev()</li>
				<li>.prevAll()</li>
				<li>.prevUntil()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("div").siblings();
	$("h2").next();
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="ancestors.php">Ancestors</a></li>
			<li><a href="descendants.php">Descendants</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>