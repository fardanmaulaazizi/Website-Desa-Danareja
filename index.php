<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Desa Danareja</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body class="bg-warna-1">
    <nav class="navbar navbar-expand-sm bg-warna-2 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white" href="#">Danareja</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item text-white dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil Desa
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Tentang Desa</a></li>
                <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                <li><a class="dropdown-item" href="#">Perangkat Desa</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Berita
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                <li><a class="dropdown-item" href="#">Agenda</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">Galeri</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-primary roundeed" type="submit">Login</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Home -->
    <section id="hero" class="px-5">
      <div class="container vh-100 d-flex align-items-center">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <div class="penjelasan-desa">
              <h4 class="fs-6 mb-2 text-warna-3">Selamat Datang di</h3>
              <h1 class="fw-bold mb-2 text-warna-2 fs-1">Website Desa Danareja</h1>
              <p>Sebuah tempat yang kaya akan pesona budaya dan keindahan alam menyambut semua pengunjung dengan senyum ramah, sambil memberikan kesempatan bagi suara beragam untuk turut berpartisipasi.</p>
            </div>
          </div>
          <div class="col-md-6 mb-3 order-md-first">
            <img src="hero.svg" width="100%" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Home -->

    <!-- Samutan -->
    <section class="px-5 mb-5">
      <div class="container vh-100 d-flex align-items-center">
        <div class="sambutan">
          <div class="row mb-4">
            <div class="col-12">
              <h2 class="fw-semibold fs-3 text-center">Sambutan Kepala Desa</h2>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-8 mb-5 mb-md-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio odit explicabo ea cum, aperiam adipisci placeat ipsa exercitationem at laudantium ratione facere veniam amet, temporibus iure consequuntur maiores? Velit, reprehenderit! Vitae nam eligendi velit. Perferendis quam rerum nisi qui asperiores esse sint, doloribus laudantium ea beatae repellat fugit libero officiis ipsam. Autem veniam quo, ipsa in at iure labore cum. Cum eius praesentium necessitatibus. Assumenda at quisquam velit facere aliquam, reprehenderit dolor maxime aspernatur sed dignissimos commodi neque! Esse, magni! Culpa error, voluptas tenetur iusto quas perspiciatis inventore eius quaerat unde nam amet repellat laboriosam nihil ipsa officia mollitia?
            </div>
            <div class="col-md-4 order-md-first">
              <div class="caption-figure text-center">
                <h6 class="fw-semibold mb-0">Setianto</h6>
                <p>Kepala Desa Danareja</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Sambutan -->

    <!-- Pengumuman -->
    <section class="px-5 mb-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="fw-semibold fs-3 text-center">Pengumuman</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card overflow-hidden">
              <img src="test.jpg" alt="">
              <div class="deskripsi-pengumuman p-3">
                <h3 class="fs-5 fw-semibold">Judul Satu</h3>
                <p class="mb-1 text-primary" style="font-size: .8rem;"><i class="bi bi-calendar3"></i> 19/4/2009</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptates reiciendis ab consectetur cupiditate. Non ad quia ea sit quam,</p>
                <a href="" class="btn btn-outline-primary">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center mt-4">
          <div class="col">
            <a href="" class="btn btn-primary">View All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Pengumuman -->
    <!-- Agenda -->
    <section class="px-5 mt-5 mb-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="fw-semibold fs-3 text-center">Agenda</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card overflow-hidden p-3">
              <div class="row">
                <div class="col-sm-4 mb-3">
                  <img src="test.jpg" width="100%" height="100%" alt="" style="object-fit:cover;">
                </div>
                <div class="col-sm-8">
                  <h3 class="fs-5 fw-semibold">Judul Satu</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptates reiciendis ab consectetur cupiditate. Non ad quia ea sit quam,</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Agenda -->

    <!-- Info Desa -->
    <section class="px-5 mt-5 mb-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="fw-semibold fs-3 text-center">Info Desa</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mb-4 mb-md-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31675.014298499183!2d109.12858337702987!3d-7.082243408364462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f94f080d9d259%3A0x54c1271edbeb349c!2sDanareja%2C%20Kec.%20Balapulang%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689562118298!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" c></iframe>
          </div>
          <div class="col-md-4">
            <h6>Statistik Penduduk</h6>
            <table>
              <tr>
                <td>Laki-laki</td>
                <td>500</td>
              </tr>
              <tr>
                <td>Perempuan</td>
                <td>500</td>
              </tr>
            </table>
            <canvas id="myChart" style="width:100%; height: 200px;"></canvas>
              <h6>Aparatur Desa</h6>
              <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="test.jpg" class="d-block w-100" width="100%" height="300px" style="object-fit: cover;">
                    <div class="carousel-caption d-block">
                      <h5 class="mb-0">Kepala Desa</h5>
                      <p class="mb-0">Setianto</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="test.jpg" class="d-block w-100" width="100%" height="300px" style="object-fit: cover;">
                    <div class="carousel-caption d-block">
                      <h5 class="mb-0">Kepala Desa</h5>
                      <p class="mb-0">Setianto</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Info Desa -->

    <!-- Footer -->
    <section class="bg-warna-2 text-white">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6">
            <h6 class="fw-bold">Balai Desa Danareja</h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3600929215113!2d109.1551794!3d-7.0841876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f94efabe1eb31%3A0x35df7c0d6220bbb3!2sBalai%20Desa%20Danareja!5e0!3m2!1sid!2sid!4v1689748616622!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 class="fw-bold">Kontak Kami</h6>
            <p>Ciranggem, Danareja, Kec. Balapulang, Kabupaten Tegal, Jawa Tengah 52464</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <hr>
            <h6 class="text-center">Copyright © 2023 All rights reserved.</h6>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->

    <!-- Statistik Penduduk -->
    <script>
      var xValues = ["Laki-laki", "Perempuan"];
      var yValues = [70, 80, 0];
      var barColors = ["#181230", "#"];
      
      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
          }
        }
      });
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>