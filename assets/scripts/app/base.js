function baseJS() {
	$(document).ready(function() {
		function changeTab() {
			$(".lang").click(function() {
				$(".lang").toggleClass("is-active");
				$(".lang-items").toggleClass("is-active");
			});
			$(".html").off();
		};
		$(document).on("click", '.fa-bars', function() {
  		$("aside").addClass("is-active");
		});
		$(document).on("click", '.sidebar-close', function() {
  		$("aside").removeClass("is-active");
		});
		$(".go-back").on("click", function() {
  		window.history.back()
		});
		changeTab();
	});
};

baseJS();