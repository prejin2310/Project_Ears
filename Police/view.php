<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Candy Template</title>
<meta name="keywords" content="blue candy template, free html css website, blue menu bar, dark gray background" />
<meta name="description" content="Blue Candy is a free CSS Template from templatemo.com that can be used for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_main_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	
		<div id="site_title">
            <a href="#" target="_parent"><img src="images/ears.png" width="301" /></a>
        </div> <!-- end of site_title -->
        
        <div id="header_right">
        
        	<div id="twitter">
            	<a href="#">Follow us on Twitter</a>
            </div>
            
            <div class="cleaner"></div>
            
            <h1>&nbsp;</h1>
          <p>&nbsp;</p>
        </div>
        
    	<div class="cleaner"></div>
        
    </div>
    
    <div id="templatemo_menu">
   	  <?php
				
				include('menu.php');
				?>
    </div> <!-- end of templatemo_menu -->
    
    <div id="content_wrapper">
    	
        <div id="content_left">
        
        	<div class="content_box">
			  <h2>Welcome Admin</h2>
			  <p>
			    <?php
if(isset($_POST['emp']))
{
	if(($_POST['emp'])=='Search')
	{
	header('location: dview.php?id='.$_POST['emp_id']);
	}
	
	}

?>
			  </p>
              <?php
if(!isset($_POST['desi']))
{

?>
              <table width="505" border="1" align="center" cellspacing="0">
                <tr>
                  <th align="left" width="108"> <div align="center">Empid</div></th>
                  <th width="143" align="left"> <div align="center">Name</div></th>
                  <th width="143" align="left"> <div align="center">Designation</div></th>
                  <th width="143" align="left"> <div align="center">Contact</div></th>
                  <th width="143" align="left"> <div align="center">view more</div></th>
                </tr>
                <?php
							include('link.php');
                            $a="select * from staff";
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['emp_id']."</td>
	  <td>".$abc['Name']."</td>
	  <td>".$abc['designation']."</td>
	   <td>".$abc['mobile']."</td>
	  <td align=right><div align=center><a href='dview.php?id=".$abc['emp_id']."'>Click Here</a></div></td>
	  <td align=right><div align=center><a href='empdel.php?id=".$abc['emp_id']."'><img src='del.png'/></a></div></td>";
								
								
								
								echo "</tr>";
								
							}
                            
                            
                            ?>
              </table>
              <?php
}
if(isset($_POST['desi']))
{
	if(($_POST['desi'])=='Search')
	{

?>
              <table width="505" border="1" align="center" cellspacing="0">
                <tr>
                  <th align="left" width="108"> <div align="center">Empid</div></th>
                  <th width="143" align="left"> <div align="center">Name</div></th>
                  <th width="143" align="left"> <div align="center">Designation</div></th>
                  <th width="143" align="left"> <div align="center">Contact</div></th>
                  <th width="143" align="left"> <div align="center">view more</div></th>
                </tr>
                <?php
							include('link.php');
                            $a="select * from staff `designation`='".$_POST['des']."'";
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['emp_id']."</td>
	  <td>".$abc['Name']."</td>
	  <td>".$abc['designation']."</td>
	   <td>".$abc['mobile']."</td>
	  <td align=right><div align=center><a href='dview.php?id=".$abc['emp_id']."'>Click Here</a></div></td>
	  <td align=right><div align=center><a href='empdel.php?id=".$abc['emp_id']."'><img src='del.png'/></a></div></td>";
								
								
								
								echo "</tr>";
								
							}
                            
                            
                            ?>
              </table>
              <?php
}
	
	}


?>
              <p></p>
			  <div class="cleaner"></div>
            </div>
        </div>
    	
        <?php
		include('side.php');
		?>
    	<div class="cleaner"></div>
    </div>
    
    <div id="templatemo_footer">
      <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
    <div id="templatemo_copyright">
    
         <?php
		include('footer.php');
		?>
    </div>
    
    <div class="cleaner"></div>
</div>
</div>
</body>
</html>