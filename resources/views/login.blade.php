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
            background-image: linear-gradient(to right, #8c9e88, #f0ecdd);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-section {
            display: flex;
            width: 90%;
            max-width: 1300px;
            min-height: 660px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .card {
            max-width: 450px;
            width: 100%;
            min-height: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
        }

        .info-section,
        .login-section {
            flex: 1;
            padding: 40px;
        }

        .info-section {
            background-color: #8da089;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 0px 230px 230px 0px;
        }

        .info-section h1 {
            font-size: 50px;
            margin-bottom: 20px;
            margin-top: 100px;
        }

        .info-section p {
            font-size: 19px;
            margin-bottom: 30px;
        }

        .info-section .btn {
            background-color: transparent;
            border-color: #fff;
            color: #fff;
            border-radius: 10px;
            padding: 10px 40px;
        }

        .info-section .btn:hover {
            background-color: #fff;
            color: #8da089;
        }

        .info-section img {
            display: flex;
            align-self: flex-start;
            margin-top: -180px;
            margin-left: -20px;
        }

        .login-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .social-icons a {
            font-size: 15px;
            color: #000;
            margin-right: 15px;
            padding: 10px;
            border-radius: 15%;
            border: 1px solid #4a4a4a;
        }

        .social-icons a:hover {
            color: #6f866b;
        }

        .form-control {
            border-radius: 5px;
        }

        .sign-in-btn {
            background-color: #8da089;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .sign-in-btn:hover {
            background-color: #7a8f73;
        }

        .form-login {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="card-section">
        <!-- Left info-section -->
        <div class="info-section">
            <img src="{{ asset('images/Logo.png') }}" alt="Atma" width="190" height="65" class="mb-5">
            <h1><strong>Hello, Friend!</strong></h1>
            <p>Register with your personal details and start your health journey with us.</p>
            <a href="/register" class="btn btn-outline-light">SIGN UP</a>
        </div>

        <!-- Right login-section -->
        <div class="login-section">
            <div class="centered-card">
                <div class="card">
                    <div class="card-body">
                        <h1 class="mt-3 mb-4 text-center" style="color:#768A6E;"><strong>Sign In</strong></h1>
                        <div class="social-icons mt-1 text-center">
                            <a href="#"><i class="bi bi-google"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-telephone"></i></a>
                        </div>
                        <p class="mt-5 mb-3 text-center">or use your email account</p>
                        <!-- Error Message if any -->
                        @if ($error !== null)
                            <div class="alert alert-warning align-self-center" role="alert">
                                {{ $error }}
                            </div>
                        @endif
                        <form class="text-center" action='/' method='POST'>
                            @csrf
                            <div class="row">
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="form-login input-group">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="form-login input-group">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-three-dots"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" name="password">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 text-center mt-4">
                                <a href="/forgotpassword" class="text-decoration-none text-dark">Forget Your
                                    Password?</a>
                            </div>
                            <button type="submit" class="btn sign-in-btn rounded-pill">SIGN IN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
