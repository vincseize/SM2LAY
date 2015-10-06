 <!-- drag and drop -->

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/lory.min.js"></script><!--  http://www.jqueryrain.com/?tq56vm_M   Lory slide system-->
<link rel="stylesheet" type="text/css" href="css/app.css" />


  
  

<style>

	.list{ min-height: 120px;} /* you need to set the size of the ul otherwise it may not detect the dropped item */
	.list li{
		display: inline-block;
		list-style-type: none;
		padding-right: 20px;
	}
	
	
	
	
</style>


<script>
	$(document).ready(function($) {	
		$( "#sort_top,#sort_left, #sort_right, #sort_center, #sort_bottom, #sort1" ).sortable({
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

		$( "#sort1" ).disableSelection();
	});

</script>


 <style>
	#droppable {
		left: 250px;
		top: 0;
		width: 100%;
		height: 400px;
		background: #999;
		color: #fff;
		padding: 10px;
  }
  </style>
  
 



<style>
	
	*{
		margin:0;
		padding:0;
	}
	
	header {
		position: fixed;
		top: 0;
		width: 100%;
		height: 130px;
		background-color: #000;
		vertical-align: center;
	}
	
	section {
		position: fixed;
		top: 120;	
		background-color: #ccc;
		margin:0;
		padding:0;
	}
	
	
	
	
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


<div id="slider_menu_layout" style="display:block"><?php include('menu_layouts.php');?></div>
<div id="container_layout" style="display:block"><?php include('5-zones.php');?></div>





<div id="slider_menu_modules" style="display:block">
	
            <div class="slider js_variablewidth variablewidth">
                <div class="frame js_frame" id="origin">
                    <ul class="slides js_slides" id="sort1" class="list">
                        <li class="js_slide" style="width: 220px;">MODULE A</li>
                        <li class="js_slide" style="width: 190px;">MODULE B</li>
                        <li class="js_slide" style="width: 150px;">MODULE C</li>
                        <li class="js_slide" style="width: 130px;">MODULE D</li>
                        <li class="js_slide" style="width: 250px;">MODULE E</li>
                        <li class="js_slide" style="width: 180px;">MODULE F</li>
                        <li class="js_slide" style="width: 200px;">MODULE Gallery</li>
                        <li class="js_slide" style="width: 140px;">MODULE H</li>
                        <li class="js_slide" style="width: 120px;">MODULE I</li>
                        <li class="js_slide" style="width: 240px;">MODULE J</li>
                    </ul>
                </div>

                <span class="js_prev prev">
                    <img src="css/left.png" height="50">
                </span>

                <span class="js_next next">
                    <img src="css/right.png" height="50">
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



</div>









<div id="container_template" style="display:block">

			<table class="table_layout" >
			  <tr height="10%">
				<th colspan="3">             


						<div id="wrapper_top">
							
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




	
	
	
	
	
	
	
	
	
	
	
	
	
	




