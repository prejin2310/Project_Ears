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
			  <p><a href="view.php">VIEW ALL</a></p>
             <form name="form1" method="post" action="emp_pros.php">
<table width="379" border="0" align="center">
  <tr>
    <td width="96" valign="top">Staff Name</td>
    <td colspan="2" valign="top"><label for="name"></label>
      <input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td valign="top">Age</td>
    <td colspan="2" valign="top"><label for="age"></label>
      <input type="text" name="age" id="age"></td>
  </tr>
  <tr>
    <td valign="top">Address</td>
    <td colspan="2" valign="top"><label for="add"></label>
      <textarea name="add" id="add"></textarea></td>
  </tr>
  <tr>
    <td valign="middle">Gender</td>
    <td colspan="2" valign="top"><table width="200">
      <tr>
        <td><label>
          <input type="radio" name="Gender" value="male" id="Gender_0">
          Male</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="Gender" value="female" id="Gender_1">
          Female</label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">Phone number</td>
    <td colspan="2" valign="top"><label for="pnum"></label>
      <input type="text" name="pnum" id="pnum"></td>
  </tr>
  <tr>
    <td height="26" valign="top">Designation</td>
    <td colspan="2" valign="top"><label for="des"></label>
      <select name="desi">
        <option value="0">Select Designation</option>
        <option>Female Nurse</option>
        <option>Male Nurse</option>
        <option>X-ray Assistent</option>
        <option>Cleaner</option>
         <option>Front Office</option>
        <option>Pharmacist</option>
    </select></td>
  </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td width="56" align="right" valign="top"><label for="pnum"></label></td>
      <td width="141" align="right" valign="top"><input type="submit" name="button2" id="button2" value="Submit" /></td>
    </tr>
</table>

</form>
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