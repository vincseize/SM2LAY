<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
   <head>
       <link rel="stylesheet" href="js/webix.css" type="text/css" media="screen" charset="utf-8">
       <script src="js/webix.js" type="text/javascript" charset="utf-8"></script>
       <title>Layout and Resizer</title>
   </head>
   <body>
       <div id='layout_div' style='width:600px; height:600px; margin:20px;'></div>
       <script type="text/javascript" charset="utf-8">

           webix.ui({
               container:"layout_div",
               id:"layout",
               height:550,
               width:700,
               rows:[
                   {template:"row 1", height:35 },
                   {template:"row 1"},
                   {view:"resizer"},
                   {template:"row 2"},
                   {view:"resizer"},
                   {cols:[
                       {
                           id:"a1",
                           template:"column 1",
                           width:150
                       },
                       {
                           view:"resizer",
                           id:"resizer"
                       },
                       {   
                           template:"column 2"
                       },
                       {
                           template:"column 3"
                       }
                   ]
                   }
               ]
           }).show();

       </script>
   </body>
</html>