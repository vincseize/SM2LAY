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
