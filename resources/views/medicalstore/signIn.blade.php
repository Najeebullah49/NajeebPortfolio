<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') Sign In @endsection</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #f8f9fa);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .login-image {
            object-fit: cover;
            height: 100%;
        }

        .form-section {
            padding: 50px 40px;
        }

        .form-section h3 {
            font-weight: 700;
            color: #0d6efd;
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .toggle-password {
            position: absolute;
            top: 70%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-header h2 {
            font-weight: 800;
            color: #198754;
        }

        .signup-link {
            text-align: center;
            margin-top: 15px;
            font-size: 15px;
        }

        .signup-link a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container d-flex flex-column flex-lg-row shadow-lg">
        <!-- Left side image -->
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{ asset('images/medical.jpg') }}" alt="Medical" class="w-100 h-100 login-image">
        </div>

        <!-- Right side form -->
        <div class="col-lg-6 col-sm-12 form-section bg-light">
            <div class="brand-header">
                <h2>Younis Medical Store</h2>
                <p class="text-muted">Welcome Back! Please sign in to continue</p>
            </div>

            @if(session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif

            <form action="{{ URL::to('loginMedicalUser') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="UseridEmail" class="form-label">Email</label>
                    <input type="email" name="email" id="UseridEmail" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                    <i id="togglePassword" class="fa fa-eye toggle-password"></i>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
            </form>

            <div class="signup-link">
                Don’t have an account? <a href="{{ route('medicalsignUp') }}">Sign up</a>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
