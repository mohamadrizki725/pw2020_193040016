 <?php

  // cek cookie 
  if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id 
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username 
    if ($hash === hash('sha256', $row['id'], false)) {
      $_SESSION['username'] = $row['username'];
      header("Location: admin.php");
      exit;
    }
  }
  session_start();

  if (isset($_SESSION['login'])) {
    header("Location: admin.php");
    exit;
  }

  require 'functions.php';

  // jika remember me di centang
  if (isset($_POST['remember'])) {
    setcookie('username', $row['username'], time() + 60 * 60 * 24);
    $hash = hash('sha256', $row['id']);
    setcookie('hash', $hash, time() + 60 * 60 * 24);
  }

  // ketika tombol login ditekan 
  if (isset($_POST['login'])) {
    $login = login($_POST);
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
   <title>Sign In</title>
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

           <h5>Sign In Your Account</h5><br>

           <?php if (isset($login['error'])) : ?>
             <p style="color: red;"><i class="medium material-icons">error</i><br>
               <?= $login['pesan']; ?></p>
           <?php endif; ?>

           <form action="" method="POST">

             <div class="input-field">
               <i class="small material-icons prefix">person</i>
               <input type="text" name="username" style="color: white;" autocomplete="off" autofocus required>
               <label>Username</label>
             </div>

             <div class="input-field">
               <i class="small material-icons prefix">lock</i>
               <input type="password" name="password" style="color: white;" required>
               <label>Password</label>
             </div>

             <div class="input-field" style="margin-left: -180px; ">
               <p>
                 <label>
                   <input type="checkbox" class="filled-in" name="remember" />
                   <span>Remember Me</span><br>
                 </label>
               </p>
             </div>

             <button class="btn-small" type="submit" name="login">Sign In</button>

           </form>



           <br>
           <p>Dont Have an Account? <a href="registrasi.php" class="sign-up"> Sign Up Now!</a></p>

         </div>
       </div>
       <div class="col m3 s12"></div>
     </div>
   </div>





   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="../js/materialize.min.js"></script>
 </body>

 </html>