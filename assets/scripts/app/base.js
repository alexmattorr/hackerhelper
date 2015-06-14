function baseJS() {
	$(document).ready(function() {

		(function init(){
			changeTab();
			scrollBar();
			disableClick();
			innerPage();
			aside();
			smoothscroll();
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

		function innerPage() {
			console.log("working!");
			$(".sub-page").parent("article").css({"padding-top": "80px"});
		}

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


		function smoothscroll() {
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			    	var target = $(this.hash);
			      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			        if (target.length) {
				        $('html,body').animate({
				        	scrollTop: target.offset().top
				        }, 700);
				        return false;
			      	}
			    }
		  	});
		};
		
	});
};

baseJS();