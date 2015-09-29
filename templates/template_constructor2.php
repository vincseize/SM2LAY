<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$( document ).ready(function() {	
		
		
		
		
		
		
		
		$("#dialog").dialog({
			autoOpen: false,
			modal: true,
			width: 600,
			height: 400,
			buttons: {
					"Close": function() {
						$(this).dialog("close");
					}
				}
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				var defauft_click_here = 'Click here to manage this ';		
		
				$('#create_template_cancel').click(function() {
					window.location.replace( "template_constructor.php" );
				});

				////////////////////////////////////////
				
				$('#top_select').change(function(){
						var txt = $('#top_select').val();
						$("#top_button").html(defauft_click_here+txt);
						$('#top_button').show(); 
						if(txt=='type'){$('#top_button').hide();}
				});
				
				$('#top_button').click(function(e) {
					var txt = $('#top_select').val();
					$( "#top_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
					$( "#left_container_cell" ).css('background-color','grey');
					$( "#right_container_cell" ).css('background-color','grey');
					$( "#center_container_cell" ).css('background-color','grey');
					$( "#bottom_container_cell" ).css('background-color','grey');
					
					$('#middle_row').css('display','none');
					$('#bottom_row').css('display','none');
					$('#tb_vignette').css('display','block');
					$('#top_button').css('display','none');
					$('#validate_template').css('display','none');
					
					$("#slider_choice").load("slider.html");
					
					
					
					

					
					//$("#dialog").html("");
					//$("#dialog").dialog("option", "title", "Loading...").dialog("open");
					//$("#dialog").load('modal.php', function() {
						//$(this).dialog("option", "title", $(this).find("h2").text());
						//$(this).find("h1").remove();
					//});
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				});

				
				////////////////////////////////////////
				
				$('#left_select').change(function(){
						var txt = $('#left_select').val();
						$("#left_button").html(defauft_click_here+txt);
						$('#left_button').show(); 	
						if(txt=='type'){$('#left_button').hide();}
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
						if(txt=='type'){$('#right_button').hide();}
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
						if(txt=='type'){$('#bottom_button').hide();}
				});			
		
				$('#bottom_button').click(function() {
					var txt = $('#bottom_select').val();
					$( "#bottom_container" ).append( "<p>Choice "+txt+" Ui to do</p>" );
				});
				
				///////////////////////////////////
	});	
</script>






<table width="100%" height="10%"  style="background-color:#38C0FF">
	<tr>
		<td>
			<div id="slider_choice"></div>
			<div id="validate_template">
				<button id="create_template_validation">VALIDATE TEMPLATE</button>	
				<button id="create_template_cancel">CANCEL</button>	
				menu top sera toujours fixe, les autres collapsable et rezizable par default
			</div>
		</td>
		<td width="1%">
				<table width="200px" height="100%" id="tb_vignette" style="display:none">
				  <tr style="background-color:green">
					<th colspan="3">Gallery</th>
				  </tr>
				  <tr style="background-color:grey">
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				  <tr  style="background-color:grey">
					<td colspan="3"></td>
				  </tr>
				</table>
		</td>
	</tr>
</table>

<table border="1" width="100%" height="89%">
  <tr height="10%">
	  <th colspan="3" valign="top">
		<div style="background-color: black;color:white;width:100%;text-align: center">
			<select id='top_select'>
				<option value="type">type content</option>
				<option value="menu">menu</option>
				<option value="gallery">gallery</option>

			</select>
		</div>
		<div>
				<button id="top_button"  style='display: none;'>Click Here to choose your menu</button>	
		</div>
		<div id='top_container'></div>
	  </th>
  </tr>
  <tr id="middle_row">
	  <td width="25%"  valign="top" id='left_container_cell'>
		  
		<div style="background-color: black;color:white;width:100%;text-align: left">
			<select id='left_select'>			
				<option value="type">type content</option>
				<option value="menu">menu</option>				
				<option value="gallery">gallery</option>
				<option value="result">result</option>
			</select>
		</div>
		  
		<div>
				<button id="left_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='left_container'></div>
		  
		  
		  
		  
	  </td>
	  <td valign="top"  id='center_container_cell'>
		<div style="background-color: black;color:white;width:100%;text-align: center">

			<select id='venter_select'>
				<option value="type">type content</option>
				<option value="result">result</option>
				<option value="gallery">gallery</option>
			</select>

		</div>
		<div>
				<button id="center_button"  style='display: none;'>Click Here to choose your content visual result</button>	
		</div>
		  content result from menu(s)
	  </td>
	  <td valign="top" id='right_container_cell'>
		  <div style="background-color: black;color:white;width:100%;text-align: right">
			<select id='right_select'>
				<option value="type">type content</option>
				<option value="menu">menu</option>
				<option value="result">result</option>
				<option value="gallery">gallery</option>
			</select>
		  </div>
		  <div>
				<button id="right_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='right_container'></div>
		  
	  </td>
  </tr>
  <tr height="16%" id="bottom_row">
	  <td colspan="3" align="center" valign="top"  id='bottom_container_cell'>
		  
		<div style="background-color: black;color:white;width:100%;text-align: center">
			<select id='bottom_select'>
				<option value="type">type content</option>
				<option value="result">result</option>
				<option value="gallery">gallery</option>
			</select>
		</div> 
		  		  <div>
				<button id="bottom_button"  style='display: none;'>Click Here to choose your ...</button>	
		</div>
		<div id='bottom_container'></div>
	  </td>
  </tr>
</table>


<div id="dialog"></div>







