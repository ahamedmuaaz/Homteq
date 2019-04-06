<?php
session_start();
$pagename="Smart Basket"; //Create and populate a variable called $pagename
include("db.php");

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page


if(isset($_POST['h_prodid'])){
$newprodid=$_POST['h_prodid'];
$reququantity=$_POST['quantity'];
$_SESSION['basket'][$newprodid]=$reququantity;

//echo "ID of selectedProduct is ".$newprodid."<br>";
//echo "Quantity Of Selected Product ".$reququantity."<br>";
echo "<p>1 item added";}
else{
	echo "Current basket unchanged";
}

include("footfile.html"); //include head layout
echo "</body>";
?>