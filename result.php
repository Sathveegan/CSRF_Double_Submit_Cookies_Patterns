<?php
  session_start();
	include('csrf_token_validator.php');

	if(!isset($_SESSION['login_user']) || !isset($_COOKIE['session_id'])){
    header("location: home.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>result</title>
  <link rel="shortcut icon" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="jumbotron">
    <h1 class="display-4">Hello, <?php echo $_SESSION['login_user']; ?></h1>
    <p class="lead">This is a simple application for Double Submit Cookies Patterns in CSRF Protection.</p>
    <a href="home.php" class="btn btn-outline-primary">Home</a>
    <a href="logout.php" class="btn btn-outline-primary">logout</a>
    <hr class="my-4">
  </div>

  <div class="container">
      <?php
        if($result){
      ?>
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Success!</h4>
            <p>Thank you for your information.</p>
            <hr>
          </div>
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>First Name:</strong> <?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?></li>
              <li class="list-group-item"><strong>Last Name:</strong> <?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?></li>
              <li class="list-group-item"><strong>Subject:</strong> <?php if(isset($_POST['subject'])) echo $_POST['subject']; ?></li>
              <li class="list-group-item"><strong>Message:</strong> <?php if(isset($_POST['message'])) echo $_POST['message']; ?></li>
            </ul>
          </div>
        <?php
        } else{
        ?>
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Fail!</h4>
            <p>Cross-Site Request Forgery Attack.</p>
            <hr>
            <p class="mb-0">Cross-Site Request Forgery Attack is successfully <strong>ELIMINATED</strong> using Double Submit Cookies Patterns.</p>
          </div>
        <?php
        }
    ?>
  </div>
</body>
</html>
