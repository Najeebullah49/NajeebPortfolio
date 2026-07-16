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
        Bootsrap5
    </h3>
<a href="#" onclick="showLesson(0); return false;">Bootstrap 5 Home</a>

<a href="#" onclick="showLesson(1); return false;">Introduction to Bootstrap 5</a>

<a href="#" onclick="showLesson(2); return false;">History of Bootstrap</a>

<a href="#" onclick="showLesson(3); return false;">Installing Bootstrap 5</a>

<a href="#" onclick="showLesson(4); return false;">Bootstrap Grid System</a>

<a href="#" onclick="showLesson(5); return false;">Bootstrap Containers</a>

<a href="#" onclick="showLesson(6); return false;">Bootstrap Typography</a>

<a href="#" onclick="showLesson(7); return false;">Bootstrap Colors & Backgrounds</a>

<a href="#" onclick="showLesson(8); return false;">Bootstrap Tables</a>

<a href="#" onclick="showLesson(9); return false;">Bootstrap Images</a>

<a href="#" onclick="showLesson(10); return false;">Bootstrap Buttons</a>

<a href="#" onclick="showLesson(11); return false;">Bootstrap Forms</a>

<a href="#" onclick="showLesson(12); return false;">Bootstrap Components</a>

<a href="#" onclick="showLesson(13); return false;">Bootstrap Utilities</a>

<a href="#" onclick="showLesson(14); return false;">Bootstrap Icons</a>

<a href="#" onclick="showLesson(15); return false;">Bootstrap Responsive Design</a>

<a href="#" onclick="showLesson(16); return false;">Bootstrap Customization</a>

<a href="#" onclick="showLesson(17); return false;">Bootstrap Mini Projects</a>

<a href="#" onclick="showLesson(18); return false;">Bootstrap Best Practices</a>

<a href="#" onclick="showLesson(19); return false;">Bootstrap Interview Questions</a>

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
title: "Bootstrap 5 Home",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap 5 Home
            </h2>

            <p class="lead">
                <strong>Bootstrap 5</strong> is the world's most popular open-source CSS framework used to build modern, responsive, and mobile-first websites. It provides a collection of ready-to-use CSS classes, JavaScript components, and responsive layout utilities that help developers create professional websites quickly.
            </p>

            <p>
                Instead of writing large amounts of CSS from scratch, Bootstrap allows developers to use predefined classes for layouts, buttons, forms, navigation bars, cards, alerts, modals, tables, and many other user interface components.
            </p>

            <div class="alert alert-primary">
                <strong>Bootstrap 5</strong> is built using HTML, CSS, and JavaScript. It is completely free, open-source, and supported by all modern web browsers.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                What You Will Learn
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Introduction to Bootstrap 5</li>

                <li class="list-group-item">History and Evolution of Bootstrap</li>

                <li class="list-group-item">Installing Bootstrap 5</li>

                <li class="list-group-item">Bootstrap Grid System</li>

                <li class="list-group-item">Containers and Layouts</li>

                <li class="list-group-item">Typography</li>

                <li class="list-group-item">Colors and Background Utilities</li>

                <li class="list-group-item">Tables and Images</li>

                <li class="list-group-item">Buttons and Forms</li>

                <li class="list-group-item">Bootstrap Components</li>

                <li class="list-group-item">Utility Classes</li>

                <li class="list-group-item">Bootstrap Icons</li>

                <li class="list-group-item">Responsive Web Design</li>

                <li class="list-group-item">Customization Techniques</li>

                <li class="list-group-item">Mini Projects</li>

                <li class="list-group-item">Interview Questions</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Learn Bootstrap 5?
            </h2>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5 class="text-success">
                                Faster Development
                            </h5>

                            <p class="mb-0">
                                Bootstrap provides hundreds of ready-made classes that significantly reduce development time.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5 class="text-primary">
                                Responsive Design
                            </h5>

                            <p class="mb-0">
                                Websites automatically adapt to desktops, tablets, and mobile devices.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5 class="text-warning">
                                Easy to Learn
                            </h5>

                            <p class="mb-0">
                                Bootstrap uses simple class names that beginners can learn quickly.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-danger">

                        <div class="card-body">

                            <h5 class="text-danger">
                                Professional UI
                            </h5>

                            <p class="mb-0">
                                Create attractive and modern websites without designing everything from scratch.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of Bootstrap 5
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Free and open-source framework.</li>

                <li class="list-group-item">Mobile-first responsive design.</li>

                <li class="list-group-item">Large collection of reusable components.</li>

                <li class="list-group-item">Powerful Grid System.</li>

                <li class="list-group-item">Easy customization.</li>

                <li class="list-group-item">Cross-browser compatibility.</li>

                <li class="list-group-item">Built-in utility classes.</li>

                <li class="list-group-item">Large community support.</li>

                <li class="list-group-item">Well-documented framework.</li>

                <li class="list-group-item">Works perfectly with HTML, CSS, JavaScript, React, Angular, Vue, and Laravel.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Applications of Bootstrap
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Application</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Business Websites</td>

                            <td>Create professional company websites.</td>

                        </tr>

                        <tr>

                            <td>Portfolio Websites</td>

                            <td>Design personal portfolios for developers and designers.</td>

                        </tr>

                        <tr>

                            <td>Admin Dashboards</td>

                            <td>Build responsive administration panels.</td>

                        </tr>

                        <tr>

                            <td>E-commerce Websites</td>

                            <td>Create online shopping websites.</td>

                        </tr>

                        <tr>

                            <td>Blogs</td>

                            <td>Develop responsive blogging platforms.</td>

                        </tr>

                        <tr>

                            <td>Landing Pages</td>

                            <td>Create attractive marketing pages.</td>

                        </tr>

                        <tr>

                            <td>Web Applications</td>

                            <td>Develop responsive frontend interfaces.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Bootstrap 5 Features
            </h2>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>Responsive Grid</h5>

                            <p class="mb-0">
                                Powerful 12-column responsive layout system.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>Components</h5>

                            <p class="mb-0">
                                Navbar, Cards, Alerts, Carousel, Accordion, Modal, Toast, and many more.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>Utility Classes</h5>

                            <p class="mb-0">
                                Ready-made classes for spacing, colors, borders, shadows, display, flex, sizing, and positioning.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>Icons</h5>

                            <p class="mb-0">
                                Official Bootstrap Icons library with thousands of icons.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>Customization</h5>

                            <p class="mb-0">
                                Customize colors, typography, spacing, and layouts according to project requirements.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>JavaScript Plugins</h5>

                            <p class="mb-0">
                                Interactive components like Modals, Dropdowns, Collapse, Carousel, Tooltip, and Offcanvas.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Simple Bootstrap 5 Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;

&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;div class="container mt-5"&gt;

    &lt;h1 class="text-primary"&gt;
        Welcome to Bootstrap 5
    &lt;/h1&gt;

    &lt;button class="btn btn-success"&gt;
        Click Me
    &lt;/button&gt;

&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Output
            </h2>

            <div class="border rounded p-4 bg-light">

                <h1 class="text-primary">
                    Welcome to Bootstrap 5
                </h1>

                <button class="btn btn-success">
                    Click Me
                </button>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Bootstrap Versions
            </h2>

            <div class="table-responsive">

                <table class="table table-striped table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Version</th>

                            <th>Released</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Bootstrap 1</td>

                            <td>2011</td>

                        </tr>

                        <tr>

                            <td>Bootstrap 2</td>

                            <td>2012</td>

                        </tr>

                        <tr>

                            <td>Bootstrap 3</td>

                            <td>2013</td>

                        </tr>

                        <tr>

                            <td>Bootstrap 4</td>

                            <td>2018</td>

                        </tr>

                        <tr>

                            <td><strong>Bootstrap 5</strong></td>

                            <td>2021</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 is a powerful frontend framework that helps developers create responsive, mobile-first, and professional websites quickly. It includes a responsive grid system, utility classes, pre-built components, JavaScript plugins, and customization options. Learning Bootstrap greatly improves frontend development speed and is an essential skill for modern web developers.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Introduction to Bootstrap 5",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Introduction to Bootstrap 5
            </h2>

            <p class="lead">
                <strong>Bootstrap 5</strong> is a free, open-source, and mobile-first front-end framework used to build responsive and modern websites quickly. It contains a large collection of pre-designed CSS classes, JavaScript components, and responsive layout utilities that help developers create attractive user interfaces with less code.
            </p>

            <p>
                Instead of writing hundreds of lines of custom CSS, Bootstrap allows developers to use predefined classes for buttons, forms, navigation bars, cards, alerts, modals, tables, grids, and many other components. This makes web development faster, easier, and more consistent.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap 5 is a powerful front-end framework that combines HTML, CSS, and JavaScript to build responsive, mobile-first, and professional-looking websites.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use Bootstrap 5?
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Develop websites much faster.
                </li>

                <li class="list-group-item">
                    Create responsive layouts for all screen sizes.
                </li>

                <li class="list-group-item">
                    Use ready-made UI components.
                </li>

                <li class="list-group-item">
                    Reduce the amount of custom CSS code.
                </li>

                <li class="list-group-item">
                    Maintain a consistent design across the website.
                </li>

                <li class="list-group-item">
                    Save development time.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Main Features of Bootstrap 5
            </h2>

            <div class="row g-3">

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5 class="text-primary">
                                Mobile First
                            </h5>

                            <p class="mb-0">
                                Bootstrap is designed for mobile devices first and then scales up for larger screens.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5 class="text-success">
                                Responsive Grid
                            </h5>

                            <p class="mb-0">
                                Uses a 12-column responsive grid system to create flexible layouts.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5 class="text-warning">
                                Ready Components
                            </h5>

                            <p class="mb-0">
                                Includes Buttons, Cards, Navbars, Forms, Alerts, Modals, Carousels, Accordions, and much more.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-danger">

                        <div class="card-body">

                            <h5 class="text-danger">
                                Utility Classes
                            </h5>

                            <p class="mb-0">
                                Provides hundreds of utility classes for spacing, colors, borders, sizing, positioning, display, and flexbox.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-info">

                        <div class="card-body">

                            <h5 class="text-info">
                                JavaScript Components
                            </h5>

                            <p class="mb-0">
                                Interactive components such as Modal, Dropdown, Tooltip, Toast, Collapse, and Offcanvas.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-secondary">

                        <div class="card-body">

                            <h5 class="text-secondary">
                                Easy Customization
                            </h5>

                            <p class="mb-0">
                                Customize colors, spacing, typography, and layouts according to project requirements.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Technologies Used in Bootstrap
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Technology</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>HTML5</td>

                            <td>Creates the structure of web pages.</td>

                        </tr>

                        <tr>

                            <td>CSS3</td>

                            <td>Provides styling and responsive layouts.</td>

                        </tr>

                        <tr>

                            <td>JavaScript</td>

                            <td>Adds interactive components such as Modals, Dropdowns, and Carousels.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Benefits of Bootstrap 5
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Easy to learn and use.</li>

                <li class="list-group-item">Saves development time.</li>

                <li class="list-group-item">Professional user interface.</li>

                <li class="list-group-item">Cross-browser compatible.</li>

                <li class="list-group-item">Fully responsive.</li>

                <li class="list-group-item">Large community support.</li>

                <li class="list-group-item">Excellent documentation.</li>

                <li class="list-group-item">Reusable components.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Where Bootstrap is Used
            </h2>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Business Websites</li>

                                <li>Company Portals</li>

                                <li>Portfolio Websites</li>

                                <li>Blogs</li>

                                <li>Landing Pages</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>E-commerce Websites</li>

                                <li>Admin Dashboards</li>

                                <li>Educational Websites</li>

                                <li>Web Applications</li>

                                <li>Content Management Systems</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Simple Bootstrap Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="container mt-5"&gt;

    &lt;h1 class="text-primary"&gt;
        Welcome to Bootstrap 5
    &lt;/h1&gt;

    &lt;p&gt;
        Bootstrap makes web development easier.
    &lt;/p&gt;

    &lt;button class="btn btn-success"&gt;
        Get Started
    &lt;/button&gt;

&lt;/div&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Output
            </h2>

            <div class="border rounded p-4 bg-light">

                <h1 class="text-primary">
                    Welcome to Bootstrap 5
                </h1>

                <p>
                    Bootstrap makes web development easier.
                </p>

                <button class="btn btn-success">
                    Get Started
                </button>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages and Limitations
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Advantages

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Fast development.</li>

                                <li>Responsive design.</li>

                                <li>Reusable components.</li>

                                <li>Cross-browser compatibility.</li>

                                <li>Easy customization.</li>

                                <li>Excellent documentation.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Limitations

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Many Bootstrap websites may look similar without customization.</li>

                                <li>Extra CSS may be loaded if only a few components are used.</li>

                                <li>Requires learning Bootstrap class names.</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 is a modern front-end framework that helps developers create responsive, mobile-friendly, and professional websites with less effort. It provides a powerful grid system, reusable components, utility classes, and JavaScript plugins, making it one of the most popular frameworks for frontend web development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "History of Bootstrap",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                History of Bootstrap
            </h2>

            <p class="lead">
                <strong>Bootstrap</strong> is one of the most popular front-end frameworks used for creating responsive and modern websites. It was originally developed to solve common problems faced by web developers while designing consistent and responsive user interfaces.
            </p>

            <p>
                Bootstrap provides ready-made CSS classes, JavaScript components, and a powerful grid system that allows developers to build websites faster without writing everything from scratch.
            </p>

            <div class="alert alert-info">

                <strong>Bootstrap 5:</strong>
                Bootstrap has evolved from a simple internal tool into a complete front-end framework used by millions of developers worldwide.

            </div>

            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Beginning of Bootstrap
            </h2>

            <p>
                Bootstrap was created by two developers at Twitter:
            </p>

            <ul class="list-group mb-3">

                <li class="list-group-item">
                    <strong>Mark Otto</strong> - Designer at Twitter
                </li>

                <li class="list-group-item">
                    <strong>Jacob Thornton</strong> - Developer at Twitter
                </li>

            </ul>

            <p>
                In 2011, they developed Bootstrap as an internal framework to create consistent designs and reusable components across Twitter's applications.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Timeline
            </h2>


            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Version</th>

                            <th>Year</th>

                            <th>Description</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Bootstrap 1</td>

                            <td>2011</td>

                            <td>
                                The first version of Bootstrap was released as an open-source project.
                            </td>

                        </tr>


                        <tr>

                            <td>Bootstrap 2</td>

                            <td>2012</td>

                            <td>
                                Added responsive design support and improved components.
                            </td>

                        </tr>


                        <tr>

                            <td>Bootstrap 3</td>

                            <td>2013</td>

                            <td>
                                Introduced mobile-first design and a completely redesigned framework.
                            </td>

                        </tr>


                        <tr>

                            <td>Bootstrap 4</td>

                            <td>2018</td>

                            <td>
                                Introduced Flexbox, improved grid system, utilities, and customization options.
                            </td>

                        </tr>


                        <tr>

                            <td>Bootstrap 5</td>

                            <td>2021</td>

                            <td>
                                Removed jQuery dependency, improved JavaScript components, enhanced utilities, and added better customization.
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 1
            </h2>

            <p>
                The first version of Bootstrap was released in August 2011. It included basic CSS styles, buttons, forms, tables, and layout components.
            </p>

            <p>
                Its main purpose was to create a consistent design system for web applications.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 2
            </h2>

            <p>
                Bootstrap 2 introduced many improvements, especially responsive design features.
            </p>

            <ul>

                <li>Responsive layouts were introduced.</li>

                <li>New components were added.</li>

                <li>Improved documentation.</li>

                <li>Better browser support.</li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 3
            </h2>

            <p>
                Bootstrap 3 was a major update that focused on mobile-first development.
            </p>

            <h5>
                Important Features:
            </h5>

            <ul class="list-group">

                <li class="list-group-item">
                    Mobile-first approach.
                </li>

                <li class="list-group-item">
                    New responsive grid system.
                </li>

                <li class="list-group-item">
                    Flat design style.
                </li>

                <li class="list-group-item">
                    Better support for smartphones and tablets.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 4
            </h2>

            <p>
                Bootstrap 4 introduced modern web development features and improved flexibility.
            </p>

            <div class="row g-3">


                <div class="col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5 class="text-primary">
                                Flexbox Support
                            </h5>

                            <p>
                                Bootstrap 4 replaced older layout techniques with CSS Flexbox.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5 class="text-success">
                                Improved Grid
                            </h5>

                            <p>
                                More powerful responsive grid system.
                            </p>

                        </div>

                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 5
            </h2>

            <p>
                Bootstrap 5 is the latest major version of Bootstrap. It was released in 2021 with many improvements and modern features.
            </p>


            <h5>
                Major Changes in Bootstrap 5:
            </h5>


            <ul class="list-group">


                <li class="list-group-item">
                    Removed dependency on jQuery.
                </li>


                <li class="list-group-item">
                    Improved JavaScript components.
                </li>


                <li class="list-group-item">
                    Added new utility classes.
                </li>


                <li class="list-group-item">
                    Improved customization using CSS variables.
                </li>


                <li class="list-group-item">
                    Added better responsive features.
                </li>


                <li class="list-group-item">
                    Added Bootstrap Icons support.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Bootstrap Became Popular?
            </h2>


            <div class="row g-3">


                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>
                                Easy Development
                            </h5>

                            <p>
                                Developers can create professional websites quickly using predefined classes.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>
                                Responsive Design
                            </h5>

                            <p>
                                Websites automatically adjust to different screen sizes.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-lg-4 col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>
                                Large Community
                            </h5>

                            <p>
                                Millions of developers use and support Bootstrap.
                            </p>

                        </div>

                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Today
            </h2>

            <p>
                Today, Bootstrap is widely used by developers, companies, startups, and organizations to build responsive websites and web applications.
            </p>


            <p>
                It works perfectly with modern technologies such as:
            </p>


            <ul>

                <li>HTML5</li>

                <li>CSS3</li>

                <li>JavaScript</li>

                <li>Laravel</li>

                <li>React</li>

                <li>Angular</li>

                <li>Vue.js</li>

            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">

                    Bootstrap started as an internal Twitter project in 2011 and became one of the world's most popular front-end frameworks. Over the years, Bootstrap improved from basic CSS components to a complete responsive framework. Bootstrap 5 provides modern tools, better performance, improved customization, and powerful components for building professional websites.

                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Installing Bootstrap 5",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Installing Bootstrap 5
            </h2>

            <p class="lead">
                <strong>Bootstrap 5</strong> can be added to a website in different ways. Developers can install Bootstrap using a CDN, download Bootstrap files, or install it using package managers like npm.
            </p>

            <p>
                Before using Bootstrap components and utilities, we need to include Bootstrap's CSS and JavaScript files in our HTML project.
            </p>

            <div class="alert alert-info">

                <strong>Note:</strong>
                Bootstrap 5 does not require jQuery. It uses modern JavaScript for interactive components.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Methods to Install Bootstrap 5
            </h2>


            <div class="row g-3">


                <div class="col-md-4">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5 class="text-primary">
                                1. CDN Method
                            </h5>

                            <p>
                                Use Bootstrap files directly from a Content Delivery Network.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5 class="text-success">
                                2. Download Method
                            </h5>

                            <p>
                                Download Bootstrap files and store them inside your project.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5 class="text-warning">
                                3. npm Installation
                            </h5>

                            <p>
                                Install Bootstrap using Node Package Manager for advanced projects.
                            </p>

                        </div>

                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Method 1: Installing Bootstrap 5 Using CDN
            </h2>


            <p>
                The easiest way to use Bootstrap is by adding CDN links inside your HTML file.
            </p>


            <h5>
                Bootstrap CSS CDN
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
rel="stylesheet"&gt;
</code></pre>

            </div>


            <h5 class="mt-4">
                Bootstrap JavaScript CDN
            </h5>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"&gt;
&lt;/script&gt;
</code></pre>

            </div>


            <p class="mt-3">
                The JavaScript bundle includes Bootstrap's JavaScript plugins such as:
            </p>


            <ul class="list-group">


                <li class="list-group-item">
                    Modal
                </li>


                <li class="list-group-item">
                    Dropdown
                </li>


                <li class="list-group-item">
                    Carousel
                </li>


                <li class="list-group-item">
                    Tooltip
                </li>


                <li class="list-group-item">
                    Collapse
                </li>


                <li class="list-group-item">
                    Offcanvas
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Complete Bootstrap 5 HTML Template
            </h2>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;

&lt;html lang="en"&gt;

&lt;head&gt;

    &lt;meta charset="UTF-8"&gt;

    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;

    &lt;title&gt;Bootstrap 5 Website&lt;/title&gt;


    &lt;!-- Bootstrap CSS --&gt;

    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"&gt;


&lt;/head&gt;


&lt;body&gt;


    &lt;div class="container mt-5"&gt;

        &lt;h1 class="text-primary"&gt;
            My Bootstrap Website
        &lt;/h1&gt;


        &lt;button class="btn btn-success"&gt;
            Click Me
        &lt;/button&gt;

    &lt;/div&gt;



    &lt;!-- Bootstrap JavaScript --&gt;

    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"&gt;
    &lt;/script&gt;


&lt;/body&gt;

&lt;/html&gt;
</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Method 2: Download Bootstrap Files
            </h2>


            <p>
                Another method is downloading Bootstrap files from the official website and adding them manually to your project.
            </p>


            <h5>
                Project Structure:
            </h5>


            <div class="bg-light border rounded p-3">


<pre><code>
Project Folder

│
├── index.html
│
├── css
│   └── bootstrap.min.css
│
└── js
    └── bootstrap.bundle.min.js

</code></pre>


            </div>


            <p class="mt-3">
                Then connect the files in your HTML page:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>&lt;link rel="stylesheet" href="css/bootstrap.min.css"&gt;


&lt;script src="js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
</code></pre>


            </div>



            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Method 3: Installing Bootstrap Using npm
            </h2>


            <p>
                npm is commonly used in professional projects with frameworks like React, Angular, Vue, and Laravel.
            </p>


            <h5>
                Install Bootstrap:
            </h5>


            <div class="bg-dark text-white rounded p-3">


<pre class="mb-0"><code>npm install bootstrap
</code></pre>


            </div>


            <p class="mt-3">
                After installation, Bootstrap files become available inside the node_modules folder.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap 5 Requirements
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>Requirement</th>

                            <th>Description</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>HTML5</td>

                            <td>
                                Used to create webpage structure.
                            </td>

                        </tr>


                        <tr>

                            <td>CSS3</td>

                            <td>
                                Used for styling and customization.
                            </td>

                        </tr>


                        <tr>

                            <td>JavaScript</td>

                            <td>
                                Required for interactive Bootstrap components.
                            </td>

                        </tr>


                        <tr>

                            <td>Modern Browser</td>

                            <td>
                                Chrome, Firefox, Edge, Safari, etc.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Advantages of CDN Installation
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Very easy to setup.
                </li>


                <li class="list-group-item">
                    No downloading required.
                </li>


                <li class="list-group-item">
                    Faster loading through cached files.
                </li>


                <li class="list-group-item">
                    Best for beginners.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practice
            </h2>


            <div class="alert alert-success">

                <ul class="mb-0">

                    <li>
                        Use CDN for learning and small projects.
                    </li>

                    <li>
                        Use npm for professional applications.
                    </li>

                    <li>
                        Always use the latest stable Bootstrap version.
                    </li>

                    <li>
                        Include the viewport meta tag for responsive design.
                    </li>

                </ul>

            </div>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 can be installed using CDN, downloaded files, or npm. CDN is the easiest method for beginners, while npm is preferred for professional development. After installation, developers can use Bootstrap's powerful grid system, components, and utilities to build responsive websites quickly.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Grid System",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Grid System
            </h2>

            <p class="lead">
                The <strong>Bootstrap Grid System</strong> is one of the most important features of Bootstrap 5. It is used to create responsive website layouts that automatically adjust according to different screen sizes such as desktops, tablets, and mobile devices.
            </p>

            <p>
                Bootstrap uses a <strong>12-column grid system</strong> based on CSS Flexbox. Developers can divide a webpage into different sections by using rows and columns.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Grid System is a responsive layout system that allows developers to arrange webpage content using rows and columns.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Grid System?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Create responsive layouts easily.
                </li>

                <li class="list-group-item">
                    Automatically adjust content for different devices.
                </li>

                <li class="list-group-item">
                    Reduce custom CSS writing.
                </li>

                <li class="list-group-item">
                    Create professional website structures.
                </li>

                <li class="list-group-item">
                    Works perfectly with mobile-first design.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Structure of Bootstrap Grid
            </h2>


            <p>
                Bootstrap Grid follows this structure:
            </p>


            <div class="bg-light border rounded p-3">

<pre><code>
Container

    └── Row

          └── Column

</code></pre>

            </div>


            <p class="mt-3">
                Example:
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>
&lt;div class="container"&gt;

    &lt;div class="row"&gt;

        &lt;div class="col"&gt;
            Column 1
        &lt;/div&gt;


        &lt;div class="col"&gt;
            Column 2
        &lt;/div&gt;

    &lt;/div&gt;

&lt;/div&gt;

</code></pre>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Grid Components
            </h2>


            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Component</th>

                            <th>Description</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>Container</td>

                            <td>
                                Creates the main layout wrapper.
                            </td>

                        </tr>


                        <tr>

                            <td>Row</td>

                            <td>
                                Creates a horizontal group of columns.
                            </td>

                        </tr>


                        <tr>

                            <td>Column</td>

                            <td>
                                Defines the width of content.
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                The 12 Column System
            </h2>


            <p>
                Bootstrap divides every row into 12 equal columns.
            </p>


            <div class="row text-center g-2">


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        1
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        2
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        3
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        4
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        5
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        6
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        7
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        8
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        9
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        10
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        11
                    </div>

                </div>


                <div class="col-1">

                    <div class="border rounded p-2 bg-light">
                        12
                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Column Classes
            </h2>


            <p>
                Bootstrap provides different column classes based on screen sizes.
            </p>


            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Class</th>

                            <th>Screen Size</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                col-
                            </td>

                            <td>
                                Extra small devices
                            </td>

                        </tr>


                        <tr>

                            <td>
                                col-sm-
                            </td>

                            <td>
                                Small devices (576px and above)
                            </td>

                        </tr>


                        <tr>

                            <td>
                                col-md-
                            </td>

                            <td>
                                Medium devices (768px and above)
                            </td>

                        </tr>


                        <tr>

                            <td>
                                col-lg-
                            </td>

                            <td>
                                Large devices (992px and above)
                            </td>

                        </tr>


                        <tr>

                            <td>
                                col-xl-
                            </td>

                            <td>
                                Extra large devices (1200px and above)
                            </td>

                        </tr>


                        <tr>

                            <td>
                                col-xxl-
                            </td>

                            <td>
                                Extra extra large devices (1400px and above)
                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Grid Example
            </h2>


            <p>
                This example creates three columns that become responsive on different devices.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>
&lt;div class="container"&gt;

    &lt;div class="row"&gt;


        &lt;div class="col-md-4"&gt;

            Box 1

        &lt;/div&gt;


        &lt;div class="col-md-4"&gt;

            Box 2

        &lt;/div&gt;


        &lt;div class="col-md-4"&gt;

            Box 3

        &lt;/div&gt;


    &lt;/div&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <h3 class="mt-4">
                Output
            </h3>


            <div class="row g-3">


                <div class="col-md-4">

                    <div class="border rounded p-3 text-center">
                        Box 1
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="border rounded p-3 text-center">
                        Box 2
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="border rounded p-3 text-center">
                        Box 3
                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Nested Grid
            </h2>


            <p>
                Bootstrap allows placing another grid inside an existing column.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="row"&gt;

    &lt;div class="col-md-8"&gt;


        Main Column


        &lt;div class="row"&gt;

            &lt;div class="col"&gt;
                Nested Column
            &lt;/div&gt;


            &lt;div class="col"&gt;
                Nested Column
            &lt;/div&gt;


        &lt;/div&gt;


    &lt;/div&gt;


&lt;/div&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Grid Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always use container, row, and column structure.
                </li>


                <li class="list-group-item">
                    Use responsive classes for different devices.
                </li>


                <li class="list-group-item">
                    Avoid creating more than 12 columns in one row.
                </li>


                <li class="list-group-item">
                    Use proper spacing utilities with grid layouts.
                </li>


                <li class="list-group-item">
                    Test layouts on multiple screen sizes.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap Grid System is a powerful 12-column responsive layout system based on Flexbox. It helps developers create flexible and mobile-friendly designs using containers, rows, and columns. By using responsive column classes, websites can automatically adjust to desktops, tablets, and mobile devices.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Containers",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Containers
            </h2>

            <p class="lead">
                <strong>Bootstrap Containers</strong> are one of the most important layout components in Bootstrap 5. Containers are used to wrap and organize website content and provide proper spacing and alignment.
            </p>

            <p>
                A container creates a responsive fixed-width or full-width layout area where rows and columns can be placed. Bootstrap containers automatically adjust their width according to different screen sizes.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                A Bootstrap Container is a responsive wrapper element that provides horizontal padding and controls the width of webpage content.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Containers?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Provides proper alignment for website content.
                </li>

                <li class="list-group-item">
                    Creates responsive layouts.
                </li>

                <li class="list-group-item">
                    Adds automatic left and right spacing.
                </li>

                <li class="list-group-item">
                    Works perfectly with the Bootstrap Grid System.
                </li>

                <li class="list-group-item">
                    Makes websites look professional.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Types of Bootstrap Containers
            </h2>


            <p>
                Bootstrap 5 provides three main types of containers:
            </p>


            <div class="row g-3">


                <div class="col-md-4">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5 class="text-primary">
                                1. .container
                            </h5>

                            <p>
                                Creates a responsive fixed-width container that changes width at different breakpoints.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5 class="text-success">
                                2. .container-fluid
                            </h5>

                            <p>
                                Creates a full-width container that covers 100% of the available screen width.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5 class="text-warning">
                                3. Responsive Containers
                            </h5>

                            <p>
                                Creates containers that become fixed-width at specific breakpoints.
                            </p>

                        </div>

                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                1. Fixed Container (.container)
            </h2>


            <p>
                The <strong>.container</strong> class provides a responsive fixed-width layout.
            </p>


            <p>
                Its width changes automatically according to screen size.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>
&lt;div class="container"&gt;

    &lt;h1&gt;
        Fixed Container
    &lt;/h1&gt;

    &lt;p&gt;
        This content is inside a responsive container.
    &lt;/p&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="container border rounded p-3 bg-light">

                <h3>
                    Fixed Container
                </h3>

                <p>
                    This content is inside a responsive container.
                </p>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                2. Full Width Container (.container-fluid)
            </h2>


            <p>
                The <strong>.container-fluid</strong> class creates a full-width layout that uses the complete available screen width.
            </p>


            <p>
                It is commonly used for:
            </p>


            <ul>

                <li>Navigation bars</li>

                <li>Hero sections</li>

                <li>Full-width banners</li>

                <li>Dashboard layouts</li>

            </ul>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>
&lt;div class="container-fluid"&gt;

    &lt;h1&gt;
        Full Width Container
    &lt;/h1&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="container-fluid border rounded p-3 bg-light">

                <h3>
                    Full Width Container
                </h3>

                <p>
                    This container uses the complete width.
                </p>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Containers
            </h2>


            <p>
                Bootstrap 5 provides breakpoint-based containers.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>Class</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                .container-sm
                            </td>

                            <td>
                                Fixed width on small devices and above.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                .container-md
                            </td>

                            <td>
                                Fixed width on medium devices and above.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                .container-lg
                            </td>

                            <td>
                                Fixed width on large devices and above.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                .container-xl
                            </td>

                            <td>
                                Fixed width on extra-large devices and above.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                .container-xxl
                            </td>

                            <td>
                                Fixed width on very large screens.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Container With Grid System
            </h2>


            <p>
                Containers are usually combined with rows and columns.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>

&lt;div class="container"&gt;


    &lt;div class="row"&gt;


        &lt;div class="col-md-6"&gt;

            Left Column

        &lt;/div&gt;


        &lt;div class="col-md-6"&gt;

            Right Column

        &lt;/div&gt;


    &lt;/div&gt;


&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="container">

                <div class="row g-3">


                    <div class="col-md-6">

                        <div class="border rounded p-3 text-center">

                            Left Column

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="border rounded p-3 text-center">

                            Right Column

                        </div>

                    </div>


                </div>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Difference Between Container and Container-fluid
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>.container</th>

                            <th>.container-fluid</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                Fixed responsive width.
                            </td>

                            <td>
                                Full 100% width.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Used for normal webpage content.
                            </td>

                            <td>
                                Used for full-width sections.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Has maximum width limits.
                            </td>

                            <td>
                                Uses complete available space.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always use containers before rows.
                </li>


                <li class="list-group-item">
                    Use .container for normal page layouts.
                </li>


                <li class="list-group-item">
                    Use .container-fluid for full-width designs.
                </li>


                <li class="list-group-item">
                    Combine containers with Bootstrap Grid.
                </li>


                <li class="list-group-item">
                    Test layouts on mobile devices.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap Containers are essential layout tools used to organize webpage content. Bootstrap 5 provides fixed containers, fluid containers, and responsive containers. Containers work together with rows and columns to create clean, responsive, and professional website layouts.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Typography",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Typography
            </h2>

            <p class="lead">
                <strong>Bootstrap Typography</strong> provides ready-made classes to style and control text content in websites. It helps developers create beautiful headings, paragraphs, lists, and text layouts without writing custom CSS.
            </p>

            <p>
                Bootstrap 5 includes default typography styles based on modern web design principles. It provides classes for font sizes, font weights, alignment, colors, display headings, and text formatting.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Typography is a collection of CSS classes used to style text elements such as headings, paragraphs, links, and lists.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Typography?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Create professional-looking text easily.
                </li>

                <li class="list-group-item">
                    Maintain consistent font styles.
                </li>

                <li class="list-group-item">
                    Improve readability.
                </li>

                <li class="list-group-item">
                    Reduce custom CSS code.
                </li>

                <li class="list-group-item">
                    Make responsive text layouts.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Headings
            </h2>


            <p>
                Bootstrap provides default styling for HTML heading elements from 
                <strong>h1</strong> to <strong>h6</strong>.
            </p>


            <div class="border rounded p-3 bg-light">


                <h1>
                    Heading 1
                </h1>

                <h2>
                    Heading 2
                </h2>

                <h3>
                    Heading 3
                </h3>

                <h4>
                    Heading 4
                </h4>

                <h5>
                    Heading 5
                </h5>

                <h6>
                    Heading 6
                </h6>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Display Headings
            </h2>


            <p>
                Bootstrap provides larger heading styles using display classes.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>
&lt;h1 class="display-1"&gt;
    Display Heading
&lt;/h1&gt;

&lt;h1 class="display-4"&gt;
    Display Heading
&lt;/h1&gt;

</code></pre>

            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="border rounded p-3 bg-light">

                <h1 class="display-1">
                    Display 1
                </h1>

                <h1 class="display-4">
                    Display 4
                </h1>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Paragraphs
            </h2>


            <p>
                Bootstrap automatically styles paragraph elements with proper spacing and font size.
            </p>


            <div class="bg-dark text-white rounded p-3">

<pre><code>
&lt;p&gt;
This is a normal paragraph.
&lt;/p&gt;


&lt;p class="lead"&gt;
This is a highlighted paragraph.
&lt;/p&gt;

</code></pre>

            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="border rounded p-3">


                <p>
                    This is a normal paragraph.
                </p>


                <p class="lead">
                    This is a highlighted paragraph.
                </p>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Text Alignment Classes
            </h2>


            <p>
                Bootstrap provides classes to control text alignment.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>Class</th>

                            <th>Description</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                text-start
                            </td>

                            <td>
                                Align text to left.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                text-center
                            </td>

                            <td>
                                Center align text.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                text-end
                            </td>

                            <td>
                                Align text to right.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Text Alignment Example
            </h2>


            <div class="row g-3">


                <div class="col-md-4">

                    <div class="border rounded p-3 text-start">

                        Left Text

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="border rounded p-3 text-center">

                        Center Text

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="border rounded p-3 text-end">

                        Right Text

                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Font Weight Classes
            </h2>


            <p>
                Bootstrap provides classes to control font thickness.
            </p>


            <div class="bg-dark text-white rounded p-3">

<pre><code>
fw-bold

fw-normal

fw-light

</code></pre>

            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div class="border rounded p-3">


                <p class="fw-bold">
                    Bold Text
                </p>


                <p class="fw-normal">
                    Normal Text
                </p>


                <p class="fw-light">
                    Light Text
                </p>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Text Transformation
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>Class</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                text-uppercase
                            </td>

                            <td>
                                Converts text to uppercase.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                text-lowercase
                            </td>

                            <td>
                                Converts text to lowercase.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                text-capitalize
                            </td>

                            <td>
                                Capitalizes first letter.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Text Decoration
            </h2>


            <p>
                Bootstrap provides classes to remove or add text decorations.
            </p>


            <div class="bg-dark text-white rounded p-3">

<pre><code>
text-decoration-none

text-decoration-underline

</code></pre>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Lists
            </h2>


            <p>
                Bootstrap improves the appearance of lists using utility classes.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;ul class="list-unstyled"&gt;

    &lt;li&gt;HTML&lt;/li&gt;

    &lt;li&gt;CSS&lt;/li&gt;

    &lt;li&gt;Bootstrap&lt;/li&gt;

&lt;/ul&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <ul class="list-unstyled border rounded p-3">

                <li>HTML</li>

                <li>CSS</li>

                <li>Bootstrap</li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Typography
            </h2>


            <p>
                Bootstrap 5 supports responsive text sizes using responsive utility classes.
            </p>


            <div class="bg-dark text-white rounded p-3">

<pre><code>
&lt;h1 class="display-4"&gt;
Responsive Heading
&lt;/h1&gt;

</code></pre>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use proper heading hierarchy.
                </li>


                <li class="list-group-item">
                    Avoid using too many large headings.
                </li>


                <li class="list-group-item">
                    Use text utilities instead of custom CSS whenever possible.
                </li>


                <li class="list-group-item">
                    Keep text readable on mobile devices.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap Typography provides powerful classes for creating beautiful and responsive text designs. Developers can easily style headings, paragraphs, alignment, font weight, lists, and text formatting using Bootstrap's built-in utility classes.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Colors & Backgrounds",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Colors & Backgrounds
            </h2>

            <p class="lead">
                <strong>Bootstrap 5 Colors & Backgrounds</strong> provide ready-made utility classes to apply colors, backgrounds, borders, and visual styles to HTML elements without writing custom CSS.
            </p>

            <p>
                Bootstrap includes a predefined color system that helps developers create attractive and consistent user interfaces quickly.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Color Utilities are CSS classes used to apply text colors, background colors, and other color-related styles to webpage elements.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Colors?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Quickly apply colors without writing CSS.
                </li>

                <li class="list-group-item">
                    Maintain consistent design throughout a website.
                </li>

                <li class="list-group-item">
                    Improve user interface appearance.
                </li>

                <li class="list-group-item">
                    Create alerts, buttons, cards, and sections easily.
                </li>

                <li class="list-group-item">
                    Support responsive and modern designs.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Theme Colors
            </h2>


            <p>
                Bootstrap 5 provides several predefined theme colors.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>Color</th>

                            <th>Class Name</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>Primary</td>

                            <td>
                                text-primary
                            </td>

                            <td>
                                Main theme color.
                            </td>

                        </tr>


                        <tr>

                            <td>Secondary</td>

                            <td>
                                text-secondary
                            </td>

                            <td>
                                Secondary information.
                            </td>

                        </tr>


                        <tr>

                            <td>Success</td>

                            <td>
                                text-success
                            </td>

                            <td>
                                Successful operations.
                            </td>

                        </tr>


                        <tr>

                            <td>Danger</td>

                            <td>
                                text-danger
                            </td>

                            <td>
                                Errors and warnings.
                            </td>

                        </tr>


                        <tr>

                            <td>Warning</td>

                            <td>
                                text-warning
                            </td>

                            <td>
                                Important notices.
                            </td>

                        </tr>


                        <tr>

                            <td>Info</td>

                            <td>
                                text-info
                            </td>

                            <td>
                                Information messages.
                            </td>

                        </tr>


                        <tr>

                            <td>Light</td>

                            <td>
                                text-light
                            </td>

                            <td>
                                Light color.
                            </td>

                        </tr>


                        <tr>

                            <td>Dark</td>

                            <td>
                                text-dark
                            </td>

                            <td>
                                Dark text.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Text Colors
            </h2>


            <p>
                The <strong>text-*</strong> classes are used to change text colors.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre class="mb-0"><code>
&lt;p class="text-primary"&gt;
Primary Text
&lt;/p&gt;


&lt;p class="text-success"&gt;
Success Text
&lt;/p&gt;


&lt;p class="text-danger"&gt;
Danger Text
&lt;/p&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="border rounded p-3">


                <p class="text-primary">
                    Primary Text
                </p>


                <p class="text-success">
                    Success Text
                </p>


                <p class="text-danger">
                    Danger Text
                </p>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Background Colors
            </h2>


            <p>
                Background utility classes use the prefix <strong>bg-*</strong>.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="bg-primary text-white"&gt;

Primary Background

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="p-3 bg-primary text-white rounded mb-2">

                Primary Background

            </div>


            <div class="p-3 bg-success text-white rounded mb-2">

                Success Background

            </div>


            <div class="p-3 bg-danger text-white rounded">

                Danger Background

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Background Color Classes
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>Class</th>

                            <th>Result</th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                bg-primary
                            </td>

                            <td>
                                Blue background.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bg-success
                            </td>

                            <td>
                                Green background.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bg-danger
                            </td>

                            <td>
                                Red background.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bg-warning
                            </td>

                            <td>
                                Yellow background.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bg-dark
                            </td>

                            <td>
                                Dark background.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bg-light
                            </td>

                            <td>
                                Light background.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Background Gradient
            </h2>


            <p>
                Bootstrap 5 supports gradient backgrounds using the <strong>bg-gradient</strong> class.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="bg-primary bg-gradient text-white"&gt;

Gradient Background

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div class="p-3 bg-primary bg-gradient text-white rounded">

                Gradient Background

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Opacity Classes
            </h2>


            <p>
                Bootstrap allows controlling transparency using opacity utilities.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
opacity-25

opacity-50

opacity-75

opacity-100

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Color With Buttons
            </h2>


            <p>
                Bootstrap buttons use color classes.
            </p>


            <div class="d-flex flex-wrap gap-2">


                <button class="btn btn-primary">
                    Primary
                </button>


                <button class="btn btn-success">
                    Success
                </button>


                <button class="btn btn-danger">
                    Danger
                </button>


                <button class="btn btn-warning">
                    Warning
                </button>


                <button class="btn btn-dark">
                    Dark
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Color Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use colors consistently throughout your website.
                </li>


                <li class="list-group-item">
                    Choose colors that improve readability.
                </li>


                <li class="list-group-item">
                    Avoid using too many colors.
                </li>


                <li class="list-group-item">
                    Use Bootstrap theme colors for professional designs.
                </li>


                <li class="list-group-item">
                    Always consider accessibility and contrast.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 Color and Background utilities make it easy to style websites using predefined classes. Developers can quickly apply text colors, background colors, gradients, and opacity effects to create attractive and responsive user interfaces without writing custom CSS.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Tables",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Tables
            </h2>

            <p class="lead">
                <strong>Bootstrap Tables</strong> provide predefined classes to create beautiful, responsive, and well-formatted tables. Bootstrap makes it easier to display data such as records, reports, product lists, user information, and other structured information.
            </p>

            <p>
                Bootstrap 5 improves normal HTML tables by adding styles, borders, colors, hover effects, and responsive behavior using simple utility classes.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Tables are styled HTML tables that use Bootstrap classes to create attractive and responsive data presentations.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Tables?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Create professional-looking tables quickly.
                </li>

                <li class="list-group-item">
                    Add borders and colors easily.
                </li>

                <li class="list-group-item">
                    Make tables responsive on mobile devices.
                </li>

                <li class="list-group-item">
                    Improve data readability.
                </li>

                <li class="list-group-item">
                    Reduce custom CSS code.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Bootstrap Table
            </h2>


            <p>
                The basic Bootstrap table uses the <strong>.table</strong> class.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>
&lt;table class="table"&gt;

    &lt;thead&gt;

        &lt;tr&gt;

            &lt;th&gt;Name&lt;/th&gt;

            &lt;th&gt;Email&lt;/th&gt;

        &lt;/tr&gt;

    &lt;/thead&gt;


    &lt;tbody&gt;

        &lt;tr&gt;

            &lt;td&gt;Ali&lt;/td&gt;

            &lt;td&gt;ali@example.com&lt;/td&gt;

        &lt;/tr&gt;

    &lt;/tbody&gt;


&lt;/table&gt;

</code></pre>

            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="table-responsive">


                <table class="table">

                    <thead>

                        <tr>

                            <th>Name</th>

                            <th>Email</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                Ali
                            </td>

                            <td>
                                ali@example.com
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Table Classes
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>Class</th>

                            <th>Description</th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                table
                            </td>

                            <td>
                                Creates a basic Bootstrap table.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                table-striped
                            </td>

                            <td>
                                Adds alternate row colors.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                table-bordered
                            </td>

                            <td>
                                Adds borders around table cells.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                table-hover
                            </td>

                            <td>
                                Adds hover effect on rows.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                table-dark
                            </td>

                            <td>
                                Creates dark colored table.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Striped Rows Table
            </h2>


            <p>
                The <strong>table-striped</strong> class adds different background colors to alternate rows.
            </p>


            <div class="bg-dark text-white rounded p-3">

<pre><code>
&lt;table class="table table-striped"&gt;

&lt;/table&gt;

</code></pre>

            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div class="table-responsive">

                <table class="table table-striped">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Name</th>

                            <th>Course</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                1
                            </td>

                            <td>
                                Ahmed
                            </td>

                            <td>
                                HTML
                            </td>

                        </tr>


                        <tr>

                            <td>
                                2
                            </td>

                            <td>
                                Hassan
                            </td>

                            <td>
                                CSS
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bordered Table
            </h2>


            <p>
                The <strong>table-bordered</strong> class adds borders to all table cells.
            </p>


            <div class="table-responsive">

                <table class="table table-bordered">

                    <tr>

                        <th>
                            Product
                        </th>

                        <th>
                            Price
                        </th>

                    </tr>


                    <tr>

                        <td>
                            Laptop
                        </td>

                        <td>
                            $500
                        </td>

                    </tr>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Hoverable Rows
            </h2>


            <p>
                The <strong>table-hover</strong> class highlights rows when the user moves the mouse over them.
            </p>


            <div class="table-responsive">


                <table class="table table-hover">

                    <thead>

                        <tr>

                            <th>
                                User
                            </th>

                            <th>
                                Status
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                John
                            </td>

                            <td>
                                Active
                            </td>

                        </tr>


                        <tr>

                            <td>
                                David
                            </td>

                            <td>
                                Offline
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Colored Tables
            </h2>


            <p>
                Bootstrap allows applying background colors to tables.
            </p>


            <div class="table-responsive">


                <table class="table table-success">

                    <thead>

                        <tr>

                            <th>
                                Name
                            </th>

                            <th>
                                Result
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                Ahmed
                            </td>

                            <td>
                                Passed
                            </td>

                        </tr>

                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Tables
            </h2>


            <p>
                Large tables may not fit on small screens. Bootstrap provides the <strong>table-responsive</strong> class to make tables scroll horizontally on mobile devices.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="table-responsive"&gt;

    &lt;table class="table"&gt;

        ...

    &lt;/table&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Table Sizes
            </h2>


            <p>
                Bootstrap provides different table sizes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                table-sm
                            </td>

                            <td>
                                Creates smaller tables.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                table
                            </td>

                            <td>
                                Normal table size.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Complete Example
            </h2>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre><code>
&lt;div class="table-responsive"&gt;


&lt;table class="table table-striped table-bordered"&gt;


&lt;thead class="table-dark"&gt;

&lt;tr&gt;

&lt;th&gt;ID&lt;/th&gt;

&lt;th&gt;Name&lt;/th&gt;

&lt;th&gt;Department&lt;/th&gt;

&lt;/tr&gt;


&lt;/thead&gt;


&lt;tbody&gt;


&lt;tr&gt;

&lt;td&gt;1&lt;/td&gt;

&lt;td&gt;Ali&lt;/td&gt;

&lt;td&gt;IT&lt;/td&gt;

&lt;/tr&gt;


&lt;/tbody&gt;


&lt;/table&gt;


&lt;/div&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always use table-responsive for large tables.
                </li>


                <li class="list-group-item">
                    Use table-striped for better readability.
                </li>


                <li class="list-group-item">
                    Use table-hover for interactive designs.
                </li>


                <li class="list-group-item">
                    Keep table data organized and simple.
                </li>


                <li class="list-group-item">
                    Avoid putting too much information in one table.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap Tables provide powerful classes to create attractive, responsive, and user-friendly data tables. With classes like table-striped, table-bordered, table-hover, and table-responsive, developers can easily design professional tables without writing custom CSS.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Images",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Images
            </h2>

            <p class="lead">
                <strong>Bootstrap Images</strong> provide ready-made classes to style images and make them responsive, rounded, and visually attractive without writing custom CSS.
            </p>

            <p>
                In modern websites, images must adjust according to different screen sizes. Bootstrap 5 provides image utility classes that help developers create mobile-friendly and professional image layouts.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Image utilities are predefined CSS classes used to control image size, responsiveness, borders, and appearance.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Images?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Make images responsive on all devices.
                </li>

                <li class="list-group-item">
                    Add rounded corners easily.
                </li>

                <li class="list-group-item">
                    Create circular profile images.
                </li>

                <li class="list-group-item">
                    Improve website design.
                </li>

                <li class="list-group-item">
                    Reduce custom CSS code.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Images
            </h2>


            <p>
                The <strong>.img-fluid</strong> class makes images responsive.
            </p>


            <p>
                It applies:
            </p>


            <ul>

                <li>
                    max-width: 100%
                </li>

                <li>
                    height: auto
                </li>

            </ul>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre><code>
&lt;img src="image.jpg" 
class="img-fluid" 
alt="Responsive Image"&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <div class="border rounded p-3 text-center">

                <img src="https://via.placeholder.com/500"
                class="img-fluid rounded"
                alt="Responsive Image">

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Image Shapes
            </h2>


            <p>
                Bootstrap provides classes to change image shapes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Description
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                rounded
                            </td>

                            <td>
                                Adds rounded corners.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                rounded-circle
                            </td>

                            <td>
                                Creates circular images.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                img-thumbnail
                            </td>

                            <td>
                                Adds border and padding.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Rounded Images
            </h2>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;img src="image.jpg"
class="rounded"
alt="Rounded Image"&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Example
            </h4>


            <img src="https://via.placeholder.com/250"
            class="rounded"
            alt="Rounded Image">


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Circular Images
            </h2>


            <p>
                The <strong>rounded-circle</strong> class converts an image into a circle.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;img src="profile.jpg"
class="rounded-circle"
width="200"
height="200"&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div>

                <img src="https://via.placeholder.com/200"
                class="rounded-circle"
                alt="Profile Image">

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Image Thumbnail
            </h2>


            <p>
                The <strong>img-thumbnail</strong> class creates a bordered thumbnail image.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;img src="image.jpg"
class="img-thumbnail"&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <img src="https://via.placeholder.com/250"
            class="img-thumbnail"
            alt="Thumbnail Image">


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Aligning Images
            </h2>


            <p>
                Bootstrap provides utility classes for image alignment.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                float-start
                            </td>

                            <td>
                                Align image left.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                float-end
                            </td>

                            <td>
                                Align image right.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                mx-auto d-block
                            </td>

                            <td>
                                Center image.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Center Image Example
            </h2>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;img src="image.jpg"
class="d-block mx-auto"
width="300"&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <img src="https://via.placeholder.com/300"
            class="d-block mx-auto"
            alt="Centered Image">


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Image Gallery
            </h2>


            <p>
                Bootstrap Grid System can be combined with images to create responsive galleries.
            </p>


            <div class="row g-3">


                <div class="col-md-4">

                    <img src="https://via.placeholder.com/300"
                    class="img-fluid rounded"
                    alt="Gallery Image">

                </div>


                <div class="col-md-4">

                    <img src="https://via.placeholder.com/300"
                    class="img-fluid rounded"
                    alt="Gallery Image">

                </div>


                <div class="col-md-4">

                    <img src="https://via.placeholder.com/300"
                    class="img-fluid rounded"
                    alt="Gallery Image">

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Image With Card Component
            </h2>


            <p>
                Images are commonly used inside Bootstrap cards.
            </p>


            <div class="card" style="width:300px;">


                <img src="https://via.placeholder.com/300"
                class="card-img-top"
                alt="Card Image">


                <div class="card-body">

                    <h5 class="card-title">
                        Bootstrap Card
                    </h5>


                    <p class="card-text">
                        Image used inside a card component.
                    </p>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always use alt attributes for images.
                </li>


                <li class="list-group-item">
                    Use img-fluid for responsive images.
                </li>


                <li class="list-group-item">
                    Optimize image size for faster loading.
                </li>


                <li class="list-group-item">
                    Use proper image formats like WebP.
                </li>


                <li class="list-group-item">
                    Avoid using very large images.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 Image utilities make it simple to create responsive and attractive images. Classes like img-fluid, rounded, rounded-circle, and img-thumbnail help developers design professional image layouts quickly without writing custom CSS.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Buttons",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Buttons
            </h2>

            <p class="lead">
                <strong>Bootstrap Buttons</strong> are predefined button styles provided by Bootstrap 5 that help developers create attractive, consistent, and responsive buttons without writing custom CSS.
            </p>

            <p>
                Buttons are important user interface elements used for actions such as submitting forms, navigating pages, opening dialogs, downloading files, and performing different operations.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Buttons are CSS classes that add different colors, sizes, styles, and behaviors to HTML button elements.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Buttons?
            </h2>


            <ul class="list-group">

                <li class="list-group-item">
                    Create beautiful buttons quickly.
                </li>

                <li class="list-group-item">
                    No need to write custom CSS.
                </li>

                <li class="list-group-item">
                    Provide consistent design.
                </li>

                <li class="list-group-item">
                    Support responsive layouts.
                </li>

                <li class="list-group-item">
                    Available in multiple colors and sizes.
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Bootstrap Button
            </h2>


            <p>
                Bootstrap buttons use the <strong>btn</strong> class.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;button class="btn btn-primary"&gt;

    Click Me

&lt;/button&gt;

</code></pre>


            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <button class="btn btn-primary">
                Click Me
            </button>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Button Colors
            </h2>


            <p>
                Bootstrap provides different contextual button classes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                btn-primary
                            </td>

                            <td>
                                Main action button.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-success
                            </td>

                            <td>
                                Successful action.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-danger
                            </td>

                            <td>
                                Delete or warning action.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-warning
                            </td>

                            <td>
                                Important notice.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-info
                            </td>

                            <td>
                                Information button.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-dark
                            </td>

                            <td>
                                Dark theme button.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-light
                            </td>

                            <td>
                                Light button.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Button Examples
            </h2>


            <div class="d-flex flex-wrap gap-2">


                <button class="btn btn-primary">
                    Primary
                </button>


                <button class="btn btn-success">
                    Success
                </button>


                <button class="btn btn-danger">
                    Danger
                </button>


                <button class="btn btn-warning">
                    Warning
                </button>


                <button class="btn btn-info">
                    Info
                </button>


                <button class="btn btn-dark">
                    Dark
                </button>


                <button class="btn btn-light border">
                    Light
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Outline Buttons
            </h2>


            <p>
                Bootstrap provides outline button styles using <strong>btn-outline-*</strong> classes.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;button class="btn btn-outline-primary"&gt;

Primary

&lt;/button&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div class="d-flex flex-wrap gap-2">


                <button class="btn btn-outline-primary">
                    Primary
                </button>


                <button class="btn btn-outline-success">
                    Success
                </button>


                <button class="btn btn-outline-danger">
                    Danger
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Button Sizes
            </h2>


            <p>
                Bootstrap provides different button sizes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Size
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                btn-lg
                            </td>

                            <td>
                                Large button.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn
                            </td>

                            <td>
                                Default size.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                btn-sm
                            </td>

                            <td>
                                Small button.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Button Size Example
            </h2>


            <div class="d-flex flex-wrap gap-3">


                <button class="btn btn-primary btn-lg">
                    Large Button
                </button>


                <button class="btn btn-primary">
                    Normal Button
                </button>


                <button class="btn btn-primary btn-sm">
                    Small Button
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Full Width Buttons
            </h2>


            <p>
                Buttons can take full available width using Bootstrap grid and utilities.
            </p>


            <div class="d-grid gap-2">


                <button class="btn btn-success">
                    Full Width Button
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Disabled Buttons
            </h2>


            <p>
                Disabled buttons cannot be clicked.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;button class="btn btn-primary"
disabled&gt;

Disabled

&lt;/button&gt;

</code></pre>


            </div>


            <button class="btn btn-primary mt-3" disabled>
                Disabled
            </button>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Buttons With Links
            </h2>


            <p>
                Bootstrap buttons can also be applied to anchor tags.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;a href="#"
class="btn btn-primary"&gt;

Home

&lt;/a&gt;

</code></pre>


            </div>


            <a href="#" class="btn btn-primary mt-3">
                Home
            </a>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Button Groups
            </h2>


            <p>
                Button groups combine multiple buttons together.
            </p>


            <div class="btn-group">


                <button class="btn btn-primary">
                    Left
                </button>


                <button class="btn btn-primary">
                    Middle
                </button>


                <button class="btn btn-primary">
                    Right
                </button>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Buttons in Forms
            </h2>


            <p>
                Buttons are commonly used with Bootstrap forms.
            </p>


            <form class="border rounded p-3">


                <input type="text"
                class="form-control mb-3"
                placeholder="Enter Name">


                <button class="btn btn-success">
                    Submit
                </button>


                <button class="btn btn-secondary">
                    Cancel
                </button>


            </form>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use meaningful button text.
                </li>


                <li class="list-group-item">
                    Choose colors according to actions.
                </li>


                <li class="list-group-item">
                    Avoid using too many buttons.
                </li>


                <li class="list-group-item">
                    Use btn-lg and btn-sm when needed.
                </li>


                <li class="list-group-item">
                    Keep buttons accessible for all users.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    Bootstrap 5 Buttons provide ready-made styles for creating attractive and responsive buttons. Using classes like btn-primary, btn-success, btn-outline, btn-lg, and btn-sm, developers can quickly design professional user interfaces.
                </p>

            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Forms",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Forms
            </h2>

            <p class="lead">
                <strong>Bootstrap Forms</strong> provide ready-made classes to create beautiful, responsive, and user-friendly forms. Bootstrap improves normal HTML forms by adding proper spacing, styling, validation support, and responsive layouts.
            </p>

            <p>
                Forms are important parts of websites because they allow users to enter and submit information such as login details, registration data, contact messages, search queries, and payment information.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Forms are styled HTML forms that use Bootstrap CSS classes to create professional and responsive input fields, buttons, labels, and form layouts.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Forms?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Create responsive forms easily.
                </li>


                <li class="list-group-item">
                    Provide consistent form design.
                </li>


                <li class="list-group-item">
                    Reduce custom CSS writing.
                </li>


                <li class="list-group-item">
                    Improve user experience.
                </li>


                <li class="list-group-item">
                    Support validation and different input types.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Bootstrap Form
            </h2>


            <p>
                Bootstrap forms use the <strong>form-control</strong> class for input fields.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre><code>
&lt;form&gt;

    &lt;label&gt;
        Name
    &lt;/label&gt;


    &lt;input type="text"
    class="form-control"&gt;


&lt;/form&gt;

</code></pre>

            </div>


            <h4 class="mt-4">
                Output
            </h4>


            <form>


                <label class="form-label">
                    Name
                </label>


                <input type="text"
                class="form-control"
                placeholder="Enter your name">


            </form>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Form Controls
            </h2>


            <p>
                Bootstrap provides different classes for different form elements.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                form-control
                            </td>

                            <td>
                                Styles text inputs, email, password, etc.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                form-select
                            </td>

                            <td>
                                Styles dropdown menus.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                form-check
                            </td>

                            <td>
                                Styles checkbox and radio buttons.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                form-label
                            </td>

                            <td>
                                Styles labels.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Input Fields
            </h2>


            <p>
                Bootstrap supports all HTML input types.
            </p>


            <div class="row g-3">


                <div class="col-md-6">

                    <label class="form-label">
                        Name
                    </label>

                    <input type="text"
                    class="form-control"
                    placeholder="Enter name">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Email
                    </label>

                    <input type="email"
                    class="form-control"
                    placeholder="Enter email">

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Password Input
            </h2>


            <p>
                Password fields hide entered characters.
            </p>


            <input type="password"
            class="form-control"
            placeholder="Enter password">


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Textarea
            </h2>


            <p>
                Textarea is used for multi-line text input.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;textarea class="form-control"&gt;

&lt;/textarea&gt;

</code></pre>


            </div>


            <textarea class="form-control mt-3"
            rows="4"
            placeholder="Write your message"></textarea>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Select Dropdown
            </h2>


            <p>
                Bootstrap uses <strong>form-select</strong> for dropdown menus.
            </p>


            <select class="form-select">


                <option>
                    Select Course
                </option>


                <option>
                    HTML
                </option>


                <option>
                    CSS
                </option>


                <option>
                    Bootstrap
                </option>


            </select>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Checkbox
            </h2>


            <div class="form-check">


                <input class="form-check-input"
                type="checkbox">


                <label class="form-check-label">

                    I agree with terms

                </label>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Radio Buttons
            </h2>


            <div class="form-check">


                <input class="form-check-input"
                type="radio"
                name="gender">


                <label class="form-check-label">

                    Male

                </label>


            </div>


            <div class="form-check">


                <input class="form-check-input"
                type="radio"
                name="gender">


                <label class="form-check-label">

                    Female

                </label>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Form Layout Using Grid System
            </h2>


            <p>
                Bootstrap grid system helps create responsive forms.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="row"&gt;

    &lt;div class="col-md-6"&gt;

        Input Field

    &lt;/div&gt;


    &lt;div class="col-md-6"&gt;

        Input Field

    &lt;/div&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Form Validation
            </h2>


            <p>
                Bootstrap provides validation classes to show valid and invalid inputs.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;input class="form-control is-valid"&gt;


&lt;input class="form-control is-invalid"&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Floating Labels
            </h2>


            <p>
                Bootstrap 5 provides floating labels where labels move above the input when typing.
            </p>


            <div class="form-floating">


                <input type="text"
                class="form-control"
                placeholder="Name">


                <label>
                    Name
                </label>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Complete Registration Form Example
            </h2>


            <form class="border rounded p-3">


                <label class="form-label">
                    Full Name
                </label>


                <input type="text"
                class="form-control mb-3"
                placeholder="Enter name">


                <label class="form-label">
                    Email
                </label>


                <input type="email"
                class="form-control mb-3"
                placeholder="Enter email">


                <label class="form-label">
                    Password
                </label>


                <input type="password"
                class="form-control mb-3"
                placeholder="Enter password">


                <button class="btn btn-primary">
                    Register
                </button>


            </form>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always use labels with inputs.
                </li>


                <li class="list-group-item">
                    Use proper input types.
                </li>


                <li class="list-group-item">
                    Keep forms simple and organized.
                </li>


                <li class="list-group-item">
                    Use Bootstrap grid for responsive layouts.
                </li>


                <li class="list-group-item">
                    Validate user input properly.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap 5 Forms make it easy to create responsive and professional user input forms. Using classes like form-control, form-select, form-check, and Bootstrap grid utilities, developers can build modern forms quickly and efficiently.

                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Components",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Components
            </h2>


            <p class="lead">
                <strong>Bootstrap Components</strong> are ready-made UI elements provided by Bootstrap 5 that help developers build modern, interactive, and responsive websites quickly.
            </p>


            <p>
                Bootstrap includes many reusable components such as Navbar, Cards, Alerts, Buttons, Modals, Accordion, Carousel, Dropdowns, Pagination, and many more. These components reduce development time and provide a consistent design.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Components are pre-designed HTML, CSS, and JavaScript elements that can be used to create professional user interfaces.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Components?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Save development time.
                </li>


                <li class="list-group-item">
                    Create professional UI designs.
                </li>


                <li class="list-group-item">
                    Provide responsive layouts.
                </li>


                <li class="list-group-item">
                    Require less custom CSS.
                </li>


                <li class="list-group-item">
                    Components are reusable.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Component Categories
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Component
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                Navbar
                            </td>

                            <td>
                                Website navigation menu.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Cards
                            </td>

                            <td>
                                Display content in boxes.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Alerts
                            </td>

                            <td>
                                Show messages and notifications.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Modal
                            </td>

                            <td>
                                Display popup dialogs.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Carousel
                            </td>

                            <td>
                                Create image sliders.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Accordion
                            </td>

                            <td>
                                Create expandable sections.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                1. Bootstrap Navbar
            </h2>


            <p>
                Navbar is used to create website navigation menus. It usually contains a logo, links, and dropdown menus.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre><code>
&lt;nav class="navbar navbar-expand-lg bg-dark"&gt;

&lt;div class="container"&gt;


&lt;a class="navbar-brand text-white"
href="#"&gt;

My Website

&lt;/a&gt;


&lt;/div&gt;

&lt;/nav&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <nav class="navbar navbar-expand-lg bg-dark rounded">


                <div class="container">


                    <a class="navbar-brand text-white"
                    href="#">
                        My Website
                    </a>


                </div>


            </nav>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                2. Bootstrap Cards
            </h2>


            <p>
                Cards are flexible content containers used to display images, text, buttons, and other information.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="card"&gt;

    &lt;div class="card-body"&gt;

        Content

    &lt;/div&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Example
            </h4>


            <div class="card"
            style="max-width:300px;">


                <div class="card-body">


                    <h5 class="card-title">
                        Bootstrap Card
                    </h5>


                    <p class="card-text">
                        Card content example.
                    </p>


                    <button class="btn btn-primary">
                        Read More
                    </button>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                3. Bootstrap Alerts
            </h2>


            <p>
                Alerts are used to display important messages.
            </p>


            <div class="alert alert-success">

                Success! Your data has been saved.

            </div>


            <div class="alert alert-danger">

                Error! Something went wrong.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                4. Bootstrap Modal
            </h2>


            <p>
                Modal creates popup windows for displaying additional information.
            </p>


            <button class="btn btn-primary">

                Open Modal

            </button>


            <p class="mt-3">
                Bootstrap modals are commonly used for:
            </p>


            <ul>

                <li>
                    Login forms
                </li>

                <li>
                    Confirmation messages
                </li>

                <li>
                    Product details
                </li>

                <li>
                    User information
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                5. Bootstrap Carousel
            </h2>


            <p>
                Carousel is used to create image sliders and presentations.
            </p>


            <div class="border rounded p-4 text-center bg-light">


                <h5>
                    Image Slider Component
                </h5>


                <p>
                    Used for banners, galleries, and advertisements.
                </p>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                6. Bootstrap Accordion
            </h2>


            <p>
                Accordion displays content in expandable and collapsible sections.
            </p>


            <div class="accordion">


                <div class="accordion-item">


                    <h2 class="accordion-header">

                        <button class="accordion-button">

                            What is Bootstrap?

                        </button>

                    </h2>


                    <div class="accordion-body">

                        Bootstrap is a CSS framework for responsive web development.

                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                7. Bootstrap Dropdown
            </h2>


            <p>
                Dropdowns display a list of options when clicked.
            </p>


            <div class="dropdown">


                <button class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown">

                    Menu

                </button>


                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item">
                            Home
                        </a>
                    </li>


                    <li>
                        <a class="dropdown-item">
                            About
                        </a>
                    </li>


                </ul>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                8. Bootstrap Pagination
            </h2>


            <p>
                Pagination helps divide content into multiple pages.
            </p>


            <nav>

                <ul class="pagination">


                    <li class="page-item">

                        <a class="page-link">
                            1
                        </a>

                    </li>


                    <li class="page-item">

                        <a class="page-link">
                            2
                        </a>

                    </li>


                    <li class="page-item">

                        <a class="page-link">
                            3
                        </a>

                    </li>


                </ul>


            </nav>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Component Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use components according to their purpose.
                </li>


                <li class="list-group-item">
                    Avoid unnecessary components.
                </li>


                <li class="list-group-item">
                    Keep UI simple and user-friendly.
                </li>


                <li class="list-group-item">
                    Combine components with Bootstrap grid.
                </li>


                <li class="list-group-item">
                    Maintain consistent design.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">
                    Bootstrap 5 Components provide ready-made UI elements that make web development faster and easier. Components like Navbar, Cards, Alerts, Modals, Carousel, Accordion, and Dropdowns help developers create responsive and professional websites with less code.
                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Utilities",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Utilities
            </h2>


            <p class="lead">
                <strong>Bootstrap Utilities</strong> are small helper classes provided by Bootstrap 5 that allow developers to quickly apply CSS styles without writing custom CSS code.
            </p>


            <p>
                Bootstrap utility classes control different parts of a webpage such as spacing, display, flexbox, borders, shadows, sizing, positioning, colors, and text alignment.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Utilities are predefined CSS classes that perform specific styling tasks and help create responsive designs quickly.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Utilities?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Reduce the amount of custom CSS code.
                </li>


                <li class="list-group-item">
                    Create layouts faster.
                </li>


                <li class="list-group-item">
                    Improve code consistency.
                </li>


                <li class="list-group-item">
                    Support responsive web design.
                </li>


                <li class="list-group-item">
                    Make HTML cleaner and easier to maintain.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Utility Categories
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">


                        <tr>

                            <th>
                                Utility
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                Spacing
                            </td>

                            <td>
                                Controls margin and padding.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Display
                            </td>

                            <td>
                                Controls element visibility and behavior.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Flex
                            </td>

                            <td>
                                Creates flexible layouts.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Borders
                            </td>

                            <td>
                                Adds and styles borders.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Shadows
                            </td>

                            <td>
                                Adds shadow effects.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Sizing
                            </td>

                            <td>
                                Controls width and height.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                1. Spacing Utilities
            </h2>


            <p>
                Bootstrap provides margin and padding utility classes.
            </p>


            <p>
                The format is:
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
property-size

Example:

m-3

p-4

</code></pre>


            </div>


            <h4 class="mt-3">
                Margin Classes
            </h4>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Meaning
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                m-3
                            </td>

                            <td>
                                Margin on all sides.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                mt-3
                            </td>

                            <td>
                                Margin top.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                mb-3
                            </td>

                            <td>
                                Margin bottom.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                ms-3
                            </td>

                            <td>
                                Margin start.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <h4>
                Padding Classes
            </h4>


            <ul>

                <li>
                    p-3 → Padding all sides
                </li>

                <li>
                    pt-3 → Padding top
                </li>

                <li>
                    pb-3 → Padding bottom
                </li>

                <li>
                    px-3 → Horizontal padding
                </li>

                <li>
                    py-3 → Vertical padding
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Spacing Example
            </h2>


            <div class="bg-primary text-white p-4 rounded">


                Bootstrap Padding Example


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                2. Display Utilities
            </h2>


            <p>
                Display utilities control how elements appear.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Description
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                d-none
                            </td>

                            <td>
                                Hide element.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                d-block
                            </td>

                            <td>
                                Display block.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                d-flex
                            </td>

                            <td>
                                Enable flexbox.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                d-grid
                            </td>

                            <td>
                                Enable grid layout.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                3. Flex Utilities
            </h2>


            <p>
                Bootstrap flex utilities help create flexible layouts.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="d-flex justify-content-center"&gt;

Content

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Common Flex Classes
            </h4>


            <ul>


                <li>
                    d-flex
                </li>


                <li>
                    justify-content-center
                </li>


                <li>
                    justify-content-between
                </li>


                <li>
                    align-items-center
                </li>


                <li>
                    flex-column
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Flex Example
            </h2>


            <div class="d-flex justify-content-between border p-3">


                <div class="bg-primary text-white p-2">
                    Box 1
                </div>


                <div class="bg-success text-white p-2">
                    Box 2
                </div>


                <div class="bg-danger text-white p-2">
                    Box 3
                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                4. Border Utilities
            </h2>


            <p>
                Border utilities add borders to elements.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
border

border-primary

rounded

rounded-circle

</code></pre>


            </div>


            <div class="border border-primary rounded p-3 mt-3">

                Border Example

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                5. Shadow Utilities
            </h2>


            <p>
                Bootstrap provides shadow classes.
            </p>


            <ul>

                <li>
                    shadow-sm
                </li>

                <li>
                    shadow
                </li>

                <li>
                    shadow-lg
                </li>

            </ul>


            <div class="shadow p-4 mb-3 bg-light rounded">

                Shadow Example

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                6. Width and Height Utilities
            </h2>


            <p>
                Bootstrap controls element sizes using width and height classes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered">


                    <thead class="table-primary">

                        <tr>

                            <th>
                                Class
                            </th>

                            <th>
                                Meaning
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                w-25
                            </td>

                            <td>
                                25% width.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                w-50
                            </td>

                            <td>
                                50% width.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                w-100
                            </td>

                            <td>
                                Full width.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                7. Position Utilities
            </h2>


            <p>
                Bootstrap provides classes for positioning elements.
            </p>


            <ul>

                <li>
                    position-relative
                </li>

                <li>
                    position-absolute
                </li>

                <li>
                    fixed-top
                </li>

                <li>
                    fixed-bottom
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Utilities
            </h2>


            <p>
                Bootstrap utilities can work with breakpoints.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
d-none d-md-block

text-center text-lg-start

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use utilities instead of unnecessary CSS.
                </li>


                <li class="list-group-item">
                    Combine utilities with Bootstrap components.
                </li>


                <li class="list-group-item">
                    Use responsive utility classes.
                </li>


                <li class="list-group-item">
                    Keep HTML readable.
                </li>


                <li class="list-group-item">
                    Avoid excessive utility usage.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">
                    Bootstrap 5 Utilities provide powerful helper classes for spacing, display, flexbox, borders, shadows, sizing, and responsive design. They help developers build modern websites faster with less custom CSS.
                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Icons",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Icons
            </h2>


            <p class="lead">
                <strong>Bootstrap Icons</strong> is an open-source icon library created by the Bootstrap team. It provides thousands of high-quality SVG icons that can be used in websites and applications.
            </p>


            <p>
                Icons improve the user interface by making buttons, menus, navigation, and content easier to understand. Bootstrap Icons work perfectly with Bootstrap 5 but can also be used with any HTML, CSS, or JavaScript project.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Icons are a collection of scalable vector icons that can be added to web pages using CSS classes or SVG code.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Use Bootstrap Icons?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Provides more than 2,000 free icons.
                </li>


                <li class="list-group-item">
                    Easy to use with Bootstrap 5.
                </li>


                <li class="list-group-item">
                    Icons are scalable and lightweight.
                </li>


                <li class="list-group-item">
                    Improves website design.
                </li>


                <li class="list-group-item">
                    Supports customization using CSS.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Installing Bootstrap Icons
            </h2>


            <p>
                To use Bootstrap Icons, first include the Bootstrap Icons CDN link inside the HTML head section.
            </p>


            <div class="bg-dark text-white rounded p-3 overflow-auto">


<pre><code>
&lt;link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Icon Syntax
            </h2>


            <p>
                Bootstrap Icons are added using the <strong>bi</strong> class followed by the icon name.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;i class="bi bi-house"&gt;&lt;/i&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <i class="bi bi-house fs-1 text-primary"></i>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Common Bootstrap Icons
            </h2>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">


                        <tr>

                            <th>
                                Icon Class
                            </th>

                            <th>
                                Purpose
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                bi-house
                            </td>

                            <td>
                                Home icon.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bi-person
                            </td>

                            <td>
                                User profile icon.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bi-search
                            </td>

                            <td>
                                Search icon.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bi-envelope
                            </td>

                            <td>
                                Email icon.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bi-trash
                            </td>

                            <td>
                                Delete icon.
                            </td>

                        </tr>


                        <tr>

                            <td>
                                bi-heart
                            </td>

                            <td>
                                Like/favorite icon.
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Using Icons With Buttons
            </h2>


            <p>
                Icons can be combined with Bootstrap buttons to create attractive interfaces.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;button class="btn btn-primary"&gt;

&lt;i class="bi bi-download"&gt;&lt;/i&gt;

Download

&lt;/button&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <button class="btn btn-primary">

                <i class="bi bi-download"></i>

                Download

            </button>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Changing Icon Size
            </h2>


            <p>
                Icon size can be changed using Bootstrap font-size utilities.
            </p>


            <div class="d-flex gap-3 align-items-center">


                <i class="bi bi-star fs-6"></i>


                <i class="bi bi-star fs-3"></i>


                <i class="bi bi-star fs-1"></i>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Changing Icon Colors
            </h2>


            <p>
                Bootstrap text color classes can be used with icons.
            </p>


            <div class="d-flex gap-3">


                <i class="bi bi-heart-fill text-danger fs-2"></i>


                <i class="bi bi-check-circle-fill text-success fs-2"></i>


                <i class="bi bi-info-circle-fill text-info fs-2"></i>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Icons in Navbar
            </h2>


            <p>
                Icons are commonly used in navigation menus.
            </p>


            <nav class="navbar navbar-dark bg-dark rounded">


                <div class="container">


                    <a class="navbar-brand"
                    href="#">


                        <i class="bi bi-bootstrap"></i>

                        Bootstrap


                    </a>


                    <a class="text-white">

                        <i class="bi bi-person-circle fs-4"></i>

                    </a>


                </div>


            </nav>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Icons in Cards
            </h2>


            <div class="row g-3">


                <div class="col-md-4">


                    <div class="card text-center">


                        <div class="card-body">


                            <i class="bi bi-laptop fs-1 text-primary"></i>


                            <h5 class="mt-3">
                                Web Development
                            </h5>


                            <p>
                                Learn modern web technologies.
                            </p>


                        </div>


                    </div>


                </div>


                <div class="col-md-4">


                    <div class="card text-center">


                        <div class="card-body">


                            <i class="bi bi-phone fs-1 text-success"></i>


                            <h5 class="mt-3">
                                Mobile Apps
                            </h5>


                            <p>
                                Build responsive applications.
                            </p>


                        </div>


                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Using SVG Icons
            </h2>


            <p>
                Bootstrap Icons can also be directly added as SVG elements.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;svg xmlns="http://www.w3.org/2000/svg"
width="16"
height="16"
fill="currentColor"&gt;

&lt;/svg&gt;

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Practical Uses of Bootstrap Icons
            </h2>


            <ul>


                <li>
                    Navigation menus
                </li>


                <li>
                    Buttons
                </li>


                <li>
                    Forms
                </li>


                <li>
                    Dashboards
                </li>


                <li>
                    E-commerce websites
                </li>


                <li>
                    User profiles
                </li>


                <li>
                    Social media interfaces
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use icons that clearly represent actions.
                </li>


                <li class="list-group-item">
                    Do not use too many icons unnecessarily.
                </li>


                <li class="list-group-item">
                    Keep icon sizes consistent.
                </li>


                <li class="list-group-item">
                    Combine icons with text when needed.
                </li>


                <li class="list-group-item">
                    Use accessible labels for important icons.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap Icons provide thousands of free and customizable icons for Bootstrap 5 projects. They help improve website appearance, user experience, and navigation by adding meaningful visual elements.

                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Responsive Design",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Responsive Design
            </h2>


            <p class="lead">
                <strong>Bootstrap Responsive Design</strong> allows websites to automatically adjust their layout and content according to different screen sizes such as mobile phones, tablets, laptops, and desktops.
            </p>


            <p>
                Bootstrap 5 is built with a mobile-first approach. It provides a powerful grid system and responsive utility classes that help developers create websites that work perfectly on every device.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Responsive Design is the process of creating web layouts that automatically adapt to different screen sizes using Bootstrap grid classes, breakpoints, and responsive utilities.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Responsive Design is Important?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Users access websites from different devices.
                </li>


                <li class="list-group-item">
                    Improves user experience.
                </li>


                <li class="list-group-item">
                    Makes websites mobile-friendly.
                </li>


                <li class="list-group-item">
                    Improves SEO ranking.
                </li>


                <li class="list-group-item">
                    Reduces development time.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Mobile First Approach
            </h2>


            <p>
                Bootstrap designs layouts for small screens first and then expands them for larger screens.
            </p>


            <p>
                Example:
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
.col-12
.col-md-6
.col-lg-4

</code></pre>


            </div>


            <p class="mt-3">
                This means:
            </p>


            <ul>

                <li>
                    Mobile: Full width
                </li>

                <li>
                    Tablet: Half width
                </li>

                <li>
                    Desktop: One-third width
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Breakpoints
            </h2>


            <p>
                Breakpoints are predefined screen sizes where the layout changes.
            </p>


            <div class="table-responsive">


                <table class="table table-bordered table-striped">


                    <thead class="table-dark">

                        <tr>

                            <th>
                                Breakpoint
                            </th>

                            <th>
                                Class Prefix
                            </th>

                            <th>
                                Device Size
                            </th>

                        </tr>


                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                Extra Small
                            </td>

                            <td>
                                None
                            </td>

                            <td>
                                Mobile phones
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Small
                            </td>

                            <td>
                                sm
                            </td>

                            <td>
                                Small tablets
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Medium
                            </td>

                            <td>
                                md
                            </td>

                            <td>
                                Tablets
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Large
                            </td>

                            <td>
                                lg
                            </td>

                            <td>
                                Laptops
                            </td>

                        </tr>


                        <tr>

                            <td>
                                Extra Large
                            </td>

                            <td>
                                xl
                            </td>

                            <td>
                                Large desktops
                            </td>

                        </tr>


                        <tr>

                            <td>
                                XXL
                            </td>

                            <td>
                                xxl
                            </td>

                            <td>
                                Extra large screens
                            </td>

                        </tr>


                    </tbody>


                </table>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Responsive Grid System
            </h2>


            <p>
                The Bootstrap grid system uses rows and columns to create responsive layouts.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;div class="container"&gt;

    &lt;div class="row"&gt;


        &lt;div class="col-md-6"&gt;

            Column 1

        &lt;/div&gt;


        &lt;div class="col-md-6"&gt;

            Column 2

        &lt;/div&gt;


    &lt;/div&gt;

&lt;/div&gt;

</code></pre>


            </div>


            <h4 class="mt-3">
                Output
            </h4>


            <div class="row g-3">


                <div class="col-md-6">


                    <div class="bg-primary text-white p-3 rounded">

                        Column 1

                    </div>


                </div>


                <div class="col-md-6">


                    <div class="bg-success text-white p-3 rounded">

                        Column 2

                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Containers
            </h2>


            <p>
                Bootstrap provides containers that automatically adjust width according to screen size.
            </p>


            <table class="table table-bordered">


                <thead class="table-primary">

                    <tr>

                        <th>
                            Class
                        </th>

                        <th>
                            Description
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <tr>

                        <td>
                            container
                        </td>

                        <td>
                            Fixed responsive width.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            container-fluid
                        </td>

                        <td>
                            Full width container.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            container-md
                        </td>

                        <td>
                            Responsive container from medium size.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Images
            </h2>


            <p>
                Bootstrap provides the <strong>img-fluid</strong> class to make images responsive.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;img src="image.jpg"
class="img-fluid"&gt;

</code></pre>


            </div>


            <img src="https://via.placeholder.com/600x250"
            class="img-fluid rounded mt-3"
            alt="Responsive Image">


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Display Utilities
            </h2>


            <p>
                Bootstrap can show or hide elements depending on screen size.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
d-none d-md-block

</code></pre>


            </div>


            <p>
                Example:
            </p>


            <div class="alert alert-warning">

                This element changes visibility based on screen size.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Text Alignment
            </h2>


            <p>
                Text alignment can change according to screen size.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
text-center text-md-start

</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Navbar
            </h2>


            <p>
                Bootstrap Navbar automatically collapses into a mobile menu.
            </p>


            <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">


                <div class="container">


                    <a class="navbar-brand">

                        Website

                    </a>


                    <button class="navbar-toggler">

                        ☰

                    </button>


                </div>


            </nav>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Cards Example
            </h2>


            <div class="row g-3">


                <div class="col-sm-12 col-md-6 col-lg-4">


                    <div class="card">


                        <div class="card-body">


                            <h5>
                                Card 1
                            </h5>


                            <p>
                                Responsive card example.
                            </p>


                        </div>


                    </div>


                </div>


                <div class="col-sm-12 col-md-6 col-lg-4">


                    <div class="card">


                        <div class="card-body">


                            <h5>
                                Card 2
                            </h5>


                            <p>
                                Responsive card example.
                            </p>


                        </div>


                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Responsive Design Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Always design for mobile first.
                </li>


                <li class="list-group-item">
                    Use Bootstrap grid system properly.
                </li>


                <li class="list-group-item">
                    Test websites on different devices.
                </li>


                <li class="list-group-item">
                    Use responsive images.
                </li>


                <li class="list-group-item">
                    Avoid fixed widths.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap 5 Responsive Design helps developers create websites that work on all devices. By using the Bootstrap grid system, breakpoints, responsive utilities, and flexible components, developers can build modern mobile-friendly websites easily.

                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title: "Bootstrap Customization",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Customization
            </h2>


            <p class="lead">
                <strong>Bootstrap Customization</strong> is the process of modifying Bootstrap's default styles, colors, spacing, components, and design to match the requirements of a project.
            </p>


            <p>
                Bootstrap 5 provides many built-in classes, but sometimes developers need a unique design. Bootstrap can be customized using custom CSS, CSS variables, and Sass.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Customization means changing or extending Bootstrap styles to create a unique website design while keeping Bootstrap's responsive features.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Customize Bootstrap?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Create unique website designs.
                </li>


                <li class="list-group-item">
                    Match company branding.
                </li>


                <li class="list-group-item">
                    Change default colors and fonts.
                </li>


                <li class="list-group-item">
                    Improve user interface.
                </li>


                <li class="list-group-item">
                    Create reusable design systems.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Methods of Bootstrap Customization
            </h2>


            <table class="table table-bordered table-striped">


                <thead class="table-dark">


                    <tr>

                        <th>
                            Method
                        </th>

                        <th>
                            Description
                        </th>

                    </tr>


                </thead>


                <tbody>


                    <tr>

                        <td>
                            Custom CSS
                        </td>

                        <td>
                            Override Bootstrap styles using your own CSS.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            CSS Variables
                        </td>

                        <td>
                            Change Bootstrap theme values easily.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Sass
                        </td>

                        <td>
                            Customize Bootstrap source files.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Theme Creation
                        </td>

                        <td>
                            Build your own Bootstrap design system.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                1. Customizing Bootstrap Using CSS
            </h2>


            <p>
                The easiest way to customize Bootstrap is by adding your own CSS after Bootstrap CSS.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>
&lt;link href="bootstrap.css" rel="stylesheet"&gt;

&lt;link href="style.css" rel="stylesheet"&gt;

</code></pre>


            </div>


            <p class="mt-3">
                Your CSS file should come after Bootstrap so your styles override Bootstrap styles.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Changing Button Style
            </h2>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

.btn-primary {

    background-color: purple;

    border-radius: 20px;

}


</code></pre>


            </div>


            <button class="btn btn-primary mt-3">
                Custom Button
            </button>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                2. Bootstrap CSS Variables
            </h2>


            <p>
                Bootstrap 5 uses CSS variables that allow developers to change theme values easily.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

:root {

    --bs-primary: #6610f2;

}


</code></pre>


            </div>


            <p class="mt-3">
                CSS variables can control colors, spacing, and other design properties.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Theme Colors
            </h2>


            <p>
                Bootstrap provides default theme colors.
            </p>


            <div class="row g-3">


                <div class="col-md-3">

                    <div class="bg-primary text-white p-3 rounded">
                        Primary
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="bg-success text-white p-3 rounded">
                        Success
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="bg-danger text-white p-3 rounded">
                        Danger
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="bg-warning p-3 rounded">
                        Warning
                    </div>

                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                3. Customizing Colors
            </h2>


            <p>
                Developers can create custom colors for Bootstrap components.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

.custom-color {

    background-color: #ff5722;

    color:white;

}


</code></pre>


            </div>


            <div class="custom-color bg-danger text-white p-3 rounded mt-3">

                Custom Color Example

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                4. Customizing Typography
            </h2>


            <p>
                Bootstrap typography can be customized using CSS.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

body {

    font-family: Arial;

}


h1 {

    font-size:40px;

}


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                5. Customizing Spacing
            </h2>


            <p>
                Bootstrap spacing values can be changed using custom CSS or Sass.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

.my-padding {

    padding:50px;

}


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                6. Bootstrap Customization Using Sass
            </h2>


            <p>
                Sass is a CSS preprocessor that allows advanced Bootstrap customization.
            </p>


            <p>
                With Sass developers can:
            </p>


            <ul>


                <li>
                    Change variables.
                </li>


                <li>
                    Modify colors.
                </li>


                <li>
                    Customize components.
                </li>


                <li>
                    Remove unused styles.
                </li>


            </ul>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

$primary: #6610f2;


@import "bootstrap";


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Creating Custom Bootstrap Cards
            </h2>


            <div class="card border-primary">


                <div class="card-body">


                    <h5 class="card-title text-primary">

                        Custom Card

                    </h5>


                    <p>

                        Bootstrap component with customized styling.

                    </p>


                    <button class="btn btn-primary">

                        Learn More

                    </button>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Customizing Navbar
            </h2>


            <p>
                Navbar colors and styles can be changed easily.
            </p>


            <nav class="navbar navbar-dark bg-primary rounded">


                <div class="container">

                    <span class="navbar-brand">

                        My Website

                    </span>

                </div>


            </nav>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Customization Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Keep custom CSS separate from Bootstrap files.
                </li>


                <li class="list-group-item">
                    Do not edit Bootstrap source files directly.
                </li>


                <li class="list-group-item">
                    Use CSS variables for simple changes.
                </li>


                <li class="list-group-item">
                    Use Sass for advanced customization.
                </li>


                <li class="list-group-item">
                    Maintain consistent design rules.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap 5 Customization allows developers to modify default Bootstrap styles and create unique website designs. Custom CSS, CSS variables, and Sass provide powerful ways to change colors, typography, components, and themes.

                </p>


            </div>


        </div>

    </div>

</div>

`
},
{
title: "Bootstrap Mini Projects",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Mini Projects
            </h2>


            <p class="lead">
                <strong>Bootstrap Mini Projects</strong> help developers practice Bootstrap 5 concepts by building real-world responsive websites and user interfaces.
            </p>


            <p>
                After learning Bootstrap components, grid system, utilities, forms, and responsive design, creating projects is the best way to improve practical skills.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Mini Projects are small web development projects created using Bootstrap 5 to practice responsive layouts, components, and UI design.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Benefits of Bootstrap Projects
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Improve Bootstrap practical skills.
                </li>


                <li class="list-group-item">
                    Learn real-world website design.
                </li>


                <li class="list-group-item">
                    Build portfolio projects.
                </li>


                <li class="list-group-item">
                    Understand responsive layouts.
                </li>


                <li class="list-group-item">
                    Prepare for frontend jobs.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Required Skills Before Projects
            </h2>


            <table class="table table-bordered table-striped">


                <thead class="table-dark">


                    <tr>

                        <th>
                            Skill
                        </th>


                        <th>
                            Usage
                        </th>

                    </tr>


                </thead>


                <tbody>


                    <tr>

                        <td>
                            Bootstrap Grid
                        </td>


                        <td>
                            Creating responsive layouts.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Components
                        </td>


                        <td>
                            Building UI sections.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Utilities
                        </td>


                        <td>
                            Styling quickly.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Forms
                        </td>


                        <td>
                            Collecting user data.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 1: Personal Portfolio Website
            </h2>


            <p>
                A portfolio website displays your skills, projects, experience, and contact information.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Responsive Navbar
                </li>

                <li>
                    Hero section
                </li>

                <li>
                    About section
                </li>

                <li>
                    Skills cards
                </li>

                <li>
                    Project gallery
                </li>

                <li>
                    Contact form
                </li>

            </ul>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;div class="container"&gt;

    &lt;h1&gt;

        My Portfolio

    &lt;/h1&gt;

&lt;/div&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 2: Responsive Landing Page
            </h2>


            <p>
                A landing page is used to promote products, services, or applications.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Hero banner
                </li>

                <li>
                    Call-to-action buttons
                </li>

                <li>
                    Services section
                </li>

                <li>
                    Pricing cards
                </li>

                <li>
                    Footer
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 3: E-Commerce Website UI
            </h2>


            <p>
                Build an online shopping interface using Bootstrap cards and components.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Product cards
                </li>

                <li>
                    Navigation menu
                </li>

                <li>
                    Shopping cart design
                </li>

                <li>
                    Product details page
                </li>

                <li>
                    Checkout form
                </li>

            </ul>


            <div class="row g-3">


                <div class="col-md-4">


                    <div class="card">


                        <div class="card-body text-center">


                            <h5>
                                Product
                            </h5>


                            <p>
                                Price: $50
                            </p>


                            <button class="btn btn-primary">

                                Buy Now

                            </button>


                        </div>


                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 4: Login & Registration Page
            </h2>


            <p>
                Create modern authentication pages using Bootstrap forms.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Login form
                </li>

                <li>
                    Registration form
                </li>

                <li>
                    Password field
                </li>

                <li>
                    Remember me checkbox
                </li>

                <li>
                    Responsive design
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 5: Admin Dashboard
            </h2>


            <p>
                Create a dashboard interface using Bootstrap components.
            </p>


            <h5>
                Dashboard Features:
            </h5>


            <ul>

                <li>
                    Sidebar navigation
                </li>

                <li>
                    Cards for statistics
                </li>

                <li>
                    Tables
                </li>

                <li>
                    Charts area
                </li>

                <li>
                    User profile section
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 6: Blog Website
            </h2>


            <p>
                Create a responsive blog layout using Bootstrap cards.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Blog cards
                </li>

                <li>
                    Categories
                </li>

                <li>
                    Search bar
                </li>

                <li>
                    Author information
                </li>

                <li>
                    Comments section
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project 7: Restaurant Website
            </h2>


            <p>
                Build a responsive restaurant website.
            </p>


            <h5>
                Features:
            </h5>


            <ul>

                <li>
                    Menu cards
                </li>

                <li>
                    Food images
                </li>

                <li>
                    Reservation form
                </li>

                <li>
                    Location section
                </li>

                <li>
                    Contact information
                </li>

            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Project Development Steps
            </h2>


            <ol class="list-group list-group-numbered">


                <li class="list-group-item">
                    Plan the website structure.
                </li>


                <li class="list-group-item">
                    Create HTML layout.
                </li>


                <li class="list-group-item">
                    Add Bootstrap components.
                </li>


                <li class="list-group-item">
                    Make design responsive.
                </li>


                <li class="list-group-item">
                    Test on different devices.
                </li>


                <li class="list-group-item">
                    Deploy website online.
                </li>


            </ol>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Project Best Practices
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Use Bootstrap classes properly.
                </li>


                <li class="list-group-item">
                    Keep code organized.
                </li>


                <li class="list-group-item">
                    Create mobile-friendly designs.
                </li>


                <li class="list-group-item">
                    Avoid unnecessary custom CSS.
                </li>


                <li class="list-group-item">
                    Reuse components.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap Mini Projects help developers transform theoretical Bootstrap knowledge into practical skills. Building portfolios, landing pages, dashboards, e-commerce layouts, and blogs prepares developers for real frontend development work.

                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title:"Bootstrap Best Practices",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Best Practices
            </h2>


            <p class="lead">
                <strong>Bootstrap Best Practices</strong> are recommended techniques that help developers write clean, organized, responsive, and maintainable Bootstrap 5 code.
            </p>


            <p>
                Following Bootstrap best practices makes websites faster, easier to maintain, and more professional. Good practices also improve teamwork when multiple developers work on the same project.
            </p>


            <div class="alert alert-primary">

                <strong>Definition:</strong>
                Bootstrap Best Practices are guidelines for using Bootstrap classes, components, utilities, and customization methods efficiently while creating modern responsive websites.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Why Follow Bootstrap Best Practices?
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Makes code cleaner and easier to understand.
                </li>


                <li class="list-group-item">
                    Improves website performance.
                </li>


                <li class="list-group-item">
                    Creates consistent designs.
                </li>


                <li class="list-group-item">
                    Makes projects easier to update.
                </li>


                <li class="list-group-item">
                    Helps developers work professionally.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                1. Use the Latest Bootstrap Version
            </h2>


            <p>
                Always use the latest stable Bootstrap version to get security improvements, bug fixes, and new features.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                2. Use Bootstrap Grid System Properly
            </h2>


            <p>
                The grid system should be used to create responsive layouts instead of using fixed widths.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;div class="row"&gt;

    &lt;div class="col-md-6"&gt;

        Content

    &lt;/div&gt;


    &lt;div class="col-md-6"&gt;

        Content

    &lt;/div&gt;

&lt;/div&gt;


</code></pre>


            </div>


            <p class="mt-3">
                This layout automatically adjusts on tablets and desktops.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                3. Follow Mobile First Approach
            </h2>


            <p>
                Bootstrap is designed for mobile-first development. Always design for small screens first and then add larger screen styles.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

.col-12

.col-md-6

.col-lg-4


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                4. Use Bootstrap Utility Classes
            </h2>


            <p>
                Bootstrap utilities reduce the need for writing extra CSS.
            </p>


            <table class="table table-bordered table-striped">


                <thead class="table-dark">


                    <tr>

                        <th>
                            Class
                        </th>

                        <th>
                            Purpose
                        </th>

                    </tr>


                </thead>


                <tbody>


                    <tr>

                        <td>
                            mt-3
                        </td>

                        <td>
                            Add margin top.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            p-4
                        </td>

                        <td>
                            Add padding.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            text-center
                        </td>

                        <td>
                            Center text.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            d-flex
                        </td>

                        <td>
                            Create flex layout.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                5. Keep Custom CSS Separate
            </h2>


            <p>
                Do not modify Bootstrap source files directly. Create a separate CSS file for your custom styles.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

bootstrap.css

style.css


</code></pre>


            </div>


            <p class="mt-3">
                This prevents problems when Bootstrap is updated.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                6. Use Meaningful Class Names
            </h2>


            <p>
                Create clear and understandable custom class names.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

.good-card {

    padding:20px;

}


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                7. Avoid Excessive Custom CSS
            </h2>


            <p>
                Bootstrap already provides many classes. Avoid writing CSS when Bootstrap utilities can solve the problem.
            </p>


            <div class="alert alert-warning">

                Example:
                Use <strong>text-center</strong> instead of creating your own center-text CSS class.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                8. Use Responsive Images
            </h2>


            <p>
                Always make images responsive using Bootstrap image classes.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;img src="image.jpg" class="img-fluid"&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                9. Maintain Component Consistency
            </h2>


            <p>
                Use the same style for buttons, cards, forms, and navigation throughout your website.
            </p>


            <div class="row g-3">


                <div class="col-md-4">


                    <button class="btn btn-primary w-100">

                        Primary Button

                    </button>


                </div>


                <div class="col-md-4">


                    <button class="btn btn-success w-100">

                        Success Button

                    </button>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                10. Optimize Bootstrap Files
            </h2>


            <p>
                For production websites, remove unused Bootstrap styles and minimize files.
            </p>


            <ul>


                <li>
                    Use compressed CSS files.
                </li>


                <li>
                    Remove unused components.
                </li>


                <li>
                    Optimize images.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                11. Use Semantic HTML
            </h2>


            <p>
                Combine Bootstrap with proper HTML5 semantic elements.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;header&gt;

&lt;nav&gt;

&lt;main&gt;

&lt;footer&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                12. Test on Multiple Devices
            </h2>


            <p>
                Always test Bootstrap websites on different screen sizes.
            </p>


            <ul>


                <li>
                    Mobile phones
                </li>


                <li>
                    Tablets
                </li>


                <li>
                    Laptops
                </li>


                <li>
                    Large monitors
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Common Mistakes to Avoid
            </h2>


            <table class="table table-danger table-bordered">


                <thead>


                    <tr>

                        <th>
                            Mistake
                        </th>

                        <th>
                            Solution
                        </th>

                    </tr>


                </thead>


                <tbody>


                    <tr>

                        <td>
                            Editing Bootstrap files
                        </td>

                        <td>
                            Use custom CSS.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Ignoring mobile design
                        </td>

                        <td>
                            Use responsive classes.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Too much custom CSS
                        </td>

                        <td>
                            Use Bootstrap utilities.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <div class="alert alert-success">


                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap Best Practices help developers create clean, responsive, and maintainable websites. By using the grid system correctly, following mobile-first design, using utility classes, and organizing custom CSS properly, developers can build professional Bootstrap 5 applications.

                </p>


            </div>


        </div>

    </div>

</div>

`
},

{
title:"Bootstrap Interview Questions",
content:`

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Bootstrap Interview Questions
            </h2>


            <p class="lead">
                <strong>Bootstrap Interview Questions</strong> help developers prepare for frontend development interviews by testing their knowledge of Bootstrap 5 concepts, components, utilities, and responsive design.
            </p>


            <p>
                Bootstrap is one of the most popular frontend frameworks. Many companies ask Bootstrap-related questions to check whether developers can create responsive and professional user interfaces.
            </p>


            <div class="alert alert-primary">

                <strong>Purpose:</strong>
                These questions cover basic to advanced Bootstrap 5 concepts that are commonly asked in interviews.

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Basic Bootstrap Interview Questions
            </h2>


            <div class="accordion" id="basicQuestions">


                <div class="accordion-item">


                    <h2 class="accordion-header">

                        <button class="accordion-button">

                            1. What is Bootstrap?

                        </button>

                    </h2>


                    <div class="accordion-body">

                        Bootstrap is an open-source frontend framework used to create responsive and mobile-first websites quickly. It provides ready-made CSS classes and JavaScript components.

                    </div>


                </div>


                <div class="accordion-item">


                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed">

                            2. Why is Bootstrap used?

                        </button>

                    </h2>


                    <div class="accordion-body">

                        Bootstrap is used because it provides responsive layouts, reusable components, utility classes, and faster web development.

                    </div>


                </div>


                <div class="accordion-item">


                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed">

                            3. What are the main features of Bootstrap 5?

                        </button>

                    </h2>


                    <div class="accordion-body">

                        Bootstrap 5 features include:
                        
                        <ul>
                            <li>Mobile-first design</li>
                            <li>Responsive grid system</li>
                            <li>Utility classes</li>
                            <li>Reusable components</li>
                            <li>Improved JavaScript</li>
                            <li>No jQuery dependency</li>
                        </ul>

                    </div>


                </div>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Grid System Questions
            </h2>


            <div class="card border-primary mb-3">


                <div class="card-body">


                    <h5>
                        4. What is the Bootstrap Grid System?
                    </h5>


                    <p>
                        Bootstrap Grid System is a responsive layout system based on rows and columns. It helps create layouts that work on different screen sizes.
                    </p>


                </div>


            </div>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;div class="row"&gt;

    &lt;div class="col-md-6"&gt;
        Column 1
    &lt;/div&gt;


    &lt;div class="col-md-6"&gt;
        Column 2
    &lt;/div&gt;

&lt;/div&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                5. How many columns are available in Bootstrap grid?
            </h2>


            <p>
                Bootstrap grid system contains 12 columns in a row.
            </p>


            <div class="progress mb-3">

                <div class="progress-bar" style="width:100%">
                    12 Columns
                </div>

            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Container Questions
            </h2>


            <h5>
                6. What is a container in Bootstrap?
            </h5>


            <p>
                A container is a wrapper element that controls the width and alignment of website content.
            </p>


            <table class="table table-bordered table-striped">


                <thead class="table-dark">

                    <tr>

                        <th>
                            Class
                        </th>

                        <th>
                            Purpose
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <tr>

                        <td>
                            container
                        </td>

                        <td>
                            Fixed responsive width.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            container-fluid
                        </td>

                        <td>
                            Full width container.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Components Questions
            </h2>


            <h5>
                7. What are Bootstrap Components?
            </h5>


            <p>
                Bootstrap components are reusable UI elements provided by Bootstrap.
            </p>


            <ul>


                <li>
                    Navbar
                </li>

                <li>
                    Cards
                </li>

                <li>
                    Buttons
                </li>

                <li>
                    Alerts
                </li>

                <li>
                    Modals
                </li>

                <li>
                    Carousel
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                8. What is Bootstrap Navbar?
            </h2>


            <p>
                Navbar is a responsive navigation component used to create website menus.
            </p>


            <div class="bg-dark text-white rounded p-3">


<pre><code>

&lt;nav class="navbar navbar-expand-lg navbar-dark bg-dark"&gt;

    Website Menu

&lt;/nav&gt;


</code></pre>


            </div>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Bootstrap Utility Questions
            </h2>


            <h5>
                9. What are Bootstrap Utility Classes?
            </h5>


            <p>
                Utility classes are small helper classes used for spacing, colors, display, flex, sizing, and more.
            </p>


            <table class="table table-bordered">


                <thead class="table-primary">

                    <tr>

                        <th>
                            Class
                        </th>

                        <th>
                            Function
                        </th>

                    </tr>


                </thead>


                <tbody>


                    <tr>

                        <td>
                            mt-3
                        </td>

                        <td>
                            Margin top.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            p-4
                        </td>

                        <td>
                            Padding.
                        </td>

                    </tr>


                    <tr>

                        <td>
                            text-center
                        </td>

                        <td>
                            Center text.
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Advanced Bootstrap Questions
            </h2>


            <h5>
                10. What is the difference between Bootstrap 4 and Bootstrap 5?
            </h5>


            <table class="table table-bordered">


                <thead class="table-dark">

                    <tr>

                        <th>
                            Bootstrap 4
                        </th>

                        <th>
                            Bootstrap 5
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <tr>

                        <td>
                            Uses jQuery
                        </td>

                        <td>
                            No jQuery dependency
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Limited utilities
                        </td>

                        <td>
                            More utility classes
                        </td>

                    </tr>


                    <tr>

                        <td>
                            Older grid system
                        </td>

                        <td>
                            Improved responsive grid
                        </td>

                    </tr>


                </tbody>


            </table>


            <hr class="my-4">


            <h5>
                11. Is Bootstrap mobile friendly?
            </h5>


            <p>
                Yes. Bootstrap follows a mobile-first approach and provides responsive classes for different screen sizes.
            </p>


            <hr class="my-4">


            <h5>
                12. Can Bootstrap be customized?
            </h5>


            <p>
                Yes. Bootstrap can be customized using custom CSS, CSS variables, and Sass.
            </p>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Practical Interview Tasks
            </h2>


            <ul class="list-group">


                <li class="list-group-item">
                    Create a responsive navbar.
                </li>


                <li class="list-group-item">
                    Design a login form.
                </li>


                <li class="list-group-item">
                    Create product cards.
                </li>


                <li class="list-group-item">
                    Build a responsive dashboard.
                </li>


                <li class="list-group-item">
                    Create a landing page using Bootstrap.
                </li>


            </ul>


            <hr class="my-4">


            <h2 class="text-primary mb-3">
                Interview Preparation Tips
            </h2>


            <ul>


                <li>
                    Understand Bootstrap grid system deeply.
                </li>


                <li>
                    Practice creating responsive layouts.
                </li>


                <li>
                    Learn Bootstrap components.
                </li>


                <li>
                    Build real projects.
                </li>


                <li>
                    Understand customization methods.
                </li>


            </ul>


            <hr class="my-4">


            <div class="alert alert-success">

                <h4 class="fw-bold">
                    Summary
                </h4>


                <p class="mb-0">

                    Bootstrap interview preparation requires understanding Bootstrap fundamentals, grid system, components, utilities, responsive design, and customization. Practical project experience is the best way to succeed in Bootstrap interviews.

                </p>


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