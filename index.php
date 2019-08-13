<?php 


require_once 'vendor/autoload.php';
require_once 'assets/php/functions.inc.php';
require_once 'assets/php/sql.inc.php';
require_once 'assets/php/template_engine.inc.php';


$router = new AltoRouter();


//================ Routes ==================
// show_page function takes the name of "views/{name}.php" and the title of the page

$router->map( 'GET', '/', function()
{
	show_page('home', 'Homepage Title');
});

$router->map( 'GET', '/contact', function()
{
	show_page('contact', 'Contact page title');
});

$router->map( 'GET', '/posts/[i:id]', function($id)
{
	show_page('single', 'Post page title');
});


$match = $router->match();


// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	not_found();
}

function not_found()
{
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
	require 'views/404.php';
}