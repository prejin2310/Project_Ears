<?php
session_start();
include('link.php');
$id=$_GET['id'];


	$change="UPDATE `report` SET `Hospital` = '".$_SESSION['did']."' WHERE `case_id` = '".$_GET['id']."'";
       
$ok=mysqli_query($con,$change);

if($ok)
{
header('Location: monitor.php?process=sucess');
}
else
{	
header('Location:  monitor.php?process=failed');
}
	?>