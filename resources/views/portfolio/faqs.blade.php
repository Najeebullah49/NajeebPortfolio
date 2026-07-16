@extends('portfolio.portfoliolayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FAQs</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background: white;
      color: black;
      font-family: Arial, sans-serif;
    }

    .faq-section {
      padding: 80px 0;
      min-height: 100vh;
    }

    .section-title {
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .section-title span {
      color: #60a5fa;
    }

    .section-subtitle {
      text-align: center;
      color: black;
      max-width: 700px;
      margin: auto;
      margin-bottom: 50px;
      line-height: 1.7;
    }

    /* Accordion Styling */
    .accordion-item {
      background: #1f2937;
      border: 1px solid #374151;
      border-radius: 12px !important;
      margin-bottom: 15px;
      overflow: hidden;
    }

    .accordion-button {
      background: #1f2937;
      color: #fff;
      font-weight: 600;
      box-shadow: none !important;
    }

    .accordion-button:not(.collapsed) {
      background: #273549;
      color: #60a5fa;
    }

    .accordion-button::after {
      filter: invert(1);
    }

    .accordion-body {
      color: #cbd5e1;
      line-height: 1.7;
      background: #111827;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .section-title {
        font-size: 32px;
      }
    }
  </style>
</head>

<body>

<section class="faq-section">
  <div class="container">

    <!-- Heading -->
    <h1 class="section-title">
      Frequently Asked Questions
    </h1>

    <p class="section-subtitle">
      Here are some common questions about my services, skills, and development process.
    </p>

    <!-- Accordion -->
    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            What technologies do you use for web development?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            I use HTML, CSS, Bootstrap, JavaScript for frontend and PHP, Laravel, MySQL for backend development.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Do you build responsive websites?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, all websites I build are fully responsive and work on mobile, tablet, and desktop devices.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Can I see your projects before hiring you?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, you can view my projects section and GitHub profile where I upload all my work with live demos and source code.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Are you available for freelance work?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, I am available for freelance and full-time web development opportunities.
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

   <!-- Before the closing </body> tag -->
<script src="{{asset('css/js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>
@endsection