<?php
include('link.php');
	
extract($_POST);

	
							
	$sql = "insert into op(`patient`,`age`,`gender`,`doop`,`phone`,`add`,`troble`,`did`) values('".$pat."','".$age."','".$gender."','".$opdate."','".$phone."','".$add."','".$troble."','".$doc."')";
	
	
	// execute query
	$qry=mysqli_query ($con,$sql);
	
	
	if($qry)
	{
		header('Location: op.php?process=sucess');
	}
	else
	{
		header('Location: op.php?process=failed');
	}
	// Close The Connection
	mysql_close ($con);
	
	

?>