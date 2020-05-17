<?php


require 'php/functions.php';

// tampung
$laptop = query("SELECT * FROM laptop");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $laptop = cari($_POST['keyword']);
}


?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/catalog.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <title>Rizki Gaming</title>
</head>

<body id="home" class="scrollspy">


  <!-- Navbar -->

  <div class="navbar-fixed scrollspy">
    <nav class="" style="background-image: linear-gradient(#1c1d1f,#1b3661,#1c1d1f);">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo scrollspy">
            <img src="img/logo.png" class="rglogo"></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#search" class="cari-nav">Search</a></li>
            <li><a href="#catalog">Catalog</a></li>
            <li><a href="php/login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <!-- SideNav -->

  <ul class="sidenav" id="mobile-nav">
    <li><a href="#search"><i class="small material-icons">search</i>Search</a></li>
    <li><a href="#catalog">Our Catalog</a></li>
    <li><a href="php/login.php">Login</a></li>
    <li><a href="php/registrasi.php">Sign Up</a></li>
  </ul>

  <!-- Slider -->

  <div id="slider" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="img/slider/1.png">
        <div class="caption left-align">
          <h2 style="font-weight: bold;">DRIVING SIM <br>GEAR</h2>
          <h5 class="light grey-text text-lighten-3">Through design, engineering and love of driving games,<br>takes
            racing simulation to the next level.</h5>
          <a class="waves-effect btn" style="background-color: #1250a6">LEARN MORE</a>
        </div>
      </li>
      <li>
        <img src="img/slider/2.png">
        <div class="caption right-align">
          <h2 style="font-weight: bold;">Mechanical gaming keyboard<br>with Cherry MX switches</h2>
          <h5 class="light grey-text text-lighten-3">German-made Cherry MX RGB mechanical key switches that deliver
            satisfying mechanical<br> feel with optimal actuation.</h5>
          <a class="waves-effect btn" style="background-color: #1250a6">LEARN MORE</a>
        </div>
      </li>
      <li>
        <img src="img/slider/3.png">
        <div class="caption center-align">
          <h2 style="font-weight: bold;">GAMEPAD <br>WIRELESS </h2>
          <h5 class="light grey-text text-lighten-3">Durability and precision are available on the gamepad. <br>Get a
            console-style controller for PC and play the game as you wish.</h5>
          <a class="waves-effect btn" style="background-color: #1250a6">LEARN MORE</a>
        </div>
      </li>
    </ul>
  </div>

  <!-- Search -->

  <section id="search" class="section section-search scrollspy grey-text center ">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4 class="center"><span class="blue-text">Search</span><span class="grey-text text-darken-3" style="font-weight: bold;"> Now</span></h4>

          <form action="" method="POST">
            <input type="text" name="keyword" id="keyword">
            <button type="submit" name="cari" id="btnCari">Search</button>


          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Catalog -->

  <section id="catalog" class="scrollspy" style="background-image: linear-gradient(to bottom, #1f1f1f,#1b3661);">

    <h3 class="light center white-text">Our Catalog</h3>
    <div class="container">

      <div id="bungkus">
        <div class="row">
          <div class="col m4 s12"></div>
          <div class="col m4 s12">
            <?php if (empty($laptop)) : ?>
              <div class="card center-align">
                <i class="large material-icons" style="color: red;">error</i>
                <h5 style="color: red;">Data Tidak Ditemukan </h5>
              </div>
          </div>
        <?php endif; ?>
        </div>
        <div class="col m3 s12"></div>

        <?php foreach ($laptop as $lp) : ?>

          <div class="col m3 s12 center-align">
            <div class="card center-align">

              <div class="card-image responsive-image">
                <img src="img/laptop/<?= $lp['gambar']; ?>" style="width: 200px;">
              </div>

              <div class="card-caption center-align">
                <h6><?= $lp['nama']; ?></h6><br>
                <a class="waves-effect btn-small tombol-detail" href="php/detail.php?id=<?= $lp['id']; ?>">Details</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!--Social Media & Footer-->

  <footer class="page-footer" style="background-color: #1f1f1f;">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <p style="text-align: justify;">This big task website is made using HMTL, CSS, Materialize, PHP, Javascript, AJAX and uses code editor VS CODE</p>
        </div>
        <div class="col l4 offset-l4 s12">
          <h6>Follow My Social Media</h6>
          <div class="icon-sosmed">
            <a href="https://id-id.facebook.com" class="white-text" style="margin-right: 20px;">
              <i class="fab fa-facebook fa-2x"></i></a>

            <a href="https://twitter.com" class="white-text" style="margin-right: 20px;">
              <i class="fab fa-twitter fa-2x"></i></a>

            <a href="https://instagram.com" class="white-text" style="margin-right: 20px;">
              <i class="fab fa-instagram fa-2x"></i></a>

            <a href="https://youtube.com" class="white-text" style="margin-right: 20px;">
              <i class="fab fa-youtube fa-2x"></i></a>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-copyright" style="background-color: #1f1f1f;">
      <div class="container">
        Copyright © 2020 Mohamad Rizki Ramdani
        <a class="grey-text text-lighten-4 right">PW IFUNPAS</a>
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->

  <script src="js/index.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider')
    M.Slider.init(slider, {
      indicators: false,
      height: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>

</body>


</html>