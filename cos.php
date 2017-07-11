<?php
@mysql_connect('localhost','dawaki1','muhammadu');
@mysql_select_db('gsu');
echo"<center><table WIDTH=80% height=70% ><tr><td WIDTH=100% height=100% border=2 valign=top>".
   "<img src=1.png width=100% height=67%>"."<BR><br><br>".
    "<font color=#CC0000 face='ARIAL' size=4>*Select your first semester courses<br>*Minimum total of 18 credit unit<br>*Click save to continue<br><br></font></td></tr></table>";
    $name=base64_decode($_GET['n']); $msg=base64_decode($_GET['m']);
	$regno=base64_decode($_GET['r']); 
   echo $msg;
   echo "<font color=#003366 face='Times New Roman' size=3><p align=right> <b>$regno | $name</b></p></font>";
   echo "<center><table WIDTH=80% height=80% border=2 bordercolor=#003366><tr><td WIDTH=100% height=100% border=2 valign=top>".
        "<br><br><fieldset><legend><font color=#003366 face='Cooper Black' size=3>FIRST SEMESTER COURSES</font></legend>".
        "<center>
		<table WIDTH=80% height=150%  cellpadding=3 cellspacing=3><BR><BR>".
		
	    "<form action=cos.php method=POST>"."<input type=hidden name=ck value=ck>".
		"<tr>
		<td valign=top width=50%><font color=#003366 face='Cooper Black' size=2><i>COURSES</i></td>
		<td valign=top width=30%><font color=#003366 face='Cooper Black' size=2><i>CREDIT UNIT</i></td>
		<td valign=top><font color=#003366 face='Cooper Black' size=2><i>TICK</i></td></tr>".
		
		"<tr><td valign=top width=50%>COSC201</td> <td valign=top width=30%>3</td><td valign=top> <input type=checkbox value=3></td> </tr>".
		"<tr><td valign=top width=25%>COSC203</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>MATH201</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>MATH205</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>MATH207</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>MATH209</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>GENS201</td> <td valign=top>2</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>GENS203</td> <td valign=top>2</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>STAT201</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		
		"</fieldset></table><br>".
	    "<p align=RIGHT><input type=reset value=CLEAR> <input type=submit value=SAVE></P> 
	    </form></table><br><br>";
	echo "<center><table WIDTH=80% height=80% border=2 bordercolor=#003366><tr><td WIDTH=100% height=100% border=2 valign=top>".
        "<br><br><fieldset><legend><font color=#003366 face='Cooper Black' size=3>SECOND SEMESTER COURSES</font></legend>".
        "<center>
		<table WIDTH=80% height=150%  cellpadding=3 cellspacing=3><BR><BR>".
		
	    "<form action=cos.php method=POST>"."<input type=hidden name=ck2 value=ck2>".
		"<tr>
		<td valign=top width=50%><font color=#003366 face='Cooper Black' size=2><i>COURSES</i></td>
		<td valign=top width=30%><font color=#003366 face='Cooper Black' size=2><i>CREDIT UNIT</i></td>
		<td valign=top><font color=#003366 face='Cooper Black' size=2><i>TICK</i></td></tr>".
		
		"<tr><td valign=top width=50%>COSC202</td> <td valign=top width=30%>3</td><td valign=top> <input type=checkbox value=3></td> </tr>".
		"<tr><td valign=top width=25%>COSC204</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>COSC206</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>COSC208</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>MATH208</td> <td valign=top>3</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>GENS202</td> <td valign=top>2</td><td valign=top> <input type=checkbox value=3></td></tr>".
		"<tr><td valign=top width=25%>GENS204</td> <td valign=top>2</td><td valign=top> <input type=checkbox value=3></td></tr>".
				
		"</fieldset></table><br>".
	    "<p align=RIGHT><input type=reset value=CLEAR> <input type=submit value=SUBMIT></P> 
	</form></table>";
	
			
?>


