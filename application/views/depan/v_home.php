<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Platform untuk software house dan situs web e-commerce untuk bisnis Anda yang memenuhi kebutuhan Anda 🛒.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot-news" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta property="og:title" content="Platform software house dan web e-commerce." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="keywords" content="iegcode, iegcodeacademy, software house iegcode, e-commerce, ieg, code, coding, iegcode teknologi, company iegcode">
    <meta property="og:url" content="https://www.iegcode.com/"/>
    <meta property="og:description" content="Platform untuk software house dan situs web e-commerce untuk bisnis Anda yang memenuhi kebutuhan Anda 🛒."/>
    <meta property="og:image" content="https://profil.iegcode.com/theme/images/ieg.png"/>
    <title>SELAMAT DATANG DI PROFIL IEGCODE</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/ieg.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <link rel="canonical" href="https://iegcode.com" />
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
    <style type="text/css">
        body {
            overflow-x: hidden;
            /* Menyembunyikan scroll horizontal */
            margin: 0;
            /* Menghilangkan margin default dari body */
            padding: 0;
            /* Menghilangkan padding default dari body */
        }

        .container {
            max-width: 100%;
            /* Menyediakan batasan lebar maksimal pada kontainer utama */
            overflow: hidden;
            /* Menghindari elemen meluber dari kontainer */
        }

        .marg {
            margin-top: 21px;
            padding-left: 15%;
            padding-right: 15%;
            box-sizing: border-box;
            /* Memastikan padding dihitung dalam lebar total elemen */
        }

        .btn-default {
            text-transform: uppercase;
            color: #fff;
            background: none;
            border: 3px solid #047afe;
            font-size: 18px;
            padding: 16px 36px;
            border-radius: 0;
            box-sizing: border-box;
            /* Memastikan padding dihitung dalam lebar total elemen */
        }

        .btn-default:hover {
            color: #fff;
            background: #267ae8;
            border: 3px solid #267ae8;
        }

        .jurusan-box {
            border-radius: 15px 15px 15px 70px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            min-width: 380px;
            width: 100%;
            /* Mengatur lebar menjadi 100% agar responsif */
            max-width: 380px;
            /* Menetapkan lebar maksimal untuk elemen */
            height: 250px;
            background-color: #f2f2f2;
            margin: auto;
            margin-top: 30px;
            box-sizing: border-box;
            /* Memastikan padding dan border dihitung dalam lebar total elemen */
        }

        .sle a {
            color: #047afe;
        }

        .sle a:hover {
            color: black;
        }

        .d-block {
            width: 100%;
            max-height: 200px;
            margin: auto;
            object-fit: cover;
            box-sizing: border-box;
            /* Memastikan padding dihitung dalam lebar total elemen */
        }

        @media screen and (max-width: 500px) {
            .d-block {
                max-height: 100px;
            }
        }

        .partimg {
            width: 100%;
            height: auto;
            display: block;
            /* Menghindari gambar melebihi kontainer */
            box-sizing: border-box;
            /* Memastikan padding dan border dihitung dalam lebar total elemen */
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
            box-sizing: border-box;
            /* Memastikan padding dan border dihitung dalam lebar total elemen */
        }

        /* Add a transparency effect for thumbnail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 12px 16px;
            color: white;
        }

        .slebew {
            background-color: #047afe;
            border-color: #047afe;
            font-size: 26px;
        }

        .slebew:hover {
            background-color: #267ae8;
            border-color: #267ae8;
            font-size: 26px;
        }

        @media (max-width: 767px) {
            .header-top_address {
                text-align: center;
            }

            .header-top_list {
                margin-bottom: 10px;
            }

            .navbar-brand img {
                width: 50%;
            }

            .carousel-item img {
                max-height: 400px;
                object-fit: cover;
                width: 100%;
            }

            .btn-default {
                font-size: 16px;
                padding: 12px 24px;
            }

            .jurusan-box {
                width: 100%;
                margin: 10px 0;
                padding: 15px;
                box-sizing: border-box;
                /* Memastikan padding dihitung dalam lebar total elemen */
            }

            .partimg {
                width: 100%;
                height: auto;
            }

            .column {
                width: 100%;
                float: none;
            }

            .slebew {
                font-size: 22px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            h4 {
                font-size: 16px;
            }
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .marg {
            margin: 15px;
            padding: 0 10%;
        }

        .btn-default {
            padding: 12px 24px;
        }
    </style>


</head>

<body>
    <!--============================= HEADER =============================-->
    <style type="text/css">
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
                                    <a class="nav-link active" href="<?php echo site_url(''); ?>" style="color: #267ae8;border-bottom: 3px solid #267ae8;"><b>HOME</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about'); ?>"><b>PROFIL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswabaru'); ?>"><b>PSB</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran'); ?>"><b>PENDAFTARAN</b></a>
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
    <section>
        <style type="text/css">
            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
            }
        </style>
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="<?php echo base_url() . 'theme/images/bg1.png' ?>" alt="First slide" style="opacity: 10;min-height:600px;max-height: 800px;">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <br>
                                <br>
                                <h1>Pendaftaran Membership</h1>
                                <div class="slider-btn">
                                    <!-- <a href="<?php echo site_url('pendaftaran'); ?>" class="btn btn-default">Segera Daftar Sekarang</a> -->
                                    <a href="https://iegcode.com/welcome" class="btn btn-default">Segera Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url() . 'theme/images/bg2.png' ?>" alt="Second slide" style="opacity: 10;min-height:600px;max-height: 800px;">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Konsultasi Layanan Service</h1>
                                <h4>Proses proyek mencakup penilaian kebutuhan klien, rekomendasi solusi, perencanaan, pelatihan, uji coba, manajemen risiko, evaluasi, dan dokumentasi untuk memastikan solusi optimal dan sesuai tujuan bisnis.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END HEADER -->

    <!--//END EVENTS -->
    <section class="our_courses" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
        <div class="container">
            <div class="row" align="center">
                <div lass="col-md-12" style="text-align:center;">
                    <h2>Mengapa Harus Memilih IEGCODE</h2>
                    <div class="row" style="display: flex;
  justify-content: center;
  align-items: center;" align="center">
                        <!-- <H2><a href="<?php echo site_url('pendaftaran'); ?>" align="center" style="" class=" btn btn-primary slebew" >Segera Daftar Sekarang</a></H2> -->
                    </div><!-- // end .col-sm-7 -->
                    <div class="row">
                        <p>
                            Platform untuk software house dan situs web e-commerce untuk bisnis Anda yang memenuhi kebutuhan Anda 🛒. Iegcode memiliki beberapa fitur tambahan baru seperti obrolan AI, permainan gratis, dan sumbangan biaya Alisan.
                            Selain itu, menyediakan layanan yang diperlukan seperti riwayat pelanggan, profil khusus, dan yang lebih penting, keamanan data, dengan keunggulan sebagai berikut :
                        </p>

                    </div><!-- // end .row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p1.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p2.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p3.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                    </div><!-- // end .row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p4.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p5.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url() . 'theme/images/p6.png' ?>" style="width: 100%; padding-top: 10%; border-radius: 50px;">
                        </div>
                    </div>
                </div>
    </section>
    <style>
        .our_courses p {
            line-height: 1.6;
            /* Menambah jarak antara baris untuk keterbacaan */
            padding: 0 40px;
            /* Memberikan sedikit padding di kiri dan kanan */
            text-align: justify;
            /* Membuat teks rata kiri dan kanan */
        }

        /* CSS untuk menyesuaikan paragraf pada layar ponsel */
        @media only screen and (max-width: 767px) {
            .our_courses p {
                font-size: 14px;
                /* Mengurangi ukuran font pada layar kecil */
                line-height: 1.6;
                /* Menambah jarak antara baris untuk keterbacaan */
                padding: 0 40px;
                /* Memberikan sedikit padding di kiri dan kanan */
                text-align: justify;
                /* Membuat teks rata kiri dan kanan */
            }

            .our_courses h2 {
                font-size: 24px;
                /* Menyesuaikan ukuran judul */
                margin-bottom: 20px;
                /* Mengurangi jarak bawah */
            }
        }
    </style>


    <section class="event" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 20px 90px 4px;">
        <div class="container" style="" align="center">
            <div class="row" align="center" style="width: 100%;text-align: center;">
                <div class="col-md-12" align="center">

                    <h2>Jenjang Pendidikan</h2>
                </div>
            </div>
        </div>
        <div class="container" style="" align="center">

            <div class="row">
                <div class="jurusan-box">
                    <div class="row mt-3" style="margin-bottom: 13px;height: 100px;">
                        <img src="<?php echo base_url() . 'theme/images/iegacademy.png' ?>" style="width: 80px;height: 80px;">
                        <div class="row" style="margin-left: 9px;margin-top: 30px;">
                            <h4 style="margin-left: 13px;"><b>IEGACADEMY</b></h4>
                        </div>
                    </div>

                    <div class="row">
                        <p align="left">Platform pembelajaran online berbagai kursus untuk meningkatkan keterampilan Anda melalui iegcode.</p>
                    </div>

                    <div class="row sle">
                        <p style="margin-left: 190px;"><a href="<?php echo site_url('pendaftaran'); ?>">Selengkapnya <i class='fa fa-arrow-right'></i></a></p>
                    </div>
                </div>

                <!-- <div class="jurusan-box" style="position: relative;">
                    <div class="row" style="padding-left: 50px;margin-top: 21px;padding-right: 50px;">
                        <div class="row" style="margin-bottom: 13px;height: 100px;">
                            <img src="<?php echo base_url() . 'theme/images/iegacademy.png' ?>" style="width: 80px;height: 80px;">
                            <div class="row" style="margin-left: 9px;margin-top: 17px;">
                                <h4><b>COMINGSOON</b></h4>
                            </div>
                        </div>

                        <div class="row">
                            <p align="left">Untuk Info lebih lengkap terkait<br>dapat di lihat di sini</p>
                        </div>
                        <div class="row sle" style="position: absolute;  bottom: 0;">
                            <p style="margin-left: 190px;"><a href="<?php echo site_url('soon'); ?>">Selengkapnya <i class='fa fa-arrow-right'></i></a></p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <style>
        .jurusan-box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding-left: 40px;
            padding-right: 50px;
            margin-top: 21px;
        }

        @media only screen and (max-width: 767px) {
            .jurusan-box {
                margin-left: 5px;
                padding-left: 20px;
                /* Mengurangi padding untuk layar kecil */
                padding-right: 20px;
            }

            .jurusan-box .row.sle {
                margin-left: 0;
                margin-top: 20px;
                text-align: center;
                /* Menyelaraskan teks ke tengah */
            }
        }
    </style>

    <!--============================= EVENTS =============================-->
    <section class="our_courses" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
        <div class="container" style="">

            <div class="row">

                <div class="col-lg-6">
                    <h2 class="text-center">Agenda 🔖</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row): ?>
                                <div class="event_date">
                                    <div class="event-date-wrap" style="background: #000000;">
                                        <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                        <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3><a style="color: #000000;" href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                    <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h2 class="text-center">Pengumuman 📌</h2>
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) : ?>
                            <div class="row">

                                <div class="col-sm-12">
                                    <h3><a style="color: #000000;" href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                    <span style="color:#047afe"><?php echo $row->tanggal; ?></span>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div><!-- // end .col-sm-7 -->
                            </div><!-- // end .row -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============================= OUR COURSES =============================-->
    <section class="event" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 20px 90px 4px; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Video</h2>
                <br><br>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <iframe style="width: 100%; height: 300px;" allowfullscreen="allowfullscreen"
                    mozallowfullscreen="mozallowfullscreen"
                    msallowfullscreen="msallowfullscreen"
                    oallowfullscreen="oallowfullscreen"
                    webkitallowfullscreen="webkitallowfullscreen"
                    src="https://www.youtube.com/embed/ELU66v5k-RI">
                </iframe>
            </div>
            <div class="col-lg-6" style="text-align: justify;">
                <p><b>Tutorial Register Account, Checkout and Payment Order</b><br><br>
                    Tonton video berikut untuk mengetahui proses dan langkah-langkah mudah membuat akun di IEGCODE dan langkah-langkah proses checkout pesanan dan pembayaran setelah produk Anda pesan. Silakan tonton video tutorial kami untuk penjelasan lebih lengkap.😉</p>
            </div>
        </div>
    </div>
</section>

    <!--//END OUR COURSES -->

    <section class="our_courses" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; padding: 40px 0;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Client</h2>
            </div>
        </div>
        <div class="logo-container mt-4">
            <div class="logo">
                <img src="<?php echo base_url() . 'theme/images/eskamuga.png' ?>" alt="Eskamuga" />
                <img src="<?php echo base_url() . 'theme/images/soim.png' ?>" alt="SOIM" />
                <img src="<?php echo base_url() . 'theme/images/nst.png' ?>" alt="NST" />
                <img src="<?php echo base_url() . 'theme/images/buyr.png' ?>" alt="Buyr" />
                <img src="<?php echo base_url() . 'theme/images/cleanee.png' ?>" alt="Cleanee" />
                <img src="<?php echo base_url() . 'theme/images/swift.png' ?>" alt="Swift" />
                <img src="<?php echo base_url() . 'theme/images/nandan.png' ?>" alt="Nandan" />
            </div>
        </div>
    </div>
</section>

<style>
    .logo-container {
        overflow: hidden;
        display: flex;
        align-items: center;
        position: relative;
        height: 5rem;
    }

    .logo {
        display: flex;
        flex-shrink: 0;
        gap: 3rem;
        padding: 1rem;
        animation: infinite-scroll 10s linear infinite;
    }

    .logo img {
        height: 3rem;
        object-fit: contain;
    }

    @keyframes infinite-scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    @media (max-width: 768px) {
        .logo-container {
            height: 4rem;
        }
        .logo img {
            height: 2.5rem;
        }
        .logo {
            gap: 2rem;
        }
    }
</style>

<script>
    // Duplicate the logo row for smooth infinite scrolling
    const logo = document.querySelector(".logo").cloneNode(true);
    document.querySelector(".logo-container").appendChild(logo);
</script>

    <?php
    $this->load->view('depan/Crumbs/v_footer');
    ?>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
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