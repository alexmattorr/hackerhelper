			<?php include 'components/header.php';?>
			<?php include 'components/sidebar.php';?>
			<section class="content">
				<article>
					<div class="search-filter cf">
						<input type="text" placeholder="search" id="query" data-ng-model="query" /><i class="fa fa-search"></i>
						<div class="filter cf">
							<div class="lang html">html</div>
						</div>

						<div class="lang-tri-wrap">
							<div class="lang-tri-content orange-tri-content">
								<div class="lang-tri orange-tri-color"></div>
							</div>
						</div>
						<div class="lang-tri-wrap light-orange"></div>

					</div>

					<div class="main">
						<ul class="lang-items is-active">
							<li class="html-border" ng-repeat="html in htmlLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{html.url}}">{{html.name}}</a>
							</li>
						</ul>
					</div>
				</article>
			</section>
	</div>
</body>
</html>