<?php

session_start();

if(isset($_SESSION['username']) && $_SESSION['username'] != "") {
	echo "Hello " . $_SESSION['username'];
	echo '<br><a href="exit.php">Выйти</a>';
} else {
	include "about.php";
}
