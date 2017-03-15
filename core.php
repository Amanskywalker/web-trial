<?php
// includes to common variable and functions
//ini_set('display_errors','0');	//to be set active when site goes live
ini_set('date.timezone','Asia/Kolkata');
// core file must be include in all pages
date_default_timezone_set('Asia/Kolkata');

// for debuging
	$debug=true;

// redirectors 
$current_file=@$_SERVER['SCRIPT_NAME'];
$http_referer=@$_SERVER['HTTP_REFERER'];

?>
