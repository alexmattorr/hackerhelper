function baseJS() {
	$(document).ready(function() {
		function changeTab() {
			$(".lang").click(function() {
				$(".lang").toggleClass("is-active");
				$(".lang-items").toggleClass("is-active");
			});
			$(".html").off();
		};
		function sideBarOpen() {
			$(".fa-bars").click(function() {
				$("aside").addClass("is-active");
			});
		}
		function sideBarClose() {
			$(".sidebar-close").click(function() {
				$("aside").removeClass("is-active");
			});
		}
		function goBack() {
			$(".go-back").click(function() {
				window.history.back()
			})	
		}
		changeTab();
		sideBarOpen();
		sideBarClose();
		goBack();
	});
};

baseJS();