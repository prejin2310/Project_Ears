<?php
session_start();
include('link.php');
$id=$_GET['id'];



		
	$change="DELETE FROM `users` WHERE `did` =".$id;
        $change1="DELETE FROM `login` WHERE `did` =".$id;
$ok=mysqli_query($con,$change);
$ok1=mysqli_query($con,$change1);
if($ok && $ok1)
{
header('Location: viewuser.php?process=sucess');
}
else
{	
header('Location:  viewuser.php?process=failed');
}
	?>