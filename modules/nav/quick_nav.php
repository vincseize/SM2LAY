<script>

saam.controller('menuArboCtrl', function($scope){
	$scope.list = [
		{
			"id": 1,
			"title": "1. dragon-breath",
			"items": []
		},
		{
			"id": 2,
			"title": "2. moiré-vision",
			"items": [
				{
					"id": 21,
					"title": "2.1. tofu-animation",
					"items": [
						{
							"id": 211,
							"title": "2.1.1. spooky-giraffe",
							"items": []
						},
						{
							"id": 212,
							"title": "2.1.2. bubble-burst",
							"items": []
						}
					]
				},
				{
					"id": 22,
					"title": "2.2. barehand-atomsplitting",
					"items": []
				}
			]
		},
		{
			"id": 3,
			"title": "3. unicorn-zapper",
			"items": []
		},
		{
			"id": 4,
			"title": "4. romantic-transclusion",
			"items": []
		}
	];
});

</script>

<div  ng-controller="menuArboCtrl">
	<div ui-tree data-drag-enabled="false">
		<ol ng-model="list" ui-tree-nodes>
			<li ng-repeat="item in list" ui-tree-node>
				<div ui-tree-handle>
					{{item.title}}
				</div>
				<ol ui-tree-nodes="" ng-model="item.items">
					<li ng-repeat="subItem in item.items" ui-tree-node>
						<div ui-tree-handle>
							{{subItem.title}}
						</div>
					</li>
				</ol>
			</li>
		</ol>
	</div>
</div>