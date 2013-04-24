<?php
/**
 * Routes
 *
 * example_routes.php will be loaded in main app/config/routes.php file.
 */
Croogo::hookRoutes('Multitheme');

/**
 * Behavior
 *
 * This plugin's Example behavior will be attached whenever Node model is loaded.
 */
//Croogo::hookBehavior('Node', 'Example.Example', array());

/**
 * Component
 *
 * This plugin's Example component will be loaded in ALL controllers.
 */
Croogo::hookComponent('*', 'Multitheme.Multitheme');

/**
 * Helper
 *
 * This plugin's Example helper will be loaded via NodesController.
 */
//Croogo::hookHelper('Nodes', 'Example.Example');

/**
 * Admin menu (navigation)
 */
CroogoNav::add('settings.children.multitheme', array(
	'title' => 'Multitheme Rules',
	'url' => array(
		'admin' => true,
		'plugin' => 'multitheme',
		'controller' => 'multirules',
		'action' => 'admin_index',
	),
));

