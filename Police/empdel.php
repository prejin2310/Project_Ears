<?php
session_start();
include('link.php');
$id=$_GET['id'];



	$change="DELETE FROM `staff` WHERE `emp_id` =".$id;
$ok=mysqli_query($con,$change);
if($ok)
{
header('Location: view.php?process=sucess');
}
else
{	
header('Location:  view.php?process=failed');
}

?>