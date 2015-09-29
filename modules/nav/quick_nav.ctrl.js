// quick_nav.ctrl.js

$(function(){
	/**
	 * NAVIGATION : TREE MENU CONTROLLER
	 */
	saam.controller('treeMenuCtrl', function($scope){
		$scope.list = [
			{
				"id": 1,
				"type": "section",
				"title": "Sequences",
				"items": [
					{
						"id": 11,
						"type": "folder",
						"title": "SEQ_001",
						"items": [
							{
								"id": 111,
								"type": "shot",
								"title": "SHOT_01",
								"items": []
							},
							{
								"id": 112,
								"type": "shot",
								"title": "SHOT_02",
								"items": []
							},
							{
								"id": 113,
								"type": "shot",
								"title": "SHOT_03",
								"items": []
							}
						]
					},
					{
						"id": 12,
						"type": "folder",
						"title": "SEQ_002",
						"items": []
					},
					{
						"id": 13,
						"type": "folder",
						"title": "SEQ_003",
						"items": []
					},
					{
						"id": 14,
						"type": "folder",
						"title": "SEQ_004",
						"items": []
					},
					{
						"id": 15,
						"type": "folder",
						"title": "SEQ_005",
						"items": []
					}
				]
			},
			{
				"id": 2,
				"type": "section",
				"title": "Assets",
				"items": [
					{
						"id": 21,
						"type": "folder",
						"title": "Charaters",
						"items": [
							{
								"id": 211,
								"type": "asset",
								"title": "Marcel",
								"items": []
							},
							{
								"id": 212,
								"type": "asset",
								"title": "Crastor",
								"items": []
							}
						]
					},
					{
						"id": 22,
						"type": "folder",
						"title": "Props",
						"items": [
							{
								"id": 221,
								"type": "folder",
								"title": "Phare-eglise",
								"items": [
									{
										"id": 2211,
										"type": "asset",
										"title": "Jarre",
										"items": []
									},
									{
										"id": 2212,
										"type": "asset",
										"title": "Escalier",
										"items": []
									}
								]
							},
							{
								"id": 222,
								"type": "asset",
								"title": "Chapeau",
								"items": []
							},
							{
								"id": 223,
								"type": "asset",
								"title": "Tambour",
								"items": []
							},
							{
								"id": 224,
								"type": "asset",
								"title": "Echelle",
								"items": []
							}
						]
					}
				]
			},
			{
				"id": 3,
				"type": "section",
				"title": "Scenes",
				"items": [
					{
						"id": 31,
						"type": "folder",
						"title": "M_SC_01_|PHARE_INT_GROUND|_Monte_KF",
						"items": [
							{
								"id": 311,
								"type": "scene",
								"title": "#_SC_01_|PHARE_INT_GROUND|_Monte_bas_KF",
								"items": []
							},
							{
								"id": 312,
								"type": "scene",
								"title": "#_SC_01_|PHARE_INT_GROUND|_Monte_haut_KF",
								"items": []
							}
						]
					},
					{
						"id": 32,
						"type": "scene",
						"title": "M_SC_02_|ECHELLE|_KF",
						"items": []
					}
				]
			},
			{
				"id": 4,
				"type": "section",
				"title": "Tasks",
				"items": []
			}
		];

		$scope.options = {};

		$scope.clickItem = function(scope, item) {
			if (item.type === 'section' || item.type === 'folder') {
				if (item.items.length === 0) return;
				scope.toggle();
			}
			else
				alert('Open '+item.type+' "'+item.title+'" (#'+item.id+')');
		};
	});
});