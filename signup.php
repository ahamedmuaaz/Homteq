<?php
session_start();
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form method=post action=signup_process.php>";
echo "<pre>*First Name       <input type=text name=fname></pre>";
echo "<pre>*Last  Name       <input type=text name=lname></pre>";
echo "<pre>*Address          <input type=text name=address></pre>";
echo "<pre>*Postcode         <input type=text name=post></pre>";
echo "<pre>*Tel No           <input type=number name=tel></pre>";
echo "<pre>*Email Address    <input type=text name=emailadd></pre>";
echo "<pre>Password          <input type=password name=pass></pre>";
echo "<pre>Confirm Password  <input type=password name=confrpass></pre>";
echo "<pre><input type=submit value=signup>            <input type=reset value=clear></pre>";

echo"</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>