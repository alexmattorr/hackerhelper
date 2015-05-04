function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			disableClick();
			aside();
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

		function disableClick() {
			$('#tabmenu a').click(function(e) {
    		if($(this).hasClass('disabled')) {
    			e.preventDefault();
    		}
			});
		};

		function aside() {
			$('.fa-bars').click(function() {
				$('aside, .aside-bg').toggleClass('is-active');
				asideToggle();
			});

			$('.aside-bg').click(function() {
				$('aside, .aside-bg').removeClass('is-active');
				asideToggle();
			});

			function asideToggle() {
				$('.aside-toggle').toggleClass('fa-bars');
				$('.aside-toggle').toggleClass('fa-times');
				$('.content').toggleClass('menu-active');
			};
		}
		
	});
};

baseJS();