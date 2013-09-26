<?php

session_start();

const UserName = 'userName';
const Password = 'password';
const LoggedIn = 'loggedin';

if (isset($_POST[UserName])) {
	$user = $_POST[UserName];
	$pass = $_POST[Password];
	$login = FALSE;

	if ($user == $userName && $pass == $password) {
		$_SESSION[LoggedIn] = TRUE;

		$title = "Laboration 1";
		$body = "<h1>Laborationskod dd22ay</h1>
 				<h2>Admin är Inloggad</h2>
 				<p>Inloggning lyckades</p>
 				<a href='?logout'>Logga ut</a>";

		echo $pageView -> getPage($title, $body);
	} elseif ($user == "") {
		$title = "Laboration 1";
		$body = getform();
		$body .= "<p>Användanamn saknas!</p>";
		echo $pageView -> getPage('Logga in', $body);
	} elseif ($pass == "") {
		$title = "Laboration 1";
		$body = getform();
		$body .= "Lösenord saknas";
		echo $pageView -> getPage($title, $body);
	} elseif ($user == $userName && $pass != $password) {
		$title = "Laboration 1";
		$body = getform();
		$body .= "Felaktig användanamn och/eller lösenord";
		echo $pageView -> getPage($title, $body);

	} else if ($user != $userName && $pass == $password) {
		$title = "Laboration 1";
		$body = getform();
		$body .= "Felaktig användanamn och/eller lösenord";
		echo $pageView -> getPage($title, $body);
	}
} 
elseif (isset ($_GET["logout"])) {
	unset ($_SESSION[LoggedIn]);
	
	$title = "Laboration 1";
	$body = getform();
	$body .= "Du har nu loggat ut";
	echo $pageView->getPage($title, $body);
	
	
}
elseif (isset($_SESSION[LoggedIn]) && $_SESSION[LoggedIn] == TRUE) {

		$title = "Laboration 1";
		$body = "<h1>Laborationskod dd22ay</h1>
 				<h2>Admin är Inloggad</h2>
 				<a href='?logout'>Logga ut</a>";
		echo $pageView->getPage($title, $body);
		
} else {
	$title = 'Logga in';
	$body = getform();

	echo $pageView -> getPage($title, $body);
}

function getform() {
	return "<h1>Laborationskod dd22ay</h1>
	<h2>Ej Inloggad</h2>
	<form action='?login' method='post'>
	<fieldset>
	<legend>Login - Skiv in användarnamn och lösenord</legend>
	<label for='" . UserName . "'>Användarnamn :</label>
	<input type='text' size='20' name='" . UserName . "'id='" . UserName . "' value='" . getuserName() . "'/>
	<label for='" . Password . "'>Lösenord :</label>
	<input type='password' size='20' name='" . Password . "'id='" . Password . "' value/>
	<input type='submit' value='Logga in'/>
  	</fieldset>
	</form>";
}

function getuserName() {
	if (isset($_POST[UserName])) {
		return $_POST[UserName];
	}
}
?>
