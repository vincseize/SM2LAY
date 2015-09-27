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

	<!-- https://www.jstree.com/ -->
	<script src="js/jstree/dist/jstree.min.js"></script>
	<link rel="stylesheet" href="js/jstree/dist/themes/default/style.min.css" />

</head>
<body>

	<section class="ui-layout-north noBg" id="main_menu">
		<?php include('./modules/menus/main_menu.php'); ?>
	</section>

	<section class="ui-layout-center noBg" id="body_outer">
		<div class="ui-layout-north bgGrey2"></div>
		<div class="ui-layout-center noBg" id="body_inner">
			<div class="ui-layout-north bgGrey4" id="departments">
				<?php include('./modules/menus/departments.php'); ?>
			</div>
			<div class="ui-layout-center noBg" id="main_outer">
				<div class="ui-layout-center" id="main_inner">
					<?php include('./layouts/5-zones.php'); ?>
				</div>
				<div class="ui-layout-west bgGrey2" id="panel_nav">
					<div class="ui-layout-center noBg pad10">
						<?php include('./modules/nav/quick_nav.php'); ?>
					</div>
					<div class="ui-layout-south noBg pad10 bordT">
						<?php include('./modules/nav/shortcuts.php'); ?>
					</div>
				</div>
				<div class="ui-layout-east bgGrey2 text-center" id="panel_admin">
					<div class="ui-layout-north noBg pad10">
						<img src="tmp/bg_admin.png">
					</div>
					<div class="ui-layout-center noBg pad10">
						<button>Feedback here if not Demo SaAM</button>
						<br />
						<br />
						<button>Templates</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ui-layout-south noBg" id="bottom_panel">
		<?php include('./modules/nav/messages.php'); ?>
	</section>

</body>
</html>