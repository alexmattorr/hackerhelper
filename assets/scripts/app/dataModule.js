var hackerApp = angular.module('hackerApp', []);
hackerApp.controller('langCtrl', function ($scope) {
	$scope.htmlLang = [
		{
			name: 'formatting',
			url: '../lang/html/formatting.php'
		},
		{
			name: 'heading',
			url: '../lang/html/heading.php'
		},
		{
			name: 'paragraph',
			url: '../lang/html/paragraph.php'
		},
		{
			name: 'quotes & citations',
			url: '../lang/html/quotes_citations.php'
		},
		{
			name: 'style',
			url: '../lang/html/style.php'
		}
	];
	$scope.cssLang = [
		{
			name: 'background',
			url: '../lang/css/css-test.php'
		}
	];
	$scope.sassLang = [
		{
			name: ':active',
			url: '../lang/sass/sass-test.php'
		}
	];
	$scope.jsLang = [
		{
			name: ':active',
			url: '../lang/js/js-test.php'
		}
	];
	$scope.jqLang = [
		{
			name: ':active',
			url: '../lang/jquery/jquery-test.php'
		}
	];
});