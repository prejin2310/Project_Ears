<?php
session_start();
$uname=$_POST['uname'];
$pword=$_POST['pword'];
$dep=$_POST['dep'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$loc=$_POST['loc'];
include('link.php');

//if($dep=="FireForce")
//{
$sql = "select * from login where uname='".$uname."' and type='".$dep."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);

if ($records==0)
		{

$sql1 = "INSERT INTO `users` (`did`, `name`, `phone`, `location`, `department`, `status`) VALUES (NULL, '".$name."', '".$phone."', '".$loc."', '".$dep."', '1');";
$result1 = mysqli_query($con,$sql1);
$sel="select * from `users` where `name`='".$name."'and `phone`='".$phone."'and `location`='".$loc."'and `department`='".$dep."'";
$qry3=  mysqli_query($con,$sel);
$row=  mysqli_fetch_array($qry3);
$sql2 = "INSERT INTO `login` (`did`, `uname`, `pword`, `type`) VALUES ('".$row['did']."', '".$uname."', '".$pword."', '".$dep."');";
$result2 = mysqli_query($con,$sql2);
            if($result1 && $result2)
            {
                echo '<script type="text/javascript">alert("Record Succesfully Inserted");window.location=\'reg.php\';</script>';
            }
            else
            {
              echo '<script type="text/javascript">alert("Record Insertion failed");window.location=\'reg.php\';</script>';

            }
		} 
		else 
		{
			
		echo '<script type="text/javascript">alert("Login id Already Exist");window.location=\'reg.php\';</script>';
		
		}
                
//}
//end of FireForce
/*
elseif($dep=="Hospital")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$dep."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			
		header("location: Hospital/index.php");

		}
                
}
//end of Hospital


elseif($dep=="PoliceStation")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$dep."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			
		header("location: Police/index.php");

		}
                
}
//end of Police
elseif($dep=="Ambulance")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$dep."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			
		header("location: Ambulance/index.php");

		}
                
}
//end of Ambulance






*/


?>