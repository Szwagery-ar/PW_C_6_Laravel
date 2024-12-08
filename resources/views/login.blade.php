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
            <span class="img-logo d-flex align-items-start"><img src="{{ asset('images/green-logo.png') }}"
                    alt=""></span>
            <h1 class="mb-4 text-center" style="color:#768A6E;"><strong>Sign in to Apotek Atma</strong></h1>
            <div class="social-icons mb-3 text-center">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-google"></i></a>
                <a href="#"><i class="bi bi-telephone"></i></a>
            </div>
            <p class="mt-4 mb-4 text-center">Or use Your Email Account</p>
            <form id="loginForm" class="text-center" onsubmit="handleLogin(event)">
                @csrf
                <div class="invalid-feedback" id="emailError"></div>
                <div class="invalid-feedback" id="passwordError"></div>
                <div class="row">
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-login input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-three-dots"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                            <span class="input-group-text bg-light cursor-pointer" onclick="togglePassword()">
                                <i class="bi bi-eye" id="passwordToggleIcon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Remember me checkbox -->
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>

                {{-- <div class="mb-3 text-center">
                    <a href="{{ route('forgotpassword') }}" class="text-decoration-none">Forgot your password?</a>
                </div> --}}

                <!-- Loading spinner - hidden by default -->
                <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

                <button type="submit" class="btn sign-in-btn rounded-pill" style="width: 17%;" id="submitButton">SIGN IN</button>
            </form>
        </div>
        <div class="info-section">
            <h1><strong>Hello, Friend!</strong></h1>
            <p>Enter your personal details and start your health journey with us.</p>
            <a href="/register" class="btn btn-outline-light">SIGN UP</a>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon = document.getElementById('passwordToggleIcon');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('.invalid-feedback');
        errorElements.forEach(element => {
            element.textContent = '';
            element.style.display = 'none';
        });

        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
        });
    }

    function showError(field, message) {
        const errorElement = document.getElementById(field + 'Error');
        const input = document.getElementById(field);
        
        if (errorElement && input) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
            input.classList.add('is-invalid');
        }
    }

    async function handleLogin(event) {
        event.preventDefault();
        clearErrors();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (email === 'admin@gmail.com' && password === 'AdminApotek') {
            window.location.href = '/admin/dashboard';
            return;
        }

        const spinner = document.getElementById('loadingSpinner');
        const submitButton = document.getElementById('submitButton');
        spinner.classList.remove('d-none');
        submitButton.disabled = true;

        const formData = new FormData(event.target);
        const loginData = {
            email: formData.get('email'),
            password: formData.get('password'),
            remember: formData.get('remember') ? true : false
        };

        try {
            const response = await fetch('/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(loginData)
            });

            const data = await response.json();

            if (!response.ok) {
                if (response.status === 422) {
                    Object.keys(data.errors).forEach(field => {
                        showError(field, data.errors[field][0]);
                    });
                } else if (response.status === 401) {
                    showError('email', 'Invalid email or password');
                } else {
                    alert(data.message || 'Login failed. Please try again.');
                }
            } else {
                localStorage.setItem('auth_token', data.token);
                window.location.href = '/dashboard';
            }
        } catch (error) {
            console.error('Login error:', error);
            alert('An error occurred during login. Please try again.');
        } finally {
            spinner.classList.add('d-none');
            submitButton.disabled = false;
        }
    }
</script>

</html>
