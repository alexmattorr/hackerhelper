 
		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Type Conversion</div>

			<h5>Type Conversion is used to convert one data type to another. For example, you can convert Number() to String(), Date to String(), and etc.</h5>
			<p class="sub-page-disc">Type Conversion syntaxes are:</p>
			<ul class="sub-page-ul js">
				<li>String()</li>
				<li>toString()</li>
				<li>Number()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="code-comment">// Converts Number() to String()</span>
<span class="title">String</span><span class="value">(250)</span>
<span class="value">(250).</span><span class="title">toString()</span>

<span class="code-comment">// Converts boolean to String()</span>
<span class="value">false.</span><span class="title">toString()</span>

<span class="code-comment">// Converts Date() to String()</span>
<span class="value">Date().</span><span class="title">toString()</span>

<span class="code-comment">// Converts String() to Number() by adding quotation marks</span>
<span class="title">Number</span><span class="value">("250")</span> 

<span class="code-comment">// Converts Date() to Number()</span>
<span class="value">today = </span><span class="title">new Date();</span>
<span class="title">Number(today)</span>

<span class="code-comment">// Converts boolean to Number(), which will return 0 or 1</span>
<span class="title">Number</span><span class="value">(false)</span>

</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="break.php">Break</a></li>
			<li><a href="whileloop.php">While Loop</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>