<?php
require 'php/functions.php';
$Skincare = query("SELECT * FROM skincare");


if (isset($_POST['cari'])) {
  $Skincare = cari($_POST['keyword']);
}
?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Import Google Font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
  <title>Skincare Shop</title>
  <link rel="icon" type="image/x-icon" href="assets/img/shop.png" />
</head>

<body id="home" class="scrollspy">

  <!-- Navbar -->
  <div class="navbar-fixed scrollspy">
    <nav class="black">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo" class="darken brown-text text-darken-3" style="margin-right: 15px;">Skincare Shop</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li>
            <a href="php/login.php" style="font-family: Arial, Helvetica, sans-serif;">Login</a>
          </li>
          <li>
            <a href="php/registrasi.php" style="font-family:Arial, Helvetica, sans-serif;">Sign up</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>


  <!-- Sidenav -->

  <ul id="mobile-nav" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="assets/img/sok.jpg">
        </div>
        <a href="#user"><img class="circle" src="assets/img/tia.jpg"></a>
        <a href="#name"><span class="black-text name">Chyntia Citra 203040002</span></a>
        <a href="#email"><span class="black-text email">sintiacitra29@gmail.com</span></a>
      </div>
    </li>
    <li><a href="http://localhost/pw2021_203040002/"><i class="material-icons">cloud</i>Beranda</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a href="php/login.php">Login</a></li>
    <li><a href="php/registrasi.php">Sign up</a></li>
  </ul>
  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

  <!-- Slider -->
  <div id="slider" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="assets/img/sok.jpg">
        <div class="caption left-align">
          <h2 class="light brown-text text-darken-3" style="font-family:Arial, Helvetica, sans-serif;">Skincare <br> & Beauty</h2>
          <h5 class="light brown-text text-darken-3">It’s never too late to look after yourself. Never too late to eat healthily,<br>get plenty of rest, exercise regularly and look after your skin.</h5>
          <a class="waves-effect btn" style="background-color: black;">LEARN MORE</a>
        </div>
      </li>
    </ul>
  </div>

  <!-- seacrh -->
  <h4 class="center"><span class="black-text">Search Produk</span></h4>
  <form action="" method="POST">
    <input type="text" name="keyword" size="35" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>

  <section class="produk">
    <section class="skincare-list latest">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 style="text-align: center;">Produk Skincare</h3>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <!-- Database -->
            <?php if (empty($Skincare)) : ?>
              <tr>
                <td colspan="8">
                  <h3>Produk Tidak Ditemukan</h3>
                </td>
              </tr>
            <?php else : ?>
              <div class="row">
                <?php foreach ($Skincare as $sk) : ?>
                  <div class="col s12 m4">
                    <div class="card small">
                      <div class="card-image">
                        <img width="220px" src="assets/img/<?= $sk['Gambar']; ?>" class="responsive-img materialboxed">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4" style="font-size: 20px;"><?= $sk['nama_produk']; ?></span>
                      </div>
                      <div class="card-action">
                        <a class="waves-effect btn-small" style="background-color: black;" href="php/detail.php?id=<?= $sk['id']; ?>">More Detail</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="black lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">SKINCARE SHOP</h5>
          <p class="grey-text text-lighten-4">Perawatan kulit adalah rangkaian dari berbagai penerapan yang mendukung keadaan integritas kulit, untuk meningkatkan sebuah penampilan dan mengubah kondisi kulit. Mereka dapat mengandung nutrisi, menghindari dari paparan sinar matahari yang berlebihan dan penggunaan produk kulit emolien yang tepat.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Follow Social Media</h5>
          <div class="icon-sosmed">
            <a href="https://twitter.com/aprrach" class="white-text" style="margin-right: 10px;">
              <i class="fab fa-twitter fa-4x"></i>
            </a>
            <a href="https://instagram.com/chyntiacitra" class="white-text" style="margin-right: 10px;">
              <i class="fab fa-instagram fa-4x"></i>
            </a>
            <a href="https://facebook.com/sintia666" class="white-text" style="margin-right: 10px;">
              <i class="fab fa-facebook fa-4x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="white-text">
      <div class="container">
        Copyright © 2021 Chyntia Citra Rachmawati
      </div>
    </div>
  </footer>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
</body>

<script type="text/javascript">
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);

  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, {
    indicators: false,
    height: 500,
    transition: 600,
    interval: 3000
  });

  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);

  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll, {
    scrolloffset: 50
  });
</script>


</html>