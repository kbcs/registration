<?php ob_start();
@mysql_connect('localhost','dawaki1','muhammadu');
@mysql_select_db('gsu');

echo"<center><table WIDTH=80% height=49% ><tr><td WIDTH=100% height=100% valign=top>".
   "<img src=1.png width=100% height=100%>"."</td></tr></table><br>".
	"<center><font color=#003366 face='Cooper Black' size=5>WELCOME TO GOMBE STATE UNIVERSITY<br>ONLINE REGISTRATION PORTAL</font><BR><BR>".
	"<font color=#CC0000 face='ARIAL' size=4><marquee><i>.......Registration closes on 22nd November 2013.....</i></marquee></font><br><br>";
	
	$ck=$_POST['ck'];
	if($ck){
	$regno=$_POST['regno'];$eregno=base64_encode($regno);
	$pass=$_POST['pass'];
		if(strlen($regno)==14){
	
	        if($regno and $pass){
							
					$result=@mysql_query("SELECT * FROM biodata WHERE regno='$regno' and pass='$pass'");
				if(@mysql_num_rows($result)>0){
				
						$name = @mysql_result($result, 0, 'name');$ename=base64_encode($name);
						
						header("location:update.php?r=$eregno&n=$ename");
									  
											  }
											  
				else{ echo"<font color=red face='ARIAL' size=3>You are a new user! click on register now<br>";}							  
											  
								}
		   else{ echo"<font color=red face='ARIAL' size=3>You must enter your Registration Number and Passsword<br>";}                    

						       }	   
        else{ echo"<font color=red face='ARIAL' size=3>Invalid Registration number!!<br>";}
		
        	}
	
	
	echo "<BR><table WIDTH=75% height=29% border=2 BORDERCOLOR=#003366> <tr><td  width=50% height=100% VALIGN=TOP><fieldset><legend>
	<font color=#003366 face='Cooper Black' size=3>NEW USER</legend></font>
	<font color=#CC0000 face='ARIAL' size=4>*If you are a new user kindly press the button below to get started</font>
	<br><br><BR><form action=login.php method=POST><input type=hidden name=ck value=ck>
	<center><a href=bio.php><input type=button name=rnw value='REGISTER NOW>>>'></a></fieldset></td></center></font>".
	
	
	 "<td  width=50% height=100% VALIGN=TOP ><fieldset><legend>
	<font color=#003366 face='Cooper Black' size=3>EXISTING USER</font></legend>
	<font color=#CC0000 face='ARIAL' size=4>*Enter your registration number and your password to continue<br><br></font>
	<font color=#003366 face='Cooper Black' size=2>REGISTRATION NUMBER <input type=text name=regno value=$regno><br><br>PASSWORD<input type=password name=pass></font>
	<center><input type=submit name=login value=LOGIN></center></font>
	</fieldset></td></tr></form></table>";
	
   
?>
