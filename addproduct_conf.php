<?php
session_start();
include('db.php');
$pagename="New Product Confirmation"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
$name=$_POST['name'];
$spicname=$_POST['spicname'];
$lpicname=$_POST['lpicname'];
$sdes=$_POST['sdes'];
$ldes=$_POST['ldes'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];





if(!(empty($name)||empty($spicname)||empty($lpicname)||empty($sdes)||empty($ldes)||empty($price)||empty($quantity))){
	 
		    $sql1="INSERT INTO `product`( `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES ('$name','$spicname','$lpicname','$sdes','$ldes',".$price.",".$quantity.")";
		    $exeSqlstmt=mysqli_query($conn, $sql1);
		 
	      
		   
		   if(mysqli_errno($conn)==0){
			   echo "<p>The item has been added successfully</p>";
			   
			   echo "<p>The Name of small picture ".$spicname."</p>";
			   echo "<p>The Name of large picture ".$lpicname."</p>";
			   echo "<p>The Short Description ".$sdes."</p>"; 
			   echo "<p>The long Description ".$ldes."</p>";
               echo "<p>The Price".$price."</p>"; 
               echo "<p>The Initial Quantity".$sdes."</p>"; 			   
			   
		   }
		   else{
			   if(mysqli_errno($conn)==1062){
				   
				   echo "<p>The Product Name is already Registered</p>";
				   echo "<p>Please <a href=signup.php>Sign Up</a><p>";
			   }
			    if(mysqli_errno($conn)==1064){
				   echo "<p>Filled form contails invalid characters</p>";
				   echo "<p>Please <a href=signup.php>Sign Up</a><p>";
			   }
			   
		   }
         
         
	
    
   
	
}
else{
	echo "<p>fill all mandatory fields</p>";
}


include("footfile.html"); //include head layout
echo "</body>";
?>