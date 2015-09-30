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
		west: {
			minSize:				250,
			size:					272,
			maxSize:				"45%",
			initClosed:				false
		}
	});

});
</script>

<div class="ui-layout-west pad10">
	<div class="includer" ng-include="currentUI.dept.modules.west"></div>
</div>

<div class="ui-layout-center pad10">
	<div class="includer" ng-include="currentUI.dept.modules.center"></div>
</div>
