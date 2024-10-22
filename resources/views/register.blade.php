<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Atma Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f2f2e9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .full-screen {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
        }

        .login-section {
            background-color: #f2f2e9;
            padding: 40px;
            flex: 3;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-section {
            background-color: #8da089;
            color: #fff;
            padding: 40px;
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 50%;
            position: relative;
        }

        .info-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .info-section p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .info-section .btn {
            background-color: transparent;
            border-color: #fff;
            color: #fff;
            border-radius: 20px;
            padding: 10px 30px;
        }

        .info-section .btn:hover {
            background-color: #fff;
            color: #8da089;
        }

        .info-section span {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
        }

        .info-section img {
            width: 150px;
            height: auto;
        }

        .form-control {
            border-radius: 5px;
        }

        .social-icons a {
            font-size: 24px;
            color: #000;
            margin-right: 15px;
            background-color: #bed2b9;
            height: 150px;
            width: 15px;
            padding: 10px;
            border-radius: 50%;
        }

        .social-icons a:hover {
            color: #6f866b;
        }

        .sign-in-btn {
            background-color: #8da089;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
        }

        .sign-in-btn:hover {
            background-color: #7a8f73;
        }

        .form-login {
            max-width: 50%;
        }
    </style>
</head>

<body>
    <div class="full-screen">
        <div class="info-section">
            <span class="d-flex align-items-start"><img src="{{ asset('images/white-logo.png') }}"
                    alt=""></span>
            <h1><strong>Welcome Back!</strong></h1>
            <p>Stay connected with us,</p>
            <p style="margin-top:-30px;">please log in using your personal info.</p>
            <a href="/" class="btn btn-outline-light">SIGN IN</a>
        </div>
        <div class="login-section">
            <h1 class="mb-4 text-center" style="color:#768A6E;"><strong>Create Account</strong></h1>
            <div class="social-icons mb-3 text-center">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-google"></i></a>
                <a href="#"><i class="bi bi-telephone"></i></a>
            </div>
            <p class="mt-4 mb-4 text-center">Or use Your Email Account</p>
            <form class="text-center" action="register" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-person-badge"></i>
                            </span>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name='email' placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-telephone"></i>
                            </span>
                            <input type="text" inputmode="numeric" class="form-control" id="phone" name="phone"
                                placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-geo-alt"></i> </span>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Address" required>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-three-dots"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                            <span class="input-group-text bg-light">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-three-dots"></i>
                            </span>
                            <input type="password" class="form-control" id="confirm_password"
                                placeholder="Confirm Password" required>
                            <span class="input-group-text bg-light">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn sign-in-btn rounded-pill" style="width: 17%;">SIGN UP</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
