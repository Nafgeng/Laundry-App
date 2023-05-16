<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewi Laundry</title>

    <!-- Connect CSS -->
    <link rel="stylesheet" href="css/landing-page.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/58b4b4ea39.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <ul class="navbar-list">
            <div class="logo"><img src="./img/logo.png" alt="logo icon"></div>
            <li class="toggle">
                <i class="fa-regular fa-bars"></i>
            </li>
            <div class="navbar-navigate">
                <li class="navbar-item">
                    <a href="#scroll-home" class="navbar-link">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="#scroll-about" class="navbar-link">About</a>
                </li>
                <li class="navbar-item">
                    <a href="#scroll-whyus" class="navbar-link">Why Us?</a>
                </li>
                <li class="navbar-item">
                    <a href="#scroll-jenis" class="navbar-link">Jenis Laundry</a>
                </li>
                <li class="navbar-item">
                    <a href="#scroll-contact" class="navbar-link">Contact</a>
                </li>
            </div>
            <a href="{{url('/login')}}">
                <div class="navbar-button">
                    ingin melihat laundry anda?
                </div>
            </a>
        </ul>
    </div>
        <!-- End of Navbar -->

        <!-- Header -->
        <header>
            <div class="bg_image"></div>
            <div class="container header_container">
                <div class="header_content">
                    <h1 class="header_title"><span class="span">Solusi</span> dari seluruh</h1>
                    <h1 class="header_title"><span class="span">Pakaian</span> kotor anda</h1>
                        <p class="header_text">
                            Hemat waktu dan tenaga dengan layanan cuci dan setrika yang handal.
                        </p>
                    <a href="{{url('/login')}}" class="btn_start">Ingin melihat laundry anda?</a>
                </div>
            </div>
        </header>
        <!-- End Of Header -->

        {{-- Scroll Target --}}
        <div id="scroll-about"></div>
        <!-- About -->
        <main>
            <div class="about">
                <div class="about_text">
                    <div class="about_title">
                        <h2>Tentang Dewi Laundry</h2>
                    </div>

                    <div class="about_value">
                        <p>
                            Dewi Laundry merupakan tempat laundry yang menyediakan cuci setrika maupun hanya setrika dengan harga yang ramah dengan kantong anda
                        </p>
                    </div>
                    <div class="order_direct">
                        <a href="">pesan sekarang ></a>
                    </div>
                </div>
                <img src="./img/aboutimg.png" class="img_about" alt="about image">
            </div>
        </main>
        <!-- End Of About -->

        {{-- Scroll Target --}}
        <div id="scroll-whyus"></div>
        <!-- Why Us -->
        <div class="title_whyus">
            <h2>Mengapa Kami</h2>
        </div>
        <div class="container">
            <div class="box">
                <div class="box-icon">
                    <i class="fa-sharp fa-solid fa-truck-fast"></i>
                </div>
                <div class="box-title">
                    <h3>Antar Jemput</h3>
                </div>
                <div class="box-text">
                    <p>Dengan menggunakan layanan antar jemput tinggal klik lalu kami akan mengambil dan mengantar laundry anda</p>
                </div>
            </div>
            <div class="box">
                <div class="box-icon">
                    <i class="fa-solid fa-file-circle-plus"></i>
                </div>
                <div class="box-title">
                    <h3>Selalu Update</h3>
                </div>
                <div class="box-text">
                    <p>Dengan menggunakan layanan laundry kami anda tidak perlu khawatir tentang laundry anda. Cukup login maka anda dapat melihat laundry anda</p>
                </div>
            </div>
            <div class="box">
                <div class="box-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="box-title">
                    <h3>24 / 7</h3>
                </div>
                <div class="box-text">
                    <p>Staff kami akan selalu memastikan bahwa semua laundry hari ini telah diatur dengan baik</p>
                </div>
            </div>
        </div>
        <!-- End Of Why Us -->

        {{-- Scroll Target --}}
        <div id="scroll-jenis"></div>
        <!-- Liat Jenis Paket Laundry -->
        <div class="title_jenis">
            <h3>List Jenis</h3>
            <h2>Paket Laundry</h2>
        </div>
            <div class="jenis_list">
                <div class="jenis_item1">
                    <div class="title_about_jenis">
                        <h2>Express 5 Jam</h2>
                    </div>
                    <div class="value_jenis">
                        <p>Laundry kilat dalam kurun waktu 6 jam saja membuat baju anda sangat bersih dan wangi</p>
                    </div>
                </div>
                <div class="jenis_item2">
                    <div class="title_about_jenis">
                        <h2>Express 24 Jam</h2>
                    </div>
                    <div class="value_jenis">
                        <p>Dalam 24 jam semua baju anda sudah dalam keadaan bersih, wangi dan juga rapi</p>
                    </div>
                </div>
                <div class="jenis_item3">
                    <div class="title_about_jenis">
                        <h2>Regular 3 Hari</h2>
                    </div>
                    <div class="value_jenis">
                        <p>Laundry dengan biaya murah namun dalam kurun waktu 3 hari semua baju kotor anda akan menjadi  bersih dan wangi</p>
                    </div>
                </div>
            </div>
        <!-- End Of Liat Jenis Paket Laundry -->

        {{-- Scroll Target --}}
        <div id="scroll-contact"></div>
        <!-- Contact Us -->
        <main>
            <div class="contact_title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact_us">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d432.57378537656234!2d106.87170852769965!3d-6.199187715274802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52560169daf%3A0x1db4574885165fec!2sDewi%20Laundry!5e0!3m2!1sid!2sid!4v1678973210240!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact_value">
                    <p>Jalan Nanas I No.26 Rt 02/03. Kelurahan Utan Kayu Selatan. Kecamatan Matraman. 13120</p>
                    <div class="contact_flex">
                        <i class="fa-solid fa-mobile"></i>
                        <p>+6285885663292</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Of Contact Us -->

        <!-- Footer -->
        <!-- End Of Footer -->


</body>
</html>
