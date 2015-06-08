 
		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Regular Expressions</div>

			<h5>Regular Expressions are patterns that can be used to match characters in string. You can use regular expressions with string methods</h5>
			<p class="sub-page-disc">Regular Expressions operator syntax is:</p>
			<ul class="sub-page-ul js">
				<li>/pattern/modifiers;</li>
			</ul>
			<p class="sub-page-disc">String methods that often used with regular expressions are:</p>
			<ul class="sub-page-ul js">
				<li>search()</li>
				<li>replace()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="title">var</span><span class="value"> a = /hackerhelper/i</span><span class="title">;</span><span class="code-comment"> // /hackerhelper/ is a pattern that we assigned to be used in a search. "i" is control the search to be case sensitive.</span>


<span class="code-comment">// using search() string methods</span>
<span class="title">var</span><span class="value"> b = "We are hackerhelper"</span><span class="title">;</span>
<span class="title">var</span><span class="value"> s = str.search("hackerhelper")</span><span class="title">;</span>

<span class="code-comment">// using replace() string methods</span>
<span class="title">var</span><span class="value"> b = "We are HH"</span><span class="title">;</span>
<span class="title">var</span><span class="value"> s = str.replace("HH","hackerhelper")</span><span class="title">;</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="typeconversion.php">Typeconversion</a></li>
			<li><a href="error.php">Error</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>