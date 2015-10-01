
saam.controller('departmentsCtrl', function($scope, saamUI, sectsList, deptsList){

	$scope.sections = sectsList.sections;
	$scope.depts	= deptsList.departments;
	$scope.deptFinal = deptsList.departments[deptsList.departments.length-1];	// Final is the last department of the list

	$scope.currentSection  = saamUI.currentUI.section.id;
	$scope.currentDeptName = saamUI.currentUI.dept.name;

	$scope.changeSection = function(){
		saamUI.setCurrentSect($scope.currentSection);
		$scope.currentDeptName = saamUI.currentUI.dept.name;
	};

	$scope.loadDept = function(deptIdx){
		saamUI.setCurrentDept(deptIdx);
		$scope.currentDeptName = saamUI.currentUI.dept.name;
	};

	$scope.loadFinal = function(){
		saamUI.setCurrentDept(deptsList.departments.length-1);
		$scope.currentDeptName = saamUI.currentUI.dept.name;
	};

});