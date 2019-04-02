
<?php
session_start();
if(empty($_SESSION['email']))
{
	echo '<script>  window.location.href = "login.php";

</script>';
}



	require_once ('config.php');

	$count=1;

		$connection=mysqli_connect($db_host,$db_username,$db_password,$db_name);

			if(!$connection)
				{
					echo 'Conenction Failed! Database credentials are incorrect';
					die();
					exit(1);

				}
			else
				{
					$query='select * from users order by id desc';
					$result=mysqli_query($connection,$query);
					  
					}

 ?>
<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Tables</title>
		<meta name="description" content="Static table examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-xl-12">


								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													All users in Database
												</h3>

											</div>
										</div>
										<a style="float: right;" href="index.php" class="btn btn-primary">Go To Home</a>
										<a style="float: right;" href="logout.php" class="btn btn-primary">Logout</a>

									</div>
									<div class="m-portlet__body">

										<!--begin::Section-->
										<div class="m-section">
											<div class="m-section__content">
												<table class="table m-table m-table--head-bg-success">
													<thead>
														<tr>
															<th>#ID</th>
															<th>User ID</th>
															<th>Full Name</th>
															<th>Email</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														

														<?php	$count=1;
														 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
															<tr>   
																<td><?php echo $count++ ?></td>
																<td><?php echo $row['id']; ?></td>
																<td><?php echo $row['name']; ?></td>
																<td><?php echo $row['email']; ?></td>
																<td>
																	<button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add user</button>&nbsp<br><br>
																	<form action="" method="post" id="delete" class="form-inline">
																		<br>
																		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
																		<button type="submit" id="delete" class="btn btn-danger">Delete User</button>
																	</form>

																	</td>
															</tr>
														<?php } ?>
														
														
													</tbody>
												</table>
											</div>
										</div>

										<!--end::Section-->


			<!-- end:: Body -->

		</div>


<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form id="adduser" action="" method="POST" class="m-form m-form--fit m-form--label-align-right">
          	<h3 class="m-portlet__head-text">
          						Add user
												</h3>
										<div class="m-portlet__body">
											<div class="form-group m-form__group">
												<label for="exampleInputPassword1">Full Name</label>
												<input type="text" class="form-control m-input m-input--square" id="exampleInputPassword1" placeholder="Fullname" name="name">
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
												
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control m-input m-input--square" id="exampleInputPassword1" placeholder="Password" name="password">
											</div>
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button id="adduser" type="submit" name="adduser" class="btn btn-primary">Submit</button>
												
											</div>
										</div>
									</form>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       
      </div>
    </div>
  </div>
</div>


		<!-- begin::Quick Nav -->

		<!--begin::Global Theme Bundle -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
	</body>

	<!-- end::Body -->
</html>


<script type="text/javascript">
	


$( "#adduser" ).submit(function( event ) {
  	
  }

$( "#delete" ).submit(function( event ) {
  	
  }
</script>



<?php 


	if(isset($_POST['adduser']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
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
						$query='INSERT INTO `users`(`name`, `email`, `password`) VALUES ("'.$name.'","'.$email.'","'.$password.'")';
						if(mysqli_query($connection,$query))
						{
							echo '<script> window.location.href = "usermanagment.php";</script>';
						 

			

							}
						else
							echo "error in query";
			

					}



	}
	if(isset($_POST['delete']))
	{
	



		$id=$_POST['id'];

		$connection=mysqli_connect($db_host,$db_username,$db_password,$db_name);

			if(!$connection)
				{
					echo 'Conenction Failed! Database credentials are incorrect';
					die();
					exit(1);

				}
			else
				{
						$query='	DELETE FROM `users` WHERE "'.$id.'"';
						if(mysqli_query($connection,$query))
						{
							echo '<script> window.location.href = "usermanagment.php";</script>';
						 

			

							}
							else
							echo "asasfsd";
	}
}

 ?>