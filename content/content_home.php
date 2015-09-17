<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>




       <!-- <div id='layout_div' style='width:600px; height:600px; margin:20px;'></div>-->
       <div id='layout_div' style='margin:0px;padding:0px;background-color:red;' class="ui-layout-center content"></div>
       <script type="text/javascript" charset="utf-8">
           // webix.ui.fullScreen();
            webix.ui({
               container:"inner-content",
               id:"content_home",
               // responsive:true, 
               //autowidth:true,
               // autoheight:true,
               //height:350,
                // width:100,
               rows:[
                   {
                       id:"inner_header",
                       template:"header", 
                       height:35 
                   },
                   {
                    id:"resizer_inner_header",       
                    view:"resizer"},
                   
                   
                   {cols:[
                       {
                           id:"inner_menu_left",
                           template:"menu left",
                           width:150
                       },
                       {
                           view:"resizer",
                           id:"resizer_menu_left"
                       },
                       {   
                           template:"inner content"
                       },
                                              {
                           view:"resizer",
                           id:"resizer_menu right"
                       },
                       {
                           id:"inner_menu_right",
                           template:"menu right",
                           width:150
                       }
                   ]
                   },
                   
                   
                   {
                id:"resizer_inner_footer",              
                view:"resizer"},
                   
                   
                   
                   {
                       id:"inner_footer",
                       template:"footer", 
                       height:35 
                   }
                   
                   
                   
               ]
               
               
               
               
               
           }).show();

       </script>
