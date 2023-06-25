<?php
//============================================================================
include "connect.php";//importing file
session_start(); //starting a session
//============================================================================
$username=$_POST['username']; //input from login page
$password=$_POST['password']; //input from login page
//============================================================================
$query="SELECT `logintype` FROM `login` WHERE `username` = '$username' AND `password`='$password'"; //query to check username and password
$sql=mysqli_query($connect,$query); //running query and storing in $sql
$row= mysqli_fetch_array($sql); //parsing data in $sql
//============================================================================
if($sql){ //if $sql query runned successfully

			if ($row['logintype']=="security") { //checking for usertype

				$_SESSION['security']=$username; //storing username in session array 
				echo "<script>window.location='./security.php';</script>";//moving window to specified page

			}
			elseif ($row['logintype']=="admin") {//checking for usertype

				$_SESSION['admin']=$username;//storing username in session array
				echo "<script>window.location='./requests.php';</script>";//moving window to specified page

			}elseif ($row['logintype']=="student") {//checking for usertype
				$_SESSION['student']=$username;//storing username in session array => [ { student : $username} ]
				echo "<script>window.location='./outform.php';</script>";//moving window to specified page

			}else {

				echo '<script>alert(" Details Wrong")</script>';//alerting popup
				echo "<script>window.location='./login.html';</script>";

			}

}else{
	echo '<script>alert(" Details Wrong")</script>';
	echo "<script>window.location='./login.html';</script>";
}
//============================================================================
?>