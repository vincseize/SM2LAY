var App = angular.module('drag-and-drop', ['ngDragDrop']);

App.controller('oneCtrl', function($scope, $timeout) {
  $scope.images = [{'thumb': '1.png'},{'thumb': '2.png'},{'thumb': '3.png'},{'thumb': '4.png'}]
  $scope.list1 = [];
  angular.forEach($scope.images, function(val, key) {
    $scope.list1.push({});
  });
  $scope.list2 = [
    { 'title': 'KnockoutJS', 'drag': true },
    { 'title': 'EmberJS', 'drag': true },
    { 'title': 'BackboneJS', 'drag': true },
    { 'title': 'AngularJS', 'drag': true }
  ];

  $scope.startCallback = function(event, ui, title) {
    console.log('You started draggin: ' + title.title);
    $scope.draggedTitle = title.title;
  };

  $scope.stopCallback = function(event, ui) {
    console.log('Why did you stop draggin me?');
  };

  $scope.dragCallback = function(event, ui) {
    console.log('hey, look I`m flying');
  };

  $scope.dropCallback = function(event, ui) {
    console.log('hey, you dumped me :-(' , $scope.draggedTitle);
  };

  $scope.overCallback = function(event, ui) {
    console.log('Look, I`m over you');
  };

  $scope.outCallback = function(event, ui) {
    console.log('I`m not, hehe');
  };
});