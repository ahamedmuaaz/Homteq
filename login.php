<?php
session_start();
$pagename="Log In"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
echo "<form action=login_process.php method=post>";
echo "<table style='border: 0px'>";
echo "<tr>";
echo "<td style='border: 0px'>Email</td>";
echo "<td style='border: 0px'><input type=text name=email></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border: 0px'>Password</td>";
echo "<td style='border: 0px'><input type=password name=pass></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border: 0px'><input type=submit value=Login></td>";
echo "<td style='border: 0px'><input type=reset  value=clear></td>";
echo "</tr>";

echo"</table>";
echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>