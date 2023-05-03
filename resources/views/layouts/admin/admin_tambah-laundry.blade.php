
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

                    <div class="action-button">
                        <div class="action-button__search">
                            <i class="fa-solid fa-magnifying-glass" style="color: #949da9;"></i>
                            <input type="text" placeholder="search" style="width: 50%;">
                        </div>
                        <div class="action-button__crud">
                            <div class="action-button__edit" id="action-button__edit">
                                <i class="fa-solid fa-pen"></i>
                                <h4>Edit</h4>
                            </div>
                            <div class="action-button__delete">
                                <i class="fa-solid fa-trash"></i>
                                <h4>Hapus</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-parent">
                    <table class="table-body sticky">
                            <thead>
                                <tr class="table-row__head">
                                    <th>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input-head">
                                    </th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Laundry</th>
                                    <th>Type Laundry</th>
                                    <th>Status Laundry</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                                <tr class="table-row__body">
                                    <td>
                                        <input type="checkbox" name="myCheckBoxName" id="myCheckBoxId" class="checkbox-input">
                                    </td>
                                    <td>Joh Doe</td>
                                    <td>Fri 27 January 2023</td>
                                    <td>Express 8 Jam</td>
                                    <td>Satuan</td>
                                    <td><div class="status-button">
                                        SIAP DIAMBIL
                                    </div></td>
                                    <td ><div class="eye-button">
                                        <i class="fa-sharp fa-solid fa-eye"></i>
                                    </div></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <script src="js/script_admin-tambah-laundry.js"></script>

</body>
</html>
