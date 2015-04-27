function baseJS() {
	$(document).ready(function() {

		function changeTab() {
			$(".lang").click(function() {
				if($(this).hasClass("is-active")) {
					preventDefault();
					console.log("stopping click");
				}
				$(".lang").toggleClass("is-active");
				$(".lang-items").toggleClass("is-active");
				
			});
			$(".html").off();
		};
		function sideBar() {
			$(document).on("click", '.fa-bars', function() {
	  		$("aside").addClass("is-active");
	  		$(".sidebar").addClass("is-active");
			});
			$(document).on("click", '.sidebar-close', function() {
	  		$("aside").removeClass("is-active");
	  		$(".sidebar").removeClass("is-active");
			});
		}

		function goBack() {
			$(".go-back").on("click", function() {
	  		window.history.back()
			});
		}

		changeTab();
		sideBar();
		goBack();
	});
};

baseJS();

$('#tabmenu a').click(function(e) {
    if($(this).hasClass('disabled'))
        e.preventDefault();
});