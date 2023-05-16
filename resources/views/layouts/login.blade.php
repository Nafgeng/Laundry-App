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

    <title>Login - Dewi Laundry</title>

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
                    <h2>Login</h2>
                    <p>email : <strong>user@gmail.com</strong></p>
                    <p>password : <strong>12345678</strong></p>
                </div>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input name="email" type="email" placeholder="email">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input name="password" type="password" placeholder="password">
                        </div>

                    <button type="submit">Log In</button>

                </form>

            </div>
        </div>

        <div class="login-left ">
            <img src="./img/image-login.png" alt="">
        </div>

    </div>

</body>
</html>
