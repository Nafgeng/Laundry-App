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
            <h1>Form Pengisian Data Artikel Laundry</h1>
            <h4>Disini tempat admin meng input data-data artikel, Kamu bisa meng input data disini.  </h4>
        </div>

        <div class="form-container">
            <form action="{{ url('/add-laundry') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="form-item1" class="form-item" >
                    <h3>Judul Artikel</h3>
                    <input type="text" placeholder="isi judul artikel disini" name="name">
                </div>
        <div id="form-item2" class="form-item">
            <h3>Content Artikel</h3>
            <input type="text" placeholder="isi content artikel selesai disini" name="tanggal">
        </div>
        <div id="form-item5" class="form-item">
            <h3>Gambar Artikel</h3>
            <div id="gambarartikel-div" class="content">
                <h3 style="margin-bottom: 1rem; color: #432c7a;">Gambar Artikel</h3>
                <input type="file" id="upload" accept=".jpg,.jpeg,.png" name="image">
            </div>
        </div>

            <button class="btn-submit" type="submit">SUBMIT</button>

            </form>
        </div>
    </main>

    <script src="js/form.js"></script

</body>
</html>
