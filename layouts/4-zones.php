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
			minSize:				30,
			initClosed:				false
		},
		west: {
			minSize:				"15%",
			size:					"20%",
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


<div class="ui-layout-north pad10">	Top submenu</div>

<div class="ui-layout-center pad10">	content</div>

<div class="ui-layout-west pad10">	west</div>

<div class="ui-layout-south pad10">	console</div>

