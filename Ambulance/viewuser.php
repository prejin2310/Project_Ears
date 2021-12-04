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
                                <p align="RIGHT"><a href="reg.php">Add New User</a></p>
	            
        
                                <form id="form2" name="form2" method="get" action="viewuser.php">
                <label for="search"></label>
               
                
                <select name="search" id="search">
<option value="0">--Select Location--</option>
<option value="Thycadu">Thycadu</option>
<option value="Sasthamangalam">Sasthamangalam</option>
<option value="Vattiyurkavu">Vattiyurkavu</option>
<option value="Kowdiar">Kowdiar</option>
<option value="Peroorkada">Peroorkada</option>
<option value="Kudappanakunnu">Kudappanakunnu</option>
<option value="Pattom">Pattom</option>
<option value="Ulloor">Ulloor</option>
<option value="Cheruvaikal">Cheruvaikal</option>
<option value="Attipra">Attipra</option>
<option value="Kadakampalli">Kadakampalli</option>
<option value="Pettah">Pettah</option>
<option value="Vanchiyur">Vanchiyur</option>
<option value="Muttathara">Muttathara</option>
<option value="Manacaud">Manacaud</option>
<option value="Thiruvallam">Thiruvallam</option>
<option value="Nemom">Nemom</option>
<option value="Thirumala">Thirumala</option>
</select>
                <input type="submit" name="button2" id="button2" value="Submit" />
                <?php
                if(isset($_GET['search']))
				{
					?>
                <a href="viewuser.php">show all</a>
                <?php
				}
				?>
              </form>
              <p>&nbsp;</p>
              <table width="652" border="1" align="center" cellspacing="0">
                  <tr>
                    <th align="left" width="24%"> <div align="center">Department</div></th>
                    <th width="24%" align="left"> <div align="center">Specific Name</div></th><th width="24%" align="left"> <div align="center">Location</div></th>
              <th width="24%" align="left"> <div align="center">Phone</div></th>
                  </tr>
                  <?php
			include('link.php');
			if(!isset($_GET['search']))				
			{
            $a="select * from `users`";
			}
			else
			{
	$a="select * from `users` where `location`='".$_GET['search']."'";
				
				}
                            		
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
								
echo "<td>".$abc['department']."</td>
	  <td>".$abc['name']."</td>
	 <td>".$abc['location']."</td>
              <td>".$abc['phone']."</td>
	  
	 
	  <td align=right><div align=center><a href='docdel.php?id=".$abc['did']."'><img src='del.png'/></a></div></td>";
								
								
								
								echo "</tr>";
								
							}
                            
                            
                            ?>
                </table>
   
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
        
        
        
        
        
        
        
        
        
        
        
        
        