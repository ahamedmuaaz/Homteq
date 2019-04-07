<?php
session_start();
include("db.php");
$pagename="Order Confirmation"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
$datetime=date('Y-m-d H:i:s');
$userId=$_SESSION['userId'];
$total=0;
$subtotal=0;

$sql="INSERT INTO `orders`(`userId`,`orderDateTime`) VALUES('$userId','$datetime')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_errno($conn)==0){
	$sql="select max(orderNo) as orderId from orders where userId='$userId'";
	$exesql=mysqli_query($conn,$sql);
	$arrayord=mysqli_fetch_array($exesql);
	$orderNo=$arrayord['orderId'];
	echo "<p><b>Successfull Order</b>-ORDER REFFERENCE NO: ".$orderNo."</p>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "<th>Quantity</th>";
	echo "<th>Subtotal</th>";
	echo "</tr>";
	foreach($_SESSION['basket'] as $key_id =>$key_quantity){
		echo "<tr>";
		$sql="select * from product where prodId='$key_id'";
		$exesql=mysqli_query($conn,$sql);
		$prodarr=mysqli_fetch_array($exesql);
		
		$subtotal=$prodarr['prodPrice']*$key_quantity;
		$total=$total+$subtotal;
		
		$sql="INSERT INTO `order_line`(`orderNo`, `prodId`, `quantityOrdered`, `subTotal`) VALUES ('$orderNo','$key_id','$key_quantity','$subtotal')";
		$exesql=mysqli_query($conn,$sql);
		
		echo "<td>".$prodarr['prodName']."</td>";
		echo "<td>".$prodarr['prodPrice']."</td>";
		echo "<td>".$key_quantity."</td>";
	
		echo "<td>".$subtotal."</td>";
		echo "</tr>";
		
		
	}
	echo "<tr>";
	echo "<td align='right' colspan=3 ><b>Total</b></td>";
	echo "<td><b>".$total."</b></td>";
	echo "</tr>";
	echo "</table>";
	
	$sql="update orders set orderTotal=$total where orderNo=$orderNo";
	$exesql=mysqli_query($conn,$sql);
	
	echo "<p>To logout and leave the system :<a href=logout.php>Logout</a></p>";
}
else{
	echo "<p>There has been an error while placing the order, please try again</p>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>