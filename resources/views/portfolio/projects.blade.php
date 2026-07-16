@extends('portfolio.portfoliolayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@section('title') Projects @endsection</title>
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
      background: linear-gradient(to bottom, #111827, #1e293b);
      font-family: Arial, sans-serif;
      color: white;
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
      color: #cbd5e1;
      max-width: 700px;
      margin: auto;
      margin-bottom: 60px;
      line-height: 1.8;
    }

    /* Project Card */
    .project-card {
      background: #1f2937;
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
      color: #ffffff;
    }

    .project-description {
      color: #d1d5db;
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
      background: #374151;
      color: #60a5fa;
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
      background: #3b82f6;
      color: white;
    }

    .btn-github {
      border: 1px solid #60a5fa;
      color: #60a5fa;
      padding: 10px 20px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-github:hover {
      background: #60a5fa;
      color: #111827;
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

  <section class="projects-section">
    <div class="container">

      <!-- Heading -->
      <h1 class="section-title">
        My <span>Projects</span>
      </h1>

      <p class="section-subtitle">
        Here are some of the projects I have developed using Laravel,
        PHP, JavaScript, Bootstrap, and MySQL.
      </p>

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