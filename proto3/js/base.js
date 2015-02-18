function baseJS() {
	$(document).ready(function() {
		function changeTab() {
			$(".lang").click(function() {
				$(".lang").toggleClass("is-active");
				$(".lang-items").toggleClass("is-active");
			});
		};
		function goBack() {
			$(".go-back").click(function() {
				window.history.back()
			})	
		}
		goBack();
		changeTab();
	});
};

baseJS();