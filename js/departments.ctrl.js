
saam.controller('departmentsCtrl', function($scope, saamUI, deptsList){

	$scope.depts = deptsList.departments;

	$scope.sections = [
		{id:0, name:'MAIN',  label:'PROJECT MAIN SECTION'},
		{id:1, name:'SHOTS', label:'SEQ. & SHOTS'},
		{id:2, name:'ASSETS', label:'ASSETS'},
		{id:3, name:'SCENES', label:'SCENES'},
		{id:4, name:'TASKS', label:'TASKS'}
	];

	$scope.currentSection  = 0;
	$scope.currentDeptName = saamUI.currentUI.dept.name;

	$scope.loadDept = function(deptIdx){
		saamUI.setCurrentDept(deptIdx);
		$scope.currentDeptName = deptsList.departments[deptIdx].name;
	};

});