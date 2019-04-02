<?php

session_start();
if(empty($_SESSION['email']))
{
	echo '<script>  window.location.href = "login.php";

</script>';
}


?>
<!DOCTYPE html> 
<html lang=en> <head> 
	<meta charset=utf-8> 

<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />

	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous> <link href="https://fonts.googleapis.com/css?family=Karma" rel=stylesheet>


	<title>Recipe Box</title>

	 <link href="public/app.bundle.css" rel="stylesheet"></head> 


	 <body> 
	 	
	 	<div>
	 	<a href="usermanagment.php"><button style="float: right" class="btn btn-primary">User Managment</button></a>
<form action="logout.php" method="get">
	
	<a href="?logout=1"><button style="float: right" class="btn btn-primary">Logout</button></a>
</form>

	

</div>

	 	<div id=app>


	  </div> 



	  <script type="text/javascript" src="public/bundle.js"></script>
<br>
<br><br><br>


	</body>


	  </html> 
