<?php

session_start();

if($_POST["name"] != "" ) {
	$name = $_POST["name"];
	$_SESSION['username'] = $name;	
}
header("Location: index.php");