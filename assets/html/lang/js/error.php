		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header js">Error</div>

			<h5>Error statements allowed you to define and manage coding errors.</h5>
			<p class="sub-page-disc">Error statements are:</p>
			<ul class="sub-page-ul js">
				<li>try { }</li>
				<li>catch() { } </li>
				<li>throw</li>
				<li>finally { }</li>
			</ul>

		<div class="code-block">
		<pre class="code js">
<code data-lang="html">
<span class="code-comment">/* try statement allows code inside it to be tested for error.
catch statement allows you to define code reaction when an error occurs inside try statement.
throw statement allows you to create custom error messages.
finally statement contains a block of code that will be executed regardless of try and catch. */</span>
<span class="value">try {
    throw( new Error( "Error occured" ) );
} catch( error ){
    // Catch the error.
    console.log( "Caught your error:", error.message );
} finally {
	// Execute the clean-up code.
    console.log( "Finally!" );
}
    console.log( "Back to safety." );</span>

</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also js">
			<li><a href="logical.php">Logical</a></li>
			<li><a href="ternary.php">Ternary</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>