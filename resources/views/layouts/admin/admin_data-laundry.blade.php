
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=css/admin_data-laundry.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

    <title>Admin - Data Laundry</title>
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
                        <div class="active-sidebar-list__item-button on">
                            <i class="fa-solid fa-file"></i>
                            <p>Data Laundry</p>
                        </div>
                    </a>
                </li>
                <li class="sidebar-list__item">
                    <a href="{{url('/admin_tambah_laundry')}}">
                        <div class="sidebar-list__item-button">
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

            <div class="main-title">
                <h1>Halo Admin 👋</h1>
                <h3>Jangan lupa untuk terus meng-update data laundry yang lainnya ya !!</h3>
            </div>

            <div class="grid-card">
                <div class="grid-card__item" style="background-color: #6C4AB6;">
                    <img src="img/icon-1.png" alt="">
                    <div class="grid-card__item-text">
                        <h1 style="color: #fff;">300</h1>
                        <h4 style="color: #fff;">Total Data Laundry</h4>
                    </div>
                </div>
                <div class="grid-card__item" style="background-color: #fff;">
                    <img src="img/icon-2.png" alt="">
                    <div class="grid-card__item-text">
                        <h1>300</h1>
                        <h4>Laundry Siap Diambil</h4>
                    </div>
                </div>
                <div class="grid-card__item" style="background-color: #fff;">
                    <img src="img/icon-3.png" alt="">
                    <div class="grid-card__item-text">
                        <h1>300</h1>
                        <h4>Laundry Dalam Proses</h4>
                    </div>
                </div>
                <div class="grid-card__item" style="background-color: #fff;">
                    <img src="img/icon-4.png" alt="">
                    <div class="grid-card__item-text">
                        <h1>300</h1>
                        <h4>Laundry Sudah Diambil</h4>
                    </div>
                </div>
            </div>

            <div class="table">
                <div class="table-header">
                    <div class="table-header__text">
                        <h2>Data Laundry</h2>
                        <h4>Tetap dipantau terus ya perkembangan tiap data laundry</h4>
                    </div>
                    <div style="display: flex;
                                align-items: center;">
                        <button href="#" class="table-header__button">
                            <i class="fa-solid fa-file-export"></i>
                            <h4>Export</h4>
                        </button>
                    </div>
                </div>

                <div class="table-parent">
                    <table class="table-body sticky">
                            <thead>
                                <tr class="table-row__head">
                                    <th class="th-no">No.</th>
                                    <th class="th-nama">Nama</th>
                                    <th class="th-tannggal">Tanggal</th>
                                    <th class="th-jenis">Jenis Laundry</th>
                                    <th class="th-type">Type Laundry</th>
                                    <th class="th-status">Status Laundry</th>
                                    <th class="th-photo">Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laundry as $l)
                                <tr class="table-row__body">
                                    <td class="missing">{{ $l->id }}</td>
                                    <td>{{ $l->name }}</td>
                                    <td class="missing">{{ \Carbon\Carbon::parse($l->tanggal)->format('d-M-Y') }}</td>
                                    <td class="missing">{{ $l->jenislaundry }}</td>
                                    <td class="missing">{{ $l->typelaundry }}</td>
                                    <td><div class="status-button">
                                        {{ $l->statuslaundry }}
                                    </div></td>
                                    <td ><div onclick="window.open('image/contoh.jpg', '_blank')" class="eye-button" id="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                </div>

            </div>

        </div>

        <script src="js/script_admin-data-laundry.js"></script>

</body>
</html>
