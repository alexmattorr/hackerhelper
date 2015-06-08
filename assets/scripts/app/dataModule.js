var hackerApp = angular.module('hackerApp', []);
hackerApp.controller('langCtrl', function ($scope) {
	$scope.htmlLang = [
		{
			name: 'formatting',
			url: '../lang/html/formatting.php'
		},{
			name: 'headings',
			url: '../lang/html/headings.php'
		},{
			name: 'paragraph',
			url: '../lang/html/paragraph.php'
		},{
			name: 'quotes & citations',
			url: '../lang/html/quotes_citations.php'
		},{
			name: 'style',
			url: '../lang/html/style.php'
		},{
			name: 'code',
			url: '../lang/html/code.php'
		},{
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
		},{
			name: 'block (html5)',
			url: '../lang/html/block_html5.php'
		}
	];
	$scope.cssLang = [	
		// css3
		{
			name: 'rounded corner',
			url: '../lang/css/roundedcorner.php'
		},{
			name: 'border images',
			url: '../lang/css/borderimages.php'
		},{
			name: 'gradients',
			url: '../lang/css/gradients.php'
		},{
			name: 'shadows',
			url: '../lang/css/shadows.php'
		},{
			name: '2D transforms',
			url: '../lang/css/2Dtransforms.php'
		},{
			name: '3D transforms',
			url: '../lang/css/3Dtransforms.php'
		},{
			name: 'transitions',
			url: '../lang/css/transitions.php'
		},{
			name: 'animations',
			url: '../lang/css/animations.php'
		},{
			name: 'multiple columns',
			url: '../lang/css/multiplecolumns.php'
		},{
			name: 'resize',
			url: '../lang/css/resize.php'
		},{
			name: 'outline offset',
			url: '../lang/css/outlineoffset.php'
		},{
			name: 'box sizing',
			url: '../lang/css/boxsizing.php'
		},{
			name: 'background',
			url: '../lang/css/background.php'
		},{
			name: 'text',
			url: '../lang/css/text.php'
		},{
			name: 'border',
			url: '../lang/css/border.php'
		},{
			name: 'font',
			url: '../lang/css/font.php'
		},{
			name: 'link',
			url: '../lang/css/link.php'
		},{
			name: 'list',
			url: '../lang/css/list.php'
		},{
			name: 'tables',
			url: '../lang/css/tables.php'
		},{
			name: 'box model',
			url: '../lang/css/boxmodel.php'
		},{
			name: 'outline',
			url: '../lang/css/outline.php'
		},{
			name: 'margin',
			url: '../lang/css/margin.php'
		},{
			name: 'padding',
			url: '../lang/css/padding.php'
		},{
			name: 'dimension',
			url: '../lang/css/dimension.php'
		},{
			name: 'display',
			url: '../lang/css/display.php'
		},{
			name: 'positioning',
			url: '../lang/css/positioning.php'
		},{
			name: 'float',
			url: '../lang/css/float.php'
		},{
			name: 'combinators',
			url: '../lang/css/combinators.php'
		},{
			name: 'opacity',
			url: '../lang/css/opacity.php'
		},{
			name: 'media',
			url: '../lang/css/media.php'
		}
	];
	$scope.sassLang = [
		{
			name: 'variables',
			url: '../lang/sass/variables.php'
		},{
			name: 'mixins',
			url: '../lang/sass/mixins.php'
		},{
			name: 'include',
			url: '../lang/sass/include.php'
		},{
			name: 'import',
			url: '../lang/sass/import.php'
		},{
			name: 'extend',
			url: '../lang/sass/extend.php'
		}
	];
	$scope.jsLang = [
		{
			name: 'comments',
			url: '../lang/js/comments.php'
		}, {
			name: 'output',
			url: '../lang/js/output.php'
		}, {
			name: 'statements',
			url: '../lang/js/statements.php'
		}, {
			name: 'syntax',
			url: '../lang/js/syntax.php'
		}, {
			name: 'variables',
			url: '../lang/js/variables.php'
		}, {
			name: 'operators',
			url: '../lang/js/operators.php'
		}, {
			name: 'functions',
			url: '../lang/js/functions.php'
		}, {
			name: 'objects',
			url: '../lang/js/objects.php'
		}, {
			name: 'events',
			url: '../lang/js/events.php'
		}, {
			name: 'arrays',
			url: '../lang/js/arrays.php'
		}, {
			name: 'scope',
			url: '../lang/js/scope.php'
		}, {
			name: 'strings',
			url: '../lang/js/strings.php'
		}, {
			name: 'string methods',
			url: '../lang/js/stringMethods.php'
		}, {
			name: 'numbers',
			url: '../lang/js/numbers.php'
		}, {
			name: 'number methods',
			url: '../lang/js/numberMethods.php'
		}, {
			name: 'math',
			url: '../lang/js/math.php'
		}, {
			name: 'dates',
			url: '../lang/js/dates.php'
		}, {
			name: 'booleans',
			url: '../lang/js/booleans.php'
		}, {
			name: 'comparisons',
			url: '../lang/js/comparisons.php'
		}, {
			name: 'logical',
			url: '../lang/js/logical.php'
		}, {
			name: 'ternary',
			url: '../lang/js/ternary.php'
		}, {
			name: 'bitwise',
			url: '../lang/js/bitwise.php'
		},{
			name: 'conditions',
			url: '../lang/js/conditions.php'
		}, {
			name: 'switch',
			url: '../lang/js/switch.php'
		}, {
			name: 'for loop',
			url: '../lang/js/forloop.php'
		}, {
			name: 'while loop',
			url: '../lang/js/whileloop.php'
		}, {
			name: 'break',
			url: '../lang/js/break.php'
		}, {
			name: 'continue',
			url: '../lang/js/continue.php'
		}, {
			name: 'typeconversion',
			url: '../lang/js/typeconversion.php'
		}, {
			name: 'regular expressions',
			url: '../lang/js/regexp.php'
		}, {
			name: 'error',
			url: '../lang/js/error.php'
		}, {
			name: 'debugging',
			url: '../lang/js/debugging.php'
		}, {
			name: 'hoisting',
			url: '../lang/js/hoisting.php'
		}, {
			name: 'strictmode',
			url: '../lang/js/strictmode.php'
		}
	];
	$scope.jqLang = [
		{
			name: 'add',
			url: '../lang/jquery/add.php'
		}, {
			name: 'ajax',
			url: '../lang/jquery/ajax.php'
		}, {
			name: 'ancestors',
			url: '../lang/jquery/ancestors.php'
		}, {
			name: 'animate',
			url: '../lang/jquery/animate.php'
		}, {
			name: 'chaining',
			url: '../lang/jquery/chaining.php'
		}, {
			name: 'classes',
			url: '../lang/jquery/classes.php'
		}, {
			name: 'descendants',
			url: '../lang/jquery/descendants.php'
		}, {
			name: 'dimensions',
			url: '../lang/jquery/dimensions.php'
		}, {
			name: 'fade',
			url: '../lang/jquery/fade.php'
		}, {
			name: 'filtering',
			url: '../lang/jquery/filtering.php'
		}, {
			name: 'get-set',
			url: '../lang/jquery/get-set.php'
		}, {
			name: 'hide-show',
			url: '../lang/jquery/hide-show.php'
		}, {
			name: 'remove',
			url: '../lang/jquery/remove.php'
		}, {
			name: 'siblings',
			url: '../lang/jquery/siblings.php'
		}, {
			name: 'stop',
			url: '../lang/jquery/stop.php'
		}
	];
});