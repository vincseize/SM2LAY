<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>





<div id="general_left"></div>

<script>
webix.ready(function(){
	tree = webix.ui({
		container:"general_left",
		view:"tree",
		select:true,
		data: [
   			{id:"root", value:"Project Demo", open:true, data:[
				{ id:"1", open:true, value:"Sequence 1", data:[
					{ id:"1.1", value:"Plan 1" },
					{ id:"1.2", value:"Plan 2" },
					{ id:"1.3", value:"Plan 3" }
				]},
				{ id:"2", value:"Sequence 2", open:true, data:[
					{ id:"2.1", value:"Plan 1" },
					{ id:"2.2", value:"Plan 2" }
				]}
			]}
		]
	})
});	
</script>