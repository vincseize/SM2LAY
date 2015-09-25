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
	// SaAM LAYOUT
	$('body').layout({
		north: {					// Main top menu
			spacing_open:			6
		},
		defaults: {					// body outer view
			fxName:					"none",
			resizable:				false,
			spacing_closed:			10,
			slidable:				false,
			closable:				false
		},
		south: {					// Messages
			minSize:				100,
			maxSize:				200,
			spacing_open:			8,
			closable:				true,
			resizable:				true,
			initClosed:				true
		}
	});
	// BODY OUTER LAYOUT
	$("#body_outer").layout({
		north: {					// Projects tabs
			minSize:				25,
			spacing_open:			0
		},
		defaults: {					// Body inner view
			fxName:					"none",
			minSize:				25,
			spacing_open:			2,
			resizable:				false,
			closable:				false
		}
	});
	// BODY INNER LAYOUT
	$("#body_inner").layout({
		north: {					// Departments
			minSize:				24,
			spacing_open:			2
		},
		defaults: {					// Main outer view
			fxName:					"none",
			spacing_open:			3,
			spacing_closed:			15,
			resizable:				false,
			closable:				false
		}
	});
	// MAIN OUTER LAYOUT
	$("#main_outer").layout({
		defaults: {					// Main inner view
			fxName:					"none",
			spacing_open:			8,
			spacing_closed:			15,
			resizable:				false,
			closable:				true
		},
		west: {						// Navigation panel
			minSize:				200
		},
		east: {						// Admin panel
			minSize:				200
		}
	});
	// NAV PANEL LAYOUT (left panel)
	$('#panel_nav').layout({
		defaults: {					// Quick nav (arbo, tree)
			fxName:					"none",
			spacing_open:			1,
			resizable:				true,
			closable:				false
		},
		south: {					// My items
			minSize:				"50%"
		}
	});
	// ADMIN PANEL LAYOUT (right panel)
	$('#panel_admin').layout({
		defaults: {					// Admin buttons
			fxName:					"none",
			spacing_open:			2,
			resizable:				false,
			closable:				false
		},
		north: {					// Calendar widget
			minSize:				200
		}
	});
});