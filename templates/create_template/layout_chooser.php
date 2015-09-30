<?php

// pour polo

$height_container_received_layout = 700;
$height_layout_resized = 800;


?>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <!--

  <script src="js/vendor/jquery-2.1.4.min.js"></script>
  
  
	<script src="js/vendor/angular-1.4.6.min.js"></script>
	<script src="js/vendor/jquery-ui.min.js"></script>
	<script src="js/vendor/jquery.layout-1.4.0.js"></script>
	<script src="js/vendor/angular-ui-tree.min.js"></script>	

   --> 


  
  
  <style>
  #gallery { float: left; width: 65%; min-height: 12em; height: 96%;}
  .gallery.custom-state-active { background: #ccc; }
  .gallery li { float: left; width: 200px; height: 150px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
 
  #layout_container { float: center; width: 98%; min-height: <?php echo $height__layout_resized;?>px; height: 95%; padding: 1%; }
  #layout_container h4 {  line-height: 16px; margin: 0 0 0.4em; }
  #layout_container h4 .ui-icon { float: left; }
  #layout_container .gallery h5 { display: none; }
  
  
  
  
  
  
  
  #layout_chooser {
    position: fixed;
    bottom: 0;
    width: 100%;
	background-color: black;
	vertical-align: center;
	

}
  
    #close_create_template {
    position: relative;
    top: 0;
	left: 0;
	

}
  

    #create_template_next_step {
    position: relative;
	right: 0;
	

}
  
  
  
  
  
  </style>
  
  
  
  

<script>
$( document ).ready(function() {	
	
			$('#close_create_template').click(function() {
				// $('#projects_tabs').show();
				// $('#departments').show();
				// $('#main_outer').load('./layouts/5-zones.php');
				// return false;
				window.location.replace( "../../index.php" );
			});
			
			$('#clear_layout').click(function() {
				window.location.replace( "template_constructor.php" );
			});
			
			$('#create_template_next_step2').click(function() {
				window.location.replace( "template_constructor.php" );
			});

});	
		
		
		
	</script>
  
  
  
  
  
  
  <script>
  $(function() {
    // there's the gallery and the layout_container
    var $gallery = $( "#gallery" ),
      $layout_container = $( "#layout_container" );
 
    // let the gallery items be draggable
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // let the layout_container be droppable, accepting the gallery items
    $layout_container.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 
    // let the gallery be droppable as well, accepting items from the layout_container
    $gallery.droppable({
      accept: "#layout_container li",
      activeClass: "custom-state-active",
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 
    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $layout_container ).length ?
          $( "ul", $layout_container ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $layout_container );
 
        $item.find( "a.ui-icon-layout_container" ).remove();
        $item.append(  ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "98%" })
			.animate({ height: "<?php echo $height_container_received_layout;?>px" });
            // .find( "img" )
            
        });
      });
    }
 
    // image recycle function
    var layout_container_icon = "<a href='link/to/layout_container/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-layout_container'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "400px")
			.css( "height", "200px")
          .append( layout_container_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 
    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
 
    // resolve the icons behavior with event delegation
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-layout_container" ) ) {
        deleteImage( $item );
      } 
 
      return false;
    });
  });
  </script>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
<div class="ui-widget ui-helper-clearfix">
 


 
		<div id="layout_container" class="ui-widget-content ui-state-default">
			
		<button id="close_create_template">CLOSE TEMPLATE GENERATOR</button>
		<button id="clear_layout">CLEAR LAYOUT</button>
		<button id="create_template_next_step2">NEXT STEP >></button>		
		
		(Un Layout depend d un projet !!!)
		
		  <h4 class="ui-widget-header"> DRAG AND DROP LAYOUT HERE</h4>
		  
		  
		  
		  
		</div>
 
</div>
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	
	
	
	<div id="layout_chooser">
	
	
	
	
	<ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">LAYOUT 5-zones</h5>
    

	
	
	<table border="1" width="100%" height="100%">
  <tr>
    <th colspan="3"></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
</table>
	
	
	
	
	
	
  </li>
  
  
  
  
  
  
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">LAYOUT 3-rows</h5>
    <a href="images/high_tatras.jpg" title="View larger" class="ui-icon ui-icon-zoomin">View larger</a>

	
	
	<table border="1" width="100%" height="70%">
  <tr>
    <th colspan="3"></th>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
</table>
	
	
	
	
	
	
  </li>
  
  
  
  
  
  
  
  
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">LAYOUT 3-cols</h5>
    <a href="images/high_tatras.jpg" title="View larger" class="ui-icon ui-icon-zoomin">View larger</a>

	
	
	<table border="1" width="100%" height="70%">
  <tr>
    <th rowspan="3"></th>
    <th rowspan="3"></th>
    <th rowspan="3"></th>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
</table>
	
	
	
	
	
	
  </li>
  
  
  
  
  
  
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">LAYOUT 2-rows</h5>
    <a href="images/high_tatras.jpg" title="View larger" class="ui-icon ui-icon-zoomin">View larger</a>

	
	
	<table border="1" width="100%" height="70%">
<tr>
    <th></th>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>
	
	
	
	
	
	
  </li>
  
  
  
  
  
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">LAYOUT 2-cols</h5>
    <a href="images/high_tatras.jpg" title="View larger" class="ui-icon ui-icon-zoomin">View larger</a>

	
	
	<table border="1" width="100%" height="70%">
<tr>
    <th></th>
    <th></th>
  </tr>
</table>
	
	
	
	
	
	
  </li>
  
  
  
  
  
  
  
  
</ul>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
 
		
		
		
		
