<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>A simple registration Form ~ Designed by Ndekere.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="favicon.png" sizes="128x128">

</head>
<body>

<div class="container">
<div class="row">
    <form method="post" action="signup.php" class="col s12" id="reg-form">
      <div class="row">
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text" class="validate" required>
          <label>First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text" class="validate" required>
          <label>Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate" required>
          <label>Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate" minlength="6" required>
          <label>Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <div class="gender-male">
            <input class="with-gap" name="gender" type="radio" id="male" required />
            <label for="male">Male</label>
          </div>
          <div class="gender-female">
            <input class="with-gap" name="gender" type="radio" id="female" required />
            <label for="female">Female</label>
          </div>
        </div>

        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Register
            <i class="material-icons right">done</i>
          </button>
        </div>
      </div>
	  <footer>
<p>Copyright &copy; 2019. Ndekere Kiritu. <span style="color: #993366;"><a style="color: #993366;" href="https://www.instagram.com/ndekere254/" target="_blank"><span style="font-size: 15pt;"><strong>Follow me on Instagram.</strong></span></a></span></p>
</footer>
    </form>
  </div>
  <a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js'></script>
<script  src=".js/script.js"></script>

</body>

</html>