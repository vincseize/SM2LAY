<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$( document ).ready(function() {	
		
				var defauft_click_here = 'Click here to change this ';		
		
				$('#create_template_cancel').click(function() {
					window.location.replace( "template_constructor.php" );
				});

				////////////////////////////////////////
				
				$('#top_select').change(function(){
						var txt = $('#top_select').val();
						$("#top_button").html(defauft_click_here+txt);
						$('#top_button').show(); 	
				});
				
				$('#top_button').click(function() {
					var txt = $('#top_select').val();
					$( "#top_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
				});

				
				////////////////////////////////////////
				
				$('#left_select').change(function(){
						var txt = $('#left_select').val();
						$("#left_button").html(defauft_click_here+txt);
						$('#left_button').show(); 	
				});
				
				$('#left_button').click(function() {
					var txt = $('#left_select').val();
					$( "#left_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
				});

				/////////////////////////////////////////////
				$('#right_select').change(function(){
						var txt = $('#right_select').val();
						$("#right_button").html(defauft_click_here+txt);
						$('#right_button').show(); 	
				});				
				
				$('#right_button').click(function() {
					var txt = $('#right_select').val();
					$( "#right_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
				});
				
				/////////////////////////////////////////////		
				$('#bottom_select').change(function(){
						var txt = $('#bottom_select').val();
						$("#bottom_button").html(defauft_click_here+txt);
						$('#bottom_button').show(); 	
				});			
		
				$('#bottom_button').click(function() {
					var txt = $('#bottom_select').val();
					$( "#bottom_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
				});
				
				///////////////////////////////////
	});	
</script>



<button id="create_template_validation">VALIDATE TEMPLATE</button>	
<button id="create_template_cancel">CANCEL</button>	
menu top sera toujours fixe, les autres collapsable et rezizable par default
<br><br>



<table border="1" width="100%" height="96%">
  <tr height="10%">
	  <th colspan="3" valign="top">
		<div style="background-color: black;color:white;width:100%;text-align: center">
			<select id='top_select'>
				<option value="menu">menu</option>
			</select>
		</div>
		<div>
				<button id="top_button">Click Here to choose your menu</button>	
		</div>
		<div id='top_container'></div>
	  </th>
  </tr>
  <tr>
	  <td width="25%"  valign="top">
		  
		<div style="background-color: black;color:white;width:100%;text-align: left">
			<select id='left_select'>
				<option value="menu">type content</option>
				<option value="menu">menu</option>
				<option value="content">content</option>
				<option value="result">result</option>
			</select>
		</div>
		  
		<div>
				<button id="left_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='left_container'></div>
		  
		  
		  
		  
	  </td>
	  <td valign="top">
		<div style="background-color: black;color:white;width:100%;text-align: center">

			<select id='venter_select'>
				<option value="result">result</option>
			</select>

		</div>
		<div>
				<button id="center_button"  style='display: none;'>Click Here to choose your content visual result</button>	
		</div>
		  content result from menu(s)
	  </td>
	  <td valign="top">
		  <div style="background-color: black;color:white;width:100%;text-align: right">
			<select id='right_select'>
				<option value="menu">type content</option>
				<option value="menu">menu</option>
				<option value="content">content</option>
				<option value="result">result</option>
			</select>
		  </div>
		  <div>
				<button id="right_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='right_container'></div>
		  
	  </td>
  </tr>
  <tr height="16%">
	  <td colspan="3" align="center" valign="top">
		  
		<div style="background-color: black;color:white;width:100%;text-align: center">
			<select id='bottom_select'>
				<option value="menu">type content</option>
				<option value="content">content</option>
				<option value="result">result</option>
			</select>
		</div> 
		  		  <div>
				<button id="bottom_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='bottom_container'></div>
	  </td>
  </tr>
</table>