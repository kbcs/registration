<?php ob_start();
@mysql_connect('localhost','dawaki1','muhammadu');
@mysql_select_db('gsu');
echo"<center><table WIDTH=80% height=150% ><tr><td WIDTH=100% height=100% border=2 valign=top>".
   "<img src=1.png width=100% height=30%>"."<BR><br><br>".
   "<font color=#CC0000 face='ARIAL' size=4>*Kindly fill in your personal data<br>*Click save to continue<br><br></font>";
	$msg="<font color=green face=arial><center>personal data saved successefully!!</center></font><BR><BR>";
      
   $ck=$_POST['ck'];
    if($ck){	$result=@mysql_query("SELECT * FROM biodata WHERE regno='$regno'");
				$name=$_POST['name']; $level=$_POST['level']; $regno=$_POST['regno'];$age=$_POST['age'];
			    $email=$_POST['email'];$phone=$_POST['phone'];$gender=$_POST['gender'];$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];$address=$_POST['address'];
				
				$eregno=base64_encode($regno);
				$ename=base64_encode($name);
				$emsg=base64_encode($msg);

				
				
			if ($regno and $pass and $cpass and $name)
							{
				if(strlen($regno)==14){
				
				  if($pass==$cpass){
				
					
					 if(@mysql_num_rows(@result)<1){
				 
				 @mysql_query("INSERT INTO biodata VALUES('$name','$level','$regno','$age','$email','$phone','$gender', 
			    '$pass','$address')");
					            header("location:cos.php?r=$eregno&n=$ename&m=$emsg");                
												   }
					 else{ echo"<font color=red face=arial><center>$regno Already exist!!<br>*Go back to login page and enter your details</center><br></font>";}							
				                
								    }
				    else{ echo"<font color=red face=arial><center>Your Passwords didn't March!!</center></font>";}
					
							           }
				else{ echo"<font color=red face='ARIAL' size=3><center>Invalid Registration number!!</center><br>";}			
			                
							}
							
			else{ echo"<font color=red face=arial><center>You must fill in your Registration number,Name and password<br>in order to save your registration !!</center></font>";}
			
			}
      
   
   
   echo"<fieldset><legend><font color=#003366 face='Cooper Black' size=3>PERSONAL DATA</font></legend>".
	 
	    "<form action=bio.php method=POST>"."<input type=hidden name=ck value=ck>".
		"<br>NAME <input type=text name=name autocapitalise='on'><br><br>".
		"LEVEL <select name=level><option>select</option><option value=100>100</option><option value=200>200</option><option value=300>300</option><option value=400>400</option></select><br><br>".
		"REGISTRATION NUMBER <input type=text name=regno><br><br>".
		"AGE <input type=text name=age><br><br>".
		"EMAIL <input type=text name=email><br><br>".
		"PHONE NUMBER <input type=text name=phone><br><br>".
		"GENDER <select name=gender><option>select</option><option>Male</option><option>Female</option></select><br><br>".
		"PASSWORD <input type=password name=pass>"." CONFIRM PASSWORD <input type=password name=cpass><br><br>".
		"ADDRESS <textarea name=address></textarea><br><br></fieldset>".
	    "<p align=RIGHT><input type=reset value=CLEAR><input type=submit value=SAVE></P></td></tr></table> 
	</form>";
	
			
?>