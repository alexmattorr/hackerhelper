		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Chaining</div>

			<h5>Chaining is used to have multiple events occur one after another.</h5>
			<p class="sub-page-disc">Example of chaining:</p>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("button").click(function() {
		$("article").fadeIn().css("background", "LightBlue");
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="classes.php">Classes</a></li>
			<li><a href="fade.php">Fade</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>