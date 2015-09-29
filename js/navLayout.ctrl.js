

/**
 * GLOBAL LAYOUT NAVIGATION CONTROLLER
 */
saam.controller('navLayoutCtrl', function($scope, layoutsList, modulesList){
	$scope.layouts = layoutsList.layouts;
	$scope.modules = modulesList.modules;

	$scope.currentLayout = layoutsList.currentLayout;
});