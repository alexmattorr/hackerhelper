		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Callback</div>

			<h5>Callback functons are used to delegate event effects.</h5>
			<p class="sub-page-disc">Example of callback:</p>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("button").click(function() {
		$("article").fadeIn("slow", function() {
			console.log("faded in article");
		});
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
<!-- 		
			<li><a href="functions.php">Functions</a></li>
			<li><a href="operators.php">Operators</a></li>
-->
		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>
 No newline at end of file
