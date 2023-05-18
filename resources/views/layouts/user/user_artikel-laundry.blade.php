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
                        <a href="{{url('/user_detail_artikel')}}">Baca Artikel</a>
                    </div>
                </div>
            </div>

            
            <div class="article__list">
                @foreach ($artikel as $a)
                <div class="article__item">
                    <img src="{{ url('storage/' . $a->image) }}" alt="" class="article__item-image">
                <div class="article__item-text">
                    <h1>{{ $a->judul }}</h1>
                    <h3>{!! $a->content !!}</h3>
                </div>
                <div class="article__item-button">
                    <i class="fa-solid fa-book-open"></i>
                    <a href="{{ url("/user_detail_artikel/$a->id") }}">Baca Artikel</a>
                    </div>
                </div>
                @endforeach

            </div>
            

        </main>
    </div>
    <!-- custom js     -->
    <script src="js/script_user-artikel-laundry.js"></script>

</body>
</html>
