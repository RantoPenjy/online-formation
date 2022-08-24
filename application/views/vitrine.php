<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OWL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/mentor/img/favicon.png" rel="icon">
  <link href="assets/mentor/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Font-awesome -->
  <link href="<?= base_url('assets/fontawesome6/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome6/css/fontawesome.min.css') ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/mentor/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/bootstrap-icons/bootstrap-icons.css"') ?> rel=" stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/mentor/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/mentor/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: assets/mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/assets/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url('/') ?>">OWL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/mentor/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="#about">A propos</a></li>
          <li><a href="#">Nos missions</a></li>
          <li><a href="#popular-courses">Nos filières</a></li>
          <li><a href="#trainers">Notre Equipe</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('/inscription') ?>" id="sinscrire">S'inscrire</a>


      <a href="" class="get-started-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center shadow">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>OWL - Online Web Learning,<br>Apprendre pour son avenir</h1>
      <h2>Le site web de formation en ligne de l'université OWL</h2>
      <a href="<?= base_url('/inscription') ?>" class="btn-get-started">S'inscrire</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
      <div class="container" data-aos="fade-up">
        <div class="row text-center mt-5 section-title">
          <h1>
            <p>à propos de nous</p></b>
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?= base_url('assets/mentor/img/about.jpg') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Université OWL</h3>
            <p class="fst-italic">
              La réussite à la portée de tous.
            </p>
            <p>
              OWL est une université privée, créée en Novembre 2021 par Monsieur <b>RAKOTOARIVELO Jean Baptiste</b>.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose assets/mentor?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title mt-4 text-center">
          <h1></h1>
          <p>Nos filières</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url('assets/mentor/img/course-1.jpg') ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <h3><a href="course-details.html">Informatique</a></h3>
                <p>
                  Génie logiciel, Algorithme, Mathématique appliquée, Bureautique, Langage de programmation
                  (C/C++, Java, VB, PHP, Js, ...), Maintenance système informatique, Télécommunication et réseau,
                  Géstion de base de données
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="<?= base_url('assets/mentor/img/course-2.jpg') ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <h3><a href="course-details.html">Gestion</a></h3>
                <p>
                  Initiation juridique, Droit commercial, Organisation d'entreprise, Comptabilité générale et
                  financière, Marketing, Economie, Statistique et probabilité
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="<?= base_url('assets/mentor/img/course-3.jpg') ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <h3><a href="course-details.html">Multimédia</a></h3>
                <p>
                  Et architecto provident deleniti facere repellat nobis iste.
                  Error dignissimos suscipit aut expedita reiciendis, vero magnam rerum aliquid natus in deleniti consequuntur eaque corporis id dolore deserunt amet quis illo.
                </p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row text-center mt-5 section-title">
          <h1>
            <p>Notre équipe</p>
          </h1>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url('assets/mentor/img/trainers/trainer-1.jpg') ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4>RANDRIANARIVELO Mathieu</h4>
                <span>Responsable filière informatique</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url('assets/mentor/img/trainers/trainer-2.jpg') ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Responsable filière géstion</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url('assets/mentor/img/trainers/trainer-3.jpg') ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Responsable filière multimédia</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center mb-3">
            <h3>Se connecter</h3>
          </div>
          <div class="d-flex flex-column text-center">

          <!-- ====== Login Form ====== -->
            <form method="post" action="<?= base_url('/login') ?>">
              <div class="form-floating mb-3">
                <input name="mail" type="email" class="form-control ps-4" id="email1" placeholder="Votre adresse email" required>
                <label for="floatingEmail" class="ms-3">Votre adresse email</label>
              </div>
              <div class="form-floating mb-4">
                <input name="password" type="password" class="form-control ps-4" id="password1" placeholder="Votre mot de passe" required>
                <label for="floatingPassword" class="ms-3">Votre mot de passe</label>
              </div>
              <div class="form-group mb-2">
                <button type="submit" class="form-control btn btn-lg">Connexion</button>
              </div>
            </form>

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">Pas de compte?
            <a href="<?= base_url('/inscription') ?>" class=""> S'inscrire</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Université OWL</h3>
            <p>
              Lot 062 D Andranomena<br>
              Ambohimanarina, Antananarivo 101<br>
              Madagascar <br><br>
              <strong>Phone:</strong> +261 38 35 844 21<br>
              <strong>Email: </strong><a href="mailto:contact@universite-owl.com">contact@universite-owl.com</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Lien</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/inscription') ?>">Inscription</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos missions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#popular-courses">Nos filières</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#trainers">Notre équipe</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos filières</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Developpement web</li>
              <li><i class="bx bx-chevron-right"></i>Developpement logiciel</li>
              <li><i class="bx bx-chevron-right"></i>Administration système</li>
              <li><i class="bx bx-chevron-right"></i>Management d'entreprise</li>
              <li><i class="bx bx-chevron-right"></i>commerce internationnal</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="margin-top: 18px;"></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Finances et comptabilité</li>
              <li><i class="bx bx-chevron-right"></i>Trade Marketing</li>
              <li><i class="bx bx-chevron-right"></i>Graphic Design</li>
              <li><i class="bx bx-chevron-right"></i>Vidéo</li>
              <li><i class="bx bx-chevron-right"></i>Son</li>
            </ul>
          </div>

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post" class="mt-4">
              <input type="email" name="email" class="form-control" placeholder="Votre message" required>
              <input type="submit" value="Subscribe" class="mt-2">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Ranjalia</span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/assets/mentor-free-education-bootstrap-theme/ -->
          Design par <a href="https://bootstrapmade.com/">BootstrapMade</a>
          et codé par <a href="https://web.facebook.com/Rantomanana.Rakoto">Ranjalia</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-caret-up"></i></a>

  <?php if (isset($_GET['error'])) : ?>
    <div class="flash-data" data-flashdata="<?= $_GET['error']; ?>"></div>
  <?php endif; ?>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/mentor/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?= base_url('assets/mentor/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/mentor/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/mentor/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/mentor/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Fontawesome 6 JS -->
  <script src="<?= base_url('assets/fontawesome6/css/fontawesome.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/mentor/js/main.js') ?>"></script>

  <!-- Script Sweetalert -->
  <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
  <script>
    const flashdata = $('.flash-data').data('flashdata')
    if (flashdata) {
      Swal.fire({
        icon: 'error',
        title: 'Connexion echoué',
        text: 'Adresse mail ou mot de passe incorrect'
      })
    }
  </script>


</body>

</html>