<?php
include('link.php');
	


	$Name=$_POST['docname'];
	$spl=$_POST['spl'];

	
							
	$sql = "insert into doc(`name`,`spl`) values('".$Name."','".$spl."')";
	
	
	// execute query
	$qry=mysqli_query ($con,$sql);
	
	
	if($qry)
	{
		header('Location: doctor.php?process=sucess');
	}
	else
	{
		header('Location: doctor.php?process=failed');
	}
	// Close The Connection
	mysql_close ($con);
	
	

?>