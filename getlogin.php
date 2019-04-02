<?php 
session_start();

	require_once ('config.php');



		$username=$_POST['username'];

		$password=$_POST['password'];


		$connection=mysqli_connect($db_host,$db_username,$db_password,$db_name);

			if(!$connection)
				{
					echo 'Conenction Failed! Database credentials are incorrect';
					die();
					exit(1);

				}
			else
				{
					$query='select * from users where email="'.$username.'" and password= "'.$password.'";  ';
					$result=mysqli_query($connection,$query);
					 $count = mysqli_num_rows($result);

					if($count>0)
					{
						$_SESSION['email']=$username;
						echo '<script> window.location.href = "index.php";</script>';

						
	 						
					}
					else
					echo '<script> window.location.href = "login.php?status=0";</script>';

				}



 ?>