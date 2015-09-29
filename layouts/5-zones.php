<script>
$(function(){
	// Main inner view
	$('#main_inner').layout({
		defaults: {
			fxName:					"none",
			spacing_open:			2,
			spacing_closed:			5,
			resizable:				true,
			closable:				true
		},
		north: {
			resizable:				false,
			minSize:				150,
			initClosed:				false
		},
		east: {
			minSize:				"15%",
			size:					"33%",
			maxSize:				"45%",
			initClosed:				false
		},
		west: {
			minSize:				"15%",
			size:					"33%",
			maxSize:				"45%",
			initClosed:				false
		},
		south: {
			minSize:				30,
			maxSize:				"50%",
			initClosed:				false
		}
	});

});
</script>


<div class="ui-layout-north pad10">
	<div class="includer" ng-include="zones.north"></div>
</div>

<div class="ui-layout-center pad10">
	<div class="includer" ng-include="zones.center"></div>
</div>

<div class="ui-layout-west pad10">
	<div class="includer" ng-include="zones.west"></div>
</div>

<div class="ui-layout-east pad10">
	<div class="includer" ng-include="zones.east"></div>
</div>

<div class="ui-layout-south pad10">
	<div class="includer" ng-include="zones.south"></div>
</div>

