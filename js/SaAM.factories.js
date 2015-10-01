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
 * SECTIONS FACTORY
 */
saam.factory('sectsList', function(){
	return {
		sections: [
			{id:0, name:'MAIN',		label:'PROJECT MAIN SECTION'},
			{id:1, name:'SHOTS',	label:'SEQ. & SHOTS'},
			{id:2, name:'ASSETS',	label:'ASSETS'},
			{id:3, name:'SCENES',	label:'SCENES'},
			{id:4, name:'TASKS',	label:'TASKS'}
		]
	};
});

/**
 * DEPARTMENTS FACTORY
 */
saam.factory('deptsList', function(modulesList){
	return {
		departments: [
			/////////////////////////////////////////////// MAIN SECTION
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
			},
			/////////////////////////////////////////////// SEQ. & SHOTS SECTION
			{
				id: 20,
				section: 'SHOTS',
				name: 'Scenario',
				description: "Project's scenario text",
				layout: 4,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 21,
				section: 'SHOTS',
				name: 'Tech. script',
				description: "Project's technical script",
				layout: 4,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 22,
				section: 'SHOTS',
				name: 'Storyboard',
				description: "Project's storyboard",
				layout: 4,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			/////////////////////////////////////////////// ASSETS SECTION
			{
				id: 30,
				section: 'ASSETS',
				name: 'Concept',
				description: "Assets concept department",
				layout: 4,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 31,
				section: 'ASSETS',
				name: 'Modeling',
				description: "Assets modeling department",
				layout: 4,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 32,
				section: 'ASSETS',
				name: 'Texturing',
				description: "Assets texturing department",
				layout: 3,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			/////////////////////////////////////////////// SCENES SECTION
			{
				id: 40,
				section: 'SCENES',
				name: 'Concept',
				description: "Scenes concept department",
				layout: 5,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			/////////////////////////////////////////////// TASKS SECTION
			{
				id: 50,
				section: 'TASKS',
				name: 'Root',
				description: "Global Tasks of the project",
				layout: 2,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 51,
				section: 'TASKS',
				name: 'Assets',
				description: "Project's Tasks about assets",
				layout: 2,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 52,
				section: 'TASKS',
				name: 'Scenes',
				description: "Project's Tasks about scenes",
				layout: 2,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			{
				id: 53,
				section: 'TASKS',
				name: 'Shots',
				description: "Project's Tasks about sequences and shots",
				layout: 2,
				modules: {
					center: modulesList.modules.project[0]
				}
			},
			/// END OF DEPARTMENTS LIST
			/////////////////////////////////////////////// SPECIAL (FINAL)	-- must be the last department of the list! --
			{
				id: 999,
				section: 'ALL',
				name: 'Final',
				description: "Global project video player",
				layout: 2,
				modules: {
					center: modulesList.modules.project[0]
				}
			}
		]
	};
});