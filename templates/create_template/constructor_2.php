<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
<!--  http://www.jqueryrain.com/?tq56vm_M   Lory slide system-->  
<script src="js/lory.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/app.css" />
  
<style>

	
html, body {
    height:100%;
	background: #333;
}	
	
	
.list{ min-height: 120px;} /* you need to set the size of the ul otherwise it may not detect the dropped item */
.list li{
display: inline-block;
list-style-type: none;
padding-right: 20px;
}	
	
	
</style>

<style>

	
	#wrapper_top{
		background-color: red;
		height:100%;
	}
	#wrapper_left{
		background-color: green;
		// min-width: 120px;
		// min-height: 120px;
		height:100%;
	}
	#wrapper_center{
		background-color: yellow;
		height:100%;
	}
	#wrapper_right{
		background-color:blueviolet;
		height:100%;
	}
	#wrapper_bottom{
		background-color:orange;
		height:100%;
	}
</style>
<style>
	
	#table_layout_5 {
		border-collapse:collapse;
		border-width:4px;
		border-style:solid; 
		border-color:black;
		width:100%;
		height:62%;
	 }
	#table_layout_5 th, td {
		border:1px solid black;
		
	 }
	#table_layout_5 td {
		text-align:center;
	 }
	#table_layout_5 caption {
		font-weight:bold;
	 }
</style>







<div class="slider js_variablewidth variablewidth">
	<div class="frame js_frame" id="origin" class="fbox">
		<ul class="slides js_slides" id="sort1" class="list">
			<li class="js_slide draggable" style="width: 220px;">MODULE A</li>
			<li class="js_slide" style="width: 190px;">MODULE B</li>
			<li class="js_slide" style="width: 150px;">MODULE Gallery C</li>
			<li class="js_slide" style="width: 130px;">MODULE D</li>
			<li class="js_slide" style="width: 250px;">MODULE E</li>
			<li class="js_slide" style="width: 180px;">MODULE F</li>
			<li class="js_slide" style="width: 200px;">MODULE Gallery G</li>
			<li class="js_slide" style="width: 140px;">MODULE H</li>
			<li class="js_slide" style="width: 120px;">MODULE I</li>
			<li class="js_slide" style="width: 240px;">MODULE J</li>
		</ul>
	</div>

	<span class="js_prev prev">
		<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g></svg>
	</span>

	<span class="js_next next">
		<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g></svg>
	</span>
</div>


<script>
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {

		var variableWidth    = document.querySelector('.js_variablewidth');

		lory(variableWidth, {
			rewind: true
		});

		function handleEvent(e) {
			var newSpan = document.createElement('span');
			var time = new Date();
			time = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds() + ',' + time.getMilliseconds();
			var newContent = document.createTextNode('[' + time + '] Event dispatched: "' + e.type + '"');
			newSpan.appendChild(newContent);
			e.target.nextElementSibling.appendChild(newSpan);
		}

		events.addEventListener('before.lory.init', handleEvent);
		events.addEventListener('after.lory.init', handleEvent);
		events.addEventListener('before.lory.slide', handleEvent);
		events.addEventListener('after.lory.slide', handleEvent);

		events.addEventListener('on.lory.resize', handleEvent);
		events.addEventListener('on.lory.touchend', handleEvent);
		events.addEventListener('on.lory.touchmove', handleEvent);
		events.addEventListener('on.lory.touchstart', handleEvent);
		events.addEventListener('on.lory.destroy', handleEvent);

		lory(events, {
			infinite: 1
		});
	});
</script>






<div id="container_template" style="display:block">

			<table id="table_layout_5" >
			  <tr height="10%">
				<th colspan="3">             


						<div id="wrapper_top" class="fbox">
							
							<ul id="sort_top" class="list">

							</ul>
							

						</div>


				</th>
			  </tr>
			  <tr>
				  <td width="10%">
					  
						<div id="wrapper_left">
							
							<ul id="sort_left" class="list">

							</ul>
							

						</div>				  
					  
				  </td>
				  <td>
					  
					  
					  <div id="wrapper_center">
							
								<ul id="sort_center" class="list">

								</ul>
							

						</div>	
					  
					  
				  </td>
				  <td width="10%">
					  
					  	<div id="wrapper_right">
							
								<ul id="sort_right" class="list">

								</ul>
							

						</div>	
					  
				  </td>
			  </tr>
			  <tr height="10%">
				  <td colspan="3">
					  
					  <div id="wrapper_bottom">
							<div id="bottom" class="fbox">
							<ul id="sort_bottom" class="list">

							</ul>
							</div>

						</div>
					  
					  
				  </td>
			  </tr>
			</table>

	
</div>











<script>
	$(document).ready(function($) {	
		$( "#sort1, #sort2,#sort_top" ).sortable({
		  helper:"clone", 
		  opacity:0.5,
		  cursor:"hand",
		  connectWith: ".list",
		  receive: function( event, ui ){
			if($(ui.sender).attr('id')==='sort1' 
			   && $('#sort2').children('li').length>3){
			  $(ui.sender).sortable('cancel');
			}
		  }
		});

		$( "#sort1,#sort2,#sort_top" ).disableSelection();
	});

</script>