			<?php include 'components/header.php';?>
			<?php include 'components/sidebar.php';?>
			<section class="content">
				<article>
					<div class="search-filter cf">
						<input type="text" placeholder="search" id="query" ng-model="query" /><i class="fa fa-search"></i>
						<div class="filter cf">
							<div class="lang css is-active">css</div>
							<div class="lang css">scss</div>
						</div>

						<div class="lang-tri-wrap">
							<div class="lang-tri-content blue-tri-content is-active">
								<div class="lang-tri blue-tri-color"></div>
							</div>
							<div class="lang-tri-content blue-tri-content">
								<div class="lang-tri blue-tri-color"></div>
							</div>
						</div>
						<div class="lang-tri-wrap light-blue"></div>

					</div>

					<div class="main">
						<ul class="lang-items is-active">
							<li class="css-border" ng-repeat="css in cssLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{css.url}}">{{css.name}}</a>
							</li>
						</ul>
						<ul class="lang-items">
							<li class="css-border" ng-repeat="sass in sassLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{sass.url}}">{{sass.name}}</a>
							</li>
						</ul>
					</div>
				</article>
			</section>
	</div>
</body>
</html>