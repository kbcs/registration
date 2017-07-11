<?php ob_start();
@mysql_connect('localhost','dawaki1','muhammadu');
@mysql_select_db('gsu');
echo"<center><table WIDTH=80% height=150% ><tr><td WIDTH=100% height=100% border=2 valign=top>".
   "<img src=1.png width=100% height=30%>"."<BR><br><br>".
   "<font color=#CC0000 face='ARIAL' size=4>*Kindly update your personal data<br>*Click save to continue<br></font>";
		
		$name=base64_decode($_GET['n']);
		$regno=base64_decode($_GET['r']);
		
		$result=@mysql_query("SELECT * FROM biodata WHERE regno='$regno'");
		
		$level=@mysql_result($result,0,'level');$age=@mysql_result($result,0,'age');
		$email=@mysql_result($result,0,'email');$phone=@mysql_result($result,0,'phone');	
		$gender=@mysql_result($result,0,'gender');$pass=@mysql_result($result,0,'pass');
		$address=@mysql_result($result,0,'address');					  
		
   $ck=$_POST['ck'];
    if($ck){	$result=@mysql_query("SELECT * FROM biodata WHERE regno='$regno'");
				$name=$_POST['name']; $level=$_POST['level']; $regno=$_POST['regno'];$age=$_POST['age'];
			    $email=$_POST['email'];$phone=$_POST['phone'];$gender=$_POST['gender'];$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];$address=$_POST['address'];
				
			if ($regno and $pass and $cpass and $name and $level and $age and $email and $phone and $gender and  $address)
							{
				if(strlen($regno)==14){
				
				  if($pass==$cpass){
				
										 
				 @mysql_query("UPDATE biodata SET name='$name',level='$level',age='$age',email='$email',phone='$phone',
				      gender='$gender',pass='$pass',address='$address' WHERE regno='$regno'");
					 
					            header("location:cos.php?r=$regno and n=$name");
						 	
								    }
				    else{ echo"<font color=red face=arial><center>Passwords didn't March!!</center></font>";}
					
							           }
				else{ echo"<font color=red face='ARIAL' size=3><center>Invalid Registration number!!</center><br>";}			
			                
							}
							
			else{ echo"<font color=red face=arial><center>All fields must be filled in to update properly!!<br></center></font>";}
			
			}
      
   
    echo "<font color=#003366 face='Times New Roman' size=3><p align=right> <b>$regno | $name</b></p></font>".
		"<fieldset><legend><font color=#003366 face='Cooper Black' size=3>PERSONAL DATA</font></legend>". 
		"<form action=update.php method=POST>"."<input type=hidden name=ck value=ck>".
		"<br>NAME <input type=text name=name value='$name'><br><br>".
		"LEVEL <select name=level><option value='$level'>$level</option><option value=100>100</option><option value=200>200</option><option value=300>300</option><option value=400>400</option></select><br><br>".
		"REGISTRATION NUMBER <input type=text name=regno readonly value=$regno><br><br>".
		"AGE <input type=text name=age value=$age><br><br>".
		"EMAIL <input type=text name=email value='$email'><br><br>".
		"PHONE NUMBER <input type=text name=phone value='$phone'><br><br>".
		"GENDER <select name=gender><option>$gender</option><option>Male</option><option>Female</option></select><br><br>".
		"PASSWORD <input type=password name=pass value='$pass'>"." CONFIRM PASSWORD <input type=password name=cpass><br><br>".
		"ADDRESS <textarea name=address>$address</textarea><br><br></fieldset>".
	    "<p align=RIGHT><input type=submit value=SAVE></P></td></tr></table> 
	</form>";
	
   
			
?>

