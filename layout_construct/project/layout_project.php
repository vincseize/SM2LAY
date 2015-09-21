<?php


?>


<script>

		$('#menu-north').load('menu_top_home_groumpf.php');


		imageUrl = "tmp/bg_menu_left_groumpft.jpg";
		$('#menu-west').css('background-image', 'url(' + imageUrl + ')');


		imageUrl = "tmp/bg_project_dpt_groumpf.jpg";
		$('#inner-content').css('background-image', 'url(' + imageUrl + ')');

		imageUrl = "tmp/bg_project_dpt_bank_groumpf.jpg";
		$('#inner_menu-south').css('background-image', 'url(' + imageUrl + ')');
		$('#inner_menu-south').css('background-repeat', 'no-repeat');
		$('#inner_menu-south').css('background-size','cover');		


		$('#inner_menu-north').load('sub_menu_project_groumpf.php');

</script>

<?php
echo $_GET['project'];

?>