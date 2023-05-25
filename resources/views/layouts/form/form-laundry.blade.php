<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>

    <link rel="stylesheet" href=css/form.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <a href="{{url('/admin_tambah_laundry')}}">
            <div class="navigation-back">
                <i class="fa-solid fa-chevron-left" style="color: #432c7a;"></i>
                <p>Kembali Ke Halaman Admin</p>
            </div>
        </a>

        <div class="header-text">
            <h1>Form Pengisian Data laundry</h1>
            <h4>Disini tempat admin meng input data-data laundry, Kamu bisa meng input data disini.  </h4>
        </div>

        <div class="form-container">
            <form action="{{ url('/add-laundry') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="form-item1" class="form-item" >
                    <h3>Nama Pelanggan</h3>
                    <input type="text" placeholder="isi nama customer disini" name="name" value="{{ old('name') }}">

                </div>
        <div id="form-item2" class="form-item">
            <h3>Tanggal Laundry Selesai</h3>
            <input type="date" placeholder="isi tanggal laundry selesai disini" name="tanggal" value="{{ old('tanggal') }}">
        </div>
        <div id="form-item3" class="form-item">
            <h3>Jenis Laundry</h3>
            <input type="text" placeholder="isi jenis laundry disini" name="jenislaundry" value="{{ old('jenislaundry') }}">
        </div>
        <div id="form-item4" class="form-item">
            <h3>Type Laundry</h3>
            <input type="text" placeholder="isi type laundry disini" name="typelaundry" 
            value="{{ old('typelaundry') }}">
        </div>
        <div id="form-item5" class="form-item">
            <h3>Status Laundry</h3>
            <select name="statuslaundry" id="laundry-status" class="status-laundry">
                <option id="status1" value="siap diambil">SIAP DIAMBIL</option>
                <option id="status2" value="proses">PROSES</option>
                <option id="status3" value="sudahdiambil">SUDAH DIAMBIL</option>
            </select>

            </div>
            <div id="sudahdiambil-div" class="content">
                <h3 style="margin-bottom: 1rem; color: #432c7a;">Bukti Foto</h3>
                <input type="file" id="upload" accept=".jpg,.jpeg,.png" name="image">
            </div>

            <button class="btn-submit" type="submit">SUBMIT</button>

            </form>
        </div>
    </main>

    <script src="js/form.js"></script

</body>
</html>
