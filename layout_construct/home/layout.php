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
$content_page = $_POST['content_page'];

$header_invisible = $_POST['header_invisible'];
$header_page = $_POST['header_page'];

$footer_invisible = $_POST['footer_invisible'];
$footer_page = $_POST['footer_page'];

$left_invisible = $_POST['left_invisible'];
$left_page = $_POST['left_page'];

$right_invisible = $_POST['right_invisible'];
$right_page = $_POST['right_page'];

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
               id:"home_content",
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
                            // template:'header',
                            template:'http-><?php echo $header_page ?>',
                            hidden:<?php echo $header_invisible ?>,
                            height:35
                            }
                            ,
                    
                            {
                            id:'header_resizer',
                            hidden:true,
                            view:'resizer',
                            }
                            ,
                        

                  
                  
                  
                   
                   {cols:[
                           
                            {
                            id:'left',
                            // template:'left',
                            template:'http-><?php echo $left_page ?>',
                            hidden:<?php echo $left_invisible ?>,
                            // height:150
                            }
                            ,
                    
                            {
                            id:'left_resizer',
                            hidden:true,
                            view:'resizer',
                           }
                            ,
                        

                                         
            

                            // DEFAULT DONT TOUCH, MINIMAL CONTENT OBLIGATOIRE
                            {
                            id:'content',
                            // template:'inner content',
                            template:'http-><?php echo $content_page ?>',
                            }
                            ,
                            // END DON T TOUCH , MINIMAL CONTENT OBLIGATOIRE

                            
                            {
                            id:'right_resizer',
                            view:'resizer',
                            hidden:true
                            }
                            ,
                            
                            
                            {
                            id:'right',
                            // template:'right',
                            template:'http-><?php echo $right_page ?>',
                            hidden:<?php echo $right_invisible ?>,
                            //height:150
                            }
                            ,
                    

                        

            
            
                       
                       
                       
                   ]
                   },
                   
                   
                   
                   
                   
                   

                            
                            {
                            id:'footer_resizer',
                            view:'resizer',
                            hidden:false
                            }
                            ,
                            
                            
                            {
                            id:'footer',
                            //template:'footer',
                            template:'http-><?php echo $footer_page ?>',
                            hidden:<?php echo $footer_invisible ?>,
                            height:35
                            }
                            ,
                    

                        

                   
                   
                   
                   
               ]
               
               
               
               
               
           }).show();

       </script>
