<?php
require('includes/config.php');
		//$delbook="";
			//$delbook=$_GET['b_id'];
            $q="select * from book";
		   
              


			if(mysqli_query($conn,$q))
				  {

				  	             $id = $_GET['sid'];
                               echo "$id";
			                   $query = "DELETE FROM book WHERE b_id = '$id'";
		  



                             if(mysqli_query($conn,$query))
								{
                                      echo"Delete successful";
                                      header("location:all_book.php");

								}  
								else{
					    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
									}
								
								

            

				  }
				  else{
					    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
									}
		
			
?>