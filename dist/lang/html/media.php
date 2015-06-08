		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header html">Media</div>

			<h5>Media allows you to embed videos inside of html.</h5>
			<p class="sub-page-disc">HTML code used for media:</p>
			<ul class="sub-page-ul html">
				<li>&lt;video&gt; &lt;/video&gt;</li>
				<li>&lt;audio&gt; &lt;/audio&gt;</li>
				<li>&lt;object&gt; &lt;/object&gt;</li>
			</ul>

		<div class="code-block">
		<pre class="code html">
<code data-lang="html">
<span class="title">&lt;body&gt;</span>
	<span class="value">
	&lt;video&gt;
		&lt;source src="assets/video/hacker.mp4" type="video/mp4"&gt;
		&lt;source src="assets/video/hacker.ogg" type="video/ogg"&gt;
	&lt;/video&gt;

	&lt;audio&gt;
		&lt;source src="assets/audio/private_eyes.mp3" type="audio/mp3"&gt;
		&lt;source src="assets/audio/private_eyes.ogg" type="audio/ogg"&gt;
	&lt;/audio&gt;

	&lt;object data="outdated.swf"&gt; &lt;/object&gt;
	</span>
<span class="title">&lt;/body&gt;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also html">
			<li><a href="iframe.php">Iframe</a></li>
			<li><a href="block.php">Block</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>