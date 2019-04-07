<?php
if(isset($_SESSION['userId'])){
echo "<p align='right'>".$_SESSION['userFName']." ".$_SESSION['userLName']."</p>";
}
?>