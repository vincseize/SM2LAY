<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 received var
                    'inner_content_visible': true, // DONT TOUCH
                    'header_visible': true, 
                    'footer_visible':false,
                    'inner_menu_left_visible': true,
                    'inner_menu_right_visible': true

*/

$inner_content_visible = $_POST['inner_content_visible'];
$header_visible = $_POST['header_visible'];
$footer_visible = $_POST['footer_visible'];
$inner_menu_left_visible = $_POST['inner_menu_left_visible'];
$inner_menu_right_visible = $_POST['inner_menu_right_visible'];

// echo $header_visible;

?>




       <!-- <div id='layout_div' style='width:600px; height:600px; margin:20px;'></div>
       <div id='layout_div' style='margin:0px;padding:0px;background-color:red;' class="ui-layout-center content"></div>-->
       <script type="text/javascript" charset="utf-8">
           // webix.ui.fullScreen();
            webix.ui({
               container:"inner-content",
               id:"content",
               // responsive:true, 
               //autowidth:true,
               // autoheight:true,
               //height:350,
                // width:100,
               rows:[
                   /*
                   {
                       id:"inner_header",
                       template:"inner header", 
                       height:35 
                   },
                   {
                    id:"resizer_inner_header",       
                    view:"resizer"},
                   */
                  
                  <?php
                        if($header_visible=='true'){
                            echo "{";
                            echo "id:'inner_header',";
                            echo "template:'inner header',";
                            echo "height:35";
                            echo "}";
                            echo ",";
                    
                            echo "{";
                            echo "id:'resizer_inner_header',";
                            echo "view:'resizer',";
                            echo "}";
                            echo ",";
                        }
                  ?>
                  
                  
                  
                   
                   {cols:[
                           
                           <?php
                        if($inner_menu_left_visible=='true'){
                            echo "{";
                            echo "id:'inner_menu_left',";
                            echo "template:'inner menu left',";
                            echo "height:150";
                            echo "}";
                            echo ",";
                    
                            echo "{";
                            echo "id:'resizer_menu_left',";
                            echo "view:'resizer',";
                            echo "}";
                            echo ",";
                        }
                  ?>
                           /*
                           
                       {
                           id:"inner_menu_left",
                           template:"inner menu left",
                           width:150
                       },
                       
                       
                       
                       
                       {
                           view:"resizer",
                           id:"resizer_menu_left"
                       },
                       
                       
                       {   
                           template:"inner content"
                       },
                         */                    
            
                     <?php
                        if($inner_content_visible=='true'){ // DEFAULT DONT TOUCH, MINIMAL CONTENT
                                echo "{";
                            // echo "template:'inner content',";
                            echo "template:'http->content/home_test.php',";
                            echo "}";
                            echo ",";         
                        }
            ?>
            
            <?php
                        if($inner_menu_right_visible=='true'){
                            
                            echo "{";
                            echo "id:'resizer_menu_right',";
                            echo "view:'resizer',";
                            echo "}";
                            echo ",";   
                            
                            
                            echo "{";
                            echo "id:'inner_menu_right',";
                            echo "template:'inner menu right',";
                            echo "height:150";
                            echo "}";
                            echo ",";
                    

                        }
                  ?>
            
            
            /*
                        {
                           view:"resizer",
                           id:"resizer_menu right"
                       },
                       {
                           id:"inner_menu_right",
                           template:"inner menu right",
                           width:150
                       }
                       
                       */
                       
                       
                       
                   ]
                   },
                   
                   
                   
                  /* 
                   {
                id:"resizer_inner_footer",              
                view:"resizer"},
                   
                   
                   
                   {
                       id:"inner_footer",
                       template:"inner footer", 
                       height:35 
                   }
                   
                   
                   */
                   
                   
                   
                     <?php
                        if($footer_visible=='true'){
                            
                            echo "{";
                            echo "id:'resizer_inner_footer',";
                            echo "view:'resizer',";
                            echo "}";
                            echo ",";   
                            
                            
                            echo "{";
                            echo "id:'inner_footer',";
                            echo "template:'inner footer',";
                            echo "height:35";
                            echo "}";
                            echo ",";
                    

                        }
                  ?>
                   
                   
                   
                   
               ]
               
               
               
               
               
           }).show();

       </script>
