var hackerApp = angular.module('hackerApp', []);
hackerApp.controller('langCtrl', function ($scope) {
	$scope.htmlLang = [
		{
			name: ':active',
			url: '../language-property/html/html-test.html'
		}
	];
	$scope.cssLang = [
		{
			name: ':active',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: '::after (:after)',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'align-content',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'align-self',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'all',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: '<angle>',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'animation',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'animation-delay',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'animation-direction',
			url: '../language-property/css/css3/css-test.html'
		}, {
			name: 'animation-duration',
			url: '../language-property/css/css3/css-test.html'
		}
	];
	$scope.sassLang = [
		{
			name: 'placeholder',
			url: '../language-property/css/sass/sass-test.html'
		}
	];
	$scope.jsLang = [
		{
			name: 'placeholder',
			url: '../language-property/js/js/js-test.html'
		}
	];
	$scope.jqLang = [
		{
			name: 'placeholder',
			url: '../language-property/js/jquery/jquery-test.html'
		}
	];
});