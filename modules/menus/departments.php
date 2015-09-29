
<script src="js/departments.ctrl.js"></script>

<div ng-controller="departmentsCtrl">
	<div class="floatR padR10">
		<ul class="menu petit">
			<li>FINAL</li>
		</ul>
	</div>

	<select class="w250 petit" ng-model="current.layout" ng-options="section.layout as section.label for section in sections" ng-change="changeLayout()">
		<option disabled>---</option>
	</select>

	<ul class="menu petit">
		<li>CONFIG</li>
		<sep></sep>
		<li>OVERVIEW</li>
		<li>PROD</li>
		<sep></sep>
		<li class="active">DAILIES</li>
		<li>SCHEDULE</li>
		<li>BANK</li>
	</ul>
</div>