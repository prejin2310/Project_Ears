<?php
session_start();
include('link.php');
$id=$_GET['id'];


	$change="UPDATE `login` SET `pword` = '".$_GET['pass']."' WHERE `did` = '".$_SESSION['did']."'";
       
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