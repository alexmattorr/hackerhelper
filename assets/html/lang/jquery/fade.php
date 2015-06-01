		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Fade</div>

			<h5>Fade will allow you to fade an element in and out.</h5>
			<p class="sub-page-disc">Example of fade:</p>
			<ul class="sub-page-ul js">
				<li>.fadeIn()</li>
				<li>.fadeOut()</li>
				<li>.fadeToggle()</li>
				<li>.fadeTo()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	$("button").click(function() {
		$("modal").fadeIn(200);
		$("content").fadeOut(100);
	});

	$("#button-2").click(function() {
		$("#div1").fadeToggle();
	});

	$("#button-3").mouseenter(function() {
		$("#div2").fadeTo("fast", 0.5);
	});
	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
 		
			<li><a href="hide-show.php">Hide & Show</a></li>
			<li><a href="stop.php">Stop</a></li>

		</ul>
		</div>

			</article>
		</section>
	</div>
</body>
</html>