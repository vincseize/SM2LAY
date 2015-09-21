<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>




right














<script type="text/javascript" charset="utf-8">
    
    
  webix.ready(function(){  
    
	var  menu = {
			view:"menu",
			data:[
				{ id:"1",value:"Translate...", submenu:[
					"English", 
					{ value:"Slavic...", submenu:[
						"Belarus", "Russian", "Ukranian"
					]},
					"German"
				]},
				{ id:"2",value:"Post...", submenu:[ "Facebook", "Google+", "Twitter" ]},
				{ id:"3",value:"Info" }
			]
		};


	webix.ui({
		type:"space", rows:[
			{ type:"line", rows:[
				webix.copy(menu),
				{ view:"template" }
			]},
			{ type:"wide", rows:[
				webix.copy(menu),
				{ view:"template" }
			]},
			{ type:"space", rows:[
				webix.copy(menu),
				{ view:"template" }
			]},
			{ type:"clean", rows:[
				webix.copy(menu),
				{ view:"template" }
			]}
		]
	})
        
 });
        
        
</script>