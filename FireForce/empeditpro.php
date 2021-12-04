
<?php

if($_POST['submit']=="update")
{
include('link.php');
	//$chkuname = mysqli_query ($con,"select * FROM user_info WHERE uname=".$UserName,$con);
	
	
	
	
	$Name=$_POST['Name'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$mobile=$_POST['mobile'];
	
	$dec=$_POST['des'];
	
	
	// Establish Connection with MYSQL
							
	//$sql = "insert into public(`cat`,`loc`,`name`,`desp`,`add`,`con`,`email`) values('".$cat."','".$loc."','".$name."','".$desp."','".$add."','".$cont."','".$email."')";
	
	$sql ="Update staff SET `Name`='".$Name."',`gender`='".$gender."',`address`='".$address."',`age`='".$age."',`mobile`='".$mobile."',`designation`='".$dec."' where `emp_id`='".$_POST['emp_id']."'";
	
	
	// execute query
	$qry=mysqli_query ($con,$sql);
	
	if($qry)
	{
		header("Location: dview.php?process=update&id=".$_POST['emp_id']);
	}
	else
	{
		header("Location: dview.php?process=error&id=".$_POST['emp_id']);
		
		//echo "$cat"."$loc."."$name"."$desp"."$add"."$con"."$email";
	}
	// Close The Connection
	mysql_close ($con);
}


?>
