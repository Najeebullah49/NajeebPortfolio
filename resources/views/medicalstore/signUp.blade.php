<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@section('title') Sign Up @endsection</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #d0f0f3, #f6f9fc);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .signup-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 100%;
      max-width: 900px;
      display: flex;
      flex-wrap: wrap;
      transition: 0.3s ease;
    }

    .signup-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
    }

    .signup-image {
      flex: 1;
      background: url('{{ asset('images/medical.jpg') }}') center/cover no-repeat;
      min-height: 500px;
    }

    .signup-form {
      flex: 1;
      background: #ffffff;
      padding: 50px 40px;
    }

    .signup-form h2 {
      font-weight: 700;
      color: #0dcaf0;
      text-align: center;
      margin-bottom: 20px;
    }

    .signup-form p {
      text-align: center;
      color: #6c757d;
      margin-bottom: 40px;
      font-size: 15px;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
      font-size: 15px;
      transition: 0.2s;
    }

    .form-control:focus {
      border-color: #0dcaf0;
      box-shadow: 0 0 5px rgba(13, 202, 240, 0.3);
    }

    .btn-primary {
      background: #0dcaf0;
      border: none;
      border-radius: 10px;
      padding: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: #0bbcd9;
      box-shadow: 0 4px 10px rgba(13, 202, 240, 0.3);
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      color: #6c757d;
    }

    .login-link a {
      color: #0d6efd;
      text-decoration: none;
      font-weight: 600;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 991px) {
      .signup-card {
        flex-direction: column;
      }
      .signup-image {
        min-height: 250px;
      }
    }
  </style>
</head>

<body>
  <div class="signup-card">
    <div class="signup-image"></div>

    <div class="signup-form">
      <h2>Younis Medical Store</h2>
      <p>Create your new account below</p>

      @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
      @endif

      @if(session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
      @endif

      <form action="{{ URL::to('registerMedicalUser') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="fullname" class="form-label">Full Name</label>
          <input type="text" name="name" id="fullname"
            class="form-control @error('name') is-invalid @enderror"
            placeholder="Enter your full name"
            value="{{ old('name') }}" required>
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email"
            class="form-control @error('email') is-invalid @enderror"
            placeholder="Enter your email"
            value="{{ old('email') }}" required>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="file" class="form-label">Profile Picture</label>
          <input type="file" name="file" id="file"
            class="form-control @error('file') is-invalid @enderror">
          @error('file')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password"
            class="form-control @error('password') is-invalid @enderror"
            placeholder="Enter password" required>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
            class="form-control" placeholder="Re-enter password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Create Account</button>
      </form>

      <div class="login-link mt-3">
        Already have an account? <a href="{{ route('medicallogin') }}">Login here</a>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
