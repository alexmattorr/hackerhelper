function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			disableClick();
			asideOpen();
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

		function asideOpen() {
			$('.fa-bars').on('click', function() {
				$('aside, .aside-bg').addClass('is-active');
			});

			$('.aside-bg').on('click', function() {
				$('aside, .aside-bg').removeClass('is-active')
			})
		}
		
	});
};

baseJS();