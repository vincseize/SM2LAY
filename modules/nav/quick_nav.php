
<script>
saam.controller('menuArboCtrl', function($scope){
	$scope.list = [
		{
			"id": 1,
			"title": "Sequences",
			"items": [
				{
					"id": 11,
					"title": "SEQ_001",
					"items": [
						{
							"id": 111,
							"title": "SHOT_01",
							"items": []
						},
						{
							"id": 112,
							"title": "SHOT_02",
							"items": []
						},
						{
							"id": 113,
							"title": "SHOT_03",
							"items": []
						}
					]
				},
				{
					"id": 12,
					"title": "SEQ_002",
					"items": []
				},
				{
					"id": 13,
					"title": "SEQ_003",
					"items": []
				},
				{
					"id": 14,
					"title": "SEQ_004",
					"items": []
				},
				{
					"id": 15,
					"title": "SEQ_005",
					"items": []
				}
			]
		},
		{
			"id": 2,
			"title": "Assets",
			"items": [
				{
					"id": 21,
					"title": "Charaters",
					"items": [
						{
							"id": 211,
							"title": "Marcel",
							"items": []
						},
						{
							"id": 212,
							"title": "Crastor",
							"items": []
						}
					]
				},
				{
					"id": 22,
					"title": "Props",
					"items": [
						{
							"id": 221,
							"title": "Marcel",
							"items": []
						},
						{
							"id": 222,
							"title": "Crastor",
							"items": []
						},
						{
							"id": 223,
							"title": "Crastor",
							"items": []
						},
						{
							"id": 224,
							"title": "Crastor",
							"items": []
						}
					]
				}
			]
		},
		{
			"id": 3,
			"title": "Scenes",
			"items": [
				{
					"id": 31,
					"title": "M_SC_01_|PHARE_INT_GROUND|_Monte_KF",
					"items": [
						{
							"id": 311,
							"title": "#_SC_01_|PHARE_INT_GROUND|_Monte_bas_KF",
							"items": []
						},
						{
							"id": 312,
							"title": "#_SC_01_|PHARE_INT_GROUND|_Monte_haut_KF",
							"items": []
						}
					]
				},
				{
					"id": 32,
					"title": "M_SC_02_|ECHELLE|_KF",
					"items": []
				}

			]
		},
		{
			"id": 4,
			"title": "Tasks",
			"items": []
		}
	];

    $scope.options = {};

    $scope.toggle = function(scope) {
		scope.toggle();
    };

});
</script>

<div class="treeMenu petit" ng-controller="menuArboCtrl">

	<script type="text/ng-template" id="arboItems.html">
		<div title="({{item.items.length}} subitems)">
			<div class="inline w10 doigt" data-nodrag ng-click="toggle(this)" ng-class="{'disabled': item.items.length === 0}">
				<i class="fa" ng-class="{'fa-chevron-right': collapsed, 'fa-chevron-down': !collapsed}"></i>
			</div>
			<div class="inline doigt">{{item.title}}</div>
		</div>
		<ol ui-tree-nodes="options" ng-model="item.items" ng-class="{hidden: collapsed}">
			<li ng-repeat="item in item.items" ui-tree-node ng-include="'arboItems.html'" data-collapsed="true"></li>
		</ol>
	</script>

	<div ui-tree="options" data-drag-enabled="false">
		<ol ui-tree-nodes ng-model="list" >
			<li ng-repeat="item in list" ui-tree-node ng-include="'arboItems.html'" data-collapsed="true"></li>
		</ol>
	</div>

</div>