		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Remove</div>

			<h5>Remove is used to remove an element.</h5>
			<p class="sub-page-disc">Example of remove:</p>
			<ul class="sub-page-ul js">
				<li>.remove()</li>
				<li>.empty()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("button").click(function() {
		$("article").remove();
		$("section").empty();
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="classes.php">Classes</a></li>
			<li><a href="add.php">Add</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>