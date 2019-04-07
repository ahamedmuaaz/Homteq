<?php
session_start();
$pagename="Smart Basket"; //Create and populate a variable called $pagename
include("db.php");

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include('detectlogin.php');
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

if(isset($_POST['delid'])){
	$delprodid=$_POST['delid'];
	 unset($_SESSION['basket'][$delprodid]);
	echo "<p>1 item deleted</p>";
}


if(isset($_POST['h_prodid'])){
$newprodid=$_POST['h_prodid'];
$reququantity=$_POST['quantity'];
$_SESSION['basket'][$newprodid]=$reququantity;
echo "<p>1 item added</p>";
}
else{
	echo "<p>Current basket unchanged</p>";
}

echo "<table>";
echo "<tr>";
echo "<th>ProductName</th>";
echo "<th>Price</th>";
echo "<th>Selected Quantity</th>";
echo "<th>Subtotal</th>";
echo "<th></th>";
echo "</tr>";

$total=0;
if(isset($_SESSION['basket'])){
//echo "ID of selectedProduct is ".$newprodid."<br>";
//echo "Quantity Of Selected Product ".$reququantity."<br>";




foreach($_SESSION['basket'] as $key_id=>$key_quantity){
$subtotal=0;
$sqlstmt="select prodId, prodName, prodPicNameLarge,prodDescripLong,prodPrice,prodQuantity from Product where prodId=".$key_id;
$exeSqlstmt=mysqli_query($conn, $sqlstmt)or die(mysqli_error($conn));
$details=mysqli_fetch_array($exeSqlstmt);
echo "<tr>";
echo "<td>".$details['prodName']."</td>";
echo "<td>".$details['prodPrice']."</td>";
echo "<td>".$key_quantity."</td>";
$subtotal=$key_quantity*$details['prodPrice'];
$total=$total+$subtotal;
echo "<td>".$subtotal."</td>";
echo "<form method=post action=basket.php>";
echo "<input type=hidden name=delid value=".$key_id.">";
echo"<td> <input type='submit' value='Remove'></td>";
echo "</form>";
echo "</tr>";

 }
 }
else{
	echo "<p>Current Basket is Empty</p>";
}
echo "<tr><td colspan=3><b>Total</b></td><td><b>".$total."</b></td><td></td></tr>";
echo "</table>";


echo "<p><a href='clearbasket.php'>CLEAR BASKET</a></p>";
if(isset($_SESSION['userId'])){
	echo"<p>To Finalise <a href=checkout.php>Checkout</a></p>";
}
else{
echo "<p>New Homteq Customers :<a href='signup.php'>Sign Up</a></p>";
echo "<p>Returning Homteq Customers :<a href='login.php'>Login</a></p>";}
include("footfile.html"); //include head layout
echo "</body>";
?>