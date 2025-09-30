<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Emas Mekar</title>
    <link rel="icon" href="assets/images/MEKAR JEWRLY 2-01.png" type="image/png" sizes="192x192">


    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="MEKAR JEWRLY 2-01.png" width="140" height="90" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">Tentang</a></li>
                                <li><a href="#menu">Perhiasan</a></li>
                                <li><a href="#gallery">Lokasi</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Kontak Kami</a></li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            <form action="#" class="header-search-form for-des">
                                <input type="search" class="form-input" placeholder="Search Here...">
                                <button type="submit">
                                    <i class="uil uil-search"></i>
                                </button>
                            </form>
                            <a href="cart/cart.html" class="header-btn header-cart">
                                <i class="uil uil-shopping-bag"></i>
                                <span class="cart-number">3</span>
                            </a>
<!-- User -->
<?php if (isset($_SESSION['user_id'])): ?>
    <!-- Jika user sudah login: arahkan ke halaman edit profil -->
    <a href="edit_profile.php" class="header-btn header-user">
        <i class="uil uil-user-md"></i>
        <span class="cart-number">1</span> <!-- opsional, bisa jadi jumlah notifikasi/profile -->
    </a>
<?php else: ?>
    <!-- Jika user belum login: arahkan ke halaman login -->
    <a href="Login/login.php" class="header-btn header-user">
        <i class="uil uil-user-md"></i>
    </a>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="https://img2.pngdownload.id/20180206/kxw/av275dc8z.webp" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="https://png.pngtree.com/png-vector/20240729/ourmid/pngtree-classic-gold-bangle-bracelet-timeless-jewelry-for-every-occasion-png-image_13274415.png"
                            alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Selamat Datang Di Toko
                                        <span>Mekar</span>
                                        Emas
                                    </h1>
                                    <p style="text-align: justify;">Selamat datang di Toko Mekar Emas, pusat perhiasan
                                        berkualitas yang menawarkan berbagai
                                        koleksi emas dan perhiasan pilihan. Temukan keindahan dan keanggunan perhiasan
                                        emas
                                        kami yang dirancang khusus untuk melengkapi penampilan Anda. Kami berkomitmen
                                        memberikan kualitas terbaik dan layanan ramah untuk setiap pelanggan.</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Perhiasan Lainnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img"
                                        style="background-image: url(https://www.passionjewelry.co.id/uploads/rekomendasi-model-cincin-emas-wanita-terbaru-unik-dan-menarik-147-2024-08-16-170315.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">Cincin Permata</h5>
                                    <p style="text-align: justify;"> Cincin Permata adalah cincin elegan dengan hiasan
                                        permata berkualitas,
                                        sempurna untuk melambangkan momen berharga atau sebagai hadiah istimewa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Dipercaya oleh Perusahaan:</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="assets/images/brands/b1.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b2.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b4.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b3.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Tentang kami</p>
                                <h2 class="h2-title">Temukan Cerita Kami <span>Dari Toko Emas Mekar</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p style="text-align: justify;">Hai sobat Mekar, perkenalkan kami hadir untuk menawarkan
                                    berbagai macam variasi kostum
                                    produk model dan ukuran yang disesuaikan dengan pesanan pelanggan, dan kebutuhan
                                    pelanggan,
                                    kami melayani pesanan grosir dan eceran, kami juga melayani jasa servis, chrome
                                    emas, perak.
                                    Tenaga kami telah teruji dengan pengalaman belasan tahun yang menggeluti
                                    dibidangnya.
                                    Kadar yang kami gunakan untuk emas adalah 8K, 10K dan 18K, termasuk 24K, sedangkan
                                    perak
                                    kami menggunakan kadar 92,5% (925). <br> <br>
                                    Yuk penuhi kebutuhan lifestyle anda bersama Toko Emas Mekar.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img"
                                    style="background-image: url(assets/images/thumnailemas.jpg);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/videoperhiasan.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Proses Pembuatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Perhiasan Kami</p>
                                    <h2 class="h2-title">Kilau Kepercayaan, <span>Investasi Berharga!</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter active" data-filter="semua">
                                                <img src="assets/images/menu-1.png" alt="">
                                                Semua
                                            </li>
                                            <li class="filter" data-filter="cincin">
                                                <img src="assets/images/menu-2.png" alt="">
                                                Cincin
                                            </li>
                                            <li class="filter" data-filter="gelang">
                                                <img src="assets/images/menu-3.png" alt="">
                                                Gelang
                                            </li>
                                            <li class="filter" data-filter="anting">
                                                <img src="assets/images/menu-4.png" alt="">
                                                Anting
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu-dish" class="row"></div>
                        
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <!-- Produk akan dimuat secara dinamis di sini -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/Jasa/custom.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Jasa Custom</h2>
                                <p style="text-align: justify;">Toko Emas Mekar menghadirkan layanan Jasa Custom untuk
                                    Anda yang menginginkan perhiasan dengan sentuhan pribadi dan unik. Dengan layanan
                                    ini, Anda dapat merancang sendiri perhiasan sesuai keinginan, baik dari segi desain,
                                    ukuran, maupun material yang digunakan. Kami memahami bahwa setiap perhiasan
                                    memiliki nilai emosional dan cerita khusus, sehingga kami berkomitmen untuk
                                    mewujudkan ide dan keinginan Anda ke dalam karya yang sempurna.</p>
                                <p style="text-align: justify;">Tim perajin kami yang berpengalaman akan membantu Anda
                                    dalam setiap tahap pembuatan, mulai dari pemilihan bentuk, penentuan ukuran, hingga
                                    penambahan detail khusus seperti batu permata pilihan. Dengan kombinasi teknologi
                                    modern dan keterampilan tangan yang terampil, Toko Emas Mekar memastikan bahwa
                                    setiap detail perhiasan yang dibuat memenuhi standar kualitas terbaik, mencerminkan
                                    gaya dan karakter pribadi Anda.</p>
                                <p style="text-align: justify;">Bergabunglah bersama banyak pelanggan setia kami yang
                                    telah menemukan kepuasan dalam memiliki perhiasan eksklusif yang tak hanya indah,
                                    tetapi juga penuh makna. Temukan kemewahan, keunikan, dan kualitas yang hanya bisa
                                    Anda dapatkan di Toko Emas Mekar.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Jasa Cuci</h2>
                                <p style="text-align: justify;">Toko Emas Mekar juga menawarkan layanan Jasa Cuci
                                    Perhiasan untuk menjaga kilau dan keindahan perhiasan Anda. Kami memahami bahwa
                                    perhiasan yang sering dipakai cenderung terkena kotoran, minyak, atau debu, yang
                                    dapat mengurangi kilaunya seiring waktu. Melalui proses pembersihan profesional,
                                    kami memastikan perhiasan Anda kembali bersinar seperti baru.</p>
                                <p style="text-align: justify;">Dalam Jasa Cuci kami, setiap perhiasan dibersihkan
                                    dengan teknik khusus dan peralatan modern untuk memastikan keamanan dan kualitas
                                    terbaik. Mulai dari perhiasan emas, berlian, hingga batu permata lainnya, tim ahli
                                    kami menangani setiap proses dengan hati-hati dan teliti agar tetap terjaga kualitas
                                    serta ketahanan perhiasan Anda. Kami juga menawarkan opsi pemolesan untuk perhiasan
                                    yang membutuhkan perawatan lebih, membuatnya tampak lebih bersih, lebih berkilau,
                                    dan bebas dari goresan kecil.</p>
                                <p style="text-align: justify;">Kami berkomitmen untuk memberikan pelayanan terbaik bagi
                                    pelanggan kami. Datanglah ke Toko Emas Mekar dan percayakan perhiasan Anda kepada
                                    kami untuk perawatan profesional yang aman dan berkualitas.</p>

                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-2 order-1">
                            <div class="sec-img mt-5">
                                <img src="assets/images/Jasa/cuci.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Lokasi</p>
                                    <h2 class="h2-title">Google Maps</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Every Day</h3>
                                        <p>00:00 AM - 12:00 PM</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">+62 81256653063</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Senin - Minggu</h3>
                                        <p>00:00 - 23:59 WITA</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="swiper-wrapper">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.6267309900454!2d114.73486756253344!3d-3.4262439912659794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de682e835777af3%3A0x5f1fb9c48f03dd85!2sJl.%20Golf%20Komp.%20Wengga%20IV%2C%20Kec.%20Liang%20Anggang%2C%20Kota%20Banjar%20Baru%2C%20Kalimantan%20Selatan!5e1!3m2!1sid!2sid!4v1735817370728!5m2!1sid!2sid"
                                        width="1200" height="500" style="border:0;" allowfullscreen loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>


                                </div> <br>
                                <div style="text-align: center;">
                                    <div
                                        style="border: 1px solid #000; padding: 10px; display: inline-block; text-align: center; font-weight: bold;">
                                        📍Jl. Golf, Komp. Wengga IV, Landasan Ulin, Banjarbaru
                                    </div>
                                </div>


                            </div>
                        </div>

            </section>

            <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Tim Kami</p>
                                    <h2 class="h2-title">Temui Tim Kami</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/prasetyo.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Marita Araouf Prasetyo</h3>
                                        <p class="team-sub-title">CO - Founder</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/oby.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Mahrus Mahbubi</h3>
                                        <p class="team-sub-title">UI/UX</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/ma.vin.16940599/" target="_blank">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/mpinnn._/" target="_blank">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/@obyby6473" target="_blank">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/night.png);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Khairy Zhafran H. Kastella</h3>
                                        <p class="team-sub-title">Frontend</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/khairy.zhafran.315"
                                                        target="_blank">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/catfun0202" target="_blank">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/@khairyzhafran7018"
                                                        target="_blank">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/deysen.jpeg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Deysen</h3>
                                        <p class="team-sub-title">Backend</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/asfar.jpeg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">M. Asfar Aslam</h3>
                                        <p class="team-sub-title">Report</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/ahdan.jpeg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">M. Ahdan Fauzan</h3>
                                        <p class="team-sub-title">Backend</p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Apa Kata Mereka</p>
                                    <h2 class="h2-title">Apa Yang Dikatakan <span>Costumer Tentang Kami</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/MEKAR JEWRLY 2-01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(https://i.pinimg.com/280x280_RS/ae/5f/6d/ae5f6dd4a7f764de75995f3ca02445e6.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Rina Sulastri
                                                </h3>
                                                <p>Pengalaman berbelanja di Emas Mekar sangat menyenangkan!
                                                    Pelayanan yang ramah dan informatif.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(https://i.pinimg.com/736x/99/e8/a4/99e8a4586bfd9f279aef514e3f634f29.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Andi Pratama
                                                </h3>
                                                <p>Toko Emas Mekar selalu memberikan yang terbaik. Harga yang kompetitif
                                                    dan desain yang elegan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(https://i.pinimg.com/736x/7a/82/41/7a824140d60d798b21c5984bcec9f075.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Mira Trisna
                                                </h3>
                                                <p>Emas Mekar adalah tempat terbaik untuk membeli perhiasan emas.
                                                    Saya membeli kalung dan gelang di sini.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(https://pbs.twimg.com/profile_images/1814686725798834176/a3bdrZfM_200x200.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Budiono Siregar
                                                </h3>
                                                <p>Saya sudah beberapa kali membeli perhiasan di Emas Mekar, dan selalu
                                                    puas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-sec section-repeat-img" style="background-image: url(assets/images/faq-bg.png);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Pertanyaan <span>yang sering diajukan</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah bisa beli eceran atau harus grosir?</h4>
                                <p>Anda bisa membeli eceran atau grosiran di toko kami.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah disini bisa custom model sendiri?</h4>
                                <p>Bisa kami membuka layanan custom yang sesuai dengan model yang diinginkan.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah toko ini terpercaya?</h4>
                                <p>Sangat terpercaya karena Tenaga kami telah teruji dengan pengalaman
                                    belasan tahun yang menggeluti dibidangnya, Dan mendapatkan hasil yang terbaik
                                    .</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah tersedia disemua platform?</h4>
                                <p>Kami hanya memiliki 2 platform by Instagram dan Whatsapp.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah ada jasa servis dan lain-lain atau hanya custom saja?</h4>
                                <p>Kami melayani jasa servis, chrome emas, perak.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">berapa kadar yang digunakan untuk emas dan perak?</h4>
                                <p>Kadar yang kami gunakan untuk emas adalah 8K, 10K dan 18K, termasuk 24K,
                                    sedangkan perak kami menggunakan kadar 92,5% (925).</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <div class="bg-pattern bg-light repeat-img"
                style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Blog Kami</p>
                                        <h2 class="h2-title">Publikasi Terbaru</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="assets/images/title-shape.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/publish1.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">27, Oktober, 2024</p>
                                            <a href="#" class="h4-title">Cincin Couple</a>
                                            <p style="text-align: justify;">Cincin Couple, sepasang cincin eksklusif
                                                dengan desain unik,
                                                hanya tersedia dalam jumlah terbatas, simbol cinta dan komitmen yang
                                                istimewa untuk pasangan.</p>
                                            <a href="cincincouple.html" class="sec-btn">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/publish2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">25, Juni, 2024</p>
                                            <a href="#" class="h4-title">Gelang SI.SE.SA Rolex</a>
                                            <p style="text-align: justify;">Gelang SI.SE.SA Rolex adalah aksesori mewah
                                                yang menggabungkan desain elegan dan kualitas tinggi,
                                                cocok untuk mereka yang mengutamakan kemewahan dan gaya.</p>
                                            <a href="#" class="sec-btn">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/publish3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">25, Juni, 2024</p>
                                            <a href="#" class="h4-title">Cincin Model Audi</a>
                                            <p style="text-align: justify;">Cincin Model Audi adalah cincin dengan
                                                desain unik terinspirasi dari keanggunan dan gaya khas Audi.
                                                Memadukan kesan modern dan elegan, cincin ini cocok bagi mereka yang
                                                menyukai tampilan mewah dan berkelas.</p>
                                            <a href="#" class="sec-btn">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="newsletter-sec section pt-0">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(assets/images/news.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Berlangganan ditoko kami</h2>
                                                <p>Berlangganan di Toko Mekar Emas dan dapatkan penawaran spesial
                                                    untuk koleksi perhiasan emas pilihan.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input" placeholder="Masukin Email Anda"
                                                    required>
                                                <button type="submit" class="sec-btn primary-btn">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- footer starts  -->
            <footer class="site-footer" id="contact">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="MEKAR JEWRLY 2-01.png" alt="">
                                            </a>
                                        </div>
                                        <p>Ikuti Kami Di Semua Sosial Media DIbawah.
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.instagram.com/tokoemasmekar" target="_blank">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://wa.me/+6281256653063" target="_blank">
                                                        <i class="uil uil-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">Jam Buka</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Senin - Minggu : 00:00 - 23:59 WITA
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="#home" class="footer-active-menu">Home</a>
                                                </li>
                                                <li><a href="#about">Tentang</a></li>
                                                <li><a href="#menu">Perhiasan</a></li>
                                                <li><a href="#gallery">Lokasi</a></li>
                                                <li><a href="#blog">Blog</a></li>
                                                <li><a href="#contact">Kontak</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Perusahaan</h3>
                                            <ul>
                                                <li><a href="sdank.html">S&K</a></li>
                                                <li><a href="kebijakanprivasi.html">Kebijakan Privasi</a></li>
                                                <li><a href="kebijakancookie.html">Kebijakan Cookie</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2024 <span class="name">TokoEmasMekar</span> All Rights
                                        Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                    </div>
                </div>
            </footer>



        </div>
    </div>


    <!-- jquery  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="main.js"></script>
    <script src="script.js"></script>


</body>

</html>
