var hackerApp = angular.module('hackerApp', []);
hackerApp.controller('langCtrl', function ($scope) {
	$scope.htmlLang = [
		{
			name: 'formatting',
			url: '../lang/html/formatting.php'
		},
		{
			name: 'headings',
			url: '../lang/html/headings.php'
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
		},
		{
			name: 'code',
			url: '../lang/html/code.php'
		},
		{
			name: 'comment',
			url: '../lang/html/comment.php'
		},{
			name: 'links',
			url: '../lang/html/links.php'
		},{
			name: 'images',
			url: '../lang/html/images.php'
		},{
			name: 'tables',
			url: '../lang/html/tables.php'
		},{
			name: 'lists',
			url: '../lang/html/lists.php'
		},{
			name: 'block',
			url: '../lang/html/block.php'
		},{
			name: 'classes',
			url: '../lang/html/classes.php'
		},{
			name: 'iframe',
			url: '../lang/html/iframe.php'
		},{
			name: 'script',
			url: '../lang/html/script.php'
		},{
			name: 'head',
			url: '../lang/html/head.php'
		},{
			name: 'encoding',
			url: '../lang/html/encoding.php'
		},{
			name: 'forms',
			url: '../lang/html/forms.php'
		},{
			name: 'media',
			url: '../lang/html/media.php'
		},{
			name: 'canvas',
			url: '../lang/html/canvas.php'
		},{
			name: 'svg',
			url: '../lang/html/svg.php'
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