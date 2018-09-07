<?php
	include('login.php');
	if(isset($_SESSION['login_user']) && isset($_COOKIE['session_id'])){
    header("location: home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>login</title>
  <link rel="shortcut icon" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="">

								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="sath" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
                  <div class="input-group">
									<input id="password" type="password" class="form-control" name="password" value="12345678" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="password_eye"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                  </div>
                </div>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" name="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>

								<div class="form-group message">
									<span><?php echo $msg; ?></span>
								</div>

							</form>
						</div>
					</div>
					<div class="footer">
            Double Submit Cookies Pattern
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>

</body>
</html>
