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
        HTML
    </h3>

<a href="#" onclick="showLesson(0); return false;">HTML Home</a>
<a href="#" onclick="showLesson(1); return false;">Introduction to HTML</a>
<a href="#" onclick="showLesson(2); return false;">History of HTML</a>
<a href="#" onclick="showLesson(3); return false;">HTML Editors</a>
<a href="#" onclick="showLesson(4); return false;">Basic HTML Structure</a>
<a href="#" onclick="showLesson(5); return false;">HTML Elements</a>
<a href="#" onclick="showLesson(6); return false;">Headings & Paragraphs</a>
<a href="#" onclick="showLesson(7); return false;">Text Formatting</a>
<a href="#" onclick="showLesson(8); return false;">Links</a>
<a href="#" onclick="showLesson(9); return false;">Images</a>
<a href="#" onclick="showLesson(10); return false;">Lists</a>
<a href="#" onclick="showLesson(11); return false;">Tables</a>
<a href="#" onclick="showLesson(12); return false;">Forms</a>
<a href="#" onclick="showLesson(13); return false;">Semantic HTML</a>
<a href="#" onclick="showLesson(14); return false;">Audio & Video</a>
<a href="#" onclick="showLesson(15); return false;">HTML Entities & Symbols</a>
<a href="#" onclick="showLesson(16); return false;">Iframes</a>
<a href="#" onclick="showLesson(17); return false;">HTML5 APIs & Features</a>
<a href="#" onclick="showLesson(18); return false;">Mini Projects</a>
<a href="#" onclick="showLesson(19); return false;">HTML Interview Questions</a>

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
title: "HTML Home",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-3">
                HTML Home
            </h2>

            <p class="lead">
                <strong>HTML (HyperText Markup Language)</strong> is the standard markup language used to create web pages. It describes the structure of a webpage using different HTML elements such as headings, paragraphs, images, links, tables, forms, and much more.
            </p>

            <p>
                HTML is the first language every web developer should learn. It works together with
                <strong>CSS</strong> for styling and
                <strong>JavaScript</strong> for adding interactivity to websites.
            </p>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                What You Will Learn
            </h4>

            <div class="row">

                <div class="col-lg-6">

                    <ul class="list-group mb-3">

                        <li class="list-group-item">Introduction to HTML</li>

                        <li class="list-group-item">HTML Document Structure</li>

                        <li class="list-group-item">HTML Elements & Tags</li>

                        <li class="list-group-item">Headings & Paragraphs</li>

                        <li class="list-group-item">Text Formatting</li>

                    </ul>

                </div>

                <div class="col-lg-6">

                    <ul class="list-group mb-3">

                        <li class="list-group-item">Links & Images</li>

                        <li class="list-group-item">Lists & Tables</li>

                        <li class="list-group-item">Forms</li>

                        <li class="list-group-item">Semantic HTML</li>

                        <li class="list-group-item">HTML5 Features</li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Why Learn HTML?
            </h4>

            <div class="row g-3">

                <div class="col-md-6">
                    <div class="alert alert-primary mb-0">
                        ✔ Easy to Learn
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-success mb-0">
                        ✔ Foundation of Every Website
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning mb-0">
                        ✔ Supported by All Browsers
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-info mb-0">
                        ✔ Required for Web Development
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-secondary mb-0">
                        ✔ Works with CSS & JavaScript
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-danger mb-0">
                        ✔ Free and Open Standard
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Simple HTML Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;My First Page&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Welcome to HTML&lt;/h1&gt;
    &lt;p&gt;This is my first webpage.&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>

            </div>

            <h4 class="text-primary mt-4 mb-3">
                Output
            </h4>

            <div class="border rounded p-4 bg-light">

                <h1>Welcome to HTML</h1>

                <p>This is my first webpage.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML
            </h4>

            <div class="row">

                <div class="col-md-6">

                    <ul>

                        <li>Simple and easy syntax</li>

                        <li>Platform independent</li>

                        <li>Supported by every browser</li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <ul>

                        <li>Supports multimedia</li>

                        <li>Works with CSS & JavaScript</li>

                        <li>Free to use</li>

                    </ul>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Applications of HTML
            </h4>

            <div class="row g-3">

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>🌐 Websites</h5>

                            <p class="mb-0">
                                Create personal and business websites.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>🛒 E-Commerce</h5>

                            <p class="mb-0">
                                Build online shopping websites.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>📱 Web Apps</h5>

                            <p class="mb-0">
                                Develop responsive web applications.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Versions
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Version</th>

                            <th>Released</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>HTML</td>

                            <td>1991</td>

                        </tr>

                        <tr>

                            <td>HTML 2.0</td>

                            <td>1995</td>

                        </tr>

                        <tr>

                            <td>HTML 3.2</td>

                            <td>1997</td>

                        </tr>

                        <tr>

                            <td>HTML 4.01</td>

                            <td>1999</td>

                        </tr>

                        <tr>

                            <td>XHTML</td>

                            <td>2000</td>

                        </tr>

                        <tr>

                            <td>HTML5</td>

                            <td>2014</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML is the standard markup language used to create web pages. It provides the basic structure of every website using elements and tags. Learning HTML is the first step toward becoming a professional web developer.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Introduction to HTML",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Introduction to HTML
            </h2>

            <p class="lead">
                <strong>HTML (HyperText Markup Language)</strong> is the standard markup language used to create web pages. It provides the basic structure of every webpage by organizing content such as headings, paragraphs, images, links, tables, forms, videos, and other elements.
            </p>

            <p>
                HTML is not a programming language because it cannot perform logical operations like calculations, loops, or decision making. Instead, it is a <strong>markup language</strong> that uses <strong>tags</strong> to describe the structure and content of a webpage.
            </p>

            <div class="alert alert-info mt-4">
                <strong>Note:</strong> HTML defines the structure of a webpage, CSS controls its appearance, and JavaScript adds interactivity.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                What Does HTML Stand For?
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">
                        <tr>
                            <th>Letter</th>
                            <th>Meaning</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>H</td>
                            <td>Hyper</td>
                            <td>Allows linking one document to another.</td>
                        </tr>

                        <tr>
                            <td>T</td>
                            <td>Text</td>
                            <td>Content displayed on a webpage.</td>
                        </tr>

                        <tr>
                            <td>M</td>
                            <td>Markup</td>
                            <td>Uses tags to define webpage elements.</td>
                        </tr>

                        <tr>
                            <td>L</td>
                            <td>Language</td>
                            <td>A standard language for creating web pages.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Why Learn HTML?
            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5>Easy to Learn</h5>

                            <p class="mb-0">
                                HTML has simple syntax and is beginner friendly.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5>Foundation of Web Development</h5>

                            <p class="mb-0">
                                Every website starts with HTML.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5>Supported Everywhere</h5>

                            <p class="mb-0">
                                HTML works in all modern web browsers.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-danger">

                        <div class="card-body">

                            <h5>Career Opportunities</h5>

                            <p class="mb-0">
                                HTML is the first step toward becoming a Front-End or Full-Stack Web Developer.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Features of HTML
            </h4>

            <ul class="list-group">

                <li class="list-group-item">Simple and easy to understand.</li>

                <li class="list-group-item">Platform independent.</li>

                <li class="list-group-item">Works with all modern browsers.</li>

                <li class="list-group-item">Supports images, audio, video, and graphics.</li>

                <li class="list-group-item">Can create responsive web pages with CSS.</li>

                <li class="list-group-item">Supports forms for collecting user information.</li>

                <li class="list-group-item">Provides semantic elements for better SEO and accessibility.</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Tags
            </h4>

            <p>
                HTML documents are created using <strong>tags</strong>. Most tags have an opening tag and a closing tag.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;tagname&gt;
    Content
&lt;/tagname&gt;
</code></pre>

            </div>

            <p class="mt-3">
                Example:
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;h1&gt;Welcome&lt;/h1&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic HTML Document
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;

    &lt;title&gt;My Webpage&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Hello World&lt;/h1&gt;

    &lt;p&gt;Welcome to HTML.&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded p-4 bg-light">

                <h1>Hello World</h1>

                <p>Welcome to HTML.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Applications of HTML
            </h4>

            <div class="row g-3">

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>🌐 Websites</h5>

                            <p class="mb-0">
                                Build static and dynamic websites.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>📱 Web Applications</h5>

                            <p class="mb-0">
                                Create responsive web applications.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>🛒 Online Stores</h5>

                            <p class="mb-0">
                                Develop eCommerce websites.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>📝 Blogs</h5>

                            <p class="mb-0">
                                Design blogging platforms and articles.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>📄 Portfolios</h5>

                            <p class="mb-0">
                                Showcase personal skills and projects.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <div class="card h-100">

                        <div class="card-body text-center">

                            <h5>📧 Email Templates</h5>

                            <p class="mb-0">
                                Create responsive HTML email layouts.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML is the standard markup language for creating web pages. It uses tags to organize content and works together with CSS and JavaScript to build modern, responsive, and interactive websites. Learning HTML is the first and most important step in becoming a web developer.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "History of HTML",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                History of HTML
            </h2>

            <p class="lead">
                <strong>HTML (HyperText Markup Language)</strong> is the standard markup language used to create web pages. It was created to help researchers and users share documents over the World Wide Web.
            </p>

            <div class="alert alert-warning">
                <strong>Important:</strong> HTML was <strong>NOT</strong> developed by Dennis Ritchie. Dennis Ritchie developed the <strong>C Programming Language</strong>. HTML was invented by <strong>Tim Berners-Lee</strong>.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Who Invented HTML?
            </h4>

            <p>
                HTML was invented by <strong>Sir Tim Berners-Lee</strong> in <strong>1991</strong> while working at CERN (European Organization for Nuclear Research) in Switzerland.
            </p>

            <p>
                Tim Berners-Lee also invented the <strong>World Wide Web (WWW)</strong>, the first web browser, and the first web server. His goal was to make it easier for scientists to share information and research documents over the Internet.
            </p>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Why Was HTML Created?
            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5>Document Sharing</h5>

                            <p class="mb-0">
                                HTML was created to allow researchers to share documents easily over the Internet.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5>Web Pages</h5>

                            <p class="mb-0">
                                It made it possible to create structured web pages that could be viewed in any web browser.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Evolution of HTML
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Version</th>

                            <th>Year</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>HTML</td>

                            <td>1991</td>

                            <td>The first version created by Tim Berners-Lee.</td>

                        </tr>

                        <tr>

                            <td>HTML 2.0</td>

                            <td>1995</td>

                            <td>The first official HTML standard with basic web page features.</td>

                        </tr>

                        <tr>

                            <td>HTML 3.2</td>

                            <td>1997</td>

                            <td>Added support for tables, scripting, and improved page formatting.</td>

                        </tr>

                        <tr>

                            <td>HTML 4.01</td>

                            <td>1999</td>

                            <td>Introduced CSS support, better forms, and improved accessibility.</td>

                        </tr>

                        <tr>

                            <td>XHTML</td>

                            <td>2000</td>

                            <td>A stricter version of HTML based on XML rules.</td>

                        </tr>

                        <tr>

                            <td>HTML5</td>

                            <td>2014</td>

                            <td>Introduced audio, video, canvas, semantic elements, local storage, and many modern web features.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Major Milestones
            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>1991</h5>

                            <p class="mb-0">
                                HTML was introduced with only a small number of tags.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>1995</h5>

                            <p class="mb-0">
                                HTML 2.0 became the first official HTML standard.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>1997–1999</h5>

                            <p class="mb-0">
                                Tables, forms, frames, scripting, and CSS support were introduced.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100">

                        <div class="card-body">

                            <h5>2014</h5>

                            <p class="mb-0">
                                HTML5 became the official recommendation with powerful multimedia and semantic features.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML5 Features
            </h4>

            <ul class="list-group">

                <li class="list-group-item">Built-in support for audio and video.</li>

                <li class="list-group-item">Canvas element for drawing graphics.</li>

                <li class="list-group-item">Semantic elements like &lt;header&gt;, &lt;footer&gt;, &lt;section&gt;, and &lt;article&gt;.</li>

                <li class="list-group-item">Local Storage and Session Storage.</li>

                <li class="list-group-item">Better support for mobile devices.</li>

                <li class="list-group-item">Improved forms with new input types.</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Fun Facts
            </h4>

            <div class="alert alert-info">

                <ul class="mb-0">

                    <li>HTML is used by every website on the Internet.</li>

                    <li>HTML itself cannot make websites interactive; JavaScript is used for that.</li>

                    <li>HTML is maintained by the <strong>World Wide Web Consortium (W3C)</strong> and the <strong>WHATWG</strong>.</li>

                    <li>Modern websites are built using HTML, CSS, and JavaScript together.</li>

                </ul>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML was invented by <strong>Tim Berners-Lee</strong> in 1991 to create and share web documents on the World Wide Web. Over the years, HTML has evolved through several versions, with HTML5 becoming the modern standard that supports multimedia, semantic elements, graphics, and responsive web development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "HTML Editors",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Editors
            </h2>

            <p class="lead">
                An <strong>HTML Editor</strong> is a software application used to create, edit, and save HTML files. It helps developers write HTML code efficiently by providing features like syntax highlighting, auto-completion, error detection, and file management.
            </p>

            <p>
                Although HTML can be written using any simple text editor, modern code editors make web development much easier and faster.
            </p>

            <div class="alert alert-info">
                <strong>Tip:</strong> The most popular HTML editor today is <strong>Visual Studio Code (VS Code)</strong> because it is free, lightweight, and supports thousands of extensions.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Popular HTML Editors
            </h4>

            <div class="row g-3">

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5>Visual Studio Code</h5>

                            <p class="mb-0">
                                Free, lightweight, and the most popular editor for HTML, CSS, JavaScript, and many other languages.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5>Notepad++</h5>

                            <p class="mb-0">
                                A lightweight Windows editor with syntax highlighting and multiple programming language support.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-warning">

                        <div class="card-body">

                            <h5>Sublime Text</h5>

                            <p class="mb-0">
                                A fast and powerful code editor with excellent performance and customization.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-info">

                        <div class="card-body">

                            <h5>Brackets</h5>

                            <p class="mb-0">
                                A web development editor designed specifically for HTML, CSS, and JavaScript.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-secondary">

                        <div class="card-body">

                            <h5>Adobe Dreamweaver</h5>

                            <p class="mb-0">
                                A professional editor that provides both code editing and visual web page design.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 border-danger">

                        <div class="card-body">

                            <h5>Notepad</h5>

                            <p class="mb-0">
                                A basic text editor included with Windows. Suitable for learning basic HTML.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Features of a Good HTML Editor
            </h4>

            <ul class="list-group">

                <li class="list-group-item">✔ Syntax Highlighting</li>

                <li class="list-group-item">✔ Auto Completion (IntelliSense)</li>

                <li class="list-group-item">✔ Error Detection</li>

                <li class="list-group-item">✔ Code Formatting</li>

                <li class="list-group-item">✔ File Explorer</li>

                <li class="list-group-item">✔ Extension Support</li>

                <li class="list-group-item">✔ Live Preview</li>

                <li class="list-group-item">✔ Integrated Terminal</li>

                <li class="list-group-item">✔ Search & Replace</li>

                <li class="list-group-item">✔ Multi-language Support</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Creating Your First HTML File
            </h4>

            <ol class="list-group list-group-numbered">

                <li class="list-group-item">
                    Open your HTML editor (VS Code, Notepad++, etc.).
                </li>

                <li class="list-group-item">
                    Create a new file.
                </li>

                <li class="list-group-item">
                    Save the file with the <strong>.html</strong> extension.
                </li>

                <li class="list-group-item">
                    Write your HTML code.
                </li>

                <li class="list-group-item">
                    Save the file and open it in a web browser.
                </li>

            </ol>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;My First HTML Page&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Hello World&lt;/h1&gt;

    &lt;p&gt;Welcome to HTML.&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <h1>Hello World</h1>

                <p>Welcome to HTML.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Comparison of Popular HTML Editors
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Editor</th>

                            <th>Free</th>

                            <th>Platform</th>

                            <th>Best For</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Visual Studio Code</td>

                            <td>Yes</td>

                            <td>Windows, Linux, macOS</td>

                            <td>Professional Development</td>

                        </tr>

                        <tr>

                            <td>Notepad++</td>

                            <td>Yes</td>

                            <td>Windows</td>

                            <td>Beginners</td>

                        </tr>

                        <tr>

                            <td>Sublime Text</td>

                            <td>Trial</td>

                            <td>Windows, Linux, macOS</td>

                            <td>Fast Coding</td>

                        </tr>

                        <tr>

                            <td>Dreamweaver</td>

                            <td>No</td>

                            <td>Windows, macOS</td>

                            <td>Professional Web Design</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML editors help developers write and manage HTML code efficiently. While basic text editors like Notepad can be used, modern editors such as Visual Studio Code provide powerful features like syntax highlighting, auto-completion, debugging, and extensions, making web development faster and easier.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Basic HTML Structure",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Basic HTML Structure
            </h2>

            <p class="lead">
                Every HTML document follows a standard structure. This structure helps web browsers understand and correctly display the content of a webpage.
            </p>

            <p>
                An HTML document consists of several important elements such as the
                <strong>&lt;!DOCTYPE&gt;</strong> declaration, <strong>&lt;html&gt;</strong>,
                <strong>&lt;head&gt;</strong>, <strong>&lt;title&gt;</strong>, and
                <strong>&lt;body&gt;</strong>.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Every HTML page should begin with the
                <strong>&lt;!DOCTYPE html&gt;</strong> declaration to tell the browser that the document is written in HTML5.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic HTML Document
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;

&lt;head&gt;

    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport"
          content="width=device-width, initial-scale=1.0"&gt;

    &lt;title&gt;My First Webpage&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Welcome to HTML&lt;/h1&gt;

    &lt;p&gt;This is my first HTML webpage.&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Output
            </h4>

            <div class="border rounded bg-light p-4">

                <h1>Welcome to HTML</h1>

                <p>This is my first HTML webpage.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Structure Explained
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Element</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>&lt;!DOCTYPE html&gt;</td>

                            <td>Declares that the document uses HTML5.</td>

                        </tr>

                        <tr>

                            <td>&lt;html&gt;</td>

                            <td>The root element that contains the entire HTML document.</td>

                        </tr>

                        <tr>

                            <td>&lt;head&gt;</td>

                            <td>Contains information about the webpage that is not displayed on the page.</td>

                        </tr>

                        <tr>

                            <td>&lt;meta charset="UTF-8"&gt;</td>

                            <td>Specifies the character encoding.</td>

                        </tr>

                        <tr>

                            <td>&lt;meta name="viewport"&gt;</td>

                            <td>Makes the webpage responsive on mobile devices.</td>

                        </tr>

                        <tr>

                            <td>&lt;title&gt;</td>

                            <td>Displays the page title in the browser tab.</td>

                        </tr>

                        <tr>

                            <td>&lt;body&gt;</td>

                            <td>Contains all visible webpage content.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Visual Representation
            </h4>

            <div class="border rounded p-3 bg-light overflow-auto">

<pre class="mb-0"><code>HTML Document
│
├── &lt;!DOCTYPE html&gt;
│
└── &lt;html&gt;
     │
     ├── &lt;head&gt;
     │     ├── Meta Tags
     │     └── Title
     │
     └── &lt;body&gt;
           ├── Headings
           ├── Paragraphs
           ├── Images
           ├── Links
           ├── Tables
           ├── Forms
           └── Other HTML Elements
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Purpose of Each Section
            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card h-100 border-primary">

                        <div class="card-body">

                            <h5>&lt;head&gt;</h5>

                            <p class="mb-0">
                                Stores metadata, title, CSS links, icons, fonts, and JavaScript files.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card h-100 border-success">

                        <div class="card-body">

                            <h5>&lt;body&gt;</h5>

                            <p class="mb-0">
                                Contains everything visible to users, including text, images, buttons, forms, videos, and tables.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Rules for Writing HTML
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always start with <strong>&lt;!DOCTYPE html&gt;</strong>.
                </li>

                <li class="list-group-item">
                    Keep all visible content inside the <strong>&lt;body&gt;</strong> element.
                </li>

                <li class="list-group-item">
                    Place page information inside the <strong>&lt;head&gt;</strong> section.
                </li>

                <li class="list-group-item">
                    Close all tags whenever required.
                </li>

                <li class="list-group-item">
                    Use proper indentation to improve readability.
                </li>

                <li class="list-group-item">
                    Include the viewport meta tag for responsive web pages.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of a Proper HTML Structure
            </h4>

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="alert alert-primary text-center mb-0">

                        ✔ Easy to Read

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-success text-center mb-0">

                        ✔ Better SEO

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-warning text-center mb-0">

                        ✔ Responsive Design

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-info text-center mb-0">

                        ✔ Easy Maintenance

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-secondary text-center mb-0">

                        ✔ Browser Compatibility

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-danger text-center mb-0">

                        ✔ Professional Coding

                    </div>

                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    Every HTML document follows a standard structure consisting of the <strong>&lt;!DOCTYPE&gt;</strong>, <strong>&lt;html&gt;</strong>, <strong>&lt;head&gt;</strong>, and <strong>&lt;body&gt;</strong> elements. A well-structured HTML page is easier to read, maintain, optimize for search engines, and display correctly across all modern browsers and devices.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "HTML Elements",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Elements
            </h2>

            <p class="lead">
                An <strong>HTML element</strong> is the building block of every HTML document. Elements define the structure and content of a webpage. They are created using HTML tags and usually consist of an opening tag, content, and a closing tag.
            </p>

            <div class="alert alert-info">
                <strong>Definition:</strong> An HTML element is everything from the opening tag to the closing tag, including the content between them.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Syntax of an HTML Element
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;tagname&gt;
    Content goes here...
&lt;/tagname&gt;
</code></pre>

            </div>

            <p class="mt-3">
                Example:
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;h1&gt;Welcome to HTML&lt;/h1&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Output
            </h4>

            <div class="border rounded bg-light p-4">

                <h1>Welcome to HTML</h1>

                <p>This is a paragraph.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Parts of an HTML Element
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Part</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Opening Tag</td>

                            <td>Marks the beginning of an HTML element. Example: <code>&lt;p&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Content</td>

                            <td>The text or other HTML elements placed inside the tags.</td>

                        </tr>

                        <tr>

                            <td>Closing Tag</td>

                            <td>Marks the end of the element. Example: <code>&lt;/p&gt;</code></td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common HTML Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-striped table-bordered table-hover align-middle">

                    <thead class="table-primary">

                        <tr>

                            <th>Element</th>

                            <th>Purpose</th>

                            <th>Example</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>&lt;h1&gt;</td>

                            <td>Main Heading</td>

                            <td>&lt;h1&gt;Heading&lt;/h1&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;p&gt;</td>

                            <td>Paragraph</td>

                            <td>&lt;p&gt;Hello&lt;/p&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;a&gt;</td>

                            <td>Hyperlink</td>

                            <td>&lt;a href="#"&gt;Visit&lt;/a&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;img&gt;</td>

                            <td>Image</td>

                            <td>&lt;img src="image.jpg"&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;ul&gt;</td>

                            <td>Unordered List</td>

                            <td>&lt;ul&gt;...&lt;/ul&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;table&gt;</td>

                            <td>Create Tables</td>

                            <td>&lt;table&gt;...&lt;/table&gt;</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Nested HTML Elements
            </h4>

            <p>
                HTML elements can contain other HTML elements. This is called <strong>nesting</strong>.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div&gt;

    &lt;h2&gt;HTML Course&lt;/h2&gt;

    &lt;p&gt;Learn HTML from beginner to advanced.&lt;/p&gt;

&lt;/div&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <h2>HTML Course</h2>

                <p>Learn HTML from beginner to advanced.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Empty HTML Elements
            </h4>

            <p>
                Some HTML elements do not have closing tags because they do not contain any content. These are called <strong>empty elements</strong>.
            </p>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Element</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>&lt;br&gt;</td>

                            <td>Inserts a line break.</td>

                        </tr>

                        <tr>

                            <td>&lt;hr&gt;</td>

                            <td>Creates a horizontal line.</td>

                        </tr>

                        <tr>

                            <td>&lt;img&gt;</td>

                            <td>Displays an image.</td>

                        </tr>

                        <tr>

                            <td>&lt;input&gt;</td>

                            <td>Creates an input field.</td>

                        </tr>

                        <tr>

                            <td>&lt;meta&gt;</td>

                            <td>Provides metadata about the webpage.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Rules for HTML Elements
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always use the correct opening and closing tags.
                </li>

                <li class="list-group-item">
                    Nest elements properly.
                </li>

                <li class="list-group-item">
                    Write element names in lowercase.
                </li>

                <li class="list-group-item">
                    Close tags in the correct order.
                </li>

                <li class="list-group-item">
                    Use meaningful elements for better readability.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Elements
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Structured Content
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Easy to Read
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        SEO Friendly
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive Layout
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Browser Compatible
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Easy Maintenance
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML elements are the building blocks of every webpage. They define the structure and content of a document using tags. By combining different HTML elements, developers can create headings, paragraphs, links, images, tables, forms, multimedia, and complete responsive websites.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Headings & Paragraphs",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Headings & Paragraphs
            </h2>

            <p class="lead">
                <strong>Headings</strong> and <strong>paragraphs</strong> are the most commonly used HTML elements. They help organize web page content, making it easier for users to read and understand.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> HTML provides six heading levels, from <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code>, and one paragraph element, <code>&lt;p&gt;</code>.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Headings
            </h4>

            <p>
                Headings are used to define titles and subheadings on a webpage. There are six levels of headings:
            </p>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Tag</th>

                            <th>Description</th>

                            <th>Importance</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>&lt;h1&gt;</td>

                            <td>Main Heading</td>

                            <td>Highest</td>

                        </tr>

                        <tr>

                            <td>&lt;h2&gt;</td>

                            <td>Sub Heading</td>

                            <td>High</td>

                        </tr>

                        <tr>

                            <td>&lt;h3&gt;</td>

                            <td>Section Heading</td>

                            <td>Medium</td>

                        </tr>

                        <tr>

                            <td>&lt;h4&gt;</td>

                            <td>Sub Section</td>

                            <td>Low</td>

                        </tr>

                        <tr>

                            <td>&lt;h5&gt;</td>

                            <td>Minor Heading</td>

                            <td>Lower</td>

                        </tr>

                        <tr>

                            <td>&lt;h6&gt;</td>

                            <td>Smallest Heading</td>

                            <td>Lowest</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Heading Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <h1>Heading 1</h1>

                <h2>Heading 2</h2>

                <h3>Heading 3</h3>

                <h4>Heading 4</h4>

                <h5>Heading 5</h5>

                <h6>Heading 6</h6>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Paragraphs
            </h4>

            <p>
                The <code>&lt;p&gt;</code> element is used to display blocks of text. Browsers automatically add some space before and after each paragraph.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;p&gt;
HTML is the standard markup language for creating web pages.
&lt;/p&gt;

&lt;p&gt;
CSS is used to style HTML documents.
&lt;/p&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <p>HTML is the standard markup language for creating web pages.</p>

                <p>CSS is used to style HTML documents.</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Difference Between Headings and Paragraphs
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Heading</th>

                            <th>Paragraph</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Used for titles.</td>

                            <td>Used for normal text.</td>

                        </tr>

                        <tr>

                            <td>Six heading levels.</td>

                            <td>Only one paragraph tag.</td>

                        </tr>

                        <tr>

                            <td>Large and bold by default.</td>

                            <td>Normal text formatting.</td>

                        </tr>

                        <tr>

                            <td>Important for SEO.</td>

                            <td>Provides detailed information.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use only one <code>&lt;h1&gt;</code> on a webpage whenever possible.
                </li>

                <li class="list-group-item">
                    Use headings in the correct order (<code>h1</code> → <code>h2</code> → <code>h3</code>).
                </li>

                <li class="list-group-item">
                    Use paragraphs for normal text content.
                </li>

                <li class="list-group-item">
                    Avoid skipping heading levels unnecessarily.
                </li>

                <li class="list-group-item">
                    Write clear and meaningful headings for better SEO and accessibility.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Better Readability
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Improved SEO
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Well Organized Content
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Easy Navigation
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Accessible for Screen Readers
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Professional Web Pages
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML headings and paragraphs are essential elements for organizing webpage content. Headings define titles and sections, while paragraphs display text. Proper use of headings improves SEO, accessibility, and the overall structure of a webpage, making it easier for users and search engines to understand the content.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Text Formatting",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Text Formatting
            </h2>

            <p class="lead">
                <strong>HTML Text Formatting</strong> is used to display text in different styles such as <strong>bold</strong>, <em>italic</em>, <mark>highlighted</mark>, <small>small</small>, <del>deleted</del>, and <ins>inserted</ins>. These formatting elements make web content more attractive, readable, and meaningful.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Text formatting changes the appearance or meaning of text. Some formatting tags are semantic, meaning they also provide information about the importance of the content.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common HTML Formatting Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>Tag</th>
                            <th>Description</th>
                            <th>Example Output</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>&lt;b&gt;</td>
                            <td>Displays bold text.</td>
                            <td><b>Bold Text</b></td>
                        </tr>

                        <tr>
                            <td>&lt;strong&gt;</td>
                            <td>Indicates important text.</td>
                            <td><strong>Important Text</strong></td>
                        </tr>

                        <tr>
                            <td>&lt;i&gt;</td>
                            <td>Displays italic text.</td>
                            <td><i>Italic Text</i></td>
                        </tr>

                        <tr>
                            <td>&lt;em&gt;</td>
                            <td>Emphasizes text.</td>
                            <td><em>Emphasized Text</em></td>
                        </tr>

                        <tr>
                            <td>&lt;mark&gt;</td>
                            <td>Highlights text.</td>
                            <td><mark>Highlighted Text</mark></td>
                        </tr>

                        <tr>
                            <td>&lt;small&gt;</td>
                            <td>Displays smaller text.</td>
                            <td><small>Small Text</small></td>
                        </tr>

                        <tr>
                            <td>&lt;del&gt;</td>
                            <td>Shows deleted text.</td>
                            <td><del>Deleted Text</del></td>
                        </tr>

                        <tr>
                            <td>&lt;ins&gt;</td>
                            <td>Shows inserted text.</td>
                            <td><ins>Inserted Text</ins></td>
                        </tr>

                        <tr>
                            <td>&lt;sub&gt;</td>
                            <td>Displays subscript text.</td>
                            <td>H<sub>2</sub>O</td>
                        </tr>

                        <tr>
                            <td>&lt;sup&gt;</td>
                            <td>Displays superscript text.</td>
                            <td>X<sup>2</sup></td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;p&gt;
This is &lt;b&gt;bold&lt;/b&gt; text.
&lt;/p&gt;

&lt;p&gt;
This is &lt;strong&gt;important&lt;/strong&gt; text.
&lt;/p&gt;

&lt;p&gt;
This is &lt;i&gt;italic&lt;/i&gt; text.
&lt;/p&gt;

&lt;p&gt;
This is &lt;em&gt;emphasized&lt;/em&gt; text.
&lt;/p&gt;

&lt;p&gt;
This is &lt;mark&gt;highlighted&lt;/mark&gt; text.
&lt;/p&gt;

&lt;p&gt;
Water Formula: H&lt;sub&gt;2&lt;/sub&gt;O
&lt;/p&gt;

&lt;p&gt;
X&lt;sup&gt;2&lt;/sup&gt; + Y&lt;sup&gt;2&lt;/sup&gt;
&lt;/p&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Output
            </h4>

            <div class="border rounded bg-light p-4">

                <p>This is <b>bold</b> text.</p>

                <p>This is <strong>important</strong> text.</p>

                <p>This is <i>italic</i> text.</p>

                <p>This is <em>emphasized</em> text.</p>

                <p>This is <mark>highlighted</mark> text.</p>

                <p>Water Formula: H<sub>2</sub>O</p>

                <p>X<sup>2</sup> + Y<sup>2</sup></p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Difference Between Similar Tags
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>
                            <th>Tag</th>
                            <th>Purpose</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>&lt;b&gt;</td>
                            <td>Makes text bold without adding importance.</td>
                        </tr>

                        <tr>
                            <td>&lt;strong&gt;</td>
                            <td>Makes text bold and indicates importance.</td>
                        </tr>

                        <tr>
                            <td>&lt;i&gt;</td>
                            <td>Displays italic text for visual styling.</td>
                        </tr>

                        <tr>
                            <td>&lt;em&gt;</td>
                            <td>Displays italic text with emphasis.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use <code>&lt;strong&gt;</code> instead of <code>&lt;b&gt;</code> for important text.
                </li>

                <li class="list-group-item">
                    Use <code>&lt;em&gt;</code> instead of <code>&lt;i&gt;</code> when emphasizing text.
                </li>

                <li class="list-group-item">
                    Do not overuse bold or italic formatting.
                </li>

                <li class="list-group-item">
                    Use <code>&lt;mark&gt;</code> to highlight important information.
                </li>

                <li class="list-group-item">
                    Use <code>&lt;sub&gt;</code> and <code>&lt;sup&gt;</code> for scientific and mathematical expressions.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of Text Formatting
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Improves Readability
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Highlights Important Information
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Better User Experience
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Supports Scientific Notation
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Improves Accessibility
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Professional Content Presentation
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML text formatting elements allow developers to present text in meaningful and visually appealing ways. Tags such as <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;mark&gt;</code>, <code>&lt;sub&gt;</code>, and <code>&lt;sup&gt;</code> improve readability, accessibility, and the overall user experience while maintaining semantic meaning.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Links",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Links
            </h2>

            <p class="lead">
                <strong>HTML Links</strong>, also known as <strong>Hyperlinks</strong>, allow users to navigate from one webpage to another, open documents, download files, send emails, or jump to different sections of the same page.
            </p>

            <p>
                Links are created using the <code>&lt;a&gt;</code> (anchor) element. It is one of the most important HTML elements because it connects web pages together and forms the World Wide Web.
            </p>

            <div class="alert alert-info">
                <strong>Syntax:</strong> The <code>href</code> attribute specifies the destination of the link.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Syntax
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;a href="URL"&gt;Link Text&lt;/a&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;a href="https://www.google.com"&gt;
    Visit Google
&lt;/a&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <a href="#">Visit Google</a>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Types of HTML Links
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Type</th>

                            <th>Description</th>

                            <th>Example</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>External Link</td>

                            <td>Links to another website.</td>

                            <td><code>&lt;a href="https://example.com"&gt;Website&lt;/a&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Internal Link</td>

                            <td>Links to another page within the same website.</td>

                            <td><code>&lt;a href="about.html"&gt;About&lt;/a&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Email Link</td>

                            <td>Opens the default email application.</td>

                            <td><code>&lt;a href="mailto:info@example.com"&gt;Email&lt;/a&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Telephone Link</td>

                            <td>Calls a phone number on supported devices.</td>

                            <td><code>&lt;a href="tel:+123456789"&gt;Call&lt;/a&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Bookmark Link</td>

                            <td>Jumps to a specific section on the same page.</td>

                            <td><code>&lt;a href="#contact"&gt;Contact&lt;/a&gt;</code></td>

                        </tr>

                        <tr>

                            <td>Download Link</td>

                            <td>Downloads a file.</td>

                            <td><code>&lt;a href="file.pdf" download&gt;Download&lt;/a&gt;</code></td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Opening a Link in a New Tab
            </h4>

            <p>
                Use the <code>target="_blank"</code> attribute to open a link in a new browser tab.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;a href="https://www.google.com"
   target="_blank"&gt;

   Visit Google

&lt;/a&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Link Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Attribute</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>href</td>

                            <td>Specifies the destination URL.</td>

                        </tr>

                        <tr>

                            <td>target</td>

                            <td>Specifies where to open the link.</td>

                        </tr>

                        <tr>

                            <td>title</td>

                            <td>Displays a tooltip when the mouse hovers over the link.</td>

                        </tr>

                        <tr>

                            <td>download</td>

                            <td>Downloads the linked file.</td>

                        </tr>

                        <tr>

                            <td>rel</td>

                            <td>Defines the relationship between the current page and the linked page.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Bookmark Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;a href="#contact"&gt;Go to Contact Section&lt;/a&gt;

...

&lt;h2 id="contact"&gt;Contact Us&lt;/h2&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use meaningful link text instead of "Click Here".
                </li>

                <li class="list-group-item">
                    Use <code>target="_blank"</code> only when necessary.
                </li>

                <li class="list-group-item">
                    Always provide a valid <code>href</code> value.
                </li>

                <li class="list-group-item">
                    Use descriptive titles for better accessibility.
                </li>

                <li class="list-group-item">
                    Test links regularly to avoid broken pages.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Links
            </h4>

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="alert alert-primary text-center mb-0">

                        Easy Navigation

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-success text-center mb-0">

                        Connects Web Pages

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-warning text-center mb-0">

                        Better User Experience

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-info text-center mb-0">

                        Improves Website Structure

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-secondary text-center mb-0">

                        Supports SEO

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="alert alert-danger text-center mb-0">

                        Fast Navigation

                    </div>

                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML links are created using the <code>&lt;a&gt;</code> element. They allow users to navigate between web pages, websites, documents, email addresses, and sections within the same page. Proper use of links improves website navigation, accessibility, SEO, and the overall user experience.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Images",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Images
            </h2>

            <p class="lead">
                <strong>Images</strong> make web pages more attractive, informative, and engaging. In HTML, images are displayed using the <code>&lt;img&gt;</code> element.
            </p>

            <p>
                The <code>&lt;img&gt;</code> element is an <strong>empty element</strong>, which means it does not have a closing tag. Images are inserted using attributes such as <code>src</code>, <code>alt</code>, <code>width</code>, and <code>height</code>.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Always provide an <code>alt</code> attribute. It improves accessibility and is displayed if the image cannot be loaded.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Syntax
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;img src="image.jpg" alt="Image Description"&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;img src="images/html-logo.png"
     alt="HTML Logo"&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Image Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>Attribute</th>
                            <th>Description</th>
                            <th>Required</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><code>src</code></td>
                            <td>Specifies the image file location.</td>
                            <td>Yes</td>
                        </tr>

                        <tr>
                            <td><code>alt</code></td>
                            <td>Alternative text displayed if the image cannot load.</td>
                            <td>Recommended</td>
                        </tr>

                        <tr>
                            <td><code>width</code></td>
                            <td>Sets the image width.</td>
                            <td>No</td>
                        </tr>

                        <tr>
                            <td><code>height</code></td>
                            <td>Sets the image height.</td>
                            <td>No</td>
                        </tr>

                        <tr>
                            <td><code>title</code></td>
                            <td>Displays a tooltip when hovering over the image.</td>
                            <td>No</td>
                        </tr>

                        <tr>
                            <td><code>loading="lazy"</code></td>
                            <td>Loads the image only when needed, improving performance.</td>
                            <td>No</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Setting Image Size
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;img src="flower.jpg"
     alt="Flower"
     width="300"
     height="200"&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Responsive Images (Bootstrap 5)
            </h4>

            <p>
                Bootstrap provides the <code>img-fluid</code> class to make images responsive on all screen sizes.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;img src="nature.jpg"
     class="img-fluid rounded shadow"
     alt="Nature"&gt;
</code></pre>

            </div>

            <div class="alert alert-success mt-3">
                <strong>Best Practice:</strong> Use <code>class="img-fluid"</code> instead of fixed widths whenever possible.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Image Paths
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>
                            <th>Type</th>
                            <th>Example</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Image in Same Folder</td>
                            <td><code>src="photo.jpg"</code></td>
                        </tr>

                        <tr>
                            <td>Image in Folder</td>
                            <td><code>src="images/photo.jpg"</code></td>
                        </tr>

                        <tr>
                            <td>Image in Parent Folder</td>
                            <td><code>src="../photo.jpg"</code></td>
                        </tr>

                        <tr>
                            <td>Image from Website</td>
                            <td><code>src="https://example.com/photo.jpg"</code></td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Using Images as Links
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;a href="https://www.example.com"&gt;

    &lt;img src="logo.png"
         alt="Website Logo"
         class="img-fluid"&gt;

&lt;/a&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always use the <code>alt</code> attribute.
                </li>

                <li class="list-group-item">
                    Use descriptive file names.
                </li>

                <li class="list-group-item">
                    Optimize image size for faster loading.
                </li>

                <li class="list-group-item">
                    Use <code>img-fluid</code> for responsive images.
                </li>

                <li class="list-group-item">
                    Use appropriate image formats such as JPG, PNG, SVG, WebP, or GIF.
                </li>

                <li class="list-group-item">
                    Use <code>loading="lazy"</code> for better page performance.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Image Formats
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>Format</th>
                            <th>Best Used For</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>JPG / JPEG</td>
                            <td>Photographs</td>
                        </tr>

                        <tr>
                            <td>PNG</td>
                            <td>Transparent images</td>
                        </tr>

                        <tr>
                            <td>SVG</td>
                            <td>Icons and logos</td>
                        </tr>

                        <tr>
                            <td>GIF</td>
                            <td>Simple animations</td>
                        </tr>

                        <tr>
                            <td>WebP</td>
                            <td>Modern, compressed web images</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Images
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Attractive Design
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Better User Experience
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Improves Content Understanding
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive with Bootstrap
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        SEO Friendly
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Supports Multiple Formats
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML images are displayed using the <code>&lt;img&gt;</code> element. By using attributes like <code>src</code>, <code>alt</code>, <code>width</code>, and Bootstrap's <code>img-fluid</code> class, developers can create responsive, accessible, and visually appealing web pages that work well on all devices.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Lists",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Lists
            </h2>

            <p class="lead">
                <strong>HTML Lists</strong> are used to organize related items in a structured format. Lists improve readability and help present information clearly on a webpage.
            </p>

            <p>
                HTML provides three types of lists:
            </p>

            <ul>
                <li><strong>Ordered List (&lt;ol&gt;)</strong> – Displays items with numbers or letters.</li>
                <li><strong>Unordered List (&lt;ul&gt;)</strong> – Displays items with bullets.</li>
                <li><strong>Description List (&lt;dl&gt;)</strong> – Displays terms with their descriptions.</li>
            </ul>

            <div class="alert alert-info">
                <strong>Note:</strong> Each list item in ordered and unordered lists is created using the <code>&lt;li&gt;</code> (List Item) element.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                1. Unordered List
            </h4>

            <p>
                An unordered list displays items using bullet points.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;ul&gt;
    &lt;li&gt;HTML&lt;/li&gt;
    &lt;li&gt;CSS&lt;/li&gt;
    &lt;li&gt;JavaScript&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                2. Ordered List
            </h4>

            <p>
                An ordered list displays items in numerical or alphabetical order.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;ol&gt;
    &lt;li&gt;Install VS Code&lt;/li&gt;
    &lt;li&gt;Create an HTML File&lt;/li&gt;
    &lt;li&gt;Run in Browser&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <ol>
                    <li>Install VS Code</li>
                    <li>Create an HTML File</li>
                    <li>Run in Browser</li>
                </ol>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Ordered List Types
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Type</th>

                            <th>Attribute Value</th>

                            <th>Example Output</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Numbers</td>

                            <td>1</td>

                            <td>1, 2, 3</td>

                        </tr>

                        <tr>

                            <td>Uppercase Letters</td>

                            <td>A</td>

                            <td>A, B, C</td>

                        </tr>

                        <tr>

                            <td>Lowercase Letters</td>

                            <td>a</td>

                            <td>a, b, c</td>

                        </tr>

                        <tr>

                            <td>Upper Roman</td>

                            <td>I</td>

                            <td>I, II, III</td>

                        </tr>

                        <tr>

                            <td>Lower Roman</td>

                            <td>i</td>

                            <td>i, ii, iii</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <p><strong>Example:</strong></p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;ol type="A"&gt;
    &lt;li&gt;Apple&lt;/li&gt;
    &lt;li&gt;Banana&lt;/li&gt;
    &lt;li&gt;Orange&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                3. Description List
            </h4>

            <p>
                A description list is used to display terms and their definitions.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;dl&gt;

    &lt;dt&gt;HTML&lt;/dt&gt;
    &lt;dd&gt;HyperText Markup Language&lt;/dd&gt;

    &lt;dt&gt;CSS&lt;/dt&gt;
    &lt;dd&gt;Cascading Style Sheets&lt;/dd&gt;

&lt;/dl&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <dl>

                    <dt><strong>HTML</strong></dt>
                    <dd>HyperText Markup Language</dd>

                    <dt><strong>CSS</strong></dt>
                    <dd>Cascading Style Sheets</dd>

                </dl>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Nested Lists
            </h4>

            <p>
                Lists can contain other lists. This is called a <strong>nested list</strong>.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;ul&gt;

    &lt;li&gt;Programming

        &lt;ul&gt;
            &lt;li&gt;HTML&lt;/li&gt;
            &lt;li&gt;CSS&lt;/li&gt;
            &lt;li&gt;JavaScript&lt;/li&gt;
        &lt;/ul&gt;

    &lt;/li&gt;

&lt;/ul&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Comparison of HTML Lists
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>List Type</th>

                            <th>Tag</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Unordered List</td>

                            <td>&lt;ul&gt;</td>

                            <td>Displays bullet points.</td>

                        </tr>

                        <tr>

                            <td>Ordered List</td>

                            <td>&lt;ol&gt;</td>

                            <td>Displays numbered or lettered items.</td>

                        </tr>

                        <tr>

                            <td>Description List</td>

                            <td>&lt;dl&gt;</td>

                            <td>Displays terms with descriptions.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use unordered lists for menus and navigation.
                </li>

                <li class="list-group-item">
                    Use ordered lists for step-by-step instructions.
                </li>

                <li class="list-group-item">
                    Use description lists for definitions and glossaries.
                </li>

                <li class="list-group-item">
                    Keep list items short and meaningful.
                </li>

                <li class="list-group-item">
                    Use nested lists only when necessary.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Lists
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Better Organization
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Easy to Read
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Improves User Experience
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        SEO Friendly
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Supports Nested Content
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Easy to Maintain
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML lists help organize information in a clear and structured way. The <code>&lt;ul&gt;</code> element creates unordered lists, <code>&lt;ol&gt;</code> creates ordered lists, and <code>&lt;dl&gt;</code> creates description lists. Choosing the appropriate list type improves readability, accessibility, and the overall user experience of a webpage.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Tables",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Tables
            </h2>

            <p class="lead">
                <strong>HTML Tables</strong> are used to organize and display data in rows and columns. They are useful for presenting structured information such as student records, employee details, product lists, schedules, and reports.
            </p>

            <p>
                A table is created using the <code>&lt;table&gt;</code> element, while rows, headers, and data cells are created using <code>&lt;tr&gt;</code>, <code>&lt;th&gt;</code>, and <code>&lt;td&gt;</code> elements.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> HTML tables should be used only for displaying tabular data, not for creating webpage layouts.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Table Structure
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;table&gt;

    &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Age&lt;/th&gt;
        &lt;th&gt;City&lt;/th&gt;
    &lt;/tr&gt;

    &lt;tr&gt;
        &lt;td&gt;Ali&lt;/td&gt;
        &lt;td&gt;22&lt;/td&gt;
        &lt;td&gt;Riyadh&lt;/td&gt;
    &lt;/tr&gt;

&lt;/table&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Output
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-dark">

                        <tr>

                            <th>Name</th>

                            <th>Age</th>

                            <th>City</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Ali</td>

                            <td>22</td>

                            <td>Riyadh</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Table Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Element</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>&lt;table&gt;</code></td>

                            <td>Creates the table.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;tr&gt;</code></td>

                            <td>Defines a table row.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;th&gt;</code></td>

                            <td>Creates a table header cell.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;td&gt;</code></td>

                            <td>Creates a table data cell.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;thead&gt;</code></td>

                            <td>Groups the table header.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;tbody&gt;</code></td>

                            <td>Groups the table body.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;tfoot&gt;</code></td>

                            <td>Groups the table footer.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;caption&gt;</code></td>

                            <td>Adds a title to the table.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Table with Caption
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;table&gt;

    &lt;caption&gt;Student Information&lt;/caption&gt;

    &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Course&lt;/th&gt;
    &lt;/tr&gt;

    &lt;tr&gt;
        &lt;td&gt;Ahmed&lt;/td&gt;
        &lt;td&gt;HTML&lt;/td&gt;
    &lt;/tr&gt;

&lt;/table&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Cell Padding and Borders Using Bootstrap
            </h4>

            <p>
                Bootstrap provides ready-made classes for creating beautiful and responsive tables.
            </p>

            <div class="table-responsive">

                <table class="table table-striped table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Class</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>table</code></td>

                            <td>Basic Bootstrap table.</td>

                        </tr>

                        <tr>

                            <td><code>table-bordered</code></td>

                            <td>Adds borders.</td>

                        </tr>

                        <tr>

                            <td><code>table-striped</code></td>

                            <td>Adds zebra-striping.</td>

                        </tr>

                        <tr>

                            <td><code>table-hover</code></td>

                            <td>Adds hover effects.</td>

                        </tr>

                        <tr>

                            <td><code>table-dark</code></td>

                            <td>Dark table header.</td>

                        </tr>

                        <tr>

                            <td><code>table-responsive</code></td>

                            <td>Makes tables responsive on small devices.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Merging Cells
            </h4>

            <p>
                HTML provides the <code>colspan</code> and <code>rowspan</code> attributes to merge table cells.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;table&gt;

    &lt;tr&gt;
        &lt;th colspan="2"&gt;Student&lt;/th&gt;
    &lt;/tr&gt;

    &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;Ali&lt;/td&gt;
    &lt;/tr&gt;

&lt;/table&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use tables only for tabular data.
                </li>

                <li class="list-group-item">
                    Always use <code>&lt;th&gt;</code> for header cells.
                </li>

                <li class="list-group-item">
                    Add a <code>&lt;caption&gt;</code> when appropriate.
                </li>

                <li class="list-group-item">
                    Use <code>table-responsive</code> for mobile devices.
                </li>

                <li class="list-group-item">
                    Keep tables simple and easy to read.
                </li>

                <li class="list-group-item">
                    Use Bootstrap table classes for a professional appearance.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Tables
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Organizes Data Clearly
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Easy to Read
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Professional Presentation
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive with Bootstrap
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Supports Large Data Sets
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Easy to Maintain
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML tables provide a structured way to display information using rows and columns. Elements such as <code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code>, <code>&lt;th&gt;</code>, and <code>&lt;td&gt;</code> create the table structure, while Bootstrap classes like <code>table</code>, <code>table-bordered</code>, <code>table-striped</code>, and <code>table-responsive</code> make tables modern, attractive, and mobile-friendly.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Forms",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Forms
            </h2>

            <p class="lead">
                <strong>HTML Forms</strong> are used to collect information from users. Forms allow users to enter data such as names, email addresses, passwords, phone numbers, comments, and more.
            </p>

            <p>
                Forms are commonly used for <strong>user registration, login pages, contact forms, search boxes, surveys, online applications, and checkout pages</strong>.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> A form is created using the <code>&lt;form&gt;</code> element and contains different input controls such as text boxes, radio buttons, checkboxes, buttons, and dropdown lists.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Form Syntax
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;form action="submit.php" method="post"&gt;

    Form Elements

&lt;/form&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Simple Form Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;form&gt;

    &lt;label&gt;Full Name&lt;/label&gt;
    &lt;input type="text"&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;label&gt;Email&lt;/label&gt;
    &lt;input type="email"&gt;

    &lt;br&gt;&lt;br&gt;

    &lt;button type="submit"&gt;
        Submit
    &lt;/button&gt;

&lt;/form&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Output
            </h4>

            <div class="border rounded bg-light p-4">

                <form>

                    <div class="mb-3">

                        <label class="form-label">Full Name</label>

                        <input type="text" class="form-control" placeholder="Enter your name">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Email</label>

                        <input type="email" class="form-control" placeholder="Enter your email">

                    </div>

                    <button class="btn btn-primary">
                        Submit
                    </button>

                </form>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Form Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Element</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>&lt;form&gt;</code></td>

                            <td>Creates the form.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;label&gt;</code></td>

                            <td>Displays a label for an input field.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;input&gt;</code></td>

                            <td>Accepts user input.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;textarea&gt;</code></td>

                            <td>Allows multiple lines of text.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;select&gt;</code></td>

                            <td>Creates a dropdown list.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;option&gt;</code></td>

                            <td>Defines an item inside a dropdown.</td>

                        </tr>

                        <tr>

                            <td><code>&lt;button&gt;</code></td>

                            <td>Creates a clickable button.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Input Types
            </h4>

            <div class="table-responsive">

                <table class="table table-striped table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>Input Type</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>text</td>

                            <td>Single-line text input.</td>

                        </tr>

                        <tr>

                            <td>password</td>

                            <td>Password field.</td>

                        </tr>

                        <tr>

                            <td>email</td>

                            <td>Email address.</td>

                        </tr>

                        <tr>

                            <td>number</td>

                            <td>Numeric input.</td>

                        </tr>

                        <tr>

                            <td>date</td>

                            <td>Date picker.</td>

                        </tr>

                        <tr>

                            <td>radio</td>

                            <td>Select one option.</td>

                        </tr>

                        <tr>

                            <td>checkbox</td>

                            <td>Select multiple options.</td>

                        </tr>

                        <tr>

                            <td>file</td>

                            <td>Upload a file.</td>

                        </tr>

                        <tr>

                            <td>submit</td>

                            <td>Submit the form.</td>

                        </tr>

                        <tr>

                            <td>reset</td>

                            <td>Clear all form fields.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Bootstrap 5 Form Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;form&gt;

    &lt;div class="mb-3"&gt;
        &lt;label class="form-label"&gt;Full Name&lt;/label&gt;
        &lt;input type="text"
               class="form-control"&gt;
    &lt;/div&gt;

    &lt;div class="mb-3"&gt;
        &lt;label class="form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email"
               class="form-control"&gt;
    &lt;/div&gt;

    &lt;button class="btn btn-primary"&gt;
        Register
    &lt;/button&gt;

&lt;/form&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Important Form Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Attribute</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td><code>action</code></td>

                            <td>Specifies where the form data is sent.</td>

                        </tr>

                        <tr>

                            <td><code>method</code></td>

                            <td>Defines the HTTP method (GET or POST).</td>

                        </tr>

                        <tr>

                            <td><code>name</code></td>

                            <td>Specifies the field name.</td>

                        </tr>

                        <tr>

                            <td><code>placeholder</code></td>

                            <td>Displays hint text inside the field.</td>

                        </tr>

                        <tr>

                            <td><code>required</code></td>

                            <td>Makes the field mandatory.</td>

                        </tr>

                        <tr>

                            <td><code>readonly</code></td>

                            <td>Makes the field read-only.</td>

                        </tr>

                        <tr>

                            <td><code>disabled</code></td>

                            <td>Disables the input field.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always use labels for input fields.
                </li>

                <li class="list-group-item">
                    Choose the correct input type.
                </li>

                <li class="list-group-item">
                    Use the <code>required</code> attribute for mandatory fields.
                </li>

                <li class="list-group-item">
                    Validate user input before processing.
                </li>

                <li class="list-group-item">
                    Use Bootstrap classes such as <code>form-control</code> for responsive forms.
                </li>

                <li class="list-group-item">
                    Keep forms simple and user-friendly.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Forms
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Collects User Information
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Interactive Web Pages
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Easy Data Submission
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive with Bootstrap
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Supports Validation
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Works with Server-Side Languages
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML forms are used to collect and submit user information. They consist of various elements such as <code>&lt;form&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;button&gt;</code>. Using Bootstrap 5 classes like <code>form-control</code> and <code>btn</code> helps create professional, responsive, and user-friendly forms that work across all devices.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Semantic HTML",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                Semantic HTML
            </h2>

            <p class="lead">
                <strong>Semantic HTML</strong> uses meaningful HTML elements that clearly describe the purpose of the content they contain. Instead of using generic elements like <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code> everywhere, semantic elements make the webpage easier to understand for developers, browsers, search engines, and assistive technologies.
            </p>

            <p>
                Semantic HTML was introduced in <strong>HTML5</strong> to create well-structured, accessible, and SEO-friendly websites.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Semantic elements improve code readability, accessibility, and search engine optimization (SEO).
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Why Use Semantic HTML?
            </h4>

            <ul class="list-group mb-4">

                <li class="list-group-item">
                    Makes HTML code easier to read and maintain.
                </li>

                <li class="list-group-item">
                    Improves Search Engine Optimization (SEO).
                </li>

                <li class="list-group-item">
                    Helps screen readers understand webpage content.
                </li>

                <li class="list-group-item">
                    Provides meaningful page structure.
                </li>

                <li class="list-group-item">
                    Makes collaboration easier among developers.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Semantic HTML Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>Element</th>
                            <th>Description</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><code>&lt;header&gt;</code></td>
                            <td>Represents the header section of a webpage or section.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;nav&gt;</code></td>
                            <td>Contains navigation links.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;main&gt;</code></td>
                            <td>Contains the main content of the webpage.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;section&gt;</code></td>
                            <td>Defines a section of related content.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;article&gt;</code></td>
                            <td>Represents an independent article or blog post.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;aside&gt;</code></td>
                            <td>Contains sidebar or additional information.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;footer&gt;</code></td>
                            <td>Represents the footer of a webpage or section.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;figure&gt;</code></td>
                            <td>Groups media such as images or diagrams.</td>
                        </tr>

                        <tr>
                            <td><code>&lt;figcaption&gt;</code></td>
                            <td>Provides a caption for a figure.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Semantic HTML Structure
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;body&gt;

    &lt;header&gt;
        Website Header
    &lt;/header&gt;

    &lt;nav&gt;
        Navigation Menu
    &lt;/nav&gt;

    &lt;main&gt;

        &lt;section&gt;

            &lt;article&gt;

                &lt;h2&gt;HTML Tutorial&lt;/h2&gt;

                &lt;p&gt;Learning Semantic HTML.&lt;/p&gt;

            &lt;/article&gt;

        &lt;/section&gt;

        &lt;aside&gt;

            Sidebar Content

        &lt;/aside&gt;

    &lt;/main&gt;

    &lt;footer&gt;

        Copyright © 2026

    &lt;/footer&gt;

&lt;/body&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Semantic vs Non-Semantic Elements
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Semantic Elements</th>

                            <th>Non-Semantic Elements</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>&lt;header&gt;</td>

                            <td>&lt;div&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;nav&gt;</td>

                            <td>&lt;span&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;section&gt;</td>

                            <td>&lt;div&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;article&gt;</td>

                            <td>&lt;span&gt;</td>

                        </tr>

                        <tr>

                            <td>&lt;footer&gt;</td>

                            <td>&lt;div&gt;</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use <code>&lt;header&gt;</code> for the top section of a page.
                </li>

                <li class="list-group-item">
                    Place navigation links inside <code>&lt;nav&gt;</code>.
                </li>

                <li class="list-group-item">
                    Wrap the primary content inside <code>&lt;main&gt;</code>.
                </li>

                <li class="list-group-item">
                    Use <code>&lt;section&gt;</code> for related content.
                </li>

                <li class="list-group-item">
                    Use <code>&lt;article&gt;</code> for independent content such as blogs or news.
                </li>

                <li class="list-group-item">
                    Always include a <code>&lt;footer&gt;</code> for copyright or contact information.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of Semantic HTML
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Better SEO
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Improved Accessibility
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Easy Maintenance
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Cleaner Code
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Better Browser Understanding
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Professional Web Development
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    Semantic HTML uses meaningful HTML5 elements such as <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, and <code>&lt;footer&gt;</code> to create well-structured webpages. Using semantic elements improves readability, accessibility, maintainability, and search engine optimization, making it a best practice for modern web development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Audio & Video",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Audio & Video
            </h2>

            <p class="lead">
                <strong>HTML5</strong> introduced the <code>&lt;audio&gt;</code> and
                <code>&lt;video&gt;</code> elements, allowing developers to embed multimedia
                content directly into web pages without using external plugins such as Adobe Flash.
            </p>

            <p>
                These elements provide built-in controls like <strong>Play</strong>,
                <strong>Pause</strong>, <strong>Volume</strong>, and
                <strong>Fullscreen</strong>, making multimedia integration simple and user-friendly.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Modern browsers support audio and video elements, but
                supported file formats may vary. Always provide multiple source formats when possible.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Audio Element
            </h4>

            <p>
                The <code>&lt;audio&gt;</code> element is used to play sound files such as music,
                podcasts, voice recordings, and sound effects.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;audio controls&gt;

    &lt;source src="music.mp3" type="audio/mpeg"&gt;

    Your browser does not support the audio element.

&lt;/audio&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Audio Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>Attribute</th>
                            <th>Description</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><code>controls</code></td>
                            <td>Displays play, pause, and volume controls.</td>
                        </tr>

                        <tr>
                            <td><code>autoplay</code></td>
                            <td>Automatically starts playing the audio.</td>
                        </tr>

                        <tr>
                            <td><code>loop</code></td>
                            <td>Repeats the audio continuously.</td>
                        </tr>

                        <tr>
                            <td><code>muted</code></td>
                            <td>Starts the audio in muted mode.</td>
                        </tr>

                        <tr>
                            <td><code>preload</code></td>
                            <td>Specifies how the audio should be loaded.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                HTML Video Element
            </h4>

            <p>
                The <code>&lt;video&gt;</code> element is used to display videos on a webpage.
                It supports built-in playback controls and multiple video formats.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;video width="500" controls&gt;

    &lt;source src="movie.mp4" type="video/mp4"&gt;

    Your browser does not support the video tag.

&lt;/video&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Video Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th>Attribute</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><code>controls</code></td>
                            <td>Shows video playback controls.</td>
                        </tr>

                        <tr>
                            <td><code>width</code></td>
                            <td>Sets the video width.</td>
                        </tr>

                        <tr>
                            <td><code>height</code></td>
                            <td>Sets the video height.</td>
                        </tr>

                        <tr>
                            <td><code>autoplay</code></td>
                            <td>Starts playing automatically.</td>
                        </tr>

                        <tr>
                            <td><code>loop</code></td>
                            <td>Repeats the video continuously.</td>
                        </tr>

                        <tr>
                            <td><code>muted</code></td>
                            <td>Starts the video without sound.</td>
                        </tr>

                        <tr>
                            <td><code>poster</code></td>
                            <td>Displays an image before the video starts.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Using Multiple Sources
            </h4>

            <p>
                Providing multiple source formats improves browser compatibility.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;video controls&gt;

    &lt;source src="movie.mp4" type="video/mp4"&gt;

    &lt;source src="movie.webm" type="video/webm"&gt;

    Your browser does not support HTML5 video.

&lt;/video&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Supported File Formats
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th>Media</th>

                            <th>Common Formats</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Audio</td>

                            <td>MP3, WAV, OGG</td>

                        </tr>

                        <tr>

                            <td>Video</td>

                            <td>MP4, WebM, OGG</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Responsive Video (Bootstrap 5)
            </h4>

            <p>
                Bootstrap provides the <code>ratio</code> utility to make videos responsive.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="ratio ratio-16x9"&gt;

    &lt;iframe
        src="https://www.youtube.com/embed/VIDEO_ID"
        allowfullscreen&gt;
    &lt;/iframe&gt;

&lt;/div&gt;
</code></pre>

            </div>

            <div class="alert alert-success mt-3">
                <strong>Tip:</strong> Use Bootstrap's <code>ratio</code> class to make embedded videos responsive on all devices.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always include the <code>controls</code> attribute.
                </li>

                <li class="list-group-item">
                    Use MP4 for videos and MP3 for audio whenever possible.
                </li>

                <li class="list-group-item">
                    Provide multiple source formats for better compatibility.
                </li>

                <li class="list-group-item">
                    Compress media files to improve loading speed.
                </li>

                <li class="list-group-item">
                    Avoid autoplay with sound, as it may annoy users.
                </li>

                <li class="list-group-item">
                    Make videos responsive using Bootstrap's <code>ratio</code> class.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Audio & Video
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        No External Plugins Required
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Built-in Playback Controls
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Supports Multiple Formats
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Mobile Friendly
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Responsive with Bootstrap
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Easy Multimedia Integration
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML5 provides the <code>&lt;audio&gt;</code> and <code>&lt;video&gt;</code> elements for embedding multimedia content directly into web pages. These elements support built-in controls, multiple file formats, and responsive layouts. Combined with Bootstrap 5 utilities, developers can create attractive, responsive, and user-friendly multimedia experiences on every device.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "HTML Entities & Symbols",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Entities & Symbols
            </h2>

            <p class="lead">
                <strong>HTML Entities</strong> are special codes used to display reserved characters, special symbols, and characters that cannot be typed directly on a keyboard. They begin with an ampersand (<code>&amp;</code>) and end with a semicolon (<code>;</code>).
            </p>

            <p>
                HTML entities are useful for displaying characters such as <code>&lt;</code>, <code>&gt;</code>, copyright symbols, currency symbols, mathematical symbols, emojis, and many more.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Browsers interpret some characters such as <code>&lt;</code> and <code>&gt;</code> as HTML tags. To display them as text, HTML entities must be used.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Why Use HTML Entities?
            </h4>

            <ul class="list-group mb-4">

                <li class="list-group-item">
                    Display reserved HTML characters.
                </li>

                <li class="list-group-item">
                    Display special symbols and currency signs.
                </li>

                <li class="list-group-item">
                    Display mathematical symbols.
                </li>

                <li class="list-group-item">
                    Improve webpage readability.
                </li>

                <li class="list-group-item">
                    Prevent browsers from interpreting text as HTML code.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Syntax
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&amp;entity_name;

or

&amp;#entity_number;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common HTML Entities
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>Entity</th>
                            <th>Code</th>
                            <th>Output</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Less Than</td>
                            <td><code>&amp;lt;</code></td>
                            <td>&lt;</td>
                        </tr>

                        <tr>
                            <td>Greater Than</td>
                            <td><code>&amp;gt;</code></td>
                            <td>&gt;</td>
                        </tr>

                        <tr>
                            <td>Ampersand</td>
                            <td><code>&amp;amp;</code></td>
                            <td>&amp;</td>
                        </tr>

                        <tr>
                            <td>Double Quote</td>
                            <td><code>&amp;quot;</code></td>
                            <td>&quot;</td>
                        </tr>

                        <tr>
                            <td>Apostrophe</td>
                            <td><code>&amp;apos;</code></td>
                            <td>&apos;</td>
                        </tr>

                        <tr>
                            <td>Non-Breaking Space</td>
                            <td><code>&amp;nbsp;</code></td>
                            <td>Space</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;p&gt;
5 &amp;lt; 10
&lt;/p&gt;

&lt;p&gt;
10 &amp;gt; 5
&lt;/p&gt;

&lt;p&gt;
Tom &amp;amp; Jerry
&lt;/p&gt;
</code></pre>

            </div>

            <h5 class="mt-4 text-primary">
                Output
            </h5>

            <div class="border rounded bg-light p-4">

                <p>5 &lt; 10</p>

                <p>10 &gt; 5</p>

                <p>Tom &amp; Jerry</p>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Currency Symbols
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Currency</th>

                            <th>Entity</th>

                            <th>Output</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Dollar</td>

                            <td><code>&amp;dollar;</code></td>

                            <td>$</td>

                        </tr>

                        <tr>

                            <td>Euro</td>

                            <td><code>&amp;euro;</code></td>

                            <td>&euro;</td>

                        </tr>

                        <tr>

                            <td>Pound</td>

                            <td><code>&amp;pound;</code></td>

                            <td>&pound;</td>

                        </tr>

                        <tr>

                            <td>Yen</td>

                            <td><code>&amp;yen;</code></td>

                            <td>&yen;</td>

                        </tr>

                        <tr>

                            <td>Indian Rupee</td>

                            <td><code>&amp;#8377;</code></td>

                            <td>&#8377;</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Mathematical Symbols
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Symbol</th>

                            <th>Entity</th>

                            <th>Output</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Plus Minus</td>

                            <td><code>&amp;plusmn;</code></td>

                            <td>&plusmn;</td>

                        </tr>

                        <tr>

                            <td>Multiply</td>

                            <td><code>&amp;times;</code></td>

                            <td>&times;</td>

                        </tr>

                        <tr>

                            <td>Divide</td>

                            <td><code>&amp;divide;</code></td>

                            <td>&divide;</td>

                        </tr>

                        <tr>

                            <td>Infinity</td>

                            <td><code>&amp;infin;</code></td>

                            <td>&infin;</td>

                        </tr>

                        <tr>

                            <td>Degree</td>

                            <td><code>&amp;deg;</code></td>

                            <td>&deg;</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Popular HTML Symbols
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>Symbol</th>

                            <th>Entity</th>

                            <th>Output</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Copyright</td>

                            <td><code>&amp;copy;</code></td>

                            <td>&copy;</td>

                        </tr>

                        <tr>

                            <td>Registered</td>

                            <td><code>&amp;reg;</code></td>

                            <td>&reg;</td>

                        </tr>

                        <tr>

                            <td>Trademark</td>

                            <td><code>&amp;trade;</code></td>

                            <td>&trade;</td>

                        </tr>

                        <tr>

                            <td>Heart</td>

                            <td><code>&amp;hearts;</code></td>

                            <td>&hearts;</td>

                        </tr>

                        <tr>

                            <td>Spade</td>

                            <td><code>&amp;spades;</code></td>

                            <td>&spades;</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Use entities for reserved HTML characters.
                </li>

                <li class="list-group-item">
                    Prefer named entities whenever available because they are easier to read.
                </li>

                <li class="list-group-item">
                    Use numeric entities when a named entity is unavailable.
                </li>

                <li class="list-group-item">
                    Use <code>&amp;nbsp;</code> only when a non-breaking space is required.
                </li>

                <li class="list-group-item">
                    Test symbols across different browsers and devices.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Entities
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Displays Reserved Characters
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Supports Special Symbols
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Prevents HTML Parsing Errors
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Better Browser Compatibility
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Improves Readability
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Easy to Use
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML entities allow developers to display reserved characters, special symbols, currency signs, and mathematical symbols correctly in web pages. Using entities such as <code>&amp;lt;</code>, <code>&amp;gt;</code>, <code>&amp;amp;</code>, <code>&amp;copy;</code>, and <code>&amp;euro;</code> ensures that webpages are displayed correctly across all browsers while improving readability and accessibility.
                </p>

            </div>

        </div>

    </div>

</div>

`
},


{
title: "Iframes",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Iframes
            </h2>

            <p class="lead">
                An <strong>HTML Iframe</strong> (Inline Frame) is used to display another webpage, document, map, PDF, or video inside the current HTML webpage. The iframe creates a separate browsing area within the page.
            </p>

            <p>
                The <code>&lt;iframe&gt;</code> element is commonly used to embed YouTube videos, Google Maps, PDF files, websites, and other external content directly into a webpage.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> Some websites do not allow themselves to be displayed inside an iframe due to security restrictions.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Basic Syntax
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;iframe src="page.html"&gt;
&lt;/iframe&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Simple Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;iframe
    src="about.html"
    width="600"
    height="300"&gt;
&lt;/iframe&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Important Iframe Attributes
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>Attribute</th>
                            <th>Description</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td><code>src</code></td>
                            <td>Specifies the URL of the webpage to display.</td>
                        </tr>

                        <tr>
                            <td><code>width</code></td>
                            <td>Sets the width of the iframe.</td>
                        </tr>

                        <tr>
                            <td><code>height</code></td>
                            <td>Sets the height of the iframe.</td>
                        </tr>

                        <tr>
                            <td><code>title</code></td>
                            <td>Provides a description for accessibility.</td>
                        </tr>

                        <tr>
                            <td><code>loading="lazy"</code></td>
                            <td>Loads the iframe only when needed.</td>
                        </tr>

                        <tr>
                            <td><code>allowfullscreen</code></td>
                            <td>Allows fullscreen mode for videos.</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Embedding a YouTube Video
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;iframe
    width="560"
    height="315"
    src="https://www.youtube.com/embed/VIDEO_ID"
    allowfullscreen&gt;
&lt;/iframe&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Embedding Google Maps
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;iframe
    src="https://www.google.com/maps/embed?..."
    width="600"
    height="450"
    loading="lazy"&gt;
&lt;/iframe&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Responsive Iframe (Bootstrap 5)
            </h4>

            <p>
                Bootstrap 5 provides the <code>ratio</code> utility to create responsive iframes that automatically adjust to different screen sizes.
            </p>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div class="ratio ratio-16x9"&gt;

    &lt;iframe
        src="https://www.youtube.com/embed/VIDEO_ID"
        allowfullscreen&gt;
    &lt;/iframe&gt;

&lt;/div&gt;
</code></pre>

            </div>

            <div class="alert alert-success mt-3">
                <strong>Tip:</strong> Always use Bootstrap's <code>ratio</code> class to make videos and iframes responsive on mobile, tablet, and desktop devices.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common Uses of Iframes
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Embedding YouTube videos.
                </li>

                <li class="list-group-item">
                    Displaying Google Maps.
                </li>

                <li class="list-group-item">
                    Showing PDF documents.
                </li>

                <li class="list-group-item">
                    Embedding another webpage.
                </li>

                <li class="list-group-item">
                    Displaying online presentations or reports.
                </li>

                <li class="list-group-item">
                    Integrating third-party widgets.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Always provide a meaningful <code>title</code> attribute.
                </li>

                <li class="list-group-item">
                    Use <code>loading="lazy"</code> to improve page performance.
                </li>

                <li class="list-group-item">
                    Make iframes responsive using Bootstrap's <code>ratio</code> utility.
                </li>

                <li class="list-group-item">
                    Embed content only from trusted sources.
                </li>

                <li class="list-group-item">
                    Avoid embedding websites that block iframe access.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML Iframes
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Embed External Content
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Supports Videos & Maps
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Easy to Integrate
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Responsive with Bootstrap
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Saves Development Time
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Supports Interactive Content
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    The <code>&lt;iframe&gt;</code> element allows developers to embed webpages, videos, maps, PDF files, and other external resources inside a webpage. By using attributes such as <code>src</code>, <code>width</code>, <code>height</code>, <code>loading</code>, and Bootstrap's <code>ratio</code> utility, you can create responsive, accessible, and user-friendly embedded content for all devices.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "HTML5 APIs & Features",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML5 APIs & Features
            </h2>

            <p class="lead">
                <strong>HTML5</strong> introduced many powerful APIs and new features that allow developers to build modern, fast, and interactive web applications without relying heavily on third-party plugins.
            </p>

            <p>
                These APIs enable web applications to access device capabilities such as location, offline storage, multimedia, graphics, drag-and-drop functionality, and much more.
            </p>

            <div class="alert alert-info">
                <strong>Note:</strong> HTML5 APIs work together with JavaScript. HTML provides the structure, while JavaScript controls the API functionality.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Major HTML5 Features
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Feature</th>

                            <th>Description</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Semantic Elements</td>

                            <td>Introduced meaningful tags like <code>&lt;header&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;footer&gt;</code>.</td>

                        </tr>

                        <tr>

                            <td>Audio & Video</td>

                            <td>Supports multimedia without external plugins.</td>

                        </tr>

                        <tr>

                            <td>Canvas</td>

                            <td>Draws graphics, animations, and games.</td>

                        </tr>

                        <tr>

                            <td>SVG</td>

                            <td>Creates scalable vector graphics.</td>

                        </tr>

                        <tr>

                            <td>Drag and Drop</td>

                            <td>Allows dragging and dropping HTML elements.</td>

                        </tr>

                        <tr>

                            <td>Local Storage</td>

                            <td>Stores data in the browser.</td>

                        </tr>

                        <tr>

                            <td>Offline Support</td>

                            <td>Allows applications to work without an internet connection.</td>

                        </tr>

                        <tr>

                            <td>Geolocation</td>

                            <td>Accesses the user's geographical location.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Common HTML5 APIs
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-primary">

                        <tr>

                            <th>API</th>

                            <th>Purpose</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Geolocation API</td>

                            <td>Gets the user's current location.</td>

                        </tr>

                        <tr>

                            <td>Web Storage API</td>

                            <td>Stores data using Local Storage and Session Storage.</td>

                        </tr>

                        <tr>

                            <td>Canvas API</td>

                            <td>Draws graphics using JavaScript.</td>

                        </tr>

                        <tr>

                            <td>Drag and Drop API</td>

                            <td>Moves elements by dragging them.</td>

                        </tr>

                        <tr>

                            <td>History API</td>

                            <td>Manipulates browser history.</td>

                        </tr>

                        <tr>

                            <td>Web Workers API</td>

                            <td>Runs JavaScript in the background.</td>

                        </tr>

                        <tr>

                            <td>WebSocket API</td>

                            <td>Provides real-time communication between client and server.</td>

                        </tr>

                        <tr>

                            <td>Fullscreen API</td>

                            <td>Displays an element in fullscreen mode.</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Local Storage Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>// Store Data

localStorage.setItem("username", "Najeeb");

// Read Data

let user = localStorage.getItem("username");

console.log(user);
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Geolocation Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>navigator.geolocation.getCurrentPosition(

function(position){

    console.log(position.coords.latitude);

    console.log(position.coords.longitude);

});
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Canvas Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;canvas id="myCanvas"
width="200"
height="100"&gt;
&lt;/canvas&gt;

&lt;script&gt;

const canvas =
document.getElementById("myCanvas");

const ctx =
canvas.getContext("2d");

ctx.fillStyle = "blue";

ctx.fillRect(20,20,150,60);

&lt;/script&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Drag and Drop Example
            </h4>

            <div class="bg-dark text-white rounded p-3 overflow-auto">

<pre class="mb-0"><code>&lt;div draggable="true"&gt;

Drag Me

&lt;/div&gt;
</code></pre>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Advantages of HTML5 APIs
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Faster Web Applications
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Rich User Experience
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Offline Data Storage
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Access Device Features
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Real-Time Communication
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        No External Plugins Required
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Check browser compatibility before using an API.
                </li>

                <li class="list-group-item">
                    Always request user permission for sensitive APIs such as Geolocation.
                </li>

                <li class="list-group-item">
                    Store only small amounts of data in Local Storage.
                </li>

                <li class="list-group-item">
                    Use HTTPS when working with browser APIs.
                </li>

                <li class="list-group-item">
                    Validate and secure all client-side data.
                </li>

                <li class="list-group-item">
                    Combine HTML5 APIs with JavaScript for maximum functionality.
                </li>

            </ul>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML5 introduced powerful APIs and features such as Semantic Elements, Canvas, Audio, Video, Geolocation, Local Storage, Drag and Drop, Web Workers, and WebSockets. These technologies enable developers to create responsive, interactive, and feature-rich web applications without relying on external plugins. When combined with JavaScript and CSS, HTML5 forms the foundation of modern web development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "Mini Projects",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Mini Projects
            </h2>

            <p class="lead">
                Mini projects are the best way to practice HTML concepts. After learning HTML tags, elements, forms, tables, images, semantic elements, and multimedia, you should build small projects to strengthen your understanding.
            </p>

            <p>
                In this chapter, you'll find beginner-friendly HTML projects that help you gain practical experience. Most of these projects use only HTML, while some can later be enhanced with CSS and JavaScript.
            </p>

            <div class="alert alert-info">
                <strong>Tip:</strong> Build each project yourself instead of copying code. Practice is the fastest way to become a professional web developer.
            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 1: Personal Portfolio Page
            </h4>

            <p>Create a simple personal webpage containing:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Profile Picture</li>

                <li class="list-group-item">Name and Introduction</li>

                <li class="list-group-item">Education</li>

                <li class="list-group-item">Skills</li>

                <li class="list-group-item">Projects</li>

                <li class="list-group-item">Contact Information</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 2: Student Registration Form
            </h4>

            <p>Create a registration form using:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Text Boxes</li>

                <li class="list-group-item">Radio Buttons</li>

                <li class="list-group-item">Checkboxes</li>

                <li class="list-group-item">Dropdown Menu</li>

                <li class="list-group-item">Date Picker</li>

                <li class="list-group-item">Submit and Reset Buttons</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 3: Restaurant Menu
            </h4>

            <p>Create a restaurant menu using:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Headings</li>

                <li class="list-group-item">Food Images</li>

                <li class="list-group-item">Tables</li>

                <li class="list-group-item">Lists</li>

                <li class="list-group-item">Prices</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 4: Product Landing Page
            </h4>

            <p>The page should include:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Company Logo</li>

                <li class="list-group-item">Navigation Bar</li>

                <li class="list-group-item">Product Images</li>

                <li class="list-group-item">Product Description</li>

                <li class="list-group-item">Features Section</li>

                <li class="list-group-item">Contact Section</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 5: College Timetable
            </h4>

            <p>Create a timetable using HTML tables that contains:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Days of the Week</li>

                <li class="list-group-item">Lecture Timings</li>

                <li class="list-group-item">Subjects</li>

                <li class="list-group-item">Break Time</li>

                <li class="list-group-item">Teacher Names</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 6: Image Gallery
            </h4>

            <p>Create an image gallery that contains:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Multiple Images</li>

                <li class="list-group-item">Captions</li>

                <li class="list-group-item">Categories</li>

                <li class="list-group-item">Links</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 7: Contact Us Page
            </h4>

            <p>Create a responsive contact page with:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Name Field</li>

                <li class="list-group-item">Email Field</li>

                <li class="list-group-item">Subject Field</li>

                <li class="list-group-item">Message Box</li>

                <li class="list-group-item">Submit Button</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Project 8: Online Resume
            </h4>

            <p>Your resume should contain:</p>

            <ul class="list-group mb-3">

                <li class="list-group-item">Personal Information</li>

                <li class="list-group-item">Education</li>

                <li class="list-group-item">Experience</li>

                <li class="list-group-item">Skills</li>

                <li class="list-group-item">Languages</li>

                <li class="list-group-item">Certificates</li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Skills Practiced in These Projects
            </h4>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Project</th>

                            <th>HTML Topics Covered</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Portfolio</td>

                            <td>Headings, Images, Links, Lists</td>

                        </tr>

                        <tr>

                            <td>Registration Form</td>

                            <td>Forms, Inputs, Buttons</td>

                        </tr>

                        <tr>

                            <td>Restaurant Menu</td>

                            <td>Tables, Images, Lists</td>

                        </tr>

                        <tr>

                            <td>Landing Page</td>

                            <td>Semantic HTML, Links, Images</td>

                        </tr>

                        <tr>

                            <td>Timetable</td>

                            <td>Tables</td>

                        </tr>

                        <tr>

                            <td>Gallery</td>

                            <td>Images, Links</td>

                        </tr>

                        <tr>

                            <td>Contact Page</td>

                            <td>Forms</td>

                        </tr>

                        <tr>

                            <td>Resume</td>

                            <td>Complete HTML Practice</td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Best Practices
            </h4>

            <ul class="list-group">

                <li class="list-group-item">
                    Write clean and properly indented HTML code.
                </li>

                <li class="list-group-item">
                    Use semantic HTML elements whenever possible.
                </li>

                <li class="list-group-item">
                    Validate your HTML using browser developer tools.
                </li>

                <li class="list-group-item">
                    Test your projects on desktop, tablet, and mobile devices.
                </li>

                <li class="list-group-item">
                    Organize files into folders such as <strong>images</strong>, <strong>css</strong>, and <strong>js</strong>.
                </li>

                <li class="list-group-item">
                    Enhance your projects later using CSS and JavaScript.
                </li>

            </ul>

            <hr class="my-4">

            <h4 class="text-primary mb-3">
                Benefits of Building Mini Projects
            </h4>

            <div class="row g-3">

                <div class="col-md-4">
                    <div class="alert alert-primary text-center mb-0">
                        Improves Coding Skills
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-success text-center mb-0">
                        Builds Confidence
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-warning text-center mb-0">
                        Strengthens HTML Knowledge
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-info text-center mb-0">
                        Creates Portfolio Projects
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-secondary text-center mb-0">
                        Prepares for CSS & JavaScript
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-danger text-center mb-0">
                        Improves Problem Solving
                    </div>
                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    Building mini projects is one of the most effective ways to master HTML. Projects such as a Portfolio Website, Registration Form, Restaurant Menu, Landing Page, Contact Page, Timetable, Image Gallery, and Online Resume help you practice nearly every HTML concept. After completing these projects, you'll be well prepared to learn CSS, Bootstrap, JavaScript, and modern web development.
                </p>

            </div>

        </div>

    </div>

</div>

`
},

{
title: "HTML Interview Questions",
content: `

<div class="container-fluid py-3">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <h2 class="text-primary fw-bold mb-4">
                HTML Interview Questions
            </h2>

            <p class="lead">
                This chapter contains the most frequently asked <strong>HTML interview questions</strong> for beginners, students, fresh graduates, and web developers. These questions cover the fundamental concepts of HTML and are commonly asked in technical interviews.
            </p>

            <div class="alert alert-info">
                <strong>Tip:</strong> Before attending an interview, make sure you understand each question and practice writing HTML code by yourself.
            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-4">
                Top HTML Interview Questions & Answers
            </h3>

            <div class="accordion" id="htmlInterview">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
                            1. What is HTML?
                        </button>
                    </h2>
                    <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            HTML (HyperText Markup Language) is the standard markup language used to create and structure web pages.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
                            2. What does HTML stand for?
                        </button>
                    </h2>
                    <div id="a2" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            HTML stands for <strong>HyperText Markup Language</strong>.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">
                            3. Who invented HTML?
                        </button>
                    </h2>
                    <div id="a3" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            HTML was invented by <strong>Tim Berners-Lee</strong> in 1991.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4">
                            4. What is the latest version of HTML?
                        </button>
                    </h2>
                    <div id="a4" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            The latest version is <strong>HTML5</strong>.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5">
                            5. What is an HTML element?
                        </button>
                    </h2>
                    <div id="a5" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            An HTML element consists of an opening tag, content, and a closing tag.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a6">
                            6. What is an HTML tag?
                        </button>
                    </h2>
                    <div id="a6" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            An HTML tag is a keyword enclosed in angle brackets that defines an HTML element.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a7">
                            7. What is the difference between HTML and HTML5?
                        </button>
                    </h2>
                    <div id="a7" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            HTML5 introduced semantic elements, audio, video, canvas, local storage, geolocation, and many modern APIs.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a8">
                            8. What are semantic HTML elements?
                        </button>
                    </h2>
                    <div id="a8" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            Semantic elements describe the meaning of content, such as <code>&lt;header&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, and <code>&lt;footer&gt;</code>.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a9">
                            9. What is the purpose of the DOCTYPE declaration?
                        </button>
                    </h2>
                    <div id="a9" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            It tells the browser that the document uses HTML5.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="q10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a10">
                            10. What is the difference between Block and Inline elements?
                        </button>
                    </h2>
                    <div id="a10" class="accordion-collapse collapse" data-bs-parent="#htmlInterview">
                        <div class="accordion-body">
                            Block elements take the full width of the page, while inline elements occupy only the required width.
                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-5">

            <h3 class="text-primary mb-3">
                Frequently Asked HTML Interview Questions
            </h3>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>#</th>

                            <th>Question</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr><td>11</td><td>What is the difference between <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code>?</td></tr>
                        <tr><td>12</td><td>What is the purpose of the <code>&lt;head&gt;</code> element?</td></tr>
                        <tr><td>13</td><td>What is the purpose of the <code>&lt;body&gt;</code> element?</td></tr>
                        <tr><td>14</td><td>How do you create a hyperlink in HTML?</td></tr>
                        <tr><td>15</td><td>How do you insert an image?</td></tr>
                        <tr><td>16</td><td>What is the use of the <code>alt</code> attribute?</td></tr>
                        <tr><td>17</td><td>What is the difference between ordered and unordered lists?</td></tr>
                        <tr><td>18</td><td>How do you create a table?</td></tr>
                        <tr><td>19</td><td>How do you create an HTML form?</td></tr>
                        <tr><td>20</td><td>What is the difference between GET and POST methods?</td></tr>
                        <tr><td>21</td><td>What are HTML attributes?</td></tr>
                        <tr><td>22</td><td>What is an iframe?</td></tr>
                        <tr><td>23</td><td>What are HTML entities?</td></tr>
                        <tr><td>24</td><td>What is Local Storage?</td></tr>
                        <tr><td>25</td><td>What are the new features of HTML5?</td></tr>

                    </tbody>

                </table>

            </div>

            <hr class="my-4">

            <h3 class="text-primary mb-3">
                Quick Revision
            </h3>

            <div class="row g-3">

                <div class="col-md-6">

                    <div class="card border-primary h-100">

                        <div class="card-header bg-primary text-white">
                            Remember
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>HTML is a markup language.</li>
                                <li>HTML5 is the latest version.</li>
                                <li>HTML creates webpage structure.</li>
                                <li>CSS styles webpages.</li>
                                <li>JavaScript adds interactivity.</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-success h-100">

                        <div class="card-header bg-success text-white">
                            Interview Tips
                        </div>

                        <div class="card-body">

                            <ul class="mb-0">

                                <li>Practice writing HTML without copying.</li>
                                <li>Know HTML5 semantic tags.</li>
                                <li>Understand forms and tables.</li>
                                <li>Learn common HTML attributes.</li>
                                <li>Build mini projects before interviews.</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="alert alert-success mt-4">

                <h5 class="fw-bold">
                    Summary
                </h5>

                <p class="mb-0">
                    HTML interview questions mainly focus on HTML basics, document structure, elements, attributes, forms, tables, semantic HTML, multimedia, iframes, entities, and HTML5 features. Practicing these questions along with building mini projects will greatly improve your confidence and prepare you for technical interviews.
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