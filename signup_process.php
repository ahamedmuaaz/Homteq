<?php
session_start();
include('db.php');
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$post=$_POST['post'];
$tel=$_POST['tel'];
$email=$_POST['emailadd'];
$pass=$_POST['pass'];
$confrpass=$_POST['confrpass'];




if(!(empty($fname)||empty($lname)||empty($address)||empty($post)||empty($tel)||empty($email)||empty($pass)||empty($confrpass))){
	 if($pass==$confrpass){
		 
		 if(preg_match("/@/",$email)){
	       
		   $sql1="INSERT INTO `users`(`userFName`, `userLName`, `userAddress`, `userPostCode`, `userTellNo`, `userEmail`, `userPassword`) VALUES ('$fname','$lname','$address','$post','$tel','$email','$pass')";
		   $exeSqlstmt=mysqli_query($conn, $sql1);
		   if(mysqli_errno($conn)==0){
			   echo "<p><b>You are sucessfully Registered</b></p>";
			   echo "<p>To Continue, Please <a href=login.php>Login</a><p>";
			   
		   }
		   else{
			   if(mysqli_errno($conn)==1062){
				   
				   echo "<p>The Entered Email is already Registered</p>";
				   echo "<p>Please <a href=signup.php>Sign Up</a><p>";
			   }
			    if(mysqli_errno($conn)==1064){
				   echo "<p>Filled form contails invalid characters</p>";
				   echo "<p>Please <a href=signup.php>Sign Up</a><p>";
			   }
			   
		   }
         }
         else{
	       echo "Incorrect Email ID";
         }
	
    
   
	 }
	 else{
		 echo "<p>Passwords Missmatch</p>";
	 }
}
else{
	echo "<p>fill all mandatory fields</p>";
}


include("footfile.html"); //include head layout
echo "</body>";
?>