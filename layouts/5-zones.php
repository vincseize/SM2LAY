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
		east: {
			minSize:				"15%",
			size:					"20%",
			maxSize:				"45%",
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


<div class="ui-layout-north">			<?php @include('./modules/menus/submenu_top.php'); ?></div>

<div class="ui-layout-center">	content <?php @include('./modules/dailies/dailies_list.php'); ?></div>

<div class="ui-layout-west">	west	</div>

<div class="ui-layout-east">	east	<?php @include('./modules/dailies/dailies_summary.php'); ?></div>

<div class="ui-layout-south">	console <?php @include('./modules/widgets/console.php'); ?></div>

