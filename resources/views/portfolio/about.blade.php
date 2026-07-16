@extends('portfolio.portfoliolayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@section('title') About Me @endsection</title>
  <!-- Bootstrap 5 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />

  <style>
    body {
      background: #0f172a;
      color: white;
      font-family: Arial, sans-serif;
    }

    .about-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 60px 0;
    }

    .profile-img {
      width: 100%;
      max-width: 350px;
      border-radius: 20px;
      object-fit: cover;
      border: 4px solid #38bdf8;
      box-shadow: 0 0 25px rgba(56, 189, 248, 0.4);
    }

    .section-title {
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .section-title span {
      color: #38bdf8;
    }

    .about-text {
      color: #cbd5e1;
      line-height: 1.9;
      font-size: 17px;
    }

    .info-box {
      background: #1e293b;
      border-radius: 15px;
      padding: 20px;
      transition: 0.3s;
      height: 100%;
    }

    .info-box:hover {
      transform: translateY(-5px);
      background: #334155;
    }

    .info-icon {
      font-size: 35px;
      color: #38bdf8;
      margin-bottom: 10px;
    }

    .btn-custom {
      background: #38bdf8;
      color: #000;
      border: none;
      padding: 12px 30px;
      border-radius: 10px;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background: #0ea5e9;
      color: white;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 32px;
        text-align: center;
      }

      .about-text {
        text-align: center;
      }

      .btn-wrapper {
        text-align: center;
      }

      .image-wrapper {
        text-align: center;
        margin-bottom: 40px;
      }
    }
  </style>
</head>
<body>

  <section class="about-section">
    <div class="container">

      <div class="row align-items-center g-5">

        <!-- Image -->
        <div class="col-lg-5">
          <div class="image-wrapper text-center">
            <img
              src="images/najeeb.JPG"
              alt="Profile Image"
              class="profile-img"
            />
          </div>
        </div>

        <!-- Content -->
        <div class="col-lg-7">

          <h1 class="section-title">
            About <span>Me</span>
          </h1>

          <p class="about-text">
            Hello! I'm <strong>Najeeb Ullah</strong>, a passionate Full Stack Web Developer
            with experience in building responsive and modern web applications.
            I specialize in Laravel, PHP, JavaScript, Bootstrap, and MySQL.
          </p>

          <p class="about-text">
            I enjoy creating user-friendly websites with clean UI designs and efficient backend systems.
            My goal is to continuously improve my skills and build high-quality digital solutions.
          </p>

          <!-- Info Cards -->
          <div class="row mt-4 g-4">

            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-code-slash info-icon"></i>
                <h5>Web Development</h5>
                <p class="mb-0 text-light">
                  Building responsive websites using modern technologies.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-laptop info-icon"></i>
                <h5>Frontend Design</h5>
                <p class="mb-0 text-light">
                  Creating attractive and user-friendly interfaces.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-database info-icon"></i>
                <h5>Backend & Database</h5>
                <p class="mb-0 text-light">
                  Managing server-side logic and database systems.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-book info-icon"></i>
                <h5>Continuous Learning</h5>
                <p class="mb-0 text-light">
                  Currently learning advanced web technologies and Dart.
                </p>
              </div>
            </div>

          </div>

          <!-- Button -->
          <div class="btn-wrapper mt-5">
            <a href="#" class="btn btn-custom">
              Download CV
            </a>
          </div>

        </div>

      </div>

    </div>
  </section>

</body>
</html>
@endsection
