var phonecatApp = angular.module('protoApp', []);

phonecatApp.controller('ProtoAppCtrl', function ($scope) {
	$scope.items = [
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
});