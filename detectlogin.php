<?php
if(isset($_SESSION['userId'])){
	if($_SESSION['userType']=="A"){
	echo "<p align='right'>".$_SESSION['userFName']." ".$_SESSION['userLName']."| Adminstrator No: ".$_SESSION['userId']."</p>";
	}
	if($_SESSION['userType']=="C"){
	echo "<p align='right'>".$_SESSION['userFName']." ".$_SESSION['userLName']."| Customer No: ".$_SESSION['userId']."</p>";
	}
}
?>