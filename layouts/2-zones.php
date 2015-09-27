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
			minSize:				"15%",
			size:					"20%",
			maxSize:				"45%",
			initClosed:				false
		}
	});

});
</script>


<div class="ui-layout-center pad10">	content</div>

<div class="ui-layout-west pad10">	west</div>

