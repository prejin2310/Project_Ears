<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Candy Template</title>
<meta name="keywords" content="blue candy template, free html css website, blue menu bar, dark gray background" />
<meta name="description" content="Blue Candy is a free CSS Template from templatemo.com that can be used for any purpose." />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
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
                                <p align="RIGHT"><a href="monitor.php">Monitor Case</a></p>
                                <form action="repprocess.php" method="get" name="form1" id="form1">
	              <table width="505" border="0" align="center" cellspacing="0">
	                
                    <tr>
	                  <th width="187" height="38" align="left" valign="top"> <div align="left">INCIDENT</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextfield1">
	                    <input type="text" name="incident" id="incident" />
	                    <span class="textfieldRequiredMsg"><br />
	                    A value is required.</span></span></div></th>
	                  <th width="50" align="left"></th>
                    </tr>
	                <tr>
	                  <th width="187" height="64" align="left" valign="top"> <div align="left">Description</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextarea1">
	                    <textarea name="description2" rows="4" id="description"></textarea>
	                    <span class="textareaRequiredMsg"><br />
	                    A value is required.</span></span></div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Service Needed</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <p>
	                      <label>
	                        <input type="checkbox" name="FireForce" value="1" id="FireForce" />
	                        FireForce</label>
	                      <br />
	                      <label>
	                        <input type="checkbox" name="Hospital" value="1" id="Hospital" />
	                        Hospital</label>
	                      <br />
	                      <label>
	                        <input type="checkbox" name="Ambulance" value="1" id="Ambulance" />
	                        Ambulance</label>
	                      <br />
	                      <label>
	                        <input type="checkbox" name="Police" value="1" id="Police" />
	                        Police</label>
	                      <br />
                        </p>
	                  </div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Location</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="spryselect1">
<select name="loc" id="loc">
  <option value="0">--Select--</option>
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
<span class="selectInvalidMsg"><br />
Please select a valid Location.</span><span class="selectRequiredMsg">Please select an item.</span></span></div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
	                  <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Landmark</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextfield2">
	                    <input type="text" name="landmark" id="landmark" />
	                    <span class="textfieldRequiredMsg"><br />
	                    A value is required.</span></span></div></th>
	                  <th width="50" align="left"></th>
                    </tr>
                           <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Reported mob number</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextfield3">
                        <input type="text" name="repnum" id="repnum" />
                        <span class="textfieldRequiredMsg"><br />
A value is required.</span><span class="textfieldInvalidFormatMsg"><br />
Invalid format.</span></span></div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                           <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Contact Number</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextfield4">
                        <input type="text" name="connum" id="connum" />
                        <span class="textfieldRequiredMsg"><br />
A value is required.</span><span class="textfieldInvalidFormatMsg"><br />
Invalid format.</span></span></div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Contact Person</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <span id="sprytextfield5">
	                    <input type="text" name="conperson" id="conperson" />
	                    <span class="textfieldRequiredMsg"><br />
	                    A value is required.</span></span></div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                          
                          <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Blood Group Needed</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
	                    <input type="text" name="bood" id="bood" />
	                    </div></th>
	                  <th width="50" align="left">&nbsp;</th>
                    </tr>
                          <tr>
	                  <th width="187" height="37" align="left" valign="top"> <div align="left">Date of Reporting</div></th>
	                  <th width="262" align="left" valign="top"> <div align="left">
	                    <label for="catname"></label>
                            <input type="text" name="dor" id="dor" value="<?php echo date('d/m/Y'); ?>" readonly/>
	                    </div></th>
	                  <th width="50" align="left"><input type="submit" name="button" id="button" value="ADD" /></th>
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"0"});
</script>
</body>
</html>