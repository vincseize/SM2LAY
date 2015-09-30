// SaAM.factories.js

/**
 * LAYOUT FACTORY
 */
saam.factory('layoutsList', function(){
	return {
		layouts: [
			'./layouts/1-zone.php',
			'./layouts/1-zone.php',
			'./layouts/2-zones.php',
			'./layouts/3-zones.php',
			'./layouts/4-zones.php',
			'./layouts/5-zones.php'
		]
	};
});

/**
 * MODULES FACTORY
 */
saam.factory('modulesList', function(){
	return {
		modules: {
			'bank': [
				'./modules/bank/project_bank_folders.php',
				'./modules/bank/folder_bank_viewer.php'
			],
			'dailies': [
				'./modules/dailies/list_recent.php',
				'./modules/dailies/summary.php'
			],
			'home': [
				'./modules/home/home.php'
			],
			'menus' : [
				'./modules/menus/main_menu.php',
				'./modules/menus/departments.php',
				'./modules/menus/console.php'
			],
			'nav' : [
				'./modules/nav/quick_nav.php',
				'./modules/nav/shortcuts.php',
				'./modules/nav/messages.php'
			],
			'project': [
				'./modules/project/min_infos.php',
				'./modules/project/config.php'
			]
		}
	};
});

/**
 * DEPARTMENTS FACTORY
 */
saam.factory('deptsList', function(modulesList){
	return {
		departments: [
			{
				id: 10,
				section: 'MAIN',
				name: 'config',
				description: "Project's global configuration",
				layout: 1,
				modules: {
					center: modulesList.modules.project[1]
				}
			},
			{
				id: 11,
				section: 'MAIN',
				name: 'dailies',
				description: "Project's daily report",
				layout: 2,
				modules: {
					west:	modulesList.modules.dailies[1],
					center: modulesList.modules.dailies[0]
				}
			},
			{
				id: 12,
				section: 'MAIN',
				name: 'bank',
				description: "Project's bank folders",
				layout: 3,
				modules: {
					north:	modulesList.modules.project[0],
					west:	modulesList.modules.bank[0],
					center: modulesList.modules.bank[1]
				}
			},
			{
				id: 13,
				section: 'MAIN',
				name: 'test',
				description: "Un autre departement pour le test",
				layout: 5,
				modules: {
					north:	modulesList.modules.project[0],
					west:	modulesList.modules.bank[0],
					center: modulesList.modules.home[0],
					east:	modulesList.modules.bank[1],
					south:	modulesList.modules.menus[2]
				}
			}
		]
	};
});