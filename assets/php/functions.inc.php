<?php 


function show_page($page_name, $page_title="Default Page title here")
{
	include 'header.php';
	include "views/$page_name.php";
	include 'footer.php';
	return;
}


function the_stylesheets()
{
	$css_files = array(
		'style.css'
	);

	foreach ($css_files as $file) {
		$stylesheet = '/assets/css/' . $file;
		echo "<link rel='stylesheet' href='$stylesheet' type='text/css' />";
	}
	
}


function the_scripts()
{
	$js_files = array(
		'jquery-2.1.1.js',
		'script.js'
	);

	foreach ($js_files as $file) {
		$script = '/assets/js/' . $file;
		echo "<script type='text/javascript' src='$script'></script>";
	}
}
