<!DOCTYPE html>
<html ng-app="saam">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SaAM 2.0 UI test</title>

	<link rel="stylesheet" href="css/vendor/jquery-ui.min.css" type="text/css" />
	<link rel="stylesheet" href="css/vendor/jquery.layout-default-1.4.0.css" type="text/css" />
	<link rel="stylesheet" href="css/vendor/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="css/vendor/angular-ui-tree.css" type="text/css" />

	<script src="js/vendor/jquery-2.1.4.min.js"></script>
	<script src="js/vendor/angular-1.4.6.min.js"></script>
	<script src="js/vendor/jquery-ui.min.js"></script>
	<script src="js/vendor/jquery.layout-1.4.0.js"></script>
	<script src="js/vendor/angular-ui-tree.min.js"></script>	<!-- https://github.com/angular-ui-tree/angular-ui-tree -->

	<link rel="stylesheet" href="css/SaAM.css" type="text/css" />
	<script src="js/SaAM.app.js"></script>
	<script src="js/navLayout.ctrl.js"></script>				<!-- NAVIGATION controller (layouts and modules) -->

	<script src="modules/nav/quick_nav.ctrl.js"></script>		<!-- MODULE : quick navigation (tree & my trucs) -->

</head>
<body ng-controller="navLayoutCtrl">

	<section class="ui-layout-north noBg" id="body_menu">
		<div class="includer" ng-include="modules.menus[1]"></div>
	</section>

	<section class="ui-layout-center noBg" id="body_outer">
		<div class="ui-layout-north bgGrey2"></div>
		<div class="ui-layout-center noBg" id="body_inner">
			<div class="ui-layout-north bgGrey4" id="main_top_menu">
				<?php include('./modules/menus/departments.php'); ?>
			</div>
			<div class="ui-layout-center noBg" id="main_outer">
				<div class="ui-layout-center">
					<div class="includer" ng-include="layouts[currentLayout]" id="main_inner"></div>
				</div>
				<div class="ui-layout-west bgGrey2" id="panel_nav">
					<div class="ui-layout-center noBg">
						<div class="includer" ng-include="modules.nav[0]"></div>
					</div>
					<div class="ui-layout-south noBg">
						<div class="includer" ng-include="modules.nav[1]"></div>
					</div>
				</div>
				<div class="ui-layout-east bgGrey2 text-center" id="panel_admin">
					<div class="ui-layout-north noBg pad10">
						<img src="tmp/bg_admin.png">
					</div>
					<div class="ui-layout-center noBg pad10">
	
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ui-layout-south noBg" id="bottom_panel">
		<div class="includer" ng-include="modules.nav[2]"></div>
	</section>

</body>
</html>