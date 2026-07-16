@extends('portfolio.portfoliolayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@section('title') Skills Section @endsection</title>
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
      background-color: #0f172a;
      font-family: Arial, sans-serif;
      color: white;
    }

    .skills-section {
      padding: 80px 0;
      min-height: 100vh;
    }

    .section-title {
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .section-title span {
      color: #38bdf8;
    }

    .section-subtitle {
      text-align: center;
      color: #cbd5e1;
      max-width: 700px;
      margin: auto;
      margin-bottom: 60px;
      line-height: 1.8;
    }

    .skill-card {
      background: #1e293b;
      border-radius: 20px;
      padding: 30px;
      height: 100%;
      transition: 0.3s;
      border: 1px solid transparent;
    }

    .skill-card:hover {
      transform: translateY(-8px);
      border-color: #38bdf8;
      background: #243447;
    }

    .skill-icon {
      font-size: 45px;
      color: #38bdf8;
      margin-bottom: 20px;
    }

    .skill-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .skill-item {
      margin-bottom: 20px;
    }

    .skill-name {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
      font-size: 15px;
    }

    .progress {
      height: 10px;
      border-radius: 20px;
      background: #334155;
    }

    .progress-bar {
      background: #38bdf8;
      border-radius: 20px;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 32px;
      }

      .skill-card {
        padding: 25px;
      }
    }
  </style>
</head>
<body>

  <section class="skills-section">
    <div class="container">

      <!-- Heading -->
      <h1 class="section-title">
        My <span>Skills</span>
      </h1>

      <p class="section-subtitle">
        Here are the technologies and tools I use to build modern,
        responsive, and user-friendly web applications.
      </p>

      <div class="row g-4">

        <!-- Frontend Skills -->
        <div class="col-lg-4 col-md-6">
          <div class="skill-card">

            <i class="bi bi-code-slash skill-icon"></i>

            <h3 class="skill-title">Frontend</h3>

            <!-- HTML -->
            <div class="skill-item">
              <div class="skill-name">
                <span>HTML</span>
                <span>95%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 95%;"></div>
              </div>
            </div>

            <!-- CSS -->
            <div class="skill-item">
              <div class="skill-name">
                <span>CSS</span>
                <span>90%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 90%;"></div>
              </div>
            </div>

            <!-- Bootstrap -->
            <div class="skill-item">
              <div class="skill-name">
                <span>Bootstrap</span>
                <span>92%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 92%;"></div>
              </div>
            </div>

            <!-- JavaScript -->
            <div class="skill-item">
              <div class="skill-name">
                <span>JavaScript</span>
                <span>80%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 80%;"></div>
              </div>
            </div>

          </div>
        </div>

        <!-- Backend Skills -->
        <div class="col-lg-4 col-md-6">
          <div class="skill-card">

            <i class="bi bi-server skill-icon"></i>

            <h3 class="skill-title">Backend</h3>

            <!-- PHP -->
            <div class="skill-item">
              <div class="skill-name">
                <span>PHP</span>
                <span>88%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 88%;"></div>
              </div>
            </div>

            <!-- Laravel -->
            <div class="skill-item">
              <div class="skill-name">
                <span>Laravel</span>
                <span>85%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 85%;"></div>
              </div>
            </div>

            <!-- MySQL -->
            <div class="skill-item">
              <div class="skill-name">
                <span>MySQL</span>
                <span>82%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 82%;"></div>
              </div>
            </div>

            <!-- API -->
            <div class="skill-item">
              <div class="skill-name">
                <span>REST API</span>
                <span>75%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 75%;"></div>
              </div>
            </div>

          </div>
        </div>

        <!-- Tools & Learning -->
        <div class="col-lg-4 col-md-12">
          <div class="skill-card">

            <i class="bi bi-tools skill-icon"></i>

            <h3 class="skill-title">Tools & Learning</h3>

            <!-- Git -->
            <div class="skill-item">
              <div class="skill-name">
                <span>Git & GitHub</span>
                <span>80%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 80%;"></div>
              </div>
            </div>

            <!-- VS Code -->
            <div class="skill-item">
              <div class="skill-name">
                <span>VS Code</span>
                <span>90%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 90%;"></div>
              </div>
            </div>

            <!-- Dart -->
            <div class="skill-item">
              <div class="skill-name">
                <span>Dart</span>
                <span>60%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>
            </div>

            <!-- Flutter -->
            <div class="skill-item">
              <div class="skill-name">
                <span>Flutter</span>
                <span>50%</span>
              </div>

              <div class="progress">
                <div class="progress-bar" style="width: 50%;"></div>
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