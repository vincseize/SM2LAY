
<script src="modules/nav/quick_nav.ctrl.js"></script>

<div class="treeMenu petit pad10" ng-controller="treeMenuCtrl">

	<script type="text/ng-template" id="arboItems">
		<div title="{{item.items.length}} items" ng-click="clickItem(this, item)">
			<div class="inline w15 doigt" data-nodrag>
				<i class="fa"
					ng-class="{ 'fa-folder':		((item.type==='section' || item.type==='folder') && collapsed),
								'fa-folder-open':	((item.type==='section' || item.type==='folder') && !collapsed),
								'disabled':			((item.type==='section' || item.type==='folder') && item.items.length===0),
								'fa-file-video-o':	(item.type==='shot'),
								'fa-cube':			(item.type==='asset'),
								'fa-film':			(item.type==='scene')}">
				</i>
			</div>
			<div class="inline doigt">
				{{item.title}}
			</div>
		</div>
		<ol ui-tree-nodes="options" ng-model="item.items" ng-class="{hidden: collapsed}">
			<li ng-repeat="item in item.items" ui-tree-node ng-include="'arboItems'" data-collapsed="true"></li>
		</ol>
	</script>

	<div ui-tree="options" data-drag-enabled="false">
		<ol ui-tree-nodes ng-model="list" >
			<li ng-repeat="item in list" ui-tree-node ng-include="'arboItems'" data-collapsed="true"></li>
		</ol>
	</div>

</div>