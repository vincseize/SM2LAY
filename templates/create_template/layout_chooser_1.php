<style>
	
	*{
		margin:0;
		padding:0;
	}
	
	header {
		position: fixed;
		top: 0;
		width: 100%;
		height: 120px;
		background-color: #23A9DD;
		vertical-align: center;
	}
	
	section {
		position: fixed;
		top: 120;
		width: 100%;
		height: 120%;
		background-color: #ccc;
		vertical-align: center;
		text-align: center;
		text-valign: center;
	}
	
	#drop{
		background-color: red;
		min-height: 120px;
	}
	
	
</style>


<header>
	<nav><?php include('menu_templates.php');?></nav>
</header>


<section>
	
	
	


<div id="wrapper">
	
	<div id="drop" class="fbox">
		drag and drop here
		<ul id="origin" class="list">

		</ul>
	</div>
  
</div>



</section>





<script>
	$(document).ready(function($) {	
		$( "#sort1, #sort2" ).sortable({
		  helper:"clone", 
		  opacity:0.5,
		  cursor:"crosshair",
		  connectWith: ".list",
		  receive: function( event, ui ){
			if($(ui.sender).attr('id')==='sort1' 
			   && $('#sort2').children('li').length>3){
			  $(ui.sender).sortable('cancel');
			}
		  }
		});

		$( "#sort1,#sort2" ).disableSelection();
	});

</script>
