<?php
session_start();
include ("db.php");
$pagename="Edit Product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include('detectlogin.php');
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//create a $SQL variable and populate it with a SQL statement that retrieves product details
$SQL="select prodId, prodName, prodPicNameSmall,prodDescripShort,prodPrice,prodQuantity from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200>";
echo "</a>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5></p>"; //display product name as contained in the array
echo "<p>".$arrayp['prodDescripShort']."</p>";
echo "<pre>Current Price ".$arrayp['prodPrice']."        New Price :<input type=number name=nprice> </pre>";
echo "<pre>Current Stock ".$arrayp['prodQuantity']."            New Stock :<input type=number name=nstock></pre>";
echo "<p></p>";
echo "</td>";
echo "</tr>";
}
echo "</table>";

include("footfile.html"); //include head layout
echo "</body>";
?>