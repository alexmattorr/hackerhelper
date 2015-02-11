var phonecatApp = angular.module('protoApp', []);

phonecatApp.controller('ProtoAppCtrl', function ($scope) {
	$scope.cssLang = [
		{
			'name': ':active'
		}, {
			'name': '::after (:after)'
		}, {
			'name': 'align-content'
		}, {
			'name': 'align-self'
		}, {
			'name': 'all'
		}, {
			'name': '<angle>'
		}, {
			'name': 'animation'
		}, {
			'name': 'animation-delay'
		}, {
			'name': 'animation-direction'
		}, {
			'name': 'animation-duration'
		}
	];
	$scope.sassLang = [
		{
			'name': 'preprocessing'
		}, {
			'name': 'variables'
		}, {
			'name': 'nesting'
		}, {
			'name': 'partials'
		}, {
			'name': 'import'
		}, {
			'name': 'mixins'
		}, {
			'name': 'inheritence'
		}, {
			'name': 'operators'
		}
	];
});