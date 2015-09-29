// SaAM.saam.js
'use strict';

/**
 * SaAM APPLICATION DECLARATION & DEPENDENCIES
 */
var saam = angular.module('saam', ['ui.tree']);

saam.constant('VERSION', '2.0.0');

/**
 * ENABLE POST-BOOTSTRAP PROVIDING ("lazy-load" technique)
 */
saam.config(function($controllerProvider, $provide, $compileProvider) {
	// Keeping older references.
	saam._controller = saam.controller;
	saam._service	 = saam.service;
	saam._factory	 = saam.factory;
	saam._value		 = saam.value;
	saam._directive	 = saam.directive;

	// Overriding providers for post-bootstrap loading
	saam.controller = function( name, constructor ) {		// Provider-based controller.
		$controllerProvider.register( name, constructor );
		console.log('Post-bootstrap controller registered: "'+name+'"');
		return( this );
	};
	saam.service = function( name, constructor ) {			// Provider-based service.
		$provide.service( name, constructor );
		console.log('Post-bootstrap service registered: "'+name+'"');
		return( this );
	};
	saam.factory = function( name, factory ) {				// Provider-based factory.
		$provide.factory( name, factory );
		console.log('Post-bootstrap factory registered: "'+name+'"');
		return( this );
	};
	saam.value = function( name, value ) {					// Provider-based value.
		$provide.value( name, value );
		console.log('Post-bootstrap value registered: "'+name+'"');
		return( this );
	};
	saam.directive = function( name, factory ) {			// Provider-based directive.
		$compileProvider.directive( name, factory );
		console.log('Post-bootstrap directive registered: "'+name+'"');
		return( this );
	};
	// Same thing possible with "filter" and "$filterProvider"
});

/**
 * LAYOUT FACTORY
 */
saam.factory('layoutsList', function(){
	return {
		layouts: [
			'./layouts/2-zones.php',
			'./layouts/3-zones.php',
			'./layouts/4-zones.php',
			'./layouts/5-zones.php'
		]
	};
});
/**
 * MODULES FACTORY
 */
saam.factory('modulesList', function(){
	return {
		modules: {
			'home': [
				'./modules/home/home.php'
			],
			'menus' : [
				'./modules/menus/main_menu.php',
				'./modules/menus/departments.php',
				'./modules/menus/submenu_top.php'
			],
			'nav' : [
				'./modules/nav/quick_nav.php',
				'./modules/nav/shortcuts.php',
				'./modules/nav/messages.php'
			],
			'project': [
				'./modules/project/min_infos.php'
			]
		}
	};
});



/**
 * SERVICE de gestion de l'interface (layouts & modules)
 */
saam.service('saamUI', function(layoutsList, modulesList){

	var currentUI = {
		layout: 0,
		modules: {
			north: modulesList.modules.project[0],
			south: modulesList.modules.menus[2],
			center: modulesList.modules.home[0],
			east: null,
			west: modulesList.modules.nav[2]
		}
	};

	return {
		currentUI: currentUI,
		getCurrentLayout: getCurrentLayout,
		setCurrentLayout: setCurrentLayout
	};

	function getCurrentLayout() {
		return currentUI.layout;
	}

	function setCurrentLayout(layout) {
		currentUI.layout = layout;
	}

});

/**
 * INNER LAYOUT CONTROLLER
 */
saam.controller('innerLayoutCtrl', function($scope, saamUI){
	$scope.zones = saamUI.currentUI.modules;
});