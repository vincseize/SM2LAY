<?php


?>


<script>

function menu_projectEX(project){
	if(project=='groumpf'){


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

		// $( "#inner_menu-south" ).show();
		// $( "#inner_menu-south" ).addClass( "ui-layout-south" );
		// $( "#inner_menu-south" ).removeClass("ui-layout-south");



	}
	

}

function menu_project(project){
	if(project=='groumpf'){

		$('#inner-content').load('content/content_project.php?project='+project);




	}
	

}



</script>

PROJECTS > 

<font color='#0972A4'>DEMO | 

<b><a href='#' onclick='menu_project("groumpf");'>GROUMPF</a></b>


| MARCEL ET LA LUNE | + </font>