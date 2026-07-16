@extends('portfolio.portfoliolayout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C Language Complete Course</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            overflow:auto;
            background:#f8f9fa;
        }

        .sidebar{
            height:100vh;
            overflow-y:auto;
            background:#212529;
        }

        .sidebar a{

            color:white;

            text-decoration:none;

            padding:12px;

            display:block;

            border-bottom:1px solid #444;

            transition:.3s;

        }

        .sidebar a:hover{

            background:#0d6efd;

        }

        .content{

            height:100vh;

            overflow-y:auto;

            padding:30px;

            background:white;

        }

        @media(max-width:768px){

            body{

                overflow:auto;

            }

            .sidebar{

                height:auto;

            }

            .content{

                height:auto;

            }

        }

    </style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->

<div class="col-md-3 sidebar p-0">

    <h3 class="text-center text-white py-3 border-bottom">
        Laravel
    </h3>
<a href="#" onclick="showLesson(0); return false;">Laravel Home</a>

<a href="#" onclick="showLesson(1); return false;">Introduction to Laravel</a>

<a href="#" onclick="showLesson(2); return false;">History of Laravel</a>

<a href="#" onclick="showLesson(3); return false;">Features of Laravel</a>

<a href="#" onclick="showLesson(4); return false;">Laravel Installation</a>
<a href="#" onclick="showLesson(5); return false;">Laravel Requirements</a>
<a href="#" onclick="showLesson(6); return false;">Laravel Project Structure</a>


<a href="#" onclick="showLesson(7); return false;">Laravel MVC Architecture</a>

<a href="#" onclick="showLesson(8); return false;">Laravel Routing</a>

<a href="#" onclick="showLesson(9); return false;">Route Parameters</a>

<a href="#" onclick="showLesson(10); return false;">Named Routes</a>

<a href="#" onclick="showLesson(11); return false;">Controllers</a>

<a href="#" onclick="showLesson(12); return false;">Resource Controllers</a>

<a href="#" onclick="showLesson(13); return false;">Middleware</a>

<a href="#" onclick="showLesson(14); return false;">Blade Template Engine</a>

<a href="#" onclick="showLesson(15); return false;">Blade Layouts</a>

<a href="#" onclick="showLesson(16); return false;">Blade Components</a>

<a href="#" onclick="showLesson(17); return false;">Forms & CSRF Protection</a>

<a href="#" onclick="showLesson(18); return false;">Request Handling</a>

<a href="#" onclick="showLesson(19); return false;">Validation</a>

<a href="#" onclick="showLesson(20); return false;">Sessions & Cookies</a>

<a href="#" onclick="showLesson(21); return false;">Laravel Database Configuration</a>

<a href="#" onclick="showLesson(22); return false;">Migrations</a>

<a href="#" onclick="showLesson(23); return false;">Database Seeders</a>

<a href="#" onclick="showLesson(24); return false;">Factories</a>

<a href="#" onclick="showLesson(25); return false;">Eloquent ORM</a>

<a href="#" onclick="showLesson(26); return false;">Models</a>

<a href="#" onclick="showLesson(27); return false;">Eloquent Relationships</a>

<a href="#" onclick="showLesson(28); return false;">Query Builder</a>

<a href="#" onclick="showLesson(29); return false;">CRUD Operations</a>

<a href="#" onclick="showLesson(30); return false;">File Uploading</a>

<a href="#" onclick="showLesson(31); return false;">Authentication System</a>

<a href="#" onclick="showLesson(32); return false;">Authorization & Gates</a>

<a href="#" onclick="showLesson(33); return false;">Laravel Breeze</a>

<a href="#" onclick="showLesson(34); return false;">Laravel Jetstream</a>

<a href="#" onclick="showLesson(35); return false;">Email Sending</a>

<a href="#" onclick="showLesson(36); return false;">Notifications</a>

<a href="#" onclick="showLesson(37); return false;">Queues & Jobs</a>

<a href="#" onclick="showLesson(38); return false;">Events & Listeners</a>

<a href="#" onclick="showLesson(39); return false;">Laravel APIs</a>

<a href="#" onclick="showLesson(40); return false;">Laravel Sanctum Authentication</a>

<a href="#" onclick="showLesson(41); return false;">Laravel Security</a>

<a href="#" onclick="showLesson(42); return false;">Laravel Performance Optimization</a>

<a href="#" onclick="showLesson(43); return false;">Laravel Deployment</a>

<a href="#" onclick="showLesson(44); return false;">Laravel Mini Projects</a>

<a href="#" onclick="showLesson(45); return false;">Laravel Best Practices</a>

<a href="#" onclick="showLesson(46); return false;">Laravel Interview Questions</a>

</div>
<!-- Content -->
<div class="col-md-9 content">

    <div id="lessonContent"></div>

    <div class="mt-4">

        <button class="btn btn-primary" onclick="previousLesson()">
            Previous
        </button>

        <button class="btn btn-success float-end" onclick="nextLesson()">
            Next
        </button>

    </div>

</div>



</div>

</div>

<script>

const lessons = [

{
title:"Laravel Home",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Home
            </h2>

            <p class="lead">
                <strong>Laravel</strong> is one of the world's most popular PHP frameworks used for developing modern, secure, fast, and scalable web applications. It follows the <strong>MVC (Model-View-Controller)</strong> architecture, making code organized and easy to maintain.
            </p>

            <p>
                Laravel was created to simplify web development by providing built-in tools for routing, authentication, database management, security, caching, file uploading, email sending, API development, and much more. Whether you are building a small website or a large enterprise application, Laravel provides everything required for professional web development.
            </p>

            <div class="alert alert-primary">
                <strong>Definition:</strong>
                Laravel is an open-source PHP web application framework designed to make web development faster, cleaner, and more enjoyable using elegant syntax and powerful built-in features.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Learn Laravel?
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Easy to learn with clean and readable syntax.
                </li>

                <li class="list-group-item">
                    Follows MVC architecture for organized development.
                </li>

                <li class="list-group-item">
                    Provides built-in authentication and authorization.
                </li>

                <li class="list-group-item">
                    Includes Eloquent ORM for easy database operations.
                </li>

                <li class="list-group-item">
                    Makes routing simple and powerful.
                </li>

                <li class="list-group-item">
                    Supports RESTful API development.
                </li>

                <li class="list-group-item">
                    Offers strong security against common web attacks.
                </li>

                <li class="list-group-item">
                    Used by thousands of companies worldwide.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What You Will Learn in This Course
            </h2>

            <div class="row g-3">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">Laravel Installation</li>

                        <li class="list-group-item">Project Structure</li>

                        <li class="list-group-item">MVC Architecture</li>

                        <li class="list-group-item">Routing</li>

                        <li class="list-group-item">Controllers</li>

                        <li class="list-group-item">Middleware</li>

                        <li class="list-group-item">Blade Template Engine</li>

                        <li class="list-group-item">Forms & Validation</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">Database Configuration</li>

                        <li class="list-group-item">Migrations & Seeders</li>

                        <li class="list-group-item">Models & Eloquent ORM</li>

                        <li class="list-group-item">CRUD Operations</li>

                        <li class="list-group-item">Authentication</li>

                        <li class="list-group-item">REST APIs</li>

                        <li class="list-group-item">Deployment</li>

                        <li class="list-group-item">Mini Projects & Interview Questions</li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Laravel Development Workflow
            </h2>

            <div class="row text-center">

                <div class="col-md-3 mb-3">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5>Step 1</h5>

                            <p>Create Laravel Project</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5>Step 2</h5>

                            <p>Create Routes & Controllers</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5>Step 3</h5>

                            <p>Design Views Using Blade</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card h-100 border-danger">

                        <div class="card-body">

                            <h5>Step 4</h5>

                            <p>Connect Database & Deploy</p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Popular Laravel Features
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Feature</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>MVC Architecture</td>

                        <td>Separates application logic, user interface, and database operations.</td>

                    </tr>

                    <tr>

                        <td>Blade</td>

                        <td>Fast and lightweight templating engine.</td>

                    </tr>

                    <tr>

                        <td>Eloquent ORM</td>

                        <td>Simple database interaction using PHP models.</td>

                    </tr>

                    <tr>

                        <td>Routing</td>

                        <td>Easy URL management.</td>

                    </tr>

                    <tr>

                        <td>Authentication</td>

                        <td>Ready-made login and registration system.</td>

                    </tr>

                    <tr>

                        <td>Migration</td>

                        <td>Version control for database structure.</td>

                    </tr>

                    <tr>

                        <td>Queues</td>

                        <td>Execute heavy tasks in the background.</td>

                    </tr>

                    <tr>

                        <td>API Development</td>

                        <td>Create secure REST APIs quickly.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Companies Using Laravel
            </h2>

            <ul>

                <li>9GAG</li>

                <li>Alison</li>

                <li>Invoice Ninja</li>

                <li>October CMS</li>

                <li>World Walking</li>

                <li>MyRank</li>

                <li>Thousands of startups and enterprise companies worldwide.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Career Opportunities
            </h2>

            <p>
                Learning Laravel opens many career opportunities in web development. Laravel developers are in high demand for building business websites, e-commerce applications, management systems, REST APIs, SaaS platforms, and enterprise software.
            </p>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Job Role</th>

                        <th>Main Responsibility</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Laravel Developer</td>

                        <td>Develop complete web applications.</td>

                    </tr>

                    <tr>

                        <td>Backend Developer</td>

                        <td>Create APIs and business logic.</td>

                    </tr>

                    <tr>

                        <td>Full Stack Developer</td>

                        <td>Develop frontend and backend.</td>

                    </tr>

                    <tr>

                        <td>Software Engineer</td>

                        <td>Build enterprise applications.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Laravel is a modern PHP framework that simplifies web development through elegant syntax, MVC architecture, powerful database tools, authentication, routing, Blade templates, APIs, and many built-in features. This course will guide you from beginner to advanced Laravel development with practical examples, projects, and interview preparation.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Introduction to Laravel",
content:`

<div class="container-fluid py-3">

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Introduction to Laravel
            </h2>

            <p class="lead">
                <strong>Laravel</strong> is a free, open-source PHP web application framework designed to make web development faster, easier, and more enjoyable. It provides an elegant syntax and powerful built-in features that allow developers to build modern, secure, and scalable web applications with less code.
            </p>

            <p>
                Laravel follows the <strong>MVC (Model-View-Controller)</strong> architectural pattern, which separates application logic, user interface, and database operations into different layers. This makes applications organized, maintainable, reusable, and easier to develop.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Laravel is an open-source PHP framework that simplifies web application development by providing built-in tools for routing, authentication, database management, validation, sessions, file uploads, email sending, API development, caching, and many other common web development tasks.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Was Laravel Created?
            </h2>

            <p>
                Before Laravel, PHP developers often had to write the same code repeatedly for authentication, routing, validation, sessions, database operations, and security. Laravel was created to solve these problems by providing ready-made tools and a clean project structure.
            </p>

            <p>
                Laravel reduces development time, improves code quality, and allows developers to focus on building application features instead of writing repetitive code.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Learn Laravel?
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Easy to learn with clean and readable syntax.
                </li>

                <li class="list-group-item">
                    One of the most popular PHP frameworks.
                </li>

                <li class="list-group-item">
                    Excellent documentation and community support.
                </li>

                <li class="list-group-item">
                    Built-in authentication and authorization.
                </li>

                <li class="list-group-item">
                    Easy database management using Eloquent ORM.
                </li>

                <li class="list-group-item">
                    Powerful routing system.
                </li>

                <li class="list-group-item">
                    Supports RESTful API development.
                </li>

                <li class="list-group-item">
                    High demand in the software industry.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Laravel Architecture
            </h2>

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="card border-primary h-100">

                        <div class="card-body text-center">

                            <h4>Model</h4>

                            <p>
                                Handles database operations and business logic.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card border-success h-100">

                        <div class="card-body text-center">

                            <h4>View</h4>

                            <p>
                                Displays data to users using Blade templates.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card border-warning h-100">

                        <div class="card-body text-center">

                            <h4>Controller</h4>

                            <p>
                                Connects Models and Views while processing requests.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Main Features of Laravel
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Feature</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Routing</td>

                        <td>Create clean and simple URLs.</td>

                    </tr>

                    <tr>

                        <td>Blade Template</td>

                        <td>Fast and lightweight template engine.</td>

                    </tr>

                    <tr>

                        <td>Eloquent ORM</td>

                        <td>Database interaction using PHP models.</td>

                    </tr>

                    <tr>

                        <td>Migration</td>

                        <td>Manage database structure using PHP.</td>

                    </tr>

                    <tr>

                        <td>Authentication</td>

                        <td>Ready-made login and registration system.</td>

                    </tr>

                    <tr>

                        <td>Validation</td>

                        <td>Validate user input easily.</td>

                    </tr>

                    <tr>

                        <td>Middleware</td>

                        <td>Filter incoming HTTP requests.</td>

                    </tr>

                    <tr>

                        <td>REST API</td>

                        <td>Create secure APIs quickly.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Applications Built with Laravel
            </h2>

            <ul>

                <li>E-Commerce Websites</li>

                <li>School Management Systems</li>

                <li>Hospital Management Systems</li>

                <li>Inventory Management Systems</li>

                <li>Content Management Systems (CMS)</li>

                <li>Customer Relationship Management (CRM)</li>

                <li>Learning Management Systems (LMS)</li>

                <li>REST API Backends</li>

                <li>Business Websites</li>

                <li>Social Networking Platforms</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Laravel
            </h2>

            <div class="row">

                <div class="col-lg-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Open Source
                        </li>

                        <li class="list-group-item">
                            Secure Framework
                        </li>

                        <li class="list-group-item">
                            Fast Development
                        </li>

                        <li class="list-group-item">
                            Clean Code Structure
                        </li>

                        <li class="list-group-item">
                            Excellent Documentation
                        </li>

                    </ul>

                </div>

                <div class="col-lg-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Powerful ORM
                        </li>

                        <li class="list-group-item">
                            Built-in Authentication
                        </li>

                        <li class="list-group-item">
                            Queue System
                        </li>

                        <li class="list-group-item">
                            Caching Support
                        </li>

                        <li class="list-group-item">
                            Large Community Support
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Basic Laravel Request Flow
            </h2>

            <div class="card bg-light">

                <div class="card-body">

                    <p class="mb-0 text-center fw-bold">

                        User Request

                        →

                        Route

                        →

                        Controller

                        →

                        Model (Database)

                        →

                        View (Blade)

                        →

                        Browser

                    </p>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Who Should Learn Laravel?
            </h2>

            <ul>

                <li>PHP Beginners</li>

                <li>PHP Developers</li>

                <li>Backend Developers</li>

                <li>Full Stack Developers</li>

                <li>Software Engineering Students</li>

                <li>Freelancers</li>

                <li>Anyone interested in modern web development</li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">

                    Laravel is a powerful, modern, and elegant PHP framework that simplifies web development using MVC architecture. It provides built-in tools for routing, authentication, validation, database management, Blade templates, APIs, security, and many other features. Laravel helps developers build professional, secure, scalable, and maintainable web applications quickly and efficiently.

                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"History of Laravel",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                History of Laravel
            </h2>

            <p class="lead">
                <strong>Laravel</strong> is one of the most popular PHP frameworks in the world. It was created to make web application development faster, cleaner, and more enjoyable. Before Laravel existed, PHP developers had to write a large amount of repetitive code and manage many common tasks manually.
            </p>

            <div class="alert alert-primary">
                <strong>Definition:</strong>
                Laravel is an open-source PHP framework introduced in 2011 to simplify modern web development using elegant syntax, the MVC architecture, and many built-in development tools.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Web Development Before Laravel
            </h2>

            <p>
                Before Laravel was released, PHP was already one of the most widely used programming languages for web development. Developers commonly used plain PHP or frameworks such as CodeIgniter, CakePHP, Zend Framework, and Symfony.
            </p>

            <p>
                Although these frameworks were useful, developers still faced many challenges when building modern web applications.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>Common Problem</th>
                        <th>Description</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Authentication</td>
                        <td>Developers had to build login and registration systems manually.</td>
                    </tr>

                    <tr>
                        <td>Routing</td>
                        <td>URL management required additional configuration.</td>
                    </tr>

                    <tr>
                        <td>Database</td>
                        <td>Database operations required writing repetitive SQL queries.</td>
                    </tr>

                    <tr>
                        <td>Templates</td>
                        <td>Mixing PHP and HTML made projects difficult to maintain.</td>
                    </tr>

                    <tr>
                        <td>Security</td>
                        <td>Protection against CSRF, XSS, and SQL Injection often required extra coding.</td>
                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Laravel Was Created
            </h2>

            <p>
                Laravel was created to solve the problems that developers experienced while building PHP applications. It provides elegant syntax, reusable components, built-in authentication, routing, database management, validation, caching, queues, API support, and many other features.
            </p>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Before Laravel
                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Lots of repetitive code</li>

                                <li>Manual authentication</li>

                                <li>Complex database code</li>

                                <li>Poor code organization</li>

                                <li>Time-consuming development</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            After Laravel
                        </div>

                        <div class="card-body">

                            <ul>

                                <li>Clean project structure</li>

                                <li>Built-in authentication</li>

                                <li>Eloquent ORM</li>

                                <li>Blade Template Engine</li>

                                <li>Rapid development</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creator of Laravel
            </h2>

            <p>
                Laravel was created by <strong>Taylor Otwell</strong>, an American software developer. While working with existing PHP frameworks, he realized that many features developers needed were either missing or difficult to implement.
            </p>

            <p>
                Taylor Otwell decided to build a new framework that focused on developer productivity, code readability, and modern programming practices.
            </p>

            <div class="alert alert-info">

                <strong>Did You Know?</strong>

                Laravel was initially developed as an advanced alternative to CodeIgniter because CodeIgniter lacked several modern features such as built-in authentication.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                First Release of Laravel
            </h2>

            <table class="table table-bordered">

                <tbody>

                    <tr>

                        <th width="30%">
                            Framework
                        </th>

                        <td>
                            Laravel
                        </td>

                    </tr>

                    <tr>

                        <th>
                            Creator
                        </th>

                        <td>
                            Taylor Otwell
                        </td>

                    </tr>

                    <tr>

                        <th>
                            First Release
                        </th>

                        <td>
                            June 2011
                        </td>

                    </tr>

                    <tr>

                        <th>
                            Programming Language
                        </th>

                        <td>
                            PHP
                        </td>

                    </tr>

                    <tr>

                        <th>
                            License
                        </th>

                        <td>
                            MIT License (Open Source)
                        </td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Evolution of Laravel
            </h2>

            <p>
                Laravel has evolved rapidly over the years. Every major release introduced new features, improved performance, enhanced security, and better developer experience.
            </p>

            <table class="table table-bordered table-hover">

                <thead class="table-primary">

                    <tr>

                        <th>Version</th>

                        <th>Release Year</th>

                        <th>Major Features</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Laravel 1</td>

                        <td>2011</td>

                        <td>Basic routing, authentication, localization, views.</td>

                    </tr>

                    <tr>

                        <td>Laravel 2</td>

                        <td>2011</td>

                        <td>Controller support, IoC Container, Blade improvements.</td>

                    </tr>

                    <tr>

                        <td>Laravel 3</td>

                        <td>2012</td>

                        <td>Artisan CLI, Database migrations, Bundles.</td>

                    </tr>

                    <tr>

                        <td>Laravel 4</td>

                        <td>2013</td>

                        <td>Composer integration, Package system, Better architecture.</td>

                    </tr>

                    <tr>

                        <td>Laravel 5</td>

                        <td>2015</td>

                        <td>Middleware, Blade improvements, Task scheduling, Flysystem.</td>

                    </tr>

                    <tr>

                        <td>Laravel 6 (LTS)</td>

                        <td>2019</td>

                        <td>Long-Term Support, Improved Authorization, Better Performance.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-warning">

                <strong>Coming Next:</strong>

                In Part 2, you'll learn about Laravel 7, 8, 9, 10, 11, and 12, along with the latest features, why Laravel became the world's most popular PHP framework, and a comparison with other PHP frameworks.

            </div>

        </div>

    </div>

</div>



<hr>

<h2 class="text-primary mb-3">
    Laravel 7 to Laravel 12
</h2>

<p>
    Laravel continued to evolve after Laravel 6 by introducing many modern features that made web application development faster, more secure, and more developer-friendly. Each new version focused on improving performance, simplifying coding, and supporting the latest PHP features.
</p>

<div class="table-responsive">

<table class="table table-bordered table-hover">

    <thead class="table-dark">

        <tr>

            <th>Version</th>

            <th>Release Year</th>

            <th>Major Features</th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td>Laravel 7</td>

            <td>2020</td>

            <td>
                Blade Components, HTTP Client, Custom Eloquent Casts,
                Faster Routing, CORS Support.
            </td>

        </tr>

        <tr>

            <td>Laravel 8</td>

            <td>2020</td>

            <td>
                Laravel Jetstream, Model Factory Classes,
                Job Batching, Dynamic Blade Components.
            </td>

        </tr>

        <tr>

            <td>Laravel 9</td>

            <td>2022</td>

            <td>
                Symfony 6 Support, PHP 8 Required,
                Anonymous Stub Migrations, Improved Query Builder.
            </td>

        </tr>

        <tr>

            <td>Laravel 10</td>

            <td>2023</td>

            <td>
                Performance Improvements,
                Better Testing Tools,
                Native Type Declarations,
                Security Enhancements.
            </td>

        </tr>

        <tr>

            <td>Laravel 11</td>

            <td>2024</td>

            <td>
                Simplified Project Structure,
                Cleaner Configuration,
                Better Performance,
                Improved Artisan Commands.
            </td>

        </tr>

        <tr>

            <td>Laravel 12</td>

            <td>2025</td>

            <td>
                Latest PHP Support,
                Performance Optimizations,
                Enhanced Security,
                Improved Developer Experience.
            </td>

        </tr>

    </tbody>

</table>

</div>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Major Milestones in Laravel
</h2>

<div class="row g-3">

    <div class="col-md-4">

        <div class="card border-primary h-100">

            <div class="card-body">

                <h5 class="text-primary">
                    2011
                </h5>

                <p>
                    Laravel was introduced by Taylor Otwell as a modern PHP framework.
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-success h-100">

            <div class="card-body">

                <h5 class="text-success">
                    2015
                </h5>

                <p>
                    Laravel 5 became one of the most widely adopted PHP frameworks.
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-warning h-100">

            <div class="card-body">

                <h5 class="text-warning">
                    Today
                </h5>

                <p>
                    Laravel powers thousands of websites and enterprise applications worldwide.
                </p>

            </div>

        </div>

    </div>

</div>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Why Laravel Became So Popular
</h2>

<ul class="list-group">

    <li class="list-group-item">
        Elegant and clean syntax.
    </li>

    <li class="list-group-item">
        Easy to learn for beginners.
    </li>

    <li class="list-group-item">
        Excellent official documentation.
    </li>

    <li class="list-group-item">
        Powerful Blade Template Engine.
    </li>

    <li class="list-group-item">
        Built-in Authentication and Authorization.
    </li>

    <li class="list-group-item">
        Eloquent ORM simplifies database operations.
    </li>

    <li class="list-group-item">
        Large open-source community.
    </li>

    <li class="list-group-item">
        Regular updates and long-term support versions.
    </li>

    <li class="list-group-item">
        Strong security features.
    </li>

    <li class="list-group-item">
        Excellent performance for modern web applications.
    </li>

</ul>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Laravel Compared with Other PHP Frameworks
</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

    <thead class="table-primary">

        <tr>

            <th>Framework</th>

            <th>Main Feature</th>

            <th>Difficulty</th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td>Laravel</td>

            <td>Modern, Feature Rich, MVC, Eloquent ORM</td>

            <td>Easy</td>

        </tr>

        <tr>

            <td>CodeIgniter</td>

            <td>Lightweight Framework</td>

            <td>Easy</td>

        </tr>

        <tr>

            <td>Symfony</td>

            <td>Enterprise Applications</td>

            <td>Advanced</td>

        </tr>

        <tr>

            <td>CakePHP</td>

            <td>Rapid Development</td>

            <td>Medium</td>

        </tr>

        <tr>

            <td>Yii</td>

            <td>High Performance</td>

            <td>Medium</td>

        </tr>

    </tbody>

</table>

</div>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Laravel Ecosystem
</h2>

<p>
    Over the years, Laravel has grown into a complete ecosystem with many official packages and tools that make development easier.
</p>

<div class="row">

    <div class="col-lg-6">

        <ul class="list-group">

            <li class="list-group-item">
                Laravel Breeze
            </li>

            <li class="list-group-item">
                Laravel Jetstream
            </li>

            <li class="list-group-item">
                Laravel Sanctum
            </li>

            <li class="list-group-item">
                Laravel Passport
            </li>

            <li class="list-group-item">
                Laravel Sail
            </li>

        </ul>

    </div>

    <div class="col-lg-6">

        <ul class="list-group">

            <li class="list-group-item">
                Laravel Forge
            </li>

            <li class="list-group-item">
                Laravel Vapor
            </li>

            <li class="list-group-item">
                Laravel Nova
            </li>

            <li class="list-group-item">
                Laravel Telescope
            </li>

            <li class="list-group-item">
                Laravel Horizon
            </li>

        </ul>

    </div>

</div>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Industries Using Laravel
</h2>

<ul>

    <li>E-Commerce Websites</li>

    <li>School Management Systems</li>

    <li>Hospital Management Systems</li>

    <li>Inventory Systems</li>

    <li>Learning Management Systems (LMS)</li>

    <li>Customer Relationship Management (CRM)</li>

    <li>Business Websites</li>

    <li>REST APIs</li>

    <li>SaaS Applications</li>

    <li>Enterprise Software</li>

</ul>

<hr class="my-4">

<h2 class="text-primary mb-3">
    Future of Laravel
</h2>

<p>
    Laravel continues to receive regular updates from its creator and contributors around the world. Each new version introduces improved performance, modern PHP support, enhanced security, and developer-friendly features. Because of its active community and continuous innovation, Laravel is expected to remain one of the leading PHP frameworks for many years.
</p>

<hr class="my-4">

<div class="alert alert-success">

    <h4 class="fw-bold">
        Summary
    </h4>

    <p class="mb-0">

        Laravel was created by <strong>Taylor Otwell</strong> in <strong>2011</strong> to simplify PHP web development. Over the years, it has evolved into one of the most popular PHP frameworks by providing elegant syntax, MVC architecture, Blade templating, Eloquent ORM, authentication, routing, migrations, API development, and many other built-in features. Today, Laravel is trusted by developers and organizations worldwide for building secure, scalable, and modern web applications.

    </p>

</div>

`
},

{
title:"Features of Laravel",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Features of Laravel
            </h2>

            <p class="lead">
                <strong>Laravel</strong> is one of the most powerful PHP frameworks because it provides numerous built-in features that make web development faster, easier, secure, and more organized. Developers do not need to build everything from scratch because Laravel already includes many useful tools.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Laravel provides a collection of built-in features such as MVC architecture, routing, authentication, Eloquent ORM, Blade templates, validation, security, caching, queues, APIs, and many more that simplify web application development.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Major Features of Laravel
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th width="35%">Feature</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>MVC Architecture</td>

                        <td>Separates application into Model, View, and Controller for clean and maintainable code.</td>

                    </tr>

                    <tr>

                        <td>Elegant Routing</td>

                        <td>Create clean and readable URLs with simple routing syntax.</td>

                    </tr>

                    <tr>

                        <td>Blade Template Engine</td>

                        <td>Lightweight template engine for creating reusable layouts and views.</td>

                    </tr>

                    <tr>

                        <td>Eloquent ORM</td>

                        <td>Interact with databases using PHP models instead of writing SQL queries.</td>

                    </tr>

                    <tr>

                        <td>Authentication</td>

                        <td>Built-in login, registration, password reset, and email verification.</td>

                    </tr>

                    <tr>

                        <td>Authorization</td>

                        <td>Manage user permissions using Gates and Policies.</td>

                    </tr>

                    <tr>

                        <td>Validation</td>

                        <td>Validate user input with simple validation rules.</td>

                    </tr>

                    <tr>

                        <td>Security</td>

                        <td>Protects applications against SQL Injection, XSS, and CSRF attacks.</td>

                    </tr>

                    <tr>

                        <td>REST API Support</td>

                        <td>Quickly build secure RESTful APIs.</td>

                    </tr>

                    <tr>

                        <td>Artisan CLI</td>

                        <td>Powerful command-line tool for generating code and managing projects.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                1. MVC Architecture
            </h2>

            <p>
                Laravel follows the Model-View-Controller (MVC) architecture. It separates business logic, user interface, and database operations into different components, making applications easier to develop and maintain.
            </p>

            <div class="row">

                <div class="col-md-4">

                    <div class="card border-primary">

                        <div class="card-body text-center">

                            <h5>Model</h5>

                            <p>Handles database operations.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card border-success">

                        <div class="card-body text-center">

                            <h5>View</h5>

                            <p>Displays information to users.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card border-warning">

                        <div class="card-body text-center">

                            <h5>Controller</h5>

                            <p>Connects Model and View.</p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                2. Blade Template Engine
            </h2>

            <p>
                Blade is Laravel's built-in templating engine. It allows developers to create reusable layouts, components, and templates using simple syntax.
            </p>

<pre class="bg-light p-3 border rounded">
<code>
&#64;extends('layout')

&#64;section('content')

&lt;h2&gt;Welcome to Laravel&lt;/h2&gt;

&#64;endsection
</code>
</pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                3. Eloquent ORM
            </h2>

            <p>
                Eloquent ORM allows developers to interact with database tables using PHP models instead of writing raw SQL queries.
            </p>

<pre class="bg-light p-3 border rounded"><code>
$users = User::all();

$user = User::find(1);
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                4. Routing System
            </h2>

            <p>
                Laravel routing maps URLs to controllers or functions with simple syntax.
            </p>

<pre class="bg-light p-3 border rounded"><code>
Route::get('/', function () {

    return view('welcome');

});
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                5. Authentication
            </h2>

            <p>
                Laravel provides ready-made authentication systems using Laravel Breeze, Jetstream, or Fortify.
            </p>

            <ul>

                <li>User Registration</li>

                <li>Login</li>

                <li>Password Reset</li>

                <li>Email Verification</li>

                <li>Remember Me</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                6. Database Migrations
            </h2>

            <p>
                Migrations allow developers to create and modify database tables using PHP code instead of manually writing SQL.
            </p>

<pre class="bg-light p-3 border rounded"><code>
php artisan make:migration create_users_table
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                7. Security Features
            </h2>

            <ul class="list-group">

                <li class="list-group-item">CSRF Protection</li>

                <li class="list-group-item">SQL Injection Protection</li>

                <li class="list-group-item">Password Hashing</li>

                <li class="list-group-item">XSS Protection</li>

                <li class="list-group-item">Encrypted Cookies</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                8. Artisan Command Line
            </h2>

            <p>
                Artisan is Laravel's command-line interface used to generate code and manage projects.
            </p>

<pre class="bg-light p-3 border rounded"><code>
php artisan serve

php artisan make:controller UserController

php artisan make:model Product

php artisan migrate
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                9. Additional Laravel Features
            </h2>

            <div class="row">

                <div class="col-lg-6">

                    <ul class="list-group">

                        <li class="list-group-item">Middleware</li>

                        <li class="list-group-item">Validation</li>

                        <li class="list-group-item">File Uploading</li>

                        <li class="list-group-item">Mail System</li>

                        <li class="list-group-item">Notifications</li>

                        <li class="list-group-item">Caching</li>

                    </ul>

                </div>

                <div class="col-lg-6">

                    <ul class="list-group">

                        <li class="list-group-item">Queues & Jobs</li>

                        <li class="list-group-item">Events & Listeners</li>

                        <li class="list-group-item">API Authentication</li>

                        <li class="list-group-item">Localization</li>

                        <li class="list-group-item">Task Scheduling</li>

                        <li class="list-group-item">Testing Support</li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Laravel Features
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Feature</th>

                        <th>Benefit</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Blade</td>

                        <td>Reusable and clean templates.</td>

                    </tr>

                    <tr>

                        <td>Eloquent</td>

                        <td>Easy database interaction.</td>

                    </tr>

                    <tr>

                        <td>Routing</td>

                        <td>Simple URL management.</td>

                    </tr>

                    <tr>

                        <td>Authentication</td>

                        <td>Secure user login system.</td>

                    </tr>

                    <tr>

                        <td>Artisan</td>

                        <td>Faster development.</td>

                    </tr>

                    <tr>

                        <td>Security</td>

                        <td>Protects web applications.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Laravel provides a rich collection of built-in features that help developers build secure, scalable, and maintainable web applications. Features like MVC architecture, Blade templates, Eloquent ORM, routing, authentication, migrations, Artisan CLI, validation, security, caching, and API support make Laravel one of the best PHP frameworks available today.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Laravel Installation",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Installation
            </h2>

            <p class="lead">
                Before developing Laravel applications, you must install the required software. Laravel depends on PHP, Composer, and a web server. Once these tools are installed, creating a new Laravel project takes only a few commands.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Laravel installation is the process of setting up all the required software and creating a new Laravel project on your computer.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                System Requirements
            </h2>

            <p>
                Before installing Laravel, make sure your computer meets the following requirements.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Requirement</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>PHP</td>

                        <td>PHP 8.2 or later (recommended latest stable version).</td>

                    </tr>

                    <tr>

                        <td>Composer</td>

                        <td>Dependency manager for PHP packages.</td>

                    </tr>

                    <tr>

                        <td>Database</td>

                        <td>MySQL, MariaDB, PostgreSQL, SQLite, or SQL Server.</td>

                    </tr>

                    <tr>

                        <td>Web Server</td>

                        <td>Apache or Nginx.</td>

                    </tr>

                    <tr>

                        <td>Node.js (Optional)</td>

                        <td>Used for compiling frontend assets with Vite.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Required Software
            </h2>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            PHP
                        </li>

                        <li class="list-group-item">
                            Composer
                        </li>

                        <li class="list-group-item">
                            MySQL or another supported database
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            VS Code or another code editor
                        </li>

                        <li class="list-group-item">
                            XAMPP, Laragon, or Herd (optional)
                        </li>

                        <li class="list-group-item">
                            Node.js and npm (optional)
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 1: Install PHP
            </h2>

            <p>
                Download and install the latest PHP version or use a package such as XAMPP or Laragon that already includes PHP.
            </p>

            <div class="alert alert-info">

                After installation, verify PHP by opening Command Prompt or Terminal and running:

            </div>

<pre class="bg-light border rounded p-3"><code>php -v</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 2: Install Composer
            </h2>

            <p>
                Composer is the dependency manager used by Laravel. It downloads Laravel and all required packages automatically.
            </p>

<pre class="bg-light border rounded p-3"><code>composer --version</code></pre>

            <div class="alert alert-success">

                If Composer displays its version number, it has been installed successfully.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 3: Install Laravel Installer
            </h2>

            <p>
                Laravel provides an official installer that makes creating new projects easier.
            </p>

<pre class="bg-light border rounded p-3"><code>composer global require laravel/installer</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 4: Create a New Laravel Project
            </h2>

            <p>
                Create a new Laravel project using either the Laravel Installer or Composer.
            </p>

<h5 class="mt-3">Using Laravel Installer</h5>

<pre class="bg-light border rounded p-3"><code>laravel new myproject</code></pre>

<h5 class="mt-4">Using Composer</h5>

<pre class="bg-light border rounded p-3"><code>composer create-project laravel/laravel myproject</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 5: Navigate to the Project
            </h2>

<pre class="bg-light border rounded p-3"><code>cd myproject</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Step 6: Start the Development Server
            </h2>

            <p>
                Laravel includes a built-in development server for testing your application.
            </p>

<pre class="bg-light border rounded p-3"><code>php artisan serve</code></pre>

            <p>
                After running the command, Laravel usually starts on:
            </p>

<pre class="bg-light border rounded p-3"><code>http://127.0.0.1:8000</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Verify the Installation
            </h2>

            <p>
                Open your browser and visit:
            </p>

<pre class="bg-light border rounded p-3"><code>http://127.0.0.1:8000</code></pre>

            <p>
                If everything is installed correctly, the Laravel welcome page will appear.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Useful Commands
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Command</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>php artisan serve</td>

                        <td>Start development server</td>

                    </tr>

                    <tr>

                        <td>php artisan --version</td>

                        <td>Display Laravel version</td>

                    </tr>

                    <tr>

                        <td>php artisan list</td>

                        <td>Show all Artisan commands</td>

                    </tr>

                    <tr>

                        <td>composer install</td>

                        <td>Install project dependencies</td>

                    </tr>

                    <tr>

                        <td>composer update</td>

                        <td>Update dependencies</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Installation Errors
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-warning">

                    <tr>

                        <th>Error</th>

                        <th>Solution</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>'php' is not recognized</td>

                        <td>Add PHP to the system PATH.</td>

                    </tr>

                    <tr>

                        <td>'composer' is not recognized</td>

                        <td>Install Composer and restart the terminal.</td>

                    </tr>

                    <tr>

                        <td>Missing PHP Extensions</td>

                        <td>Enable required extensions in php.ini.</td>

                    </tr>

                    <tr>

                        <td>Permission Denied</td>

                        <td>Run the terminal with proper permissions.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Installing Laravel requires PHP, Composer, and a supported database. After installing the required software, you can create a new Laravel project, start the built-in development server using <strong>php artisan serve</strong>, and begin building modern web applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},
{
title:"Laravel Requirements",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Requirements
            </h2>


            <p class="lead">
                Laravel requires a proper development environment before
                creating applications. Developers need PHP, Composer,
                database systems, web servers, and required PHP extensions
                to run Laravel successfully.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What are Laravel Requirements?
            </h4>


            <p>
                Laravel requirements are the software and server components
                needed to install, develop, and run Laravel applications.
                These requirements may change depending on the Laravel
                version.
            </p>







            <h2 class="text-primary mt-5">
                Basic Laravel Environment
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Laravel Application

        ↓

PHP

        ↓

Composer

        ↓

Database

        ↓

Web Server

        ↓

Operating System


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel System Requirements
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>
                                Requirement
                            </th>


                            <th>
                                Purpose
                            </th>


                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                PHP
                            </td>


                            <td>
                                Runs Laravel framework.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                Composer
                            </td>


                            <td>
                                Manages Laravel packages.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                Database
                            </td>


                            <td>
                                Stores application data.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                Web Server
                            </td>


                            <td>
                                Serves Laravel application.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                Node.js & NPM
                            </td>


                            <td>
                                Builds frontend assets.
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                1. PHP Requirement
            </h2>


            <p>
                PHP is the main programming language used by Laravel.
                Laravel requires a supported PHP version to run properly.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Check PHP Version:


php -v


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Required PHP Extensions
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    OpenSSL Extension
                </li>


                <li class="list-group-item">
                    PDO Extension
                </li>


                <li class="list-group-item">
                    Mbstring Extension
                </li>


                <li class="list-group-item">
                    Tokenizer Extension
                </li>


                <li class="list-group-item">
                    XML Extension
                </li>


                <li class="list-group-item">
                    Ctype Extension
                </li>


                <li class="list-group-item">
                    JSON Extension
                </li>


                <li class="list-group-item">
                    BCMath Extension
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                2. Composer Requirement
            </h2>


            <p>
                Composer is a dependency manager for PHP. Laravel uses
                Composer to install packages and manage libraries.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Check Composer Version:


composer -V


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Install Laravel Using Composer
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

composer create-project

laravel/laravel

MyProject


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Database Requirements
            </h2>


            <p>
                Laravel supports multiple database systems for storing
                application data.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>
                                Database
                            </th>


                            <th>
                                Usage
                            </th>


                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                MySQL
                            </td>


                            <td>
                                Most commonly used database.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                PostgreSQL
                            </td>


                            <td>
                                Advanced database features.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                SQLite
                            </td>


                            <td>
                                Lightweight development database.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                SQL Server
                            </td>


                            <td>
                                Microsoft database system.
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                4. Web Server Requirements
            </h2>


            <p>
                Laravel applications require a web server to handle HTTP
                requests.
            </p>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm text-center h-100">


                        <div class="card-body">


                            <h5>
                                Apache
                            </h5>


                            <p>
                                Popular web server.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm text-center h-100">


                        <div class="card-body">


                            <h5>
                                Nginx
                            </h5>


                            <p>
                                High performance server.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm text-center h-100">


                        <div class="card-body">


                            <h5>
                                Laravel Sail
                            </h5>


                            <p>
                                Docker development environment.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm text-center h-100">


                        <div class="card-body">


                            <h5>
                                PHP Built-in Server
                            </h5>


                            <p>
                                Local development server.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                5. Node.js and NPM Requirement
            </h2>


            <p>
                Node.js and NPM are used for managing frontend assets such as
                CSS and JavaScript files.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Check Node Version:


node -v



Check NPM Version:


npm -v


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                6. Operating System Requirements
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-warning">


                        <tr>

                            <th>
                                Operating System
                            </th>


                            <th>
                                Support
                            </th>


                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Windows
                            </td>


                            <td>
                                Supported with XAMPP, Laragon, Docker.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                Linux
                            </td>


                            <td>
                                Recommended for servers.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                macOS
                            </td>


                            <td>
                                Supported for development.
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Recommended Development Tools
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    Visual Studio Code
                </li>


                <li class="list-group-item">
                    PHP Storm
                </li>


                <li class="list-group-item">
                    Composer
                </li>


                <li class="list-group-item">
                    Git & GitHub
                </li>


                <li class="list-group-item">
                    MySQL Workbench
                </li>


                <li class="list-group-item">
                    Postman for API Testing
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Laravel Installation Check
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan --version


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Production Server Requirements
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    PHP installed
                </li>


                <li class="list-group-item">
                    Composer installed
                </li>


                <li class="list-group-item">
                    Database configured
                </li>


                <li class="list-group-item">
                    SSL certificate enabled
                </li>


                <li class="list-group-item">
                    Storage permissions configured
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel requires PHP, Composer, database support, a web
                server, and frontend tools like Node.js and NPM. Setting up
                the correct environment is the first step toward building
                professional Laravel applications.

            </div>



        </div>

    </div>

</div>

`
},


{
title:"Laravel Project Structure",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Project Structure
            </h2>

            <p class="lead">
                Every Laravel application follows a well-organized directory structure. Each folder has a specific purpose, making the project clean, maintainable, and easy to understand.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                The Laravel project structure is the arrangement of folders and files that organize the application's source code, configuration, database, public assets, routes, views, and other resources.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Default Laravel Directory Structure
            </h2>

<pre class="bg-light border rounded p-3"><code>
myproject/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
│
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
└── .env
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Main Project Folders
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th width="30%">Folder</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>app</td>

                        <td>Contains Controllers, Models, Middleware, Jobs, Events, and other application logic.</td>

                    </tr>

                    <tr>

                        <td>bootstrap</td>

                        <td>Contains application bootstrapping files and cached configuration.</td>

                    </tr>

                    <tr>

                        <td>config</td>

                        <td>Stores all configuration files such as database, mail, cache, queue, and services.</td>

                    </tr>

                    <tr>

                        <td>database</td>

                        <td>Contains migrations, factories, and database seeders.</td>

                    </tr>

                    <tr>

                        <td>public</td>

                        <td>The web server points to this folder. It contains index.php, CSS, JavaScript, images, and uploaded files.</td>

                    </tr>

                    <tr>

                        <td>resources</td>

                        <td>Contains Blade views, language files, CSS, JavaScript, and frontend assets.</td>

                    </tr>

                    <tr>

                        <td>routes</td>

                        <td>Contains all application routes such as web.php and api.php.</td>

                    </tr>

                    <tr>

                        <td>storage</td>

                        <td>Stores logs, cache, compiled views, sessions, and uploaded files.</td>

                    </tr>

                    <tr>

                        <td>tests</td>

                        <td>Contains feature tests and unit tests.</td>

                    </tr>

                    <tr>

                        <td>vendor</td>

                        <td>Contains Laravel framework files and Composer packages.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Important Root Files
            </h2>

            <table class="table table-bordered table-hover">

                <thead class="table-primary">

                    <tr>

                        <th>File</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>artisan</td>

                        <td>Laravel command-line interface.</td>

                    </tr>

                    <tr>

                        <td>.env</td>

                        <td>Stores environment variables such as database credentials and application settings.</td>

                    </tr>

                    <tr>

                        <td>composer.json</td>

                        <td>Contains project dependencies and package information.</td>

                    </tr>

                    <tr>

                        <td>composer.lock</td>

                        <td>Stores the exact versions of installed packages.</td>

                    </tr>

                    <tr>

                        <td>package.json</td>

                        <td>Contains frontend packages managed by npm.</td>

                    </tr>

                    <tr>

                        <td>phpunit.xml</td>

                        <td>Configuration file for PHPUnit testing.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                The app Folder
            </h2>

            <p>
                The <strong>app</strong> folder is the heart of every Laravel project. Most of your application code is written here.
            </p>

<pre class="bg-light border rounded p-3"><code>
app/
│
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│
├── Models/
├── Providers/
├── Events/
├── Jobs/
└── Console/
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                The routes Folder
            </h2>

            <p>
                Laravel stores application routes inside the <strong>routes</strong> directory.
            </p>

            <table class="table table-bordered">

                <thead class="table-success">

                    <tr>

                        <th>File</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>web.php</td>

                        <td>Routes for web pages.</td>

                    </tr>

                    <tr>

                        <td>api.php</td>

                        <td>Routes for REST APIs.</td>

                    </tr>

                    <tr>

                        <td>console.php</td>

                        <td>Console command routes.</td>

                    </tr>

                    <tr>

                        <td>channels.php</td>

                        <td>Broadcasting channels.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                The resources Folder
            </h2>

            <p>
                The resources folder contains Blade templates and frontend resources.
            </p>

<pre class="bg-light border rounded p-3"><code>
resources/
│
├── views/
├── css/
├── js/
└── lang/
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                The database Folder
            </h2>

            <p>
                This folder manages the application's database structure and sample data.
            </p>

            <ul class="list-group">

                <li class="list-group-item">
                    Migrations
                </li>

                <li class="list-group-item">
                    Seeders
                </li>

                <li class="list-group-item">
                    Factories
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Request Flow in Laravel
            </h2>

            <div class="card bg-light">

                <div class="card-body text-center">

                    <strong>

                        Browser

                        →

                        public/index.php

                        →

                        Routes

                        →

                        Controller

                        →

                        Model

                        →

                        Database

                        →

                        View (Blade)

                        →

                        Browser

                    </strong>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of the Laravel Structure
            </h2>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Easy to understand
                        </li>

                        <li class="list-group-item">
                            Well organized
                        </li>

                        <li class="list-group-item">
                            Scalable
                        </li>

                        <li class="list-group-item">
                            Easy maintenance
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Supports MVC architecture
                        </li>

                        <li class="list-group-item">
                            Improves teamwork
                        </li>

                        <li class="list-group-item">
                            Better code management
                        </li>

                        <li class="list-group-item">
                            Easier debugging
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Laravel organizes every project into well-defined folders such as <strong>app</strong>, <strong>routes</strong>, <strong>resources</strong>, <strong>database</strong>, <strong>public</strong>, and <strong>storage</strong>. Understanding this structure helps developers quickly locate files, write clean code, and build maintainable web applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Laravel MVC Architecture",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel MVC Architecture
            </h2>

            <p class="lead">
                Laravel follows the <strong>Model-View-Controller (MVC)</strong> architectural pattern. MVC separates an application into three main components: <strong>Model</strong>, <strong>View</strong>, and <strong>Controller</strong>. This separation makes applications more organized, maintainable, and easier to develop.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                MVC (Model-View-Controller) is a software design pattern that separates the application's data, business logic, and user interface into different components.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What is MVC?
            </h2>

            <p>
                Instead of writing all application logic in one file, Laravel divides responsibilities into different classes. This makes the project clean and easy to manage.
            </p>

            <div class="card bg-light">

                <div class="card-body text-center">

                    <strong>

                        User

                        →

                        Route

                        →

                        Controller

                        →

                        Model

                        →

                        Database

                        →

                        Controller

                        →

                        View

                        →

                        Browser

                    </strong>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Components of MVC
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th width="25%">Component</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Model</td>

                        <td>Handles database operations and business logic.</td>

                    </tr>

                    <tr>

                        <td>View</td>

                        <td>Displays data to users using Blade templates.</td>

                    </tr>

                    <tr>

                        <td>Controller</td>

                        <td>Receives requests, processes data, and returns responses.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Model
            </h2>

            <p>
                The Model represents the application's data. It communicates with the database using Laravel's Eloquent ORM. Each model usually represents one database table.
            </p>

<pre class="bg-light border rounded p-3"><code>
app/
└── Models/
    └── User.php
</code></pre>

            <div class="alert alert-info">

                <strong>Example:</strong> A <strong>User</strong> model works with the <strong>users</strong> database table.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                View
            </h2>

            <p>
                Views are responsible for displaying information to users. Laravel uses the Blade template engine for creating dynamic and reusable web pages.
            </p>

<pre class="bg-light border rounded p-3"><code>
resources/
└── views/
    ├── welcome.blade.php
    ├── home.blade.php
    └── profile.blade.php
</code></pre>

            <div class="alert alert-success">

                Views only display data. They should not contain business logic.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Controller
            </h2>

            <p>
                Controllers act as a bridge between Models and Views. They receive requests, retrieve data from models, and send the data to views.
            </p>

<pre class="bg-light border rounded p-3"><code>
app/
└── Http/
    └── Controllers/
        └── UserController.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                How MVC Works
            </h2>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    A user requests a webpage.
                </li>

                <li class="list-group-item">
                    The request reaches a Laravel route.
                </li>

                <li class="list-group-item">
                    The route calls a controller.
                </li>

                <li class="list-group-item">
                    The controller communicates with the model.
                </li>

                <li class="list-group-item">
                    The model retrieves data from the database.
                </li>

                <li class="list-group-item">
                    The controller sends the data to a view.
                </li>

                <li class="list-group-item">
                    The view displays the final webpage in the browser.
                </li>

            </ol>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of MVC
            </h2>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Clean code organization
                        </li>

                        <li class="list-group-item">
                            Easy maintenance
                        </li>

                        <li class="list-group-item">
                            Better code reusability
                        </li>

                        <li class="list-group-item">
                            Faster development
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Easier debugging
                        </li>

                        <li class="list-group-item">
                            Supports teamwork
                        </li>

                        <li class="list-group-item">
                            Scalable applications
                        </li>

                        <li class="list-group-item">
                            Better project structure
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                MVC Folder Locations
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Component</th>

                        <th>Location</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Model</td>

                        <td>app/Models</td>

                    </tr>

                    <tr>

                        <td>View</td>

                        <td>resources/views</td>

                    </tr>

                    <tr>

                        <td>Controller</td>

                        <td>app/Http/Controllers</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Real-Life Example
            </h2>

            <p>
                Imagine an online shopping website:
            </p>

            <ul class="list-group">

                <li class="list-group-item">
                    <strong>Model:</strong> Retrieves product information from the database.
                </li>

                <li class="list-group-item">
                    <strong>Controller:</strong> Receives the user's request and asks the model for product data.
                </li>

                <li class="list-group-item">
                    <strong>View:</strong> Displays the products on the webpage.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Laravel Uses MVC
            </h2>

            <table class="table table-hover table-bordered">

                <thead class="table-success">

                    <tr>

                        <th>Benefit</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Organization</td>

                        <td>Keeps application files structured.</td>

                    </tr>

                    <tr>

                        <td>Maintenance</td>

                        <td>Easy to update individual components.</td>

                    </tr>

                    <tr>

                        <td>Scalability</td>

                        <td>Suitable for both small and large applications.</td>

                    </tr>

                    <tr>

                        <td>Team Collaboration</td>

                        <td>Frontend and backend developers can work independently.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Laravel follows the MVC architecture to separate application logic into Models, Views, and Controllers. This approach keeps projects organized, improves code quality, simplifies maintenance, and allows developers to build scalable and professional web applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Laravel Routing",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Routing
            </h2>

            <p class="lead">
                Routing is one of the most important features of Laravel. It defines how your application responds to different URL requests. Every time a user visits a webpage, Laravel checks the routes and decides which page, controller, or function should handle that request.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A route is a URL pattern that maps an incoming request to a specific action such as returning a view, executing a controller method, or processing data.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What is Routing?
            </h2>

            <p>
                Routing acts as a bridge between the browser and your Laravel application. Instead of accessing PHP files directly, every request first passes through Laravel's routing system.
            </p>

            <div class="card bg-light">

                <div class="card-body text-center">

                    <strong>

                        Browser

                        →

                        Route

                        →

                        Controller

                        →

                        View

                        →

                        Browser

                    </strong>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Where are Routes Stored?
            </h2>

            <p>
                Laravel stores all route files inside the <strong>routes</strong> folder.
            </p>

<pre class="bg-light border rounded p-3"><code>
routes/

├── web.php

├── api.php

├── console.php

└── channels.php
</code></pre>

            <table class="table table-bordered mt-3">

                <thead class="table-dark">

                    <tr>

                        <th>File</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>web.php</td>

                        <td>Routes for web pages.</td>

                    </tr>

                    <tr>

                        <td>api.php</td>

                        <td>Routes for REST APIs.</td>

                    </tr>

                    <tr>

                        <td>console.php</td>

                        <td>Console commands.</td>

                    </tr>

                    <tr>

                        <td>channels.php</td>

                        <td>Broadcasting channels.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Basic Route
            </h2>

            <p>
                A simple route returns a response when the requested URL is visited.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/', function () {

    return 'Welcome to Laravel';

});
</code></pre>

            <p>
                When a user visits the home page (<strong>/</strong>), Laravel displays the message <strong>Welcome to Laravel</strong>.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Returning a View
            </h2>

            <p>
                Instead of returning plain text, routes usually return Blade views.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/home', function () {

    return view('home');

});
</code></pre>

            <p>
                This route loads the <strong>home.blade.php</strong> file from the resources/views directory.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Route Methods
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>Method</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>GET</td>

                        <td>Retrieve data or display a page.</td>

                    </tr>

                    <tr>

                        <td>POST</td>

                        <td>Submit new data.</td>

                    </tr>

                    <tr>

                        <td>PUT</td>

                        <td>Update an existing record.</td>

                    </tr>

                    <tr>

                        <td>PATCH</td>

                        <td>Update part of a record.</td>

                    </tr>

                    <tr>

                        <td>DELETE</td>

                        <td>Delete data.</td>

                    </tr>

                </tbody>

            </table>

<pre class="bg-light border rounded p-3"><code>
Route::post('/store', function () {

});

Route::put('/update', function () {

});

Route::delete('/delete', function () {

});
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Route Parameters
            </h2>

            <p>
                Parameters allow values to be passed through the URL.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{id}', function ($id) {

    return $id;

});
</code></pre>

            <p>
                Visiting <strong>/user/10</strong> returns <strong>10</strong>.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Optional Parameters
            </h2>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{name?}', function ($name = 'Guest') {

    return $name;

});
</code></pre>

            <p>
                If no name is provided, Laravel displays <strong>Guest</strong>.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Named Routes
            </h2>

            <p>
                Named routes make URL management easier and more maintainable.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/dashboard', function () {

    return view('dashboard');

})-&gt;name('dashboard');
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Route Groups
            </h2>

            <p>
                Route groups allow multiple routes to share common attributes such as middleware or URL prefixes.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::prefix('admin')-&gt;group(function () {

    Route::get('/dashboard', function () {

    });

});
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Resource Routes
            </h2>

            <p>
                Resource routes automatically generate CRUD routes for a controller.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::resource('users', UserController::class);
</code></pre>

            <table class="table table-bordered">

                <thead class="table-success">

                    <tr>

                        <th>Action</th>

                        <th>HTTP Method</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>index</td>

                        <td>GET</td>

                    </tr>

                    <tr>

                        <td>create</td>

                        <td>GET</td>

                    </tr>

                    <tr>

                        <td>store</td>

                        <td>POST</td>

                    </tr>

                    <tr>

                        <td>show</td>

                        <td>GET</td>

                    </tr>

                    <tr>

                        <td>edit</td>

                        <td>GET</td>

                    </tr>

                    <tr>

                        <td>update</td>

                        <td>PUT / PATCH</td>

                    </tr>

                    <tr>

                        <td>destroy</td>

                        <td>DELETE</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Keep routes clean and simple.
                </li>

                <li class="list-group-item">
                    Move business logic into controllers.
                </li>

                <li class="list-group-item">
                    Use named routes whenever possible.
                </li>

                <li class="list-group-item">
                    Use resource routes for CRUD operations.
                </li>

                <li class="list-group-item">
                    Group related routes using prefixes and middleware.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Laravel Routing connects URLs with your application's functionality. It allows developers to define web pages, APIs, controllers, and CRUD operations using a clean and expressive syntax. Understanding routing is the first step toward building dynamic Laravel applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Route Parameters",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Route Parameters
            </h2>

            <p class="lead">
                Route parameters allow you to pass values through the URL. They are commonly used to display specific records such as users, products, posts, or categories.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Route parameters are dynamic values included in the URL that Laravel passes to a route or controller method.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What are Route Parameters?
            </h2>

            <p>
                Instead of creating separate routes for every page, Laravel allows parts of the URL to become dynamic using parameters enclosed in curly braces.
            </p>

<pre class="bg-light border rounded p-3"><code>
/user/1

/user/10

/user/25
</code></pre>

            <p>
                Here, the numbers <strong>1</strong>, <strong>10</strong>, and <strong>25</strong> are route parameters.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Required Route Parameters
            </h2>

            <p>
                A required parameter must always be provided in the URL.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{id}', function (\$id) {

    return "User ID: " . \$id;

});
</code></pre>

            <div class="alert alert-info">

                Visiting <strong>/user/15</strong> will display:

                <br><br>

                <strong>User ID: 15</strong>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Multiple Parameters
            </h2>

            <p>
                Laravel allows multiple parameters in a single route.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/student/{id}/{name}', function (\$id, \$name) {

    return \$id . " - " . \$name;

});
</code></pre>

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>

                        <th>URL</th>

                        <th>Output</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>/student/5/Ali</td>

                        <td>5 - Ali</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Optional Route Parameters
            </h2>

            <p>
                Optional parameters are marked with a question mark (<strong>?</strong>). If no value is supplied, Laravel uses the default value.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{name?}', function (\$name = 'Guest') {

    return \$name;

});
</code></pre>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>URL</th>

                        <th>Output</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>/user</td>

                        <td>Guest</td>

                    </tr>

                    <tr>

                        <td>/user/Ahmed</td>

                        <td>Ahmed</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Parameters in Controllers
            </h2>

            <p>
                Route parameters can also be passed directly to controller methods.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/product/{id}', [ProductController::class, 'show']);
</code></pre>

<pre class="bg-light border rounded p-3"><code>
public function show(\$id)
{

    return "Product ID: " . \$id;

}
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Route Parameter Constraints
            </h2>

            <p>
                Constraints ensure that parameters match a specific format.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{id}', function (\$id) {

    return \$id;

})-&gt;where('id', '[0-9]+');
</code></pre>

            <div class="alert alert-warning">

                The above route accepts only numeric values.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Constraint Methods
            </h2>

            <table class="table table-bordered">

                <thead class="table-success">

                    <tr>

                        <th>Method</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>whereNumber()</td>

                        <td>Accepts only numbers.</td>

                    </tr>

                    <tr>

                        <td>whereAlpha()</td>

                        <td>Accepts only letters.</td>

                    </tr>

                    <tr>

                        <td>whereAlphaNumeric()</td>

                        <td>Accepts letters and numbers.</td>

                    </tr>

                    <tr>

                        <td>whereUuid()</td>

                        <td>Accepts UUID values.</td>

                    </tr>

                    <tr>

                        <td>whereIn()</td>

                        <td>Accepts values from a predefined list.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Practical Example
            </h2>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>Route</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>/users/5</td>

                        <td>Display User ID 5</td>

                    </tr>

                    <tr>

                        <td>/products/12</td>

                        <td>Display Product 12</td>

                    </tr>

                    <tr>

                        <td>/posts/25</td>

                        <td>Display Blog Post 25</td>

                    </tr>

                    <tr>

                        <td>/category/mobile</td>

                        <td>Display Mobile Category</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Use meaningful parameter names.
                </li>

                <li class="list-group-item">
                    Validate parameters using constraints.
                </li>

                <li class="list-group-item">
                    Use optional parameters only when necessary.
                </li>

                <li class="list-group-item">
                    Keep routes simple and readable.
                </li>

                <li class="list-group-item">
                    Pass parameters to controllers instead of writing large route closures.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Route parameters allow Laravel applications to create dynamic URLs by passing values directly through the address bar. Laravel supports required parameters, optional parameters, multiple parameters, controller parameters, and parameter constraints, making routing flexible and powerful.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Named Routes",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Named Routes
            </h2>

            <p class="lead">
                Named Routes allow you to assign a unique name to a route instead of referencing it by its URL. This makes your application easier to maintain because you can change the URL without changing every link in your project.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A Named Route is a Laravel route that has a unique name assigned using the <strong>name()</strong> method. It can be referenced throughout the application using its name instead of the URL.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Named Routes?
            </h2>

            <p>
                Instead of hardcoding URLs everywhere, Laravel lets you reference routes by name. This improves readability and makes changing URLs much easier.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <div class="card bg-light">

                        <div class="card-body">

                            <h5>Without Named Routes</h5>

<pre class="bg-white border rounded p-3"><code>
/about

/contact

/dashboard
</code></pre>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card bg-light">

                        <div class="card-body">

                            <h5>With Named Routes</h5>

<pre class="bg-white border rounded p-3"><code>
about

contact

dashboard
</code></pre>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Named Route
            </h2>

            <p>
                Use the <strong>name()</strong> method after defining a route.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/dashboard', function () {

    return view('dashboard');

})-&gt;name('dashboard');
</code></pre>

            <p>
                The route is now named <strong>dashboard</strong>.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Generating URLs
            </h2>

            <p>
                Laravel provides the <strong>route()</strong> helper function to generate URLs from route names.
            </p>

<pre class="bg-light border rounded p-3"><code>
route('dashboard')
</code></pre>

            <div class="alert alert-success">

                Laravel automatically generates the correct URL for the named route.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Using Named Routes in Links
            </h2>

            <p>
                Named routes can be used when creating navigation links.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;a href="&#123;&#123; route('dashboard') &#125;&#125;"&gt;

Dashboard

&lt;/a&gt;
</code></pre>

            <div class="alert alert-warning">

                The Blade syntax has been escaped so it is displayed as text instead of being executed.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Redirecting to a Named Route
            </h2>

            <p>
                Controllers often redirect users using named routes.
            </p>

<pre class="bg-light border rounded p-3"><code>
return redirect()-&gt;route('dashboard');
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Named Routes with Parameters
            </h2>

            <p>
                Parameters can also be passed when generating URLs.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/user/{id}', function (\$id) {

    return \$id;

})-&gt;name('user.show');
</code></pre>

<pre class="bg-light border rounded p-3"><code>
route('user.show', 5)
</code></pre>

            <p>
                Generated URL:
            </p>

<pre class="bg-light border rounded p-3"><code>
/user/5
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Multiple Parameters
            </h2>

<pre class="bg-light border rounded p-3"><code>
Route::get('/student/{id}/{name}', function () {

})-&gt;name('student.profile');
</code></pre>

<pre class="bg-light border rounded p-3"><code>
route('student.profile', [

'id' =&gt; 10,

'name' =&gt; 'Ali'

]);
</code></pre>

            <p>
                Generated URL:
            </p>

<pre class="bg-light border rounded p-3"><code>
/student/10/Ali
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Naming Resource Routes
            </h2>

            <p>
                Resource controllers automatically create named routes.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::resource('products', ProductController::class);
</code></pre>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Route Name</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>products.index</td>

                        <td>Display all products.</td>

                    </tr>

                    <tr>

                        <td>products.create</td>

                        <td>Create page.</td>

                    </tr>

                    <tr>

                        <td>products.store</td>

                        <td>Store product.</td>

                    </tr>

                    <tr>

                        <td>products.show</td>

                        <td>Display one product.</td>

                    </tr>

                    <tr>

                        <td>products.edit</td>

                        <td>Edit page.</td>

                    </tr>

                    <tr>

                        <td>products.update</td>

                        <td>Update product.</td>

                    </tr>

                    <tr>

                        <td>products.destroy</td>

                        <td>Delete product.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Named Routes
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Easy to maintain applications.
                </li>

                <li class="list-group-item">
                    No hardcoded URLs.
                </li>

                <li class="list-group-item">
                    Easy URL generation.
                </li>

                <li class="list-group-item">
                    Simplifies redirects.
                </li>

                <li class="list-group-item">
                    Improves code readability.
                </li>

                <li class="list-group-item">
                    Better support for large projects.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Give every important route a meaningful name.
                </li>

                <li class="list-group-item">
                    Use dot notation for related routes (e.g., users.index, users.create).
                </li>

                <li class="list-group-item">
                    Prefer named routes over hardcoded URLs.
                </li>

                <li class="list-group-item">
                    Use route names in redirects and navigation menus.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Named Routes provide a convenient way to reference routes by name instead of URL. They improve code readability, simplify redirects, make URL generation easier, and help maintain large Laravel applications by avoiding hardcoded links.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Controllers",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Controllers
            </h2>

            <p class="lead">
                Controllers are one of the most important parts of Laravel's MVC architecture. They receive requests from users, process the application's business logic, communicate with models, and return responses such as views or JSON data.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A Controller is a PHP class that groups related request handling logic into one place. Instead of writing all logic inside routes, Laravel recommends using controllers to keep applications clean and organized.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Controllers?
            </h2>

            <p>
                Controllers help separate application logic from routing. As projects grow, placing all logic inside route files becomes difficult to manage. Controllers make applications more structured and easier to maintain.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Keeps routes clean and simple.
                        </li>

                        <li class="list-group-item">
                            Organizes application logic.
                        </li>

                        <li class="list-group-item">
                            Makes code reusable.
                        </li>

                        <li class="list-group-item">
                            Easier to debug.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Supports MVC architecture.
                        </li>

                        <li class="list-group-item">
                            Easier teamwork.
                        </li>

                        <li class="list-group-item">
                            Better code organization.
                        </li>

                        <li class="list-group-item">
                            Easy maintenance.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Controller Location
            </h2>

            <p>
                All Laravel controllers are stored inside the following directory:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/

└── Http/

    └── Controllers/

        ├── Controller.php

        ├── HomeController.php

        ├── UserController.php

        └── ProductController.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Controller
            </h2>

            <p>
                Laravel Artisan provides a command to generate controllers automatically.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:controller UserController
</code></pre>

            <p>
                After executing the command, Laravel creates the following file:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/Http/Controllers/UserController.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Basic Controller Example
            </h2>

<pre class="bg-light border rounded p-3"><code>
&lt;?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    public function index()
    {

        return "Welcome to Laravel";

    }

}
</code></pre>

            <p>
                In this example, the <strong>index()</strong> method returns a simple text response.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Connecting a Route to a Controller
            </h2>

            <p>
                Routes can call controller methods instead of using anonymous functions.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/users', [UserController::class, 'index']);
</code></pre>

            <p>
                When the user visits <strong>/users</strong>, Laravel executes the <strong>index()</strong> method of the UserController.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Returning a View
            </h2>

            <p>
                Controllers usually return Blade views instead of plain text.
            </p>

<pre class="bg-light border rounded p-3"><code>
public function home()
{

    return view('home');

}
</code></pre>

            <p>
                Laravel loads the following file:
            </p>

<pre class="bg-light border rounded p-3"><code>
resources/views/home.blade.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Passing Data to a View
            </h2>

            <p>
                Controllers can send data to Blade templates.
            </p>

<pre class="bg-light border rounded p-3"><code>
public function profile()
{

    \$name = "John";

    return view('profile', compact('name'));

}
</code></pre>

            <p>
                Inside the Blade file, the value can be displayed using:
            </p>

<pre class="bg-light border rounded p-3"><code>
&#123;&#123; \$name &#125;&#125;
</code></pre>

            <div class="alert alert-warning">

                Blade syntax has been escaped so it appears as plain text in this tutorial.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Resource Controllers
            </h2>

            <p>
                Laravel can automatically generate CRUD methods using a Resource Controller.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:controller ProductController --resource
</code></pre>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Method</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>index()</td>

                        <td>Display all records.</td>

                    </tr>

                    <tr>

                        <td>create()</td>

                        <td>Show create form.</td>

                    </tr>

                    <tr>

                        <td>store()</td>

                        <td>Store new record.</td>

                    </tr>

                    <tr>

                        <td>show()</td>

                        <td>Display a single record.</td>

                    </tr>

                    <tr>

                        <td>edit()</td>

                        <td>Show edit form.</td>

                    </tr>

                    <tr>

                        <td>update()</td>

                        <td>Update an existing record.</td>

                    </tr>

                    <tr>

                        <td>destroy()</td>

                        <td>Delete a record.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Single Action Controllers
            </h2>

            <p>
                If a controller performs only one task, Laravel allows you to create an Invokable Controller.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:controller ContactController --invokable
</code></pre>

            <p>
                Such controllers contain only one method named <strong>__invoke()</strong>.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Controllers
            </h2>

            <table class="table table-bordered">

                <thead class="table-success">

                    <tr>

                        <th>Advantage</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Organized Code</td>

                        <td>Business logic is separated from routes.</td>

                    </tr>

                    <tr>

                        <td>Reusable Methods</td>

                        <td>Methods can be used by multiple routes.</td>

                    </tr>

                    <tr>

                        <td>Easy Maintenance</td>

                        <td>Controllers make applications easier to update.</td>

                    </tr>

                    <tr>

                        <td>MVC Support</td>

                        <td>Controllers connect Models and Views.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Keep controllers focused on one responsibility.
                </li>

                <li class="list-group-item">
                    Move database operations to Models.
                </li>

                <li class="list-group-item">
                    Validate requests before processing data.
                </li>

                <li class="list-group-item">
                    Use Resource Controllers for CRUD operations.
                </li>

                <li class="list-group-item">
                    Avoid placing complex business logic inside controllers.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Controllers are responsible for handling user requests, processing application logic, interacting with models, and returning responses. They are an essential part of Laravel's MVC architecture and help developers build clean, organized, and maintainable web applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Resource Controllers",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Resource Controllers
            </h2>

            <p class="lead">
                Resource Controllers provide a simple and efficient way to perform CRUD (Create, Read, Update, Delete) operations in Laravel. Instead of manually creating multiple routes and methods, Laravel automatically generates them using a single command.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A Resource Controller is a controller that contains all the standard methods required to perform CRUD operations for a resource such as users, products, posts, or categories.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Resource Controllers?
            </h2>

            <p>
                In many applications, developers repeatedly create the same CRUD methods. Resource Controllers reduce repetitive code and follow Laravel's conventions.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Reduces repetitive code.
                        </li>

                        <li class="list-group-item">
                            Automatically creates CRUD methods.
                        </li>

                        <li class="list-group-item">
                            Keeps controllers organized.
                        </li>

                        <li class="list-group-item">
                            Follows Laravel best practices.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Easier route management.
                        </li>

                        <li class="list-group-item">
                            Better code readability.
                        </li>

                        <li class="list-group-item">
                            Faster application development.
                        </li>

                        <li class="list-group-item">
                            Easy maintenance.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Resource Controller
            </h2>

            <p>
                Laravel Artisan can generate a Resource Controller with all CRUD methods.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:controller ProductController --resource
</code></pre>

            <p>
                This command creates the following file:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/Http/Controllers/ProductController.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Registering a Resource Route
            </h2>

            <p>
                Instead of defining multiple routes, Laravel provides a single resource route.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::resource('products', ProductController::class);
</code></pre>

            <p>
                This one line automatically creates all CRUD routes.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Resource Controller Methods
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Method</th>

                        <th>HTTP Method</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>index()</td>

                        <td>GET</td>

                        <td>Display all records.</td>

                    </tr>

                    <tr>

                        <td>create()</td>

                        <td>GET</td>

                        <td>Show create form.</td>

                    </tr>

                    <tr>

                        <td>store()</td>

                        <td>POST</td>

                        <td>Save new record.</td>

                    </tr>

                    <tr>

                        <td>show()</td>

                        <td>GET</td>

                        <td>Display one record.</td>

                    </tr>

                    <tr>

                        <td>edit()</td>

                        <td>GET</td>

                        <td>Show edit form.</td>

                    </tr>

                    <tr>

                        <td>update()</td>

                        <td>PUT / PATCH</td>

                        <td>Update an existing record.</td>

                    </tr>

                    <tr>

                        <td>destroy()</td>

                        <td>DELETE</td>

                        <td>Delete a record.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Generated Routes
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>URL</th>

                        <th>Method</th>

                        <th>Controller Method</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>/products</td>

                        <td>GET</td>

                        <td>index()</td>

                    </tr>

                    <tr>

                        <td>/products/create</td>

                        <td>GET</td>

                        <td>create()</td>

                    </tr>

                    <tr>

                        <td>/products</td>

                        <td>POST</td>

                        <td>store()</td>

                    </tr>

                    <tr>

                        <td>/products/{id}</td>

                        <td>GET</td>

                        <td>show()</td>

                    </tr>

                    <tr>

                        <td>/products/{id}/edit</td>

                        <td>GET</td>

                        <td>edit()</td>

                    </tr>

                    <tr>

                        <td>/products/{id}</td>

                        <td>PUT/PATCH</td>

                        <td>update()</td>

                    </tr>

                    <tr>

                        <td>/products/{id}</td>

                        <td>DELETE</td>

                        <td>destroy()</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Example Resource Controller
            </h2>

<pre class="bg-light border rounded p-3"><code>
class ProductController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show(\$id)
    {

    }

    public function edit(\$id)
    {

    }

    public function update(\$id)
    {

    }

    public function destroy(\$id)
    {

    }

}
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Resource Route Names
            </h2>

            <table class="table table-bordered table-hover">

                <thead class="table-success">

                    <tr>

                        <th>Route Name</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>products.index</td>

                        <td>Display all products.</td>

                    </tr>

                    <tr>

                        <td>products.create</td>

                        <td>Create page.</td>

                    </tr>

                    <tr>

                        <td>products.store</td>

                        <td>Store product.</td>

                    </tr>

                    <tr>

                        <td>products.show</td>

                        <td>Display one product.</td>

                    </tr>

                    <tr>

                        <td>products.edit</td>

                        <td>Edit product.</td>

                    </tr>

                    <tr>

                        <td>products.update</td>

                        <td>Update product.</td>

                    </tr>

                    <tr>

                        <td>products.destroy</td>

                        <td>Delete product.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Resource Controllers
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Generates all CRUD methods automatically.
                </li>

                <li class="list-group-item">
                    Requires only one route declaration.
                </li>

                <li class="list-group-item">
                    Keeps controllers organized.
                </li>

                <li class="list-group-item">
                    Follows Laravel coding standards.
                </li>

                <li class="list-group-item">
                    Easy to scale for large applications.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Use Resource Controllers for CRUD applications.
                </li>

                <li class="list-group-item">
                    Keep each method focused on a single responsibility.
                </li>

                <li class="list-group-item">
                    Validate user input before storing or updating data.
                </li>

                <li class="list-group-item">
                    Move database operations to Eloquent Models.
                </li>

                <li class="list-group-item">
                    Use Resource Routes instead of manually creating CRUD routes.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Resource Controllers simplify CRUD operations by automatically providing standard methods such as index(), create(), store(), show(), edit(), update(), and destroy(). Combined with Resource Routes, they reduce repetitive code, improve readability, and follow Laravel's recommended development practices.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Middleware",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Laravel Middleware
            </h2>

            <p class="lead">
                Middleware acts as a bridge between an incoming HTTP request and your Laravel application. It filters requests before they reach your routes or controllers and can also process responses before they are sent back to the browser.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Middleware is a layer that examines, filters, or modifies HTTP requests and responses. It is commonly used for authentication, authorization, logging, maintenance mode, and request validation.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Middleware?
            </h2>

            <p>
                Instead of repeating the same checks inside every controller, Laravel allows you to place that logic inside middleware and apply it wherever needed.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Protect routes from unauthorized users.
                        </li>

                        <li class="list-group-item">
                            Reduce duplicate code.
                        </li>

                        <li class="list-group-item">
                            Improve application security.
                        </li>

                        <li class="list-group-item">
                            Keep controllers clean.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Easy request filtering.
                        </li>

                        <li class="list-group-item">
                            Better application organization.
                        </li>

                        <li class="list-group-item">
                            Easy maintenance.
                        </li>

                        <li class="list-group-item">
                            Reusable request logic.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Request Lifecycle
            </h2>

            <p>
                Middleware is executed before the request reaches the controller and can also run after the controller returns a response.
            </p>

<pre class="bg-light border rounded p-3"><code>
Browser

↓

Route

↓

Middleware

↓

Controller

↓

Response

↓

Browser
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Middleware Location
            </h2>

            <p>
                Custom middleware classes are stored inside the following directory:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/

└── Http/

    └── Middleware/
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating Middleware
            </h2>

            <p>
                Laravel Artisan can generate a new middleware class.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:middleware CheckAge
</code></pre>

            <p>
                Laravel creates:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/Http/Middleware/CheckAge.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Middleware Structure
            </h2>

            <p>
                Every middleware contains a <strong>handle()</strong> method that processes incoming requests.
            </p>

<pre class="bg-light border rounded p-3"><code>
public function handle(\$request, Closure \$next)
{

    return \$next(\$request);

}
</code></pre>

            <p>
                The <strong>\$next()</strong> function passes the request to the next middleware or controller.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Registering Middleware
            </h2>

            <p>
                Before using custom middleware, it should be registered in the application's middleware configuration.
            </p>

<pre class="bg-light border rounded p-3"><code>
'check.age' =&gt; App\Http\Middleware\CheckAge::class
</code></pre>

            <div class="alert alert-info">

                After registration, the middleware can be used by its alias.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Applying Middleware to Routes
            </h2>

            <p>
                Middleware can protect individual routes.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/dashboard', function () {

    return "Dashboard";

})-&gt;middleware('auth');
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Applying Middleware to Route Groups
            </h2>

            <p>
                Multiple routes can share the same middleware.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::middleware(['auth'])-&gt;group(function () {

    Route::get('/profile');

    Route::get('/settings');

});
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Applying Middleware in Controllers
            </h2>

            <p>
                Middleware can also be assigned inside a controller's constructor.
            </p>

<pre class="bg-light border rounded p-3"><code>
public function __construct()
{

    \$this-&gt;middleware('auth');

}
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Built-in Middleware
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Middleware</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>auth</td>

                        <td>Allows only authenticated users.</td>

                    </tr>

                    <tr>

                        <td>guest</td>

                        <td>Allows only guests.</td>

                    </tr>

                    <tr>

                        <td>verified</td>

                        <td>Checks email verification.</td>

                    </tr>

                    <tr>

                        <td>throttle</td>

                        <td>Limits repeated requests.</td>

                    </tr>

                    <tr>

                        <td>signed</td>

                        <td>Validates signed URLs.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Real-World Examples
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Scenario</th>

                        <th>Middleware Used</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Admin Dashboard</td>

                        <td>auth</td>

                    </tr>

                    <tr>

                        <td>User Profile</td>

                        <td>auth</td>

                    </tr>

                    <tr>

                        <td>Login Page</td>

                        <td>guest</td>

                    </tr>

                    <tr>

                        <td>Email Verification</td>

                        <td>verified</td>

                    </tr>

                    <tr>

                        <td>API Rate Limiting</td>

                        <td>throttle</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Middleware
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Improves application security.
                </li>

                <li class="list-group-item">
                    Keeps controllers lightweight.
                </li>

                <li class="list-group-item">
                    Centralizes request filtering.
                </li>

                <li class="list-group-item">
                    Easy to reuse across multiple routes.
                </li>

                <li class="list-group-item">
                    Simplifies authentication and authorization.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Keep middleware focused on a single responsibility.
                </li>

                <li class="list-group-item">
                    Use middleware instead of repeating checks in controllers.
                </li>

                <li class="list-group-item">
                    Apply middleware only where it is required.
                </li>

                <li class="list-group-item">
                    Use route groups to avoid repeating middleware declarations.
                </li>

                <li class="list-group-item">
                    Give custom middleware meaningful names.
                </li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Middleware is an essential feature of Laravel that filters HTTP requests before they reach controllers. It helps secure applications, reduce duplicate code, and organize request-handling logic. Middleware is commonly used for authentication, authorization, request validation, rate limiting, and many other tasks.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Blade Template Engine",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Blade Template Engine
            </h2>

            <p class="lead">
                Blade is Laravel's powerful, lightweight, and built-in templating engine. It helps developers create clean, dynamic, and reusable web pages using simple and readable syntax.
            </p>

            <div class="alert alert-primary">
                <strong>Definition:</strong>
                Blade is Laravel's default templating engine that combines HTML with PHP in a clean and elegant way. It provides directives for layouts, conditions, loops, components, and much more.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Blade?
            </h2>

            <p>
                Writing PHP directly inside HTML becomes difficult to maintain as projects grow. Blade provides a simple syntax that keeps your views clean and organized.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">Simple and readable syntax.</li>

                        <li class="list-group-item">Built into Laravel.</li>

                        <li class="list-group-item">Supports reusable layouts.</li>

                        <li class="list-group-item">Easy to maintain.</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">Fast template rendering.</li>

                        <li class="list-group-item">Supports components.</li>

                        <li class="list-group-item">Automatic HTML escaping.</li>

                        <li class="list-group-item">Cleaner than plain PHP.</li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade File Location
            </h2>

            <p>
                Blade template files are stored in the following directory:
            </p>

<pre class="bg-light border rounded p-3"><code>
resources/

└── views/

    ├── home.blade.php

    ├── about.blade.php

    ├── contact.blade.php

    └── layouts/
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade File Extension
            </h2>

            <p>
                Every Blade template uses the following extension:
            </p>

<pre class="bg-light border rounded p-3"><code>
.blade.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Displaying Variables
            </h2>

            <p>
                Blade uses double curly braces to display variables safely.
            </p>

<pre class="bg-light border rounded p-3"><code>
&amp;#123;&amp;#123; \$name &amp;#125;&amp;#125;
</code></pre>

            <div class="alert alert-warning">
                The Blade expression above is escaped so the browser displays it as plain text.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Comments
            </h2>

            <p>
                Blade provides its own comment syntax that is not visible in the browser.
            </p>

<pre class="bg-light border rounded p-3"><code>
&amp;#123;-- This is a Blade comment --&amp;#125;
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Conditional Directives
            </h2>

            <p>
                Blade provides directives for conditional statements.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;if

&#64;elseif

&#64;else

&#64;endif
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Loop Directives
            </h2>

            <p>
                Blade supports several looping directives.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Directive</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>&#64;for</td>

                        <td>Repeat code a fixed number of times.</td>

                    </tr>

                    <tr>

                        <td>&#64;foreach</td>

                        <td>Loop through arrays or collections.</td>

                    </tr>

                    <tr>

                        <td>&#64;while</td>

                        <td>Execute while a condition is true.</td>

                    </tr>

                    <tr>

                        <td>&#64;forelse</td>

                        <td>Loop with an empty condition.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Template Inheritance
            </h2>

            <p>
                Blade layouts allow multiple pages to share the same design.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;extends

&#64;section

&#64;yield

&#64;endsection
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Including Views
            </h2>

            <p>
                You can include reusable files like headers and footers.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;include
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Components
            </h2>

            <p>
                Components allow developers to reuse UI elements throughout an application.
            </p>

            <ul class="list-group">

                <li class="list-group-item">Navigation Bars</li>

                <li class="list-group-item">Buttons</li>

                <li class="list-group-item">Cards</li>

                <li class="list-group-item">Alerts</li>

                <li class="list-group-item">Forms</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Blade Directives
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Directive</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>&#64;extends</td>

                        <td>Extends a parent layout.</td>

                    </tr>

                    <tr>

                        <td>&#64;section</td>

                        <td>Defines a section.</td>

                    </tr>

                    <tr>

                        <td>&#64;yield</td>

                        <td>Displays section content.</td>

                    </tr>

                    <tr>

                        <td>&#64;include</td>

                        <td>Includes another view.</td>

                    </tr>

                    <tr>

                        <td>&#64;if</td>

                        <td>Conditional statement.</td>

                    </tr>

                    <tr>

                        <td>&#64;foreach</td>

                        <td>Loops through data.</td>

                    </tr>

                    <tr>

                        <td>&#64;csrf</td>

                        <td>Adds CSRF protection.</td>

                    </tr>

                    <tr>

                        <td>&#64;error</td>

                        <td>Displays validation errors.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Blade
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Fast and lightweight.</li>

                <li class="list-group-item">Easy to learn.</li>

                <li class="list-group-item">Reusable layouts.</li>

                <li class="list-group-item">Clean syntax.</li>

                <li class="list-group-item">Automatic HTML escaping.</li>

                <li class="list-group-item">Compiled into optimized PHP.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Keep business logic out of Blade views.</li>

                <li class="list-group-item">Use layouts for reusable page structures.</li>

                <li class="list-group-item">Break large pages into partial views.</li>

                <li class="list-group-item">Use components for repeated UI elements.</li>

                <li class="list-group-item">Keep templates clean and readable.</li>

            </ul>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Blade is Laravel's built-in templating engine that provides a clean syntax for creating dynamic and reusable web pages. It supports layouts, components, loops, conditions, template inheritance, and many other features that simplify Laravel development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Blade Layouts",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Blade Layouts
            </h2>

            <p class="lead">
                Blade Layouts allow developers to create reusable page structures. Instead of writing the same HTML code for every page, Laravel allows you to create one master layout and reuse it across multiple pages.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A Blade Layout is a master template that contains common elements such as the header, navigation bar, sidebar, footer, and scripts. Child pages inherit this layout and only define their unique content.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Blade Layouts?
            </h2>

            <p>
                Without layouts, developers must repeat the same HTML code on every page. Blade Layouts solve this problem by allowing one layout to be shared by multiple pages.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Eliminates duplicate HTML code.
                        </li>

                        <li class="list-group-item">
                            Makes projects easier to maintain.
                        </li>

                        <li class="list-group-item">
                            Improves code readability.
                        </li>

                        <li class="list-group-item">
                            Saves development time.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Keeps pages organized.
                        </li>

                        <li class="list-group-item">
                            Makes UI consistent.
                        </li>

                        <li class="list-group-item">
                            Easy to update common sections.
                        </li>

                        <li class="list-group-item">
                            Encourages reusable code.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Typical Layout Structure
            </h2>

            <p>
                A master layout usually contains the following sections:
            </p>

<pre class="bg-light border rounded p-3"><code>
Website Header

Navigation Bar

Main Content

Sidebar (Optional)

Footer

JavaScript Files
</code></pre>

            <p>
                Every page shares these sections while only the content area changes.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Layout Folder Structure
            </h2>

<pre class="bg-light border rounded p-3"><code>
resources/

└── views/

    ├── layouts/

    │   ├── app.blade.php

    │   ├── admin.blade.php

    │   └── guest.blade.php

    ├── home.blade.php

    ├── about.blade.php

    ├── contact.blade.php

    └── dashboard.blade.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Master Layout
            </h2>

            <p>
                A master layout contains the common HTML structure that every page shares.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;html&gt;

Head Section

Header

Navigation

Content Area

Footer

Scripts

&lt;/html&gt;
</code></pre>

            <div class="alert alert-info">

                The master layout is created once and reused throughout the application.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Extending a Layout
            </h2>

            <p>
                Child pages inherit the master layout using the <strong>&#64;extends</strong> directive.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;extends('layouts.app')
</code></pre>

            <div class="alert alert-warning">

                The Blade directive above is escaped so Laravel displays it as plain text instead of executing it.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Defining Sections
            </h2>

            <p>
                Child pages define the content that should appear inside the layout.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;section('content')

Page Content

&#64;endsection
</code></pre>

            <p>
                Everything written between the section directives belongs to that section.

            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Displaying Sections
            </h2>

            <p>
                The master layout displays the content from child pages using the following directive.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;yield('content')
</code></pre>

            <p>
                Whenever a child page defines the <strong>content</strong> section, it will appear where the <strong>&#64;yield</strong> directive is placed.

            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating Multiple Sections
            </h2>

            <p>
                A layout can contain multiple sections such as title, content, sidebar, footer, and scripts.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Section</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>title</td>

                        <td>Page title displayed in the browser.</td>

                    </tr>

                    <tr>

                        <td>content</td>

                        <td>Main page content.</td>

                    </tr>

                    <tr>

                        <td>sidebar</td>

                        <td>Optional sidebar content.</td>

                    </tr>

                    <tr>

                        <td>scripts</td>

                        <td>Additional JavaScript files.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Including Partial Views
            </h2>

            <p>
                Common page sections such as the navigation bar, header, footer, and sidebar can be placed in separate Blade files and included wherever needed.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;include('partials.header')

&#64;include('partials.navbar')

&#64;include('partials.footer')
</code></pre>

            <div class="alert alert-success">

                <strong>End of Part 1</strong><br>

                In Part 2, you'll learn about Blade stacks, Blade components, common layout directives, advantages, best practices, and a complete summary.

            </div>

        </div>

    </div>

</div>

 <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Stacks
            </h2>

            <p>
                Blade Stacks allow child pages to add CSS and JavaScript files into specific locations of the master layout.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;push('scripts')

JavaScript Code

&#64;endpush
</code></pre>

<pre class="bg-light border rounded p-3"><code>
&#64;stack('scripts')
</code></pre>

            <div class="alert alert-info">

                Stacks are useful when different pages require different JavaScript or CSS files.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Components
            </h2>

            <p>
                Components allow developers to create reusable user interface elements. Instead of writing the same HTML repeatedly, components can be reused throughout the application.
            </p>

            <p>
                Examples of Blade Components:
            </p>

            <ul class="list-group">

                <li class="list-group-item">
                    Navigation Bar
                </li>

                <li class="list-group-item">
                    Footer
                </li>

                <li class="list-group-item">
                    Alert Box
                </li>

                <li class="list-group-item">
                    Button
                </li>

                <li class="list-group-item">
                    Card
                </li>

                <li class="list-group-item">
                    Modal
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Blade Layout Directives
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>Directive</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>&#64;extends</td>

                        <td>Extends a parent layout.</td>

                    </tr>

                    <tr>

                        <td>&#64;section</td>

                        <td>Defines a section of content.</td>

                    </tr>

                    <tr>

                        <td>&#64;yield</td>

                        <td>Displays a section inside the layout.</td>

                    </tr>

                    <tr>

                        <td>&#64;include</td>

                        <td>Includes another Blade file.</td>

                    </tr>

                    <tr>

                        <td>&#64;push</td>

                        <td>Adds content into a stack.</td>

                    </tr>

                    <tr>

                        <td>&#64;stack</td>

                        <td>Displays stacked content.</td>

                    </tr>

                    <tr>

                        <td>&#64;component</td>

                        <td>Creates reusable Blade components.</td>

                    </tr>

                    <tr>

                        <td>&#64;slot</td>

                        <td>Defines component content.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Real-Life Example
            </h2>

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>

                        <th>Page</th>

                        <th>Uses Same Layout?</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Home</td>

                        <td>Yes</td>

                    </tr>

                    <tr>

                        <td>About</td>

                        <td>Yes</td>

                    </tr>

                    <tr>

                        <td>Contact</td>

                        <td>Yes</td>

                    </tr>

                    <tr>

                        <td>Services</td>

                        <td>Yes</td>

                    </tr>

                    <tr>

                        <td>Dashboard</td>

                        <td>Yes</td>

                    </tr>

                    <tr>

                        <td>User Profile</td>

                        <td>Yes</td>

                    </tr>

                </tbody>

            </table>

            <p>
                Only the page content changes, while the header, navigation bar, sidebar, and footer remain the same across all pages.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Blade Layouts
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Eliminates duplicate HTML.
                </li>

                <li class="list-group-item">
                    Makes projects easier to maintain.
                </li>

                <li class="list-group-item">
                    Provides consistent website design.
                </li>

                <li class="list-group-item">
                    Improves code organization.
                </li>

                <li class="list-group-item">
                    Faster development.
                </li>

                <li class="list-group-item">
                    Encourages reusable code.
                </li>

                <li class="list-group-item">
                    Makes large Laravel applications easier to manage.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Create one master layout for the entire application.
                </li>

                <li class="list-group-item">
                    Store layouts inside the <strong>layouts</strong> folder.
                </li>

                <li class="list-group-item">
                    Keep headers, footers, and navigation in partial views.
                </li>

                <li class="list-group-item">
                    Use meaningful section names.
                </li>

                <li class="list-group-item">
                    Keep layouts simple and reusable.
                </li>

                <li class="list-group-item">
                    Use components for frequently used interface elements.
                </li>

                <li class="list-group-item">
                    Avoid placing business logic inside Blade templates.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Interview Questions
            </h2>

            <div class="accordion" id="layoutQuestions">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
                            What is a Blade Layout?
                        </button>

                    </h2>

                    <div id="q1" class="accordion-collapse collapse show">

                        <div class="accordion-body">
                            A Blade Layout is a reusable master template that contains the common structure of multiple web pages.
                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
                            Why should we use Blade Layouts?
                        </button>

                    </h2>

                    <div id="q2" class="accordion-collapse collapse">

                        <div class="accordion-body">
                            Blade Layouts reduce duplicate code, improve maintainability, and make Laravel projects easier to organize.
                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Blade Layouts are one of Laravel's most powerful features. They allow developers to create reusable page structures by separating common HTML from page-specific content. Using directives like <strong>&amp;#64;extends</strong>, <strong>&amp;#64;section</strong>, <strong>&amp;#64;yield</strong>, <strong>&amp;#64;include</strong>, <strong>&amp;#64;push</strong>, and <strong>&amp;#64;stack</strong>, Laravel applications become cleaner, easier to maintain, and much faster to develop.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Blade Components",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Blade Components
            </h2>

            <p class="lead">
                Blade Components are reusable user interface (UI) elements in Laravel. They allow developers to write HTML only once and reuse it across multiple pages, making applications cleaner, easier to maintain, and more organized.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A Blade Component is a reusable template that contains HTML and optional PHP logic. Instead of copying the same code into multiple pages, you create one component and reuse it wherever needed.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Blade Components?
            </h2>

            <p>
                In large Laravel applications, many UI elements such as buttons, cards, alerts, navigation bars, and forms appear repeatedly. Blade Components eliminate duplicate code by allowing these elements to be created once and reused anywhere.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Reduces duplicate HTML.
                        </li>

                        <li class="list-group-item">
                            Makes code reusable.
                        </li>

                        <li class="list-group-item">
                            Easier to maintain.
                        </li>

                        <li class="list-group-item">
                            Keeps views organized.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Improves readability.
                        </li>

                        <li class="list-group-item">
                            Speeds up development.
                        </li>

                        <li class="list-group-item">
                            Easy to customize.
                        </li>

                        <li class="list-group-item">
                            Promotes clean code.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Examples of Blade Components
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Component</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Button</td>

                        <td>Reusable buttons throughout the application.</td>

                    </tr>

                    <tr>

                        <td>Alert</td>

                        <td>Display success, warning, or error messages.</td>

                    </tr>

                    <tr>

                        <td>Card</td>

                        <td>Display products, posts, or user information.</td>

                    </tr>

                    <tr>

                        <td>Navbar</td>

                        <td>Reusable navigation menu.</td>

                    </tr>

                    <tr>

                        <td>Footer</td>

                        <td>Reusable website footer.</td>

                    </tr>

                    <tr>

                        <td>Modal</td>

                        <td>Popup dialog windows.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Component Folder Structure
            </h2>

            <p>
                Blade Components are usually stored inside the following directories:
            </p>

<pre class="bg-light border rounded p-3"><code>
app/

└── View/

    └── Components/

resources/

└── views/

    └── components/
</code></pre>

            <p>
                The PHP class is stored inside the <strong>app/View/Components</strong> folder, while the Blade view is stored inside the <strong>resources/views/components</strong> folder.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Blade Component
            </h2>

            <p>
                Laravel Artisan provides a command for creating components.
            </p>

<pre class="bg-light border rounded p-3"><code>
php artisan make:component Alert
</code></pre>

            <div class="alert alert-info">

                This command automatically creates both the component class and its Blade view.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Generated Files
            </h2>

<pre class="bg-light border rounded p-3"><code>
app/

└── View/

    └── Components/

        └── Alert.php

resources/

└── views/

    └── components/

        └── alert.blade.php
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Using a Component
            </h2>

            <p>
                After creating a component, it can be used inside any Blade file.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;x-alert /&gt;
</code></pre>

            <div class="alert alert-warning">

                HTML tags inside code examples are escaped so they appear as plain text.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Passing Data to Components
            </h2>

            <p>
                Components can receive data using HTML-style attributes.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;x-alert

    type="success"

    message="Profile Updated Successfully."

/&gt;
</code></pre>

            <p>
                The component receives these values and displays them inside the view.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Component Properties
            </h2>

            <p>
                Component properties allow data to be accessed inside the component view.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;props(['title'])

&amp;#123;&amp;#123; \$title &amp;#125;&amp;#125;
</code></pre>

            <div class="alert alert-warning">

                Blade directives and expressions are escaped in this tutorial so Laravel displays them as plain text instead of executing them.

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <strong>End of Part 1</strong>

                <p class="mb-0 mt-2">
                    In Part 2, you'll learn about Slots, Anonymous Components, Dynamic Components, Component Attributes, Common Blade Component Directives, Best Practices, Interview Questions, and Summary.
                </p>

            </div>

        </div>

    </div>

</div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Blade Slots
            </h2>

            <p>
                Slots allow developers to insert custom content inside Blade Components. Instead of creating a separate component for every variation, slots make components more flexible.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;x-card&gt;

    Page Content

&lt;/x-card&gt;
</code></pre>

            <p>
                The content placed between the opening and closing component tags becomes the slot content.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Anonymous Components
            </h2>

            <p>
                Anonymous Components are simple Blade components that do not require a PHP class. They only contain a Blade view file.
            </p>

<pre class="bg-light border rounded p-3"><code>
resources/

└── views/

    └── components/

        └── button.blade.php
</code></pre>

            <p>
                Anonymous Components are useful for simple reusable UI elements.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Dynamic Components
            </h2>

            <p>
                Dynamic Components allow the component name to be selected at runtime.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;x-dynamic-component

    :component="\$componentName"

/&gt;
</code></pre>

            <div class="alert alert-info">

                Dynamic Components make applications more flexible by loading different components based on conditions.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Component Attributes
            </h2>

            <p>
                Components can receive HTML attributes such as class, id, style, and custom attributes.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;x-button

    class="btn btn-primary"

    id="saveBtn"

/&gt;
</code></pre>

            <p>
                This allows components to be customized without changing their internal code.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Blade Component Directives
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>Directive</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>&#64;props</td>

                        <td>Defines properties received by a component.</td>

                    </tr>

                    <tr>

                        <td>&#64;aware</td>

                        <td>Accesses data from a parent component.</td>

                    </tr>

                    <tr>

                        <td>&#64;slot</td>

                        <td>Defines named slot content.</td>

                    </tr>

                    <tr>

                        <td>&#64;endslot</td>

                        <td>Ends a named slot.</td>

                    </tr>

                    <tr>

                        <td>&#64;class</td>

                        <td>Conditionally applies CSS classes.</td>

                    </tr>

                    <tr>

                        <td>&#64;style</td>

                        <td>Conditionally applies inline styles.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Real-Life Uses of Blade Components
            </h2>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Navigation Bars
                        </li>

                        <li class="list-group-item">
                            Buttons
                        </li>

                        <li class="list-group-item">
                            Product Cards
                        </li>

                        <li class="list-group-item">
                            User Profile Cards
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Alert Messages
                        </li>

                        <li class="list-group-item">
                            Forms
                        </li>

                        <li class="list-group-item">
                            Dashboard Widgets
                        </li>

                        <li class="list-group-item">
                            Footer Sections
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Blade Components
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Reduces duplicate HTML code.
                </li>

                <li class="list-group-item">
                    Improves code organization.
                </li>

                <li class="list-group-item">
                    Makes applications easier to maintain.
                </li>

                <li class="list-group-item">
                    Encourages reusable UI elements.
                </li>

                <li class="list-group-item">
                    Faster application development.
                </li>

                <li class="list-group-item">
                    Keeps Blade templates clean and readable.
                </li>

                <li class="list-group-item">
                    Simplifies large Laravel projects.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Create components for reusable interface elements.
                </li>

                <li class="list-group-item">
                    Keep each component focused on a single purpose.
                </li>

                <li class="list-group-item">
                    Use descriptive component names.
                </li>

                <li class="list-group-item">
                    Avoid placing business logic inside Blade components.
                </li>

                <li class="list-group-item">
                    Pass only the data required by the component.
                </li>

                <li class="list-group-item">
                    Use anonymous components for simple UI elements.
                </li>

                <li class="list-group-item">
                    Organize components into folders when the project grows.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Interview Questions
            </h2>

            <div class="accordion" id="componentQuestions">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#componentQ1">

                            What are Blade Components?

                        </button>

                    </h2>

                    <div id="componentQ1" class="accordion-collapse collapse show">

                        <div class="accordion-body">

                            Blade Components are reusable UI elements that simplify view development by reducing duplicate HTML code.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#componentQ2">

                            What is the difference between Anonymous Components and Class Components?

                        </button>

                    </h2>

                    <div id="componentQ2" class="accordion-collapse collapse">

                        <div class="accordion-body">

                            Anonymous Components only use a Blade file, while Class Components use both a PHP class and a Blade view.

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">

                    Blade Components are one of Laravel's most powerful features for building reusable user interface elements. They reduce duplicate code, improve maintainability, and keep Blade templates organized. Features such as Slots, Anonymous Components, Dynamic Components, Component Properties, and reusable attributes make Blade Components an essential part of modern Laravel development.

                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Forms & CSRF Protection",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Forms & CSRF Protection
            </h2>

            <p class="lead">
                Forms are one of the most important parts of every Laravel application. They allow users to submit information such as registration details, login credentials, contact messages, profile updates, and much more. Laravel also provides built-in CSRF protection to keep forms secure.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                A form is an HTML element that collects user input and sends it to the Laravel application. Laravel protects submitted forms using CSRF (Cross-Site Request Forgery) tokens.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Forms are Important
            </h2>

            <p>
                Almost every web application uses forms to communicate between users and the server. Laravel provides powerful tools to process and validate form data securely.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            User Registration
                        </li>

                        <li class="list-group-item">
                            User Login
                        </li>

                        <li class="list-group-item">
                            Contact Forms
                        </li>

                        <li class="list-group-item">
                            Product Orders
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Profile Updates
                        </li>

                        <li class="list-group-item">
                            File Uploads
                        </li>

                        <li class="list-group-item">
                            Search Forms
                        </li>

                        <li class="list-group-item">
                            Feedback Forms
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Basic HTML Form
            </h2>

            <p>
                Every Laravel form starts with a standard HTML form element.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;form&gt;

Form Elements

&lt;/form&gt;
</code></pre>

            <div class="alert alert-info">

                Laravel uses normal HTML forms together with Blade directives and routing.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Form Action
            </h2>

            <p>
                The <strong>action</strong> attribute specifies where the submitted data should be sent.
            </p>

<pre class="bg-light border rounded p-3"><code>
action="/users"
</code></pre>

            <p>
                Usually, the action points to a Laravel route.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Form Methods
            </h2>

            <p>
                Laravel commonly uses the following HTTP request methods.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Method</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>GET</td>

                        <td>Retrieve information.</td>

                    </tr>

                    <tr>

                        <td>POST</td>

                        <td>Create new records.</td>

                    </tr>

                    <tr>

                        <td>PUT</td>

                        <td>Update existing records.</td>

                    </tr>

                    <tr>

                        <td>PATCH</td>

                        <td>Update part of a record.</td>

                    </tr>

                    <tr>

                        <td>DELETE</td>

                        <td>Delete records.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Form Elements
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Element</th>

                        <th>Purpose</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Text Box</td>

                        <td>Accept text input.</td>

                    </tr>

                    <tr>

                        <td>Password</td>

                        <td>Accept hidden passwords.</td>

                    </tr>

                    <tr>

                        <td>Email</td>

                        <td>Accept email addresses.</td>

                    </tr>

                    <tr>

                        <td>Number</td>

                        <td>Accept numeric values.</td>

                    </tr>

                    <tr>

                        <td>Textarea</td>

                        <td>Accept long text.</td>

                    </tr>

                    <tr>

                        <td>Select</td>

                        <td>Create dropdown lists.</td>

                    </tr>

                    <tr>

                        <td>Checkbox</td>

                        <td>Select multiple options.</td>

                    </tr>

                    <tr>

                        <td>Radio Button</td>

                        <td>Select one option.</td>

                    </tr>

                    <tr>

                        <td>Submit Button</td>

                        <td>Send the form.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Example Login Form
            </h2>

<pre class="bg-light border rounded p-3"><code>
&lt;form method="POST"&gt;

Email Field

Password Field

Submit Button

&lt;/form&gt;
</code></pre>

            <p>
                Laravel processes the submitted data using routes and controllers.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Form Validation
            </h2>

            <p>
                Validation ensures that users submit correct and complete information before it is saved in the database.
            </p>

            <div class="alert alert-warning">

                Validation prevents invalid or malicious data from entering your application.

            </div>

            <table class="table table-bordered table-striped">

                <thead class="table-secondary">

                    <tr>

                        <th>Validation Rule</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>required</td>

                        <td>Field cannot be empty.</td>

                    </tr>

                    <tr>

                        <td>email</td>

                        <td>Must contain a valid email address.</td>

                    </tr>

                    <tr>

                        <td>min</td>

                        <td>Minimum length.</td>

                    </tr>

                    <tr>

                        <td>max</td>

                        <td>Maximum length.</td>

                    </tr>

                    <tr>

                        <td>unique</td>

                        <td>Value must be unique.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What is CSRF?
            </h2>

            <p>
                CSRF stands for <strong>Cross-Site Request Forgery</strong>. It is a security attack that tricks authenticated users into performing unwanted actions without their knowledge.
            </p>

            <div class="alert alert-danger">

                Without CSRF protection, attackers could submit fake requests using a logged-in user's account.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                How Laravel Prevents CSRF Attacks
            </h2>

            <p>
                Laravel automatically generates a unique CSRF token for every user session. Every POST, PUT, PATCH, and DELETE form should include this token.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;csrf
</code></pre>

            <div class="alert alert-success">

                <strong>Important:</strong>

                The Blade directive above is escaped so it appears as plain text. Laravel will not execute it inside this tutorial.

            </div>

            <hr class="my-4">

            <div class="alert alert-primary">

                <h5 class="fw-bold">
                    End of Part 1
                </h5>

                <p class="mb-0">
                    In Part 2, we'll learn about CSRF Tokens, Method Spoofing, File Upload Forms, Displaying Validation Errors, Form Best Practices, Interview Questions, and Summary.

                </p>

            </div>

        </div>

    </div>

</div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSRF Token
            </h2>

            <p>
                A CSRF token is a unique security token generated by Laravel for every active user session. When a form is submitted, Laravel verifies this token before processing the request.
            </p>

            <div class="alert alert-info">

                Every POST, PUT, PATCH, and DELETE request should include a valid CSRF token.

            </div>

<pre class="bg-light border rounded p-3"><code>
&#64;csrf
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Method Spoofing
            </h2>

            <p>
                HTML forms only support the GET and POST methods. Laravel uses Method Spoofing to simulate PUT, PATCH, and DELETE requests.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;method('PUT')
</code></pre>

            <p>
                Replace <strong>PUT</strong> with <strong>PATCH</strong> or <strong>DELETE</strong> depending on the operation you want to perform.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                File Upload Forms
            </h2>

            <p>
                To upload files such as images or documents, the form must use the correct encoding type.
            </p>

<pre class="bg-light border rounded p-3"><code>
&lt;form

method="POST"

enctype="multipart/form-data"

&gt;

File Input

&lt;/form&gt;
</code></pre>

            <div class="alert alert-warning">

                Without the <strong>multipart/form-data</strong> encoding type, uploaded files will not be sent to the server.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Displaying Validation Errors
            </h2>

            <p>
                Laravel provides Blade directives for displaying validation errors after form submission.
            </p>

<pre class="bg-light border rounded p-3"><code>
&#64;error('email')

Validation Message

&#64;enderror
</code></pre>

            <div class="alert alert-info">

                The directives above are escaped so they appear as plain text inside this tutorial.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Laravel Form Directives
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Directive</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>&#64;csrf</td>

                        <td>Adds a CSRF security token.</td>

                    </tr>

                    <tr>

                        <td>&#64;method</td>

                        <td>Simulates PUT, PATCH, or DELETE requests.</td>

                    </tr>

                    <tr>

                        <td>&#64;error</td>

                        <td>Displays validation errors.</td>

                    </tr>

                    <tr>

                        <td>&#64;enderror</td>

                        <td>Ends the validation error block.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Form Submission Flow
            </h2>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    User fills in the form.
                </li>

                <li class="list-group-item">
                    User clicks the Submit button.
                </li>

                <li class="list-group-item">
                    Browser sends the request to Laravel.
                </li>

                <li class="list-group-item">
                    Laravel checks the CSRF token.
                </li>

                <li class="list-group-item">
                    Laravel validates the submitted data.
                </li>

                <li class="list-group-item">
                    Controller processes the request.
                </li>

                <li class="list-group-item">
                    Data is stored or updated in the database.
                </li>

                <li class="list-group-item">
                    Laravel redirects the user with a success or error message.
                </li>

            </ol>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Always include a CSRF token in every POST form.
                </li>

                <li class="list-group-item">
                    Validate all user input before saving it.
                </li>

                <li class="list-group-item">
                    Display validation errors clearly.
                </li>

                <li class="list-group-item">
                    Use Method Spoofing for PUT, PATCH, and DELETE requests.
                </li>

                <li class="list-group-item">
                    Sanitize and validate uploaded files.
                </li>

                <li class="list-group-item">
                    Keep forms simple and user-friendly.
                </li>

                <li class="list-group-item">
                    Never trust user input without validation.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Interview Questions
            </h2>

            <div class="accordion" id="formQuestions">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#formQ1">

                            What is CSRF?

                        </button>

                    </h2>

                    <div id="formQ1" class="accordion-collapse collapse show">

                        <div class="accordion-body">

                            CSRF (Cross-Site Request Forgery) is a security attack where unauthorized requests are sent using a trusted user's session. Laravel prevents this using CSRF tokens.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#formQ2">

                            Why do we use &#64;csrf in Laravel forms?

                        </button>

                    </h2>

                    <div id="formQ2" class="accordion-collapse collapse">

                        <div class="accordion-body">

                            The &#64;csrf directive inserts a hidden security token into the form. Laravel verifies this token to ensure that the request is legitimate.

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">

                    Laravel Forms provide an easy and secure way to collect user input. Built-in features such as CSRF Protection, Method Spoofing, Validation, and File Upload support help developers build secure and reliable web applications. Always validate user input, include a CSRF token in forms, and follow Laravel's best practices to keep your applications safe.

                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Request Handling",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Request Handling
            </h2>

            <p class="lead">
                Every Laravel application communicates with users through HTTP requests. Whenever a user opens a page, submits a form, uploads a file, or clicks a button, a request is sent to the Laravel application. Laravel receives the request, processes it, and returns an appropriate response.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                Request Handling is the process of receiving an HTTP request from the client (browser), processing it inside Laravel, and returning a response back to the client.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What is an HTTP Request?
            </h2>

            <p>
                An HTTP Request is a message sent by the client's browser to the web server asking it to perform an action such as displaying a page, submitting a form, updating data, or deleting information.
            </p>

            <div class="alert alert-info">

                Every time you visit a website, your browser sends an HTTP request to the server.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Examples of HTTP Requests
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>User Action</th>

                        <th>HTTP Request</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Open Home Page</td>

                        <td>GET</td>

                    </tr>

                    <tr>

                        <td>Login</td>

                        <td>POST</td>

                    </tr>

                    <tr>

                        <td>Register User</td>

                        <td>POST</td>

                    </tr>

                    <tr>

                        <td>Update Profile</td>

                        <td>PUT</td>

                    </tr>

                    <tr>

                        <td>Edit Product</td>

                        <td>PATCH</td>

                    </tr>

                    <tr>

                        <td>Delete Record</td>

                        <td>DELETE</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Laravel Request Lifecycle
            </h2>

            <p>
                Laravel follows a series of steps before returning a response to the user.
            </p>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    Browser sends a request.
                </li>

                <li class="list-group-item">
                    Request reaches Laravel's <strong>public/index.php</strong>.
                </li>

                <li class="list-group-item">
                    Laravel boots the framework.
                </li>

                <li class="list-group-item">
                    Middleware checks the request.
                </li>

                <li class="list-group-item">
                    Route matches the requested URL.
                </li>

                <li class="list-group-item">
                    Controller processes the request.
                </li>

                <li class="list-group-item">
                    Database operations are performed (if needed).
                </li>

                <li class="list-group-item">
                    A response is returned to the browser.
                </li>

            </ol>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Types of HTTP Requests
            </h2>

            <table class="table table-bordered">

                <thead class="table-primary">

                    <tr>

                        <th>Method</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>GET</td>

                        <td>Retrieve data from the server.</td>

                    </tr>

                    <tr>

                        <td>POST</td>

                        <td>Create new data.</td>

                    </tr>

                    <tr>

                        <td>PUT</td>

                        <td>Replace existing data.</td>

                    </tr>

                    <tr>

                        <td>PATCH</td>

                        <td>Update selected fields.</td>

                    </tr>

                    <tr>

                        <td>DELETE</td>

                        <td>Remove data.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Receiving Requests Using Routes
            </h2>

            <p>
                Laravel routes receive incoming requests and direct them to the appropriate controller or closure.
            </p>

<pre class="bg-light border rounded p-3"><code>
Route::get('/home', function () {

    return 'Welcome';

});
</code></pre>

            <div class="alert alert-warning">

                This example is displayed for learning purposes. Since it is inside a code block, Laravel will not execute it.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                The Request Object
            </h2>

            <p>
                Laravel provides the Request object to access all incoming request data including form fields, query parameters, uploaded files, cookies, and headers.
            </p>

<pre class="bg-light border rounded p-3"><code>
use Illuminate\Http\Request;
</code></pre>

            <p>
                The Request object is commonly passed as a parameter to controller methods.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Accessing Form Data
            </h2>

            <p>
                Submitted form values can be accessed through the Request object.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->input('name')

\$request->input('email')
</code></pre>

            <div class="alert alert-info">

                The <strong>input()</strong> method retrieves values submitted by the user.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Accessing Query Parameters
            </h2>

            <p>
                Query parameters are values passed in the URL after the question mark (?).
            </p>

<pre class="bg-light border rounded p-3"><code>
/search?name=Ali
</code></pre>

<pre class="bg-light border rounded p-3"><code>
\$request->query('name')
</code></pre>

            <p>
                The <strong>query()</strong> method retrieves values from the URL query string.

            </p>

            <hr class="my-4">

            <div class="alert alert-success">

                <h5 class="fw-bold">
                    End of Part 1
                </h5>

                <p class="mb-0">
                    In Part 2, you'll learn about Request Methods, Checking Request Type, Request Headers, Cookies, Sessions, File Upload Requests, Helper Methods, Best Practices, Interview Questions, and Summary.

                </p>

            </div>

        </div>

    </div>

</div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Checking Request Method
            </h2>

            <p>
                Laravel allows you to determine which HTTP request method was used to access the application.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->method()
</code></pre>

<pre class="bg-light border rounded p-3"><code>
\$request->isMethod('POST')
</code></pre>

            <div class="alert alert-info">

                These methods help perform different actions depending on whether the request is GET, POST, PUT, PATCH, or DELETE.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Request Headers
            </h2>

            <p>
                HTTP requests contain headers that provide additional information about the request, such as browser details, accepted content types, authentication tokens, and more.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->header('User-Agent')
</code></pre>

            <p>
                The <strong>header()</strong> method retrieves the value of a specific request header.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Cookies
            </h2>

            <p>
                Cookies store small amounts of information in the user's browser. Laravel can easily retrieve cookie values from incoming requests.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->cookie('username')
</code></pre>

            <div class="alert alert-warning">

                Cookies are commonly used to remember user preferences and login information.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Session Data
            </h2>

            <p>
                Sessions store user information on the server while the user navigates through different pages.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->session()
</code></pre>

            <p>
                Sessions are widely used for authentication, shopping carts, flash messages, and user-specific data.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                File Upload Requests
            </h2>

            <p>
                Laravel provides simple methods to check whether a file has been uploaded and to retrieve it from the request.
            </p>

<pre class="bg-light border rounded p-3"><code>
\$request->hasFile('image')
</code></pre>

<pre class="bg-light border rounded p-3"><code>
\$request->file('image')
</code></pre>

            <div class="alert alert-success">

                These methods are commonly used when uploading profile pictures, documents, videos, and other files.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Useful Request Helper Methods
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Method</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>input()</td>

                        <td>Retrieve form input values.</td>

                    </tr>

                    <tr>

                        <td>query()</td>

                        <td>Retrieve URL query parameters.</td>

                    </tr>

                    <tr>

                        <td>method()</td>

                        <td>Returns the HTTP request method.</td>

                    </tr>

                    <tr>

                        <td>isMethod()</td>

                        <td>Checks the request method.</td>

                    </tr>

                    <tr>

                        <td>header()</td>

                        <td>Returns request header values.</td>

                    </tr>

                    <tr>

                        <td>cookie()</td>

                        <td>Retrieves cookies.</td>

                    </tr>

                    <tr>

                        <td>session()</td>

                        <td>Accesses session data.</td>

                    </tr>

                    <tr>

                        <td>hasFile()</td>

                        <td>Checks if a file exists in the request.</td>

                    </tr>

                    <tr>

                        <td>file()</td>

                        <td>Retrieves an uploaded file.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Always validate user input before processing it.
                </li>

                <li class="list-group-item">
                    Never trust client-side data without verification.
                </li>

                <li class="list-group-item">
                    Validate uploaded files before storing them.
                </li>

                <li class="list-group-item">
                    Keep controller methods short and organized.
                </li>

                <li class="list-group-item">
                    Use Form Requests for complex validation.
                </li>

                <li class="list-group-item">
                    Use Middleware to filter unauthorized requests.
                </li>

                <li class="list-group-item">
                    Sanitize user input whenever necessary.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Interview Questions
            </h2>

            <div class="accordion" id="requestQuestions">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#requestQ1">

                            What is Request Handling in Laravel?

                        </button>

                    </h2>

                    <div id="requestQ1" class="accordion-collapse collapse show">

                        <div class="accordion-body">

                            Request Handling is the process of receiving, processing, validating, and responding to HTTP requests sent by the client.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#requestQ2">

                            Which class is used to handle HTTP requests in Laravel?

                        </button>

                    </h2>

                    <div id="requestQ2" class="accordion-collapse collapse">

                        <div class="accordion-body">

                            The <strong>Illuminate\Http\Request</strong> class is used to access and process incoming HTTP request data.

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Real-Life Example
            </h2>

            <div class="card border-primary">

                <div class="card-body">

                    <p>
                        Consider a user registration page:
                    </p>

                    <ol>

                        <li>User fills out the registration form.</li>

                        <li>The browser sends a POST request.</li>

                        <li>Laravel receives the request.</li>

                        <li>The Request object retrieves all submitted values.</li>

                        <li>Validation checks the entered data.</li>

                        <li>If validation passes, the controller stores the data in the database.</li>

                        <li>Laravel redirects the user with a success message.</li>

                    </ol>

                </div>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Request Handling is a core feature of Laravel that enables applications to receive, process, validate, and respond to HTTP requests efficiently. Using the <strong>Request</strong> object, developers can access form data, query parameters, headers, cookies, sessions, uploaded files, and request methods. Mastering Request Handling is essential for building secure, reliable, and dynamic Laravel applications.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title:"Validation",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h2 class="text-primary mb-4">
                Laravel Validation
            </h2>


            <p class="lead">
                Laravel provides a powerful validation system to validate incoming 
                user data. Validation ensures that user input is correct, secure, 
                and follows required rules before storing data in the database.
            </p>


            <hr>


            <h4 class="text-success mt-4">
                Why Validation is Important?
            </h4>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            ✅ Prevents invalid data from entering database.
                        </li>

                        <li class="list-group-item">
                            ✅ Improves application security.
                        </li>

                        <li class="list-group-item">
                            ✅ Provides better user experience.
                        </li>

                        <li class="list-group-item">
                            ✅ Protects against wrong user input.
                        </li>

                    </ul>

                </div>

            </div>



            <h4 class="text-success mt-5">
                Basic Validation Example
            </h4>


            <p>
                Laravel validation is usually performed inside a Controller 
                using the <strong>validate()</strong> method.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function store(Request $request)
{

    $request->validate([

        'name' => 'required',

        'email' => 'required|email',

        'password' => 'required|min:8'

    ]);


    // Store data after validation

}
</code></pre>

            </div>




            <h4 class="text-success mt-5">
                Common Validation Rules
            </h4>


            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>
                            <th>Rule</th>
                            <th>Description</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>
                            <td>required</td>
                            <td>Field cannot be empty.</td>
                        </tr>


                        <tr>
                            <td>string</td>
                            <td>Value must be a text string.</td>
                        </tr>


                        <tr>
                            <td>integer</td>
                            <td>Value must be a number.</td>
                        </tr>


                        <tr>
                            <td>email</td>
                            <td>Must be a valid email address.</td>
                        </tr>


                        <tr>
                            <td>min</td>
                            <td>Defines minimum length or value.</td>
                        </tr>


                        <tr>
                            <td>max</td>
                            <td>Defines maximum length or value.</td>
                        </tr>


                        <tr>
                            <td>unique</td>
                            <td>Checks duplicate values in database.</td>
                        </tr>


                        <tr>
                            <td>confirmed</td>
                            <td>Requires matching confirmation field.</td>
                        </tr>


                    </tbody>

                </table>

            </div>




            <h4 class="text-success mt-5">
                Registration Form Validation Example
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$request->validate([

    'name' => 
    'required|string|max:255',


    'email' => 
    'required|email|unique:users',


    'password' => 
    'required|min:8|confirmed'

]);

</code></pre>

            </div>





            <h4 class="text-success mt-5">
                Display Validation Errors in Blade
            </h4>


            <p>
                Laravel stores validation errors inside the 
                <strong>$errors</strong> variable.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

@@if ($errors->any())

&lt;div class="alert alert-danger"&gt;

&lt;ul&gt;


@@foreach ($errors->all() as $error)

&lt;li&gt;

@@{{ $error }}

&lt;/li&gt;


@@endforeach


&lt;/ul&gt;


&lt;/div&gt;


@@endif

</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Showing Single Error Message
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

&lt;span class="text-danger"&gt;

@@{{ $errors->first('email') }}

&lt;/span&gt;

</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Custom Validation Messages
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$request->validate(

[

'email' => 'required|email'

],


[

'email.required' => 
'Email address is required',


'email.email' =>
'Please enter valid email'

]


);

</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Form Request Validation
            </h4>


            <p>
                Large Laravel applications use Form Request classes to keep
                validation logic separate from controllers.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:request StoreUserRequest

</code></pre>

            </div>





            <h4 class="text-success mt-5">
                Validation Rules Method
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function rules()
{

    return [

        'name' => 'required',

        'email' => 
        'required|email'

    ];

}

</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Laravel Validation Flow
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card h-100 text-center shadow-sm">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                User submits form
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card h-100 text-center shadow-sm">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Request reaches controller
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card h-100 text-center shadow-sm">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Laravel checks rules
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card h-100 text-center shadow-sm">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Accept or return errors
                            </p>

                        </div>

                    </div>

                </div>


            </div>






            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Validation helps developers verify user input before
                saving data. It provides built-in rules, custom messages,
                and Form Request classes for secure application development.

            </div>


        </div>

    </div>


</div>


`
},

{
title:"Sessions & Cookies",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Sessions & Cookies
            </h2>


            <p class="lead">
                Laravel provides a simple and secure way to manage user data
                temporarily using <strong>Sessions</strong> and store small pieces
                of information in the user's browser using <strong>Cookies</strong>.
            </p>


            <hr>



            <h4 class="text-success mt-4">
                What are Sessions?
            </h4>


            <p>
                A session is used to store user information on the server.
                Sessions are commonly used for authentication, shopping carts,
                flash messages, and temporary data storage.
            </p>


            <ul class="list-group mb-4">

                <li class="list-group-item">
                    ✅ Session data is stored on the server.
                </li>

                <li class="list-group-item">
                    ✅ Each user has a unique session ID.
                </li>

                <li class="list-group-item">
                    ✅ Sessions are secure compared to storing data in cookies.
                </li>

                <li class="list-group-item">
                    ✅ Data can be accessed across multiple pages.
                </li>

            </ul>




            <h4 class="text-success mt-5">
                Session Configuration
            </h4>


            <p>
                Laravel session settings are stored inside:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

config/session.php

</code></pre>

            </div>



            <p class="mt-3">
                Laravel supports different session drivers:
            </p>


            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>
                            <th>Driver</th>
                            <th>Description</th>
                        </tr>

                    </thead>


                    <tbody>


                        <tr>
                            <td>file</td>
                            <td>Stores sessions in storage files.</td>
                        </tr>


                        <tr>
                            <td>database</td>
                            <td>Stores sessions inside database table.</td>
                        </tr>


                        <tr>
                            <td>cookie</td>
                            <td>Stores encrypted session data in cookies.</td>
                        </tr>


                        <tr>
                            <td>redis</td>
                            <td>Fast session storage using Redis.</td>
                        </tr>


                    </tbody>


                </table>

            </div>






            <h4 class="text-success mt-5">
                Storing Data in Session
            </h4>


            <p>
                Laravel provides the <strong>session()</strong> helper function
                to store session data.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

session([
    'username' => 'Najeeb',
    'role' => 'Admin'
]);


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Retrieving Session Data
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$username = session('username');


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Checking Session Data
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

if(session()->has('username'))
{

    echo session('username');

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Removing Session Data
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

session()->forget('username');


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Destroy All Sessions
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

session()->flush();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Flash Session Messages
            </h4>


            <p>
                Flash messages are temporary session data that are available
                only for the next request.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

session()->flash(
    'success',
    'Data saved successfully'
);


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Display Flash Message in Blade
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

@@if(session('success'))

&lt;div class="alert alert-success"&gt;

@@{{ session('success') }}

&lt;/div&gt;


@@endif


</code></pre>

            </div>






            <hr class="my-5">





            <h2 class="text-primary">
                Laravel Cookies
            </h2>


            <p>
                Cookies are small pieces of data stored inside the user's browser.
                Laravel cookies are encrypted and secure by default.
            </p>




            <h4 class="text-success mt-4">
                Creating Cookies
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Support\Facades\Cookie;


$cookie = Cookie::make(
    'username',
    'Najeeb',
    60
);


return response()
->cookie($cookie);


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Getting Cookies
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$username = Cookie::get('username');


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Deleting Cookies
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Cookie::queue(
    Cookie::forget('username')
);


</code></pre>

            </div>








            <h4 class="text-success mt-5">
                Difference Between Session and Cookie
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Session</th>

                            <th>Cookie</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Stored on server
                            </td>


                            <td>
                                Stored in browser
                            </td>


                        </tr>



                        <tr>

                            <td>
                                More secure
                            </td>


                            <td>
                                Less secure
                            </td>


                        </tr>



                        <tr>

                            <td>
                                Can store larger data
                            </td>


                            <td>
                                Stores small data
                            </td>


                        </tr>



                        <tr>

                            <td>
                                Used for authentication
                            </td>


                            <td>
                                Used for preferences
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>






            <h4 class="text-success mt-5">
                Real World Examples
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h5>
                                Login System
                            </h5>

                            <p>
                                Sessions keep users logged in.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h5>
                                Shopping Cart
                            </h5>

                            <p>
                                Store cart items temporarily.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h5>
                                Remember Me
                            </h5>

                            <p>
                                Cookies remember users.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100">

                        <div class="card-body text-center">

                            <h5>
                                Preferences
                            </h5>

                            <p>
                                Save language/theme settings.
                            </p>

                        </div>

                    </div>

                </div>


            </div>






            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Sessions are used to store temporary user data on the server,
                while Cookies store small information inside the user's browser.
                Both are important for authentication, user preferences,
                shopping carts, and maintaining application state.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Database Configuration",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Database Configuration
            </h2>


            <p class="lead">
                Laravel provides a simple and powerful database configuration
                system that allows applications to connect with databases like
                MySQL, PostgreSQL, SQLite, and SQL Server.
            </p>


            <hr>



            <h4 class="text-success mt-4">
                Supported Databases in Laravel
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                MySQL
                            </h5>

                            <p>
                                Most commonly used database with Laravel.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                PostgreSQL
                            </h5>

                            <p>
                                Advanced open-source database system.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                SQLite
                            </h5>

                            <p>
                                Lightweight database stored in a file.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                SQL Server
                            </h5>

                            <p>
                                Microsoft's relational database.
                            </p>

                        </div>

                    </div>

                </div>


            </div>






            <h4 class="text-success mt-5">
                Database Configuration File
            </h4>


            <p>
                Laravel database settings are stored in the
                <strong>.env</strong> file.
                This file contains database credentials and environment settings.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=laravel_project

DB_USERNAME=root

DB_PASSWORD=


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Understanding Database Configuration
            </h4>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Setting</th>

                            <th>Description</th>

                        </tr>

                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                DB_CONNECTION
                            </td>

                            <td>
                                Defines database type such as MySQL.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                DB_HOST
                            </td>

                            <td>
                                Database server address.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                DB_PORT
                            </td>

                            <td>
                                Database communication port.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                DB_DATABASE
                            </td>

                            <td>
                                Name of your database.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                DB_USERNAME
                            </td>

                            <td>
                                Database username.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                DB_PASSWORD
                            </td>

                            <td>
                                Database password.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Creating MySQL Database
            </h4>


            <p>
                Before connecting Laravel, create a database in MySQL.
                You can use phpMyAdmin or MySQL command line.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

CREATE DATABASE laravel_project;


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Testing Database Connection
            </h4>


            <p>
                After configuring the database, run Laravel migration command
                to check the connection.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate


</code></pre>

            </div>


            <div class="alert alert-success mt-3">

                If migration runs successfully, Laravel is connected with
                your database.

            </div>







            <h4 class="text-success mt-5">
                Laravel Database Configuration Cache
            </h4>


            <p>
                Laravel caches configuration files for better performance.
                After changing database settings, clear the cache.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan config:clear


php artisan cache:clear


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Database Connection Using Laravel Tinker
            </h4>


            <p>
                Laravel Tinker allows you to interact with your application
                from the command line.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan tinker


DB::connection()->getPdo();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Multiple Database Connections
            </h4>


            <p>
                Laravel allows multiple database connections in one application.
                Configuration is stored inside:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

config/database.php


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Database Migration Connection Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Schema::connection('mysql')
->create('users', function($table){

    $table->id();

    $table->string('name');

});


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Common Database Errors
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-danger">

                        <tr>

                            <th>Error</th>

                            <th>Solution</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Access denied for user
                            </td>

                            <td>
                                Check DB username and password.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Unknown database
                            </td>

                            <td>
                                Create database or check DB_DATABASE.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Connection refused
                            </td>

                            <td>
                                Check MySQL server status.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Database Configuration Flow
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                1
                            </h5>

                            <p>
                                Install Laravel Project
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                2
                            </h5>

                            <p>
                                Create MySQL Database
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                3
                            </h5>

                            <p>
                                Configure .env File
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                4
                            </h5>

                            <p>
                                Run Migration
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel database configuration connects your application
                with MySQL and other database systems. The .env file manages
                database credentials, while migrations and Artisan commands
                help maintain database structure efficiently.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Migrations",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Migrations
            </h2>


            <p class="lead">
                Laravel migrations provide a version control system for your
                database. They allow developers to create, modify, and share
                database table structures using PHP code instead of manually
                creating tables in MySQL.
            </p>


            <hr>




            <h4 class="text-success mt-4">
                What are Laravel Migrations?
            </h4>


            <p>
                A migration is a PHP file that contains instructions for
                creating or modifying database tables. Laravel stores migration
                files inside the <strong>database/migrations</strong> folder.
            </p>


            <ul class="list-group">

                <li class="list-group-item">
                    ✅ Creates database tables using PHP code.
                </li>

                <li class="list-group-item">
                    ✅ Keeps database changes organized.
                </li>

                <li class="list-group-item">
                    ✅ Allows team members to share database structure.
                </li>

                <li class="list-group-item">
                    ✅ Supports rollback of database changes.
                </li>

            </ul>






            <h4 class="text-success mt-5">
                Migration File Location
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

database
|
|-- migrations
        |
        |-- 2026_01_01_create_users_table.php


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating a Migration
            </h4>


            <p>
                Laravel provides Artisan commands to create migration files.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:migration create_products_table


</code></pre>

            </div>



            <p class="mt-3">
                This command creates a new migration file inside the
                <strong>database/migrations</strong> directory.
            </p>







            <h4 class="text-success mt-5">
                Migration File Structure
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up()
    {

        Schema::create('products', function(Blueprint $table){

            $table->id();

            $table->string('name');

            $table->decimal('price',10,2);

            $table->timestamps();

        });

    }


    public function down()
    {

        Schema::dropIfExists('products');

    }

};


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Understanding Migration Methods
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                up()
                            </td>

                            <td>
                                Runs when migration is executed.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                down()
                            </td>

                            <td>
                                Runs when migration is rolled back.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Schema::create()
                            </td>

                            <td>
                                Creates a new database table.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Schema::table()
                            </td>

                            <td>
                                Modifies an existing table.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>








            <h4 class="text-success mt-5">
                Common Column Types
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Column</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                $table->id()
                            </td>

                            <td>
                                Creates auto increment primary key.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                $table->string()
                            </td>

                            <td>
                                Stores text values.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                $table->integer()
                            </td>

                            <td>
                                Stores numbers.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                $table->boolean()
                            </td>

                            <td>
                                Stores true or false values.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                $table->date()
                            </td>

                            <td>
                                Stores date values.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                $table->timestamps()
                            </td>

                            <td>
                                Creates created_at and updated_at columns.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Running Migrations
            </h4>


            <p>
                After creating migrations, run the following command:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Rollback Migrations
            </h4>


            <p>
                Rollback removes the latest migration changes.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate:rollback


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Refresh All Migrations
            </h4>


            <p>
                This command removes all tables and runs migrations again.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate:refresh


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating Table Example
            </h4>


            <p>
                Example: Creating a students table.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Schema::create('students', function(Blueprint $table)
{

    $table->id();

    $table->string('name');

    $table->string('email')
          ->unique();

    $table->integer('age');

    $table->timestamps();

});


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Adding New Column to Existing Table
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:migration 
add_phone_to_users_table


</code></pre>

            </div>


            <p class="mt-3">
                Example:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Schema::table('users', function(Blueprint $table)
{

    $table->string('phone');

});


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Migration Workflow
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Create Migration
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Define Table Structure
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Run Migration Command
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Database Table Created
                            </p>

                        </div>

                    </div>

                </div>


            </div>








            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel migrations allow developers to manage database structure
                using PHP code. They make database creation, modification,
                and collaboration easier by providing a clean version control
                system for databases.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Database Seeders",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Database Seeders
            </h2>


            <p class="lead">
                Laravel Database Seeders allow developers to insert sample,
                testing, or default data into the database automatically.
                Seeders are useful when creating demo applications,
                testing features, and preparing initial application data.
            </p>


            <hr>


            <h4 class="text-success mt-4">
                What are Database Seeders?
            </h4>


            <p>
                A seeder is a PHP class that contains instructions to insert
                records into database tables. Laravel stores seeder files inside
                the <strong>database/seeders</strong> directory.
            </p>


            <ul class="list-group">

                <li class="list-group-item">
                    ✅ Insert sample data into database tables.
                </li>

                <li class="list-group-item">
                    ✅ Create default users and roles.
                </li>

                <li class="list-group-item">
                    ✅ Generate testing data quickly.
                </li>

                <li class="list-group-item">
                    ✅ Automate database setup.
                </li>

            </ul>






            <h4 class="text-success mt-5">
                Seeder File Location
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

database

|
|-- seeders

        |
        |-- DatabaseSeeder.php

        |-- UserSeeder.php


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating a Seeder
            </h4>


            <p>
                Laravel provides an Artisan command to create a seeder.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:seeder UserSeeder


</code></pre>

            </div>



            <p class="mt-3">
                This command creates a new seeder file inside:
            </p>


            <div class="alert alert-secondary">

                database/seeders/UserSeeder.php

            </div>







            <h4 class="text-success mt-5">
                Seeder File Structure
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{

    public function run()
    {

        // Insert database records

    }

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Inserting Data Using Seeder
            </h4>


            <p>
                Laravel provides the DB facade to insert records.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Support\Facades\DB;


public function run()
{

    DB::table('users')->insert([

        'name' => 'Admin',

        'email' => 'admin@gmail.com',

        'password' => bcrypt('password')

    ]);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Running Seeder
            </h4>


            <p>
                To execute a specific seeder:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan db:seed 
--class=UserSeeder


</code></pre>

            </div>






            <h4 class="text-success mt-5">
                Calling Seeders from DatabaseSeeder
            </h4>


            <p>
                The main seeder file is:
            </p>


            <div class="alert alert-info">

                database/seeders/DatabaseSeeder.php

            </div>



            <p>
                You can call other seeders inside the run() method.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function run()
{

    $this->call([

        UserSeeder::class

    ]);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Running All Seeders
            </h4>


            <p>
                Run all registered seeders using:
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan db:seed


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Migration With Seeder
            </h4>


            <p>
                Laravel allows running migrations and seeders together.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate --seed


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Fresh Database With Seed Data
            </h4>


            <p>
                This command deletes all tables, recreates them,
                and inserts seed data.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate:fresh --seed


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Using Model Factory With Seeder
            </h4>


            <p>
                Factories are commonly used with seeders to generate fake data.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User::factory()

->count(50)

->create();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Seeder vs Factory
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Seeder</th>

                            <th>Factory</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Inserts predefined data.
                            </td>

                            <td>
                                Generates fake data.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Used for default records.
                            </td>

                            <td>
                                Used for testing.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Example: Admin user.
                            </td>

                            <td>
                                Example: 100 fake users.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Seeder Examples
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Admin Account
                            </h5>

                            <p>
                                Create default administrator user.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Roles
                            </h5>

                            <p>
                                Insert user roles and permissions.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Categories
                            </h5>

                            <p>
                                Add default product categories.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Testing Data
                            </h5>

                            <p>
                                Generate application test records.
                            </p>

                        </div>

                    </div>

                </div>


            </div>








            <h4 class="text-success mt-5">
                Seeder Workflow
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Create Seeder
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Add Insert Logic
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Register Seeder
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Run Seeder Command
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Database Seeders help developers insert initial,
                sample, and testing data automatically. They work together
                with migrations and factories to create a complete database
                setup for Laravel applications.

            </div>



        </div>

    </div>

</div>


`
},
{
title:"Factories",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Database Factories
            </h2>


            <p class="lead">
                Laravel Database Factories provide an easy way to generate
                fake data for database tables. Factories are mainly used for
                testing, database seeding, and creating dummy records during
                application development.
            </p>


            <hr>




            <h4 class="text-success mt-4">
                What are Laravel Factories?
            </h4>


            <p>
                A factory is a PHP class that defines how to create fake
                database records using Laravel's Model Factory system.
                Factories are stored inside the:
            </p>


            <div class="alert alert-secondary">

                database/factories

            </div>


            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Generate fake users and application data.
                </li>


                <li class="list-group-item">
                    ✅ Quickly create thousands of records.
                </li>


                <li class="list-group-item">
                    ✅ Useful for testing application features.
                </li>


                <li class="list-group-item">
                    ✅ Works together with Seeders.
                </li>


            </ul>






            <h4 class="text-success mt-5">
                Factory File Location
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

database

|
|-- factories

        |
        |-- UserFactory.php


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating a Factory
            </h4>


            <p>
                Laravel provides an Artisan command to create factories.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:factory ProductFactory


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Factory File Structure
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    public function definition()
    {

        return [

            'name' => $this->faker->name,

            'price' => $this->faker->randomFloat(
                2,10,100
            ),

        ];

    }

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Understanding Faker
            </h4>


            <p>
                Laravel uses the Faker library to generate realistic fake data.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Faker Method</th>

                            <th>Generated Data</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                faker->name()
                            </td>

                            <td>
                                Random person name.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                faker->email()
                            </td>

                            <td>
                                Random email address.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                faker->address()
                            </td>

                            <td>
                                Random address.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                faker->phoneNumber()
                            </td>

                            <td>
                                Random phone number.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                faker->sentence()
                            </td>

                            <td>
                                Random sentence.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Connecting Factory With Model
            </h4>


            <p>
                Laravel automatically connects factories with models using
                the <strong>HasFactory</strong> trait.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Model
{

    use HasFactory;

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating Records Using Factory
            </h4>


            <p>
                You can create fake records using Laravel Tinker.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan tinker


User::factory()->create();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating Multiple Records
            </h4>


            <p>
                Use the count() method to generate multiple records.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User::factory()

->count(100)

->create();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Using Factory With Seeder
            </h4>


            <p>
                Factories are commonly called inside seeders.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function run()
{

    User::factory()

    ->count(50)

    ->create();

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Factory With Specific Data
            </h4>


            <p>
                You can override default factory values.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User::factory()->create([

    'name' => 'Admin',

    'email' => 'admin@gmail.com'

]);


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Factory States
            </h4>


            <p>
                States allow creating records with different conditions.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function admin()
{

    return $this->state([

        'role' => 'admin'

    ]);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Factory vs Seeder
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Factory</th>

                            <th>Seeder</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Generates fake data.
                            </td>


                            <td>
                                Inserts predefined data.
                            </td>


                        </tr>



                        <tr>

                            <td>
                                Used for testing.
                            </td>


                            <td>
                                Used for initial setup.
                            </td>


                        </tr>



                        <tr>

                            <td>
                                Creates many records quickly.
                            </td>


                            <td>
                                Creates specific records.
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Factory Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Users
                            </h5>


                            <p>
                                Generate thousands of test users.
                            </p>


                        </div>


                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Products
                            </h5>


                            <p>
                                Create fake product records.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Orders
                            </h5>


                            <p>
                                Generate testing orders.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Testing
                            </h5>


                            <p>
                                Test application performance.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Factory Workflow
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>1</h5>


                            <p>
                                Create Factory
                            </p>


                        </div>


                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>2</h5>


                            <p>
                                Define Fake Data
                            </p>


                        </div>


                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>3</h5>


                            <p>
                                Run Factory
                            </p>


                        </div>


                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body>


                            <h5>4</h5>


                            <p>
                                Records Created
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Factories help developers generate fake database
                records quickly. They are mainly used with Seeders for
                testing, development, and creating demo data in Laravel
                applications.

            </div>



        </div>

    </div>

</div>


`
},
{
title:"Eloquent ORM",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Eloquent ORM
            </h2>


            <p class="lead">
                Laravel Eloquent ORM (Object Relational Mapping) is Laravel's
                built-in database interaction system. It allows developers to
                work with database tables using PHP Models instead of writing
                complex SQL queries.
            </p>


            <hr>




            <h4 class="text-success mt-4">
                What is Eloquent ORM?
            </h4>


            <p>
                Eloquent converts database tables into PHP objects called
                <strong>Models</strong>. Each model represents a database table,
                and developers can perform database operations using simple
                PHP syntax.
            </p>


            <ul class="list-group">

                <li class="list-group-item">
                    ✅ Communicate with database using PHP objects.
                </li>

                <li class="list-group-item">
                    ✅ Reduces the need for writing SQL queries.
                </li>

                <li class="list-group-item">
                    ✅ Provides relationships between tables.
                </li>

                <li class="list-group-item">
                    ✅ Supports CRUD operations easily.
                </li>

            </ul>






            <h4 class="text-success mt-5">
                Eloquent Model
            </h4>


            <p>
                A Model represents a database table. By convention,
                Laravel automatically connects models with tables.
            </p>


            <p>
                Example:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:model Product


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Model Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $fillable = [

        'name',

        'price',

        'quantity'

    ];

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Eloquent CRUD Operations
            </h4>


            <p>
                Eloquent provides simple methods for Create, Read, Update,
                and Delete operations.
            </p>





            <h5 class="mt-4">
                1. Create Data
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Product::create([

    'name' => 'Laptop',

    'price' => 5000,

    'quantity' => 10

]);


</code></pre>

            </div>






            <h5 class="mt-4">
                2. Read Data
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$products = Product::all();


</code></pre>

            </div>






            <h5 class="mt-4">
                3. Find Specific Record
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$product = Product::find(1);


</code></pre>

            </div>







            <h5 class="mt-4">
                4. Update Data
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$product = Product::find(1);


$product->update([

    'price' => 6000

]);


</code></pre>

            </div>






            <h5 class="mt-4">
                5. Delete Data
            </h5>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$product = Product::find(1);


$product->delete();


</code></pre>

            </div>








            <h4 class="text-success mt-5">
                Eloquent Query Methods
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                all()
                            </td>

                            <td>
                                Get all records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                find()
                            </td>

                            <td>
                                Find record by primary key.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                where()
                            </td>

                            <td>
                                Apply conditions.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                first()
                            </td>

                            <td>
                                Get first matching record.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                count()
                            </td>

                            <td>
                                Count records.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Where Query Example
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$products = Product::where(

    'price',

    '>',

    1000

)->get();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Eloquent Relationships
            </h4>


            <p>
                Eloquent allows connecting related database tables easily.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">

                        <tr>

                            <th>Relationship</th>

                            <th>Example</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                One To One
                            </td>

                            <td>
                                User has one profile.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                One To Many
                            </td>

                            <td>
                                User has many posts.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Many To Many
                            </td>

                            <td>
                                Students and courses.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Has Many Through
                            </td>

                            <td>
                                Access distant relationships.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>








            <h4 class="text-success mt-5">
                Relationship Example
            </h4>


            <p>
                User model with posts relationship:
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function posts()
{

    return $this->hasMany(Post::class);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Mass Assignment
            </h4>


            <p>
                Laravel protects models from unwanted data insertion using
                fillable and guarded properties.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

protected $fillable = [

    'name',

    'email'

];


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Eloquent vs Query Builder
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Eloquent ORM</th>

                            <th>Query Builder</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Works with Models.
                            </td>

                            <td>
                                Works with database tables.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Object-oriented approach.
                            </td>

                            <td>
                                SQL-like syntax.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Easier relationships.
                            </td>

                            <td>
                                Better for complex queries.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Eloquent Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Users
                            </h5>

                            <p>
                                Manage user accounts.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Products
                            </h5>

                            <p>
                                Manage inventory data.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Orders
                            </h5>

                            <p>
                                Manage customer orders.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Reports
                            </h5>

                            <p>
                                Retrieve database data.
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Eloquent Workflow
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Create Model
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Connect Database Table
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Perform Queries
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Return Data
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Eloquent ORM provides an easy way to communicate with
                databases using PHP models. It simplifies CRUD operations,
                relationships, and database queries while keeping application
                code clean and organized.

            </div>



        </div>

    </div>

</div>


`
},

{
title:"Models",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Models
            </h2>


            <p class="lead">
                Laravel Models are PHP classes that represent database tables.
                Models allow developers to interact with database records using
                Laravel Eloquent ORM instead of writing SQL queries manually.
            </p>


            <hr>




            <h4 class="text-success mt-4">
                What is a Laravel Model?
            </h4>


            <p>
                A Model is a PHP class that connects an application with a
                specific database table. Each model usually represents one
                table and provides methods to create, read, update, and delete
                records.
            </p>


            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Represents a database table.
                </li>


                <li class="list-group-item">
                    ✅ Communicates with database using Eloquent ORM.
                </li>


                <li class="list-group-item">
                    ✅ Handles relationships between tables.
                </li>


                <li class="list-group-item">
                    ✅ Contains database-related logic.
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Creating a Model
            </h4>


            <p>
                Laravel provides an Artisan command to create models.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:model Product


</code></pre>

            </div>



            <p class="mt-3">
                This command creates:
            </p>


            <div class="alert alert-secondary">

                app/Models/Product.php

            </div>







            <h4 class="text-success mt-5">
                Creating Model With Migration
            </h4>


            <p>
                You can create a model and migration together.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:model Product -m


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Basic Model Structure
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $fillable = [

        'name',

        'price',

        'quantity'

    ];

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Model Naming Convention
            </h4>


            <p>
                Laravel follows naming conventions to automatically connect
                models with database tables.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Model</th>

                            <th>Database Table</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                User
                            </td>

                            <td>
                                users
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Product
                            </td>

                            <td>
                                products
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Order
                            </td>

                            <td>
                                orders
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Custom Table Name
            </h4>


            <p>
                If your table name does not follow Laravel naming rules,
                define it manually.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class Product extends Model
{

    protected $table = 'my_products';

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Primary Key Configuration
            </h4>


            <p>
                Laravel assumes the primary key column is "id".
                You can change it if your table uses another key.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

protected $primaryKey = 'product_id';


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Disable Timestamps
            </h4>


            <p>
                Laravel automatically expects created_at and updated_at
                columns. Disable them when they are not needed.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public $timestamps = false;


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Mass Assignment
            </h4>


            <p>
                The fillable property defines which fields can be inserted
                using create() or update() methods.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

protected $fillable = [

    'name',

    'email',

    'phone'

];


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Creating Data Using Model
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Product::create([

    'name' => 'Laptop',

    'price' => 5000

]);


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Retrieving Data Using Model
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$products = Product::all();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Updating Model Data
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$product = Product::find(1);


$product->name = "Mobile";


$product->save();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Deleting Model Data
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$product = Product::find(1);


$product->delete();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Model Relationships
            </h4>


            <p>
                Models define relationships between database tables.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Relationship</th>

                            <th>Example</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                hasOne()
                            </td>

                            <td>
                                User has one profile.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                hasMany()
                            </td>

                            <td>
                                User has many posts.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                belongsTo()
                            </td>

                            <td>
                                Post belongs to user.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                belongsToMany()
                            </td>

                            <td>
                                Students and courses.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Relationship Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function orders()
{

    return $this->hasMany(Order::class);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Model Accessors
            </h4>


            <p>
                Accessors modify data when retrieving it from the database.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function getNameAttribute($value)
{

    return ucfirst($value);

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Model Workflow
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Create Model
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Connect Table
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Perform Database Operations
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Return Application Data
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Models are the bridge between application code and
                database tables. They allow developers to manage database
                records using Eloquent ORM, relationships, and simple PHP
                methods instead of writing complex SQL queries.

            </div>



        </div>

    </div>

</div>


`
},

{
title:"Eloquent Relationships",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Eloquent Relationships
            </h2>


            <p class="lead">
                Laravel Eloquent Relationships allow database tables to be
                connected with each other using simple PHP methods inside
                Models. Relationships make it easier to retrieve related data
                without writing complex SQL JOIN queries.
            </p>


            <hr>




            <h4 class="text-success mt-4">
                What are Eloquent Relationships?
            </h4>


            <p>
                In a relational database, data is divided into multiple tables.
                Relationships define how these tables are connected.
                Laravel Eloquent provides built-in methods to manage these
                connections.
            </p>


            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Connect multiple database tables.
                </li>


                <li class="list-group-item">
                    ✅ Reduce complex SQL queries.
                </li>


                <li class="list-group-item">
                    ✅ Retrieve related records easily.
                </li>


                <li class="list-group-item">
                    ✅ Keep application code clean.
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Types of Eloquent Relationships
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Relationship</th>

                            <th>Description</th>

                            <th>Example</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                One To One
                            </td>

                            <td>
                                One record belongs to one related record.
                            </td>

                            <td>
                                User has one Profile.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                One To Many
                            </td>

                            <td>
                                One record has multiple related records.
                            </td>

                            <td>
                                User has many Posts.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Many To Many
                            </td>

                            <td>
                                Multiple records are connected with multiple records.
                            </td>

                            <td>
                                Students and Courses.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Has One Through
                            </td>

                            <td>
                                Access distant one-to-one relationships.
                            </td>

                            <td>
                                Country has one Owner.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                1. One To One Relationship
            </h2>


            <p>
                One-to-One means one record in a table is connected with
                exactly one record in another table.
            </p>


            <p>
                Example:
            </p>


            <div class="alert alert-secondary">

                User → Profile

                <br>

                One user has one profile.

            </div>






            <h4 class="text-success">
                Database Structure
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

users table

id
name


profiles table

id
user_id
phone
address


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                User Model
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function profile()
{

    return $this->hasOne(Profile::class);

}


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Profile Model
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function user()
{

    return $this->belongsTo(User::class);

}


</code></pre>

            </div>








            <h2 class="text-primary mt-5">
                2. One To Many Relationship
            </h2>


            <p>
                One-to-Many means one record can have multiple related records.
            </p>


            <div class="alert alert-secondary">

                User → Posts

                <br>

                One user can create many posts.

            </div>






            <h4 class="text-success">
                Database Structure
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

users table

id
name


posts table

id
user_id
title
description


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                User Model
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function posts()
{

    return $this->hasMany(Post::class);

}


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Post Model
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function user()
{

    return $this->belongsTo(User::class);

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Many To Many Relationship
            </h2>


            <p>
                Many-to-Many means multiple records in one table can relate
                to multiple records in another table.
            </p>


            <div class="alert alert-secondary">

                Students ↔ Courses

                <br>

                One student can join many courses.
                One course can have many students.

            </div>







            <h4 class="text-success">
                Pivot Table
            </h4>


            <p>
                Many-to-many relationships require an intermediate table
                called a pivot table.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

students

id
name


courses

id
title


course_student

student_id
course_id


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Student Model
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function courses()
{

    return $this->belongsToMany(
        Course::class
    );

}


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Course Model
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function students()
{

    return $this->belongsToMany(
        Student::class
    );

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Retrieving Related Data
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$user = User::find(1);


foreach($user->posts as $post)
{

    echo $post->title;

}


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Eager Loading
            </h4>


            <p>
                Eager loading improves performance by loading relationships
                together and avoiding multiple database queries.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$users = User::with('posts')
->get();


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Lazy Loading
            </h4>


            <p>
                Lazy loading loads relationship data only when it is accessed.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$user = User::find(1);


$user->posts;


</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Real World Examples
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                User has many orders.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Blog System
                            </h5>


                            <p>
                                User has many posts.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                School System
                            </h5>


                            <p>
                                Students join courses.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Medical Store
                            </h5>


                            <p>
                                Customers have invoices.
                            </p>


                        </div>


                    </div>


                </div>


            </div>








            <h4 class="text-success mt-5">
                Relationship Workflow
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Create Database Tables
                            </p>

                        </div>

                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Create Models
                            </p>

                        </div>

                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Define Relationships
                            </p>

                        </div>

                    </div>


                </div>




                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Retrieve Related Data
                            </p>

                        </div>

                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Eloquent Relationships make it easy to connect
                database tables and retrieve related information. The main
                relationships are One-to-One, One-to-Many, and Many-to-Many,
                which help developers build powerful Laravel applications.

            </div>



        </div>

    </div>

</div>


`
},

{
title:"Query Builder",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Query Builder
            </h2>


            <p class="lead">
                Laravel Query Builder provides a simple and fluent way to
                interact with databases. It allows developers to perform
                database operations using PHP methods instead of writing raw
                SQL queries.
            </p>


            <hr>


            <h4 class="text-success mt-4">
                What is Query Builder?
            </h4>


            <p>
                Query Builder is a Laravel database feature that allows you
                to create and execute SQL queries using Laravel's DB facade.
                It works directly with database tables and provides methods
                for retrieving, inserting, updating, and deleting data.
            </p>


            <ul class="list-group">

                <li class="list-group-item">
                    ✅ Simple database query syntax.
                </li>

                <li class="list-group-item">
                    ✅ Supports multiple database systems.
                </li>

                <li class="list-group-item">
                    ✅ Protects against SQL injection.
                </li>

                <li class="list-group-item">
                    ✅ Useful for complex database queries.
                </li>

            </ul>





            <h4 class="text-success mt-5">
                Query Builder vs Raw SQL
            </h4>


            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>
                            <th>Raw SQL</th>
                            <th>Laravel Query Builder</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                Write SQL manually.
                            </td>

                            <td>
                                Use Laravel PHP methods.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                More chance of SQL injection.
                            </td>

                            <td>
                                Provides query protection.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Database dependent.
                            </td>

                            <td>
                                Supports multiple databases.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>







            <h2 class="text-primary mt-5">
                Using Query Builder
            </h2>


            <p>
                Laravel Query Builder uses the DB facade.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use Illuminate\Support\Facades\DB;


$users = DB::table('users')->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Selecting Data
            </h2>


            <p>
                The get() method retrieves all records from a table.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$products = DB::table('products')
->get();

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Select Specific Columns
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$users = DB::table('users')

->select(

    'name',

    'email'

)

->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Where Conditions
            </h2>


            <p>
                The where() method adds conditions to database queries.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$users = DB::table('users')

->where(
    'status',
    'active'
)

->get();

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Multiple Conditions
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$products = DB::table('products')

->where(
    'price',
    '>',
    1000
)

->where(
    'status',
    'available'
)

->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Insert Data
            </h2>


            <p>
                insert() method adds new records into database tables.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
DB::table('users')

->insert([

    'name'=>'Ahmed',

    'email'=>'ahmed@gmail.com'

]);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Update Data
            </h2>


            <p>
                update() modifies existing database records.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
DB::table('products')

->where(
    'id',
    1
)

->update([

    'price'=>5000

]);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Delete Data
            </h2>


            <p>
                delete() removes records from database.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
DB::table('products')

->where(
    'id',
    1
)

->delete();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Query Builder Methods
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">

                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                get()
                            </td>

                            <td>
                                Get multiple records.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                first()
                            </td>

                            <td>
                                Get first record.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                find()
                            </td>

                            <td>
                                Find record by ID.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                where()
                            </td>

                            <td>
                                Add conditions.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                orderBy()
                            </td>

                            <td>
                                Sort records.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                limit()
                            </td>

                            <td>
                                Limit results.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                count()
                            </td>

                            <td>
                                Count records.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Sorting Data
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$products = DB::table('products')

->orderBy(
    'price',
    'desc'
)

->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Limiting Records
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$products = DB::table('products')

->limit(5)

->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Joins Using Query Builder
            </h2>


            <p>
                Joins combine data from multiple database tables.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$orders = DB::table('orders')

->join(

    'users',

    'orders.user_id',

    '=',

    'users.id'

)

->select(

    'orders.*',

    'users.name'

)

->get();

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Aggregate Functions
            </h2>


            <p>
                Query Builder provides functions to calculate database values.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$count = DB::table('users')
->count();


$total = DB::table('orders')
->sum('amount');

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Query Builder with Pagination
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$products = DB::table('products')

->paginate(10);

</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Real World Usage
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Reports
                            </h5>

                            <p>
                                Generate custom reports.
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Dashboard
                            </h5>

                            <p>
                                Display statistics.
                            </p>

                        </div>

                    </div>

                </div>





                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Filtering
                            </h5>

                            <p>
                                Search database records.
                            </p>

                        </div>

                    </div>

                </div>





                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Analytics
                            </h5>

                            <p>
                                Calculate statistics.
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Query Builder Workflow
            </h4>


            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>1</h5>

                            <p>
                                Connect Database
                            </p>

                        </div>

                    </div>

                </div>




                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>2</h5>

                            <p>
                                Select Table
                            </p>

                        </div>

                    </div>

                </div>





                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>3</h5>

                            <p>
                                Build Query
                            </p>

                        </div>

                    </div>

                </div>





                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>4</h5>

                            <p>
                                Execute Query
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Query Builder provides an easy and secure way to
                communicate with databases. It allows developers to perform
                CRUD operations, filtering, sorting, joins, and complex
                database queries using clean PHP syntax.

            </div>



        </div>

    </div>

</div>


`
},

{
title:"CRUD Operations",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel CRUD Operations
            </h2>


            <p class="lead">
                CRUD stands for Create, Read, Update, and Delete. These are the
                four basic operations used to manage records in a database.
                Laravel provides powerful features like Eloquent ORM, Models,
                Controllers, Routes, Validation, and Blade Views to create
                complete CRUD applications.
            </p>


            <hr>


            <h4 class="text-success mt-4">
                What is CRUD?
            </h4>


            <p>
                CRUD is a common database management process used in almost
                every web application. It allows users to create new data,
                view existing data, modify data, and remove unwanted records.
            </p>



            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Operation</th>

                            <th>Meaning</th>

                            <th>Example</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Create</td>

                            <td>
                                Add new records into database.
                            </td>

                            <td>
                                Add new product.
                            </td>

                        </tr>


                        <tr>

                            <td>Read</td>

                            <td>
                                Retrieve records from database.
                            </td>

                            <td>
                                Display product list.
                            </td>

                        </tr>


                        <tr>

                            <td>Update</td>

                            <td>
                                Modify existing records.
                            </td>

                            <td>
                                Edit product details.
                            </td>

                        </tr>


                        <tr>

                            <td>Delete</td>

                            <td>
                                Remove records from database.
                            </td>

                            <td>
                                Delete product.
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>







            <h4 class="text-success mt-5">
                Laravel CRUD Architecture
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
User Request

      ↓

Route

      ↓

Controller

      ↓

Model

      ↓

Database

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 1: Create Model and Migration
            </h2>


            <p>
                First create a model and migration file for your database table.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan make:model Product -m

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Migration Example
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
Schema::create('products', function(Blueprint $table)
{

    $table->id();

    $table->string('name');

    $table->decimal('price',10,2);

    $table->integer('quantity');

    $table->timestamps();

});

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 2: Create Controller
            </h2>


            <p>
                Controllers handle the application logic and communicate
                between models and views.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan make:controller ProductController --resource

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 3: Create CRUD Route
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use App\Http\Controllers\ProductController;


Route::resource(

    'products',

    ProductController::class

);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                1. Create Operation
            </h2>


            <p>
                Create operation inserts new data into the database.
            </p>



            <h4 class="text-success">
                Store Method
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function store(Request $request)
{

    $product = Product::create([

        'name'=>$request->name,

        'price'=>$request->price,

        'quantity'=>$request->quantity

    ]);


    return redirect()->route('products.index');

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                2. Read Operation
            </h2>


            <p>
                Read operation retrieves data from the database.
            </p>



            <h4 class="text-success">
                Get All Records
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function index()
{

    $products = Product::all();


    return view(

        'products.index',

        compact('products')

    );

}

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Display Data in Blade
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
&#64;foreach($products as $product)

&#123;&#123; $product->name &#125;&#125;

&#123;&#123; $product->price &#125;&#125;

&#64;endforeach

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Update Operation
            </h2>


            <p>
                Update operation modifies existing records.
            </p>



            <h4 class="text-success">
                Update Method
            </h4>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function update(Request $request,$id)
{

    $product = Product::find($id);


    $product->update([

        'name'=>$request->name,

        'price'=>$request->price

    ]);

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                4. Delete Operation
            </h2>


            <p>
                Delete operation removes records permanently from database.
            </p>



            <h4 class="text-success">
                Delete Method
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function destroy($id)
{

    $product = Product::find($id);


    $product->delete();

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                CRUD Validation
            </h2>


            <p>
                Laravel validation checks user input before saving data.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$request->validate([

    'name'=>'required',

    'price'=>'required|numeric',

    'quantity'=>'required|integer'

]);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Eloquent CRUD Methods
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">

                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>

                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                create()
                            </td>

                            <td>
                                Insert new record.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                all()
                            </td>

                            <td>
                                Retrieve all records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                find()
                            </td>

                            <td>
                                Find record by ID.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                update()
                            </td>

                            <td>
                                Update existing record.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                delete()
                            </td>

                            <td>
                                Delete record.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Soft Delete
            </h2>


            <p>
                Soft delete does not remove records permanently. It hides the
                record by adding a deleted_at timestamp.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use SoftDeletes;


protected $dates = [

    'deleted_at'

];

</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Real World CRUD Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>Ecommerce</h5>

                            <p>
                                Manage products and orders.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>Blog System</h5>

                            <p>
                                Manage posts and comments.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>Inventory</h5>

                            <p>
                                Manage stock records.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>User Management</h5>

                            <p>
                                Manage user accounts.
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel CRUD operations provide a complete system for managing
                database records. By using Models, Controllers, Routes,
                Validation, and Blade Views, developers can create powerful
                Laravel applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"File Uploading",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel File Uploading
            </h2>


            <p class="lead">
                Laravel provides a simple and secure way to upload files and
                images. File uploading is commonly used in profile systems,
                ecommerce websites, document management systems, and many
                other applications.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is File Uploading?
            </h4>


            <p>
                File uploading is the process of sending files from a user's
                device to a server. Laravel provides different methods to
                validate, store, retrieve, and manage uploaded files.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Upload images, PDFs, and documents.
                </li>


                <li class="list-group-item">
                    ✅ Validate file type and size.
                </li>


                <li class="list-group-item">
                    ✅ Store files using Laravel Storage.
                </li>


                <li class="list-group-item">
                    ✅ Display uploaded files.
                </li>


                <li class="list-group-item">
                    ✅ Delete unwanted files.
                </li>


            </ul>







            <h4 class="text-success mt-5">
                File Upload Process
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
User Selects File

        ↓

HTML Form

        ↓

Route

        ↓

Controller

        ↓

Validation

        ↓

Store File

        ↓

Save File Path in Database

</code></pre>

            </div>








            <h2 class="text-primary mt-5">
                Step 1: Create Upload Form
            </h2>


            <p>
                To upload files, the form must use POST method and
                multipart/form-data encoding.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
&lt;form method="POST"
action="/upload"
enctype="multipart/form-data"&gt;


&#64;csrf


&lt;input type="file"
name="image"&gt;


&lt;button type="submit"&gt;

Upload

&lt;/button&gt;


&lt;/form&gt;

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 2: Create Upload Route
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use App\Http\Controllers\FileController;


Route::post(

    '/upload',

    [FileController::class,'upload']

);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 3: Create Controller
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan make:controller FileController

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Step 4: Handle File Upload
            </h2>


            <p>
                Laravel uses the Request object to access uploaded files.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function upload(Request $request)
{

    $request->validate([

        'image'=>'required|image|max:2048'

    ]);


    $fileName = time().'.'.

    $request->image->extension();



    $request->image->move(

        public_path('uploads'),

        $fileName

    );


}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                File Validation Rules
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">

                        <tr>

                            <th>Rule</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                required
                            </td>

                            <td>
                                File is required.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                image
                            </td>

                            <td>
                                Accept only image files.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                mimes
                            </td>

                            <td>
                                Allow specific extensions.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                max
                            </td>

                            <td>
                                Set maximum file size.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>








            <h4 class="text-success mt-5">
                Validation Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$request->validate([

    'image'=>

    'required|mimes:jpg,png,jpeg|max:2048'

]);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Storage System
            </h2>


            <p>
                Laravel Storage provides an easy way to manage uploaded files
                in different locations.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use Illuminate\Support\Facades\Storage;


Storage::put(

    'images/photo.jpg',

    $file

);

</code></pre>

            </div>







            <h4 class="text-success mt-5">
                Create Storage Link
            </h4>


            <p>
                Storage link allows public access to files stored inside the
                storage folder.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan storage:link

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Display Uploaded Image
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
&lt;img src="&#123;&#123; asset('uploads/'.$image) &#125;&#125;"&gt;

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Save File Name in Database
            </h2>


            <p>
                Normally applications store the file name or path in the
                database instead of storing the actual file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
users table


id

name

profile_image

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Multiple File Upload
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
&lt;input type="file"
name="images[]"
multiple&gt;

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Multiple Upload Controller
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
foreach($request->images as $image)
{

    $image->store('images');

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Delete Uploaded File
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
Storage::delete(

    'images/photo.jpg'

);

</code></pre>

            </div>







            <h4 class="text-success mt-5">
                File Upload Security
            </h4>



            <div class="table-responsive">

                <table class="table table-bordered table-striped">


                    <thead class="table-success">

                        <tr>

                            <th>Security Practice</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Validate File Type
                            </td>

                            <td>
                                Prevent malicious files.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Limit File Size
                            </td>

                            <td>
                                Protect server resources.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Rename Files
                            </td>

                            <td>
                                Avoid duplicate names.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Store Securely
                            </td>

                            <td>
                                Protect sensitive files.
                            </td>

                        </tr>


                    </tbody>


                </table>

            </div>







            <h4 class="text-success mt-5">
                Real World Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Profile System
                            </h5>


                            <p>
                                Upload user profile images.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Upload product pictures.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Documents
                            </h5>


                            <p>
                                Upload PDF files.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Medical System
                            </h5>


                            <p>
                                Upload reports.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel file uploading provides developers with a secure way
                to manage images and documents. Using validation, storage,
                and proper security practices, applications can handle files
                efficiently.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Authentication System",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Authentication System
            </h2>


            <p class="lead">
                Laravel Authentication System provides a complete mechanism
                for user registration, login, logout, password management,
                and protecting application pages from unauthorized users.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Authentication?
            </h4>


            <p>
                Authentication is the process of verifying the identity of a
                user. In Laravel, authentication allows users to create an
                account, login into the system, and access protected areas.
            </p>


            <ul class="list-group">


                <li class="list-group-item">
                    ✅ User Registration
                </li>


                <li class="list-group-item">
                    ✅ User Login
                </li>


                <li class="list-group-item">
                    ✅ User Logout
                </li>


                <li class="list-group-item">
                    ✅ Password Hashing
                </li>


                <li class="list-group-item">
                    ✅ Protect Routes Using Middleware
                </li>


            </ul>








            <h4 class="text-success mt-5">
                Authentication Workflow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
User Registration

        ↓

Save User Data

        ↓

Hash Password

        ↓

Login User

        ↓

Create Session

        ↓

Access Protected Pages

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Authentication Components
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Component</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                User Model
                            </td>

                            <td>
                                Manage user database records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Authentication Controller
                            </td>

                            <td>
                                Handle login and registration logic.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Middleware
                            </td>

                            <td>
                                Protect routes.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Session
                            </td>

                            <td>
                                Store logged-in user information.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>








            <h2 class="text-primary mt-5">
                Laravel Authentication Packages
            </h2>


            <p>
                Laravel provides different authentication solutions.
            </p>



            <div class="row g-3">


                <div class="col-md-4">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Laravel Breeze
                            </h5>


                            <p>
                                Simple authentication starter kit.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-4">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Laravel Jetstream
                            </h5>


                            <p>
                                Advanced authentication features.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-4">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Laravel Fortify
                            </h5>


                            <p>
                                Backend authentication system.
                            </p>


                        </div>


                    </div>


                </div>


            </div>








            <h2 class="text-primary mt-5">
                Create Authentication System Manually
            </h2>


            <h4 class="text-success mt-4">
                Step 1: Create User Migration
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan make:migration create_users_table

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Users Table Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
users table


id

name

email

password

created_at

updated_at

</code></pre>

            </div>








            <h2 class="text-primary mt-5">
                User Registration
            </h2>


            <p>
                Registration creates a new user account and stores user data
                in the database.
            </p>



            <h4 class="text-success">
                Registration Controller
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
public function register(Request $request)
{

    $request->validate([

        'name'=>'required',

        'email'=>'required|email',

        'password'=>'required'

    ]);



    User::create([

        'name'=>$request->name,

        'email'=>$request->email,

        'password'=>Hash::make(
            $request->password
        )

    ]);

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Password Hashing
            </h2>


            <p>
                Laravel encrypts passwords before saving them into database
                using Hash facade.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use Illuminate\Support\Facades\Hash;


$password = Hash::make(

    'mypassword'

);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                User Login
            </h2>


            <p>
                Login verifies user credentials and creates authentication
                session.
            </p>



            <h4 class="text-success">
                Login Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
if(Auth::attempt([

'email'=>$request->email,

'password'=>$request->password

]))

{

    return redirect('/dashboard');

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Logout System
            </h2>


            <p>
                Logout removes the authenticated user's session.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
Auth::logout();


return redirect('/login');

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Protect Routes Using Middleware
            </h2>


            <p>
                Middleware prevents unauthorized users from accessing pages.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
Route::get(

'/dashboard',

function(){

    return view('dashboard');

}

)->middleware('auth');

</code></pre>

            </div>








            <h2 class="text-primary mt-5">
                Get Authenticated User
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
$user = Auth::user();


echo $user->name;

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Authentication Methods
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Auth::attempt()
                            </td>

                            <td>
                                Login user.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Auth::user()
                            </td>

                            <td>
                                Get current user.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Auth::check()
                            </td>

                            <td>
                                Check login status.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Auth::logout()
                            </td>

                            <td>
                                Logout user.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>








            <h4 class="text-success mt-5">
                Real World Authentication Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Customer accounts and orders.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Admin Panel
                            </h5>


                            <p>
                                Secure dashboard access.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Learning System
                            </h5>


                            <p>
                                Student accounts.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Social App
                            </h5>


                            <p>
                                User profiles.
                            </p>


                        </div>


                    </div>


                </div>


            </div>








            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Authentication System provides secure user management
                including registration, login, logout, password hashing, and
                route protection. Authentication is an essential part of
                modern Laravel applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Authorization & Gates",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Authorization & Gates
            </h2>


            <p class="lead">
                Laravel Authorization provides a way to control what actions
                authenticated users are allowed to perform. Gates and Policies
                help developers manage permissions and access control in
                Laravel applications.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Authorization?
            </h4>


            <p>
                Authorization determines whether an authenticated user has
                permission to perform a specific action. Authentication checks
                who the user is, while authorization checks what the user can
                do.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Concept</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Authentication
                            </td>

                            <td>
                                Checks user identity.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Authorization
                            </td>

                            <td>
                                Checks user permissions.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Authorization Workflow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User Login

      ↓

Authentication

      ↓

Check Permission

      ↓

Allow or Deny Action

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Authorization Methods
            </h2>



            <div class="row g-3">


                <div class="col-md-6">


                    <div class="card shadow-sm h-100">


                        <div class="card-body">


                            <h5 class="text-success">
                                Gates
                            </h5>


                            <p>
                                Simple authorization logic for specific
                                actions.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6">


                    <div class="card shadow-sm h-100">


                        <div class="card-body">


                            <h5 class="text-success">
                                Policies
                            </h5>


                            <p>
                                Organize authorization rules for models.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Laravel Gates
            </h2>


            <p>
                Gates are closures that define authorization rules. They are
                commonly used for simple permission checks.
            </p>






            <h4 class="text-success">
                Create Gate
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
use Illuminate\Support\Facades\Gate;


Gate::define(

'edit-post',

function($user,$post)

{

    return $user->id == $post->user_id;

}

);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Checking Gates
            </h2>


            <p>
                Gates can be checked inside controllers or routes.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

if(Gate::allows('edit-post',$post))

{

    // User can edit post

}

else

{

    // Access denied

}

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Using Gate Deny
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Gate::authorize(

'edit-post',

$post

);

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Policies
            </h2>


            <p>
                Policies organize authorization logic for a particular model.
                They are useful in large applications.
            </p>







            <h4 class="text-success">
                Create Policy
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:policy PostPolicy

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Policy Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function update(

User $user,

Post $post

)

{

    return $user->id === $post->user_id;

}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Register Policy
            </h2>


            <p>
                Policies connect models with their authorization rules.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

protected $policies = [


    Post::class => PostPolicy::class


];

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Using Policy in Controller
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function update(Post $post)

{

    $this->authorize(

        'update',

        $post

    );


}

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Blade Authorization
            </h2>


            <p>
                Laravel provides Blade directives for checking permissions.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

&#64;can('update',$post)


&lt;button&gt;

Edit

&lt;/button&gt;


&#64;endcan

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Common Authorization Methods
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Gate::allows()
                            </td>

                            <td>
                                Check permission.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Gate::denies()
                            </td>

                            <td>
                                Check denied access.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                authorize()
                            </td>

                            <td>
                                Stop unauthorized users.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                &#64;can
                            </td>

                            <td>
                                Blade permission check.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Admin Panel
                            </h5>


                            <p>
                                Only admins can manage users.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Blog System
                            </h5>


                            <p>
                                Authors edit their own posts.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Control product management access.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Medical System
                            </h5>


                            <p>
                                Restrict patient data access.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Authorization allows developers to control user
                permissions and protect application resources. Gates are
                suitable for simple checks, while Policies provide a clean
                structure for large applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Breeze",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Breeze
            </h2>


            <p class="lead">
                Laravel Breeze is a lightweight authentication starter kit
                provided by Laravel. It provides basic authentication features
                like user registration, login, logout, password reset, and
                email verification with simple and clean code.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Laravel Breeze?
            </h4>


            <p>
                Laravel Breeze is an official Laravel package that provides a
                simple starting point for building authentication systems.
                It includes ready-made routes, controllers, views, and
                authentication logic.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ User Registration
                </li>


                <li class="list-group-item">
                    ✅ User Login
                </li>


                <li class="list-group-item">
                    ✅ User Logout
                </li>


                <li class="list-group-item">
                    ✅ Password Reset
                </li>


                <li class="list-group-item">
                    ✅ Email Verification
                </li>


                <li class="list-group-item">
                    ✅ Profile Management
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Why Use Laravel Breeze?
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Feature</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Lightweight
                            </td>

                            <td>
                                Contains only basic authentication features.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Simple Code
                            </td>

                            <td>
                                Easy to understand and customize.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Laravel Official
                            </td>

                            <td>
                                Maintained by Laravel team.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Starter Kit
                            </td>

                            <td>
                                Quickly create authentication system.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Installing Laravel Breeze
            </h2>


            <p>
                First create a Laravel project and install Breeze package.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
composer require laravel/breeze --dev

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Install Breeze Authentication
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan breeze:install

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Run Database Migration
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan migrate

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Install Frontend Dependencies
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
npm install

npm run build

</code></pre>

            </div>








            <h2 class="text-primary mt-5">
                Breeze Authentication Files
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>File</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                routes/auth.php
                            </td>

                            <td>
                                Authentication routes.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Auth Controllers
                            </td>

                            <td>
                                Handle login and registration.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                resources/views/auth
                            </td>

                            <td>
                                Authentication pages.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                User Model
                            </td>

                            <td>
                                Manage user records.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Breeze Authentication Routes
            </h2>


            <p>
                Breeze automatically creates authentication routes.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
GET

/register


POST

/register



GET

/login


POST

/login



POST

/logout

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Registration Process
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
User Opens Register Page

          ↓

Enter Name, Email, Password

          ↓

Validation

          ↓

Create User Account

          ↓

Redirect Dashboard

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Login Process
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
User Enter Email & Password

          ↓

Check Database

          ↓

Create Authentication Session

          ↓

Access Dashboard

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Breeze Views
            </h2>


            <p>
                Breeze provides ready-made Blade authentication pages.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
resources/views/auth/


login.blade.php


register.blade.php


forgot-password.blade.php


verify-email.blade.php

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Protect Routes with Authentication
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Route::get(

'/dashboard',

function(){

return view('dashboard');

}

)->middleware('auth');

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Breeze vs Manual Authentication
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Breeze</th>

                            <th>Manual Authentication</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Ready-made system
                            </td>

                            <td>
                                Build everything manually.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Faster development
                            </td>

                            <td>
                                More coding required.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Easy customization
                            </td>

                            <td>
                                Complete control.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Usage
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Customer login system.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Learning Platform
                            </h5>


                            <p>
                                Student accounts.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Admin Dashboard
                            </h5>


                            <p>
                                Secure admin access.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                SaaS Application
                            </h5>


                            <p>
                                User account management.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Breeze is a simple and lightweight authentication
                starter kit. It helps developers quickly add registration,
                login, logout, password reset, and user authentication features
                while keeping the code clean and easy to customize.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Jetstream",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Jetstream
            </h2>


            <p class="lead">
                Laravel Jetstream is an advanced authentication starter kit
                that provides modern authentication features for Laravel
                applications. It includes login, registration, email
                verification, two-factor authentication, session management,
                profile management, and team management.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Laravel Jetstream?
            </h4>


            <p>
                Laravel Jetstream is an official Laravel package designed for
                building secure and feature-rich authentication systems.
                It provides a complete foundation for modern web applications.
            </p>


            <p>
                Jetstream uses Laravel Fortify internally for backend
                authentication and provides frontend interfaces using
                Livewire or Inertia.
            </p>





            <h4 class="text-success mt-5">
                Features of Laravel Jetstream
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Feature</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Registration
                            </td>

                            <td>
                                Create new user accounts.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Login System
                            </td>

                            <td>
                                Authenticate registered users.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Email Verification
                            </td>

                            <td>
                                Verify user email addresses.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Two Factor Authentication
                            </td>

                            <td>
                                Add extra security layer.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Profile Management
                            </td>

                            <td>
                                Update user information.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Session Management
                            </td>

                            <td>
                                Manage active sessions.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Team Management
                            </td>

                            <td>
                                Create and manage teams.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Installing Laravel Jetstream
            </h2>


            <p>
                First install Jetstream package in your Laravel project.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
composer require laravel/jetstream

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Install Jetstream with Livewire
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan jetstream:install livewire

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Install Jetstream with Inertia
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan jetstream:install inertia

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Run Migration
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
php artisan migrate

</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Install Frontend Files
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>
npm install

npm run build

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Jetstream Authentication Architecture
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User

 ↓

Jetstream

 ↓

Fortify Authentication

 ↓

Laravel Application

 ↓

Database

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Jetstream Directory Structure
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

app/

├── Actions/

├── Models/

├── Providers/


resources/

├── views/

├── js/


routes/

├── web.php


config/

├── jetstream.php


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Two Factor Authentication
            </h2>


            <p>
                Two-factor authentication provides additional security by
                requiring a verification code after entering the password.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Login Password

        ↓

Verification Code

        ↓

Access Account

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Profile Management
            </h2>


            <p>
                Jetstream provides ready-made profile management features.
                Users can update their name, email, and profile information.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Profile

    ↓

Update Information

    ↓

Save Changes

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Session Management
            </h2>


            <p>
                Users can view and remove active login sessions from different
                devices.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Device 1  → Active Session

Device 2  → Active Session

Device 3  → Logout Session

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Team Management
            </h2>


            <p>
                Jetstream allows applications to create teams where users can
                belong to different groups with specific roles.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Create Team

      ↓

Add Members

      ↓

Assign Roles

      ↓

Manage Permissions

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Jetstream Configuration
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

config/jetstream.php


features => [

    Features::profilePhotos(),

    Features::api(),

    Features::teams(),

]

</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Jetstream vs Breeze
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Laravel Breeze</th>

                            <th>Laravel Jetstream</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Lightweight authentication.
                            </td>

                            <td>
                                Advanced authentication system.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Simple features.
                            </td>

                            <td>
                                More security features.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Small projects.
                            </td>

                            <td>
                                Large applications.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Easy customization.
                            </td>

                            <td>
                                More complex structure.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Usage
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                SaaS Applications
                            </h5>


                            <p>
                                User accounts and teams.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Enterprise Apps
                            </h5>


                            <p>
                                Secure authentication.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Admin Systems
                            </h5>


                            <p>
                                Role based access.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Business Platforms
                            </h5>


                            <p>
                                Multi-user systems.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Jetstream is an advanced authentication starter kit
                that provides modern features like two-factor authentication,
                profile management, session control, and team management.
                It is suitable for large and professional Laravel projects.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Email Sending",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Email Sending
            </h2>


            <p class="lead">
                Laravel provides a powerful email system using Mail services.
                Developers can send emails for user registration, password
                reset, notifications, invoices, order confirmations, and many
                other application features.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Email Sending in Laravel?
            </h4>


            <p>
                Email sending is the process of sending messages from a Laravel
                application to users through email services. Laravel provides
                the Mail facade, Mailables, Notifications, and different mail
                drivers to manage emails easily.
            </p>





            <h4 class="text-success mt-5">
                Common Uses of Email in Laravel
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Registration
                            </h5>


                            <p>
                                Send welcome emails to new users.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Password Reset
                            </h5>


                            <p>
                                Send password recovery links.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Send order confirmation emails.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Notifications
                            </h5>


                            <p>
                                Send important updates.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Laravel Mail Configuration
            </h2>


            <p>
                Laravel mail settings are stored in the environment file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


MAIL_MAILER=smtp

MAIL_HOST=smtp.gmail.com

MAIL_PORT=587

MAIL_USERNAME=your_email@gmail.com

MAIL_PASSWORD=your_password

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS=your_email@gmail.com


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Mail Drivers in Laravel
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Driver</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                SMTP
                            </td>

                            <td>
                                Send emails through mail servers.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Mailgun
                            </td>

                            <td>
                                Cloud email service.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Amazon SES
                            </td>

                            <td>
                                Amazon email service.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Log
                            </td>

                            <td>
                                Store emails in log files.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Create Mail Class
            </h2>


            <p>
                Laravel uses Mail classes called Mailables to create email
                messages.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:mail WelcomeMail


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Mail Class Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class WelcomeMail extends Mailable

{

    public function build()

    {

        return $this->view(

            'emails.welcome'

        );

    }

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Email View
            </h2>


            <p>
                Email templates are created inside the emails directory.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

resources/views/emails/welcome.blade.php


&lt;h1&gt;

Welcome to Laravel

&lt;/h1&gt;


&lt;p&gt;

Thank you for joining us.

&lt;/p&gt;


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Send Email from Controller
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Support\Facades\Mail;


Mail::to(

    'user@example.com'

)->send(

    new WelcomeMail()

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Sending Email with User Data
            </h2>


            <p>
                Data can be passed from controller to email templates.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Mail::to($user->email)

->send(

    new WelcomeMail($user)

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Email Attachments
            </h2>


            <p>
                Laravel allows adding files as email attachments.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function build()

{

    return $this

    ->view('emails.invoice')

    ->attach(

        'invoice.pdf'

    );

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Email Queue System
            </h2>


            <p>
                Queues allow Laravel to send emails in the background without
                slowing down the application.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Mail::to($user)

->queue(

    new WelcomeMail()

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Email Queue Table
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan queue:table


php artisan migrate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Notification Email
            </h2>


            <p>
                Laravel Notifications provide another way to send emails and
                other messages.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:notification

InvoiceNotification


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Email Security Practices
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Practice</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Validate Email Address
                            </td>

                            <td>
                                Prevent invalid emails.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Use Queues
                            </td>

                            <td>
                                Improve performance.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Hide Sensitive Data
                            </td>

                            <td>
                                Protect user information.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Use Secure SMTP
                            </td>

                            <td>
                                Protect communication.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Real World Examples
            </h4>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Online Store
                            </h5>


                            <p>
                                Order confirmation emails.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Banking App
                            </h5>


                            <p>
                                Transaction alerts.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Learning System
                            </h5>


                            <p>
                                Course notifications.
                            </p>


                        </div>


                    </div>


                </div>





                <div class-md="6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Business App
                            </h5>


                            <p>
                                Invoice emails.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Mail provides a complete email solution for sending
                messages, notifications, attachments, and queued emails.
                Using Mailables and Notifications, developers can easily
                integrate email features into Laravel applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Notifications",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Notifications
            </h2>


            <p class="lead">
                Laravel Notifications provide a simple way to send messages
                to users through different channels such as email, database,
                SMS, and other notification services. Notifications help
                applications inform users about important events and updates.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What are Laravel Notifications?
            </h4>


            <p>
                Notifications are messages sent from an application to users
                when a specific event occurs. Laravel provides a powerful
                notification system that allows developers to send messages
                using multiple delivery channels.
            </p>


            <p>
                For example, when a customer places an order, Laravel can send
                an order confirmation notification through email or database.
            </p>







            <h4 class="text-success mt-5">
                Notification Channels in Laravel
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Channel</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Mail
                            </td>

                            <td>
                                Send notifications through email.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Database
                            </td>

                            <td>
                                Store notifications in database.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Broadcast
                            </td>

                            <td>
                                Send real-time notifications.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                SMS
                            </td>

                            <td>
                                Send text messages using services.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Slack
                            </td>

                            <td>
                                Send team messages.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Notification Workflow
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Application Event

        ↓

Create Notification

        ↓

Choose Channel

        ↓

Send Message

        ↓

User Receives Notification


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Notification
            </h2>


            <p>
                Laravel provides an artisan command to create notification
                classes.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:notification OrderNotification


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Notification File Location
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

app/

 └── Notifications/

        └── OrderNotification.php


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Notification Class Structure
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class OrderNotification extends Notification

{

    public function via($notifiable)

    {

        return [

            'mail'

        ];

    }


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Send Email Notification
            </h2>


            <p>
                Laravel allows sending email notifications using the mail
                channel.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function toMail($notifiable)

{

    return (new MailMessage)

    ->line(

        'Your order has been received.'

    )

    ->action(

        'View Order',

        url('/orders')

    );

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Send Database Notification
            </h2>


            <p>
                Database notifications store messages in the notifications
                table.
            </p>



            <h4 class="text-success">
                Create Notification Table
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan notifications:table


php artisan migrate


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Database Notification Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function toDatabase($notifiable)

{

    return [

        'message'=>

        'Your order is completed'

    ];

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Send Notification to User
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$user->notify(

    new OrderNotification()

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Using Notification Facade
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Notification::send(

    $users,

    new OrderNotification()

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Multiple Notification Channels
            </h2>


            <p>
                A single notification can be delivered through multiple
                channels.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function via($notifiable)

{

    return [

        'mail',

        'database'

    ];

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Database Notification Display
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

&#64;foreach($notifications as $notification)


&#123;&#123; $notification->data['message'] &#125;&#125;


&#64;endforeach


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Mark Notification as Read
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$notification->markAsRead();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Delete Notification
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$notification->delete();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Notification Events Examples
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Order Placed
                            </h5>


                            <p>
                                Notify customer about order.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Payment Received
                            </h5>


                            <p>
                                Send payment confirmation.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                New Account
                            </h5>


                            <p>
                                Welcome new users.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Password Reset
                            </h5>


                            <p>
                                Send reset notifications.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Notifications vs Emails
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Email</th>

                            <th>Notification</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Only email messages.
                            </td>

                            <td>
                                Multiple delivery channels.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Limited functionality.
                            </td>

                            <td>
                                Flexible system.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Used for emails only.
                            </td>

                            <td>
                                Email, database, SMS, etc.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Notifications provide a flexible way to communicate
                with users through different channels. Developers can send
                emails, database alerts, SMS messages, and real-time updates
                using a single notification system.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Queues & Jobs",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Queues & Jobs
            </h2>


            <p class="lead">
                Laravel Queues provide a way to run time-consuming tasks in
                the background. Jobs are used to handle these tasks without
                slowing down the main application. Queues improve application
                performance by processing heavy operations asynchronously.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What are Laravel Queues?
            </h4>


            <p>
                Queues allow Laravel applications to delay the execution of
                tasks and process them later in the background. Instead of
                making users wait for a long process, Laravel sends the task
                to a queue system.
            </p>


            <p>
                Examples of tasks that use queues:
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Sending emails
                </li>


                <li class="list-group-item">
                    ✅ Processing uploaded files
                </li>


                <li class="list-group-item">
                    ✅ Generating reports
                </li>


                <li class="list-group-item">
                    ✅ Sending notifications
                </li>


                <li class="list-group-item">
                    ✅ Data import and export
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Queue Workflow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User Request

      ↓

Create Job

      ↓

Add Job To Queue

      ↓

Queue Worker

      ↓

Execute Task

      ↓

Complete Job


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Why Use Queues?
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Without Queue</th>

                            <th>With Queue</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                User waits for task completion.
                            </td>

                            <td>
                                Task runs in background.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Slow application response.
                            </td>

                            <td>
                                Faster user experience.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Server overload.
                            </td>

                            <td>
                                Better resource management.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Queue Drivers in Laravel
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Driver</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Database
                            </td>

                            <td>
                                Store jobs in database table.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Redis
                            </td>

                            <td>
                                Fast in-memory queue system.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Sync
                            </td>

                            <td>
                                Execute immediately.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Amazon SQS
                            </td>

                            <td>
                                Cloud queue service.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Configure Queue Driver
            </h2>


            <p>
                Queue settings are configured in the environment file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


QUEUE_CONNECTION=database


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Queue Jobs
            </h2>


            <p>
                Laravel provides an artisan command to create job classes.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:job SendEmailJob


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Job File Location
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

app/

 └── Jobs/

       └── SendEmailJob.php


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Job Class Structure
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class SendEmailJob implements ShouldQueue

{

    public function handle()

    {

        // Task Logic


    }

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Dispatch Job
            </h2>


            <p>
                Jobs are sent to the queue using dispatch method.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

SendEmailJob::dispatch();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Database Queue Setup
            </h2>


            <p>
                To use database queues, create jobs table.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan queue:table


php artisan migrate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Running Queue Worker
            </h2>


            <p>
                Queue workers process pending jobs.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan queue:work


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Queue Retry Failed Jobs
            </h2>


            <p>
                Laravel stores failed jobs and allows retrying them.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan queue:failed-table


php artisan migrate


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Retry Failed Job
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan queue:retry all


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Job Events
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Event</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Job Processing
                            </td>

                            <td>
                                Job starts execution.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Job Processed
                            </td>

                            <td>
                                Job completed successfully.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Job Failed
                            </td>

                            <td>
                                Job execution failed.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Real World Queue Examples
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Email System
                            </h5>


                            <p>
                                Send emails in background.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Process orders and invoices.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                File Processing
                            </h5>


                            <p>
                                Process large uploads.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Reports
                            </h5>


                            <p>
                                Generate large reports.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Queues and Jobs help developers execute heavy tasks
                in the background. They improve application speed, user
                experience, and server performance by processing tasks
                asynchronously.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Events & Listeners",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Events & Listeners
            </h2>


            <p class="lead">
                Laravel Events and Listeners provide an event-driven
                programming system that allows different parts of an
                application to communicate without being tightly connected.
                Events represent actions that happen, while listeners handle
                the response to those actions.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What are Laravel Events?
            </h4>


            <p>
                An Event is an action or activity that occurs inside an
                application. When an event happens, Laravel can trigger one or
                more listeners to perform specific tasks.
            </p>


            <p>
                Examples of events:
            </p>


            <ul class="list-group">


                <li class="list-group-item">
                    ✅ User Registration Completed
                </li>


                <li class="list-group-item">
                    ✅ Order Created
                </li>


                <li class="list-group-item">
                    ✅ Payment Received
                </li>


                <li class="list-group-item">
                    ✅ File Uploaded
                </li>


                <li class="list-group-item">
                    ✅ User Logged In
                </li>


            </ul>







            <h4 class="text-success mt-5">
                What are Listeners?
            </h4>


            <p>
                Listeners are classes that contain the logic which runs when
                an event is triggered. A single event can have multiple
                listeners.
            </p>







            <h4 class="text-success mt-5">
                Event-Driven Workflow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Application Action

        ↓

Event Triggered

        ↓

Listener Receives Event

        ↓

Execute Task

        ↓

Complete Action


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Why Use Events & Listeners?
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Without Events</th>

                            <th>With Events</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Code becomes tightly connected.
                            </td>

                            <td>
                                Code remains flexible.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Difficult to maintain.
                            </td>

                            <td>
                                Easy to manage.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                More duplicate code.
                            </td>

                            <td>
                                Reusable listeners.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Create Event
            </h2>


            <p>
                Laravel provides an artisan command to create events.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:event OrderCreated


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Event File Location
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

app/

 └── Events/

       └── OrderCreated.php


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Event Class Example
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class OrderCreated

{

    public $order;


    public function __construct($order)

    {

        $this->order = $order;

    }


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Listener
            </h2>


            <p>
                Listeners handle the logic after an event occurs.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:listener

SendOrderEmail


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Listener File Location
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

app/

 └── Listeners/

       └── SendOrderEmail.php


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Listener Example
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class SendOrderEmail

{

    public function handle(

        OrderCreated $event

    )

    {

        // Send Email Logic

    }


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Register Events and Listeners
            </h2>


            <p>
                Laravel registers event relationships inside the EventServiceProvider.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

protected $listen = [


    OrderCreated::class => [

        SendOrderEmail::class

    ],


];


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Generate Event Files Automatically
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan event:generate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Dispatch Event
            </h2>


            <p>
                Events are triggered using the dispatch method.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

event(

    new OrderCreated($order)

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Real World Event Examples
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Event</th>

                            <th>Listener Action</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                User Registered
                            </td>

                            <td>
                                Send welcome email.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Order Created
                            </td>

                            <td>
                                Generate invoice.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Payment Completed
                            </td>

                            <td>
                                Update order status.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                File Uploaded
                            </td>

                            <td>
                                Process file.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Events with Queues
            </h2>


            <p>
                Listeners can be queued to execute heavy tasks in the
                background.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class SendEmail implements ShouldQueue

{

    public function handle()

    {

        // Background Task

    }


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Events vs Direct Code
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Direct Code</th>

                            <th>Events</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Less flexible.
                            </td>

                            <td>
                                More flexible.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Hard to extend.
                            </td>

                            <td>
                                Easy to add listeners.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Tightly coupled.
                            </td>

                            <td>
                                Loosely coupled.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Events and Listeners provide a clean event-driven
                architecture. Events represent actions that happen in the
                application, while listeners handle the required responses.
                They improve code organization, flexibility, and scalability.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel APIs",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel APIs
            </h2>


            <p class="lead">
                Laravel provides powerful tools for creating RESTful APIs.
                APIs allow different applications to communicate with each
                other by sending and receiving data through HTTP requests.
                Laravel APIs are commonly used for mobile applications,
                single-page applications, and third-party integrations.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is an API?
            </h4>


            <p>
                API stands for Application Programming Interface. It allows
                two different software systems to exchange data and
                communicate with each other.
            </p>


            <p>
                In Laravel, APIs usually return data in JSON format instead of
                HTML pages.
            </p>





            <h4 class="text-success mt-5">
                API Request Flow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Mobile App

      ↓

HTTP Request

      ↓

Laravel API Route

      ↓

Controller

      ↓

Database

      ↓

JSON Response


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Types of APIs
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Type</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                REST API
                            </td>

                            <td>
                                Uses HTTP methods to communicate.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                SOAP API
                            </td>

                            <td>
                                XML based communication system.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Third Party API
                            </td>

                            <td>
                                Connect external services.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                HTTP Methods in Laravel API
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Method</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                GET
                            </td>

                            <td>
                                Retrieve data from database.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                POST
                            </td>

                            <td>
                                Create new records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                PUT
                            </td>

                            <td>
                                Update existing records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                DELETE
                            </td>

                            <td>
                                Remove records.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                API Routes in Laravel
            </h2>


            <p>
                Laravel API routes are stored inside the api.php file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

routes/api.php


Route::get(

'/products',

function(){

return Product::all();

});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create API Controller
            </h2>


            <p>
                Controllers handle API requests and return responses.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:controller

ProductController --api


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                API Controller Example
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

class ProductController extends Controller

{

    public function index()

    {

        return Product::all();

    }


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                JSON Response
            </h2>


            <p>
                Laravel automatically converts arrays and models into JSON.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

return response()->json([

    'name' => 'Laptop',

    'price' => 500

]);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                API Resource
            </h2>


            <p>
                API Resources transform database data into a clean JSON
                structure.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:resource

ProductResource


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Resource Example
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

return new ProductResource(

    $product

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                API Authentication
            </h2>


            <p>
                Laravel provides authentication systems to protect APIs.
                Laravel Sanctum is commonly used for token authentication.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

composer require laravel/sanctum


php artisan sanctum:install


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Protect API Routes
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Route::middleware('auth:sanctum')

->get(

'/profile',

function(){

return auth()->user();

});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                API CRUD Example
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Operation</th>

                            <th>API Endpoint</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Get Products
                            </td>

                            <td>
                                GET /api/products
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Create Product
                            </td>

                            <td>
                                POST /api/products
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Update Product
                            </td>

                            <td>
                                PUT /api/products/{id}
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Delete Product
                            </td>

                            <td>
                                DELETE /api/products/{id}
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                API Testing Tools
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Postman
                            </h5>


                            <p>
                                Test API requests.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Insomnia
                            </h5>


                            <p>
                                API development tool.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Mobile Apps
                            </h5>


                            <p>
                                Consume Laravel APIs.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Frontend Apps
                            </h5>


                            <p>
                                Connect React/Vue apps.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Real World API Usage
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    📱 Mobile Applications
                </li>


                <li class="list-group-item">
                    🛒 Ecommerce Applications
                </li>


                <li class="list-group-item">
                    💳 Payment Gateway Integration
                </li>


                <li class="list-group-item">
                    📊 Dashboard Applications
                </li>


                <li class="list-group-item">
                    🔗 Third Party Services
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel APIs allow developers to build powerful backend
                services that communicate with mobile applications,
                frontend frameworks, and external systems. Laravel provides
                routing, controllers, resources, and authentication tools to
                create secure and scalable REST APIs.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Sanctum Authentication",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Sanctum Authentication
            </h2>


            <p class="lead">
                Laravel Sanctum provides a simple authentication system for
                Laravel applications. It is mainly used for API authentication,
                allowing mobile applications, single-page applications, and
                third-party clients to securely access Laravel APIs using
                authentication tokens.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Laravel Sanctum?
            </h4>


            <p>
                Laravel Sanctum is an official Laravel package that provides
                lightweight authentication for APIs and SPAs (Single Page
                Applications).
            </p>


            <p>
                Sanctum allows users to authenticate using API tokens. After
                successful login, Laravel generates a token that clients send
                with future API requests.
            </p>







            <h4 class="text-success mt-5">
                Sanctum Authentication Flow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User Login

      ↓

Check Email & Password

      ↓

Generate Token

      ↓

Send Token To Client

      ↓

Client Sends Token With API Request

      ↓

Access Protected API


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Why Use Laravel Sanctum?
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Feature</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Simple Authentication
                            </td>

                            <td>
                                Easy token based API security.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Mobile Support
                            </td>

                            <td>
                                Perfect for mobile applications.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                SPA Authentication
                            </td>

                            <td>
                                Supports React, Vue, and Angular apps.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Lightweight
                            </td>

                            <td>
                                Simple alternative to OAuth.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Install Laravel Sanctum
            </h2>


            <p>
                Install Sanctum package using Composer.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

composer require laravel/sanctum


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Publish Sanctum Files
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan vendor:publish 

--provider="Laravel\Sanctum\SanctumServiceProvider"


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Run Migration
            </h2>


            <p>
                Sanctum creates a personal access tokens table.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Enable Sanctum in User Model
            </h2>


            <p>
                Add HasApiTokens trait to the User model.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable

{

    use HasApiTokens;

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Create Login API
            </h2>


            <p>
                Login API checks user credentials and generates an access token.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function login(Request $request)

{


$user = User::where(

'email',

$request->email

)->first();



if(!$user)

{

return response()->json([

'message'=>'User not found'

]);

}



$token = $user->createToken(

'api-token'

)->plainTextToken;



return response()->json([

'token'=>$token

]);


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                API Login Request
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

POST


/api/login



Body:


email

password


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Using Authentication Token
            </h2>


            <p>
                The client sends the token in the Authorization header.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Authorization:


Bearer your_token_here


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Protect API Routes
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Route::middleware(

'auth:sanctum'

)

->get(

'/profile',

function(){

return auth()->user();

});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Logout API
            </h2>


            <p>
                Users can delete their current token during logout.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

auth()->user()

->currentAccessToken()

->delete();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Multiple Device Login
            </h2>


            <p>
                Sanctum supports multiple tokens for different devices.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Mobile Token

      +

Web Token

      +

Tablet Token


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Sanctum Token Abilities
            </h2>


            <p>
                Tokens can have specific permissions called abilities.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$token =

$user->createToken(

'admin-token',

['create','update']

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Sanctum vs Passport
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-warning">


                        <tr>

                            <th>Sanctum</th>

                            <th>Passport</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Simple token authentication.
                            </td>

                            <td>
                                OAuth2 authentication.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Lightweight.
                            </td>

                            <td>
                                More complex.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Mobile and SPA apps.
                            </td>

                            <td>
                                Large enterprise APIs.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Real World Usage
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Mobile Apps
                            </h5>


                            <p>
                                Secure API access.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Ecommerce
                            </h5>


                            <p>
                                Customer authentication.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Admin APIs
                            </h5>


                            <p>
                                Secure dashboards.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                SaaS Apps
                            </h5>


                            <p>
                                User management.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Sanctum provides simple and secure API authentication
                using tokens. It is widely used for mobile applications,
                single-page applications, and modern Laravel API projects.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Security",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Security
            </h2>


            <p class="lead">
                Laravel provides many built-in security features to protect
                web applications from common attacks. Security is an important
                part of Laravel development because applications handle user
                data, authentication, payments, and sensitive information.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Laravel Security?
            </h4>


            <p>
                Laravel Security means protecting Laravel applications from
                unauthorized access, malicious attacks, data theft, and
                security vulnerabilities.
            </p>


            <p>
                Laravel provides built-in protection against attacks such as:
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ SQL Injection
                </li>


                <li class="list-group-item">
                    ✅ Cross Site Scripting (XSS)
                </li>


                <li class="list-group-item">
                    ✅ Cross Site Request Forgery (CSRF)
                </li>


                <li class="list-group-item">
                    ✅ Password Attacks
                </li>


                <li class="list-group-item">
                    ✅ Unauthorized Access
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Laravel Security Features
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Feature</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Authentication
                            </td>

                            <td>
                                Secure user login and registration.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Authorization
                            </td>

                            <td>
                                Control user permissions.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                CSRF Protection
                            </td>

                            <td>
                                Protect forms from fake requests.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Encryption
                            </td>

                            <td>
                                Secure sensitive data.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Password Hashing
                            </td>

                            <td>
                                Store passwords securely.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Password Hashing
            </h2>


            <p>
                Laravel automatically provides secure password hashing using
                hashing algorithms. Passwords should never be stored as plain
                text.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Support\Facades\Hash;


$password = Hash::make(

    'mypassword'

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Verify Password
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Hash::check(

    'password',

    $user->password

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                CSRF Protection
            </h2>


            <p>
                Cross Site Request Forgery (CSRF) is an attack where an
                attacker sends unauthorized requests on behalf of a user.
            </p>


            <p>
                Laravel protects forms using CSRF tokens.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

&lt;form method="POST"&gt;


&#64;csrf


&lt;input type="text"&gt;


&lt;button&gt;

Submit

&lt;/button&gt;


&lt;/form&gt;


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                SQL Injection Protection
            </h2>


            <p>
                Laravel Query Builder and Eloquent ORM automatically protect
                applications from SQL injection by using prepared statements.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User::where(

'email',

$request->email

)->first();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                XSS Protection
            </h2>


            <p>
                Cross Site Scripting (XSS) happens when attackers inject
                malicious scripts into web pages.
            </p>


            <p>
                Laravel Blade automatically escapes output.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

&#123;&#123; $user->name &#125;&#125;


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Encryption in Laravel
            </h2>


            <p>
                Laravel provides encryption tools to protect sensitive data.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

use Illuminate\Support\Facades\Crypt;


$encrypted = Crypt::encrypt(

'secret data'

);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Authentication Security
            </h2>


            <p>
                Laravel authentication systems protect user accounts using
                secure login mechanisms.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    Strong Password Rules
                </li>


                <li class="list-group-item">
                    Email Verification
                </li>


                <li class="list-group-item">
                    Two Factor Authentication
                </li>


                <li class="list-group-item">
                    Session Protection
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Authorization Security
            </h2>


            <p>
                Authorization controls what actions users can perform inside
                the application.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

if (

$user->can('update-post')

)

{

// Allow Action

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                File Upload Security
            </h2>


            <p>
                File uploads should always be validated to prevent malicious
                file uploads.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$request->validate([


'image' => [

'required',

'image',

'max:2048'

]


]);


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Environment Security
            </h2>


            <p>
                Sensitive configuration data should be stored in the
                environment file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


APP_KEY=secret_key


DB_PASSWORD=password


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Security Best Practices
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Practice</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Use HTTPS
                            </td>

                            <td>
                                Encrypt communication.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Validate Input
                            </td>

                            <td>
                                Prevent malicious data.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Update Laravel
                            </td>

                            <td>
                                Fix security issues.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Hide Errors in Production
                            </td>

                            <td>
                                Protect application details.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Laravel Security Checklist
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Authentication
                            </h5>

                            <p>
                                Secure user accounts.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Validation
                            </h5>

                            <p>
                                Check user input.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Encryption
                            </h5>

                            <p>
                                Protect sensitive data.
                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-md-6 col-lg-3">

                    <div class="card shadow-sm h-100 text-center">

                        <div class="card-body">

                            <h5>
                                Authorization
                            </h5>

                            <p>
                                Manage permissions.
                            </p>

                        </div>

                    </div>

                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel provides many built-in security features including
                authentication, authorization, CSRF protection, encryption,
                password hashing, and input validation. Following Laravel
                security practices helps developers build safe and reliable
                applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Performance Optimization",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Performance Optimization
            </h2>


            <p class="lead">
                Laravel Performance Optimization is the process of improving
                application speed, reducing server load, and providing a
                faster user experience. Laravel provides many built-in tools
                and techniques to optimize database queries, caching, assets,
                and application architecture.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                Why Performance Optimization is Important?
            </h4>


            <p>
                A slow application can affect user experience, SEO ranking,
                and server resources. Optimizing Laravel applications helps
                websites load faster and handle more users efficiently.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Faster page loading
                </li>


                <li class="list-group-item">
                    ✅ Better user experience
                </li>


                <li class="list-group-item">
                    ✅ Reduced server cost
                </li>


                <li class="list-group-item">
                    ✅ Better scalability
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Laravel Performance Optimization Techniques
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Technique</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Database Optimization
                            </td>

                            <td>
                                Improve database queries and indexing.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Caching
                            </td>

                            <td>
                                Store frequently used data temporarily.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Route Optimization
                            </td>

                            <td>
                                Improve route loading speed.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Asset Optimization
                            </td>

                            <td>
                                Compress CSS and JavaScript files.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                1. Database Query Optimization
            </h2>


            <p>
                Database queries are one of the most common reasons for slow
                applications. Laravel provides Eloquent and Query Builder
                optimization techniques.
            </p>





            <h4 class="text-success">
                Avoid N+1 Query Problem
            </h4>


            <p>
                The N+1 problem occurs when Laravel executes too many database
                queries.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

// Bad Example


$users = User::all();


foreach($users as $user)

{

    echo $user->posts;

}


</code></pre>

            </div>







            <h4 class="text-success mt-4">
                Use Eager Loading
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

// Optimized Example


$users = User::with('posts')

->get();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                2. Database Indexing
            </h2>


            <p>
                Indexes improve database search speed by creating faster
                lookup structures.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$table->index('email');


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Laravel Cache System
            </h2>


            <p>
                Laravel Cache stores frequently used data to reduce repeated
                database operations.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Cache::remember(

'products',

3600,

function(){

return Product::all();

});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Cache Configuration
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


CACHE_DRIVER=file


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                4. Route Caching
            </h2>


            <p>
                Route caching improves application route loading speed.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan route:cache


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Clear Route Cache
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan route:clear


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                5. Configuration Caching
            </h2>


            <p>
                Configuration caching combines all configuration files into a
                single cached file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan config:cache


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                6. View Caching
            </h2>


            <p>
                Laravel compiles Blade templates for faster rendering.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan view:cache


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                7. Optimize Laravel Application
            </h2>


            <p>
                Laravel provides a single command to optimize the application.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan optimize


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                8. Asset Optimization
            </h2>


            <p>
                Optimize frontend assets to improve page loading speed.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    Compress CSS files
                </li>


                <li class="list-group-item">
                    Minify JavaScript
                </li>


                <li class="list-group-item">
                    Optimize images
                </li>


                <li class="list-group-item">
                    Use CDN services
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                9. Queue Heavy Tasks
            </h2>


            <p>
                Long-running tasks should be processed in background using
                Laravel Queues.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

SendEmailJob::dispatch();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                10. Lazy Loading
            </h2>


            <p>
                Lazy loading loads related data only when required.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

$user->posts;


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Performance Monitoring Tools
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Tool</th>

                            <th>Purpose</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Laravel Telescope
                            </td>

                            <td>
                                Monitor application requests.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Debugbar
                            </td>

                            <td>
                                Analyze queries and performance.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                New Relic
                            </td>

                            <td>
                                Application monitoring.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Production Optimization Checklist
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Cache
                            </h5>


                            <p>
                                Enable application caching.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Database
                            </h5>


                            <p>
                                Optimize queries.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Assets
                            </h5>


                            <p>
                                Compress files.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Queues
                            </h5>


                            <p>
                                Run background tasks.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Performance Optimization improves application speed
                and scalability. Developers can optimize database queries,
                use caching, optimize assets, use queues, and enable Laravel
                optimization commands to build fast and efficient applications.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Deployment",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Deployment
            </h2>


            <p class="lead">
                Laravel Deployment is the process of moving a Laravel
                application from a local development environment to a live
                server where users can access the application. Deployment
                requires server configuration, database setup, environment
                configuration, and application optimization.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                What is Laravel Deployment?
            </h4>


            <p>
                During development, Laravel applications usually run on a
                local computer using tools like XAMPP, Laragon, or Laravel
                Sail. Deployment transfers the project to a production server
                so it becomes available online.
            </p>





            <h4 class="text-success mt-5">
                Laravel Deployment Workflow
            </h4>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Local Development

        ↓

Upload Project To Server

        ↓

Install Dependencies

        ↓

Configure Environment

        ↓

Setup Database

        ↓

Optimize Laravel

        ↓

Application Goes Live


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Deployment Requirements
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Requirement</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                PHP
                            </td>

                            <td>
                                Required PHP version for Laravel.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Composer
                            </td>

                            <td>
                                Install Laravel packages.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Database
                            </td>

                            <td>
                                MySQL, PostgreSQL, etc.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Web Server
                            </td>

                            <td>
                                Apache or Nginx.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                1. Prepare Laravel Project
            </h2>


            <p>
                Before deployment, remove unnecessary development files and
                prepare the project for production.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    Update Laravel dependencies
                </li>


                <li class="list-group-item">
                    Configure environment settings
                </li>


                <li class="list-group-item">
                    Optimize application
                </li>


                <li class="list-group-item">
                    Backup database
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                2. Upload Laravel Project
            </h2>


            <p>
                Upload your Laravel project files to the hosting server using
                FTP, cPanel File Manager, or Git.
            </p>



            <h4 class="text-success">
                Common Deployment Methods
            </h4>



            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-success">


                        <tr>

                            <th>Method</th>

                            <th>Description</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                cPanel Upload
                            </td>

                            <td>
                                Upload files through hosting panel.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Git Deployment
                            </td>

                            <td>
                                Deploy from Git repository.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Cloud Server
                            </td>

                            <td>
                                Deploy on VPS servers.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                3. Install Composer Dependencies
            </h2>


            <p>
                Install Laravel required packages on the server.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

composer install --no-dev


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                4. Configure Environment File
            </h2>


            <p>
                The .env file contains application and database settings.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


APP_NAME=LaravelApp


APP_ENV=production


APP_DEBUG=false


APP_URL=https://example.com


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                5. Generate Application Key
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan key:generate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                6. Configure Database
            </h2>


            <p>
                Update database credentials inside the .env file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

DB_CONNECTION=mysql


DB_HOST=127.0.0.1


DB_DATABASE=database_name


DB_USERNAME=username


DB_PASSWORD=password


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                7. Run Database Migration
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan migrate


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                8. Storage Link
            </h2>


            <p>
                Laravel storage link connects public storage files with the
                public directory.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan storage:link


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                9. Set Folder Permissions
            </h2>


            <p>
                Laravel needs write permission for storage and cache folders.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

storage/

bootstrap/cache/


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                10. Laravel Optimization Commands
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan optimize


php artisan config:cache


php artisan route:cache


php artisan view:cache


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Apache Configuration
            </h2>


            <p>
                Apache should point the domain to Laravel's public directory.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

DocumentRoot

/project/public


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Nginx Configuration
            </h2>



            <p>
                Nginx configuration should use Laravel public folder as root.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

root /var/www/project/public;


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Deployment Platforms
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Shared Hosting
                            </h5>


                            <p>
                                cPanel based hosting.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                VPS Server
                            </h5>


                            <p>
                                Full server control.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Cloud Hosting
                            </h5>


                            <p>
                                Scalable applications.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Docker
                            </h5>


                            <p>
                                Container deployment.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Production Security Settings
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    Set APP_DEBUG=false
                </li>


                <li class="list-group-item">
                    Enable HTTPS
                </li>


                <li class="list-group-item">
                    Protect .env file
                </li>


                <li class="list-group-item">
                    Use strong database password
                </li>


                <li class="list-group-item">
                    Keep Laravel updated
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Deployment involves uploading the project, installing
                dependencies, configuring environment settings, connecting
                the database, optimizing Laravel, and securing the production
                server. Proper deployment ensures a fast, secure, and reliable
                Laravel application.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Mini Projects",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Mini Projects
            </h2>


            <p class="lead">
                Laravel Mini Projects help developers practice Laravel concepts
                by building real-world applications. These projects improve
                skills in routing, controllers, models, databases, authentication,
                APIs, file uploads, and deployment.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                Why Build Laravel Projects?
            </h4>


            <p>
                Learning Laravel theory is important, but building projects
                helps you understand how Laravel is used in real applications.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Improve Laravel programming skills
                </li>


                <li class="list-group-item">
                    ✅ Understand MVC architecture
                </li>


                <li class="list-group-item">
                    ✅ Learn database relationships
                </li>


                <li class="list-group-item">
                    ✅ Create portfolio projects
                </li>


                <li class="list-group-item">
                    ✅ Prepare for developer jobs
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Laravel Project Development Process
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Project Idea

      ↓

Database Design

      ↓

Create Laravel Project

      ↓

Create Models & Migrations

      ↓

Create Controllers

      ↓

Build Frontend

      ↓

Add Authentication

      ↓

Testing

      ↓

Deployment


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Beginner Laravel Projects
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Project</th>

                            <th>Features</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Blog System
                            </td>

                            <td>
                                Posts, categories, comments, admin panel.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Todo Application
                            </td>

                            <td>
                                Create, update, delete tasks.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Student Management System
                            </td>

                            <td>
                                Students, courses, records.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Contact Management
                            </td>

                            <td>
                                Store and manage contacts.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                1. Laravel Blog System
            </h2>


            <p>
                A blog system allows users to create and manage articles.
                It is a good project for learning CRUD operations.
            </p>



            <h4 class="text-success">
                Features
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    User Registration and Login
                </li>


                <li class="list-group-item">
                    Create Blog Posts
                </li>


                <li class="list-group-item">
                    Categories Management
                </li>


                <li class="list-group-item">
                    Comments System
                </li>


                <li class="list-group-item">
                    Admin Dashboard
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Database Tables
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

users


posts


categories


comments


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                2. Ecommerce Website
            </h2>


            <p>
                Ecommerce projects are excellent for learning advanced Laravel
                features.
            </p>



            <h4 class="text-success">
                Features
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    Product Management
                </li>


                <li class="list-group-item">
                    Categories
                </li>


                <li class="list-group-item">
                    Shopping Cart
                </li>


                <li class="list-group-item">
                    Orders System
                </li>


                <li class="list-group-item">
                    Payment Integration
                </li>


                <li class="list-group-item">
                    Invoice Generation
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Ecommerce Database Example
            </h2>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

users


products


categories


orders


order_items


payments


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Online Tailor Service System
            </h2>


            <p>
                A custom tailoring application allows customers to order
                customized clothes online.
            </p>



            <h4 class="text-success">
                Features
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    Custom Clothing Orders
                </li>


                <li class="list-group-item">
                    Measurement Form
                </li>


                <li class="list-group-item">
                    Ready Made Products
                </li>


                <li class="list-group-item">
                    Shopping Cart
                </li>


                <li class="list-group-item">
                    Order Tracking
                </li>


                <li class="list-group-item">
                    Invoice System
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                4. Medical Store Management System
            </h2>


            <p>
                A medical store project helps manage medicine inventory and
                sales.
            </p>



            <h4 class="text-success">
                Features
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    Medicine Stock Management
                </li>


                <li class="list-group-item">
                    Purchase Management
                </li>


                <li class="list-group-item">
                    Sales Invoice
                </li>


                <li class="list-group-item">
                    Expiry Date Checking
                </li>


                <li class="list-group-item">
                    Customer Records
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                5. REST API Project
            </h2>


            <p>
                Build APIs that can be used by mobile applications and
                frontend frameworks.
            </p>



            <h4 class="text-success">
                Features
            </h4>



            <ul class="list-group">


                <li class="list-group-item">
                    API Authentication
                </li>


                <li class="list-group-item">
                    CRUD APIs
                </li>


                <li class="list-group-item">
                    Laravel Sanctum
                </li>


                <li class="list-group-item">
                    JSON Responses
                </li>


                <li class="list-group-item">
                    API Testing
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Advanced Laravel Projects
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Project</th>

                            <th>Advanced Features</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Learning Management System
                            </td>

                            <td>
                                Courses, videos, quizzes, certificates.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Job Portal
                            </td>

                            <td>
                                Jobs, applications, profiles.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Hospital Management
                            </td>

                            <td>
                                Patients, doctors, appointments.
                            </td>

                        </tr>



                        <tr>

                            <td>
                                CRM System
                            </td>

                            <td>
                                Customers, leads, reports.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Skills Learned From Projects
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Backend
                            </h5>


                            <p>
                                Controllers, Models, APIs.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Database
                            </h5>


                            <p>
                                Migrations and Relations.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Frontend
                            </h5>


                            <p>
                                Blade and Bootstrap.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Deployment
                            </h5>


                            <p>
                                Hosting and servers.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Portfolio Project Tips
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    Use clean and professional UI design.
                </li>


                <li class="list-group-item">
                    Add authentication and authorization.
                </li>


                <li class="list-group-item">
                    Create proper database relationships.
                </li>


                <li class="list-group-item">
                    Deploy projects online.
                </li>


                <li class="list-group-item">
                    Upload source code to GitHub.
                </li>


            </ul>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Mini Projects help developers gain practical
                experience by building real-world applications. Projects like
                blogs, ecommerce systems, APIs, management systems, and custom
                business applications improve Laravel skills and create a
                strong developer portfolio.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Best Practices",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Best Practices
            </h2>


            <p class="lead">
                Laravel Best Practices are professional coding standards and
                techniques used by experienced Laravel developers to create
                clean, secure, maintainable, and scalable applications.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                Why Follow Laravel Best Practices?
            </h4>


            <p>
                Following best practices makes your Laravel application easier
                to understand, debug, update, and maintain. It also improves
                performance, security, and teamwork.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    ✅ Clean and readable code
                </li>


                <li class="list-group-item">
                    ✅ Better application structure
                </li>


                <li class="list-group-item">
                    ✅ Improved security
                </li>


                <li class="list-group-item">
                    ✅ Easier maintenance
                </li>


                <li class="list-group-item">
                    ✅ Professional development workflow
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                1. Follow Laravel MVC Architecture
            </h2>


            <p>
                Laravel follows the Model View Controller (MVC) architecture.
                Developers should keep business logic separated from views
                and database operations.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Model

    ↓

Controller

    ↓

View


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                2. Use Resource Controllers
            </h2>


            <p>
                Resource controllers provide a standard structure for CRUD
                operations.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:controller

ProductController --resource


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                3. Use Form Request Validation
            </h2>


            <p>
                Avoid placing validation logic directly inside controllers.
                Use Form Request classes for cleaner code.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

php artisan make:request

StoreProductRequest


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                4. Keep Controllers Clean
            </h2>


            <p>
                Controllers should handle requests only. Heavy business logic
                should be moved into services or separate classes.
            </p>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>Bad Practice</th>

                            <th>Good Practice</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Large controller methods
                            </td>

                            <td>
                                Use services and classes
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Database queries everywhere
                            </td>

                            <td>
                                Use Models
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                5. Use Eloquent Relationships
            </h2>


            <p>
                Avoid writing complex database queries repeatedly. Use
                Laravel relationships.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

public function posts()

{

return $this->hasMany(Post::class);

}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                6. Use Eager Loading
            </h2>


            <p>
                Prevent the N+1 query problem by loading relationships
                efficiently.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

User::with('posts')

->get();


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                7. Use Environment Variables
            </h2>


            <p>
                Never store sensitive information directly in code. Use the
                .env file.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

.env


DB_PASSWORD=password


APP_KEY=secret_key


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                8. Use Laravel Naming Conventions
            </h2>



            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-success">


                        <tr>

                            <th>Type</th>

                            <th>Example</th>

                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                Model
                            </td>

                            <td>
                                Product
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Controller
                            </td>

                            <td>
                                ProductController
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Table
                            </td>

                            <td>
                                products
                            </td>

                        </tr>



                        <tr>

                            <td>
                                Migration
                            </td>

                            <td>
                                create_products_table
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                9. Use Middleware Properly
            </h2>


            <p>
                Middleware is used for authentication, permissions, and
                request filtering.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Route::middleware(

'auth'

)

->group(function(){


});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                10. Use Database Transactions
            </h2>


            <p>
                Transactions keep database operations safe when multiple
                queries depend on each other.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

DB::transaction(function(){


});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                11. Write Reusable Code
            </h2>


            <p>
                Avoid repeating code. Create reusable functions, components,
                services, and traits.
            </p>



            <ul class="list-group">


                <li class="list-group-item">
                    Reusable Components
                </li>


                <li class="list-group-item">
                    Helper Functions
                </li>


                <li class="list-group-item">
                    Service Classes
                </li>


                <li class="list-group-item">
                    Traits
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                12. Handle Errors Properly
            </h2>


            <p>
                Use Laravel exception handling instead of showing raw errors
                to users.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

try

{


}

catch(Exception $e)

{


}


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                13. Use Laravel Cache
            </h2>


            <p>
                Cache frequently used data to improve application speed.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

Cache::remember(

'users',

3600,

function(){

return User::all();

});


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                14. Security Best Practices
            </h2>



            <ul class="list-group">


                <li class="list-group-item">
                    Use CSRF Protection
                </li>


                <li class="list-group-item">
                    Validate User Input
                </li>


                <li class="list-group-item">
                    Hash Passwords
                </li>


                <li class="list-group-item">
                    Protect API Routes
                </li>


                <li class="list-group-item">
                    Use HTTPS
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                15. Use Git Version Control
            </h2>


            <p>
                Professional developers use Git to manage project changes.
            </p>



            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>

git add .


git commit -m "Update feature"


git push


</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Professional Laravel Workflow
            </h2>



            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Planning
                            </h5>


                            <p>
                                Design database and features.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Development
                            </h5>


                            <p>
                                Write clean Laravel code.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Testing
                            </h5>


                            <p>
                                Check application quality.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Deployment
                            </h5>


                            <p>
                                Publish application online.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel Best Practices help developers create professional
                applications by following MVC architecture, writing clean
                code, using proper validation, optimizing databases, securing
                applications, and following Laravel standards.

            </div>



        </div>

    </div>

</div>

`
},

{
title:"Laravel Interview Questions",
content:`

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-body">


            <h2 class="text-primary mb-4">
                Laravel Interview Questions
            </h2>


            <p class="lead">
                Laravel interview questions help developers prepare for
                Laravel developer jobs by understanding important concepts
                such as MVC architecture, routing, database operations,
                authentication, APIs, security, and optimization.
            </p>


            <hr>





            <h4 class="text-success mt-4">
                Basic Laravel Interview Questions
            </h4>







            <div class="accordion" id="basicQuestions">



                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#q1">

                        1. What is Laravel?

                        </button>

                    </h2>


                    <div id="q1" class="accordion-collapse collapse show">

                        <div class="accordion-body">

                            Laravel is an open-source PHP framework used to
                            develop modern web applications. It follows the
                            MVC architecture and provides features like
                            routing, authentication, database management,
                            queues, and APIs.

                        </div>

                    </div>


                </div>







                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#q2">

                        2. What are the main features of Laravel?

                        </button>

                    </h2>


                    <div id="q2" class="accordion-collapse collapse">

                        <div class="accordion-body">


                            <ul>

                                <li>MVC Architecture</li>

                                <li>Eloquent ORM</li>

                                <li>Blade Template Engine</li>

                                <li>Routing System</li>

                                <li>Authentication</li>

                                <li>Middleware</li>

                                <li>Queues and Jobs</li>

                                <li>REST API Support</li>


                            </ul>


                        </div>

                    </div>


                </div>







                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#q3">

                        3. Explain MVC Architecture in Laravel

                        </button>

                    </h2>


                    <div id="q3" class="accordion-collapse collapse">


                        <div class="accordion-body">


                            MVC stands for Model View Controller.


                            <br><br>


                            <strong>Model:</strong>
                            Handles database operations.


                            <br>


                            <strong>View:</strong>
                            Handles user interface.


                            <br>


                            <strong>Controller:</strong>
                            Handles application logic.


                        </div>


                    </div>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Laravel Routing Questions
            </h2>





            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        4. What is Routing in Laravel?
                    </h5>


                    <p>
                        Routing defines how application requests are handled
                        and which controller or function should execute.
                    </p>



                    <div class="bg-dark text-white rounded p-3">

<pre class="text-white mb-0"><code>

Route::get(

'/home',

function(){

return view('home');

});


</code></pre>

                    </div>


                </div>


            </div>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        5. Where are Laravel routes stored?
                    </h5>


                    <p>
                        Laravel routes are stored inside the routes folder.
                    </p>


                    <ul>

                        <li>
                            web.php - Web routes
                        </li>


                        <li>
                            api.php - API routes
                        </li>


                        <li>
                            console.php - Console commands
                        </li>


                    </ul>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Database and Eloquent Questions
            </h2>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        6. What is Eloquent ORM?
                    </h5>


                    <p>
                        Eloquent ORM is Laravel's database management system
                        that allows developers to interact with database
                        tables using PHP models instead of SQL queries.
                    </p>


                </div>


            </div>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        7. What are Laravel Migrations?
                    </h5>


                    <p>
                        Migrations are used to create and modify database
                        tables using PHP code.
                    </p>



                    <div class="bg-dark text-white rounded p-3">

<pre class="text-white mb-0"><code>

php artisan make:migration

create_products_table


</code></pre>

                    </div>


                </div>


            </div>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        8. What are Relationships in Laravel?
                    </h5>


                    <p>
                        Laravel relationships define connections between
                        database tables.
                    </p>


                    <ul>

                        <li>
                            One To One
                        </li>


                        <li>
                            One To Many
                        </li>


                        <li>
                            Many To Many
                        </li>


                        <li>
                            Has Many Through
                        </li>


                    </ul>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Authentication Questions
            </h2>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        9. How does Laravel Authentication work?
                    </h5>


                    <p>
                        Laravel authentication verifies user credentials and
                        manages user sessions using built-in authentication
                        systems.
                    </p>


                </div>


            </div>







            <div class="card mb-3 shadow-sm">


                <div class="card-body">


                    <h5>
                        10. What is Laravel Sanctum?
                    </h5>


                    <p>
                        Laravel Sanctum provides token-based authentication
                        for APIs and Single Page Applications.
                    </p>


                </div>


            </div>







            <h2 class="text-primary mt-5">
                Advanced Laravel Questions
            </h2>







            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-primary">


                        <tr>

                            <th>
                                Question
                            </th>


                            <th>
                                Short Answer
                            </th>


                        </tr>


                    </thead>



                    <tbody>


                        <tr>

                            <td>
                                What is Middleware?
                            </td>


                            <td>
                                Filters HTTP requests before reaching the
                                application.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                What are Service Providers?
                            </td>


                            <td>
                                Classes responsible for registering services.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                What are Facades?
                            </td>


                            <td>
                                Static interfaces to Laravel services.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                What are Events and Listeners?
                            </td>


                            <td>
                                Used for event-driven programming.
                            </td>


                        </tr>





                        <tr>

                            <td>
                                What are Queues?
                            </td>


                            <td>
                                Used for background task processing.
                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>







            <h2 class="text-primary mt-5">
                Laravel Coding Interview Questions
            </h2>







            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="text-white mb-0"><code>


Question:

How to get all products from database?


Answer:


$products = Product::all();



Question:

How to create a new record?


Answer:


Product::create([

'name'=>'Laptop'

]);



</code></pre>

            </div>







            <h2 class="text-primary mt-5">
                Laravel Security Interview Questions
            </h2>





            <ul class="list-group">


                <li class="list-group-item">
                    How does Laravel prevent SQL Injection?
                </li>


                <li class="list-group-item">
                    Explain CSRF Protection.
                </li>


                <li class="list-group-item">
                    How are passwords stored securely?
                </li>


                <li class="list-group-item">
                    What is Laravel Encryption?
                </li>


                <li class="list-group-item">
                    How to secure APIs?
                </li>


            </ul>







            <h2 class="text-primary mt-5">
                Laravel Developer Interview Preparation Tips
            </h2>





            <div class="row g-3">


                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Learn Core Concepts
                            </h5>


                            <p>
                                MVC, Routing, ORM.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Build Projects
                            </h5>


                            <p>
                                Practice real applications.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Practice APIs
                            </h5>


                            <p>
                                Learn REST APIs.
                            </p>


                        </div>


                    </div>


                </div>





                <div class="col-md-6 col-lg-3">


                    <div class="card shadow-sm h-100 text-center">


                        <div class="card-body">


                            <h5>
                                Understand Security
                            </h5>


                            <p>
                                Protect applications.
                            </p>


                        </div>


                    </div>


                </div>


            </div>







            <h4 class="text-success mt-5">
                Summary
            </h4>


            <div class="alert alert-info">

                Laravel interview preparation requires strong knowledge of
                Laravel fundamentals, MVC architecture, routing, Eloquent ORM,
                authentication, APIs, security, and real-world project
                experience.

            </div>



        </div>

    </div>

</div>

`
}
];

let currentLesson = 0;

function showLesson(index)
{
    currentLesson = index;
    document.getElementById("lessonContent").innerHTML = lessons[index].content;
}

function nextLesson()
{
    if(currentLesson < lessons.length-1)
    {
        currentLesson++;
        showLesson(currentLesson);
    }
}

function previousLesson()
{
    if(currentLesson > 0)
    {
        currentLesson--;
        showLesson(currentLesson);
    }
}

showLesson(0);

</script>



   <!-- Before the closing </body> tag -->
<script src="{{asset('css/js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>
@endsection