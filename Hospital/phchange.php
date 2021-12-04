<?php
session_start();
include('link.php');
$id=$_GET['id'];


	$change="UPDATE `users` SET `phone` = '".$_GET['phone']."' WHERE `did` = '".$_SESSION['did']."'";
       
$ok=mysqli_query($con,$change);

if($ok)
{
header('Location: profile.php?process=sucess');
}
else
{	
header('Location:  profile.php?process=failed');
}
	?>