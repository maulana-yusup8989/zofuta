<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Zona Futsal Purwakarta</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- <link href="../Gp/assets/img/favicon.png" rel="icon"> -->
    <link href="../../assets/img/apple-touch-icons.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../../template/Gp/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../template/Gp/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <!-- Template Main CSS File -->
    <link href="../../template/Gp/assets/css/styles.css" rel="stylesheet">
    <link href="../../template/Gp/assets/cssform-validation.css" rel="stylesheet">
    <link href="../../template/Gp/assets/css/tabel.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo auto me-lg-0"><a href="index.php" class="logo auto lg-0"><img src="../img/logo.png" alt="" class="img-fluid px-4"></a><a href="index.php"><span>Zona Futsal</span> Purwakarta.</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <nav id="navbar" class="navbar order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" onclick="scrollwin()">Home</a></li>
                    <li><a class="nav-link scrollto" href="#">Contact</a></li>
                    <button class="btn btn-success scrollto fw-bold" onclick="window.location.href='login.php';" style=" margin-left: 20px;">Login</button>
                </ul>

                <i class=" bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->


    <main id="main">
        <!-- ======= Keterangan Gor ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h4>Alamat</h4>
                            <p>Jl. Taman Pahlawan No. 205, Ds. Purwamekar, Kec. Purwakarta</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bi bi-alarm-fill"></i>
                            <h4>Jam Operasional</h4>
                            <br>

                            <p class="fw-bold">Weekday</p>
                            <p>Senin s/d Jumat : 08.00 - 24.00 </p>
                            <br>
                            <p class="fw-bold">Weekend & Tanggal Merah</p>
                            <p>Sabtu - Minggu : 08.00 - 24.00 </p>

                        </div>
                    </div>
                    <div class="image col-lg-6 rounded" style='background-image: url("../img/Lapangan/lapangan.png"); padding-top: 200px;' data-aos="fade-right"></div>
                </div>
            </div>
        </section><!-- End-Keterangan Gor -->

        <!-- Jadwal Lapangan -->
        <section id="team" class="team">
            <div class="container rounded" data-aos="fade-up" style="background-color: #D9D9D94D;">
                <div class="section-title text-center">
                    <!-- <h2>Team</h2> -->
                    <p>Jadwal Lapangan</p>
                </div>
                <!-- End Search -->
                <div class="container rounded">
                    <?php
                    include 'lapang.php' ?>
                </div>
            </div>
        </section>
        <!-- End Jadwal Lapangan -->

        <!-- Form Booking -->
        <section id="team" class="team ">
            <div class="container rounded " data-aos="fade-up">
                <div class=" section-title text-center">
                    <p>Form Booking</p>
                </div>
                <div class="row mt-2">
                    <form class="needs-validation col-12" novalidate>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="country" class="form-label">Pilih Lapangan</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="country" class="form-label">Plih Tanggal Main</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Jam Mulai</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="state" class="form-label">Jam Selesai</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-2">
                                <span class="badge bg-success rounded-pill">2 Jam</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-check">
                            <span class="text-success">Harga</span>
                            <h4 class="mb-3">Rp.0 Ribu</h4>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-success btn-lg" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Checkout</button>
                    </form>
                </div>
        </section>
        <!--End Form Booking -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                <strong><span style="color:green;">&copy; ZONA FUTSAL</span> PURWAKARTA</strong>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="../../template/Gp/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../template/Gp/assets/vendor/aos/aos.js"></script>
    <script src="../../template/Gp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../template/Gp/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../template/Gp/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../template/Gp/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../template/Gp/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../template/Gp/assets/js/main.js"></script>
    <script src="../../template/Gp/assets/js/form-validation.js"></script>
    <script>
        const scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbar-example2'
        })
        $(document).ready(function() {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    </script>

</body>

</html>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- Columns are always 50% wide, on mobile and desktop -->
                    <p class="fw-bold text-success">Detail Pemesanan</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 fw-bold">
                            Nama Pesanan
                        </div>
                        <div class="col-6 fw-bold">Jam Main</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Yana
                        </div>
                        <div class="col-6">09.00-08.00 </div>
                    </div>
                    <div class="row">
                        <div class="col-6 fw-bold">Nama Gor</div>
                        <div class="col-6 fw-bold">Tanggal Mian</div>
                    </div>
                    <div class="row">
                        <div class="col-6 ">King Futsal</div>
                        <div class="col-6">25 Novemver 2022 </div>
                    </div>
                    <div class="row">
                        <div class="col-6 fw-bold">Nama Lapangan</div>
                        <div class="col-6 fw-bold">Harga</div>
                    </div>
                    <div class="row">
                        <div class="col-6 ">Lapangan 1</div>
                        <div class="col-6">Rp.90.000 </div>
                    </div>

                    <hr>
                    <p class="fw-bold text-success">Detail Pembayaran</p>
                    <hr>
                    <div class="row">
                        <div class="col-6 fw-bold">
                            No Rekening
                        </div>
                        <div class="col-6 fw-bold">Jenis Pembayaran</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            0948329483029 (BCA)
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    DP (50%)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Full
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-check-label fw-bold" for="flexRadioDefault1">Bukti Pembayaran
                            <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="location.href='profil.php'" ;>Verifikasi Pembayaran</button>
            </div>
        </div>
    </div>
</div>