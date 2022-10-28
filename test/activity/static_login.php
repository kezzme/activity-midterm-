<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Static Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container w-25 my-5">
			<div class="d-flex justify-content-center">
				<div class="card mt-5 text-center">
					<div class="card-body">
						<i class="fa fa-user-circle fa-5x"></i>

						<br>

						<form method="post">
							<!---Dropdown--->
							<select class="form-select form-control mt-3" aria-label="userStatus" name="userType">
								<option value="Admin" selected>Admin</option>
								<option value="Content Manager">Content Manager</option>
								<option value="System User">System User</option>
							</select>

							<!---Username--->
							<input type="text" class="form-control mt-3" name="userName" placeholder="Username">

							<!---Password--->
							<input type="password" class="form-control mt-3" name="userPass" placeholder="Password">

							<button type="submit" class="btn btn-primary mt-3 w-100" name="signIn">Sign in</button>
						</form>				

					</div>
				</div>
			</div>
		</div>

		<div class="container w-25 text-center">
			<?php  
				$users = array(
					array(
						'type' => 'Admin',
						'username' => 'admin',
						'password' => 'pass123',
					),

					array(
						'type' => 'Content Manager',
						'username' => 'troy',
						'password' => 'rosales123',
					),

					array(
						'type' => 'System User',
						'username' => 'neko',
						'password' => 'puma123',
					),
					array(
						'type' => 'System User',
						'username' => 'neko',
						'password' => 'puma123',
					),
				);

				//print_r($users);

				if (isset($_POST['signIn'])) {
					$status = $_POST['userType'];
					$name = $_POST['userName'];
					$pass = $_POST['userPass'];

					if ($status === $users[0]['type']) {
						if ($name === $users[0]['username']) {
							if ($pass === $users[0]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[1]['type']) {
						if ($name === $users[1]['username']) {
							if ($pass === $users[1]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[2]['type']) {
						if ($name === $users[2]['username']) {
							if ($pass === $users[2]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}								

					else{
						echo 
						'<div class="alert alert-danger mt-3" role="alert">
							Invalid Username / Password
						</div>';
					}
				}
			?>
		</div>

	</body>
</html>