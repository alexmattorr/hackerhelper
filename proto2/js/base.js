function baseJS() {
	$(document).ready(function() {
		function changeTab() {
			$(".lang").click(function(lang, langItem) {
				$(".lang").removeClass("is-active");
				$(this).addClass("is-active");
			});
		};
		changeTab();
	});
};

baseJS();