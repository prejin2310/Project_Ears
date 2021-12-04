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
			  <p>&nbsp;</p>
			  <form action="his.php" method="get" name="form1" id="form1">
			  <table width="448" border="0">
                <tr>
                    <td width="141"><label for="date"></label>
                    <input type="text" name="date" id="date" placeholder="dd/mm/yyyy" /></td>
                    <td><input type="submit" name="find" id="find" value="Search" />
                    <input type="hidden" name="ser" id="ser" value="ser" /></td>
                </tr>
                </table>
               
              </form>
              
              <?php
	if(isset($_GET['find']))
	{
		if($_GET['find']=='Search')
		{
	?>
              <table width="679" border="1" align="center" cellspacing="0">
                <tr>
                  <th align="left" width="62"> <div align="center">Name</div></th>
                  <th width="33" align="left"> <div align="center">Age</div></th>
                  <th width="83" align="left"> <div align="center">op date</div></th>
                  <th width="90" align="left"> <div align="center">Contact</div></th>
                  <th width="159" align="left"> <div align="center">Address</div></th>
                  <th width="106" align="left"> <div align="center">Disease</div></th><th width="116" align="left"> <div align="center">Doctor</div></th>
                </tr>
                <?php
							include('link.php');
							
							$date=$_GET['date'];
							
			
			
  $a="select * from op WHERE `doop`='".$date."'";
						
							$ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['patient']."</td>
	  <td>".$abc['age']."</td>
	  <td>".$abc['doop']."</td>
	  
       <td>".$abc['phone']."</td>
        <td>".$abc['add']."</td>
         <td>".$abc['troble']."</td>
          <td>".$abc['did']."</td>";
								
								
								
								echo "</tr>";
								
							}
                            
		}
                            ?>
              </table>
              <?php
	
			}
			
			
			if(!isset($_GET['find']))
			{
			
				?>
              <table width="679" border="1" align="center" cellspacing="0">
                <tr>
                  <th align="left" width="62"> <div align="center">Name</div></th>
                  <th width="33" align="left"> <div align="center">Age</div></th>
                  <th width="83" align="left"> <div align="center">op date</div></th>
                  <th width="90" align="left"> <div align="center">Contact</div></th>
                  <th width="159" align="left"> <div align="center">Address</div></th>
                  <th width="106" align="left"> <div align="center">Disease</div></th><th width="116" align="left"> <div align="center">Doctor</div></th>
                </tr>
                <?php
							include('link.php');
							
							
							
			
			
  $a="select * from op";
						
							$ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['patient']."</td>
	  <td>".$abc['age']."</td>
	  <td>".$abc['doop']."</td>
	  
       <td>".$abc['phone']."</td>
        <td>".$abc['add']."</td>
         <td>".$abc['troble']."</td>
          <td>";
          					
				$x="select * from doc where did=".$abc['did'];
		$xy=mysqli_query($con,$x);
            $xyz=mysqli_fetch_array($xy);				
					echo $xyz['name']." (".$xyz['spl'].")";
          
          
          echo "</td>";
						
								echo "</tr>";
								
							}
                            
                            
                            ?>
              </table>
              <?php
				
			
		}
	
	
	?>
              <p></p>
              <div class="cleaner">	</div>
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