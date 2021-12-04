<?php
include('link.php');
	
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$add=$_POST['add'];
	$gender=$_POST['Gender'];
	$pnum=$_POST['pnum'];
	$des=$_POST['desi'];
	
	
	// Establish Connection with MYSQL
							
	$sql = "insert into staff(Name,age,address,gender,mobile,designation) values('".$name."','".$age."','".$add."','".$gender."','".$pnum."','".$des."')";
	// execute query
	$qry=mysqli_query ($con,$sql);
	
	if($qry)
	{
		header('Location: staff.php?process=sucess');
	}
	else
	{
		header('Location: staff.php?process=failed');
	}
	// Close The Connection
	
?>