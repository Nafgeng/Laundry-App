<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=css/admin_tambah-laundry.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

    <title>Admin - Tambah Data</title>
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
                    <a href="{{url('/admin_data_laundry')}}">
                        <div class="sidebar-list__item-button">
                            <i class="fa-solid fa-file"></i>
                            <p>Data Laundry</p>
                        </div>
                    </a>
                </li>
                <li class="sidebar-list__item">
                    <a href="{{url('/admin_tambah_laundry')}}">
                        <div class="active-sidebar-list__item-button">
                            <i class="fa-solid fa-file-circle-plus"></i>
                            <p>Tambah Data</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <header>
                <div class="menu-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="header-right">
                    @if (Route::has('login'))
                            @auth
                            <div class="header-right__text">
                                <p>Admin Account</p>
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

            <div class="table">
                <div class="table-sticky">
                    <div class="table-header">
                        <div class="table-header__text">
                            <h1>Data Laundry</h1>
                            <h3>Tetap dipantau terus ya perkembangan tiap data laundry</h3>
                        </div>
                        <div style="display: flex;
                                    align-items: center;">
                                    <a href="{{url('/form_laundry')}}">
                                        <button class="table-header__button">
                                            <i class="fa-solid fa-file-circle-plus"></i>
                                            <h4>Tambah Data</h4>
                                        </button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="main-content__list">
                    <div class="main-content__item">
                        <div class="main-content__card">
                            <h2 class="card-number">1</h2>

                            <div class="card-container">
                                <div class="card-container__left">
                                    <img src="image/laundry.png" alt="">
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
                        <div class="main-content__action">
                            <div class="action__see" onclick="window.open('image/contoh.jpg', '_blank')" title="Lihat Foto">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="action__edit" title="Edit Data">
                                <i class="fa-solid fa-pen"></i>
                            </div>
                            <div class="action__delete" title="Hapus Data">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/script_admin-tambah-laundry.js.js"></script>

</body>
</html>
