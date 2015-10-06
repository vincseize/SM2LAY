<?php
$height_header = 170;
$height_footer = 40;
?>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/app.css" />
  

  
<style>
	
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
  
  
  
<style>
/*general*/
* {
    margin:0;
    padding:0;
}
 
html, body {
    height:100%;
	background: #333;
}
 
#wrapper {
    min-height:100%;
    
}

#header {
    background: #333;
	height:<?php echo $height_header;?>px;
}

#content {
    padding-bottom: <?php echo $height_header;?>px;
	
}
 
#footer {
    height:40px;
    margin-top:-40px;
    background: #333;
}

/*header menus*/

</style>

<body>
<div id="wrapper">
    <div id="header">
		<table width="100%"  height="1px" >
			<tr>
				<td valign="top" height="1px" >
					<div id="buttons_layouts">
						<?php include('layout_chooser_leftMenu.html');?>
						<br>
					<div>
				</td>
				<td width="100%" >
	
					<div id="menu_layouts" style="display:block">
						<?php 
						include('menu_layouts.php');
						?>
					</div>

					<div id="menu_templates" style="visibility:hidden;display:none">
						<?php 
						include('menu_templates.php');						
						?>
					</div>					
					
					
				</td>
			</tr>
		</table>
	</div>
    <div id="content">
		<?php 
			// include('5-zones-template.php');
		?>
	</div>
</div>
					
					
					
					
					
					
				
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
<div id="footer">
</div>
	
	
	

  
  
  
  <script>
  $(function() {
	  
    // slider gallery and the layout_container
    var $gallery = $( "#gallery" ),
      $layout_container = $( "#layout_container" );
 
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
		$target = $( event.target );
		// alert($item);
		$( "#content" ).load( "5-zones.php" );
		$( "#create_template_nextStep" ).css( "display","block" );
		// $( "#menu_templates" ).css( "display","none" );
		
		
		return false;
    });
	
	
	$('#close_create_template').click(function() {
		window.location.replace( "../../index.php" );
	});


	$('#back_create_template').click(function() {
		$( "#menu_layouts" ).css( "display","block" );
		$( "#menu_templates" ).css("display","none");
		$( "#menu_templates" ).css( "visibility","hidden" );
		$( "#back_create_template" ).css( "display","none" );
		$( "#close_create_template" ).css( "display","block" );
		$( "#content" ).load( "5-zones.php" );
	});
	

	$('#create_template_nextStep').click(function() {
		/*
		$( "#menu_layouts" ).css( "display","none" );
		$( "#menu_layouts" ).css( "visibility","hidden" );
		$( "#menu_templates" ).css( "display","block" );
		$( "#menu_templates" ).css( "visibility","visible" );
		$( "#create_template_nextStep" ).css( "display","none" );
		$( "#close_create_template" ).css( "display","none" );
		$( "#back_create_template" ).css( "display","block" );
		$( "#content" ).load( "5-zones-template.php" );
		*/
	   window.location.replace( "constructor_2.php" );
	   


	});	
	
	
	
  });
  </script>

  
	
	
<script>
	
	$(document).ready(function($) {	
		$( "#sort_top,#sort_left, #sort_right, #sort_center, #sort_bottom, #sort1" ).sortable({
		  helper:"clone", 
		  opacity:0.5,
		  cursor:"hand",
		  connectWith: ".list",
		  receive: function( event, ui ){
			if($(ui.sender).attr('id')==='sort1' 
			   && $('#sort_top').children('li').length>3){
			  $(ui.sender).sortable('cancel');
			}
		  }
		});

		$( "#sort_top,#sort_left, #sort_right, #sort_center, #sort_bottom, #sort1" ).disableSelection();
	});

</script>

	
	
	
	
	
</body>


