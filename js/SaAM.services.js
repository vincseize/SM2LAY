// SaAM.services.js

/**
 * INTERFACE MANAGER SERVICE (layouts & modules)
 */
saam.service('saamUI', function(sectsList, deptsList){

	var currentUI = {
		project: 0,
		section: sectsList.sections[0],
		dept: deptsList.departments[1]
	};

	var setCurrentSect = function(sectIdx){
		console.log('Change section to:', sectsList.sections[sectIdx].name);
		currentUI.section = deptsList.departments[sectIdx];
		var sectDepts = $.grep(deptsList.departments, function(dept){ return dept.section == sectsList.sections[sectIdx].name; });
		currentUI.dept = sectDepts[0];
	};

	var setCurrentDept = function(deptIdx){
		if (typeof deptsList.departments[deptIdx] === 'undefined') {
			console.log('Department #'+deptIdx+' NOT FOUND !');
			return;
		}
		console.log('Change department to:', deptsList.departments[deptIdx].name);
		currentUI.dept = deptsList.departments[deptIdx];
	};

	return {
		currentUI: currentUI,
		setCurrentSect: setCurrentSect,
		setCurrentDept: setCurrentDept
	};

});