<?php ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{url('assets/images/fav.png')}}" type="image/png">
    <title>BERITA MASA DEPAN</title>
    <link rel="stylesheet" href="{{url('assets/dist-2/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/dist-2/css/responsive.css')}}">
    <style type="text/css">
        .home_banner_area .banner_inner .overlay {
            background: url('{{url('assets/images/bgrn.jpg')}}') no-repeat scroll center center;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 121%;
            bottom: 0;
            z-index: -1;
        }
    </style>
</head>
<body>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index"><img src="{{url('assets/images/logooo.png')}}" alt="" style="width: 249px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href=""></a></li>
                        <li class="nav-item"><a class="nav-link" href=""></a></li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item submenu dropdown">
                            <a href="#" style="padding-right: 65px; float: right" class="nav-link dropdown-toggle" id="username" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AKUN</a>
                            <ul class="dropdown-menu" style="width: 0px">
                                <!-- if else 'login' -->
                                <?php
                                    if(!session()->get('username')){
                                        echo '
                                        <li class="nav-item"><a class="nav-link" href="">DAFTAR AKUN</a></li>
                                        <li class="nav-item"><a class="nav-link" href="news/login">LOGIN</a></li>
                                        ';
                                    }else{
                                        echo '
                                        <li class="nav-item"><a class="nav-link" href="">Kirim Berita</a></li>
                                        <li class="nav-item"><a class="nav-link" href="news/logout">LOGOUT</a></li>
                                        ';
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h3 style="color: #212529">PORTAL<br>BERITA MASA DEPAN</h3>
                <h5 style="color: #ca2819">Tercepat. Terlengkap. Terpercaya.</h5>
            </div>
        </div>
    </div>
</section>

<section class="offer_area p_120">
    <div class="container">
        <div class="offer_title">
            <h5>BERITA TERKINI</h5>
        </div>
        <div class="row offer_inner">
            <!-- start here -->
            <?php
            $servername = "localhost";$username = "root";$password = "";$dbname = "db_news";
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * from berita";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo '
                    <div class="col-lg-4" style="padding-bottom: 5%">
                    <div class="offer_item">
                    <a href="#">
                        <img class="img-fluid" src="assets/images/offer/Mudah.jpg" alt="">
                        <div class="offer_text">
                            <h4>'.$row['judul'].'</h4>
                            <p>'.$row['isi'].'</p>
                        </div>
                    </a>
                    </div>
                </div>
                ';
            }
            $conn->close();
            ?>


        </div>
    </div>
</section>

<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-0  col-md-12 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Portal Berita Masa Depan</h6>
                    <p>Merupakan situs portal berita terlengkap di dunia, mulai dari berita yang sudah terjadi sampai berita yang akan terjadi ada disini.</p>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Hak cipta dilindungi | Template ini dibuat <i class="fa fa-heart-o" aria-hidden="true"></i> oleh <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
            <div class="col-lg-4 col-md-4 footer-social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-github"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

<script src="{{url('assets/dist-2/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('assets/dist-2/js/popper.js')}}"></script>
<script src="{{url('assets/dist-2/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/dist-2/js/stellar.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/dist-2/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{url('assets/dist-2/vendors/counter-up/jquery.counterup.js')}}"></script>
<script src="{{url('assets/dist-2/js/mail-script.js')}}"></script>
<script src="{{url('assets/dist-2/js/theme.js')}}"></script>
</body>
</html>

