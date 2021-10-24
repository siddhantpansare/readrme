<?php
require('includes/config.php');
$delcat="";
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
		{
			$delcat=$_POST['del'];
		
			$query="DELETE FROM category where cat_nm =$delcat";
			//mysql_select_db(readrme_ebook_store_db);
			//$msg[]="Please full fill all requirement";
		}
		
		// if(!empty($msg))
		// {
		// 	echo '<b>Error:-</b><br>';
			
		// 	foreach($msg as $k)
		// 	{
		// 		echo '<li>'.$k;
		// 	}
		// }
		else
		{
		
			$delcat=$_POST['del'];
		
			$query="DELETE FROM category where cat_nm =$delcat";
			mysql_select_db(readrme_ebook_store_db);
		
			// $delcat=$_POST['del'];
			
			// $query="delete from category where cat_nm ='$delcat' ";
		
			mysqli_query($conn,$query) ;//or die("can't Execute...");
			
			
			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	