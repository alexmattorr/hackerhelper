function baseJS() {
	$(document).ready(function() {
		function changeTab() {
			$(".lang").click(function() {
				$(".is-active").removeClass("is-active");
				$(this).addClass("is-active");
				$("lang-items").addClass("is-active");
			});
		};
		changeTab();
	});
};

baseJS();