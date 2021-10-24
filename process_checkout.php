<?php
	require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['pc']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['phone']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		if(!preg_match("/^[a-zA-Z' -]*$/",$_POST['name']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		if(!preg_match('/^[0-9]{6}$/',$_POST['pc']) )
		{	
		 	{
			$msg.="<li>Postal code must be of 6 Digit...";
			}
		}
		if(!preg_match("/^[a-zA-Z'-]*$/",$_POST['city']))
		{
			$msg.="<li>City name must be in String Format...";
		}
		if(!preg_match("/^[a-zA-Z'-]*$/",$_POST['state']))
		{
			$msg.="<li>State name must be in String Format...";
		}
		if(!preg_match('/^[0-9]{10}$/',$_POST['phone']) )
		{	
		 	{
				$msg.="<li>Phone no must be of 10 Digit...";
			}
		}



          if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$name=$_POST['name'];
			$pc=$_POST['pc'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$phone=$_POST['phone'];
			
			
			
			header("location:payment_details.php");
			
			
			
		}
	}

		
	// else
	// 	{
			
	// 	}
	
?>