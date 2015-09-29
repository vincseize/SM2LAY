
saam.controller('departmentsCtrl', function($scope, layoutsList, modulesList){
	$scope.sections = [
		{layout:0, name:'MAIN',  label:'PROJECT MAIN SECTION'},
		{layout:1, name:'SHOTS', label:'SEQ. & SHOTS'},
		{layout:2, name:'ASSETS', label:'ASSETS'},
		{layout:3, name:'SCENES', label:'SCENES'},
		{layout:4, name:'TASKS', label:'TASKS'}
	];
	$scope.modules = modulesList.modules;

	$scope.currentSection = layoutsList.currentLayout;
});