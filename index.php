<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Story Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

  <!-- GLightbox CSS -->
  <link rel="stylesheet" href="assets/css/glightbox.css">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Story
  * Template URL: https://bootstrapmade.com/story-bootstrap-blog-template/
  * Updated: Aug 11 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  // Inisialisasi GLightbox
  const lightbox = GLightbox({
    selector: '.readmore',   // kelas link gambar kamu
    touchNavigation: true,
    loop: true,
    zoomable: true,
    autoplayVideos: true
  });
</script>



<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Tinanggea.com</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">Topografi</a></li>
          <li><a href="category.html">Batas Wilayah</a></li>
          <li><a href="blog-details.html">Pertumbuhan Penduduk</a></li>
          <!-- <li><a href="author-profile.html">Author Profile</a></li> -->
          <li><a href="contact.html">Kontak</a></li>
          <li><button type="button" class="btn btn-primary">Login</button></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">
      <div class="container-fluid p-0" data-aos="fade">

              <div class="blog-hero-item">
                <img src="assets\img\img\DJI_0112.jpg" alt="Blog Hero Image" class="img-fluid">

                <div class="blog-hero-content">
                  <h1>Profil Kecamatan Tinanggea</h1>

                  <div class="meta">
                    <span class="date">Kabupaten Konawe Selatan</span>
                  </div>

                </div>
              </div>

      </div>
    </section><!-- /Blog Hero Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Profil Daerah</span>
        <h2>Profil Daerah</h2>
        <p class="w-50 p-3 mx-auto">Mengenal lebih dekat Kecamatan Tinanggea — wilayah dengan potensi sumber daya alam dan masyarakat yang dinamis di Kabupaten Konawe Selatan.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Grid Posts -->
        <div class="posts-grid">
          <div class="row gy-4">

            <!-- 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <article class="grid-post">

                <div class="post-img">
                  <img src="assets/img/img/team/gbr01.jpg" alt="" class="img-fluid" loading="lazy">
                </div>

                <?php
                  include "config.php";
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=1");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>

                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html"><?php echo $judul ?></a>
                  </h3>
                  <p class="excerpt"><?php echo $uraian_singkat ?></p>

                </div>

              </article>
            </div>

            <!-- 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <article class="grid-post">

                <div class="post-img">
                  <img src="assets/img/img/team/gbr02.jpg" alt="" class="img-fluid" loading="lazy">
                </div>

                <?php
                  include "config.php";
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=2");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>

                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html"><?php echo $judul ?></a>
                  </h3>
                  <p class="excerpt"><?php echo $uraian_singkat ?></p>

                </div>

              </article>
            </div>

            <!-- 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <article class="grid-post">

                <div class="post-img">
                  <img src="assets/img/img/team/gbr03.jpg" alt="" class="img-fluid" loading="lazy">
                </div>

                <?php
                  include "config.php";
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=3");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>

                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html"><?php echo $judul ?></a>
                  </h3>
                  <p class="excerpt"><?php echo $uraian_singkat ?></p>

                </div>

              </article>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Category Section Section -->

    <!-- Latest Posts Section -->
<section id="latest-posts" class="latest-posts section">

  <div class="container section-title" data-aos="fade-up">
    <span class="description-title">Potensi Desa Unggulan</span>
    <h2>Potensi Desa Unggulan</h2>
    <p class="w-25 p-3 mx-auto">Kecamatan Tinanggea memiliki beragam potensi desa unggulan yang mencerminkan kekayaan alam, budaya, dan kreativitas masyarakatnya.</p>
  </div>

  <!-- Tombol Filter -->
  <div class="text-center mb-4">
    <ul class="list-inline" id="potensi-filters" data-aos="fade-up" data-aos-delay="50">
      <li class="list-inline-item"><button class="filter-btn active btn btn-primary" data-filter="*">Semua</button></li>
      <li class="list-inline-item"><button class="filter-btn btn btn-primary" data-filter=".tinanggea">Kelurahan Tinanggea</button></li>
      <li class="list-inline-item"><button class="filter-btn btn btn-primary" data-filter=".bungin">Desa Bungin Permai</button></li>
      <li class="list-inline-item"><button class="filter-btn btn btn-primary" data-filter=".torokeku">Desa Torokeku Baru</button></li>
      <li class="list-inline-item"><button class="filter-btn btn btn-primary" data-filter=".akuni">Desa Akuni</button></li>
    </ul>

  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-stretch portfolio-container">

      <!-- TINANGGEA START -->
      <div class="col-lg-4 col-md-6 portfolio-item tinanggea" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/01-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Tinanggea</span>
            </div>

            <h3 class="title">Pesisir Pantai</h3>

            <a
            href="assets/img/img/portfolio/01-small.jpg"
            class="readmore" 
            data-glightbox="title: Pesisir Pantai; description: Keindahan garis pantai Tinanggea.">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item tinanggea" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/02-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Tinanggea</span>
            </div>

            <h3 class="title">Kawasan Kelurahan</h3>
            
            <a
            href="assets/img/img/portfolio/02-small.jpg"
            class="readmore"
            data-glightbox="title: Kawasan Kelurahan; description:">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>


      <div class="col-lg-4 col-md-6 portfolio-item tinanggea" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/03-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Tinanggea</span>
            </div>

            <h3 class="title">Kantor Kelurahan</h3>
            
            <a
            href="assets/img/img/portfolio/03-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Kantor Kelurahan"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>
      <!-- TINANGGEA END -->

      <!-- BUNGI START -->
      <div class="col-lg-4 col-md-6 portfolio-item bungin" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/04-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Bungin Permai</span>
            </div>

            <h3 class="title">Kawasan Budidaya Rumput Laut</h3>

            <a
            href="assets/img/img/portfolio/04-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Kawasan Budidaya Rumput Laut"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item bungin" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/05-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Bungin Permai</span>
            </div>

            <h3 class="title">Komoditas Unggulan Rumput Laut</h3>
            
            <a
            href="assets/img/img/portfolio/05-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Komoditas Unggulan Rumput Laut"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item bungin" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/06-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Bungin Permai</span>
            </div>

            <h3 class="title">Sentra Industri Maritim</h3>
            
            <a
            href="assets/img/img/portfolio/06-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Sentra Industri Maritim"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>
      <!-- BUNGI END -->

      <!-- TOROKEKU START -->
      <div class="col-lg-4 col-md-6 portfolio-item torokeku" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/07-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Torokeku</span>
            </div>

            <h3 class="title">Areal Desa</h3>
            
            <a
            href="assets/img/img/portfolio/07-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Areal Desa"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item torokeku" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/08-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Torokeku</span>
            </div>

            <h3 class="title">Kawasan Pengolahan Rumput Laut</h3>
            
            <a
            href="assets/img/img/portfolio/08-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Kawasan Pengolahan Rumput Laut"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item torokeku" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/09-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Torokeku</span>
            </div>

            <h3 class="title">Potret Kawasan Pesisir</h3>
            
            <a
            href="assets/img/img/portfolio/09-small.jpg"
            data-lightbox-gallery="gallery1"
            title="Potret Kawasan Pesisir"
            class="readmore" >
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>
      <!-- TOROKEKU END -->

      <!-- AKUNI START -->
      <div class="col-lg-4 col-md-6 portfolio-item akuni" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/10-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Akuni</span>
            </div>

            <h3 class="title">Potret Kawasan Desa</h3>
            
            <a
            href="assets/img/img/portfolio/10-small.jpg"
            class="readmore"
            data-glightbox="title: Potret Kawasan Desa; description:">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item akuni" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/11-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Akuni</span>
            </div>

            <h3 class="title">Daerah Pengolahan Rumput Laut</h3>
            
            <a
            href="assets/img/img/portfolio/11-small.jpg"
            class="readmore"
            data-glightbox="title: Daerah Pengolahan Rumput Laut; description:">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item akuni" >
        <article class="card-post h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/img/portfolio/12-small.jpg" class="img-fluid w-100" alt="Post image" loading="lazy">
          </div>

          <div class="content">

            <div class="meta d-flex align-items-center flex-wrap gap-2">
              <span class="cat-badge">Akuni</span>
            </div>

            <h3 class="title">Kantor Kepala Desa</h3>
            
            <a
            href="assets/img/img/portfolio/12-small.jpg"
            class="readmore"
            data-glightbox="title: Kantor Kepala Desa; description:">
            <span>Selengkapnya</span>
            <i class="bi bi-arrow-right"></i>
            </a>

          </div>

        </article>
      </div>
      <!-- AKUNI END -->


    </div>
  </div>

</section>


  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="row gy-5">

        <div class="col-lg-4">
          <div class="footer-brand">
            <a href="index.html" class="logo d-flex align-items-center mb-3">
              <span class="sitename">Story</span>
            </a>
            <p class="tagline">Innovating the digital landscape with elegant solutions and timeless design.</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="footer-links-grid">
            <div class="row">
              <div class="col-6 col-md-4">
                <h5>Company</h5>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Newsroom</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h5>Services</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Web Development</a></li>
                  <li><a href="#">UI/UX Design</a></li>
                  <li><a href="#">Digital Strategy</a></li>
                  <li><a href="#">Branding</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h5>Support</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer-cta">
            <h5>Hubungi Kami</h5>
            <a href="contact.html" class="btn btn-outline">Kontak</a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-bottom-content">
              <p class="mb-0">© <strong>Story</strong>. All rights reserved.</p>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/jquery.isotope.js"></script>
  <script src="assets/js/isotope-init.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.1.11.1.js"></script>
  <script src="js/lightbox-init.js"></script>
  <script src="assets/js/nivo-lightbox.js"></script> -->


<!-- jQuery -->
<!-- <script src="assets/js/jquery-3.7.1.min.js"></script> -->

<!-- Isotope -->
<script src="assets/js/jquery.1.11.1.js"></script>
<script src="assets/js/jquery.isotope.js"></script>

<!-- GLightbox -->
<script src="assets/js/glightbox.js"></script>

<!-- Bootstrap & AOS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>




</body>

</html>