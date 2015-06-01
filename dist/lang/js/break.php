		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Break</div>

			<h5>Break is used to break out of loop iteration.</h5>
			<p class="sub-page-disc">Break syntax is:</p>
			<ul class="sub-page-ul js">
				<li>break;</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> i = 1</span><span class="title">;</span>
<span class="title">while</span><span class="value">(i &lt; 20)</span><span class="title"> {</span>
	<span class="value">i++;</span>
	<span class="title">if (i == 10) { break; }
	<span class="value">document.write(i + "&lt;br&gt;");</span><span class="code-comment">// it will stop outputting numbers at number 10</span>
<span class="title">}</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="continue.php">Continue</a></li>
			<li><a href="whileloop.php">While Loop</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>