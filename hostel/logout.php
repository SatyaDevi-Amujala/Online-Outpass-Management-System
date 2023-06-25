<?php
//============================================================================================
session_start();//strating a session
//============================================================================================
if (isset($_SESSION['student'])) //checking session array has student key
{
	$a=$_SESSION['student'];
	session_destroy(); //destroying session
	unset($_SESSION['student']); //deleting student key in session array
	header('location:login.html'); //moving to login page
}
elseif(isset($_SESSION['security']))//checking session array has security key
{
	$a=$_SESSION['security'];
	session_destroy();
	unset($_SESSION['security']);
	header('location:login.html');
}
elseif (isset($_SESSION['admin']))//checking session array has admin key
{
	$a=$_SESSION['admin'];
	session_destroy();
	unset($_SESSION['admin']);
	header('location:login.html');
}
else
 {
	header('location:login.html');
}
//============================================================================================
?>