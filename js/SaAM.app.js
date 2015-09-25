// SaAM.app.js
'use strict';

/**
 * SaAM APPLICATION DECLARATION
 */
var saam = angular.module('saam', []);

/**
 * LAYOUT DEFINITION
 */
$(function(){
	// MAIN LAYOUT
	$('body').layout({
		defaults: {
			fxName:					"none",
			resizable:				false,
			spacing_closed:			10,
			slidable:				false
		},
		north: {
			spacing_open:			6,
			closable:				false
		},
		south: {
			minSize:				100,
			maxSize:				200,
			spacing_open:			8,
			closable:				true,
			resizable:				true,
			initClosed:				true
		},
		west: {
			initClosed:				false
		}
	});
	// RIGHT PANEL LAYOUT
	$("body > .ui-layout-west").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			2,
			resizable:				true,
			closable:				false
		},
		north: {
			minSize:				25,
			spacing_open:			0,
			resizable:				false
		},
		south: {
			minSize:				"60%",
			resizable:				false
		}
	});
	// CENTER CONTAINER LAYOUT
	$("body > .ui-layout-center").layout({
		defaults: {
			spacing_open:			1,
			resizable:				false,
			closable:				false
		},
		north: {
			minSize:				25,
			spacing_open:			0
		}
	});
	// CENTER INNER LAYOUT
	$("body > .ui-layout-center > .ui-layout-center").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			2,
			spacing_closed:			20,
			resizable:				true,
			closable:				true
		},
		north: {
			minSize:				20,
			spacing_closed:			10,
			resizable:				false
		},
		west: {
			minSize:				"30%"
		},
		south: {
			minSize:				100
		}
	});
});