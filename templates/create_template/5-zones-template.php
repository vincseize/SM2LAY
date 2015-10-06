

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

