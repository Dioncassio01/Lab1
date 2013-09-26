<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	session_start();
	
	$userName = 'Admin';
  	$password = 'Password'; 
	$user = "";
	$pass = "";
	
  	require_once 'HTMLPage.php';
	$pageView = new \view\HTMLPage();
  	
  	require_once 'login.php';
  	
  		
	//echo '<h2>$_POST</h2>';
	//echo '<pre>';
	//var_dump($_POST);
	//echo '</pre>';

	
	//echo '<h2>$_GET</h2>';
	//echo '<pre>';
	//var_dump($_GET);
	//echo '</pre>';

?>
