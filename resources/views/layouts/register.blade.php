<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=css/login.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c6a35e66f0.js" crossorigin="anonymous"></script>

    <title>Register - Dewi Laundry</title>

</head>
<body>

    <div class="login-section">

        <div class="login-right">
            <div class="container">
                <img class="logo" src="./img/logo.png" alt="">

                <div class="header-login">
                    <div class="header-login__title">
                        <h2>Welcome To</h2>
                        <h1><strong>Dewi Laundry Web</strong></h1>
                    </div>

                    <div class="header-login__subtitle">
                        <p>Need a laundry? just call Dewi laundry</p>
                    </div>

                </div>

                <div class="guide-login">
                    <h2>Register</h2>
                    {{-- <p>email : <strong>user</strong></p>
                    <p>password : <strong>1234</strong></p> --}}
                </div>

                <form action="{{route('register')}}" method="POST">
                    @csrf
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input name="name" type="text" placeholder="name">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input name="email" type="email" placeholder="email">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input name="password" type="password" placeholder="password">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input name="password_confirmation" type="password" placeholder="password confirmation">
                        </div>

                    <button type="submit">Register</button>

                </form>

            </div>
        </div>

        <div class="login-left ">
            <img src="./img/image-login.png" alt="">
        </div>

    </div>

</body>
</html>
