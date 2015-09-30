// SaAM.services.js

/**
 * INTERFACE MANAGER SERVICE (layouts & modules)
 */
saam.service('saamUI', function(deptsList){

	var currentUI = {
		dept: deptsList.departments[1]
	};

	var setCurrentDept = function(deptIdx){
		console.log('Change department to:', deptsList.departments[deptIdx].name);
		currentUI.dept = deptsList.departments[deptIdx];
	};

	return {
		currentUI: currentUI,
		setCurrentDept: setCurrentDept
	};

});