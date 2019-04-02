<?php 
session_start();

	require_once ('config.php');



		$username=$_POST['remail'];

		$rpassword=$_POST['rpassword'];
		$fullname=$_POST['rname'];


		$connection=mysqli_connect($db_host,$db_username,$db_password,$db_name);

			if(!$connection)
				{
					echo 'Conenction Failed! Database credentials are incorrect';
					die();
					exit(1);

				}
			else
				{
					$query='INSERT INTO `users`( `name`, `email`, `password`) VALUES ("'.$fullname.'","'.$username.'","'.$rpassword.'")';
				
					if(mysqli_query($connection,$query))
					{
						echo '<script> window.location.href = "login.php?status=1";</script>';
					}
					else
					echo '<script> window.location.href = "login.php?status=0";</script>';

				}



 ?>