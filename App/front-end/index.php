    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include 'includes/session.php'; ?>
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


        <!-- Template Main CSS File -->
        <link href="../../template/Gp/assets/css/styles.css" rel="stylesheet">
    </head>

    <body>


    






    
        <!-- ======= Header no-login ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-lg-between">
                <h1 class="logo auto me-lg-0"><a href="index.php" class="logo auto lg-0"><img src="../img/logo.png" alt="" class="img-fluid px-4"></a><a href="index.php"><span>Zona Futsal</span> Purwakarta.</a></h1>
                <nav id="navbar" class="navbar order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" onclick="scrollwin()">Home</a></li>
                        <li><a class="nav-link scrollto" href="#">Contact</a></li>
                        <?php
          if (isset($_SESSION['user'])) {
            echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">Hai, ' . $user['nama_depan'] . ' ' . $user['nama_belakang'] . '</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <p class="text-center">
                        ' . $user['nama_depan'] . ' ' . $user['nama_belakang'] . '
                      </p>
                    </li>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
          } else {
            echo "
                <li><a href='login.php'>LOGIN</a></li>
                <li><a href='register.php'>SIGNUP</a></li>
              ";
          }
          ?>
                        </ul>
                    <i class=" bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>




        <!-- ======= Header login ======= -->
        <!-- <header id="header" class="fixed-top">
                    <div class="container d-flex align-items-center justify-content-lg-between">
                        <h1 class="logo auto me-lg-0"><a href="index.php" class="logo auto lg-0"><img src="../img/logo.png" alt="" class="img-fluid px-4"></a><a href="index.php"><span>Zona Futsal</span> Purwakarta.</a></h1>
                        <nav id="navbar" class="navbar order-lg-0">
                            <ul>
                                <li><a class="nav-link scrollto active" onclick="scrollwin()">Home</a></li>
                                <li><a class="nav-link scrollto" href="#">Contact</a></li>
                                
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hai Yana
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <li><button class="dropdown-item" type="button" onclick="window.location.href='profil.php';">Profil</button></li>
                                        <li><button class="dropdown-item" type="button">Logout</button></li>
                                    </ul>
                                </div>
                            </ul>
                            <i class=" bi bi-list mobile-nav-toggle"></i>
                        </nav>
                    </div>
                </header> -->

        <!-- ======= Banner ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Zona Futsal Purwakarta<span>.</span></h1>
                        <h2>Tempat Booking Lapang Putsal di Purwakarta</h2>
                    </div>
                </div>
                <div class=" justify-content-center mt-4" data-aos="zoom-in" data-aos-delay="250">
                    <button onclick="scrollwin()" class="btn btn-button btn-success btn-lg expore">Explore <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">
            <section id="team" class="team">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p>Daftar GOR</p>
                    </div>
                    <!-- search -->
                    <div class="row mb-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 ml-auto">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" href="#">Search</button>
                                <div class="dropdown" style="margin-left: 20px;"">
                                    <a class=" btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-funnel-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Default</a></li>
                                        <li><a class="dropdown-item" href="#">Jarak Terdekat</a></li>
                                        <li><a class="dropdown-item" href="#">Harga termurah</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <!-- End Search -->

                    <?php
                    $conn = $pdo->open();
                    try {
                        $inc = 3;
                        $stmt = $conn->prepare("SELECT * FROM gor");
                        $stmt->execute();
                        foreach ($stmt as $row) {
                            $image = (!empty($row['foto_gor'])) ? '../img/' . $row['foto_gor'] : '../img/lapangan.png';
                            $inc = ($inc == 3) ? 1 : $inc + 1;
                            if ($inc == 1) echo "<div class='row'>";
                            echo "
                                    <div class=' col-lg-4 col-md-6 d-flex align-items-stretch'>
                                        <div class='member' data-aos='fade-up' data-aos-delay='100'>
                                        <div class='member-img'>
                                            <img src='" . $image . "' class='img-fluid' alt=' href='login.php'>
                                        </div>
                                        <div class='member-info'>
                                            <h4>" . $row['nama_gor'] . "</h4>
                                            <div class='row'>
                                                <div class='col'>
                                                    <h5><i class='bi bi-geo-alt-fill'></i>" . $row['alamat_gor'] . "</h5>
                                                </div>
                                                <div class='col  justify-content-right'>
                                                    <h5>999 KM dari anda</h5>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <button class='btn btn-success mt-4'>
                                                <a href='detail_lapangan.php?id=".$row['id_gor']."'style='color: white;'> Lihat Detail </a> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                ";
                            if ($inc == 3) echo "</div>";
                        }
                        if ($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
                        if ($inc == 2) echo "<div class='col-sm-4'></div></div>";
                    } catch (PDOException $e) {
                        echo "There is some problem in connection: " . $e->getMessage();
                    }
                    $pdo->close();
                    ?>
                </div>
                </div>
            </section><!-- End Team Section -->
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
        <script>
            function scrollwin() {
                window.scrollTo(0, 900);
            }
        </script>

    </body>

    </html>