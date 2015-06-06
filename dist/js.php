			<?php include 'components/header.php';?>
			<?php include 'components/sidebar.php';?>
			<section class="content">
				<article>
					<div class="search-filter cf">
						<input type="text" placeholder="search" id="query" data-ng-model="query" /><i class="fa fa-search"></i>
						<div class="filter cf">
							<div class="lang js is-active">js</div>
							<div class="lang js">jquery</div>
						</div>

						<div class="lang-tri-wrap">
							<div class="lang-tri-content yell-tri-content is-active">
								<div class="lang-tri yell-tri-color"></div>
							</div>
							<div class="lang-tri-content yell-tri-content">
								<div class="lang-tri yell-tri-color"></div>
							</div>
						</div>
						<div class="lang-tri-wrap light-yellow"></div>

					</div>

					<div class="main">
						<ul class="lang-items is-active">
							<li class="js-border" ng-repeat="js in jsLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{js.url}}">{{js.name}}</a>
							</li>
						</ul>
						<ul class="lang-items">
							<li class="js-border" ng-repeat="jq in jqLang | filter:query | orderBy:'name' ">
								<a ng-href="hackerhelper/{{jq.url}}">{{jq.name}}</a>
							</li>
						</ul>
					</div>
				</article>
			</section>
	</div>
</body>
</html>