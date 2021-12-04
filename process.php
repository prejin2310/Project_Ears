<?php
session_start();
$UserName=$_POST['uname'];
$Password=$_POST['pword'];
$type=$_POST['type'];
include('link.php');

if($type=="Admin")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$type."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
		$_SESSION['user']='Admin';
		header("location: admin/index.php");

		}
                
}
//end of admin
elseif($type=="FireForce")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$type."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
		$_SESSION['did']=$row['1'];	
		header("location: FireForce/index.php");

		}
                
}
//end of FireForce

elseif($type=="Hospital")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$type."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			$_SESSION['did']=$row['1'];	
		header("location: Hospital/index.php");

		}
                
}
//end of Hospital


elseif($type=="Police")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$type."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			$_SESSION['did']=$row['1'];	
		header("location: Police/index.php");

		}
                
}
//end of Police
elseif($type=="Ambulance")
{
$sql = "select * from login where uname='".$UserName."' and pword='".$Password."' and type='".$type."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	if ($records==0)
		{

		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
		} 
		else 
		{
			$_SESSION['did']=$row['1'];
		header("location: Ambulance/index.php");

		}
                
}
//end of Ambulance









?>