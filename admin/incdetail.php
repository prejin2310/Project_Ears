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
				session_start();
                                include('link.php');
				include('menu.php');
                                $sql="select * from report where `case_id`='".$_GET['id']."'";
                                $qry=  mysqli_query($con,$sql);
                                $row= mysqli_fetch_array($qry);
				?>
    </div> <!-- end of templatemo_menu -->
    
    <div id="content_wrapper">
    	
        <div id="content_left">
        
        	<div class="content_box">
				<h2>Welcome Admin</h2>
                                <p align="RIGHT"><a href="monitor.php">Monitor Case</a></p>
                                <form action="repprocess.php" method="get" name="form1" id="form1">
	              <table width="505" border="0" align="center" cellspacing="0">
	                
                    <tr>
	                  <th width="187" height="38" align="left"> <div align="left">INCIDENT</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                    <?php echo $row[1]; ?>
	                  </div></th>
	                  <th width="91" align="left"></th>
                    </tr>
	                <tr>
	                  <th width="187" height="64" align="left"> <div align="left">Description</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
                       <?php echo $row[2]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
                          
                          <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Location</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                    <?php echo $row[3]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
	                  <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Landmark</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                     <?php echo $row[4]; ?>
	                  </div></th>
	                  <th width="91" align="left"></th>
                    </tr>
                           <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Reported mob number</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                     <?php echo $row[5]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
                           <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Contact Number</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                     <?php echo $row[6]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Contact Person</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                     <?php echo $row[7]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
                          
                          <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Blood Group Needed</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
	                     <?php echo $row[8]; ?>
	                    </div></th>
	                  <th width="91" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left"> <div align="left">Date of Reported</div></th>
	                  <th width="221" align="left"> <div align="left">
	                    <label for="catname"></label>
                             <?php echo $row[9]; ?>
	                    </div></th>
	                  
                    </tr>
                  </table>
	              <p>&nbsp;</p>
              </form>
                          <!--
              <form id="form2" name="form2" method="get" action="doctor.php">
                <label for="search"></label>
                <input type="text" placeholder="doctor's id" name="search" id="search" />
                <input type="submit" name="button2" id="button2" value="Submit" />
                <?php
                if(isset($_GET['search']))
				{
					?>
                <a href="doctor.php">show all</a>
                <?php
				}
				?>
              </form>
              <p>&nbsp;</p>
              <table width="652" border="1" align="center" cellspacing="0">
                  <tr>
                    <th align="left" width="63"> <div align="center">Doc id</div></th>
                    <th width="176" align="left"> <div align="center">Name</div></th><th width="399" align="left"> <div align="center">Specialist</div></th>
                  </tr>
                  <?php
			include('link.php');
			if(!isset($_GET['search']))				
			{
            $a="select * from doc";
			}
			else
			{
	$a="select * from doc where did=".$_GET['search'];
				
				}
							
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['did']."</td>
	  <td>".$abc['name']."</td>
	 <td>".$abc['spl']."</td>
	  
	 
	  <td align=right><div align=center><a href='docdel.php?id=".$abc['did']."'><img src='del.png'/></a></div></td>";
								
								
								
								echo "</tr>";
								
							}
                            
                            
                            ?>
                </table>-->
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p></p>
                <h2 align="justify">&nbsp;</h2>
              <p>&nbsp;</p>
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