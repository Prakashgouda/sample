<?php	
$valid="false";
$sms="an unknown error occured";
	if(strlen($_POST["fn"])<=0)
		$sms="First name required";
		else if(strlen($_POST["ln"])<=0)
		$sms="Last name required";
		else if(strlen($_POST["em"])<=0)
		$sms="e-Mail required";
		else
		{
		$Em=$_POST["em"];
		if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$Em))
				$sms="This e-Mail address is not valid";		
	    else if(strlen($_POST["un"])<=0)
		$sms="userName required";
	   else
	   {
		$userN=array();
		$userN[0]="Prakash123";
		$userN[1]="kumar001";
		$userN[2]="Git442";
		$userN[3]="phpmyadmin";
	
		if(in_array($_POST["un"],$userN))
		$sms="This User already exist..Please choose another.";
		else if(strlen($_POST["un"])<8)
			$sms="Username must be 8 chararacter.";
		else if(strlen($_POST["bd"])<=0)
			$sms="date required";
		else{
			$valid="Registration Successful";
			$sms="";
	}
	}
    }
		echo "$valid || $sms";
	?>