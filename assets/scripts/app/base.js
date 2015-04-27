function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			disableClick();
			// activeMenu();
		})()

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

		function activeMenu() {
			var path = window.location.pathname;
			var url = window.location.href; 
			if(url = 'index.html') {
				console.log(url);
				$(".orange").addClass("is-active");
			}
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