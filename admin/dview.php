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
if(isset ($_GET['process']))

{
	if($_GET['process']=='sucess')
	{
	?>
            </p>
		    <p><font color="#FF0000"><strong><em>Sucessfully added</em></strong></font></p>
            <?php
	}
	elseif($_GET['process']=='failed')
	{
		?>
            <p><font color="#FF0000"><strong><em>Insertion failed</em></strong></font></p>
            <?php 
        
	}
}
	?>
            <?php
							include('link.php');

							$fech="select * from staff where emp_id='".$_GET['id']."'";
							$result = mysqli_query($con,$fech);
							$row = mysqli_fetch_array($result);
							?>
            <form action="empeditpro.php" method="post" name="form1" id="form1">
              <table width="359" border="0" align="center" cellspacing="0">
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Emp id</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <input name="emp_id" type="text" id="emp_id" value="<?php echo $row['emp_id']; ?>" readonly="readonly" />
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Name</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <input type="text" name="Name" id="Name" value="<?php echo $row['Name']; ?>" />
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Gender</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <select name="gender">
                      <?php
		if($row['gender']=="male")
		{
		echo "<option selected=selected>male</option><option>female</option>";		
		}
		elseif($row['gender']=="female")
		{
		echo "<option>male</option><option selected=selected>female</option>";		
		}
				?>
                    </select>
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="39" align="left"> <div align="left">Address</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <textarea name="address" id="address"><?php echo $row['address']; ?></textarea>
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Age</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <input name="age" type="text" id="age" value="<?php echo $row['age']; ?>" />
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Mobile</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <input name="mobile" type="text" id="mobile" value="<?php echo $row['mobile']; ?>" />
                  </div></th>
                </tr>
                <tr>
                  <th width="108" height="26" align="left"> <div align="left">Designation</div></th>
                  <th width="143" align="left"> <div align="left">
                    <label for="catname"></label>
                    <label for="des"></label>
                    <input type="text" name="des" id="des" value="<?php echo $row['designation']; ?>" />
                  </div></th>
                </tr>
                <tr>
                  <th colspan="1" align="right"> <input type="submit" name="submit" id="button" value="update" />
                  </th>
                  <th colspan="2" align="right">&nbsp;</th>
                </tr>
              </table>
            </form>
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