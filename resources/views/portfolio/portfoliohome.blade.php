@extends('portfolio.portfoliolayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@section('title') Najeeb Ullah Portfolio @endsection</title>
  

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: linear-gradient(135deg, #e1e5ec, #0dcaf0);
            color: black;
            padding: 60px 0;
            height: 350px;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            background-color: black;
      object-fit: cover;
        }
        .project-card:hover {
    
            transform: translateY(-5px);
            transition: 0.3s;
        }




        .projects-section {
      padding: 80px 0;
      min-height: 100vh;
    }

    /* Heading */
    .section-title {
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .section-title span {
      color: #60a5fa;
    }

    .section-subtitle {
      text-align: center;
      color: black;
      max-width: 700px;
      margin: auto;
      margin-bottom: 60px;
      line-height: 1.8;
    }

    /* Project Card */
    .project-card {
      background: #e9ebec;
      border-radius: 20px;
      overflow: hidden;
      transition: 0.3s ease;
      border: 1px solid #374151;

      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .project-card:hover {
      transform: translateY(-8px);
      border-color: #60a5fa;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    /* Project Image */
    .project-image {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    /* Card Content */
    .project-content {
      padding: 25px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .project-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
      color:black;
    }

    .project-description {
      color: black;
      line-height: 1.7;
      margin-bottom: 20px;
      flex-grow: 1;
    }

    /* Technologies */
    .tech-stack {
      margin-bottom: 20px;
    }

    .tech-badge {
      display: inline-block;
      background: #d5d6d8;
      color: black;
      padding: 6px 14px;
      border-radius: 50px;
      font-size: 13px;
      margin: 4px;
    }

    /* Buttons */
    .project-buttons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-demo {
      background: #60a5fa;
      color: #111827;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn-demo:hover {
      background: #0672f5;
      color: white;
    }

    .btn-github {
      border: 1px solid #60a5fa;
      color: black;
      padding: 10px 20px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-github:hover {
      background: #0672f5;
      color: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .section-title {
        font-size: 32px;
      }

      .project-image {
        height: 200px;
      }

      .project-title {
        font-size: 22px;
      }

      .project-buttons {
        flex-direction: column;
      }

      .btn-demo,
      .btn-github {
        width: 100%;
        text-align: center;
      }
    }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <img src="images/najeeb.jpg" alt="Profile" class="profile-img mb-3">
        <h1 class="fw-bold">Najeeb Ullah</h1>
        <p class="lead">Software Engineer | Laravel Developer</p>
    </div>
</section>

<!-- About Section -->
<section class="py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>About Me</h2>
                <p>
                    I am Najeeb Ullah, a passionate Software Engineer with experience in building
                    web applications using Laravel, JavaScript, and modern technologies.
                    I enjoy creating clean, responsive, and user-friendly applications.
                </p>
                <p>
                    Currently, I am improving my skills in backend development and learning new
                    technologies like Dart to expand my expertise.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="img-fluid rounded" alt="About Image">
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Projects</h2>
        <div class="row g-4">

             <!-- Project 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="project-card">

            <img
              src="https://images.unsplash.com/photo-1556740749-887f6717d7e4"
              alt="Ecommerce Project"
              class="project-image"
            />

            <div class="project-content">

              <h3 class="project-title">
                Medical Store
              </h3>

              <p class="project-description">
                 A fully responsive medical store inventory management system
  developed to manage medicines, stock levels, sales records,
  supplier information, billing, and customer orders through
  an efficient and user-friendly admin dashboard
              </p>

              <div class="tech-stack">
                <span class="tech-badge">Laravel</span>
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">Bootstrap</span>
                <span class="tech-badge">MySQL</span>
              </div>

              <div class="project-buttons">
                <a href="/medicalsignin" class="btn-demo">
                  <i class="bi bi-eye"></i> Live Demo
                </a>

                <a href="https://github.com/Najeebullah49/YounisMedicalStore.git" class="btn-github">
                  <i class="bi bi-github"></i> GitHub
                </a>
              </div>

            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="project-card">

            <img
              src="images/tailor.PNG"
              alt="Tailor Management"
              class="project-image"
            />

            <div class="project-content">

              <h3 class="project-title">
                Tailor Management System
              </h3>

              <p class="project-description">
                A web application for managing tailoring orders,
                measurements, customer details, and online bookings.
              </p>

              <div class="tech-stack">
                <span class="tech-badge">Laravel</span>
                <span class="tech-badge">JavaScript</span>
                <span class="tech-badge">Bootstrap</span>
                <span class="tech-badge">MySQL</span>
              </div>

              <div class="project-buttons">
                <a href="/home" class="btn-demo">
                  <i class="bi bi-eye"></i> Live Demo
                </a>

                <a href="https://github.com/Najeebullah49/OnlineTailorService.git" class="btn-github">
                  <i class="bi bi-github"></i> GitHub
                </a>
              </div>

            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="project-card">

            <img
              src="images/admin.PNG"
              alt="Portfolio Website"
              class="project-image"
            />

            <div class="project-content">

              <h3 class="project-title">
                 Online Tailor Admin Panel
              </h3>

              <p class="project-description">
                 A modern and responsive online tailor service admin panel
  designed to manage customer orders, measurements, tailoring services,
  product listings, payments, and delivery tracking efficiently through
  a user-friendly dashboard interface.
              </p>

              <div class="tech-stack">
                <span class="tech-badge">HTML</span>
                <span class="tech-badge">CSS</span>
                <span class="tech-badge">Bootstrap 5</span>
                <span class="tech-badge">JavaScript</span>
              </div>

              <div class="project-buttons">
                <a href="/displayDashboard" class="btn-demo">
                  <i class="bi bi-eye"></i> Live Demo
                </a>

                <a href="https://github.com/Najeebullah49/OnlineTailorService.git" class="btn-github">
                  <i class="bi bi-github"></i> GitHub
                </a>
              </div>

            </div>
          </div>
        </div>

          


        </div>
    </div>
</section>




</body>
</html>
@endsection