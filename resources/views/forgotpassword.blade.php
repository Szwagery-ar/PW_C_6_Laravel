<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Atma Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
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
            position: relative;
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
        }

        .info-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .info-section p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .img-logo {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
        }

        .login-section img {
            width: 150px;
            height: auto;
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
        <div class="login-section">
            <span class="img-logo d-flex align-items-start"><img src="{{asset('images/green-logo.png')}}" alt=""></span>
            <h1 class="mb-4 text-center" style="color:#768A6E;"><strong>Forgot Password</strong></h1>
            <p class="mt-4 mb-4 text-center">Enter the email address you used to create the account, and we will</p>
            <p class="text-center" style="margin-top: -25px;">email you instructions to reset your password</p>
            <form class="text-center">
                <div class="row">
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <button type="submit" id="send-email-btn" class="btn sign-in-btn rounded-pill" style="width: 17%;">SEND EMAIL</button>
                <div class="mb-3 text-center mt-3 ">
                    <a href="/login" class="text-decoration-none">Remember your password?</a>
                </div>
            </form>
        </div>
        <div class="info-section">
            <h1><strong>Hello, Friend!</strong></h1>
            <p>Enter your personal details and start your health journey with us.</p>
            <a href="/register" class="btn btn-outline-light">SIGN UP</a>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <span><i style="padding: 20px;" class="rounded-circle bi bi-envelope"></i> Email Sent</span>
                    <p>We have sent you an email at <a href="#">example@gmail.com</a>. Check your inbox and follow the instruction to reset your account password</p>
                    <div class="d-flex justify-content-center">
                        <input type="text" placeholder="Ceritanya OTP">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn sign-in-btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">CONFIRM</button>
                    </div>
                    <p class="mt-3">Did not recieve the email? <a href="#">Resend Email</a></p>
                    <p style="margin-top:-20px;">Wrong Email Address? <a href="#">Change Email Address</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="mb-4"><strong>Create New Password</strong></h1>
                    <p style="margin-top: -25px;">Your password must be different from your previous password.</p>
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-three-dots"></i>
                            </span>
                            <input type="password" class="form-control" id="password" placeholder="Password">
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
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn sign-in-btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        // Prevent default form submission and open modal
        document.getElementById("send-email-btn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form from refreshing the page
            var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            myModal.show(); // Show modal manually
        });
    </script>
</body>

</html>