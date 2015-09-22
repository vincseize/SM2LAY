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

<style>
.header {
    /* font-style: italic; */
     background-color: transparent;
     background: none;
     border: none;
     margin: 0;
     padding:0;
}
</style>
<div id="header"></div>

<script type="text/javascript" charset="utf-8">
	var  menu = {
                        
			view:"menu",
			data:[
				{ id:"1",value:"DEMO PROJET"},
				{ id:"2",value:"GROUMPF", },
				{ id:"3",value:"MARCEL ET LA LUNE" },
                                { id:"4",value:"+" }
			],
                        
                        
                                on:{
					onMenuItemClick:function(id){
						webix.message("Click: "+this.getMenuItem(id).value);
					}
				},
                        
                        
		};

	webix.ui({
            container:"header",
            css:"header",
		type:"clean", rows:[
			{ type:"line", rows:[
				webix.copy(menu),
				{ view:"template" }
			]}
		]
	})
</script>





