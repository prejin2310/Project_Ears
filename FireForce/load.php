<table width="652" border="1" align="center" cellspacing="0">
                  <tr>
                    <th align="left" width="24%"> <div>INCIDENT</div></th>
<th align="left" width="24%"> <div>PLACE</div></th>
                    <th width="10%" align="left"> <div align="center">AMBULANCE</div></th><th width="10%" align="left"> <div align="center">POLICE</div></th>
              <th width="10%" align="left"> <div align="center">FIRE FORCE</div></th><th width="10%" align="left"> <div align="center">HOSPITAL</div></th>
                  </tr>
                  <?php
                  session_start();
			include('link.php');
			$did=$_SESSION['did'];
                        $qry="select * from users where did='".$did."'";
                        $sql=  mysqli_query($con,$qry);
                        $row=  mysqli_fetch_array($sql);
                        
            $a="select * from report where `location`='".$row['location']."' and `fireforce` > '0'  ORDER BY `case_id` DESC";
			
                            		
                            $ab=mysqli_query($con,$a);
                            while($abc=mysqli_fetch_array($ab))
							{
								echo "<tr>";
								
			if($abc['ambu']=="0")
                        {
                            $sta1="<img width=25 height=25 src=images/minus.png>";
                        }
                        elseif($abc['ambu']=="1")
                        {
                             $sta1="<img width=25 height=25 src=images/waiting.gif>";
                        }
                        else
                        {
                            $sta1="<a href=\"detail.php?id=".$abc['ambu']."\"><img width=25 height=25 src=images/ok.png></a>";
                        }
                        
                        
                        if($abc['police']=="0")
                        {
                            $sta2="<img width=25 height=25 src=images/minus.png>";
                        }
                        elseif($abc['police']=="1")
                        {
                           $sta2="<img width=25 height=25 src=images/waiting.gif>";
                        }
                        else
                        {
                            $sta2="<a href=\"detail.php?id=".$abc['police']."\"><img width=25 height=25 src=images/ok.png></a>";
                        }
                        
                        if($abc['fireforce']=="0")
                        {
                            $sta3="<img width=25 height=25 src=images/minus.png>";
                        }
                        elseif($abc['fireforce']=="1")
                        {
                            $sta3="<a href=\"update.php?id=".$abc['0']."\"><img width=25 height=25 src=life.png></a>";
                        }
                        elseif($abc['fireforce']==$did)
                        {
                            $sta3="<img width=25 height=25 src=life1.png>";
                        }
                        else
                        {
                            $sta3="<a href=\"detail.php?id=".$abc['fireforce']."\"><img width=25 height=25 src=images/ok.png></a>";
                        }
                        
                        if($abc['hospital']=="0")
                        {
                            $sta4="<img width=25 height=25 src=images/minus.png>";
                        }
                        elseif($abc['hospital']=="1")
                        {
                            $sta4="<img width=25 height=25 src=images/waiting.gif>";
                        }
                        else
                        {
                            $sta4="<a href=\"detail.php?id=".$abc['hospital']."\"><img width=25 height=25 src=images/ok.png></a>";
                        }
                                                                
                                                                
echo " <td><a href=\"incdetail.php?id=".$abc['case_id']."\">".$abc['incidence']."</a></td>
    <td>".$abc['location']."</td>
	 <td align=\"center\">".$sta1."</td>
<td align=\"center\">".$sta2."</td>
	<td align=\"center\">".$sta3."</td>
              <td align=\"center\">".$sta4."</td>";
								
								
								
								echo "</tr>";
								
							}
                            
                            
                            ?>
                </table>