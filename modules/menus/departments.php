
<script src="js/departments.ctrl.js"></script>

<div ng-controller="departmentsCtrl">
	<div class="floatR padR10">
		<ul class="menu petit">
			<li>FINAL</li>
		</ul>
	</div>

	<select class="w250 petit" ng-model="currentSection" ng-options="section.id as section.label for section in sections">
		<option disabled>---</option>
	</select>

	<ul class="menu petit">
		<li ng-repeat="dept in depts" title="{{dept.description}}" ng-class="{'active': currentDeptName===dept.name}" ng-click="loadDept($index)">{{dept.name | uppercase}}</li>
	</ul>
</div>