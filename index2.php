<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Journal</title>
    <link rel="icon" href="hino.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Journal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About me">About me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            <button id="themeToggle" class="btn btn-secondary">
              <i class="bi bi-moon-fill"></i>
            </button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="pemandangan.jpg" class="img-fluid" width="300">
          <div>
            <h1 class="fw-bold display-4">Create memories, Save memories, Everyday</h1>
            <h4 class="lead display-6">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</h4>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      $no = 1;
      while($row = $hasil->fetch_assoc()){
        ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-primary-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="p1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="p3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="p4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="p5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://p4.wallpaperbetter.com/wallpaper/44/475/694/airplane-flight-sunset-wallpaper-preview.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

  <!-- Schedule begin -->
  <section id="Schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Monday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">SENIN</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">Etika Profesi</div>
                  <div>16:20-18:00 | H.4.4</div>
                </li>
                <li class="mb-3">
                  <div class="fw-bold">Sistem Operasi</div>
                  <div>18:30-21:00 | H.4.8</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Tuesday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">SELASA</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">Pendidikan Kewarganegaraan</div>
                  <div>12:30-13:10 | Kulino</div>
                </li>
                <li class="mb-3">
                  <div class="fw-bold">Probabilitas dan Statistik</div>
                  <div>15:30-18:00 | H.4.9</div>
                </li>
                <li class="mb-3">
                  <div class="fw-bold">Rekayasa Perangkat Lunak</div>
                  <div>10:30-12:10 | H.4.7</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Wednesday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">RABU</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">Pemograman Berbasis Web</div>
                  <div>15:30-18:00 | H.4.6</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Thursday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">KAMIS</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">Sistem Operasi</div>
                  <div>12.30-15.00 | H.5.8</div>
                </li>
                <li class="mb-3">
                  <div class="fw-bold">Pendidikan Agama Islam</div>
                  <div>16:20-18:00 | Kulino</div>
                </li>
                <li class="mb-3">
                  <div class="fw-bold">Penambangan Data</div>
                  <div>18:30-21:00 | H.4.9</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Friday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">JUMAT</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">Pemrograman Web Lanjut</div>
                  <div>10:20-12:00 | D.2.K</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Saturday -->
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">SABTU</h5>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <div class="fw-bold">FREE</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Schedule end -->

  <!-- About Me -->
  <section id="A2bout me" class="text-center p-5 bg-primary-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row align-items-center justify-content-center">
        <img src="https://akcdn.detik.net.id/community/media/visual/2020/03/05/3fee3fcd-9117-4d3f-bce0-c297aa3039c4.jpeg?q=90&w=480" class="rounded-circle" alt="Cinque Terre" width="300">
        <div>
          <p>A11.2023.15333</p>
          <h3 class="fw-bold display">Abidah Syujana Putra</h3>
          <p class="lead display">Program Studi Teknik Informatika</p>
          <p class="fw-bold display "><a href="https://dinus.ac.id/" class="text-dark">Universitas Dian Nuswantoro</a></p>
        </div>
      </div>
    </div>
  </section>

    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/abid.syujana_?igsh=cjczaGlsMWJndXFt"> <i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="#reff"> <i class="bi bi-twitter h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/qr/RE4XHLOIWX4NF1"> <i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>Abidah Syujana Putra &copy; 2024</div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      // Display Date and Time
      window.setTimeout("tampilWaktu()", 1000);
      function tampilWaktu () {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;
        setTimeout("tampilWaktu()",1000);
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
      }

      // Toggle Light/Dark Mode
      document.getElementById("themeToggle").addEventListener("click", function () {
        var currentTheme = document.documentElement.getAttribute("data-bs-theme");
        var newTheme = currentTheme === "light" ? "dark" : "light";
        document.documentElement.setAttribute("data-bs-theme", newTheme);
        this.innerHTML = newTheme === "light" ? '<i class="bi bi-moon-fill"></i>' : '<i class="bi bi-brightness-high-fill"></i>';
      });
    </script>
  </body>
</html>