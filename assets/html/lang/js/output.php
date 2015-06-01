 
		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Output</div>

			<h5>Output displays data in different ways.</h5>
			<p class="sub-page-disc">To output data:</p>
			<ul class="sub-page-ul js">
				<li>.alert()</li>
				<li>.write()</li>
				<li>.innerHTML()</li>
				<li>console.log()</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">
	window.alert("Hello! This alerts the browser.");

	document.write("&lt;h1&gt;This outputs text on the document&lt;/h1&gt;");

	document.getElementById("header").innerHTML("hello" + fname);

	console.log("This is displayed in the console.");


	</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="statements.php">Statements</a></li>
			<li><a href="variables.php">Variables</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>