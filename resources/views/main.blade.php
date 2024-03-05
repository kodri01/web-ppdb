<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB PELITA RAYA KOTA JAMBI</title>
    <meta content="" name="description">

    <!-- Gambar Title -->
    <link rel="icon" type="image/png" href="{{ url('assets/img/logo-pbg.png') }}">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="{{ url('assets/img/logo-pbg.png') }}" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#panduan">Panduan Pendaftaran</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li class="dropdown"><a href="#"><span>Mulai Daftar</span> <i
                                class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="{{ route('siswa.login') }}">Login</a></li>
                            <li><a href="{{ route('siswa.register') }}">Daftar</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">PPDB</h1>
                    <h1 data-aos="fade-up">SD PELITA RAYA KOTA JAMBI</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mari bergabung meraih masa depan gemilang bersama SD
                        PELITA RAYA Kota Jambi</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('siswa.login') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Mulai Daftar</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ url('assets/img/elemen-lp.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="panduan" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h2>Panduan Pendaftaran</h2>
                            <p>
                            <ul>
                                <li> Calon peserta didik membuat akun PPDB </li>
                                <li> Calon peserta didik mengisi formulir pendaftaran </li>
                                <li> Pastikan data yang dimasukkan sudah benar </li>
                                <li> Login menggunakan akun yang sudah dibuat </li>
                                <li> Menunggu pengumuman penerimaan siswa baru SD Pelita Raya Kota Jambi melalui
                                    website
                                    PPDB
                                </li>
                                <li> Melakukan daftar ulang dan melengkapi persyaratan bagi siswa yang lolos </li>
                            </ul>
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/features.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h2>Lampiran Persyaratan</h2>
                            <p>
                            <ul>
                                <li> Scan Ijazah PAUD/TK asli </li>
                                <li> Scan Dokumen Kartu Keluarga (KK) asli </li>
                                <li> Scan Dokumen Akte asli </li>
                            </ul>
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>Kontak Kami</p>
                </header>

                <div class="row gy-4">
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Alamat</h3>
                        <p> Jln. Kopral Ramli, TALANG BAKUNG, Kec. Jambi Selatan, Kota Jambi Prov. Jambi
                            36129</p>
                    </div>
                    <div class="col-md-6">
                        <a href="mailto:rosariimitantyo@yahoo.co.id">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>rosariimitantyo@yahoo.co.id</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="https://wa.me/6289691339994">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>+62 896-9133-9994</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.php" class="logo d-flex align-items-center">
                            <img src="assets/img/logo-pbg.png" alt="">
                            <span>PPDB</span>
                        </a>
                        <p>PPDB merupakan kegiatan Penerimaan Peserta Didik Baru di SD Pelita Raya Kota Jambi.
                            Kegiatan
                            PPDB
                            dapat dilakukan melalui website PPDB yang dapat memudahkan wali murid dan calon peserta
                            didik dalam melakukan pendaftaran sekolah di SD Pelita Raya Kota Jambi.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#panduan">Panduan Pendaftaran</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Get Started</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jln. Kopral Ramli, TALANG BAKUNG, <br> Kec. Jambi Selatan, Kota Jambi Provinsi Jambi<br>
                            Jambi
                            36129<br>
                            <strong>Telepon: +62 896-9133-9994</strong> -<br>
                            <strong>Email: rosariimitantyo@yahoo.co.id</strong> -<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; <strong><span>Universitas Dinamika Bangsa</span></strong> | {{ \Carbon\Carbon::now()->year }}
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
