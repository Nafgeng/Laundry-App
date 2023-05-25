<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-s cale=1.0">
    <title>Detail Artikel</title>

    <link rel="stylesheet" href="{{ asset('css/detail-artikel.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/58b4b4ea39.js" crossorigin="anonymous"></script>

    {{-- CKEditor 5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>


</head>
<body>
    <div class="navbar">
        <a href="{{url('/user_artikel_laundry')}}"><i class="fa-solid fa-chevron-left"></i></a>
        <img src="{{ asset('img/logo.png') }}" alt="logo">
    </div>

    <main>
        <div class="header">
            <div class="header_text">
                <h4>Laundry</h4>
            </div>
            <div class="header_title">
                <h1>{{ $detail->judul }}</h1>
            </div>
            <div class="header_reason">
                <p>{{ $detail->judul }}</p>
            </div>
        </div>

        <img src="{{ url('storage/' . $detail->image) }}" alt="image content">

        <article class="main_text">
            <p>{!! $detail->content !!}</p>
        </article>
    </main>
</body>
</html>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

