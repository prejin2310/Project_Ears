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
				<form id="form1" name="form1" method="post" action="oppro.php">
				  <table width="463" border="0" align="center">
				    <tr>
				      <td width="156">Patient Name</td>
				      <td width="176"><label for="pat"></label>
			          <input type="text" name="pat" id="pat" /></td>
			        </tr>
				    <tr>
				      <td>Age</td>
				      <td><label for="age"></label>
			          <input type="text" name="age" id="age" /></td>
			        </tr>
				    <tr>
				      <td>Gender</td>
				      <td><p>
				        <label>
				          <input type="radio" name="gender" value="male" id="gender_0" />
				          Male</label>
				        
				        <label>
				          <input type="radio" name="gender" value="female" id="gender_1" />
				          Female</label>
				        <br />
			          </p></td>
			        </tr>
				    <tr>
				      <td>Date of OP</td>
				      <td><label for="opdate"></label>
			          <input name="opdate" type="text" id="opdate" value="<?php echo date('d/m/Y'); ?>" readonly="readonly" /></td>
			        </tr>
				    <tr>
				      <td>Phone</td>
				      <td><label for="phone"></label>
			          <input type="text" name="phone" id="phone" /></td>
			        </tr>
				    <tr>
				      <td>Address</td>
				      <td><label for="add"></label>
			          <textarea name="add" id="add" cols="45" rows="5"></textarea></td>
			        </tr>
				    <tr>
				      <td>Disease</td>
				      <td><label for="troble"></label>
			          <input type="text" name="troble" id="troble" /></td>
			        </tr>
				    <tr>
				      <td>Doctor</td>
				      <td><select name="doc">
				        <option value="0">Select Doctor</option>
				        <?php
				
				include('link.php');
                            $a="select * from doc";
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
echo "<option value=\"".$abc['did']."\">".$abc['name']." (".$abc['spl'].") </option>"; 
								}
				
				?>
			          </select></td>
			        </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td><input type="submit" name="button" id="button" value="Save" /></td>
			        </tr>
			      </table>
		      </form>
				<p align="justify">&nbsp;</p>
              <p>&nbsp;</p>
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