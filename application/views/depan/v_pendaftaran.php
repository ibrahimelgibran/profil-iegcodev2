<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PENDAFTARAN IEGCOCDE</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/ieg.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <style type="text/css">
        /* Menyembunyikan scroll horizontal */
        body {
            overflow-x: hidden;
            margin: 0; /* Menghilangkan margin default dari body */
            padding: 0; /* Menghilangkan padding default dari body */
        }

        /* Mengatur container utama agar responsif */
        .container {
            max-width: 100%;
            overflow: hidden;
            padding: 0 15px; /* Memberikan padding kiri dan kanan */
            box-sizing: border-box;
        }

        /* Mengatur navbar agar tidak meluber */
        .navbar {
            width: 100%;
            box-sizing: border-box;
        }

        /* Mengatur gambar agar tidak meluber dari kontainer */
        .img-fluid {
            max-width: 100%;
            height: auto;
            box-sizing: border-box;
        }

        /* Mengatur iframe agar responsif */
        iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
        .nav-menu2 .navbar-light .navbar-nav .nav-link:hover {
            color: #267ae8;
            border-bottom: 3px solid #267ae8;
        }
    </style>
    <!--============================= HEADER =============================-->
    <div class="header-topbar" style="background: #000000;">
        <div class="container" style=" width: 100%;">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>+62 858 7607 6005
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>elgibran@iegcode.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Sleman, Yogyakarta.
                        </div>
                    </div>
                    <div class="header-top_login2" style="">
                        <a href="<?php echo site_url('Contact'); ?>">HUBUNGI KAMI</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('Contact'); ?>">HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2" style="width: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a style="padding-left: 5px;" href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="35%;" src="<?php echo base_url() . 'theme/images/iegcode.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="float: right;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>"><b>HOME</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about'); ?>"><b>PROFIL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswabaru'); ?>"><b>PSB</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran'); ?>" style="color: #267ae8;
    border-bottom: 3px solid #267ae8;"><b>PENDAFTARAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog'); ?>"><b>ARTIKEL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>"><b>PENGUMUMAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>"><b>AGENDA</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download'); ?>"><b>DOWNLOAD</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>"><b>GALERI</b></a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->
    <!--//END ABOUT IMAGE -->
    <!--============================= WELCOME TITLE =============================-->
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <img src="<?php echo base_url() . 'theme/images/psb1.png' ?>" class="img-fluid" alt="#">
                <div class="col-md-12" align="center">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdKr1wVdgU7yA2dXm0IzZEEgQpCfE8xtdawTqLmjng1SX8i0w/viewform?embedded=true" width="800" height="1267" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    

    <?php
    $this->load->view('depan/Crumbs/v_footer');
    ?>
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>