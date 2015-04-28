var hackerApp = angular.module('hackerApp', []);
hackerApp.controller('langCtrl', function ($scope) {
	$scope.htmlLang = [
		{
			name: ':active',
			url: '../lang/html/html-test.php'
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