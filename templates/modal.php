<!DOCTYPE html>
<html ng-app="drag-and-drop">
  <head lang="en">
    <meta charset="utf-8">
    <title>Drag & Drop: Multiple listsr</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="angular-dragdrop.min.js"></script>
    <script src="app.js"></script>
    <style>
      .thumbnail { height: 280px !important; }
      .btn-droppable { width: 180px; height: 30px; padding-left: 4px; }
      .btn-draggable { width: 160px; }
      .emage { height: 215px; }
    </style>
  </head>
  <body>
   <div ng-controller="oneCtrl">
      <div class='contentWrapper ng-cloak'>
        <div class='content'>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3" style='margin-left:10px;' ng-repeat="image in images">
                <div class="thumbnail">
                  <div class="caption">
                    <div class='emage'><img ng-src="https://raw.github.com/codef0rmer/angular-dragdrop/master/demo/assets/img/{{image.thumb}}"/></div>
                    <p><div class="btn btn-droppable" data-drop="true" ng-model='list1' jqyoui-droppable="{index: {{$index}}, onDrop:'dropCallback',onOver: 'overCallback', onOut: 'outCallback'}">
                      <div class="btn btn-info btn-draggable" ng-show="list1[$index].title" data-drag="{{list1[$index].drag}}" data-jqyoui-options="{revert: 'invalid'}" ng-model="list1" jqyoui-draggable="{index: {{$index}},placeholder:true,animate:true}">{{list1[$index].title}}</div>
                    </div></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <div class="container form-inline" style="text-align: center;">
          <div class="btn btn-droppable" ng-repeat="item in list2" data-drop="true" ng-model='list2' jqyoui-droppable="{index: {{$index}}}">
            <div class="btn btn-info btn-draggable" data-drag="{{item.drag}}" data-jqyoui-options="{revert: 'invalid'}" ng-model="list2" jqyoui-draggable="{index: {{$index}},placeholder:true,animate:true, onStart:'startCallback(item, $index)', onStop: 'stopCallback', onDrag: 'dragCallback'}" ng-hide="!item.title">{{item.title}}</div>
          </div>
        </div>
      </div>
    </div>
  </body>  
</html>