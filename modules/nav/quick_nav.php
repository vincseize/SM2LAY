<!-- https://jqueryui.com/resizable/  -->    
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="../../js/vendor/jquery-2.1.4.min.js"></script>
  <!--
  <script src="../../js/vendor/jquery.layout-1.4.0.js"></script>
   --> 
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  



<script>
  $(function() {
    $( "#menu_quick_nav_resizable1" ).resizable();
	$( "#menu_quick_nav_resizable2" ).resizable();
  });
  </script>


<div id="menu_quick_nav_resizable1" style="background-color:#111;width:200px;height:300px;">
    <h3 style="background-color:#006292;">MENU ARBO Home</h3>

			<div id="menu_home" class="demo">
				<ul>
					<li>rand tip </li>
					<li data-jstree='{ "opened" : true }'>TIPS
						<ul>
							<li>t 1</li>
							<li>t 2</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li data-jstree='{ "opened" : true }'>FIXES
						<ul>
							<li>f 1</li>
							<li>f 2</li>
						</ul>
					</li>
				</ul>
			</div>

</div>

	
	<div id="menu_quick_nav_resizable2" style="background-color:#111;width:200px;height:300px;">
    <h3 style="background-color:#006292;">MENU Project Home</h3>

			<div id="menu_project_home" class="demo">
				<ul>
					<li data-jstree='{ "opened" : true }'>SEQUENCES
						<ul>
							<li data-jstree='{ "selected" : true }'>Shot 1</li>
							<li>Shot 2</li>
						</ul>
					</li>
				</ul>
			</div>

</div>
  
<br>
	
<script>
	$('#menu_home').jstree();
	$('#menu_project_home').jstree();
</script>
