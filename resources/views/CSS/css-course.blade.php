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
        CSS
    </h3>
<a href="#" onclick="showLesson(0); return false;">CSS Home</a>
<a href="#" onclick="showLesson(1); return false;">Introduction to CSS</a>
<a href="#" onclick="showLesson(2); return false;">History of CSS</a>
<a href="#" onclick="showLesson(3); return false;">CSS Syntax</a>
<a href="#" onclick="showLesson(4); return false;">CSS Selectors</a>
<a href="#" onclick="showLesson(5); return false;">CSS Colors</a>
<a href="#" onclick="showLesson(6); return false;">CSS Backgrounds</a>
<a href="#" onclick="showLesson(7); return false;">CSS Borders</a>
<a href="#" onclick="showLesson(8); return false;">CSS Margins & Padding</a>
<a href="#" onclick="showLesson(9); return false;">CSS Text & Fonts</a>
<a href="#" onclick="showLesson(10); return false;">CSS Box Model</a>
<a href="#" onclick="showLesson(11); return false;">CSS Display & Position</a>
<a href="#" onclick="showLesson(12); return false;">CSS Flexbox</a>
<a href="#" onclick="showLesson(13); return false;">CSS Grid</a>
<a href="#" onclick="showLesson(14); return false;">CSS Responsive Design</a>
<a href="#" onclick="showLesson(15); return false;">CSS Animations & Transitions</a>
<a href="#" onclick="showLesson(16); return false;">CSS Variables</a>
<a href="#" onclick="showLesson(17); return false;">CSS Mini Projects</a>
<a href="#" onclick="showLesson(18); return false;">CSS Interview Questions</a>

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
title: "CSS Home",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Home
            </h2>

            <p class="lead">
                <strong>CSS (Cascading Style Sheets)</strong> is the standard stylesheet language used to design and style HTML web pages. CSS controls the appearance of web pages by defining colors, fonts, spacing, layouts, animations, and responsive designs.
            </p>

            <p>
                HTML provides the structure of a webpage, while CSS makes it attractive and visually appealing. Together with JavaScript, CSS forms one of the three core technologies of modern web development.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> CSS separates the design from the HTML structure, making websites easier to maintain and update.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                What You Will Learn
            </h3>

            <ul class="list-group">

                <li class="list-group-item">Introduction to CSS</li>

                <li class="list-group-item">History of CSS</li>

                <li class="list-group-item">CSS Syntax and Selectors</li>

                <li class="list-group-item">Colors and Backgrounds</li>

                <li class="list-group-item">Borders, Margins, and Padding</li>

                <li class="list-group-item">Fonts and Text Styling</li>

                <li class="list-group-item">CSS Box Model</li>

                <li class="list-group-item">Display and Position</li>

                <li class="list-group-item">Flexbox Layout</li>

                <li class="list-group-item">CSS Grid Layout</li>

                <li class="list-group-item">Responsive Web Design</li>

                <li class="list-group-item">Animations and Transitions</li>

                <li class="list-group-item">CSS Variables</li>

                <li class="list-group-item">Mini Projects</li>

                <li class="list-group-item">Interview Questions</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Why Learn CSS?
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    Makes websites beautiful and professional.
                </li>

                <li class="list-group-item">
                    Separates content from design.
                </li>

                <li class="list-group-item">
                    Creates responsive websites for all devices.
                </li>

                <li class="list-group-item">
                    Reduces duplicate code and improves maintenance.
                </li>

                <li class="list-group-item">
                    Works perfectly with HTML and JavaScript.
                </li>

                <li class="list-group-item">
                    Essential skill for every Front-End Developer.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Simple CSS Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;

&lt;style&gt;

h1{
    color: blue;
    text-align: center;
}

p{
    color: gray;
    font-size:20px;
}

&lt;/style&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;h1&gt;Welcome to CSS&lt;/h1&gt;

&lt;p&gt;CSS makes web pages beautiful.&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Output
            </h3>

            <div class="border rounded p-4 bg-light">

                <h1 class="text-primary text-center">
                    Welcome to CSS
                </h1>

                <p class="text-secondary fs-5">
                    CSS makes web pages beautiful.
                </p>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Advantages of CSS
            </h3>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Easy Website Styling
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Responsive Design
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Faster Development
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Reusable Styles
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Better User Experience
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Cleaner HTML Code
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Applications of CSS
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Application</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Website Design</td>

                            <td>Creates attractive and modern websites.</td>

                        </tr>

                        <tr>

                            <td>Responsive Layouts</td>

                            <td>Adjusts webpages for mobiles, tablets, and desktops.</td>

                        </tr>

                        <tr>

                            <td>Web Applications</td>

                            <td>Designs dashboards and software interfaces.</td>

                        </tr>

                        <tr>

                            <td>Landing Pages</td>

                            <td>Builds marketing and product pages.</td>

                        </tr>

                        <tr>

                            <td>Blogs & Portfolios</td>

                            <td>Styles personal and business websites.</td>

                        </tr>

                        <tr>

                            <td>Animations</td>

                            <td>Adds transitions and visual effects.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Versions
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Version</th>

                            <th>Released</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>CSS1</td>

                            <td>1996</td>

                        </tr>

                        <tr>

                            <td>CSS2</td>

                            <td>1998</td>

                        </tr>

                        <tr>

                            <td>CSS2.1</td>

                            <td>2011</td>

                        </tr>

                        <tr>

                            <td>CSS3</td>

                            <td>Introduced as modular specifications (ongoing)</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Technologies Used Together
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>Technology</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>HTML</td>

                            <td>Creates the webpage structure.</td>

                        </tr>

                        <tr>

                            <td>CSS</td>

                            <td>Styles the webpage.</td>

                        </tr>

                        <tr>

                            <td>JavaScript</td>

                            <td>Adds interactivity and dynamic behavior.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="alert alert-success mt-4">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    CSS (Cascading Style Sheets) is the language used to style HTML webpages. It controls colors, fonts, spacing, layouts, animations, and responsive designs. Learning CSS is an essential step toward becoming a professional Front-End or Full-Stack Web Developer. In this course, you will learn everything from basic CSS syntax to advanced layouts, responsive design, animations, variables, mini projects, and interview preparation.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Introduction to CSS",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Introduction to CSS
            </h2>

            <p class="lead">
                <strong>CSS (Cascading Style Sheets)</strong> is a stylesheet language used to control the appearance and layout of HTML documents. It allows developers to style web pages by changing colors, fonts, spacing, borders, backgrounds, positioning, animations, and responsive layouts.
            </p>

            <p>
                Without CSS, every webpage would appear as plain black text on a white background. CSS transforms simple HTML pages into beautiful, modern, and responsive websites.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> HTML provides the structure of a webpage, CSS controls its presentation, and JavaScript adds interactivity.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                What is CSS?
            </h3>

            <p>
                CSS is a language that describes how HTML elements should be displayed on a screen, printer, or other devices. It separates the design of a webpage from its content, making websites easier to maintain and update.
            </p>

            <p>
                A single CSS file can style multiple webpages, which saves development time and ensures a consistent look across an entire website.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Why Use CSS?
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    Makes websites attractive and visually appealing.
                </li>

                <li class="list-group-item">
                    Separates design from HTML content.
                </li>

                <li class="list-group-item">
                    Reduces repetitive code.
                </li>

                <li class="list-group-item">
                    Improves website maintenance.
                </li>

                <li class="list-group-item">
                    Supports responsive web design.
                </li>

                <li class="list-group-item">
                    Improves user experience.
                </li>

                <li class="list-group-item">
                    Works on all modern web browsers.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                How CSS Works
            </h3>

            <p>
                CSS works by selecting HTML elements and applying styles to them. A CSS rule consists of a selector and one or more declarations.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector {

    property: value;

}
</code></pre>

            </div>

            <p class="mt-3">
                Example:
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color: blue;

    text-align: center;

}
</code></pre>

            </div>

            <p class="mt-3">
                In this example:
            </p>

            <ul>

                <li><strong>h1</strong> is the selector.</li>

                <li><strong>color</strong> and <strong>text-align</strong> are properties.</li>

                <li><strong>blue</strong> and <strong>center</strong> are values.</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Types of CSS
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Type</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Inline CSS</td>

                            <td>Styles are written directly inside an HTML element using the <code>style</code> attribute.</td>

                        </tr>

                        <tr>

                            <td>Internal CSS</td>

                            <td>Styles are written inside the <code>&lt;style&gt;</code> tag within the HTML document.</td>

                        </tr>

                        <tr>

                            <td>External CSS</td>

                            <td>Styles are stored in a separate <code>.css</code> file and linked to HTML.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example of Internal CSS
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;style&gt;

body{

    background-color:#f8f9fa;

}

h1{

    color:blue;

}

p{

    color:gray;

}

&lt;/style&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Output
            </h3>

            <div class="border rounded p-4 bg-light">

                <h1 class="text-primary">
                    Welcome to CSS
                </h1>

                <p class="text-secondary">
                    CSS makes webpages beautiful and responsive.
                </p>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Advantages of CSS
            </h3>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Faster Website Development
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Reusable Styles
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Better Website Performance
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive Layouts
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Easy Maintenance
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Professional User Interface
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Applications of CSS
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    Designing websites
                </li>

                <li class="list-group-item">
                    Building responsive web applications
                </li>

                <li class="list-group-item">
                    Creating landing pages
                </li>

                <li class="list-group-item">
                    Developing dashboards
                </li>

                <li class="list-group-item">
                    Designing blogs and portfolios
                </li>

                <li class="list-group-item">
                    Creating animations and transitions
                </li>

                <li class="list-group-item">
                    Styling eCommerce websites
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                HTML vs CSS
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>HTML</th>

                            <th>CSS</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Creates webpage structure.</td>

                            <td>Styles webpage appearance.</td>

                        </tr>

                        <tr>

                            <td>Uses HTML tags.</td>

                            <td>Uses selectors and properties.</td>

                        </tr>

                        <tr>

                            <td>Defines page content.</td>

                            <td>Defines page design.</td>

                        </tr>

                        <tr>

                            <td>Cannot create attractive layouts alone.</td>

                            <td>Creates beautiful layouts and responsive designs.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="alert alert-success mt-4">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    CSS is the language used to style HTML webpages. It allows developers to create attractive, responsive, and user-friendly websites by controlling colors, fonts, spacing, layouts, animations, and much more. Learning CSS is essential for every web developer because it transforms plain HTML pages into professional websites.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "History of CSS",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                History of CSS
            </h2>

            <p class="lead">
                <strong>CSS (Cascading Style Sheets)</strong> was created to separate the design of a webpage from its content. Before CSS, web pages were styled directly inside HTML, making websites difficult to maintain and update.
            </p>

            <p>
                CSS made web development easier by allowing developers to write styles once and apply them across multiple web pages. Today, CSS is one of the three core technologies of the World Wide Web, alongside HTML and JavaScript.
            </p>

            <div class="alert alert-info">
                <strong>Did You Know?</strong> Before CSS was introduced, developers used HTML tags like <code>&lt;font&gt;</code> and attributes such as <code>bgcolor</code> to style webpages. These methods made HTML files large, repetitive, and difficult to maintain.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Who Developed CSS?
            </h3>

            <p>
                CSS was first proposed by <strong>Håkon Wium Lie</strong> on <strong>October 10, 1994</strong>. He introduced the idea of separating webpage presentation from its structure.
            </p>

            <p>
                Later, <strong>Bert Bos</strong> joined the project and worked with Håkon Wium Lie to improve the CSS specification. Together, they played a major role in the development of CSS.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Why Was CSS Created?
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    To separate webpage design from HTML content.
                </li>

                <li class="list-group-item">
                    To reduce repetitive formatting code.
                </li>

                <li class="list-group-item">
                    To improve website maintenance.
                </li>

                <li class="list-group-item">
                    To create consistent designs across multiple pages.
                </li>

                <li class="list-group-item">
                    To support responsive and modern web design.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Evolution of CSS
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Version</th>

                            <th>Year</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>CSS1</td>

                            <td>1996</td>

                            <td>First official CSS recommendation. Introduced fonts, colors, text formatting, margins, and backgrounds.</td>

                        </tr>

                        <tr>

                            <td>CSS2</td>

                            <td>1998</td>

                            <td>Added positioning, media types, tables, and advanced layout features.</td>

                        </tr>

                        <tr>

                            <td>CSS2.1</td>

                            <td>2011</td>

                            <td>Improved browser compatibility and fixed issues found in CSS2.</td>

                        </tr>

                        <tr>

                            <td>CSS3</td>

                            <td>Ongoing</td>

                            <td>Introduced modules such as Flexbox, Grid, Animations, Transitions, Gradients, Shadows, Media Queries, and many modern features.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Timeline of CSS
            </h3>

            <div class="table-responsive">

                <table class="table table-striped table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Year</th>

                            <th>Event</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1994</td>

                            <td>Håkon Wium Lie proposed CSS.</td>

                        </tr>

                        <tr>

                            <td>1995</td>

                            <td>Bert Bos joined the CSS project.</td>

                        </tr>

                        <tr>

                            <td>1996</td>

                            <td>CSS1 became an official W3C Recommendation.</td>

                        </tr>

                        <tr>

                            <td>1998</td>

                            <td>CSS2 was released with advanced layout features.</td>

                        </tr>

                        <tr>

                            <td>2011</td>

                            <td>CSS2.1 became the official recommendation.</td>

                        </tr>

                        <tr>

                            <td>2011–Present</td>

                            <td>CSS3 modules continue to evolve with new features and improvements.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Major Features Introduced in CSS3
            </h3>

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="alert alert-primary text-center mb-0">
                        Flexbox Layout
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-success text-center mb-0">
                        CSS Grid
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-warning text-center mb-0">
                        Media Queries
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-info text-center mb-0">
                        Animations
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-secondary text-center mb-0">
                        Transitions
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-danger text-center mb-0">
                        Rounded Corners & Shadows
                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Importance of CSS Today
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    Used in every modern website.
                </li>

                <li class="list-group-item">
                    Essential for responsive web design.
                </li>

                <li class="list-group-item">
                    Supports mobile-first development.
                </li>

                <li class="list-group-item">
                    Creates attractive user interfaces.
                </li>

                <li class="list-group-item">
                    Improves website performance and maintainability.
                </li>

                <li class="list-group-item">
                    Works seamlessly with HTML and JavaScript.
                </li>

            </ul>

            <div class="alert alert-success mt-4">

                <h4 class="fw-bold">
                    Summary
                </h4>

                <p class="mb-0">
                    CSS was proposed by <strong>Håkon Wium Lie</strong> in 1994 to separate webpage design from HTML content. <strong>Bert Bos</strong> later contributed to its development. Since the release of CSS1 in 1996, CSS has evolved into a powerful styling language with modern features such as Flexbox, Grid, Animations, Transitions, and Responsive Design. Today, CSS is an essential technology for building professional, attractive, and responsive websites.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Syntax",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Syntax
            </h2>

            <p class="lead">
                <strong>CSS Syntax</strong> defines the rules for writing CSS code. Every CSS rule consists of a <strong>selector</strong> and one or more <strong>declarations</strong> that specify how the selected HTML elements should be displayed.
            </p>

            <p>
                Understanding CSS syntax is the first step toward creating beautiful and responsive websites. A correctly written CSS rule allows browsers to apply styles efficiently.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> CSS rules are written inside curly braces <code>{ }</code>. Each declaration ends with a semicolon (<code>;</code>).
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Basic CSS Syntax
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector {

    property: value;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Syntax Breakdown
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Part</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><strong>Selector</strong></td>

                            <td>Selects the HTML element to style.</td>

                        </tr>

                        <tr>

                            <td><strong>Property</strong></td>

                            <td>Defines what style should be changed.</td>

                        </tr>

                        <tr>

                            <td><strong>Value</strong></td>

                            <td>Specifies the value of the property.</td>

                        </tr>

                        <tr>

                            <td><strong>Declaration</strong></td>

                            <td>A property and value together.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example 1
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color: blue;

}
</code></pre>

            </div>

            <p class="mt-3">
                Here:
            </p>

            <ul class="list-group">

                <li class="list-group-item">
                    <strong>h1</strong> is the selector.
                </li>

                <li class="list-group-item">
                    <strong>color</strong> is the property.
                </li>

                <li class="list-group-item">
                    <strong>blue</strong> is the value.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example 2 (Multiple Properties)
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>p{

    color: gray;

    font-size:20px;

    text-align:center;

}
</code></pre>

            </div>

            <div class="border rounded p-4 bg-light mt-3">

                <p class="text-secondary text-center fs-5 mb-0">
                    CSS allows multiple properties inside one rule.
                </p>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Comments
            </h3>

            <p>
                Comments are used to explain code and are ignored by the browser.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>/* This is a CSS comment */

h1{

    color:red;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Multiple CSS Rules
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    background:#f8f9fa;

}

h1{

    color:blue;

}

p{

    color:#555;

    font-size:18px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Syntax Rules
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    Every CSS rule begins with a selector.
                </li>

                <li class="list-group-item">
                    Declarations are enclosed inside curly braces <code>{ }</code>.
                </li>

                <li class="list-group-item">
                    Each property is followed by a colon (<code>:</code>).
                </li>

                <li class="list-group-item">
                    Every declaration ends with a semicolon (<code>;</code>).
                </li>

                <li class="list-group-item">
                    Property names are not case-sensitive, but lowercase is recommended.
                </li>

                <li class="list-group-item">
                    Proper indentation makes CSS easier to read.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common CSS Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Property</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>color</td>

                            <td>Changes text color.</td>

                        </tr>

                        <tr>

                            <td>background-color</td>

                            <td>Changes background color.</td>

                        </tr>

                        <tr>

                            <td>font-size</td>

                            <td>Sets text size.</td>

                        </tr>

                        <tr>

                            <td>font-family</td>

                            <td>Changes font style.</td>

                        </tr>

                        <tr>

                            <td>margin</td>

                            <td>Adds outer spacing.</td>

                        </tr>

                        <tr>

                            <td>padding</td>

                            <td>Adds inner spacing.</td>

                        </tr>

                        <tr>

                            <td>border</td>

                            <td>Adds borders around elements.</td>

                        </tr>

                        <tr>

                            <td>text-align</td>

                            <td>Aligns text.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use proper indentation.</li>

                                <li>Write meaningful comments.</li>

                                <li>Group related properties.</li>

                                <li>Use lowercase property names.</li>

                                <li>Keep CSS clean and organized.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Missing semicolons.</li>

                                <li>Unmatched curly braces.</li>

                                <li>Duplicate CSS rules.</li>

                                <li>Writing all code on one line.</li>

                                <li>Using unnecessary inline CSS.</li>

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
                    CSS syntax consists of a selector followed by one or more declarations enclosed in curly braces. Each declaration contains a property and a value separated by a colon, and ends with a semicolon. Understanding CSS syntax is essential because every CSS rule follows this structure, making it the foundation of all web page styling.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Selectors",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Selectors
            </h2>

            <p class="lead">
                <strong>CSS Selectors</strong> are used to select HTML elements that you want to style. A selector tells the browser which HTML elements should receive the specified CSS rules.
            </p>

            <p>
                CSS provides different types of selectors, allowing developers to target individual elements, groups of elements, elements with specific classes or IDs, and much more. Understanding selectors is one of the most important parts of learning CSS.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Without selectors, CSS would not know which HTML elements should be styled.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Basic Syntax
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector{

    property: value;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Types of CSS Selectors
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Selector</th>

                            <th>Description</th>

                            <th>Example</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Universal Selector</td>

                            <td>Selects every element.</td>

                            <td><code>*</code></td>

                        </tr>

                        <tr>

                            <td>Element Selector</td>

                            <td>Selects all HTML elements of a specific type.</td>

                            <td><code>p</code></td>

                        </tr>

                        <tr>

                            <td>Class Selector</td>

                            <td>Selects elements with a specific class.</td>

                            <td><code>.box</code></td>

                        </tr>

                        <tr>

                            <td>ID Selector</td>

                            <td>Selects an element with a specific ID.</td>

                            <td><code>#header</code></td>

                        </tr>

                        <tr>

                            <td>Grouping Selector</td>

                            <td>Selects multiple elements together.</td>

                            <td><code>h1,p</code></td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                1. Universal Selector (*)
            </h3>

            <p>
                The universal selector applies styles to every HTML element on the page.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>*{

    margin:0;

    padding:0;

    box-sizing:border-box;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                2. Element Selector
            </h3>

            <p>
                The element selector styles all HTML elements of the specified type.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:blue;

}

p{

    color:gray;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                3. Class Selector
            </h3>

            <p>
                The class selector begins with a dot (<code>.</code>) and styles all elements that have the specified class.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.box{

    background:skyblue;

    padding:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                HTML Example:
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="box"&gt;

Welcome

&lt;/div&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                4. ID Selector
            </h3>

            <p>
                The ID selector begins with a hash (<code>#</code>) and targets one unique element.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>#header{

    background:black;

    color:white;

}
</code></pre>

            </div>

            <p class="mt-3">
                HTML Example:
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div id="header"&gt;

Website Header

&lt;/div&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                5. Grouping Selector
            </h3>

            <p>
                Multiple elements can be styled together by separating selectors with commas.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1,h2,p{

    color:green;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Advanced Selectors
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Selector</th>

                            <th>Description</th>

                            <th>Example</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Descendant</td>

                            <td>Selects elements inside another element.</td>

                            <td><code>div p</code></td>

                        </tr>

                        <tr>

                            <td>Child</td>

                            <td>Selects direct child elements.</td>

                            <td><code>div > p</code></td>

                        </tr>

                        <tr>

                            <td>Adjacent Sibling</td>

                            <td>Selects the next sibling.</td>

                            <td><code>h1 + p</code></td>

                        </tr>

                        <tr>

                            <td>General Sibling</td>

                            <td>Selects all following siblings.</td>

                            <td><code>h1 ~ p</code></td>

                        </tr>

                        <tr>

                            <td>Attribute Selector</td>

                            <td>Selects elements by attribute.</td>

                            <td><code>input[type="text"]</code></td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Selector Priority
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>Priority</th>

                            <th>Selector</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Highest</td>

                            <td>Inline Style</td>

                        </tr>

                        <tr>

                            <td>High</td>

                            <td>ID Selector</td>

                        </tr>

                        <tr>

                            <td>Medium</td>

                            <td>Class Selector</td>

                        </tr>

                        <tr>

                            <td>Low</td>

                            <td>Element Selector</td>

                        </tr>

                        <tr>

                            <td>Lowest</td>

                            <td>Universal Selector</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use class selectors for reusable styles.</li>

                                <li>Use IDs only for unique elements.</li>

                                <li>Keep selectors simple and readable.</li>

                                <li>Group similar selectors when possible.</li>

                                <li>Avoid unnecessary nesting.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using too many ID selectors.</li>

                                <li>Writing overly complex selectors.</li>

                                <li>Duplicating CSS rules.</li>

                                <li>Using inline CSS whenever possible.</li>

                                <li>Creating deeply nested selectors.</li>

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
                    CSS selectors determine which HTML elements receive styles. Common selectors include the Universal Selector (*), Element Selector, Class Selector, ID Selector, and Grouping Selector. CSS also provides advanced selectors such as descendant, child, sibling, and attribute selectors, allowing developers to precisely target elements and build clean, maintainable stylesheets.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Colors",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Colors
            </h2>

            <p class="lead">
                <strong>CSS Colors</strong> are used to define the color of text, backgrounds, borders, shadows, and many other elements on a webpage. Using colors effectively makes websites attractive, readable, and user-friendly.
            </p>

            <p>
                CSS supports several methods for specifying colors, including color names, hexadecimal values, RGB, RGBA, HSL, and HSLA. Developers can choose the method that best fits their project.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Colors can be applied to almost every HTML element using different CSS properties such as <code>color</code>, <code>background-color</code>, and <code>border-color</code>.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Color Property
            </h3>

            <p>
                The <code>color</code> property changes the text color of an HTML element.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color: blue;

}

p{

    color: red;

}
</code></pre>

            </div>

            <div class="border rounded p-4 bg-light mt-3">

                <h1 class="text-primary">
                    This is a Blue Heading
                </h1>

                <p class="text-danger mb-0">
                    This is a Red Paragraph.
                </p>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Background Color
            </h3>

            <p>
                The <code>background-color</code> property changes the background color of an element.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    background-color: lightgray;

}

div{

    background-color: yellow;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Methods of Specifying Colors
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Method</th>

                            <th>Example</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Color Name</td>

                            <td><code>red</code></td>

                            <td>Uses predefined color names.</td>

                        </tr>

                        <tr>

                            <td>Hexadecimal</td>

                            <td><code>#FF0000</code></td>

                            <td>Uses hexadecimal values.</td>

                        </tr>

                        <tr>

                            <td>RGB</td>

                            <td><code>rgb(255,0,0)</code></td>

                            <td>Uses Red, Green, and Blue values.</td>

                        </tr>

                        <tr>

                            <td>RGBA</td>

                            <td><code>rgba(255,0,0,0.5)</code></td>

                            <td>RGB with transparency.</td>

                        </tr>

                        <tr>

                            <td>HSL</td>

                            <td><code>hsl(0,100%,50%)</code></td>

                            <td>Hue, Saturation, and Lightness.</td>

                        </tr>

                        <tr>

                            <td>HSLA</td>

                            <td><code>hsla(0,100%,50%,0.5)</code></td>

                            <td>HSL with transparency.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                1. Color Names
            </h3>

            <p>
                CSS provides over 140 predefined color names.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color: green;

}

p{

    color: orange;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                2. Hexadecimal Colors
            </h3>

            <p>
                Hexadecimal colors begin with the <code>#</code> symbol followed by six hexadecimal digits.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:#0000FF;

}

p{

    color:#FF0000;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                3. RGB Colors
            </h3>

            <p>
                RGB stands for <strong>Red, Green, and Blue</strong>. Each value ranges from 0 to 255.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:rgb(0,0,255);

}

p{

    color:rgb(255,0,0);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                4. RGBA Colors
            </h3>

            <p>
                RGBA adds an alpha channel for transparency. The alpha value ranges from 0 (transparent) to 1 (opaque).
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    background:rgba(0,0,255,0.5);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                5. HSL Colors
            </h3>

            <p>
                HSL stands for <strong>Hue, Saturation, and Lightness</strong>.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:hsl(120,100%,40%);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common CSS Color Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>color</code></td>

                            <td>Changes text color.</td>

                        </tr>

                        <tr>

                            <td><code>background-color</code></td>

                            <td>Changes background color.</td>

                        </tr>

                        <tr>

                            <td><code>border-color</code></td>

                            <td>Changes border color.</td>

                        </tr>

                        <tr>

                            <td><code>outline-color</code></td>

                            <td>Changes outline color.</td>

                        </tr>

                        <tr>

                            <td><code>box-shadow</code></td>

                            <td>Creates colored shadows.</td>

                        </tr>

                        <tr>

                            <td><code>text-shadow</code></td>

                            <td>Adds colored shadows to text.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use consistent color schemes.</li>

                                <li>Maintain sufficient text contrast.</li>

                                <li>Use HEX or RGB for precise colors.</li>

                                <li>Use RGBA for transparency effects.</li>

                                <li>Choose colors that improve readability.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using too many bright colors.</li>

                                <li>Poor text-background contrast.</li>

                                <li>Random color combinations.</li>

                                <li>Ignoring accessibility guidelines.</li>

                                <li>Overusing transparency.</li>

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
                    CSS Colors are essential for designing attractive and user-friendly websites. CSS supports multiple color formats such as color names, hexadecimal, RGB, RGBA, HSL, and HSLA. By combining text colors, background colors, borders, and transparency, developers can create modern, responsive, and visually appealing web pages.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Backgrounds",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Backgrounds
            </h2>

            <p class="lead">
                <strong>CSS Backgrounds</strong> are used to define the background appearance of HTML elements. You can set background colors, images, gradients, positions, sizes, and repeat behavior to make web pages more attractive.
            </p>

            <p>
                Background properties can be applied to the entire webpage or to individual elements such as <code>&lt;div&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;header&gt;</code>, and many others.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> CSS allows multiple background properties to be combined into a single <code>background</code> shorthand property.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Background Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>background-color</code></td>

                            <td>Sets the background color of an element.</td>

                        </tr>

                        <tr>

                            <td><code>background-image</code></td>

                            <td>Sets an image as the background.</td>

                        </tr>

                        <tr>

                            <td><code>background-repeat</code></td>

                            <td>Controls whether the image repeats.</td>

                        </tr>

                        <tr>

                            <td><code>background-position</code></td>

                            <td>Sets the starting position of the image.</td>

                        </tr>

                        <tr>

                            <td><code>background-size</code></td>

                            <td>Controls the size of the background image.</td>

                        </tr>

                        <tr>

                            <td><code>background-attachment</code></td>

                            <td>Specifies whether the background scrolls or stays fixed.</td>

                        </tr>

                        <tr>

                            <td><code>background</code></td>

                            <td>Shorthand property for all background properties.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                1. Background Color
            </h3>

            <p>
                The <code>background-color</code> property changes the background color of an element.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    background-color: lightblue;

}
</code></pre>

            </div>

            <div class="border rounded bg-info-subtle p-3 mt-3">

                This area has a light blue background.

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                2. Background Image
            </h3>

            <p>
                The <code>background-image</code> property sets an image as the background of an element.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    background-image:url("background.jpg");

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                3. Background Repeat
            </h3>

            <p>
                By default, background images repeat both horizontally and vertically.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>background-repeat: repeat;

background-repeat: no-repeat;

background-repeat: repeat-x;

background-repeat: repeat-y;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                4. Background Position
            </h3>

            <p>
                The <code>background-position</code> property specifies where the background image appears.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>background-position: center;

background-position: top right;

background-position: bottom left;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                5. Background Size
            </h3>

            <p>
                The <code>background-size</code> property controls the size of the background image.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>background-size: cover;

background-size: contain;

background-size: 300px 200px;
</code></pre>

            </div>

            <div class="alert alert-warning mt-3">
                <strong>cover</strong> fills the entire container, while
                <strong>contain</strong> ensures the entire image remains visible.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                6. Background Attachment
            </h3>

            <p>
                The <code>background-attachment</code> property controls whether the background scrolls with the page.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>background-attachment: scroll;

background-attachment: fixed;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                7. Shorthand Background Property
            </h3>

            <p>
                Instead of writing several background properties separately, you can combine them into one line.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    background: #f8f9fa
                url("background.jpg")
                no-repeat
                center center
                fixed;

    background-size: cover;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Gradient Backgrounds
            </h3>

            <p>
                CSS gradients allow smooth transitions between two or more colors without using an image.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>background: linear-gradient(to right, blue, purple);

background: radial-gradient(circle, yellow, orange);
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common Background Values
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>repeat</code></td>

                            <td>Repeats the image in both directions.</td>

                        </tr>

                        <tr>

                            <td><code>no-repeat</code></td>

                            <td>Displays only one image.</td>

                        </tr>

                        <tr>

                            <td><code>cover</code></td>

                            <td>Fills the entire container.</td>

                        </tr>

                        <tr>

                            <td><code>contain</code></td>

                            <td>Fits the entire image inside the container.</td>

                        </tr>

                        <tr>

                            <td><code>center</code></td>

                            <td>Centers the background image.</td>

                        </tr>

                        <tr>

                            <td><code>fixed</code></td>

                            <td>Background stays fixed while scrolling.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use high-quality optimized images.</li>

                                <li>Use <code>cover</code> for hero sections.</li>

                                <li>Use gradients for modern designs.</li>

                                <li>Choose readable text over backgrounds.</li>

                                <li>Compress large background images.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using very large images.</li>

                                <li>Low-contrast text on backgrounds.</li>

                                <li>Repeating images unnecessarily.</li>

                                <li>Too many background effects.</li>

                                <li>Ignoring mobile responsiveness.</li>

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
                    CSS Backgrounds allow developers to style webpages using colors, images, gradients, and various positioning options. Properties such as <code>background-color</code>, <code>background-image</code>, <code>background-repeat</code>, <code>background-size</code>, and <code>background-position</code> provide complete control over an element's background, helping create attractive and responsive web designs.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Borders",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Borders
            </h2>

            <p class="lead">
                <strong>CSS Borders</strong> are used to create a line around HTML elements. Borders help separate content, highlight important sections, improve the appearance of web pages, and create attractive layouts.
            </p>

            <p>
                CSS provides complete control over borders, allowing you to change their width, style, color, and even create rounded corners.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> A border consists of three main properties:
                <strong>border-width</strong>,
                <strong>border-style</strong>, and
                <strong>border-color</strong>.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Syntax
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector{

    border: width style color;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border:2px solid blue;

}
</code></pre>

            </div>

            <div class="border border-primary border-2 rounded p-3 mt-3 bg-light">

                This div has a blue solid border.

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>border-width</code></td>

                            <td>Specifies the thickness of the border.</td>

                        </tr>

                        <tr>

                            <td><code>border-style</code></td>

                            <td>Defines the style of the border.</td>

                        </tr>

                        <tr>

                            <td><code>border-color</code></td>

                            <td>Sets the border color.</td>

                        </tr>

                        <tr>

                            <td><code>border</code></td>

                            <td>Shorthand property for width, style, and color.</td>

                        </tr>

                        <tr>

                            <td><code>border-radius</code></td>

                            <td>Creates rounded corners.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Width
            </h3>

            <p>
                The <code>border-width</code> property specifies how thick the border should be.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border-width:5px;

    border-style:solid;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Style
            </h3>

            <p>
                The <code>border-style</code> property determines the appearance of the border.
            </p>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Style</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>solid</code></td>

                            <td>Single solid line.</td>

                        </tr>

                        <tr>

                            <td><code>dashed</code></td>

                            <td>Series of dashes.</td>

                        </tr>

                        <tr>

                            <td><code>dotted</code></td>

                            <td>Series of dots.</td>

                        </tr>

                        <tr>

                            <td><code>double</code></td>

                            <td>Two solid lines.</td>

                        </tr>

                        <tr>

                            <td><code>groove</code></td>

                            <td>3D grooved border.</td>

                        </tr>

                        <tr>

                            <td><code>ridge</code></td>

                            <td>3D ridged border.</td>

                        </tr>

                        <tr>

                            <td><code>inset</code></td>

                            <td>3D inset effect.</td>

                        </tr>

                        <tr>

                            <td><code>outset</code></td>

                            <td>3D outset effect.</td>

                        </tr>

                        <tr>

                            <td><code>none</code></td>

                            <td>No border.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Color
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border:3px solid red;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Rounded Borders
            </h3>

            <p>
                The <code>border-radius</code> property creates rounded corners.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border:2px solid blue;

    border-radius:15px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Individual Borders
            </h3>

            <p>
                CSS allows styling each side of a border separately.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border-top:3px solid red;

    border-right:3px dashed blue;

    border-bottom:3px dotted green;

    border-left:3px double orange;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Border Shorthand
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    border:2px solid black;

}
</code></pre>

            </div>

            <p class="mt-3">
                This single line combines:
            </p>

            <ul class="list-group">

                <li class="list-group-item">Border Width</li>

                <li class="list-group-item">Border Style</li>

                <li class="list-group-item">Border Color</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common Border Examples
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>CSS Code</th>

                            <th>Result</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>border:1px solid black;</code></td>

                            <td>Thin black border</td>

                        </tr>

                        <tr>

                            <td><code>border:2px dashed blue;</code></td>

                            <td>Blue dashed border</td>

                        </tr>

                        <tr>

                            <td><code>border:3px dotted red;</code></td>

                            <td>Red dotted border</td>

                        </tr>

                        <tr>

                            <td><code>border:4px double green;</code></td>

                            <td>Green double border</td>

                        </tr>

                        <tr>

                            <td><code>border-radius:50%;</code></td>

                            <td>Creates a circle (if width and height are equal)</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use subtle border colors.</li>

                                <li>Keep border widths consistent.</li>

                                <li>Use border-radius for modern UI.</li>

                                <li>Use shorthand whenever possible.</li>

                                <li>Maintain a clean design.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using too many border styles.</li>

                                <li>Very thick borders unnecessarily.</li>

                                <li>Bright colors everywhere.</li>

                                <li>Mixing multiple styles randomly.</li>

                                <li>Ignoring responsive layouts.</li>

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
                    CSS Borders allow developers to create attractive outlines around HTML elements. By using properties such as <code>border-width</code>, <code>border-style</code>, <code>border-color</code>, and <code>border-radius</code>, you can design modern cards, buttons, forms, tables, and layouts. Borders are an essential part of professional web design.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Margins & Padding",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Margins & Padding
            </h2>

            <p class="lead">
                <strong>Margins</strong> and <strong>Padding</strong> are two of the most important CSS properties used to create spacing around HTML elements. Understanding the difference between them is essential for designing clean, responsive, and professional web pages.
            </p>

            <p>
                Although margins and padding both create space, they work in different ways. <strong>Margin</strong> creates space outside an element's border, while <strong>Padding</strong> creates space inside the border between the content and the border.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Margin is the outer spacing, while padding is the inner spacing.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Margin vs Padding
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Margin</th>

                            <th>Padding</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Creates space outside the border.</td>

                            <td>Creates space inside the border.</td>

                        </tr>

                        <tr>

                            <td>Background color does not cover the margin.</td>

                            <td>Background color covers the padding area.</td>

                        </tr>

                        <tr>

                            <td>Separates elements from each other.</td>

                            <td>Adds space around the content.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Margin
            </h3>

            <p>
                The <code>margin</code> property creates space outside an element's border.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    margin:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                The above code adds 20 pixels of space on all four sides of the element.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Individual Margin Properties
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    margin-top:20px;

    margin-right:30px;

    margin-bottom:20px;

    margin-left:30px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Margin Shorthand
            </h3>

            <p>
                Instead of writing four separate properties, you can use the shorthand property.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>margin:20px;

margin:20px 40px;

margin:20px 30px 40px;

margin:10px 20px 30px 40px;
</code></pre>

            </div>

            <div class="table-responsive mt-3">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Syntax</th>

                            <th>Meaning</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>margin:20px;</code></td>

                            <td>All four sides = 20px</td>

                        </tr>

                        <tr>

                            <td><code>margin:20px 40px;</code></td>

                            <td>Top & Bottom = 20px, Left & Right = 40px</td>

                        </tr>

                        <tr>

                            <td><code>margin:20px 30px 40px;</code></td>

                            <td>Top = 20px, Left & Right = 30px, Bottom = 40px</td>

                        </tr>

                        <tr>

                            <td><code>margin:10px 20px 30px 40px;</code></td>

                            <td>Top, Right, Bottom, Left</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Auto Margin
            </h3>

            <p>
                Auto margins are commonly used to center block-level elements horizontally.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    width:300px;

    margin:auto;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Padding
            </h3>

            <p>
                The <code>padding</code> property creates space between the content and the border.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    padding:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                This adds 20 pixels of space inside the element.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Individual Padding Properties
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    padding-top:20px;

    padding-right:30px;

    padding-bottom:20px;

    padding-left:30px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Padding Shorthand
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>padding:20px;

padding:20px 40px;

padding:20px 30px 40px;

padding:10px 20px 30px 40px;
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.box{

    width:300px;

    margin:30px auto;

    padding:20px;

    border:2px solid blue;

    background:#f8f9fa;

}
</code></pre>

            </div>

            <div class="border border-primary rounded p-4 bg-light mt-3">

                This box has margin outside and padding inside.

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Margin & Padding Diagram
            </h3>

            <div class="border rounded p-4 bg-light">

<pre class="mb-0 text-center">

+---------------------------+
|          Margin           |
|  +---------------------+  |
|  |      Border         |  |
|  |  +---------------+  |  |
|  |  |   Padding     |  |  |
|  |  | +-----------+ |  |  |
|  |  | | Content   | |  |  |
|  |  | +-----------+ |  |  |
|  |  +---------------+  |  |
|  +---------------------+  |
+---------------------------+

</pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use padding to improve readability.</li>

                                <li>Use margins to separate sections.</li>

                                <li>Keep spacing consistent.</li>

                                <li>Use shorthand properties whenever possible.</li>

                                <li>Use <code>margin:auto</code> to center containers.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using excessive spacing.</li>

                                <li>Mixing random margin values.</li>

                                <li>Using padding instead of margin for layout.</li>

                                <li>Ignoring mobile responsiveness.</li>

                                <li>Creating inconsistent spacing.</li>

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
                    Margins and padding are fundamental CSS properties used to control spacing. Margins create space outside an element, while padding creates space inside the border. Mastering these properties helps you build clean, organized, responsive, and professional-looking web pages.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Text & Fonts",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Text & Fonts
            </h2>

            <p class="lead">
                <strong>CSS Text and Fonts</strong> are used to control the appearance of text on a webpage. They help improve readability, visual appeal, and user experience by allowing developers to customize font styles, sizes, spacing, alignment, decoration, and much more.
            </p>

            <p>
                CSS provides many properties to format text and fonts. Using these properties correctly helps create modern, responsive, and professional-looking websites.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Good typography is an important part of web design. Choose readable fonts, appropriate sizes, and proper spacing for the best user experience.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                CSS Text Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>color</code></td>

                            <td>Changes the text color.</td>

                        </tr>

                        <tr>

                            <td><code>text-align</code></td>

                            <td>Aligns text horizontally.</td>

                        </tr>

                        <tr>

                            <td><code>text-decoration</code></td>

                            <td>Adds or removes text decorations.</td>

                        </tr>

                        <tr>

                            <td><code>text-transform</code></td>

                            <td>Changes letter capitalization.</td>

                        </tr>

                        <tr>

                            <td><code>text-indent</code></td>

                            <td>Indents the first line of text.</td>

                        </tr>

                        <tr>

                            <td><code>letter-spacing</code></td>

                            <td>Controls space between letters.</td>

                        </tr>

                        <tr>

                            <td><code>word-spacing</code></td>

                            <td>Controls space between words.</td>

                        </tr>

                        <tr>

                            <td><code>line-height</code></td>

                            <td>Controls spacing between text lines.</td>

                        </tr>

                        <tr>

                            <td><code>text-shadow</code></td>

                            <td>Adds shadow effects to text.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Text Color
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:blue;

}

p{

    color:#555;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Text Alignment
            </h3>

            <p>
                The <code>text-align</code> property aligns text horizontally.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    text-align:center;

}

p{

    text-align:justify;

}
</code></pre>

            </div>

            <div class="table-responsive mt-3">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>left</code></td>

                            <td>Aligns text to the left.</td>

                        </tr>

                        <tr>

                            <td><code>right</code></td>

                            <td>Aligns text to the right.</td>

                        </tr>

                        <tr>

                            <td><code>center</code></td>

                            <td>Centers the text.</td>

                        </tr>

                        <tr>

                            <td><code>justify</code></td>

                            <td>Stretches text evenly.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Text Decoration
            </h3>

            <p>
                The <code>text-decoration</code> property adds or removes decorations from text.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>a{

    text-decoration:none;

}

h2{

    text-decoration:underline;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Text Transformation
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    text-transform:uppercase;

}

p{

    text-transform:capitalize;

}
</code></pre>

            </div>

            <div class="table-responsive mt-3">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>uppercase</code></td>

                            <td>Converts text to uppercase.</td>

                        </tr>

                        <tr>

                            <td><code>lowercase</code></td>

                            <td>Converts text to lowercase.</td>

                        </tr>

                        <tr>

                            <td><code>capitalize</code></td>

                            <td>Capitalizes the first letter of each word.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Letter & Word Spacing
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    letter-spacing:3px;

}

p{

    word-spacing:8px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Line Height
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>p{

    line-height:1.8;

}
</code></pre>

            </div>

            <p class="mt-3">
                Increasing line height improves readability, especially for long paragraphs.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Text Shadow
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    text-shadow:2px 2px 5px gray;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary fw-bold mt-5 mb-4">
                CSS Font Properties
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>font-family</code></td>

                            <td>Specifies the font style.</td>

                        </tr>

                        <tr>

                            <td><code>font-size</code></td>

                            <td>Sets the font size.</td>

                        </tr>

                        <tr>

                            <td><code>font-weight</code></td>

                            <td>Controls text thickness.</td>

                        </tr>

                        <tr>

                            <td><code>font-style</code></td>

                            <td>Applies italic text.</td>

                        </tr>

                        <tr>

                            <td><code>font-variant</code></td>

                            <td>Displays small capital letters.</td>

                        </tr>

                        <tr>

                            <td><code>font</code></td>

                            <td>Shorthand property.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Font Family
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>body{

    font-family:Arial, Helvetica, sans-serif;

}
</code></pre>

            </div>

            <p class="mt-3">
                Common font families include:
            </p>

            <ul class="list-group">

                <li class="list-group-item">Arial</li>

                <li class="list-group-item">Verdana</li>

                <li class="list-group-item">Tahoma</li>

                <li class="list-group-item">Georgia</li>

                <li class="list-group-item">Times New Roman</li>

                <li class="list-group-item">Courier New</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Font Size
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    font-size:36px;

}

p{

    font-size:18px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Font Weight & Style
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    font-weight:bold;

}

em{

    font-style:italic;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Font Shorthand
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>p{

    font:italic bold 18px Arial, sans-serif;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use readable font families.</li>

                                <li>Maintain consistent font sizes.</li>

                                <li>Use sufficient line spacing.</li>

                                <li>Limit the number of font families.</li>

                                <li>Use responsive font sizes when possible.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using too many different fonts.</li>

                                <li>Very small text sizes.</li>

                                <li>Poor text contrast.</li>

                                <li>Excessive text shadows.</li>

                                <li>Overusing uppercase text.</li>

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
                    CSS Text and Font properties allow developers to control the appearance and readability of text. Properties such as <code>color</code>, <code>text-align</code>, <code>text-decoration</code>, <code>font-family</code>, <code>font-size</code>, and <code>font-weight</code> are essential for creating beautiful, accessible, and professional websites.
                </p>

            </div>

        </div>

    </div>

</div>

`
},


{
title:"CSS Box Model",
content:`

<div class="container-fluid py-3">

    <div class="card shadow border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Box Model
            </h2>

            <p class="lead">
                Every HTML element displayed on a web page is treated as a rectangular box. CSS uses the Box Model to determine the size of an element and the amount of space it occupies on the page. Understanding the Box Model is one of the most important concepts in CSS because it affects layout, spacing, alignment, and responsive design.
            </p>

            <div class="alert alert-primary">

                <strong>Definition:</strong>

                The CSS Box Model is a layout model that describes how every HTML element is represented as a rectangular box consisting of <strong>Content</strong>, <strong>Padding</strong>, <strong>Border</strong>, and <strong>Margin</strong>.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Learn the Box Model?
            </h2>

            <p>
                Without understanding the Box Model, it becomes difficult to control spacing, alignment, and element sizes. Every web developer uses the Box Model while designing web pages.
            </p>

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Controls element spacing.
                        </li>

                        <li class="list-group-item">
                            Helps build responsive layouts.
                        </li>

                        <li class="list-group-item">
                            Improves page alignment.
                        </li>

                        <li class="list-group-item">
                            Makes UI design easier.
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="list-group">

                        <li class="list-group-item">
                            Used in every CSS project.
                        </li>

                        <li class="list-group-item">
                            Prevents layout problems.
                        </li>

                        <li class="list-group-item">
                            Helps calculate element size.
                        </li>

                        <li class="list-group-item">
                            Essential for modern web development.
                        </li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Components of the CSS Box Model
            </h2>

            <p>
                Every HTML element contains four layers.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>Layer</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Content</td>

                        <td>The actual text, image, or other content.</td>

                    </tr>

                    <tr>

                        <td>Padding</td>

                        <td>Space between content and border.</td>

                    </tr>

                    <tr>

                        <td>Border</td>

                        <td>Line surrounding the padding.</td>

                    </tr>

                    <tr>

                        <td>Margin</td>

                        <td>Outer space outside the border.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSS Box Model Diagram
            </h2>

<pre class="bg-light border rounded p-3"><code>
+-------------------------------+

|            Margin             |

|   +-----------------------+   |

|   |       Border          |   |

|   |  +-----------------+  |   |

|   |  |    Padding      |  |   |

|   |  | +-----------+   |  |   |

|   |  | | Content   |   |  |   |

|   |  | +-----------+   |  |   |

|   |  +-----------------+  |   |

|   +-----------------------+   |

+-------------------------------+
</code></pre>

            <div class="alert alert-info">

                The total size of an element depends on all four parts of the Box Model.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                1. Content Area
            </h2>

            <p>
                The Content Area is the innermost part of the box where text, images, videos, buttons, and other HTML elements are displayed.
            </p>

            <p>
                By default, the width and height properties apply to the content area only.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    width:300px;

    height:150px;

}
</code></pre>

            <div class="alert alert-success">

                The content area contains the actual information shown to the user.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                2. Padding
            </h2>

            <p>
                Padding is the space between the content and the border. It increases the visible size of an element while keeping the border away from the content.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    padding:20px;

}
</code></pre>

            <p>
                Individual padding values can also be specified.
            </p>

<pre class="bg-light border rounded p-3"><code>
padding-top

padding-right

padding-bottom

padding-left
</code></pre>

            <table class="table table-bordered">

                <thead class="table-secondary">

                    <tr>

                        <th>Property</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>padding</td>

                        <td>Sets padding on all sides.</td>

                    </tr>

                    <tr>

                        <td>padding-top</td>

                        <td>Top padding.</td>

                    </tr>

                    <tr>

                        <td>padding-right</td>

                        <td>Right padding.</td>

                    </tr>

                    <tr>

                        <td>padding-bottom</td>

                        <td>Bottom padding.</td>

                    </tr>

                    <tr>

                        <td>padding-left</td>

                        <td>Left padding.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                3. Border
            </h2>

            <p>
                The border surrounds the padding and content. It defines the visible edge of an element.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    border:2px solid black;

}
</code></pre>

            <p>
                Borders can have different styles, widths, and colors.
            </p>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>Border Style</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>solid</td>

                        <td>Single solid line.</td>

                    </tr>

                    <tr>

                        <td>dashed</td>

                        <td>Dashed border.</td>

                    </tr>

                    <tr>

                        <td>dotted</td>

                        <td>Dotted border.</td>

                    </tr>

                    <tr>

                        <td>double</td>

                        <td>Double border.</td>

                    </tr>

                    <tr>

                        <td>none</td>

                        <td>No border.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <div class="alert alert-primary">

                <h5 class="fw-bold">
                    End of Part 1
                </h5>

                <p class="mb-0">

                    In Part 2, you'll learn about <strong>Margin</strong>, <strong>Width & Height Calculation</strong>, <strong>box-sizing</strong>, <strong>content-box</strong>, <strong>border-box</strong>, practical examples, interview questions, best practices, and summary.

                </p>

            </div>

        </div>

    </div>

</div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                4. Margin
            </h2>

            <p>
                Margin is the outermost layer of the CSS Box Model. It creates space outside the border and separates an element from other elements on the page.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    margin:20px;

}
</code></pre>

            <p>
                You can also set margins individually for each side.
            </p>

<pre class="bg-light border rounded p-3"><code>
margin-top

margin-right

margin-bottom

margin-left
</code></pre>

            <table class="table table-bordered">

                <thead class="table-secondary">

                    <tr>

                        <th>Property</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>margin</td>

                        <td>Sets margin on all four sides.</td>

                    </tr>

                    <tr>

                        <td>margin-top</td>

                        <td>Sets the top margin.</td>

                    </tr>

                    <tr>

                        <td>margin-right</td>

                        <td>Sets the right margin.</td>

                    </tr>

                    <tr>

                        <td>margin-bottom</td>

                        <td>Sets the bottom margin.</td>

                    </tr>

                    <tr>

                        <td>margin-left</td>

                        <td>Sets the left margin.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Width and Height Calculation
            </h2>

            <p>
                The total size of an element depends on the content, padding, border, and margin.
            </p>

            <div class="alert alert-warning">

                <strong>Total Width</strong> = Width + Left Padding + Right Padding + Left Border + Right Border + Left Margin + Right Margin

            </div>

            <div class="alert alert-warning">

                <strong>Total Height</strong> = Height + Top Padding + Bottom Padding + Top Border + Bottom Border + Top Margin + Bottom Margin

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Example Calculation
            </h2>

<pre class="bg-light border rounded p-3"><code>
width = 300px

padding = 20px

border = 5px

margin = 15px
</code></pre>

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>

                        <th>Calculation</th>

                        <th>Value</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Content Width</td>

                        <td>300px</td>

                    </tr>

                    <tr>

                        <td>Padding</td>

                        <td>40px</td>

                    </tr>

                    <tr>

                        <td>Border</td>

                        <td>10px</td>

                    </tr>

                    <tr>

                        <td>Margin</td>

                        <td>30px</td>

                    </tr>

                    <tr class="table-success">

                        <td><strong>Total Width</strong></td>

                        <td><strong>380px</strong></td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                box-sizing Property
            </h2>

            <p>
                The <strong>box-sizing</strong> property controls how the width and height of an element are calculated.
            </p>

<pre class="bg-light border rounded p-3"><code>
box-sizing:border-box;
</code></pre>

            <table class="table table-bordered table-striped">

                <thead class="table-primary">

                    <tr>

                        <th>Value</th>

                        <th>Description</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>content-box</td>

                        <td>Default. Width and height include only content.</td>

                    </tr>

                    <tr>

                        <td>border-box</td>

                        <td>Width and height include content, padding, and border.</td>

                    </tr>

                </tbody>

            </table>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                content-box
            </h2>

            <p>
                This is the default CSS box model. Padding and border are added outside the specified width and height.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    box-sizing:content-box;

}
</code></pre>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                border-box
            </h2>

            <p>
                The border-box model includes padding and border inside the specified width and height. It is widely used in modern websites because layouts become easier to manage.
            </p>

<pre class="bg-light border rounded p-3"><code>
div{

    box-sizing:border-box;

}
</code></pre>

            <div class="alert alert-info">

                Most developers use <strong>border-box</strong> because it produces more predictable layouts.

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Practical Example
            </h2>

<pre class="bg-light border rounded p-3"><code>
.box{

    width:300px;

    padding:20px;

    border:2px solid blue;

    margin:30px;

}
</code></pre>

            <p>
                In this example, the element has a width of 300px with additional padding, border, and margin according to the CSS Box Model.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Mistakes
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Forgetting that padding increases element size.
                </li>

                <li class="list-group-item">
                    Ignoring border width during layout calculations.
                </li>

                <li class="list-group-item">
                    Using large margins that break responsive layouts.
                </li>

                <li class="list-group-item">
                    Not using <strong>box-sizing:border-box</strong> in modern layouts.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Use <strong>box-sizing:border-box</strong> for easier layout management.
                </li>

                <li class="list-group-item">
                    Keep margins and padding consistent.
                </li>

                <li class="list-group-item">
                    Avoid unnecessary nested boxes.
                </li>

                <li class="list-group-item">
                    Test layouts on different screen sizes.
                </li>

                <li class="list-group-item">
                    Use developer tools to inspect the Box Model.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Interview Questions
            </h2>

            <div class="accordion" id="boxModelQuestions">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#boxQ1">

                            What is the CSS Box Model?

                        </button>

                    </h2>

                    <div id="boxQ1" class="accordion-collapse collapse show">

                        <div class="accordion-body">

                            The CSS Box Model is a layout model consisting of Content, Padding, Border, and Margin that determines the total size of an HTML element.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#boxQ2">

                            What is the difference between Margin and Padding?

                        </button>

                    </h2>

                    <div id="boxQ2" class="accordion-collapse collapse">

                        <div class="accordion-body">

                            Padding creates space inside the border, while Margin creates space outside the border between elements.

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
                    The CSS Box Model is the foundation of web page layout. Every HTML element is treated as a rectangular box consisting of Content, Padding, Border, and Margin. Understanding how these four layers work together helps developers build responsive, well-structured, and visually appealing websites. Modern web development commonly uses the <strong>border-box</strong> model because it simplifies layout calculations and makes designs easier to maintain.
                </p>

            </div>

        </div>

    </div>

</div>

`
},




{
title: "CSS Display & Position",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Display & Position
            </h2>

            <p class="lead">
                <strong>CSS Display</strong> and <strong>CSS Position</strong> are two of the most important layout properties in CSS. They determine how HTML elements are displayed on a webpage and where they are placed within the document.
            </p>

            <p>
                Every HTML element has a default display value. CSS allows developers to change this behavior and precisely control element positioning, making it possible to build responsive layouts, navigation bars, cards, sidebars, popups, and many other modern UI components.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Display controls <strong>how an element behaves</strong>, while Position controls <strong>where an element appears</strong>.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSS Display Property
            </h2>

            <p>
                The <code>display</code> property specifies how an HTML element should be displayed.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector{

    display: value;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common Display Values
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>block</code></td>

                            <td>Displays the element as a block and starts on a new line.</td>

                        </tr>

                        <tr>

                            <td><code>inline</code></td>

                            <td>Displays the element on the same line without width or height.</td>

                        </tr>

                        <tr>

                            <td><code>inline-block</code></td>

                            <td>Behaves like inline but allows width and height.</td>

                        </tr>

                        <tr>

                            <td><code>none</code></td>

                            <td>Completely hides the element.</td>

                        </tr>

                        <tr>

                            <td><code>flex</code></td>

                            <td>Creates a flexible layout.</td>

                        </tr>

                        <tr>

                            <td><code>grid</code></td>

                            <td>Creates a grid layout.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Block Elements
            </h3>

            <p>
                Block elements occupy the full available width and always begin on a new line.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>div{

    display:block;

}
</code></pre>

            </div>

            <p class="mt-3">
                Examples: <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;h1&gt;</code>, <code>&lt;section&gt;</code>
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Inline Elements
            </h3>

            <p>
                Inline elements only occupy the required width and remain on the same line.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>span{

    display:inline;

}
</code></pre>

            </div>

            <p class="mt-3">
                Examples: <code>&lt;span&gt;</code>, <code>&lt;a&gt;</code>, <code>&lt;strong&gt;</code>
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Inline-Block
            </h3>

            <p>
                Inline-block combines the features of both inline and block elements.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.box{

    display:inline-block;

    width:200px;

    height:100px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Display None
            </h3>

            <p>
                The element is completely removed from the webpage and does not occupy any space.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.hide{

    display:none;

}
</code></pre>

            </div>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                CSS Position Property
            </h2>

            <p>
                The <code>position</code> property specifies how an element is positioned within the document.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector{

    position: value;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Position Values
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>static</code></td>

                            <td>Default position. Elements follow the normal document flow.</td>

                        </tr>

                        <tr>

                            <td><code>relative</code></td>

                            <td>Moves an element relative to its original position.</td>

                        </tr>

                        <tr>

                            <td><code>absolute</code></td>

                            <td>Positions an element relative to its nearest positioned ancestor.</td>

                        </tr>

                        <tr>

                            <td><code>fixed</code></td>

                            <td>Positions an element relative to the browser window.</td>

                        </tr>

                        <tr>

                            <td><code>sticky</code></td>

                            <td>Acts like relative until scrolling reaches a specified point.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Relative Position
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.box{

    position:relative;

    left:30px;

    top:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                The element moves relative to its original location.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Absolute Position
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.parent{

    position:relative;

}

.child{

    position:absolute;

    top:20px;

    right:20px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Fixed Position
            </h3>

            <p>
                Fixed elements remain visible even when the page is scrolled.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.navbar{

    position:fixed;

    top:0;

    width:100%;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Sticky Position
            </h3>

            <p>
                Sticky positioning keeps an element fixed after reaching a specified scroll position.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>header{

    position:sticky;

    top:0;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Position Offsets
            </h3>

            <p>
                Positioned elements can use the following properties:
            </p>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>top</code></td>

                            <td>Distance from the top.</td>

                        </tr>

                        <tr>

                            <td><code>right</code></td>

                            <td>Distance from the right.</td>

                        </tr>

                        <tr>

                            <td><code>bottom</code></td>

                            <td>Distance from the bottom.</td>

                        </tr>

                        <tr>

                            <td><code>left</code></td>

                            <td>Distance from the left.</td>

                        </tr>

                        <tr>

                            <td><code>z-index</code></td>

                            <td>Controls stacking order of overlapping elements.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use Flexbox and Grid for page layouts.</li>

                                <li>Use relative positioning as a parent for absolute elements.</li>

                                <li>Use fixed navigation bars carefully.</li>

                                <li>Use sticky headers for better navigation.</li>

                                <li>Keep layouts responsive on all devices.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Overusing absolute positioning.</li>

                                <li>Using display:none for important content.</li>

                                <li>Ignoring responsive design.</li>

                                <li>Using large z-index values unnecessarily.</li>

                                <li>Creating overlapping layouts without planning.</li>

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
                    The <strong>display</strong> property controls how HTML elements appear on a webpage, while the <strong>position</strong> property controls where they are placed. Mastering values such as <code>block</code>, <code>inline</code>, <code>flex</code>, <code>grid</code>, <code>relative</code>, <code>absolute</code>, <code>fixed</code>, and <code>sticky</code> is essential for building responsive, modern, and professional web layouts.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Flexbox",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Flexbox
            </h2>

            <p class="lead">
                <strong>CSS Flexbox (Flexible Box Layout)</strong> is a one-dimensional layout system used to arrange, align, and distribute space between items inside a container. It makes creating responsive layouts much easier than using floats or positioning.
            </p>

            <p>
                Flexbox is ideal for navigation bars, cards, menus, image galleries, buttons, forms, and many other responsive layouts. It automatically adjusts the size and position of elements based on the available space.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Flexbox works with two main components:
                <strong>Flex Container</strong> (parent element) and
                <strong>Flex Items</strong> (child elements).
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Basic Flexbox Syntax
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

}
</code></pre>

            </div>

            <p class="mt-3">
                Setting <code>display: flex;</code> converts the element into a flex container, and all direct child elements become flex items.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="container"&gt;

    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
    &lt;div&gt;Item 3&lt;/div&gt;

&lt;/div&gt;

.container{

    display:flex;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Main Axis & Cross Axis
            </h3>

            <ul class="list-group">

                <li class="list-group-item">
                    <strong>Main Axis:</strong> The primary direction in which flex items are placed.
                </li>

                <li class="list-group-item">
                    <strong>Cross Axis:</strong> The direction perpendicular to the main axis.
                </li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Important Flex Container Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>display</code></td>

                            <td>Creates a flex container.</td>

                        </tr>

                        <tr>

                            <td><code>flex-direction</code></td>

                            <td>Specifies the direction of flex items.</td>

                        </tr>

                        <tr>

                            <td><code>justify-content</code></td>

                            <td>Aligns items along the main axis.</td>

                        </tr>

                        <tr>

                            <td><code>align-items</code></td>

                            <td>Aligns items along the cross axis.</td>

                        </tr>

                        <tr>

                            <td><code>flex-wrap</code></td>

                            <td>Allows items to wrap onto multiple lines.</td>

                        </tr>

                        <tr>

                            <td><code>gap</code></td>

                            <td>Adds spacing between flex items.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Flex Direction
            </h3>

            <p>
                The <code>flex-direction</code> property defines how flex items are arranged.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    flex-direction:row;

}
</code></pre>

            </div>

            <div class="table-responsive mt-3">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>row</code></td>

                            <td>Items are arranged horizontally (default).</td>

                        </tr>

                        <tr>

                            <td><code>row-reverse</code></td>

                            <td>Items are arranged horizontally in reverse order.</td>

                        </tr>

                        <tr>

                            <td><code>column</code></td>

                            <td>Items are arranged vertically.</td>

                        </tr>

                        <tr>

                            <td><code>column-reverse</code></td>

                            <td>Items are arranged vertically in reverse order.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Justify Content
            </h3>

            <p>
                Aligns items along the main axis.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    justify-content:center;

}
</code></pre>

            </div>

            <div class="table-responsive mt-3">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>flex-start</code></td>

                            <td>Items start from the beginning.</td>

                        </tr>

                        <tr>

                            <td><code>center</code></td>

                            <td>Centers the items.</td>

                        </tr>

                        <tr>

                            <td><code>flex-end</code></td>

                            <td>Moves items to the end.</td>

                        </tr>

                        <tr>

                            <td><code>space-between</code></td>

                            <td>Equal space between items.</td>

                        </tr>

                        <tr>

                            <td><code>space-around</code></td>

                            <td>Equal space around items.</td>

                        </tr>

                        <tr>

                            <td><code>space-evenly</code></td>

                            <td>Equal spacing everywhere.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Align Items
            </h3>

            <p>
                Aligns items vertically (cross axis).
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    align-items:center;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Flex Wrap
            </h3>

            <p>
                Allows items to move to the next line if there isn't enough space.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    flex-wrap:wrap;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Gap
            </h3>

            <p>
                The <code>gap</code> property adds spacing between flex items.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    gap:20px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Flex Item Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>flex-grow</code></td>

                            <td>Allows an item to grow.</td>

                        </tr>

                        <tr>

                            <td><code>flex-shrink</code></td>

                            <td>Allows an item to shrink.</td>

                        </tr>

                        <tr>

                            <td><code>flex-basis</code></td>

                            <td>Sets the initial size.</td>

                        </tr>

                        <tr>

                            <td><code>flex</code></td>

                            <td>Shorthand for grow, shrink, and basis.</td>

                        </tr>

                        <tr>

                            <td><code>align-self</code></td>

                            <td>Overrides align-items for a specific item.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Complete Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    justify-content:space-between;

    align-items:center;

    flex-wrap:wrap;

    gap:20px;

}

.item{

    padding:20px;

    background:#0d6efd;

    color:white;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Advantages of Flexbox
            </h3>

            <ul class="list-group">

                <li class="list-group-item">Easy horizontal and vertical alignment.</li>

                <li class="list-group-item">Responsive by default.</li>

                <li class="list-group-item">Less CSS code compared to floats.</li>

                <li class="list-group-item">Items automatically adjust to available space.</li>

                <li class="list-group-item">Perfect for navigation bars, cards, galleries, and layouts.</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use Flexbox for one-dimensional layouts.</li>

                                <li>Use <code>gap</code> instead of margins where possible.</li>

                                <li>Enable <code>flex-wrap</code> for responsive designs.</li>

                                <li>Use meaningful alignment values.</li>

                                <li>Combine Flexbox with media queries for better responsiveness.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using Flexbox for complex two-dimensional layouts (use CSS Grid instead).</li>

                                <li>Adding unnecessary nested flex containers.</li>

                                <li>Ignoring responsive behavior.</li>

                                <li>Overusing fixed widths.</li>

                                <li>Mixing outdated float layouts with Flexbox unnecessarily.</li>

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
                    CSS Flexbox is a powerful layout module that simplifies the process of creating flexible and responsive web designs. By using properties such as <code>display:flex</code>, <code>justify-content</code>, <code>align-items</code>, <code>flex-direction</code>, <code>flex-wrap</code>, and <code>gap</code>, developers can build modern navigation bars, responsive cards, image galleries, forms, and many other user interface components with minimal code.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Grid",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Grid
            </h2>

            <p class="lead">
                <strong>CSS Grid Layout</strong> is a powerful two-dimensional layout system that allows developers to create responsive web layouts using rows and columns. Unlike Flexbox, which works in one direction (row or column), CSS Grid can control both directions simultaneously.
            </p>

            <p>
                CSS Grid makes it easy to build modern website layouts such as dashboards, galleries, portfolios, landing pages, admin panels, and responsive web applications without using floats or complicated positioning.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> CSS Grid is best for creating page layouts, while Flexbox is best for arranging items in a single row or column.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSS Grid Terminology
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    <strong>Grid Container:</strong> The parent element with <code>display: grid;</code>.
                </li>

                <li class="list-group-item">
                    <strong>Grid Items:</strong> The direct child elements inside the grid container.
                </li>

                <li class="list-group-item">
                    <strong>Grid Lines:</strong> Horizontal and vertical dividing lines.
                </li>

                <li class="list-group-item">
                    <strong>Grid Rows:</strong> Horizontal tracks.
                </li>

                <li class="list-group-item">
                    <strong>Grid Columns:</strong> Vertical tracks.
                </li>

                <li class="list-group-item">
                    <strong>Grid Cell:</strong> The smallest unit inside a grid.
                </li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Basic Syntax
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:grid;

}
</code></pre>

            </div>

            <p class="mt-3">
                When <code>display: grid;</code> is applied, the element becomes a grid container and all direct child elements become grid items.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="container"&gt;

    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
    &lt;div&gt;Item 3&lt;/div&gt;
    &lt;div&gt;Item 4&lt;/div&gt;

&lt;/div&gt;

.container{

    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:20px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Grid Container Properties
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>display</code></td>

                            <td>Creates a grid container.</td>

                        </tr>

                        <tr>

                            <td><code>grid-template-columns</code></td>

                            <td>Defines the number and width of columns.</td>

                        </tr>

                        <tr>

                            <td><code>grid-template-rows</code></td>

                            <td>Defines the height of rows.</td>

                        </tr>

                        <tr>

                            <td><code>gap</code></td>

                            <td>Adds spacing between rows and columns.</td>

                        </tr>

                        <tr>

                            <td><code>justify-items</code></td>

                            <td>Aligns items horizontally.</td>

                        </tr>

                        <tr>

                            <td><code>align-items</code></td>

                            <td>Aligns items vertically.</td>

                        </tr>

                        <tr>

                            <td><code>place-items</code></td>

                            <td>Shorthand for justify-items and align-items.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Grid Columns
            </h2>

            <p>
                The <code>grid-template-columns</code> property defines the number and size of columns.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:grid;

    grid-template-columns:200px 200px 200px;

}
</code></pre>

            </div>

            <p class="mt-3">
                Using the <code>fr</code> unit makes layouts responsive.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    grid-template-columns:1fr 2fr 1fr;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Repeat Function
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    grid-template-columns:repeat(4,1fr);

}
</code></pre>

            </div>

            <p class="mt-3">
                This creates four equal-width columns.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Grid Rows
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    grid-template-rows:100px 150px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Gap Property
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    gap:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                The <code>gap</code> property creates equal spacing between grid items.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Grid Item Properties
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>grid-column</code></td>

                            <td>Specifies how many columns an item spans.</td>

                        </tr>

                        <tr>

                            <td><code>grid-row</code></td>

                            <td>Specifies how many rows an item spans.</td>

                        </tr>

                        <tr>

                            <td><code>justify-self</code></td>

                            <td>Aligns an individual item horizontally.</td>

                        </tr>

                        <tr>

                            <td><code>align-self</code></td>

                            <td>Aligns an individual item vertically.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Spanning Columns
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.item{

    grid-column:1 / 3;

}
</code></pre>

            </div>

            <p class="mt-3">
                The above item spans two columns.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Spanning Rows
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.item{

    grid-row:1 / 3;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Grid Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:grid;

    grid-template-columns:

    repeat(auto-fit,minmax(250px,1fr));

    gap:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                This automatically adjusts the number of columns based on the screen size, making the layout responsive.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSS Grid vs Flexbox
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>CSS Grid</th>

                            <th>Flexbox</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Two-dimensional layout.</td>

                            <td>One-dimensional layout.</td>

                        </tr>

                        <tr>

                            <td>Controls rows and columns.</td>

                            <td>Controls either rows or columns.</td>

                        </tr>

                        <tr>

                            <td>Ideal for page layouts.</td>

                            <td>Ideal for menus, cards, toolbars, and navigation.</td>

                        </tr>

                        <tr>

                            <td>More powerful for complex layouts.</td>

                            <td>Simpler for small layouts.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of CSS Grid
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Easy responsive layouts.</li>

                <li class="list-group-item">Controls rows and columns simultaneously.</li>

                <li class="list-group-item">Less CSS code.</li>

                <li class="list-group-item">Perfect for dashboards and web pages.</li>

                <li class="list-group-item">Works well with Flexbox.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use Grid for page layouts.</li>

                                <li>Use <code>repeat()</code> and <code>fr</code> units.</li>

                                <li>Use <code>gap</code> instead of margins for spacing.</li>

                                <li>Create responsive layouts with <code>auto-fit</code> and <code>minmax()</code>.</li>

                                <li>Combine Grid and Flexbox when appropriate.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using Grid for simple one-dimensional layouts.</li>

                                <li>Creating unnecessarily complex grids.</li>

                                <li>Using fixed widths on responsive pages.</li>

                                <li>Ignoring mobile responsiveness.</li>

                                <li>Overlapping items without planning.</li>

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
                    CSS Grid is a modern two-dimensional layout system that allows developers to build responsive and flexible web page layouts using rows and columns. Properties such as <code>grid-template-columns</code>, <code>grid-template-rows</code>, <code>gap</code>, <code>grid-column</code>, and <code>grid-row</code> make it easy to create professional websites with minimal code.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Responsive Design",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Responsive Design
            </h2>

            <p class="lead">
                <strong>Responsive Web Design (RWD)</strong> is a web design approach that allows websites to automatically adapt to different screen sizes and devices. Whether users visit a website on a desktop computer, laptop, tablet, or smartphone, the layout adjusts to provide the best viewing experience.
            </p>

            <p>
                Modern websites must be responsive because people use many different devices with various screen resolutions. CSS provides powerful features such as media queries, flexible layouts, Flexbox, Grid, responsive units, and responsive images to create websites that look great on every device.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Responsive design improves user experience, SEO rankings, and accessibility while reducing the need to create separate mobile websites.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Responsive Design?
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Provides a better user experience.</li>

                <li class="list-group-item">Works on desktops, tablets, and smartphones.</li>

                <li class="list-group-item">Improves website accessibility.</li>

                <li class="list-group-item">Improves search engine rankings (SEO).</li>

                <li class="list-group-item">Reduces maintenance by using one website for all devices.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Viewport Meta Tag
            </h2>

            <p>
                Every responsive website should include the viewport meta tag inside the HTML <code>&lt;head&gt;</code> section.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;meta name="viewport"
content="width=device-width, initial-scale=1.0"&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Units
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Unit</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>%</code></td>

                            <td>Percentage of the parent element.</td>

                        </tr>

                        <tr>

                            <td><code>vw</code></td>

                            <td>Viewport width.</td>

                        </tr>

                        <tr>

                            <td><code>vh</code></td>

                            <td>Viewport height.</td>

                        </tr>

                        <tr>

                            <td><code>em</code></td>

                            <td>Relative to the parent font size.</td>

                        </tr>

                        <tr>

                            <td><code>rem</code></td>

                            <td>Relative to the root font size.</td>

                        </tr>

                        <tr>

                            <td><code>fr</code></td>

                            <td>Fractional unit used in CSS Grid.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Images
            </h2>

            <p>
                Images should automatically resize according to the screen size.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>img{

    max-width:100%;

    height:auto;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Media Queries
            </h2>

            <p>
                Media queries allow you to apply different CSS styles for different screen sizes.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>@media (max-width:768px){

    body{

        background:#f8f9fa;

    }

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Breakpoints
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Device</th>

                            <th>Screen Width</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Extra Small (Mobile)</td>

                            <td>Less than 576px</td>

                        </tr>

                        <tr>

                            <td>Small (Large Phones)</td>

                            <td>576px and above</td>

                        </tr>

                        <tr>

                            <td>Medium (Tablets)</td>

                            <td>768px and above</td>

                        </tr>

                        <tr>

                            <td>Large (Laptops)</td>

                            <td>992px and above</td>

                        </tr>

                        <tr>

                            <td>Extra Large (Desktops)</td>

                            <td>1200px and above</td>

                        </tr>

                        <tr>

                            <td>XXL Screens</td>

                            <td>1400px and above</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Flexbox Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:flex;

    flex-wrap:wrap;

    gap:20px;

}

.item{

    flex:1 1 300px;

}
</code></pre>

            </div>

            <p class="mt-3">
                The items automatically wrap onto the next line when there is not enough horizontal space.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive CSS Grid Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.container{

    display:grid;

    grid-template-columns:

    repeat(auto-fit,minmax(250px,1fr));

    gap:20px;

}
</code></pre>

            </div>

            <p class="mt-3">
                The grid automatically adjusts the number of columns according to the screen width.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Navigation Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>@media (max-width:768px){

    nav{

        flex-direction:column;

    }

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Responsive Typography
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    font-size:clamp(2rem,5vw,4rem);

}
</code></pre>

            </div>

            <p class="mt-3">
                The <code>clamp()</code> function automatically adjusts the font size based on the screen width while keeping it within minimum and maximum limits.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Bootstrap Responsive Classes
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>Class</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>.container</code></td>

                            <td>Responsive fixed-width container.</td>

                        </tr>

                        <tr>

                            <td><code>.container-fluid</code></td>

                            <td>Full-width responsive container.</td>

                        </tr>

                        <tr>

                            <td><code>.row</code></td>

                            <td>Creates a responsive row.</td>

                        </tr>

                        <tr>

                            <td><code>.col-md-6</code></td>

                            <td>Uses half width on medium screens and larger.</td>

                        </tr>

                        <tr>

                            <td><code>.img-fluid</code></td>

                            <td>Makes images responsive.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Use responsive units like %, rem, vw, and fr.</li>

                                <li>Always include the viewport meta tag.</li>

                                <li>Use Flexbox and Grid for layouts.</li>

                                <li>Use media queries for different screen sizes.</li>

                                <li>Make images responsive with <code>max-width:100%</code>.</li>

                                <li>Test your website on different devices.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using fixed widths for layouts.</li>

                                <li>Ignoring mobile users.</li>

                                <li>Using very large images.</li>

                                <li>Creating layouts that overflow the screen.</li>

                                <li>Using too many media queries unnecessarily.</li>

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
                    CSS Responsive Design ensures that websites work properly on desktops, laptops, tablets, and smartphones. By using responsive units, media queries, Flexbox, Grid, responsive images, and modern CSS techniques, developers can create fast, user-friendly, and professional websites that provide an excellent experience on every device.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Animations & Transitions",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Animations & Transitions
            </h2>

            <p class="lead">
                <strong>CSS Transitions</strong> and <strong>CSS Animations</strong> allow developers to create smooth visual effects without using JavaScript. They improve user experience by making websites more interactive, attractive, and modern.
            </p>

            <p>
                A <strong>transition</strong> creates a smooth change between two states of an element, usually triggered by user interaction such as hovering over a button. An <strong>animation</strong> creates continuous or multi-step visual effects using keyframes.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Use transitions for simple effects and animations for more complex movements or repeated effects.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                CSS Transitions
            </h2>

            <p>
                The <code>transition</code> property specifies how a CSS property changes smoothly over time.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>selector{

    transition: property duration timing-function delay;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Transition Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>transition-property</code></td>

                            <td>Specifies the CSS property to animate.</td>

                        </tr>

                        <tr>

                            <td><code>transition-duration</code></td>

                            <td>Specifies how long the transition lasts.</td>

                        </tr>

                        <tr>

                            <td><code>transition-timing-function</code></td>

                            <td>Controls the speed curve.</td>

                        </tr>

                        <tr>

                            <td><code>transition-delay</code></td>

                            <td>Specifies a delay before the transition starts.</td>

                        </tr>

                        <tr>

                            <td><code>transition</code></td>

                            <td>Shorthand property.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Basic Transition Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.button{

    background:blue;

    color:white;

    padding:15px;

    transition:background 0.5s;

}

.button:hover{

    background:red;

}
</code></pre>

            </div>

            <p class="mt-3">
                When the mouse hovers over the button, the background color changes smoothly in 0.5 seconds.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Transition Timing Functions
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Value</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>ease</code></td>

                            <td>Starts slowly, speeds up, then slows down.</td>

                        </tr>

                        <tr>

                            <td><code>linear</code></td>

                            <td>Constant speed.</td>

                        </tr>

                        <tr>

                            <td><code>ease-in</code></td>

                            <td>Starts slowly.</td>

                        </tr>

                        <tr>

                            <td><code>ease-out</code></td>

                            <td>Ends slowly.</td>

                        </tr>

                        <tr>

                            <td><code>ease-in-out</code></td>

                            <td>Slow at the beginning and end.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                CSS Animations
            </h2>

            <p>
                CSS Animations allow elements to change styles gradually using one or more keyframes.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>@keyframes animationName{

    from{

        property:value;

    }

    to{

        property:value;

    }

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Basic Animation Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>@keyframes move{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(200px);

    }

}

.box{

    animation:move 3s;

}
</code></pre>

            </div>

            <p class="mt-3">
                The element moves from left to right over 3 seconds.
            </p>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Animation Properties
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Property</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>animation-name</code></td>

                            <td>Specifies the animation name.</td>

                        </tr>

                        <tr>

                            <td><code>animation-duration</code></td>

                            <td>Sets animation length.</td>

                        </tr>

                        <tr>

                            <td><code>animation-delay</code></td>

                            <td>Delays the animation.</td>

                        </tr>

                        <tr>

                            <td><code>animation-iteration-count</code></td>

                            <td>Sets how many times the animation repeats.</td>

                        </tr>

                        <tr>

                            <td><code>animation-direction</code></td>

                            <td>Controls animation direction.</td>

                        </tr>

                        <tr>

                            <td><code>animation-fill-mode</code></td>

                            <td>Specifies styles before or after animation.</td>

                        </tr>

                        <tr>

                            <td><code>animation-play-state</code></td>

                            <td>Runs or pauses the animation.</td>

                        </tr>

                        <tr>

                            <td><code>animation</code></td>

                            <td>Shorthand property.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Multiple Keyframes Example
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>@keyframes colorChange{

    0%{

        background:red;

    }

    50%{

        background:blue;

    }

    100%{

        background:green;

    }

}

.box{

    animation:colorChange 4s infinite;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Infinite Animation
            </h3>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.loader{

    animation:spin 2s linear infinite;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Common Uses of Animations
            </h3>

            <ul class="list-group">

                <li class="list-group-item">Button hover effects.</li>

                <li class="list-group-item">Loading spinners.</li>

                <li class="list-group-item">Image sliders.</li>

                <li class="list-group-item">Navigation menus.</li>

                <li class="list-group-item">Cards and pop-up effects.</li>

                <li class="list-group-item">Fade-in and fade-out effects.</li>

                <li class="list-group-item">Scrolling animations.</li>

            </ul>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Transition vs Animation
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Transition</th>

                            <th>Animation</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Needs a trigger (hover, focus, etc.).</td>

                            <td>Can start automatically.</td>

                        </tr>

                        <tr>

                            <td>Simple property changes.</td>

                            <td>Complex multi-step effects.</td>

                        </tr>

                        <tr>

                            <td>Only two states.</td>

                            <td>Supports multiple keyframes.</td>

                        </tr>

                        <tr>

                            <td>Easy to implement.</td>

                            <td>More flexible and powerful.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Best Practices
            </h3>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Keep animations smooth and simple.</li>

                                <li>Use transitions for hover effects.</li>

                                <li>Use <code>transform</code> and <code>opacity</code> for better performance.</li>

                                <li>Use animations to improve user experience.</li>

                                <li>Test animations on mobile devices.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using too many animations on one page.</li>

                                <li>Creating very long animations.</li>

                                <li>Using distracting flashing effects.</li>

                                <li>Animating unnecessary properties.</li>

                                <li>Ignoring accessibility and performance.</li>

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
                    CSS Transitions and Animations bring web pages to life by creating smooth visual effects and interactive experiences. Transitions are ideal for simple state changes, while animations use keyframes for more advanced effects. By mastering properties such as <code>transition</code>, <code>@keyframes</code>, and <code>animation</code>, developers can create engaging, responsive, and professional websites without relying on JavaScript for basic animations.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Variables",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Variables
            </h2>

            <p class="lead">
                <strong>CSS Variables</strong>, also known as <strong>Custom Properties</strong>, allow you to store reusable values such as colors, font sizes, spacing, and other CSS properties. Instead of repeating the same value multiple times, you can define it once and use it throughout your stylesheet.
            </p>

            <p>
                CSS Variables make your code cleaner, easier to maintain, and simpler to update. If you need to change a color or font size, you only update the variable instead of editing every CSS rule.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> CSS Variables were introduced in CSS3 and are supported by all modern web browsers.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Why Use CSS Variables?
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Reduce duplicate CSS code.</li>

                <li class="list-group-item">Improve code readability.</li>

                <li class="list-group-item">Make websites easier to maintain.</li>

                <li class="list-group-item">Create consistent colors and spacing.</li>

                <li class="list-group-item">Easily build light and dark themes.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Declaring a CSS Variable
            </h2>

            <p>
                Variables are declared using two hyphens (<code>--</code>) followed by a variable name.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>:root{

    --primary-color: blue;

}
</code></pre>

            </div>

            <p class="mt-3">
                The <code>:root</code> selector represents the highest-level element in the document and is commonly used to create global variables.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Using a CSS Variable
            </h2>

            <p>
                Use the <code>var()</code> function to access a variable.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>:root{

    --primary-color: blue;

}

h1{

    color:var(--primary-color);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Multiple Variables
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>:root{

    --primary-color:#0d6efd;

    --secondary-color:#198754;

    --text-color:#212529;

    --font-size:18px;

    --border-radius:8px;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Example
            </h2>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>:root{

    --primary:#0d6efd;

    --padding:15px;

}

button{

    background:var(--primary);

    color:white;

    padding:var(--padding);

    border:none;

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Local Variables
            </h2>

            <p>
                Variables can also be declared inside a specific selector. These variables are only available within that selector and its child elements.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>.card{

    --card-color:#ffc107;

    background:var(--card-color);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Fallback Values
            </h2>

            <p>
                If a variable is not found, you can provide a default value.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>h1{

    color:var(--heading-color, black);

}
</code></pre>

            </div>

            <p class="mt-3">
                If <code>--heading-color</code> does not exist, the text color will be black.
            </p>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Creating a Theme
            </h2>

            <p>
                CSS Variables are commonly used to build light and dark themes.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>:root{

    --background:white;

    --text:black;

}

body{

    background:var(--background);

    color:var(--text);

}
</code></pre>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Common Uses of CSS Variables
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Variable</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Colors</td>

                            <td>Primary, secondary, success, danger colors.</td>

                        </tr>

                        <tr>

                            <td>Font Sizes</td>

                            <td>Headings and paragraph text.</td>

                        </tr>

                        <tr>

                            <td>Spacing</td>

                            <td>Margins and padding.</td>

                        </tr>

                        <tr>

                            <td>Border Radius</td>

                            <td>Rounded corners.</td>

                        </tr>

                        <tr>

                            <td>Shadows</td>

                            <td>Box shadows and text shadows.</td>

                        </tr>

                        <tr>

                            <td>Transitions</td>

                            <td>Animation duration.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Advantages of CSS Variables
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Reusable values.</li>

                <li class="list-group-item">Easy maintenance.</li>

                <li class="list-group-item">Cleaner CSS code.</li>

                <li class="list-group-item">Supports themes and customization.</li>

                <li class="list-group-item">Works well with JavaScript.</li>

                <li class="list-group-item">Reduces development time.</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Recommended
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Declare global variables inside <code>:root</code>.</li>

                                <li>Use meaningful variable names.</li>

                                <li>Store colors, fonts, spacing, and sizes as variables.</li>

                                <li>Use fallback values when needed.</li>

                                <li>Group related variables together.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Avoid
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Using unclear variable names.</li>

                                <li>Creating unnecessary variables.</li>

                                <li>Repeating hard-coded values throughout the stylesheet.</li>

                                <li>Mixing inconsistent naming styles.</li>

                                <li>Ignoring variable organization in large projects.</li>

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
                    CSS Variables (Custom Properties) allow developers to store reusable values and access them using the <code>var()</code> function. They improve code readability, simplify maintenance, reduce duplication, and make it easy to build themes and responsive designs. CSS Variables are an essential feature for writing modern, scalable, and maintainable CSS.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Mini Projects",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Mini Projects
            </h2>

            <p class="lead">
                After learning the fundamentals of CSS, the best way to improve your skills is by building small projects. These mini projects help you practice layouts, colors, typography, Flexbox, Grid, animations, transitions, responsive design, and other modern CSS techniques.
            </p>

            <p>
                In this chapter, you will find beginner to intermediate level CSS projects that strengthen your understanding of styling web pages. These projects can also be added to your portfolio.
            </p>

            <div class="alert alert-info">
                <strong>Tip:</strong> Try to build each project yourself before looking at the solution. Practice is the fastest way to master CSS.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 1: Responsive Navigation Bar
            </h2>

            <p>
                Create a modern navigation bar that adapts to different screen sizes.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Flexbox</li>

                <li class="list-group-item">Hover Effects</li>

                <li class="list-group-item">Responsive Design</li>

                <li class="list-group-item">Media Queries</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 2: Profile Card
            </h2>

            <p>
                Design a stylish user profile card with an image, name, description, and social media buttons.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Box Shadow</li>

                <li class="list-group-item">Border Radius</li>

                <li class="list-group-item">Buttons</li>

                <li class="list-group-item">Typography</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 3: Responsive Image Gallery
            </h2>

            <p>
                Build an image gallery that automatically adjusts the number of columns according to the screen size.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">CSS Grid</li>

                <li class="list-group-item">Responsive Images</li>

                <li class="list-group-item">Hover Effects</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 4: Login Form
            </h2>

            <p>
                Create a modern login form with input fields, icons, and responsive styling.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Forms</li>

                <li class="list-group-item">Input Styling</li>

                <li class="list-group-item">Buttons</li>

                <li class="list-group-item">Focus Effects</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 5: Pricing Cards
            </h2>

            <p>
                Design three pricing plans with attractive cards and call-to-action buttons.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Flexbox</li>

                <li class="list-group-item">Cards</li>

                <li class="list-group-item">Hover Animations</li>

                <li class="list-group-item">Responsive Layout</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 6: Dashboard Layout
            </h2>

            <p>
                Build a simple admin dashboard with a sidebar, header, cards, and content area.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">CSS Grid</li>

                <li class="list-group-item">Responsive Layout</li>

                <li class="list-group-item">Cards</li>

                <li class="list-group-item">Navigation</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 7: Landing Page
            </h2>

            <p>
                Design a complete responsive landing page for a product or business.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Hero Section</li>

                <li class="list-group-item">Buttons</li>

                <li class="list-group-item">Flexbox</li>

                <li class="list-group-item">Responsive Design</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Project 8: Portfolio Website
            </h2>

            <p>
                Create a personal portfolio website to showcase your skills, projects, education, and contact information.
            </p>

            <h5>Skills Practiced</h5>

            <ul class="list-group mb-3">

                <li class="list-group-item">Responsive Layout</li>

                <li class="list-group-item">Navigation</li>

                <li class="list-group-item">Cards</li>

                <li class="list-group-item">Animations</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Technologies Used
            </h2>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Technology</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>HTML5</td>

                            <td>Page Structure</td>

                        </tr>

                        <tr>

                            <td>CSS3</td>

                            <td>Styling and Layout</td>

                        </tr>

                        <tr>

                            <td>Flexbox</td>

                            <td>One-dimensional Layout</td>

                        </tr>

                        <tr>

                            <td>CSS Grid</td>

                            <td>Two-dimensional Layout</td>

                        </tr>

                        <tr>

                            <td>Media Queries</td>

                            <td>Responsive Design</td>

                        </tr>

                        <tr>

                            <td>Animations</td>

                            <td>Interactive Effects</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Skills You Will Gain
            </h2>

            <ul class="list-group">

                <li class="list-group-item">Responsive Web Design</li>

                <li class="list-group-item">Modern CSS Layouts</li>

                <li class="list-group-item">Flexbox and Grid</li>

                <li class="list-group-item">CSS Animations</li>

                <li class="list-group-item">Transitions and Hover Effects</li>

                <li class="list-group-item">Professional UI Design</li>

                <li class="list-group-item">Portfolio Development</li>

                <li class="list-group-item">Real-world Frontend Experience</li>

            </ul>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Best Practices
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">

                            Recommended

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Build projects from scratch.</li>

                                <li>Make every project responsive.</li>

                                <li>Use semantic HTML with CSS.</li>

                                <li>Organize your CSS properly.</li>

                                <li>Reuse CSS variables.</li>

                                <li>Practice Flexbox and Grid together.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">

                            Avoid

                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Copying projects without understanding.</li>

                                <li>Ignoring mobile responsiveness.</li>

                                <li>Using inline CSS excessively.</li>

                                <li>Writing repetitive CSS code.</li>

                                <li>Skipping browser testing.</li>

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
                    CSS mini projects provide practical experience in building responsive and visually appealing websites. By creating navigation bars, profile cards, image galleries, login forms, dashboards, landing pages, and portfolio websites, you will strengthen your CSS skills and gain confidence in designing real-world web interfaces.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "CSS Interview Questions",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                CSS Interview Questions
            </h2>

            <p class="lead">
                This chapter contains the most frequently asked <strong>CSS interview questions</strong> for beginners, intermediate learners, and experienced web developers. These questions help you prepare for technical interviews and strengthen your understanding of CSS concepts.
            </p>

            <div class="alert alert-info">
                <strong>Tip:</strong> Practice writing CSS code along with learning the answers. Most interviewers ask both theory and practical questions.
            </div>

            <hr class="my-4">

            <h2 class="text-primary mb-3">
                Beginner Level Questions
            </h2>

            <div class="accordion" id="beginnerQuestions">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
                            1. What is CSS?
                        </button>
                    </h2>
                    <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#beginnerQuestions">
                        <div class="accordion-body">
                            CSS (Cascading Style Sheets) is a stylesheet language used to control the appearance and layout of HTML documents. It is used to add colors, fonts, spacing, animations, and responsive designs to web pages.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
                            2. Why is CSS used?
                        </button>
                    </h2>
                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#beginnerQuestions">
                        <div class="accordion-body">
                            CSS separates the design from HTML structure, making websites more attractive, responsive, and easier to maintain.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q3">
                            3. What are the three types of CSS?
                        </button>
                    </h2>
                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#beginnerQuestions">
                        <div class="accordion-body">

                            <ul>
                                <li>Inline CSS</li>
                                <li>Internal CSS</li>
                                <li>External CSS</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q4">
                            4. What is a CSS Selector?
                        </button>
                    </h2>
                    <div id="q4" class="accordion-collapse collapse" data-bs-parent="#beginnerQuestions">
                        <div class="accordion-body">
                            A CSS selector is used to select HTML elements that should receive specific styles.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q5">
                            5. What is the difference between ID and Class selectors?
                        </button>
                    </h2>
                    <div id="q5" class="accordion-collapse collapse" data-bs-parent="#beginnerQuestions">
                        <div class="accordion-body">

                            <ul>
                                <li><strong>ID</strong> is unique and used for one element.</li>
                                <li><strong>Class</strong> can be used for multiple elements.</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                Intermediate Level Questions
            </h2>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    What is the CSS Box Model?
                </li>

                <li class="list-group-item">
                    What is the difference between margin and padding?
                </li>

                <li class="list-group-item">
                    What are pseudo-classes?
                </li>

                <li class="list-group-item">
                    What are pseudo-elements?
                </li>

                <li class="list-group-item">
                    What is the difference between relative, absolute, fixed, and sticky positioning?
                </li>

                <li class="list-group-item">
                    Explain Flexbox.
                </li>

                <li class="list-group-item">
                    Explain CSS Grid.
                </li>

                <li class="list-group-item">
                    What are media queries?
                </li>

                <li class="list-group-item">
                    What is responsive web design?
                </li>

                <li class="list-group-item">
                    What is the z-index property?
                </li>

            </ol>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                Advanced Level Questions
            </h2>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    What are CSS Variables?
                </li>

                <li class="list-group-item">
                    Explain CSS specificity.
                </li>

                <li class="list-group-item">
                    What is the difference between em, rem, %, vw, and vh units?
                </li>

                <li class="list-group-item">
                    Explain CSS animations and transitions.
                </li>

                <li class="list-group-item">
                    What is the difference between transform and transition?
                </li>

                <li class="list-group-item">
                    What are keyframes?
                </li>

                <li class="list-group-item">
                    How do you optimize CSS performance?
                </li>

                <li class="list-group-item">
                    What are CSS preprocessors?
                </li>

                <li class="list-group-item">
                    What is the difference between display:none and visibility:hidden?
                </li>

                <li class="list-group-item">
                    How does CSS inheritance work?
                </li>

            </ol>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                Practical Coding Questions
            </h2>

            <ul class="list-group">

                <li class="list-group-item">
                    Create a responsive navigation bar using Flexbox.
                </li>

                <li class="list-group-item">
                    Center a div horizontally and vertically.
                </li>

                <li class="list-group-item">
                    Create a responsive image gallery using CSS Grid.
                </li>

                <li class="list-group-item">
                    Create a hover animation for a button.
                </li>

                <li class="list-group-item">
                    Build a responsive login form.
                </li>

                <li class="list-group-item">
                    Create a card component with shadow and hover effect.
                </li>

                <li class="list-group-item">
                    Build a responsive dashboard layout.
                </li>

            </ul>

            <hr class="my-5">

            <h2 class="text-primary mb-3">
                Interview Tips
            </h2>

            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Do
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Understand CSS fundamentals.</li>

                                <li>Practice Flexbox and Grid.</li>

                                <li>Learn responsive design.</li>

                                <li>Know CSS specificity.</li>

                                <li>Build real projects.</li>

                                <li>Write clean and organized CSS.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-danger h-100">

                        <div class="card-header bg-danger text-white">
                            Don't
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Memorize answers without understanding.</li>

                                <li>Ignore responsive design.</li>

                                <li>Overuse inline CSS.</li>

                                <li>Forget browser compatibility.</li>

                                <li>Neglect hands-on coding practice.</li>

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
                    CSS interviews typically cover selectors, the box model, positioning, Flexbox, Grid, responsive design, animations, variables, and practical coding exercises. A solid understanding of these topics, combined with hands-on project experience, will help you confidently succeed in frontend developer interviews.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

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