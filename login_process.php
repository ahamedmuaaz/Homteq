<?php
session_start();
include('db.php');

$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
$email=$_POST['email'];
$pass=$_POST['pass'];

if(!(empty($email)||empty($pass))){
	$sql="select * from users where userEmail='$email'";
	$exe=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$userarr=mysqli_fetch_array($exe);
	
	if($userarr['userEmail']==$email){
		if($userarr['userPassword']==$pass){
			echo "<p>Login Successfull!</p>";
			$_SESSION['userId']=$userarr['userId'];
			$_SESSION['userType']=$userarr['userType'];
			$_SESSION['userFName']=$userarr['userFName'];
			$_SESSION['userLName']=$userarr['userLName'];
			echo "<p>Hello ".$_SESSION['userFName']." ".$_SESSION['userLName']."</p>";
			if($_SESSION['userType']=="C"){
			echo "<p>You have Sucessfully Logged in as Homteq Customer</p>";
			echo "<p>Continue Shopping <a href=index.php>Homteq</a></p>";
			echo "<p>View Your <a href=basket.php>Smart Basket</a></p>";
			}
		}
		else{
			echo "<p>Password not recognised, login again</p>";
		}
	}
	else{
		echo "<p>Email Not Recognized, Login again</p>";
	}
	//echo "<p>".$userarr['userFName']."</p>";
}
else{
	echo "<p>please fill all fileds</p>";
}
//echo "<p>".$email."</p>";
//echo "<p>".$pass."</p>";

include("footfile.html"); //include head layout
echo "</body>";
?>