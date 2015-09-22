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
   			{id:"root", value:"Tips", open:true, data:[
				{ id:"1", open:true, value:"help", data:[
					{ id:"1.1", value:"b 1" },
					{ id:"1.2", value:"b 2" },
					{ id:"1.3", value:"b 3" }
				]},
				{ id:"2", value:"random tips", open:true, data:[
					{ id:"2.1", value:"dpt 1" },
					{ id:"2.2", value:"dpt 2" },
                                        { id:"2.3", value:"dpt x" }
				]}
			]}
		]
	})
});	
</script>