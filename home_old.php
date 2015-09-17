<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




	<title>SaAM V2</title>

       <link rel="stylesheet" href="js/webix.css" type="text/css" media="screen" charset="utf-8">
       <script src="js/webix.js" type="text/javascript" charset="utf-8"></script>


	<link type="text/css" rel="stylesheet" href="css/layout-default-latest.css" />


  	<link rel="stylesheet" href="css/bootstrap.min.css">	<!-- order 1,2,3 IMPORTANT -->
  	<script src="js/jquery.min.js"></script>  				<!-- order 1,2,3 IMPORTANT -->
  	<script src="js/bootstrap.min.js"></script>  			<!-- order 1,2,3 IMPORTANT -->




	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery-ui-latest.js"></script>
	<script type="text/javascript" src="js/jquery.layout-latest.js"></script>
	<script type="text/javascript" src="js/complex.js"></script>
	<script type="text/javascript" src="js/debug.js"></script>
	<script type="text/javascript">


	


	var layoutOptions = {
	
	
	
		center__childOptions: {
			inset: {
				top:	0
			,	bottom:	0
			,	left:	0
			,	right:	0
			}
		}
	};

	
	
	
	

	
	
	
	
	
	$(document).ready(function(){
	
		// var outerLayout, innerLayout;	
	
		// outerLayout = $("body").layout( layoutSettings_Outer );	
	
		$('body').layout( layoutOptions );
		// var myLayout = $("body").layout();
		// var innerLayout = $("div.pane-center").layout( layoutSettings_Inner );
		// myLayout.close('north');
		
		
		// myLayout.close('east');
		// myLayout.close('west');
		// myLayout.close('south');
		
		
		
		//myLayout.state.south.close('south');
		
		// myLayout.togglerLength_open(0);			// HIDE the toggler button
		//myLayout.hide('south')	
		
		// $( ".ui-layout-west" ).remove();
		
		
		
		
		
		
	      var layoutSettings_Outer = {		
		    name: "outerLayout" // NO FUNCTIONAL USE, but could be used by custom code to 'identify' a layout	
	      
	      
		    ,	defaults: {
			      size:					"auto"

	      }	
	  
	
		/*
	*#######################
	* INNER LAYOUT SETTINGS
	*#######################
	*
	* These settings are set in 'list format' - no nested data-structures
	* Default settings are specified with just their name, like: fxName:"slide"
	* Pane-specific settings are prefixed with the pane name + 2-underscores: north__fxName:"none"

var layoutSettings_Inner = {
			size:					"auto"
	};
	
	
	
		*/
	
	
	
	
	
	
	
	
	
	
	
	
	
			};
		
		
		
		
		
		
	});

	

	
	</script>

</head>
<body>




<!-- GENERAL  FIXED NAVBAR -->
<?php include('navbar.php'); ?>



<!-- GENERAL TEMPLATE LAYOUT -->
<div id="menu-north"  class="ui-layout-north" style="background-color:#444444;"><?php include('menu_top_home.php'); ?></div>
<div id="menu-west"  class="ui-layout-west"   style="background-image: url('tmp/bg_menu_left.jpg');background-repeat: no-repeat;background-size: cover;"></div>
<div id="menu-east"  class="ui-layout-east"   style="background-image: url('tmp/bg_admin_right.jpg');background-repeat: no-repeat;background-size: cover;"></div>
<div id="menu-south"  class="ui-layout-south" style="background-color:#111;"><font color='white'>South (MESSAGES, AUTRES ...), contenu changeant</font></div>

<!-- CONTENT CONTAINER -->
<div id="content" class="ui-layout-center center" style="padding:0;margin:0;size:auto;">
    
    
    <div id="inner-content" class="ui-layout-center content">
   
        <?php 

            // include('home_content.php'); 
            include('content/content_home.php'); 

        ?>    
        
        
    </div>
    
 <div>
    



























</div>







</body>
</html>