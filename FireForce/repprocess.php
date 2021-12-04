<?php
session_start();
$incident=$_GET['incident'];
$description=$_GET['description'];
$loc=$_GET['loc'];
$landmark=$_GET['landmark'];
$repnum=$_GET['repnum'];
$connum=$_GET['connum'];
$conperson=$_GET['conperson'];
$bood=$_GET['bood'];
$dor=$_GET['dor'];

if(isset($_GET['Ambulance'])){$ambulance=$_GET['Ambulance'];}else{$ambulance="0";}
if(isset($_GET['FireForce'])){$fireforce=$_GET['FireForce'];}else{$fireforce="0";}
if(isset($_GET['Hospital'])){$hospital=$_GET['Hospital'];}else{$hospital="0";}
if(isset($_GET['Police'])){$police=$_GET['Police'];}else{$police="0";}

include('link.php');

//if($dep=="FireForce")
//{

$sql1 = "INSERT INTO `report`(`incidence`, `description`, `location`, `landmark`, `in_mob_num`, `cont_numb`, `cont_person`, `blood`, `dor`, `ambu`, `fireforce`, `hospital`, `police`) VALUES ('".$incident."','".$description."','".$loc."','".$landmark."','".$repnum."','".$connum."','".$conperson."','".$bood."','".$dor."','".$ambulance."','".$fireforce."','".$hospital."','".$police."');";
$result1 = mysqli_query($con,$sql1);
//$sel="select * from `users` where `name`='".$name."'and `phone`='".$phone."'and `location`='".$loc."'and `department`='".$dep."'";
//$qry3=  mysqli_query($con,$sel);
//$row=  mysqli_fetch_array($qry3);
//$sql2 = "INSERT INTO `login` (`did`, `uname`, `pword`, `type`) VALUES ('".$row['did']."', '".$uname."', '".$pword."', '".$dep."');";
//$result2 = mysqli_query($con,$sql2);
            if($result1)
            {
                echo '<script type="text/javascript">alert("Record Succesfully Inserted");window.location=\'rep.php\';</script>';
            }
            else
            {
              echo '<script type="text/javascript">alert("Record Insertion failed");window.location=\'rep.php\';</script>';

            }
		

?>