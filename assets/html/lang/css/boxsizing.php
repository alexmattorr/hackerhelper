		<?php include '../../components/lang-header.php';?>
		<?php include '../../components/lang-sidebar.php';?>
		<section class="content">
			<article>
		<div class="main sub-page">
			<div class="sub-page-header css">Box Sizing</div>

			<h5>Box Sizing is used to define width and height of an element that the browser should include.</h5>
			<p class="sub-page-disc">CSS code used for Box Sizing:</p>
			<ul class="sub-page-ul css">
				<li>box-sixing: ;</li>
			</ul>

		<div class="code-block">
		<pre class="code css">
<code data-lang="css">
<span class="title">.container { </span><span class="value">
    width: 450px;
    height: 500px;
    box-sizing: border-box;<span class="code-comment"> // an element padding and border are included in the width and height</span>
    box-sizing: content-box;</span><span class="code-comment"> // an element padding and border are not included in the width and height</span></span>
<span class="title"> }</span>
</code>
</pre>
		</div>

		<h5>See Also</h5>

		<ul class="button see-also css">
			<li><a href="boxsizing.php">Box Sizing</a></li>
			<li><a href="outlineoffset.php">Outline Offset</a></li>
		</ul>
		</div>

			</article>
		</section>
		<!-- <header><i class="fa fa-chevron-left go-back"></i><h2>Background</h2></header>  -->

	</div>
</body>
</html>