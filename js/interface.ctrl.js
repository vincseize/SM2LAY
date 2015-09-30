
/**
 * GLOBAL LAYOUT NAVIGATION CONTROLLER
 */
saam.controller('interfaceCtrl', function($scope, layoutsList, modulesList, saamUI){
	$scope.layouts = layoutsList.layouts;
	$scope.modules = modulesList.modules;
	$scope.currentUI = saamUI.currentUI;
});
