<!DOCTYPE html>
<html ng-app="saam">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SaAM 2.0 UI test</title>

	<link rel="stylesheet" href="css/vendor/jquery-ui.min.css" type="text/css" />
	<link rel="stylesheet" href="css/vendor/jquery.layout-default-1.4.0.css" type="text/css" />
	<link rel="stylesheet" href="css/vendor/font-awesome.min.css" type="text/css" />
	<script src="js/vendor/angular-1.4.6.min.js"></script>
	<script src="js/vendor/jquery-2.1.4.min.js"></script>
	<script src="js/vendor/jquery-ui.min.js"></script>
	<script src="js/vendor/jquery.layout-1.4.0.js"></script>

	<link rel="stylesheet" href="css/SaAM.css" type="text/css" />
	<script src="js/SaAM.app.js"></script>

</head>
<body>

	<section class="ui-layout-north noBg">
		<?php include('./templates/header_menu.php'); ?>
	</section>

	<section class="ui-layout-west   noBg text-center">
		<div class="ui-layout-north  noBg inactive"></div>
		<div class="ui-layout-center noBg pad10">	   <?php include('./templates/panel_left/quick_nav.php'); ?></div>
		<div class="ui-layout-south	 noBg pad10 bordT"><?php include('./templates/panel_left/shortcuts.php'); ?></div>
	</section>

	<section class="ui-layout-center noBg shadowed roundBorder">
		<div class="ui-layout-north  noBg"><?php include('./templates/projects_tab.php'); ?></div>
		<div class="ui-layout-center">
			<div class="ui-layout-north"> <?php @include('./templates/panel_center/departments.php'); ?></div>
			<div class="ui-layout-west">  <?php @include('./templates/panel_center/dailies/dailies_summary.php'); ?></div>
			<div class="ui-layout-center"><?php @include('./templates/panel_center/dailies/dailies_list.php'); ?></div>
			<div class="ui-layout-south"> <?php @include('./templates/panel_center/dailies/dailies_notifications.php'); ?></div>
		</div>
	</section>

	<section class="ui-layout-south noBg">
		<?php include('./templates/panel_bottom/messages.php'); ?>
	</section>

</body>
</html>