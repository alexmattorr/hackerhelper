 
		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Logical</div>

			<h5>Logical operators are used to determine logic between values. They are typically used with booleans.</h5>
			<p class="sub-page-disc">Logical operators are:</p>
			<ul class="sub-page-ul js">
				<li>&amp;&amp;  AND</li>
				<li>||  OR</li>
				<li>! NOT</li>
			</ul>

		<p class="sub-page-disc">Example of &amp;&amp; AND operator:</p>
		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> and1 =  true && true;</span><span class="code-comment"> // t && t returns true</span>
<span class="title">var</span><span class="value"> and2 =  true && false;</span><span class="code-comment"> // t && f returns false</span>
<span class="title">var</span><span class="value"> and3 = false && true;</span><span class="code-comment"> // f && t returns false</span>
<span class="title">var</span><span class="value"> and4 = false && (4 != 4);</span><span class="code-comment"> // f && f returns false</span>
</code>
</pre>
		</div>
		<p class="sub-page-disc">Example of || OR operator:</p>
		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> or1 =  true || true;</span><span class="code-comment"> // t || t returns true</span>
<span class="title">var</span><span class="value"> or2 =  false || true;</span><span class="code-comment">  // f || t returns true</span>
<span class="title">var</span><span class="value"> or3 = true || false;</span><span class="code-comment"> // t || f returns true</span>
<span class="title">var</span><span class="value"> or4 = false || (4 != 4);</span><span class="code-comment"> // f || f returns false</span>
</code>
</pre>
		</div>
		<p class="sub-page-disc">Example of ! NOT operator:</p>
		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> not1 = !true;</span><span class="code-comment"> // !t returns false</span>
<span class="title">var</span><span class="value"> not2 =  !false;</span><span class="code-comment">  // !f returns true</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="booleans.php">Booleans</a></li>
			<li><a href="comparisons.php">Comparisons</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>