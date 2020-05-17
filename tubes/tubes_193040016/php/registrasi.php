<?php


require 'functions.php';

// ketika tombol login ditekan 
if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('User and Password successfully added, Please Login');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'user failed to add!';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="../css/login.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
</head>

<body>



  <div class="container">
    <div class="col center-align logo-rg">

      <a href="../index.php"><img src="../img/logo.png" title="Back To Index" class="responsive-image logo-rg center-align"></a>
    </div>
    <div class="row">
      <div class="col m3 s12">
      </div>
      <div class="col m6 s12">
        <div class="card-panel center-align" style="width: 450px; margin: auto; margin-top: 10px; margin-bottom: 150px opacity: 0.9; background-color: #1f1f1f; color: white;">

          <h5>Create Account</h5><br>

          <form action="" method="POST">

            <div class="input-field">
              <i class="small material-icons prefix">person</i>
              <input type="text" name="username" style="color: white;" autocomplete="off" autofocus required>
              <label>Username</label>
            </div>

            <div class="input-field">
              <i class="small material-icons prefix">lock</i>
              <input type="password" name="password1" style="color: white;" required>
              <label>Password</label>
            </div>

            <div class="input-field">
              <i class="small material-icons prefix">vpn_key</i>
              <input type="password" name="password2" style="color: white;" required>
              <label>Confirm Password</label>
            </div>

            <button class="btn-small" type="submit" name="registrasi">Registration</button>

          </form>

          <br>
          <p>Have an Account? <a href="login.php" class="sign-up"> Login Here!</a></p>

        </div>
      </div>
      <div class="col m3 s12"></div>
    </div>
  </div>





  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>