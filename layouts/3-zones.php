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
		west: {
			minSize:				"15%",
			size:					"20%",
			maxSize:				"45%",
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