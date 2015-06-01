function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			scrollBar();
			disableClick();
			// activePage();
			aside();
		})()

		function changeTab() {
			$(".lang").click(function() {
				if($(this).hasClass("is-active")) {
					preventDefault();
				}
				$(".lang, .lang-items, .lang-tri-content").toggleClass("is-active");
			});
			$(".html").off();
		};

		function scrollBar() {
			var url = window.location.href;
			if (url.indexOf("index") >= 0) {
				$(".main").addClass("page-html");
			} else if (url.indexOf("css") >= 0) {
				$(".main").addClass("page-css");
			} else if (url.indexOf("js") >= 0) {
				$(".main").addClass("page-js");
			}

/*
			if( path.indexOf('/js/') > -1 ) {
        $(".main").addClass("page-js");
        console.log("working");
     	}
*/
		}

		function disableClick() {
			$('#tabmenu a').click(function(e) {
    		if($(this).hasClass('disabled')) {
    			e.preventDefault();
    		}
			});
		};

		function activePage() {
			$(".language-group li a").each(function() {   
    		if (this.href.search(location.href) != -1) {
        	$(this).addClass("is-active");
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
		};
		
	});
};

baseJS();