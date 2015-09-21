<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




	<title>SaAM V2</title>

       <link rel="stylesheet" href="css/webix.css" type="text/css" media="screen" charset="utf-8">
       <script src="js/webix.js" type="text/javascript" charset="utf-8"></script>


	<link type="text/css" rel="stylesheet" href="css/layout-default-latest.css" />


  	<link rel="stylesheet" href="css/bootstrap.min.css">	<!-- order 1,2,3 IMPORTANT -->
  	<script src="js/jquery.min.js"></script>  		<!-- order 1,2,3 IMPORTANT -->
  	<script src="js/bootstrap.min.js"></script>  		<!-- order 1,2,3 IMPORTANT -->



	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery-ui-latest.js"></script>
	<script type="text/javascript" src="js/jquery.layout-latest.js"></script>
	<script type="text/javascript" src="js/complex.js"></script>
	<script type="text/javascript" src="js/debug.js"></script>
	<script type="text/javascript">


	


	

	
	
	
	

	
	
	
	
	
	$(document).ready(function(){
	
        
        // var wWidth = $(window).width();
        var wWidth = document.body.clientWidth;
        var hHeight = document.body.clientHeight;
        
        
        var layoutOptions = {
	
	
	
		center__childOptions: {
                   // resizable:   true,
			inset: {
				top:	0
			,	bottom:	0
			,	left:	0
			,	right:	0
			}
		}
                
                
                
                
                
                
                ,	north: {
                        maxSize:				100
                ,       minSize:				35
		,	spacing_closed:			1			// HIDE resizer & toggler when 'closed'
		,	slidable:				false		// REFERENCE - cannot slide if spacing_closed = 0
		,	initClosed:				false

		}
                
                ,	south: {
			maxSize:				200
		,	spacing_closed:			1			// HIDE resizer & toggler when 'closed'
		,	slidable:				true		// REFERENCE - cannot slide if spacing_closed = 0
		,	initClosed:				true

		}
 
 
                 ,	east: {
			maxSize:				300
		,	spacing_closed:			1			// HIDE resizer & toggler when 'closed'
		,	slidable:				true		// REFERENCE - cannot slide if spacing_closed = 0
		,	initClosed:				true

		}
                
                 ,	west: {

			spacing_closed:			1			// HIDE resizer & toggler when 'closed'
		,	slidable:				true		// REFERENCE - cannot slide if spacing_closed = 0
		,	initClosed:				false

		}               
                
                
                
                
                
	};
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

            $('body').layout( layoutOptions );

		
                var layoutSettings_Outer = {		
		    name: "outerLayout" // NO FUNCTIONAL USE, but could be used by custom code to 'identify' a layout	
	      
	      
		    ,	defaults: {
			      size:					"auto"

                }	
	  
          	
          

          
          
	
	};
		
                
                
                          
           // SET OBJECT POINTERS FOR CONVENIENCE
            // var $westToggler  = layoutSettings_Outer.togglers.west;
            // BIND CUSTOM WEST METHODS
            // $westToggler.find(".btnToggler").click( toggleWest);
            // CUSTOM WEST METHODS
            // function toggleWest  (evt) { layoutSettings_Outer.toggle("west"); evt.stopPropagation(); };
                
                
// Sample trigger on pane as a DOM element
/*
$(".ui-layout-west").click(function(){
    alert( 'west' );
});
            */
            
                
                
                
		
		$("#inner-content").load('layout_construct/home/layout_home.php',
                {
                    // variables
                    
                    'content_invisible': false, // DONT TOUCH MINIMAL
                    'content_page': 'layout_content/home/home.php', // DONT TOUCH MINIMAL
                    
                    'header_invisible': false, 
                    'header_page': 'layout_content/home/header.php',
                 
                    'footer_invisible':false,
                    'footer_page': 'layout_content/home/footer.php',
                    
                    'left_invisible': false,
                    'left_page': 'layout_content/home/left.php',
                    
                    'right_invisible': false,
                    'right_page': 'layout_content/home/right.php',                    
                    
                    // 'wWidth': wWidth-5,  // minus size * 2 resizer left and right and V scrollbar ???
                    'wWidth': wWidth, 
                    'hHeight': hHeight, // minus height navBar and H SubMenu ?
                    'hHeightFooter': 35
                    
                    
                }
            
    );
		
		
		
});

	

	
	</script>

</head>
<body>




<!-- GENERAL  FIXED NAVBAR -->
<?php include('navbar.php'); ?>


<!-- GENERAL TEMPLATE LAYOUT -->
<div id="menu-north"  class="ui-layout-north" style="background-color:#444444;"><?php include('menus/home/menu_top_home.php'); ?></div>
<div id="menu-west"  class="ui-layout-west"   style="background-image: url('tmp/bg_menu_left.jpg');background-repeat: no-repeat;background-size: cover;"></div>
<div id="menu-east"  class="ui-layout-east"   style="background-image: url('tmp/bg_admin_right.jpg');background-repeat: no-repeat;background-size: cover;"></div>
<div id="menu-south"  class="ui-layout-south" style="background-color:#111;"><font color='white'>South (MESSAGES, AUTRES ...), contenu changeant</font></div>

<!-- CONTENT CONTAINER -->
<div id="content" class="ui-layout-center center" style="padding:0;margin:0;size:auto;overflow:hidden;width:auto;">
    
        <div id="inner-content" class="ui-layout-center content" style="padding:0;margin:0;size:auto;overflow:hidden;width:auto;">    </div>
   
 <div>
    




























</body>
</html>