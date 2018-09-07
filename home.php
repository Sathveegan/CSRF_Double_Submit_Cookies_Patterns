<?php
  session_start();
  if(!isset($_SESSION['login_user']) || !isset($_COOKIE['session_id'])){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>home</title>
  <link rel="shortcut icon" href="img/logo.png" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="jumbotron">
    <h1 class="display-4">Hello, <?php echo $_SESSION['login_user']; ?></h1>
    <p class="lead">This is a simple application for Double Submit Cookies Patterns in CSRF Protection.</p>
    <a href="logout.php" class="btn btn-outline-primary">logout</a>
    <hr class="my-4">
  </div>

  <div class="container col-md-6">

    <h1>Contact Form</h1>
    <p class="lead">Please fill in the information and submit the form.</p>
    <form method="POST" action="result.php">

      <div class="form-group">
        <label for="firstName">First Name</label>
        <input id="firstName" type="text" class="form-control" name="firstName" placeholder="Your first name..." required autofocus>
      </div>

      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input id="lastName" type="text" class="form-control" name="lastName" placeholder="Your last name..." required>
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input id="subject" type="text" class="form-control" name="subject" placeholder="Your subject..." required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message..." required></textarea>
      </div>

      <div class="form-group no-margin">
        <input type="hidden" name="csrf_token" value="" id="csrf_token">
        <button type="submit" name="submit" class="btn btn-primary btn-block">
          Submit
        </button>
      </div>

    </form>

  </div>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
    var name = "csrf_token" + "=";
    var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var dc = decodedCookie.split(';');
    for(var i = 0; i < dc.length; i++) {
        var c = dc[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            cookie_value = c.substring(name.length, c.length);
            document.getElementById("csrf_token").setAttribute('value', cookie_value) ;
        }
    }
	});
	</script>

</body>
</html>
