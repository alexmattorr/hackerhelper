		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Comments</div>

			<h5>Comments are used to explain blocks of code.</h5>
			<p class="sub-page-disc">How to comment in JavaScript</p>
			<ul class="sub-page-ul js">
				<li>//</li>
				<li>/* */</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="js">
	<span class="value">

	<span class="code-comment">// User first name</span>
	var fName = "John";

	<span class="code-comment">// var mName = "Quincy";</span>

	<span class="code-comment">// User last name</span>
	var lName = "Doe";

	<span class="code-comment">
	/*
	This calls the document, finds the element by ID.
	After calling document and finding element, this will output:
	Hello [first name][last name]!
	*/
	</span>

	document.getElementById("username").innerHTML = "Hello " fName + lName + "!";
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