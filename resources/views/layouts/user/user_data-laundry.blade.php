<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=css/user_data-laundry.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

    <title>Laundry - User Data</title>

</head>

<body>
    <div class="grid-container">
        <!-- SIDEBAR -->
        @include('components.sidebar')

        <div class="main">
                <header>
                    <div class="menu-icon">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <div class="header-right">
                        <div class="header-right__text">
                            <p>User Account</p>
                            <p>Log Out</p>
                        </div>
                        <i class="fa-solid fa-circle-user"></i>
                    </div>

                </header>

                <div class="main-title">
                    <h1>Data Laundry</h1>
                    <h3>Anda Dapat Melihat Status Laundry Anda Disini</h3>
                </div>

                <div class="main-grid">
                    <div class="main-content">
                        <div class="main-content__search">
                            <i class="fa-solid fa-magnifying-glass" style="color: #949da9;"></i>
                            <input type="text" placeholder="search" style="width: 100%;">
                        </div>
                        <div class="tabs">
                            <div class="main-content__tab-header">
                                <button id="tabs1" href="#tab1" data-tab="tab1" class="tab-indicator active">SIAP DIAMBIL</button>
                                <button id="tabs2" href="#tab2" data-tab="tab2" class="tab-indicator">PROSES</button>
                                <button id="tabs3" href="#tab3" data-tab="tab3" class="tab-indicator">SUDAH DIAMBIL</button>
                            </div>

                            <div id="tab1" class="main-content__list">
                                <div class="main-content__card">
                                    <h2 class="card-number">1</h2>

                                    <div class="card-container">
                                        <div class="card-container__left">
                                            <img src="img/laundry.png" alt="">
                                            <div class="card-container__left-text">
                                                <div class="text-header">
                                                    <h2>John Doe</h2>
                                                    <h5>Fri, 27 Jan 2023</h5>
                                                </div>
                                                <h5>Type : Express 8 Jam</h5>
                                            </div>
                                        </div>
                                        <div class="card-container__right">
                                            <div class="card-container__right-status">
                                                SIAP DIAMBIL
                                            </div>
                                            <h3>3 Kg</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div id="tab2" class="main-content__list">
                                <div class="main-content__card">
                                    <h2 class="card-number">1</h2>

                                    <div class="card-container">
                                        <div class="card-container__left">
                                            <img src="img/laundry.png" alt="">
                                            <div class="card-container__left-text">
                                                <div class="text-header">
                                                    <h2>John Doe</h2>
                                                    <h5>Fri, 27 Jan 2023</h5>
                                                </div>
                                                <h5>Type : Express 8 Jam</h5>
                                            </div>
                                        </div>
                                        <div class="card-container__right">
                                            <div class="card-container__right-status-proses">
                                                PROSES
                                            </div>
                                            <h3>3 Kg</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab3" class="main-content__list">
                                <div class="main-content__card">
                                    <h2 class="card-number">1</h2>

                                    <div class="card-container">
                                        <div class="card-container__left">
                                            <img src="img/laundry.png" alt="">
                                            <div class="card-container__left-text">
                                                <div class="text-header">
                                                    <h2>John Doe</h2>
                                                    <h5>Fri, 27 Jan 2023</h5>
                                                </div>
                                                <h5>Type : Express 8 Jam</h5>
                                            </div>
                                        </div>
                                        <div class="card-container__right">
                                            <div class="card-container__right-status-diambil">
                                                SUDAH DIAMBIL
                                            </div>
                                            <h3>3 Kg</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-support">
                        <div class="main-support__card">
                            <div class="main-support__card-text">
                                <h2>Tidak Melihat <br/> Laundry Mu?</h2>
                                <p>silahkan klik tombol di bawah ini</p>
                            </div>

                            <a href="#" class="main-support__card-button">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <p style="color: #fff;">Laporkan Kehilangan</p>
                            </a>

                        </div>
                        <div class="main-support__card">
                            <div class="main-support__card-text" >
                                <h2>Sedang Sibuk Hingga <br/>Tak Punya Waktu?</h2>
                                <p>Pesan Antar Jemput Aja</p>
                            </div>

                            <a href="#" class="main-support__card-button">
                                <i class="fa-solid fa-truck-fast"></i>
                                <p style="color: #fff;">Pesan Antar Jemput</p>
                            </a>

                        </div>
                        <div class="main-support__card">
                            <div class="main-support__card-text">
                                <h2>Anda Puas Dengan Pelayanan Kami ?</h2>
                                <p>Yuk !! Isi Form Feedbacknya</p>
                            </div>

                            <a href="#" class="main-support__card-button">
                                <i class="fa-solid fa-envelope"></i>
                                <p style="color: #fff;">Form Feedback</p>
                            </a>

                        </div>
                    </div>
                </div>
        </div>
</div>
    <!-- custom js     -->
    <script src="js/script_user-data-laundry.js"></script>

</body>
</html>
