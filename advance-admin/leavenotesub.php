<?php
extract($_POST);
include("conn/config.php");
?>
	
				<h4>Subjects</h3>
				  				<b>9:00 AM to 10:00 AM</b><br>

								<select name="1">
								<option></option>
								<?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{   
									echo"<option value=$row[0]>$row[1]</option>";
									
								}
								
								
								?>
							
								</select>
								<br>
								<b>10:00 AM to 11:00 AM</b><br>
								
								
								<select name="2">
								<option></option>
							    <?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
								</select>
								<br>
								<b>11:00 AM to 12:00 PM</b><br>
								
								<select name="3">
								<option></option>
							     <?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
								</select>
								<br>
								<b>12:00 PM to 1:00 PM</b><br>
								
								<select name="4">
								<option></option>
							     <?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
								</select>
								<br>
								<b>2:00 PM to 3:00 PM</b><br>
								<select name="5">
								<option></option>
								 <?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
							
								</select>
								<br>
								<b>3:00 PM tO 4:00 PM</b><br>
								<select name="6">
								<option></option>
							    <?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
								</select>
								<br>
								<b>4:00PM to 5:00 PM</b><br>
								<select name="7">
								<option></option>
								<?php
								$query = mysql_query("select * from subject",$connection) or die(mysql_error());
								while ($row = mysql_fetch_array($query))
								{
									echo"<option value=$row[0]>$row[1]</option>";
								}
								
								
								?>
								
								</select>
								
								
									<br>
								<br>
								<input type="submit" value="Submit"></input>
								
								</div>
						    	