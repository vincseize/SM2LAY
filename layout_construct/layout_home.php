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



/*  TEMPLATE UI HOME


------------------------------------------------------------------
                    header
------------------------------------------------------------------
            |                                   |
            |                                   |
 left       |               content             | right
            |                                   | 
            |                                   | 
------------------------------------------------------------------
                    footer
 -----------------------------------------------------------------
 
 
 */













$content_invisible = $_POST['content_invisible'];
$header_invisible = $_POST['header_invisible'];
$footer_invisible = $_POST['footer_invisible'];
$left_invisible = $_POST['left_invisible'];
$right_invisible = $_POST['right_invisible'];

$wWidth = $_POST['wWidth'];
$hHeight = $_POST['hHeight'];

$hHeightFooter = $_POST['hHeightFooter'];

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
                // width:1024,
                width:<?php echo $wWidth ?>,
               // height:<?php echo $hHeight ?>,
               rows:[

                  


                            {
                            id:'header',
                            template:'header',
                            hidden:<?php echo $header_invisible ?>,
                            height:35
                            }
                            ,
                    
                            {
                            id:'resizer_inner_header',
                            hidden:true,
                            view:'resizer',
                            }
                            ,
                        

                  
                  
                  
                   
                   {cols:[
                           
                            {
                            id:'left',
                            template:'left',
                            hidden:<?php echo $left_invisible ?>,
                            // height:150
                            }
                            ,
                    
                            {
                            id:'resizer_menu_left',
                            hidden:true,
                            view:'resizer',
                           }
                            ,
                        

                                         
            

                        // DEFAULT DONT TOUCH, MINIMAL CONTENT
                               {
                                   id:'home_inner_content',
                            // template:'inner content',
                            template:'http->layout_content/home.php',
                            }
                            ,
                        

                            // END DON T TOUCH , MINIMAL CONTENT

                            
                            {
                            id:'resizer_right',
                            view:'resizer',
                            hidden:true
                            }
                            ,
                            
                            
                            {
                            id:'right',
                            template:'right',
                            hidden:<?php echo $right_invisible ?>,
                            //height:150
                            }
                            ,
                    

                        

            
            
                       
                       
                       
                   ]
                   },
                   
                   
                   
                   
                   
                   

                            
                            {
                            id:'resizer__footer',
                            view:'resizer',
                            hidden:false
                            }
                            ,
                            
                            
                            {
                            id:'footer',
                            template:'footer',
                            hidden:<?php echo $footer_invisible ?>,
                            height:35
                            }
                            ,
                    

                        

                   
                   
                   
                   
               ]
               
               
               
               
               
           }).show();

       </script>
