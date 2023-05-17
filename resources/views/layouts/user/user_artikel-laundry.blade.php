<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=css/artikel.css >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

    <title>Laundry - User Data</title>

</head>

<body>
    <div class="grid-container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <img src="img/logo.png" alt="">
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list__item">
                    <a href="{{url('/user_data_laundry')}}">
                        <div class="sidebar-list__item-button">
                            <i class="fa-solid fa-file"></i>
                            <p>Data Laundry</p>
                        </div>
                    </a>
                </li>
                <li class="sidebar-list__item">
                    <a href="{{url('/user_artikel_laundry')}}">
                        <div class="active-sidebar-list__item-button">
                            <i class="fa-solid fa-book-open"></i>
                            <p>Artikel Laundry</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <main class="main">
            <header>
                <div class="menu-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="header-right">
                    @if (Route::has('login'))
                        @auth
                        <div class="header-right__text">
                            <p>User Account</p>
                            <p href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Log Out</p>
                        </div>

                        <form action="{{ route('logout') }}" id="logout" method="POST">@csrf</form>
                        @else
                        <div class="header-right__text">
                            <p href="{{ route('login') }}">Log In</p>
                        </div>
                        @endauth
                    @endif
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </header>

            <div class="main-title">
                <h1>Baca Artikel</h1>
                <h3>Kumpulan Artikel - Artikel Tentang Laundry</h3>
            </div>

            <div class="article__headline">
                <img src="img/list1.jpg" alt="" class="article__headline-image">
                <div class="article__headline-content">
                    <h1>5 Alasan Orang Pilih Jasa Laundry Ketimbang Nyuci Sendiri.</h1>
                    <h3>Meskipun mencuci pakaian merupakan aktivitas harian, namun beberapa ada yang menitipkan baju kotornya di tempat pencucian atau biasa kita sebut laundry. Kebanyakan dari pengguna jasa laundry menginginkan bajunya rapi dan wangi tanpa harus mencucinya di rumah.</h3>
                    <div class="article__button-head">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel1')}}">Baca Artikel</a>
                    </div>
                </div>
            </div>

            <div class="article__list">
                <div class="article__item">
                    <img src="img/list2.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>Pengertian Laundry : Tugas, Struktur Organisasi dan SOP</h1>
                        <h3>Laundry (binatu) merupakan salah satu bagian dari department Housekeeping sebuah hotel yang memberikan layanan jasa pencucian baik pakaian tamu, seragam karyawan, hingga seluruh linen hotel, restaurant, dan balai pertemuan.</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel2')}}">Baca Artikel</a>
                    </div>
                </div>
                <div class="article__item">
                    <img src="img/list3.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>Wajib Coba! 5 Tips Hemat Ketika Menggunakan Jasa Laundry</h1>
                        <h3>Jika anda ingin menggunakan jasa laundry, tentu ada beberapa hal yang perlu anda pikirkan. Dimana harga menjadi salah satu bahan pertimbangan bagi pelanggan laundry. Sehingga anda perlu mengetahui tips hemat pakai laundry agar anda dapat tetap menggunakan jasa laundry untuk memenuhi kebutuhan laundry anda.</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel3')}}">Baca Artikel</a>
                    </div>
                </div>
                <div class="article__item">
                    <img src="img/list4.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>4 Alasan Pakaian Laundry Lebih Wangi Daripada Cuci Sendiri</h1>
                        <h3>Apakah kamu pernah menyadari kalau pakaian yang kamu cuci sendiri di rumah sangat berbeda dengan pakaian yang dicuci oleh jasa pencucian atau laundry?</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel4')}}">Baca Artikel</a>
                    </div>
                </div>
                <div class="article__item">
                    <img src="img/list5.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>Tumbuh 50 Persen, Indonesia Berpotensi Besar Jadi Pasar Utama Bisnis Laundry</h1>
                        <h3>Indonesia memiliki potensi besar dalam menjadi pasar utama bisnis laundry dengan melihat pertumbuhan signifikan yang terjadi dari tahun ke tahun. Selama periode 2021-2022 saja, usaha laundry di Indonesia diperkirakan tumbuh sebesar 50 persen. Hal ini terlihat dari banyaknya penetrasi dan perluasan bisnis yang dilakukan oleh sejumlah pelaku bisnis di industri ini.</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel5')}}">Baca Artikel</a>
                    </div>
                </div>
                <div class="article__item">
                    <img src="img/list6.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>Tuntutan Konsumen Semakin Tinggi, Industri Laundry dan Klining Tingkatkan Kualitas dan Teknologi</h1>
                        <h3>Sektor usaha laundry kian menjanjikan seiring dengan kebutuhan kebutuhan rumah tangga dan industri. Terlebih lagi, selama pandemi, kebersihan seolah menjadi hal prioritas bagi siapapun.</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel6')}}">Baca Artikel</a>
                    </div>
                </div>
                <div class="article__item">
                    <img src="img/list7.jpg" alt="" class="article__item-image">
                    <div class="article__item-text">
                        <h1>Bisnis Laundry Kian Wangi, Penjualan Mesin Cuci Melonjak 50 Persen</h1>
                        <h3>Salah satu bisnis yang tengah menjamur di kalangan masyarakat saat ini adalah laundry . Merebaknya bisnis cucian ini terlihat dari data penjualan mesin cuci komersial di 2022 yang mencatatkan pertumbuhan penjualan hingga 50% dibanding 2021</h3>
                    </div>
                    <div class="article__item-button">
                        <i class="fa-solid fa-book-open"></i>
                        <a href="{{url('/user_detail_artikel7')}}">Baca Artikel</a>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <!-- custom js     -->
    <script src="js/script_user-artikel-laundry.js"></script>

</body>
</html>
