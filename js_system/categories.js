/*jslint vars: true, plusplus: true, devel: true, nomen: true, indent: 4, maxerr: 50 */ 
/*global define, $, jQuery, swal, usuarios, funciones, FB */
/*jslint browser: true*/
var categories = {
	
///////////////// ******** ----							 add							------ ************ //////////////////
//////// Load the view to new local
	// The parameters that can receive are:
		// div -> Div where the content is loaded
		
	add : function($objet){
		"use strict";
		console.log('==========> $objet add', $objet);
		
		$.ajax({
			data : $objet,
			url : 'views/add_categorie.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done add', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! view_new', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	},
	
///////////////// ******** ----						END add							------ ************ //////////////////

///////////////// ******** ----						list_categories					------ ************ //////////////////
//////// Check the categories and load a view
	// The parameters that can receive are:
		// div -> Div where the content is loaded
		// order -> Order SQL
		// limit -> Limit of rows
		
	list_categories : function($objet){
		"use strict";
		console.log('==========> $objet list_categories', $objet);
		
		var view = (!$objet.view) ? 'list_categories' : $objet.view;
		
		$.ajax({
			data : $objet,
			url : 'views/'+view+'.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done list_categories', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! list_categories', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	},
	
///////////////// ******** ----						END list_categories				------ ************ //////////////////

///////////////// ******** ----						details							------ ************ //////////////////
//////// Load a details view
	// The parameters that can receive are:
		
		
	details : function($objet){
		"use strict";
		console.log('==========> $objet details', $objet);
		
		$.ajax({
			data : $objet,
			url : 'views/categories_details.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done details', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! details', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	}
	
///////////////// ******** ----						END details						------ ************ //////////////////

};