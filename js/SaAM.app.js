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
		north: {			// Main top menu
			spacing_open:			6,
			closable:				false
		},
		west: {				// Left panel
			initClosed:				false
		},
		south: {			// Messages
			minSize:				100,
			maxSize:				200,
			spacing_open:			8,
			closable:				true,
			resizable:				true,
			initClosed:				true
		}
	});
	// LEFT PANEL LAYOUT
	$("body > .ui-layout-west").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			2,
			resizable:				true,
			closable:				false
		},
		north: {			// Menu arbo
			minSize:				25,
			spacing_open:			0,
			resizable:				false
		},
		south: {			// My trucs
			minSize:				"60%",
			resizable:				false
		}
	});
	// CENTER CONTAINER LAYOUT
	$("body > .ui-layout-center").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			1,
			resizable:				false,
			closable:				false
		},
		north: {			// Projects
			minSize:				25,
			spacing_open:			0
		}
	});
	// CENTER INNER LAYOUT
	$("body > .ui-layout-center > .ui-layout-center").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			3,
			spacing_closed:			15,
			resizable:				true,
			closable:				true
		},
		north: {			// Departments
			minSize:				24,
			spacing_closed:			10,
			spacing_open:			2,
			resizable:				false,
			closable:				false
		},
		west: {				// Inner left view
			size:					"30%",
			minSize:				"15%",
			maxSize:				"45%"
		},
		south: {			// Inner bottom view
			minSize:				100,
			maxSize:				"50%"
		}
	});
	// CENTER INNER RIGHT LAYOUT
	$("body > .ui-layout-center > .ui-layout-center > .ui-layout-center").layout({
		defaults: {
			fxName:					"none",
			spacing_open:			3,
			spacing_closed:			15,
			resizable:				true,
			closable:				true
		},
		north: {			// Inner Top view
			minSize:				180,
			maxSize:				"50%"
		}
	});
});