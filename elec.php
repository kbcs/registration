<?php 
@mysql_connect('localhost','dawaki1','muhammadu');
@mysql_select_db('elecdb');
	echo "<body bgcolor=#ffffcc>".
	"<form action=elec.php method=POST>"."<input type=hidden name=ck value=ck>".
		"NAME <input type=text name=name><br><br>"."PHONE NUMBER <input type=text name=phone><br><br>".
		"EMAIL <input type=text name=email><br><br>".
		"PASSWORD <input type=password name=pass>"." CONFIRM PASSWORD <input type=password name=cpass><br><br>".
		"ADDRESS <textarea name=address></textarea><br><br>".
		"DATE OF BIRTH" ."<input type=text name=dob value=$day><hr>"
		." Day <select name=day><option>select</option>";
    for ($i=1;$i<=31;$i++){echo "<option value=$i>$i</option>";}
		echo "</select>";
		
		$month=array('jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec');
		echo " Montth<select name=month> <option>select</option>";
	
	for($i=0;$i< count($month);$i++){ $mnt=$i+1; echo"<option value=$mnh> $month[$i]</option>";} 
		echo "</select>".
		" Year <select name=year><option>select</option>";
		$cyear=date('Y');
	for($i=1900;$i<=$cyear;$i++){ echo "<option value=$i>$i</option>";}
		echo "</select><BR>";
		echo"<input type=reset value=clear>"." <input type=submit value=sign in size=25>".
	"</form>";
	
			$ck=$_POST['ck'];
    if($ck){
				$name=$_POST['name']; $phone=$_POST['phone']; $email=$_POST['email'];$pass=$_POST['pass'];
			    $cpass=$_POST['cpass'];$address=$_POST['address'];$day=$_POST['day'];$month=$_POST['month'];$year=$_POST['year'];
	   $dob="$day/$mnh/$year";
			if ($name and $phone and $email and $pass and $cpass and $address and $dob )
							{
					
				 mysql_query("INSERT INTO user VALUES('$name','$phone','$email','$pass','$cpass','$address','$dob')");
					 echo"<font color=green face=algerian>REGISTRATION SUCCESSFUL!!</font>";						  
							}
			else{ echo"<font color=red face=algerian>ALL FIELDS ARE REQUIRED!!</font>";}					
			}
	else{ echo"<font color=red face=algerian>YOU CAN'T SUBMIT AN EMPTY FORM!!</font>";}
?>
