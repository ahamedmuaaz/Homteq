<?php
session_start();
$pagename="Add Product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form method=post action=addproduct_conf.php>";
echo "<pre>*Product Name       <input type=text name=name></pre>";
echo "<pre>*Small Picture Name <input type=text name=spicname></pre>";
echo "<pre>*Large Picture Name <input type=text name=lpicname></pre>";
echo "<pre>*Short Description  <input type=text name=sdes></pre>";
echo "<pre>*Long Description   <input type=text name=ldes></pre>";
echo "<pre>*Price              <input type=text name=price></pre>";
echo "<pre>Initial Quantity    <input type=text name=quantity></pre>";
echo "<pre><input type=submit value=AddProduct>            <input type=reset value=clear></pre>";

echo"</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>