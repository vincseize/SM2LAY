

/**
 * GLOBAL LAYOUT NAVIGATION CONTROLLER
 */
saam.controller('navLayoutCtrl', function($scope){
	$scope.layouts = [
		'./layouts/2-zones.php',
		'./layouts/3-zones.php',
		'./layouts/4-zones.php',
		'./layouts/5-zones.php'
	];
	$scope.currentLayout = 2;

	$scope.modules = {
		'menus' : [
			'./modules/menus/departments.php',
			'./modules/menus/main_menu.php',
			'./modules/menus/submenu_top.php'
		],
		'nav' : [
			'./modules/nav/quick_nav.php',
			'./modules/nav/shortcuts.php',
			'./modules/nav/messages.php'
		]
	};
});