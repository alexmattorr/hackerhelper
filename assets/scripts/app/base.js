function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			activeMenu();
			disableClick();
		})()

		function changeTab() {
			$(".lang").click(function() {
				if($(this).hasClass("is-active")) {
					preventDefault();
					console.log("stopping click");
				}
				$(".lang, .lang-items, .lang-tri-content").toggleClass("is-active");
				// $(".lang-items").toggleClass("is-active");
				// $(".lang-tri-content").toggleClass("is-active");
				
			});
			$(".html").off();
		};

		function activeMenu() {
			// var path = window.location.pathname;
		};

		function disableClick() {
			$('#tabmenu a').click(function(e) {
    		if($(this).hasClass('disabled')) {
    			e.preventDefault();
    		}
			});
		};
		
	});
};

baseJS();