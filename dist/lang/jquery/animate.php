		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Animate</div>

			<h5>Animate, animates html elements.</h5>
			<p class="sub-page-disc">Example of animate:</p>
			<ul class="sub-page-ul js">
				<li>.animate()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$(window).scroll(function() {
		$("header").animate({top: '100px'});
		$("container").animate({
			opacity: '1',
			background: 'LightBlue'
		});
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="classes.php">Classes</a></li>
			<li><a href="dimensions.php">Dimensions</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>