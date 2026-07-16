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
        C++
    </h3>
    <a href="#" onclick="showLesson(0); return false;">C++ Home</a>
    <a href="#" onclick="showLesson(1); return false;">Introduction</a>
    <a href="#" onclick="showLesson(2); return false;">History</a>
    <a href="#" onclick="showLesson(3); return false;">Software for C++ Programming</a>
    <a href="#" onclick="showLesson(4); return false;">Features</a>
    <a href="#" onclick="showLesson(5); return false;">Structure</a>
    <a href="#" onclick="showLesson(6); return false;">First Program</a>
    <a href="#" onclick="showLesson(7); return false;">Variables</a>
    <a href="#" onclick="showLesson(8); return false;">Data Types</a>
    <a href="#" onclick="showLesson(9); return false;">Constants</a>
    <a href="#" onclick="showLesson(10); return false;">Operators</a>
    <a href="#" onclick="showLesson(11); return false;">Input Output</a>
    <a href="#" onclick="showLesson(12); return false;">If Else</a>
    <a href="#" onclick="showLesson(13); return false;">Loops</a>
    <a href="#" onclick="showLesson(14); return false;">Functions</a>
    <a href="#" onclick="showLesson(15); return false;">Arrays</a>
    <a href="#" onclick="showLesson(16); return false;">Pointers</a>
    <a href="#" onclick="showLesson(17); return false;">Structures</a>
    <a href="#" onclick="showLesson(18); return false;">File Handling</a>
    <a href="#" onclick="showLesson(19); return false;">Projects</a>
    <a href="#" onclick="showLesson(20); return false;">Interview Questions</a>

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
title: "C++ Home",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">Learn C++ Programming</h1>
                <p class="lead">
                    C++ is one of the world's most popular programming languages.
                    It is fast, powerful, and widely used for developing software,
                    games, operating systems, and high-performance applications.
                </p>
            </div>

            <!-- Introduction -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is C++?</h3>
                </div>

                <div class="card-body">

                    <p>
                        <strong>C++</strong> is a general-purpose programming language
                        created as an extension of the C programming language.
                        It supports both procedural and object-oriented programming,
                        making it one of the most flexible programming languages.
                    </p>

                    <p>
                        C++ is used to build desktop applications, operating systems,
                        games, web browsers, embedded systems, databases,
                        and many other types of software.
                    </p>

                    <p>
                        Since C++ is based on the C language, both languages
                        share almost the same syntax. However, C++ provides
                        many additional features such as classes, objects,
                        inheritance, polymorphism, templates, and exception handling.
                    </p>

                </div>
            </div>

            <!-- Uses -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Applications of C++</h3>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            <ul>
                                <li>Desktop Applications</li>
                                <li>Game Development</li>
                                <li>Operating Systems</li>
                                <li>Web Browsers</li>
                                <li>Compilers</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul>
                                <li>Embedded Systems</li>
                                <li>Database Software</li>
                                <li>Graphics Applications</li>
                                <li>Artificial Intelligence</li>
                                <li>Robotics</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Example -->
            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">C++ Example</h3>
                </div>

                <div class="card-body">

<pre class="bg-light p-3 border rounded overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    cout << "Hello World!";

    return 0;
}
</code></pre>

                    <p class="mt-3">
                        <strong>Output:</strong>
                    </p>

<pre class="bg-light p-3 border rounded"><code>Hello World!</code></pre>

                </div>

            </div>

            <!-- Track Progress -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Track Your Progress</h3>
                </div>

                <div class="card-body">

                    <p>Our C++ course allows you to track your learning progress.</p>

                    <ul class="list-group">

                        <li class="list-group-item">
                            ✅ View completed tutorials, exercises, and quizzes.
                        </li>

                        <li class="list-group-item">
                            ✅ Track your learning progress and daily streak.
                        </li>

                        <li class="list-group-item">
                            ✅ Join the leaderboard and compete with other learners.
                        </li>

                        <li class="list-group-item">
                            ✅ Create your own avatar and unlock new skins.
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Reference -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">C++ Reference</h3>
                </div>

                <div class="card-body">

                    <p>
                        Our C++ Reference section contains detailed information
                        about keywords, libraries, classes, objects,
                        and built-in functions.
                    </p>

                    <div class="row">

                        <div class="col-sm-6 col-lg-4">
                            <ul>
                                <li>Reference Overview</li>
                                <li>C++ Keywords</li>
                                <li>&lt;iostream&gt; Objects</li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <ul>
                                <li>&lt;fstream&gt; Classes</li>
                                <li>&lt;cmath&gt; Functions</li>
                                <li>&lt;string&gt; Functions</li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <ul>
                                <li>&lt;cstring&gt; Functions</li>
                                <li>&lt;ctime&gt; Functions</li>
                                <li>&lt;vector&gt; Functions</li>
                                <li>&lt;algorithm&gt; Functions</li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary">

                <h4>Summary</h4>

                <p class="mb-0">
                    C++ is a powerful, efficient, and object-oriented programming
                    language. It is widely used for software development,
                    game development, operating systems, embedded systems,
                    and high-performance applications. Learning C++ provides
                    a strong foundation for understanding advanced programming concepts.
                </p>

            </div>

        </div>
    </div>

</div>
`
},


{
title: "Introduction",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">Introduction to C++</h1>
                <p class="lead">
                    C++ is one of the most powerful, efficient, and widely used programming languages in the world.
                    It is used to develop everything from simple console applications to complex operating systems,
                    video games, desktop software, and embedded systems.
                </p>
            </div>

            <!-- What is C++ -->
            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is C++?</h3>
                </div>

                <div class="card-body">

                    <p>
                        <strong>C++</strong> is a general-purpose programming language developed as an extension of the
                        C programming language. It supports both <strong>procedural programming</strong> and
                        <strong>object-oriented programming (OOP)</strong>, making it suitable for a wide variety
                        of software development projects.
                    </p>

                    <p>
                        C++ allows programmers to write fast, efficient, and reusable code.
                        It gives direct access to system resources such as memory, making it one of the best
                        choices for developing high-performance applications.
                    </p>

                </div>

            </div>

            <!-- History -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">History of C++</h3>
                </div>

                <div class="card-body">

                    <p>
                        C++ was created by <strong>Bjarne Stroustrup</strong> at Bell Laboratories in the early 1980s.
                        It was designed to improve the C language by adding object-oriented programming features
                        while maintaining the speed and efficiency of C.
                    </p>

                    <p>
                        The language was originally called <strong>"C with Classes"</strong>.
                        Later, it was renamed <strong>C++</strong>, where the "++" operator means increment in C,
                        indicating that C++ is an improved version of C.
                    </p>

                </div>

            </div>

            <!-- Features -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Features of C++</h3>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>
                                <li>Simple and powerful syntax</li>
                                <li>Object-Oriented Programming (OOP)</li>
                                <li>High performance</li>
                                <li>Portable across platforms</li>
                                <li>Supports functions and recursion</li>
                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>
                                <li>Dynamic memory management</li>
                                <li>Exception handling</li>
                                <li>Templates and Generic Programming</li>
                                <li>Standard Template Library (STL)</li>
                                <li>Large collection of libraries</li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Applications -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Applications of C++</h3>
                </div>

                <div class="card-body">

                    <p>C++ is used in many fields of software development, including:</p>

                    <div class="row">

                        <div class="col-sm-6">

                            <ul>
                                <li>Desktop Applications</li>
                                <li>Game Development</li>
                                <li>Operating Systems</li>
                                <li>Database Systems</li>
                                <li>Compilers</li>
                            </ul>

                        </div>

                        <div class="col-sm-6">

                            <ul>
                                <li>Embedded Systems</li>
                                <li>Device Drivers</li>
                                <li>Artificial Intelligence</li>
                                <li>Graphics Software</li>
                                <li>Financial Applications</li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Why Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Why Learn C++?</h3>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">
                            ✅ It is one of the fastest programming languages.
                        </li>

                        <li class="list-group-item">
                            ✅ It helps you understand memory management and programming fundamentals.
                        </li>

                        <li class="list-group-item">
                            ✅ It is widely used in software companies around the world.
                        </li>

                        <li class="list-group-item">
                            ✅ It is the foundation for learning advanced programming concepts.
                        </li>

                        <li class="list-group-item">
                            ✅ Many modern programming languages are influenced by C++.
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Advantages of C++</h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <thead class="table-light">

                            <tr>
                                <th>Advantage</th>
                                <th>Description</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>Fast Execution</td>
                                <td>C++ programs execute very quickly because they are compiled into machine code.</td>
                            </tr>

                            <tr>
                                <td>Object-Oriented</td>
                                <td>Supports classes, objects, inheritance, encapsulation, polymorphism, and abstraction.</td>
                            </tr>

                            <tr>
                                <td>Portable</td>
                                <td>Programs can run on multiple operating systems with little or no modification.</td>
                            </tr>

                            <tr>
                                <td>Powerful Libraries</td>
                                <td>Provides the Standard Template Library (STL) and many built-in libraries.</td>
                            </tr>

                            <tr>
                                <td>Memory Control</td>
                                <td>Allows programmers to manage memory efficiently.</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary">

                <h4>Summary</h4>

                <p class="mb-0">
                    C++ is a powerful, efficient, and object-oriented programming language developed
                    as an extension of the C language. It is widely used in game development,
                    desktop applications, operating systems, embedded systems, databases,
                    and many other areas of software development. Learning C++ provides a strong
                    foundation for becoming a professional software developer.
                </p>

            </div>

        </div>

    </div>

</div>
`
},



{
title: "History",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">History of C++</h1>
                <p class="lead">
                    C++ is one of the world's most popular programming languages.
                    It was developed to improve the C programming language by adding
                    object-oriented programming features while maintaining its speed
                    and efficiency.
                </p>
            </div>

            <!-- Origin -->
            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Origin of C++</h3>
                </div>

                <div class="card-body">

                    <p>
                        C++ was developed by <strong>Bjarne Stroustrup</strong>
                        at <strong>Bell Laboratories</strong> in the early
                        <strong>1980s</strong>.
                    </p>

                    <p>
                        At that time, programmers needed a language that was as
                        fast as C but also supported object-oriented programming.
                        Bjarne Stroustrup extended the C language by introducing
                        new programming concepts such as classes and objects.
                    </p>

                </div>

            </div>

            <!-- C with Classes -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">C with Classes</h3>
                </div>

                <div class="card-body">

                    <p>
                        The first version of C++ was originally called
                        <strong>"C with Classes"</strong> because it added
                        classes and object-oriented programming to the C language.
                    </p>

                    <p>
                        This allowed programmers to create reusable and organized
                        code while still using the familiar syntax of C.
                    </p>

                </div>

            </div>

            <!-- Why the Name C++ -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Why is it Called C++?</h3>
                </div>

                <div class="card-body">

                    <p>
                        In the C programming language, the <strong>++</strong>
                        operator means <strong>increment by one</strong>.
                    </p>

                    <p>
                        The name <strong>C++</strong> was chosen because it
                        represents an improved version of the C language.
                        It keeps all the strengths of C while adding many new
                        features.
                    </p>

                </div>

            </div>

            <!-- Important Milestones -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Important Milestones</h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">
                            <tr>
                                <th>Year</th>
                                <th>Milestone</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1979</td>
                                <td>Bjarne Stroustrup began working on "C with Classes".</td>
                            </tr>

                            <tr>
                                <td>1983</td>
                                <td>The language was officially renamed to <strong>C++</strong>.</td>
                            </tr>

                            <tr>
                                <td>1985</td>
                                <td>The first commercial version of C++ was released.</td>
                            </tr>

                            <tr>
                                <td>1998</td>
                                <td>The first international C++ standard (C++98) was published.</td>
                            </tr>

                            <tr>
                                <td>2011</td>
                                <td>C++11 introduced many modern language features.</td>
                            </tr>

                            <tr>
                                <td>2014</td>
                                <td>C++14 was released with additional improvements.</td>
                            </tr>

                            <tr>
                                <td>2017</td>
                                <td>C++17 introduced new libraries and language enhancements.</td>
                            </tr>

                            <tr>
                                <td>2020</td>
                                <td>C++20 became one of the biggest updates in C++ history.</td>
                            </tr>

                            <tr>
                                <td>2023</td>
                                <td>C++23 introduced further improvements and new standard library features.</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Contribution -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Contribution of Bjarne Stroustrup</h3>
                </div>

                <div class="card-body">

                    <p>
                        Bjarne Stroustrup wanted to combine the efficiency of C
                        with the flexibility of object-oriented programming.
                        His work resulted in one of the most successful programming
                        languages ever created.
                    </p>

                    <p>
                        Today, millions of developers use C++ to build operating
                        systems, desktop software, games, web browsers, databases,
                        embedded systems, and high-performance applications.
                    </p>

                </div>

            </div>

            <!-- C vs C++ -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">C vs C++ History</h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <thead class="table-light">
                            <tr>
                                <th>C Language</th>
                                <th>C++ Language</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Developed by Dennis Ritchie.</td>
                                <td>Developed by Bjarne Stroustrup.</td>
                            </tr>

                            <tr>
                                <td>Developed in 1972.</td>
                                <td>Developed in the early 1980s.</td>
                            </tr>

                            <tr>
                                <td>Procedural programming language.</td>
                                <td>Supports both Procedural and Object-Oriented Programming.</td>
                            </tr>

                            <tr>
                                <td>Foundation of C++.</td>
                                <td>Extension of the C language.</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary">

                <h4>Summary</h4>

                <p class="mb-0">
                    C++ was developed by <strong>Bjarne Stroustrup</strong> at
                    Bell Laboratories in the early 1980s. It began as
                    <strong>"C with Classes"</strong> and was later renamed
                    <strong>C++</strong>. Today, C++ is one of the most powerful,
                    efficient, and widely used programming languages in the world.
                </p>

            </div>

        </div>

    </div>

</div>
`
},


{
title: "Software for C++ Programming",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">Software for C++ Programming</h1>
                <p class="lead">
                    To write, compile, debug, and run C++ programs, you need a
                    <strong>C++ compiler</strong> or an
                    <strong>Integrated Development Environment (IDE)</strong>.
                    An IDE provides everything required for software development,
                    including a code editor, compiler, debugger, and project management tools.
                </p>
            </div>

            <!-- Compiler and IDE -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Compiler vs IDE</h3>
                </div>

                <div class="card-body">

                    <p>
                        A <strong>compiler</strong> translates C++ source code into machine code
                        that the computer can execute. An
                        <strong>IDE (Integrated Development Environment)</strong>
                        combines a code editor, compiler, debugger, and other development
                        tools into a single application.
                    </p>

                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">

                            <tr>
                                <th>Compiler</th>
                                <th>IDE</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>Converts source code into executable machine code.</td>
                                <td>Provides editor, compiler, debugger, and project tools.</td>
                            </tr>

                            <tr>
                                <td>Example: GCC, Clang, MSVC</td>
                                <td>Example: Visual Studio, VS Code, Code::Blocks</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- VS Code -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">1. Visual Studio Code (VS Code)</h3>
                </div>

                <div class="card-body">

                    <p>
                        Visual Studio Code is one of the most popular code editors
                        for C++ programming. It is lightweight, fast, and supports
                        thousands of extensions.
                    </p>

                    <p>
                        To compile and run C++ programs, install the
                        <strong>C/C++ Extension</strong> and a compiler such as
                        <strong>MinGW (GCC)</strong> on Windows.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Free and open-source</li>
                        <li>Available for Windows, Linux, and macOS</li>
                        <li>IntelliSense (smart code completion)</li>
                        <li>Powerful debugging tools</li>
                        <li>Integrated terminal</li>
                        <li>Extension support</li>
                        <li>Git integration</li>
                    </ul>

                </div>

            </div>

            <!-- Visual Studio -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">2. Microsoft Visual Studio</h3>
                </div>

                <div class="card-body">

                    <p>
                        Microsoft Visual Studio is a professional IDE for C++
                        development. It includes the Microsoft Visual C++ (MSVC)
                        compiler and provides advanced debugging and project
                        management features.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Professional IDE</li>
                        <li>MSVC compiler included</li>
                        <li>Advanced debugger</li>
                        <li>Code analysis tools</li>
                        <li>GUI application development</li>
                        <li>Windows application support</li>
                    </ul>

                </div>

            </div>

            <!-- CodeBlocks -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">3. Code::Blocks</h3>
                </div>

                <div class="card-body">

                    <p>
                        Code::Blocks is a free IDE designed specifically for C and
                        C++ programming. It is easy to install and includes the GCC
                        compiler in many installation packages.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Free and open-source</li>
                        <li>Easy for beginners</li>
                        <li>Supports GCC compiler</li>
                        <li>Project management</li>
                        <li>Integrated debugger</li>
                    </ul>

                </div>

            </div>

            <!-- Dev C++ -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">4. Dev-C++</h3>
                </div>

                <div class="card-body">

                    <p>
                        Dev-C++ is a lightweight IDE for C and C++ programming.
                        It is suitable for beginners who want a simple environment
                        for writing and running programs.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Simple interface</li>
                        <li>Fast installation</li>
                        <li>Supports GCC compiler</li>
                        <li>Lightweight</li>
                    </ul>

                </div>

            </div>

            <!-- CLion -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">5. CLion</h3>
                </div>

                <div class="card-body">

                    <p>
                        CLion is a professional IDE developed by JetBrains.
                        It provides intelligent coding assistance, debugging,
                        testing, and project management for C++ developers.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Smart code completion</li>
                        <li>Cross-platform support</li>
                        <li>Integrated debugger</li>
                        <li>CMake support</li>
                        <li>Git integration</li>
                    </ul>

                </div>

            </div>

            <!-- Xcode -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">6. Xcode</h3>
                </div>

                <div class="card-body">

                    <p>
                        Xcode is Apple's official IDE for macOS development.
                        It includes the Clang compiler and fully supports C++ programming.
                    </p>

                    <h5>Features</h5>

                    <ul>
                        <li>Available for macOS</li>
                        <li>Built-in Clang compiler</li>
                        <li>Advanced debugger</li>
                        <li>Simulator support</li>
                        <li>Professional development tools</li>
                    </ul>

                </div>

            </div>

            <!-- Online -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">7. Online C++ Compilers</h3>
                </div>

                <div class="card-body">

                    <p>
                        If you do not want to install software, you can write,
                        compile, and run C++ programs directly in your web browser
                        using online compilers.
                    </p>

                    <h5>Popular Online Compilers</h5>

                    <ul>
                        <li>Programiz</li>
                        <li>OnlineGDB</li>
                        <li>Replit</li>
                        <li>OneCompiler</li>
                        <li>JDoodle</li>
                    </ul>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Comparison of Popular C++ Software</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Software</th>
                                    <th>Best For</th>
                                    <th>Compiler Included</th>
                                    <th>Free</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Visual Studio Code</td>
                                    <td>Students & Professionals</td>
                                    <td>No (Requires GCC/MinGW)</td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Visual Studio</td>
                                    <td>Professional Development</td>
                                    <td>Yes</td>
                                    <td>Community Edition</td>
                                </tr>

                                <tr>
                                    <td>Code::Blocks</td>
                                    <td>Beginners</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Dev-C++</td>
                                    <td>Beginners</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>CLion</td>
                                    <td>Professional Developers</td>
                                    <td>Yes</td>
                                    <td>Educational License Available</td>
                                </tr>

                                <tr>
                                    <td>Xcode</td>
                                    <td>macOS Developers</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Recommendation -->

            <div class="alert alert-success">

                <h4>Recommended Software</h4>

                <p class="mb-0">
                    <strong>Visual Studio Code</strong> with the
                    <strong>GCC (MinGW)</strong> compiler is the best choice for
                    beginners and professionals because it is free, lightweight,
                    fast, and supports many programming languages.
                    If you want a complete professional development environment,
                    <strong>Microsoft Visual Studio</strong> is an excellent option.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Features",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">Features of C++</h1>
                <p class="lead">
                    C++ is one of the most powerful and widely used programming languages.
                    It combines the speed of the C language with modern programming features
                    such as Object-Oriented Programming (OOP), making it suitable for
                    beginners as well as professional software developers.
                </p>
            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What are the Features of C++?</h3>
                </div>

                <div class="card-body">

                    <p>
                        C++ offers many powerful features that make software development
                        easier, faster, and more efficient. These features help programmers
                        create secure, reusable, and high-performance applications.
                    </p>

                </div>

            </div>

            <!-- Features -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Main Features of C++</h3>
                </div>

                <div class="card-body">

                    <div class="accordion" id="featureAccordion">

                        <!-- Simple -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#simple">
                                    1. Simple
                                </button>
                            </h2>

                            <div id="simple" class="accordion-collapse collapse show">

                                <div class="accordion-body">

                                    C++ has a simple syntax that is easy to understand,
                                    especially for programmers who already know the C language.
                                    It provides a structured way to write programs using
                                    functions, classes, and objects.

                                </div>

                            </div>

                        </div>

                        <!-- Object Oriented -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#oop">
                                    2. Object-Oriented Programming (OOP)
                                </button>
                            </h2>

                            <div id="oop" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ supports Object-Oriented Programming concepts
                                    such as Classes, Objects, Inheritance,
                                    Polymorphism, Encapsulation, and Abstraction.
                                    These concepts make programs more organized,
                                    reusable, and easier to maintain.

                                </div>

                            </div>

                        </div>

                        <!-- Portable -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#portable">
                                    3. Portable
                                </button>
                            </h2>

                            <div id="portable" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ programs can run on different operating systems
                                    such as Windows, Linux, and macOS with little or
                                    no modification.

                                </div>

                            </div>

                        </div>

                        <!-- Fast -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#fast">
                                    4. Fast Execution
                                </button>
                            </h2>

                            <div id="fast" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Since C++ is a compiled language, programs execute
                                    much faster than interpreted languages.
                                    This makes it ideal for games, operating systems,
                                    and high-performance software.

                                </div>

                            </div>

                        </div>

                        <!-- Efficient -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#efficient">
                                    5. Efficient Memory Management
                                </button>
                            </h2>

                            <div id="efficient" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ gives programmers direct control over memory
                                    allocation and deallocation using pointers,
                                    <code>new</code>, and <code>delete</code>,
                                    resulting in efficient memory usage.

                                </div>

                            </div>

                        </div>

                        <!-- Multi Paradigm -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#multi">
                                    6. Multi-Paradigm Programming
                                </button>
                            </h2>

                            <div id="multi" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ supports multiple programming styles,
                                    including Procedural Programming,
                                    Object-Oriented Programming,
                                    and Generic Programming.

                                </div>

                            </div>

                        </div>

                        <!-- STL -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#stl">
                                    7. Standard Template Library (STL)
                                </button>
                            </h2>

                            <div id="stl" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ provides the Standard Template Library (STL),
                                    which contains useful classes and functions for
                                    vectors, lists, queues, stacks, sorting,
                                    searching, and many other operations.

                                </div>

                            </div>

                        </div>

                        <!-- Dynamic Memory -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#dynamic">
                                    8. Dynamic Memory Allocation
                                </button>
                            </h2>

                            <div id="dynamic" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Memory can be allocated during program execution
                                    using the <code>new</code> operator and released
                                    using the <code>delete</code> operator.

                                </div>

                            </div>

                        </div>

                        <!-- Exception -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#exception">
                                    9. Exception Handling
                                </button>
                            </h2>

                            <div id="exception" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    C++ provides exception handling using
                                    <code>try</code>, <code>catch</code>,
                                    and <code>throw</code> blocks to handle
                                    runtime errors gracefully.

                                </div>

                            </div>

                        </div>

                        <!-- Reusable -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#reuse">
                                    10. Code Reusability
                                </button>
                            </h2>

                            <div id="reuse" class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Classes, inheritance, templates,
                                    and functions allow developers to reuse
                                    existing code, reducing development time.

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Summary Table -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Feature Summary</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Feature</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Simple</td>
                                    <td>Easy syntax and easy to learn.</td>
                                </tr>

                                <tr>
                                    <td>Object-Oriented</td>
                                    <td>Supports classes, objects, inheritance, and polymorphism.</td>
                                </tr>

                                <tr>
                                    <td>Portable</td>
                                    <td>Runs on multiple operating systems.</td>
                                </tr>

                                <tr>
                                    <td>Fast</td>
                                    <td>Compiled language with high execution speed.</td>
                                </tr>

                                <tr>
                                    <td>Memory Management</td>
                                    <td>Provides direct control over memory.</td>
                                </tr>

                                <tr>
                                    <td>Multi-Paradigm</td>
                                    <td>Supports procedural, object-oriented, and generic programming.</td>
                                </tr>

                                <tr>
                                    <td>STL</td>
                                    <td>Rich collection of built-in data structures and algorithms.</td>
                                </tr>

                                <tr>
                                    <td>Dynamic Memory</td>
                                    <td>Allocate and free memory during execution.</td>
                                </tr>

                                <tr>
                                    <td>Exception Handling</td>
                                    <td>Handles runtime errors efficiently.</td>
                                </tr>

                                <tr>
                                    <td>Code Reusability</td>
                                    <td>Reduces coding effort through reusable components.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Conclusion -->

            <div class="alert alert-primary">

                <h4>Conclusion</h4>

                <p class="mb-0">
                    C++ combines speed, efficiency, portability, and powerful
                    programming features into a single language. Its support for
                    Object-Oriented Programming, dynamic memory management,
                    templates, and the Standard Template Library (STL) makes it
                    one of the best programming languages for building desktop
                    applications, games, operating systems, embedded software,
                    and high-performance applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Structure",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary">Structure of a C++ Program</h1>
                <p class="lead">
                    Every C++ program follows a basic structure. Understanding this
                    structure is important because it helps you write programs
                    correctly and understand the purpose of each part of the code.
                </p>
            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Basic Structure of a C++ Program</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

// Main Function
int main()
{
    cout << "Hello World!";

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Explanation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Explanation of Each Part</h3>
                </div>

                <div class="card-body">

                    <div class="accordion" id="structureAccordion">

                        <!-- Header Files -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#headerFile">

                                    1. Header File
                                </button>

                            </h2>

                            <div id="headerFile"
                                 class="accordion-collapse collapse show">

                                <div class="accordion-body">

                                    <strong>#include &lt;iostream&gt;</strong>
                                    includes the input/output stream library.

                                    <br><br>

                                    It allows us to use objects such as
                                    <strong>cout</strong> for displaying output
                                    and <strong>cin</strong> for receiving input
                                    from the keyboard.

                                </div>

                            </div>

                        </div>

                        <!-- Namespace -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#namespace">

                                    2. Namespace
                                </button>

                            </h2>

                            <div id="namespace"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    <strong>using namespace std;</strong>

                                    <br><br>

                                    This statement tells the compiler to use
                                    the Standard Namespace.

                                    Without this statement, you would need to
                                    write <code>std::cout</code> and
                                    <code>std::cin</code> every time.

                                </div>

                            </div>

                        </div>

                        <!-- Main -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#mainFunction">

                                    3. Main Function
                                </button>

                            </h2>

                            <div id="mainFunction"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Every C++ program starts execution from the
                                    <strong>main()</strong> function.

                                    It is called the entry point of the program.

                                    The operating system automatically calls this
                                    function when the program starts.

                                </div>

                            </div>

                        </div>

                        <!-- Statements -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#statement">

                                    4. Program Statements
                                </button>

                            </h2>

                            <div id="statement"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Statements perform the actual work of the program.

                                    Example:

<pre class="bg-light border rounded p-2 mt-3"><code>cout << "Hello World!";</code></pre>

                                    This statement prints
                                    <strong>Hello World!</strong>
                                    on the screen.

                                </div>

                            </div>

                        </div>

                        <!-- Return -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#return">

                                    5. Return Statement
                                </button>

                            </h2>

                            <div id="return"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    <strong>return 0;</strong>

                                    <br><br>

                                    It tells the operating system that the
                                    program finished successfully.

                                    Returning 0 indicates successful execution.

                                </div>

                            </div>

                        </div>

                        <!-- Comments -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#comments">

                                    6. Comments
                                </button>

                            </h2>

                            <div id="comments"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    Comments are notes written by programmers.

                                    They are ignored by the compiler.

                                    <br><br>

                                    Single-line comment:

<pre class="bg-light border rounded p-2 mt-2"><code>// This is a comment</code></pre>

                                    Multi-line comment:

<pre class="bg-light border rounded p-2 mt-2"><code>/*
This is
a multi-line comment
*/</code></pre>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Flow -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Program Execution Flow</h3>
                </div>

                <div class="card-body">

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item">
                            Header files are included.
                        </li>

                        <li class="list-group-item">
                            Namespace is loaded.
                        </li>

                        <li class="list-group-item">
                            Execution starts from <strong>main()</strong>.
                        </li>

                        <li class="list-group-item">
                            Statements inside <strong>main()</strong> are executed.
                        </li>

                        <li class="list-group-item">
                            <strong>return 0;</strong> ends the program.
                        </li>

                    </ol>

                </div>

            </div>

            <!-- Structure Table -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Structure Summary</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Part</th>
                                    <th>Purpose</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>#include &lt;iostream&gt;</td>
                                    <td>Includes the input/output library.</td>
                                </tr>

                                <tr>
                                    <td>using namespace std;</td>
                                    <td>Uses the Standard Namespace.</td>
                                </tr>

                                <tr>
                                    <td>main()</td>
                                    <td>Starting point of every C++ program.</td>
                                </tr>

                                <tr>
                                    <td>Statements</td>
                                    <td>Perform program operations.</td>
                                </tr>

                                <tr>
                                    <td>cout</td>
                                    <td>Displays output on the screen.</td>
                                </tr>

                                <tr>
                                    <td>cin</td>
                                    <td>Receives input from the user.</td>
                                </tr>

                                <tr>
                                    <td>return 0;</td>
                                    <td>Ends the program successfully.</td>
                                </tr>

                                <tr>
                                    <td>Comments</td>
                                    <td>Improve code readability.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Important Notes -->

            <div class="alert alert-success">

                <h4>Important Notes</h4>

                <ul class="mb-0">
                    <li>Every C++ program must contain a <strong>main()</strong> function.</li>
                    <li>Program execution always begins with <strong>main()</strong>.</li>
                    <li>Header files provide built-in functions and objects.</li>
                    <li>Statements inside braces <code>{ }</code> form the body of a function.</li>
                    <li>Each statement usually ends with a semicolon (<code>;</code>).</li>
                </ul>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "First Program",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">Your First C++ Program</h1>

                <p class="lead">
                    In this lesson, you will learn how to write, compile, and run
                    your very first C++ program. The traditional first program in
                    almost every programming language is the <strong>Hello World</strong>
                    program because it demonstrates the basic structure of a program.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Hello World Program</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    cout << "Hello World!";

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Output</h3>
                </div>

                <div class="card-body">

<pre class="bg-dark text-white p-3 rounded"><code>Hello World!</code></pre>

                </div>

            </div>

            <!-- Program Explanation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Explanation of the Program</h3>
                </div>

                <div class="card-body">

                    <div class="accordion" id="firstProgramAccordion">

                        <!-- Header -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#header">

                                    1. #include &lt;iostream&gt;
                                </button>

                            </h2>

                            <div id="header"
                                 class="accordion-collapse collapse show">

                                <div class="accordion-body">

                                    This header file provides input and output
                                    functionality. It allows us to use
                                    <strong>cout</strong> for displaying output
                                    and <strong>cin</strong> for taking input.

                                </div>

                            </div>

                        </div>

                        <!-- Namespace -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#namespace">

                                    2. using namespace std;
                                </button>

                            </h2>

                            <div id="namespace"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    This statement allows us to use standard C++
                                    objects such as <strong>cout</strong> and
                                    <strong>cin</strong> without writing
                                    <code>std::</code> before them.

                                </div>

                            </div>

                        </div>

                        <!-- Main -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#main">

                                    3. int main()
                                </button>

                            </h2>

                            <div id="main"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    The <strong>main()</strong> function is the
                                    starting point of every C++ program.
                                    The operating system begins execution from
                                    this function.

                                </div>

                            </div>

                        </div>

                        <!-- cout -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#cout">

                                    4. cout Statement
                                </button>

                            </h2>

                            <div id="cout"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    <code>cout</code> is used to display output
                                    on the screen.

<pre class="bg-light border rounded p-2 mt-3"><code>cout << "Hello World!";</code></pre>

                                    It prints the text inside quotation marks.

                                </div>

                            </div>

                        </div>

                        <!-- Return -->

                        <div class="accordion-item">

                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#return">

                                    5. return 0;
                                </button>

                            </h2>

                            <div id="return"
                                 class="accordion-collapse collapse">

                                <div class="accordion-body">

                                    The statement
                                    <strong>return 0;</strong>
                                    ends the program and informs the operating
                                    system that the program executed successfully.

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Steps -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Steps to Run a C++ Program</h3>
                </div>

                <div class="card-body">

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item">
                            Open a C++ IDE such as Visual Studio Code or Code::Blocks.
                        </li>

                        <li class="list-group-item">
                            Create a new C++ source file with the <code>.cpp</code> extension.
                        </li>

                        <li class="list-group-item">
                            Type or paste the program into the editor.
                        </li>

                        <li class="list-group-item">
                            Save the file.
                        </li>

                        <li class="list-group-item">
                            Compile the program using the C++ compiler.
                        </li>

                        <li class="list-group-item">
                            If there are no errors, run the executable file.
                        </li>

                        <li class="list-group-item">
                            The output <strong>Hello World!</strong> will appear on the screen.
                        </li>

                    </ol>

                </div>

            </div>

            <!-- Compilation Process -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Compilation Process</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Step</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Write Code</td>
                                    <td>Create the C++ source code.</td>
                                </tr>

                                <tr>
                                    <td>Compile</td>
                                    <td>The compiler checks for errors and converts the source code into machine code.</td>
                                </tr>

                                <tr>
                                    <td>Link</td>
                                    <td>Required libraries are linked to the program.</td>
                                </tr>

                                <tr>
                                    <td>Run</td>
                                    <td>The executable program is launched.</td>
                                </tr>

                                <tr>
                                    <td>Output</td>
                                    <td>The program displays the result on the screen.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Tips -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Important Tips</h3>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">
                            ✅ Every C++ program must contain a <strong>main()</strong> function.
                        </li>

                        <li class="list-group-item">
                            ✅ Each statement usually ends with a semicolon (<code>;</code>).
                        </li>

                        <li class="list-group-item">
                            ✅ Text output should be enclosed in double quotation marks.
                        </li>

                        <li class="list-group-item">
                            ✅ Save C++ files with the <code>.cpp</code> extension.
                        </li>

                        <li class="list-group-item">
                            ✅ Always compile the program before running it.
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary">

                <h4>Summary</h4>

                <p class="mb-0">
                    The first C++ program introduces the basic structure of a C++
                    application. It demonstrates how to include header files,
                    use the standard namespace, define the <strong>main()</strong>
                    function, display output using <strong>cout</strong>, and
                    end the program with <strong>return 0;</strong>. Mastering
                    this simple program provides the foundation for learning
                    more advanced C++ programming concepts.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Variables",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Variables</h1>

                <p class="lead">
                    Variables are one of the most important concepts in C++.
                    A variable is a named memory location used to store data.
                    The value stored in a variable can change during program execution.
                </p>

            </div>

            <!-- What is a Variable -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is a Variable?</h3>
                </div>

                <div class="card-body">

                    <p>
                        A <strong>variable</strong> is a container that stores information
                        such as numbers, characters, text, or decimal values.
                        Every variable has:
                    </p>

                    <ul>
                        <li><strong>Name</strong> (Identifier)</li>
                        <li><strong>Data Type</strong></li>
                        <li><strong>Value</strong></li>
                    </ul>

                    <p>
                        Before using a variable, it must be declared with a data type.
                    </p>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Variable Declaration Syntax</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType variableName;
</code></pre>

                    <p>Example:</p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age;
float salary;
char grade;
string name;
</code></pre>

                </div>

            </div>

            <!-- Initialization -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Variable Initialization</h3>
                </div>

                <div class="card-body">

                    <p>
                        Assigning a value to a variable is called
                        <strong>initialization</strong>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 20;
float salary = 5000.50;
char grade = 'A';
string name = "John";
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Example Program</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    int age = 22;
    float salary = 4500.75;
    char grade = 'A';
    string name = "Ali";

    cout << "Name: " << name << endl;
    cout << "Age: " << age << endl;
    cout << "Salary: " << salary << endl;
    cout << "Grade: " << grade << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Output</h3>
                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>Name: Ali
Age: 22
Salary: 4500.75
Grade: A
</code></pre>

                </div>

            </div>

            <!-- Rules -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Rules for Naming Variables</h3>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">✅ Variable names must begin with a letter or underscore (_).</li>

                        <li class="list-group-item">✅ Variable names can contain letters, digits, and underscores.</li>

                        <li class="list-group-item">✅ Variable names cannot contain spaces.</li>

                        <li class="list-group-item">✅ Variable names are case-sensitive.</li>

                        <li class="list-group-item">✅ Reserved keywords cannot be used as variable names.</li>

                    </ul>

                </div>

            </div>

            <!-- Valid Invalid -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Valid and Invalid Variable Names</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Valid Names</th>
                                    <th>Invalid Names</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>age</td>
                                    <td>2age</td>
                                </tr>

                                <tr>
                                    <td>studentName</td>
                                    <td>student name</td>
                                </tr>

                                <tr>
                                    <td>_salary</td>
                                    <td>float</td>
                                </tr>

                                <tr>
                                    <td>marks1</td>
                                    <td>total-marks</td>
                                </tr>

                                <tr>
                                    <td>myValue</td>
                                    <td>class</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Common Data Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Common Variable Data Types</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Data Type</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>int</td>
                                    <td>Stores whole numbers.</td>
                                    <td>25</td>
                                </tr>

                                <tr>
                                    <td>float</td>
                                    <td>Stores decimal numbers.</td>
                                    <td>12.5</td>
                                </tr>

                                <tr>
                                    <td>double</td>
                                    <td>Stores large decimal numbers.</td>
                                    <td>12345.6789</td>
                                </tr>

                                <tr>
                                    <td>char</td>
                                    <td>Stores a single character.</td>
                                    <td>'A'</td>
                                </tr>

                                <tr>
                                    <td>bool</td>
                                    <td>Stores true or false.</td>
                                    <td>true</td>
                                </tr>

                                <tr>
                                    <td>string</td>
                                    <td>Stores text.</td>
                                    <td>"Hello"</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful variable names.</li>

                    <li>Initialize variables before using them.</li>

                    <li>Choose the correct data type for the stored value.</li>

                    <li>Use camelCase for multi-word variable names (e.g., <code>studentAge</code>).</li>

                    <li>Avoid using very short or unclear variable names.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Variables are used to store data in memory during program execution.
                    Every variable has a name, data type, and value. Before using a variable,
                    it must be declared with an appropriate data type. Choosing meaningful
                    variable names and proper data types makes programs easier to understand
                    and maintain.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Data Types",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Data Types</h1>

                <p class="lead">
                    Data types define the type of data that a variable can store.
                    Every variable in C++ must be declared with a data type before
                    it can be used. Choosing the correct data type helps improve
                    memory usage and program performance.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Data Type?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>data type</strong> specifies the kind of value a variable
                        can store, such as an integer, decimal number, character,
                        text, or Boolean value.
                    </p>

                    <p>
                        The compiler uses the data type to allocate memory and
                        determine what operations can be performed on the variable.
                    </p>

                </div>

            </div>

            <!-- Categories -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Categories of Data Types</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Category</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Basic (Primitive)</td>
                                    <td>Built-in data types such as int, float, char, double, bool, and void.</td>
                                </tr>

                                <tr>
                                    <td>Derived</td>
                                    <td>Arrays, pointers, references, and functions.</td>
                                </tr>

                                <tr>
                                    <td>User-Defined</td>
                                    <td>class, struct, union, and enum created by the programmer.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Primitive -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Basic (Primitive) Data Types</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Data Type</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td><code>int</code></td>
                                    <td>Stores whole numbers.</td>
                                    <td>10, 25, -50</td>
                                </tr>

                                <tr>
                                    <td><code>float</code></td>
                                    <td>Stores decimal numbers (single precision).</td>
                                    <td>3.14, 25.5</td>
                                </tr>

                                <tr>
                                    <td><code>double</code></td>
                                    <td>Stores decimal numbers with higher precision.</td>
                                    <td>123.456789</td>
                                </tr>

                                <tr>
                                    <td><code>char</code></td>
                                    <td>Stores a single character.</td>
                                    <td>'A', 'Z'</td>
                                </tr>

                                <tr>
                                    <td><code>bool</code></td>
                                    <td>Stores true or false values.</td>
                                    <td>true, false</td>
                                </tr>

                                <tr>
                                    <td><code>string</code></td>
                                    <td>Stores a sequence of characters (text).</td>
                                    <td>"Hello"</td>
                                </tr>

                                <tr>
                                    <td><code>void</code></td>
                                    <td>Represents no value or no return type.</td>
                                    <td>void display()</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Declaration -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Declaring Variables</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 22;
float marks = 89.5;
double salary = 55000.75;
char grade = 'A';
bool passed = true;
string name = "Ali";
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    int age = 20;
    float marks = 87.5;
    double salary = 45000.75;
    char grade = 'A';
    bool passed = true;
    string name = "Ahmed";

    cout << "Name: " << name << endl;
    cout << "Age: " << age << endl;
    cout << "Marks: " << marks << endl;
    cout << "Salary: " << salary << endl;
    cout << "Grade: " << grade << endl;
    cout << "Passed: " << passed << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>Name: Ahmed
Age: 20
Marks: 87.5
Salary: 45000.75
Grade: A
Passed: 1
</code></pre>

                    <p class="mt-3">
                        <strong>Note:</strong> In C++, <code>true</code> is displayed as
                        <strong>1</strong> and <code>false</code> as <strong>0</strong>
                        unless the <code>boolalpha</code> manipulator is used.
                    </p>

                </div>

            </div>

            <!-- Memory Table -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Common Data Types and Memory Size</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Data Type</th>
                                    <th>Typical Size*</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>char</td>
                                    <td>1 Byte</td>
                                    <td>'A'</td>
                                </tr>

                                <tr>
                                    <td>bool</td>
                                    <td>1 Byte</td>
                                    <td>true</td>
                                </tr>

                                <tr>
                                    <td>int</td>
                                    <td>4 Bytes</td>
                                    <td>100</td>
                                </tr>

                                <tr>
                                    <td>float</td>
                                    <td>4 Bytes</td>
                                    <td>12.5</td>
                                </tr>

                                <tr>
                                    <td>double</td>
                                    <td>8 Bytes</td>
                                    <td>123.456</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <small class="text-muted">
                        *The actual size of a data type may vary depending on the compiler and operating system.
                    </small>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use <code>int</code> for whole numbers.</li>

                    <li>Use <code>float</code> or <code>double</code> for decimal values.</li>

                    <li>Use <code>char</code> for a single character.</li>

                    <li>Use <code>bool</code> for true/false conditions.</li>

                    <li>Use <code>string</code> for storing text.</li>

                    <li>Choose the smallest suitable data type to optimize memory usage.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Data types determine the type of information a variable can store.
                    C++ provides several built-in data types, including
                    <strong>int</strong>, <strong>float</strong>,
                    <strong>double</strong>, <strong>char</strong>,
                    <strong>bool</strong>, and <strong>string</strong>.
                    Selecting the appropriate data type improves program efficiency,
                    readability, and memory management.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Constants",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Constants</h1>

                <p class="lead">
                    Constants are fixed values that cannot be changed during the execution
                    of a program. They improve code readability, prevent accidental
                    modifications, and make programs easier to maintain.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Constant?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>constant</strong> is a value that remains the same
                        throughout the execution of a program. Unlike variables,
                        constants cannot be modified after they are declared.
                    </p>

                    <p>
                        Constants are useful for storing values such as the value of
                        <strong>PI</strong>, tax rates, company names, or the number
                        of days in a week.
                    </p>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Types of Constants in C++</h3>

                </div>

                <div class="card-body">

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item">
                            Integer Constants
                        </li>

                        <li class="list-group-item">
                            Floating-Point Constants
                        </li>

                        <li class="list-group-item">
                            Character Constants
                        </li>

                        <li class="list-group-item">
                            String Constants
                        </li>

                        <li class="list-group-item">
                            Boolean Constants
                        </li>

                        <li class="list-group-item">
                            User-Defined Constants (<code>const</code>)
                        </li>

                    </ol>

                </div>

            </div>

            <!-- const Keyword -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Using the <code>const</code> Keyword</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>const</code> keyword is used to declare a constant.
                        Once a constant is initialized, its value cannot be changed.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>const dataType constantName = value;
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>const float PI = 3.14159;
const int DAYS_IN_WEEK = 7;
const string COUNTRY = "Pakistan";
</code></pre>

                </div>

            </div>

            <!-- Literal Constants -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Literal Constants</h3>

                </div>

                <div class="card-body">

                    <p>
                        Literal constants are fixed values written directly in the code.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Type</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Integer Constant</td>
                                    <td><code>100</code>, <code>-25</code></td>
                                </tr>

                                <tr>
                                    <td>Floating-Point Constant</td>
                                    <td><code>3.14</code>, <code>25.75</code></td>
                                </tr>

                                <tr>
                                    <td>Character Constant</td>
                                    <td><code>'A'</code>, <code>'Z'</code></td>
                                </tr>

                                <tr>
                                    <td>String Constant</td>
                                    <td><code>"Hello World"</code></td>
                                </tr>

                                <tr>
                                    <td>Boolean Constant</td>
                                    <td><code>true</code>, <code>false</code></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example Program -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    const float PI = 3.14159;
    const int DAYS = 7;
    const char GRADE = 'A';
    const string COUNTRY = "Pakistan";

    cout << "PI = " << PI << endl;
    cout << "Days = " << DAYS << endl;
    cout << "Grade = " << GRADE << endl;
    cout << "Country = " << COUNTRY << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>PI = 3.14159
Days = 7
Grade = A
Country = Pakistan
</code></pre>

                </div>

            </div>

            <!-- Error -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Attempting to Change a Constant</h3>

                </div>

                <div class="card-body">

                    <p>
                        Once a constant is declared, assigning a new value to it
                        will produce a compilation error.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>const int AGE = 20;

AGE = 25;   // Error: Cannot modify a constant
</code></pre>

                </div>

            </div>

            <!-- Variable vs Constant -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Difference Between Variables and Constants</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Variable</th>
                                    <th>Constant</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Value can change.</td>
                                    <td>Value cannot change.</td>
                                </tr>

                                <tr>
                                    <td>Declared without <code>const</code>.</td>
                                    <td>Declared using <code>const</code>.</td>
                                </tr>

                                <tr>
                                    <td>Can be assigned multiple times.</td>
                                    <td>Can only be initialized once.</td>
                                </tr>

                                <tr>
                                    <td>Used for changing data.</td>
                                    <td>Used for fixed values.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use <code>const</code> whenever a value should never change.</li>

                    <li>Write constant names in uppercase with underscores (e.g., <code>MAX_SIZE</code>) as a common convention.</li>

                    <li>Use meaningful names for constants.</li>

                    <li>Declare constants close to where they are used.</li>

                    <li>Using constants makes code easier to read and maintain.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Constants are fixed values that cannot be modified after they
                    are declared. In C++, constants are commonly created using the
                    <code>const</code> keyword. They improve program safety,
                    readability, and maintainability by preventing accidental
                    changes to important values.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Operators",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Operators</h1>

                <p class="lead">
                    Operators are special symbols used to perform operations on
                    variables and values. C++ provides many types of operators
                    for mathematical calculations, comparisons, logical decisions,
                    assignments, bit manipulation, and more.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an Operator?</h3>

                </div>

                <div class="card-body">

                    <p>
                        An <strong>operator</strong> is a symbol that tells the
                        compiler to perform a specific operation on one or more operands.
                    </p>

                    <p>Example:</p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int sum = 10 + 5;
</code></pre>

                    <p>
                        In this example:
                    </p>

                    <ul>
                        <li><strong>10</strong> and <strong>5</strong> are operands.</li>
                        <li><strong>+</strong> is the arithmetic operator.</li>
                    </ul>

                </div>

            </div>

            <!-- Arithmetic -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">1. Arithmetic Operators</h3>

                </div>

                <div class="card-body">

                    <p>Arithmetic operators perform mathematical calculations.</p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>+</td><td>Addition</td><td>10 + 5 = 15</td></tr>
                                <tr><td>-</td><td>Subtraction</td><td>10 - 5 = 5</td></tr>
                                <tr><td>*</td><td>Multiplication</td><td>10 * 5 = 50</td></tr>
                                <tr><td>/</td><td>Division</td><td>10 / 5 = 2</td></tr>
                                <tr><td>%</td><td>Modulus (Remainder)</td><td>10 % 3 = 1</td></tr>
                                <tr><td>++</td><td>Increment</td><td>a++</td></tr>
                                <tr><td>--</td><td>Decrement</td><td>a--</td></tr>

                            </tbody>

                        </table>

                    </div>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 10;
int b = 3;

cout << a + b << endl;
cout << a - b << endl;
cout << a * b << endl;
cout << a / b << endl;
cout << a % b << endl;
</code></pre>

                </div>

            </div>

            <!-- Assignment -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">2. Assignment Operators</h3>

                </div>

                <div class="card-body">

                    <p>Assignment operators assign values to variables.</p>

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead class="table-light">

                                <tr>
                                    <th>Operator</th>
                                    <th>Meaning</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>=</td><td>Assign</td><td>x = 5</td></tr>
                                <tr><td>+=</td><td>Add and Assign</td><td>x += 5</td></tr>
                                <tr><td>-=</td><td>Subtract and Assign</td><td>x -= 5</td></tr>
                                <tr><td>*=</td><td>Multiply and Assign</td><td>x *= 5</td></tr>
                                <tr><td>/=</td><td>Divide and Assign</td><td>x /= 5</td></tr>
                                <tr><td>%=</td><td>Modulus and Assign</td><td>x %= 5</td></tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Relational -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">3. Relational (Comparison) Operators</h3>

                </div>

                <div class="card-body">

                    <p>
                        Relational operators compare two values and return
                        <strong>true</strong> or <strong>false</strong>.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>==</td><td>Equal to</td></tr>
                                <tr><td>!=</td><td>Not equal to</td></tr>
                                <tr><td>&gt;</td><td>Greater than</td></tr>
                                <tr><td>&lt;</td><td>Less than</td></tr>
                                <tr><td>&gt;=</td><td>Greater than or equal to</td></tr>
                                <tr><td>&lt;=</td><td>Less than or equal to</td></tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Logical -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">4. Logical Operators</h3>

                </div>

                <div class="card-body">

                    <p>
                        Logical operators combine or reverse Boolean expressions.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead class="table-light">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>&&</td><td>Logical AND</td><td>(a > 5 && b < 10)</td></tr>
                                <tr><td>||</td><td>Logical OR</td><td>(a > 5 || b < 10)</td></tr>
                                <tr><td>!</td><td>Logical NOT</td><td>!(a > b)</td></tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Bitwise -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">5. Bitwise Operators</h3>

                </div>

                <div class="card-body">

                    <p>
                        Bitwise operators perform operations directly on the binary
                        representation of integers.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>&</td><td>Bitwise AND</td></tr>
                                <tr><td>|</td><td>Bitwise OR</td></tr>
                                <tr><td>^</td><td>Bitwise XOR</td></tr>
                                <tr><td>~</td><td>Bitwise NOT</td></tr>
                                <tr><td>&lt;&lt;</td><td>Left Shift</td></tr>
                                <tr><td>&gt;&gt;</td><td>Right Shift</td></tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Other Operators -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Other Common Operators</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr><td>sizeof</td><td>Returns the size of a data type or variable.</td></tr>
                                <tr><td>?:</td><td>Ternary (Conditional) Operator.</td></tr>
                                <tr><td>,</td><td>Comma Operator.</td></tr>
                                <tr><td>::</td><td>Scope Resolution Operator.</td></tr>
                                <tr><td>.</td><td>Member Access Operator.</td></tr>
                                <tr><td>-></td><td>Pointer Member Access Operator.</td></tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int a = 20;
    int b = 10;

    cout << "Addition: " << a + b << endl;
    cout << "Subtraction: " << a - b << endl;
    cout << "Multiplication: " << a * b << endl;
    cout << "Division: " << a / b << endl;

    cout << "a > b : " << (a > b) << endl;
    cout << "a == b : " << (a == b) << endl;
    cout << "a && b : " << (a && b) << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-success">

                <h4>Summary</h4>

                <p class="mb-0">
                    Operators are fundamental building blocks of C++ programming.
                    They allow you to perform arithmetic calculations, assign values,
                    compare data, evaluate logical conditions, manipulate bits,
                    and perform many other operations. Understanding operators is
                    essential for writing efficient and meaningful C++ programs.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Input Output",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Input and Output</h1>

                <p class="lead">
                    Input and Output (I/O) are essential concepts in C++ programming.
                    Input allows users to enter data, while output displays information
                    on the screen. C++ uses the <strong>cin</strong> object for input
                    and the <strong>cout</strong> object for output.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Input and Output Objects</h3>
                </div>

                <div class="card-body">

                    <ul>
                        <li><strong>cout</strong> → Displays output on the screen.</li>
                        <li><strong>cin</strong> → Takes input from the keyboard.</li>
                        <li><strong>endl</strong> → Moves the cursor to the next line.</li>
                    </ul>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Using cout (Output)</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    cout << "Welcome to C++";

    return 0;
}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Welcome to C++
</code></pre>

                </div>

            </div>

            <!-- Input -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Using cin (Input)</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int age;

    cout << "Enter your age: ";
    cin >> age;

    cout << "Your age is " << age;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Input and Output Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Complete Example</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    string name;
    int age;

    cout << "Enter your name: ";
    cin >> name;

    cout << "Enter your age: ";
    cin >> age;

    cout << endl;
    cout << "Name: " << name << endl;
    cout << "Age: " << age << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Multiple Inputs -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Taking Multiple Inputs</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a, b;

cout << "Enter two numbers: ";
cin >> a >> b;

cout << "First Number: " << a << endl;
cout << "Second Number: " << b;
</code></pre>

                </div>

            </div>

            <!-- getline -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Using getline()</h3>
                </div>

                <div class="card-body">

                    <p>
                        <strong>cin</strong> reads only one word. To read an entire
                        sentence including spaces, use <strong>getline()</strong>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    string fullName;

    cout << "Enter your full name: ";
    getline(cin, fullName);

    cout << "Hello " << fullName;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Difference -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Difference Between cin and cout</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>cin</th>
                                    <th>cout</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Used to receive input.</td>
                                    <td>Used to display output.</td>
                                </tr>

                                <tr>
                                    <td>Uses the extraction operator (<code>>></code>).</td>
                                    <td>Uses the insertion operator (<code>&lt;&lt;</code>).</td>
                                </tr>

                                <tr>
                                    <td>Reads data from the keyboard.</td>
                                    <td>Displays data on the screen.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Important Notes</h4>

                <ul class="mb-0">

                    <li>Include <code>&lt;iostream&gt;</code> to use <code>cin</code> and <code>cout</code>.</li>

                    <li>Use <code>using namespace std;</code> to avoid writing <code>std::</code>.</li>

                    <li><code>endl</code> moves the cursor to the next line.</li>

                    <li>Use <code>getline()</code> when reading text containing spaces.</li>

                    <li><code>cin</code> uses <code>>></code> while <code>cout</code> uses <code>&lt;&lt;</code>.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    C++ uses <strong>cout</strong> to display output and
                    <strong>cin</strong> to receive input from the user.
                    These objects are defined in the <code>&lt;iostream&gt;</code>
                    library. For reading complete lines of text, the
                    <strong>getline()</strong> function is used.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "If Else",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ If Else Statement</h1>

                <p class="lead">
                    Decision-making is an important part of programming.
                    The <strong>if</strong>, <strong>else if</strong>, and
                    <strong>else</strong> statements allow a program to make
                    decisions based on conditions.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is an If Else Statement?</h3>
                </div>

                <div class="card-body">

                    <p>
                        An <strong>if</strong> statement executes a block of code
                        only when a specified condition is <strong>true</strong>.
                        If the condition is <strong>false</strong>, the program
                        can execute another block using the <strong>else</strong>
                        statement.
                    </p>

                </div>

            </div>

            <!-- if -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">1. if Statement</h3>
                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>if (condition)
{
    // code to execute
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int age = 20;

    if (age >= 18)
    {
        cout << "You are eligible to vote.";
    }

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- if else -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">2. if...else Statement</h3>
                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>if (condition)
{
    // executes if condition is true
}
else
{
    // executes if condition is false
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int number = 5;

if (number % 2 == 0)
{
    cout << "Even Number";
}
else
{
    cout << "Odd Number";
}
</code></pre>

                </div>

            </div>

            <!-- else if -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">3. else if Ladder</h3>
                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>if (condition1)
{
    // code
}
else if (condition2)
{
    // code
}
else
{
    // code
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int marks = 75;

if (marks >= 90)
{
    cout << "Grade A";
}
else if (marks >= 80)
{
    cout << "Grade B";
}
else if (marks >= 70)
{
    cout << "Grade C";
}
else if (marks >= 60)
{
    cout << "Grade D";
}
else
{
    cout << "Fail";
}
</code></pre>

                </div>

            </div>

            <!-- Nested -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">4. Nested if Statement</h3>
                </div>

                <div class="card-body">

                    <p>
                        An <strong>if</strong> statement inside another
                        <strong>if</strong> statement is called a
                        <strong>nested if</strong>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 20;
bool hasLicense = true;

if (age >= 18)
{
    if (hasLicense)
    {
        cout << "You can drive.";
    }
    else
    {
        cout << "License required.";
    }
}
else
{
    cout << "You are under age.";
}
</code></pre>

                </div>

            </div>

            <!-- Flow -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Execution Flow</h3>
                </div>

                <div class="card-body">

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item">
                            The condition is evaluated.
                        </li>

                        <li class="list-group-item">
                            If the condition is <strong>true</strong>, the
                            <strong>if</strong> block executes.
                        </li>

                        <li class="list-group-item">
                            If the condition is <strong>false</strong>, the
                            program checks the next <strong>else if</strong> condition.
                        </li>

                        <li class="list-group-item">
                            If none of the conditions are true, the
                            <strong>else</strong> block executes.
                        </li>

                    </ol>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Comparison Operators Used in Conditions</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Operator</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>==</td>
                                    <td>Equal to</td>
                                    <td>a == b</td>
                                </tr>

                                <tr>
                                    <td>!=</td>
                                    <td>Not equal to</td>
                                    <td>a != b</td>
                                </tr>

                                <tr>
                                    <td>&gt;</td>
                                    <td>Greater than</td>
                                    <td>a > b</td>
                                </tr>

                                <tr>
                                    <td>&lt;</td>
                                    <td>Less than</td>
                                    <td>a < b</td>
                                </tr>

                                <tr>
                                    <td>&gt;=</td>
                                    <td>Greater than or equal to</td>
                                    <td>a >= b</td>
                                </tr>

                                <tr>
                                    <td>&lt;=</td>
                                    <td>Less than or equal to</td>
                                    <td>a <= b</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use braces <code>{ }</code> even for a single statement.</li>

                    <li>Write conditions that are easy to read and understand.</li>

                    <li>Use <code>else if</code> when checking multiple conditions.</li>

                    <li>Avoid deeply nested <code>if</code> statements whenever possible.</li>

                    <li>Indent your code properly for better readability.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    The <strong>if</strong>, <strong>else if</strong>, and
                    <strong>else</strong> statements enable a C++ program to
                    make decisions. They execute different blocks of code
                    depending on whether specified conditions evaluate to
                    <strong>true</strong> or <strong>false</strong>. These
                    statements are fundamental for building interactive and
                    intelligent applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Loops",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Loops</h1>

                <p class="lead">
                    Loops are used to execute a block of code repeatedly until a
                    specified condition becomes false. They help reduce code
                    repetition and make programs more efficient.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is a Loop?</h3>
                </div>

                <div class="card-body">

                    <p>
                        A <strong>loop</strong> repeatedly executes a block of code
                        as long as a given condition is true.
                    </p>

                    <p>
                        C++ provides three main looping statements:
                    </p>

                    <ul>
                        <li><strong>for</strong> Loop</li>
                        <li><strong>while</strong> Loop</li>
                        <li><strong>do...while</strong> Loop</li>
                    </ul>

                </div>

            </div>

            <!-- For Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">1. for Loop</h3>
                </div>

                <div class="card-body">

                    <p>
                        The <strong>for</strong> loop is used when the number of
                        iterations is known in advance.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(initialization; condition; update)
{
    // Code
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    for(int i = 1; i <= 5; i++)
    {
        cout << i << endl;
    }

    return 0;
}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>1
2
3
4
5
</code></pre>

                </div>

            </div>

            <!-- While Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">2. while Loop</h3>
                </div>

                <div class="card-body">

                    <p>
                        The <strong>while</strong> loop checks the condition first.
                        If the condition is true, the loop body executes.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>while(condition)
{
    // Code
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int i = 1;

while(i <= 5)
{
    cout << i << endl;
    i++;
}
</code></pre>

                </div>

            </div>

            <!-- Do While -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">3. do...while Loop</h3>
                </div>

                <div class="card-body">

                    <p>
                        The <strong>do...while</strong> loop executes the code
                        at least once because the condition is checked after
                        executing the loop body.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>do
{
    // Code
}
while(condition);
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int i = 1;

do
{
    cout << i << endl;
    i++;
}
while(i <= 5);
</code></pre>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Comparison of Loops</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Loop</th>
                                    <th>Condition Checked</th>
                                    <th>Minimum Execution</th>
                                    <th>Best Used When</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>for</td>
                                    <td>Before execution</td>
                                    <td>0 Times</td>
                                    <td>Number of iterations is known.</td>
                                </tr>

                                <tr>
                                    <td>while</td>
                                    <td>Before execution</td>
                                    <td>0 Times</td>
                                    <td>Condition controls the loop.</td>
                                </tr>

                                <tr>
                                    <td>do...while</td>
                                    <td>After execution</td>
                                    <td>1 Time</td>
                                    <td>Loop must execute at least once.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Nested -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Nested Loops</h3>
                </div>

                <div class="card-body">

                    <p>
                        A loop inside another loop is called a
                        <strong>nested loop</strong>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(int i = 1; i <= 3; i++)
{
    for(int j = 1; j <= 3; j++)
    {
        cout << "* ";
    }

    cout << endl;
}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>* * *
* * *
* * *
</code></pre>

                </div>

            </div>

            <!-- Break Continue -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">break and continue</h3>
                </div>

                <div class="card-body">

                    <h5>break Statement</h5>

                    <p>
                        The <code>break</code> statement immediately terminates a loop.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(int i = 1; i <= 10; i++)
{
    if(i == 5)
        break;

    cout << i << endl;
}
</code></pre>

                    <h5 class="mt-4">continue Statement</h5>

                    <p>
                        The <code>continue</code> statement skips the current
                        iteration and moves to the next iteration.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(int i = 1; i <= 5; i++)
{
    if(i == 3)
        continue;

    cout << i << endl;
}
</code></pre>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use a <strong>for</strong> loop when the number of iterations is known.</li>

                    <li>Use a <strong>while</strong> loop when the stopping condition is uncertain.</li>

                    <li>Use a <strong>do...while</strong> loop when the code must execute at least once.</li>

                    <li>Always ensure the loop condition eventually becomes false to avoid infinite loops.</li>

                    <li>Use proper indentation to improve code readability.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Loops are essential programming constructs that allow repeated
                    execution of code. C++ provides three types of loops:
                    <strong>for</strong>, <strong>while</strong>, and
                    <strong>do...while</strong>. Choosing the appropriate loop
                    depends on the problem and the number of required iterations.
                </p>

            </div>

        </div>

    </div>

</div>
`
},


{
title: "Functions",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Functions</h1>

                <p class="lead">
                    Functions are reusable blocks of code that perform a specific task.
                    They make programs modular, reduce code duplication, and improve
                    readability and maintainability.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is a Function?</h3>
                </div>

                <div class="card-body">

                    <p>
                        A <strong>function</strong> is a named block of code that performs
                        a particular task. Instead of writing the same code multiple times,
                        you can write it once inside a function and call it whenever needed.
                    </p>

                    <p>
                        Every C++ program contains at least one function:
                        <strong>main()</strong>, which is the starting point of execution.
                    </p>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Advantages of Functions</h3>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">✅ Reduces code repetition.</li>

                        <li class="list-group-item">✅ Makes programs easier to understand.</li>

                        <li class="list-group-item">✅ Improves code reusability.</li>

                        <li class="list-group-item">✅ Simplifies debugging and testing.</li>

                        <li class="list-group-item">✅ Makes large programs easier to manage.</li>

                    </ul>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Types of Functions</h3>
                </div>

                <div class="card-body">

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item">
                            <strong>Library Functions</strong> (Built-in Functions)
                        </li>

                        <li class="list-group-item">
                            <strong>User-Defined Functions</strong>
                        </li>

                    </ol>

                </div>

            </div>

            <!-- Library -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">1. Library Functions</h3>
                </div>

                <div class="card-body">

                    <p>
                        Library functions are predefined functions provided by
                        the C++ Standard Library.
                    </p>

                    <h5>Examples</h5>

                    <ul>

                        <li><code>sqrt()</code> – Calculates square root.</li>

                        <li><code>pow()</code> – Calculates power.</li>

                        <li><code>strlen()</code> – Returns string length (C-style strings).</li>

                        <li><code>toupper()</code> – Converts a character to uppercase.</li>

                    </ul>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;cmath&gt;
using namespace std;

int main()
{
    cout << sqrt(25);

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- User Defined -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">2. User-Defined Functions</h3>
                </div>

                <div class="card-body">

                    <p>
                        User-defined functions are created by the programmer to
                        perform specific tasks.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>returnType functionName(parameters)
{
    // Function body
}
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Example of a User-Defined Function</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

void greet()
{
    cout << "Welcome to C++ Programming!";
}

int main()
{
    greet();

    return 0;
}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Welcome to C++ Programming!
</code></pre>

                </div>

            </div>

            <!-- Function Parts -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Parts of a Function</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Part</th>
                                    <th>Description</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Return Type</td>
                                    <td>Specifies the type of value returned by the function.</td>
                                </tr>

                                <tr>
                                    <td>Function Name</td>
                                    <td>The name used to call the function.</td>
                                </tr>

                                <tr>
                                    <td>Parameters</td>
                                    <td>Input values passed to the function.</td>
                                </tr>

                                <tr>
                                    <td>Function Body</td>
                                    <td>Contains the statements that perform the task.</td>
                                </tr>

                                <tr>
                                    <td>Return Statement</td>
                                    <td>Returns a value to the calling function.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Parameters -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Function with Parameters</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

void add(int a, int b)
{
    cout << "Sum = " << a + b;
}

int main()
{
    add(10, 20);

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Return -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Function Returning a Value</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int square(int number)
{
    return number * number;
}

int main()
{
    cout << square(6);

    return 0;
}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>36
</code></pre>

                </div>

            </div>

            <!-- Function Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Common Types of User-Defined Functions</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>
                                    <th>Function Type</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>No Parameters, No Return Value</td>
                                    <td><code>void display()</code></td>
                                </tr>

                                <tr>
                                    <td>Parameters, No Return Value</td>
                                    <td><code>void add(int a, int b)</code></td>
                                </tr>

                                <tr>
                                    <td>No Parameters, Returns Value</td>
                                    <td><code>int getNumber()</code></td>
                                </tr>

                                <tr>
                                    <td>Parameters, Returns Value</td>
                                    <td><code>int sum(int a, int b)</code></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful function names.</li>

                    <li>Keep each function focused on a single task.</li>

                    <li>Avoid writing very long functions.</li>

                    <li>Use parameters instead of global variables whenever possible.</li>

                    <li>Choose the correct return type.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Functions are reusable blocks of code that perform specific tasks.
                    C++ provides both <strong>library functions</strong> and
                    <strong>user-defined functions</strong>. Using functions makes
                    programs more organized, reusable, and easier to maintain,
                    especially in large software projects.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Arrays",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Arrays</h1>

                <p class="lead">
                    An array is a collection of elements of the same data type stored
                    in contiguous memory locations. Arrays allow you to store multiple
                    values in a single variable, making programs more organized and efficient.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">What is an Array?</h3>
                </div>

                <div class="card-body">

                    <p>
                        An <strong>array</strong> is a fixed-size collection of elements
                        of the same data type. Each element is identified by an
                        <strong>index</strong>, starting from <strong>0</strong>.
                    </p>

                    <p>
                        Instead of creating multiple variables, you can store related
                        values in a single array.
                    </p>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Array Declaration</h3>
                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType arrayName[arraySize];
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int numbers[5];
float marks[10];
char grades[6];
</code></pre>

                </div>

            </div>

            <!-- Initialization -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Initializing Arrays</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int numbers[5] = {10, 20, 30, 40, 50};

char vowels[5] = {'A', 'E', 'I', 'O', 'U'};

string names[3] = {"Ali", "Ahmed", "Sara"};
</code></pre>

                </div>

            </div>

            <!-- Access -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Accessing Array Elements</h3>
                </div>

                <div class="card-body">

                    <p>
                        Array elements are accessed using their index number.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int numbers[5] = {10, 20, 30, 40, 50};

cout << numbers[0] << endl;
cout << numbers[2] << endl;
cout << numbers[4];
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>10
30
50
</code></pre>

                </div>

            </div>

            <!-- Modify -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0">Modifying Array Elements</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int numbers[3] = {5, 10, 15};

numbers[1] = 50;

cout << numbers[1];
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>50
</code></pre>

                </div>

            </div>

            <!-- Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Traversing an Array Using a Loop</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int numbers[5] = {10, 20, 30, 40, 50};

    for(int i = 0; i < 5; i++)
    {
        cout << numbers[i] << endl;
    }

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Single -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Single-Dimensional Arrays</h3>
                </div>

                <div class="card-body">

                    <p>
                        A single-dimensional array stores data in one row.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int marks[5] = {78, 85, 90, 67, 88};
</code></pre>

                </div>

            </div>

            <!-- Multi -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Multi-Dimensional Arrays</h3>
                </div>

                <div class="card-body">

                    <p>
                        A multi-dimensional array stores data in rows and columns.
                        The most common type is a two-dimensional (2D) array.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType arrayName[rows][columns];
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int matrix[2][3] =
{
    {1, 2, 3},
    {4, 5, 6}
};
</code></pre>

                    <h5>Accessing Elements</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>cout << matrix[0][1];
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>2
</code></pre>

                </div>

            </div>

            <!-- 2D Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Traversing a 2D Array</h3>
                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int matrix[2][3] =
{
    {1, 2, 3},
    {4, 5, 6}
};

for(int i = 0; i < 2; i++)
{
    for(int j = 0; j < 3; j++)
    {
        cout << matrix[i][j] << " ";
    }

    cout << endl;
}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>1 2 3
4 5 6
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">
                    <h3 class="mb-0">Advantages of Arrays</h3>
                </div>

                <div class="card-body">

                    <ul>

                        <li>Stores multiple values in one variable.</li>

                        <li>Provides fast access using indexes.</li>

                        <li>Reduces code duplication.</li>

                        <li>Easy to process using loops.</li>

                        <li>Useful for sorting and searching algorithms.</li>

                    </ul>

                </div>

            </div>

            <!-- Limitations -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">
                    <h3 class="mb-0">Limitations of Arrays</h3>
                </div>

                <div class="card-body">

                    <ul>

                        <li>Array size is fixed after declaration.</li>

                        <li>Can store only one data type.</li>

                        <li>Insertion and deletion are less flexible compared to dynamic containers like vectors.</li>

                    </ul>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful array names.</li>

                    <li>Always ensure the index stays within the array bounds.</li>

                    <li>Use loops to process array elements efficiently.</li>

                    <li>Initialize arrays before using them.</li>

                    <li>Consider using <code>std::vector</code> when the array size needs to change dynamically.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Arrays are one of the most important data structures in C++.
                    They store multiple values of the same data type in contiguous
                    memory locations. C++ supports both
                    <strong>single-dimensional</strong> and
                    <strong>multi-dimensional</strong> arrays, making them suitable
                    for handling collections of data efficiently.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Pointers",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Pointers</h1>

                <p class="lead">
                    Pointers are one of the most powerful features of C++. A pointer
                    stores the memory address of another variable instead of storing
                    the actual value. Pointers are widely used in dynamic memory
                    allocation, arrays, functions, and object-oriented programming.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Pointer?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>pointer</strong> is a variable that stores the
                        memory address of another variable.
                    </p>

                    <p>
                        Every variable occupies a location in memory. A pointer
                        allows you to access that memory location directly.
                    </p>

                </div>

            </div>

            <!-- Address Operator -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Address Operator (&)</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <strong>&</strong> (address-of) operator returns the
                        memory address of a variable.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int number = 100;

    cout << number << endl;
    cout << &number << endl;

    return 0;
}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>100
0x61ff08   // Address may vary
</code></pre>

                </div>

            </div>

            <!-- Declaration -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Declaring a Pointer</h3>

                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType *pointerName;
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int *ptr;
float *price;
char *letter;
</code></pre>

                </div>

            </div>

            <!-- Initialize -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Initializing a Pointer</h3>

                </div>

                <div class="card-body">

                    <p>
                        Assign the address of a variable to a pointer using the
                        <code>&</code> operator.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int number = 50;

int *ptr = &number;
</code></pre>

                </div>

            </div>

            <!-- Dereference -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Dereference Operator (*)</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <strong>*</strong> operator accesses the value stored
                        at the memory address pointed to by a pointer.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    int number = 100;
    int *ptr = &number;

    cout << "Value: " << number << endl;
    cout << "Address: " << ptr << endl;
    cout << "Dereferenced Value: " << *ptr << endl;

    return 0;
}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Value: 100
Address: 0x61ff08
Dereferenced Value: 100
</code></pre>

                </div>

            </div>

            <!-- Modify -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Modifying a Variable Using a Pointer</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int number = 20;

int *ptr = &number;

*ptr = 50;

cout << number;
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>50
</code></pre>

                </div>

            </div>

            <!-- Pointer and Arrays -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Pointers and Arrays</h3>

                </div>

                <div class="card-body">

                    <p>
                        The name of an array represents the address of its first
                        element.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int numbers[3] = {10, 20, 30};

cout << numbers << endl;
cout << *numbers << endl;
cout << *(numbers + 1) << endl;
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Address of first element
10
20
</code></pre>

                </div>

            </div>

            <!-- Null Pointer -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Null Pointer</h3>

                </div>

                <div class="card-body">

                    <p>
                        A null pointer does not point to any valid memory location.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int *ptr = nullptr;
</code></pre>

                    <p>
                        Always initialize pointers to <code>nullptr</code> if they
                        do not currently point to a valid object.
                    </p>

                </div>

            </div>

            <!-- Pointer Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Common Pointer Types</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Pointer Type</th>
                                    <th>Example</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Integer Pointer</td>
                                    <td><code>int *ptr;</code></td>
                                </tr>

                                <tr>
                                    <td>Character Pointer</td>
                                    <td><code>char *ptr;</code></td>
                                </tr>

                                <tr>
                                    <td>Float Pointer</td>
                                    <td><code>float *ptr;</code></td>
                                </tr>

                                <tr>
                                    <td>Double Pointer</td>
                                    <td><code>double *ptr;</code></td>
                                </tr>

                                <tr>
                                    <td>Void Pointer</td>
                                    <td><code>void *ptr;</code></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Pointers</h4>

                <ul class="mb-0">

                    <li>Provide direct access to memory.</li>

                    <li>Enable dynamic memory allocation.</li>

                    <li>Improve performance by passing addresses instead of copying data.</li>

                    <li>Used with arrays, functions, and classes.</li>

                    <li>Essential for implementing advanced data structures like linked lists and trees.</li>

                </ul>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-warning mt-4">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Always initialize pointers before using them.</li>

                    <li>Use <code>nullptr</code> instead of <code>NULL</code> in modern C++.</li>

                    <li>Avoid dereferencing null or uninitialized pointers.</li>

                    <li>Release dynamically allocated memory when it is no longer needed.</li>

                    <li>Use smart pointers (<code>unique_ptr</code>, <code>shared_ptr</code>) in modern C++ whenever possible.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Pointers are variables that store memory addresses. They are
                    fundamental to C++ programming and are widely used for memory
                    management, arrays, functions, and dynamic data structures.
                    Understanding pointers is essential for becoming a proficient
                    C++ programmer.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title: "Structures",
content: `
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Structures</h1>

                <p class="lead">
                    A <strong>structure (struct)</strong> is a user-defined data type
                    that allows you to group different types of related data into a
                    single unit. Structures are commonly used to represent real-world
                    objects such as students, employees, books, and products.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Structure?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>structure</strong> is a collection of variables,
                        called <strong>members</strong>, that can have different
                        data types. Unlike arrays, which store elements of the same
                        type, structures can store integers, floating-point numbers,
                        characters, strings, and other data types together.
                    </p>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Structure Syntax</h3>

                </div>

                <div class="card-body">

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>struct StructureName
{
    dataType member1;
    dataType member2;
    dataType member3;
};
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example of a Structure</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

struct Student
{
    int id;
    string name;
    float marks;
};

int main()
{
    Student s1;

    s1.id = 101;
    s1.name = "Ali";
    s1.marks = 88.5;

    cout << "ID: " << s1.id << endl;
    cout << "Name: " << s1.name << endl;
    cout << "Marks: " << s1.marks << endl;

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>ID: 101
Name: Ali
Marks: 88.5
</code></pre>

                </div>

            </div>

            <!-- Initialization -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Initializing a Structure</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>Student s1 = {101, "Ahmed", 91.5};
</code></pre>

                </div>

            </div>

            <!-- Multiple Objects -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Creating Multiple Structure Objects</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>Student s1, s2, s3;
</code></pre>

                    <p>
                        Each object has its own copy of the structure members.
                    </p>

                </div>

            </div>

            <!-- Array -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Array of Structures</h3>

                </div>

                <div class="card-body">

                    <p>
                        Structures can also be stored in arrays to manage multiple
                        records efficiently.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>Student students[3];

students[0].name = "Ali";
students[1].name = "Ahmed";
students[2].name = "Sara";
</code></pre>

                </div>

            </div>

            <!-- Nested -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Nested Structures</h3>

                </div>

                <div class="card-body">

                    <p>
                        A structure can contain another structure as one of its members.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>struct Address
{
    string city;
    string country;
};

struct Student
{
    int id;
    string name;
    Address address;
};
</code></pre>

                </div>

            </div>

            <!-- Structure vs Class -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Structure vs Class</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>
                                    <th>Structure</th>
                                    <th>Class</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>Default access is <code>public</code>.</td>
                                    <td>Default access is <code>private</code>.</td>
                                </tr>

                                <tr>
                                    <td>Mainly used for storing data.</td>
                                    <td>Used for data and member functions.</td>
                                </tr>

                                <tr>
                                    <td>Supports functions, constructors, and inheritance.</td>
                                    <td>Supports all object-oriented programming features.</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Structures</h4>

                <ul class="mb-0">

                    <li>Groups different data types together.</li>

                    <li>Improves program organization.</li>

                    <li>Represents real-world entities effectively.</li>

                    <li>Supports arrays and nested structures.</li>

                    <li>Reduces the need for multiple separate variables.</li>

                </ul>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-warning mt-4">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful structure names.</li>

                    <li>Keep related data together in one structure.</li>

                    <li>Initialize structure members before using them.</li>

                    <li>Use classes instead of structures when implementing complex object-oriented designs.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Structures are user-defined data types that allow programmers to
                    group variables of different data types into a single unit.
                    They are useful for representing real-world objects and organizing
                    related data. In C++, structures support many object-oriented
                    features and are widely used in applications involving records
                    and data management.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"File Handling",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ File Handling</h1>

                <p class="lead">
                    File handling allows a C++ program to create, read, write,
                    and update files stored on a computer. Instead of storing
                    data temporarily in memory, files allow information to be
                    saved permanently.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is File Handling?</h3>

                </div>

                <div class="card-body">

                    <p>
                        File handling is the process of reading data from files
                        and writing data to files. C++ provides file handling
                        through the <code>&lt;fstream&gt;</code> library.
                    </p>

                    <p>
                        The three main file stream classes are:
                    </p>

                    <ul>

                        <li><strong>ofstream</strong> – Used to create and write files.</li>

                        <li><strong>ifstream</strong> – Used to read files.</li>

                        <li><strong>fstream</strong> – Used for both reading and writing.</li>

                    </ul>

                </div>

            </div>

            <!-- Header -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Including the File Library</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;fstream&gt;
</code></pre>

                </div>

            </div>

            <!-- Writing -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Writing to a File (ofstream)</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;fstream&gt;
using namespace std;

int main()
{
    ofstream file("student.txt");

    file << "Welcome to C++ File Handling." << endl;
    file << "This file was created successfully.";

    file.close();

    cout << "File written successfully.";

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Reading -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Reading from a File (ifstream)</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;fstream&gt;
#include &lt;string&gt;
using namespace std;

int main()
{
    ifstream file("student.txt");

    string line;

    while(getline(file, line))
    {
        cout << line << endl;
    }

    file.close();

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- Read Write -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Reading and Writing (fstream)</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;iostream&gt;
#include &lt;fstream&gt;
using namespace std;

int main()
{
    fstream file;

    file.open("example.txt", ios::out);

    file << "Learning C++ File Handling";

    file.close();

    return 0;
}
</code></pre>

                </div>

            </div>

            <!-- File Modes -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">File Open Modes</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Mode</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>ios::in</code></td>

                                    <td>Open file for reading.</td>

                                </tr>

                                <tr>

                                    <td><code>ios::out</code></td>

                                    <td>Open file for writing.</td>

                                </tr>

                                <tr>

                                    <td><code>ios::app</code></td>

                                    <td>Append data to the end of a file.</td>

                                </tr>

                                <tr>

                                    <td><code>ios::binary</code></td>

                                    <td>Open file in binary mode.</td>

                                </tr>

                                <tr>

                                    <td><code>ios::trunc</code></td>

                                    <td>Erase previous file contents.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Member Functions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Common File Functions</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Function</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>open()</code></td>

                                    <td>Opens a file.</td>

                                </tr>

                                <tr>

                                    <td><code>close()</code></td>

                                    <td>Closes a file.</td>

                                </tr>

                                <tr>

                                    <td><code>getline()</code></td>

                                    <td>Reads an entire line.</td>

                                </tr>

                                <tr>

                                    <td><code>&lt;&lt;</code></td>

                                    <td>Writes data to a file.</td>

                                </tr>

                                <tr>

                                    <td><code>&gt;&gt;</code></td>

                                    <td>Reads data from a file.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Always include the <code>&lt;fstream&gt;</code> header.</li>

                    <li>Always close files after finishing work using <code>close()</code>.</li>

                    <li>Check whether a file is opened successfully before reading or writing.</li>

                    <li>Use <code>getline()</code> for reading complete lines.</li>

                    <li>Choose the appropriate file mode (<code>ios::in</code>, <code>ios::out</code>, or <code>ios::app</code>).</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    File handling enables C++ programs to permanently store and
                    retrieve data. The <strong>ofstream</strong>,
                    <strong>ifstream</strong>, and <strong>fstream</strong>
                    classes provide an easy and efficient way to work with files.
                    Proper file handling is essential for applications such as
                    databases, reports, logging systems, and data storage.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Projects",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">C++ Projects</h1>

                <p class="lead">
                    After learning the fundamentals of C++, the best way to improve
                    your programming skills is by building real-world projects.
                    Projects help you understand problem-solving, logic building,
                    debugging, and object-oriented programming concepts.
                </p>

            </div>

            <!-- Why Projects -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Why Build Projects?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Improve programming and logical thinking skills.</li>

                        <li>Gain practical coding experience.</li>

                        <li>Learn how different C++ concepts work together.</li>

                        <li>Develop confidence in solving real-world problems.</li>

                        <li>Create a strong portfolio for jobs and internships.</li>

                    </ul>

                </div>

            </div>

            <!-- Beginner Projects -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Beginner Level Projects</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Project</th>

                                    <th>Description</th>

                                    <th>Concepts Used</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Calculator</td>

                                    <td>Perform addition, subtraction, multiplication, and division.</td>

                                    <td>Variables, Operators, Functions</td>

                                </tr>

                                <tr>

                                    <td>Simple Interest Calculator</td>

                                    <td>Calculate simple interest.</td>

                                    <td>Variables, Formula, Input/Output</td>

                                </tr>

                                <tr>

                                    <td>Number Guessing Game</td>

                                    <td>Guess a randomly generated number.</td>

                                    <td>Loops, Conditions, Random Numbers</td>

                                </tr>

                                <tr>

                                    <td>Multiplication Table Generator</td>

                                    <td>Display multiplication tables.</td>

                                    <td>Loops</td>

                                </tr>

                                <tr>

                                    <td>Grade Calculator</td>

                                    <td>Calculate grades based on marks.</td>

                                    <td>If-Else, Functions</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Intermediate -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Intermediate Level Projects</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Project</th>

                                    <th>Description</th>

                                    <th>Concepts Used</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Student Management System</td>

                                    <td>Add, update, search, and delete student records.</td>

                                    <td>Structures, Arrays, File Handling</td>

                                </tr>

                                <tr>

                                    <td>Library Management System</td>

                                    <td>Manage books and students.</td>

                                    <td>Structures, Functions, Files</td>

                                </tr>

                                <tr>

                                    <td>Bank Management System</td>

                                    <td>Create and manage bank accounts.</td>

                                    <td>Functions, Files, Classes</td>

                                </tr>

                                <tr>

                                    <td>Employee Management System</td>

                                    <td>Store employee information.</td>

                                    <td>Structures, File Handling</td>

                                </tr>

                                <tr>

                                    <td>Inventory Management System</td>

                                    <td>Manage product stock and prices.</td>

                                    <td>Arrays, Classes, Files</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advanced -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Advanced Level Projects</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-dark">

                                <tr>

                                    <th>Project</th>

                                    <th>Description</th>

                                    <th>Concepts Used</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Hospital Management System</td>

                                    <td>Manage patients, doctors, and appointments.</td>

                                    <td>Classes, File Handling, OOP</td>

                                </tr>

                                <tr>

                                    <td>Hotel Management System</td>

                                    <td>Manage room bookings and customers.</td>

                                    <td>OOP, File Handling</td>

                                </tr>

                                <tr>

                                    <td>Online Examination System</td>

                                    <td>Create quizzes and calculate scores.</td>

                                    <td>Functions, Arrays, OOP</td>

                                </tr>

                                <tr>

                                    <td>ATM Simulation</td>

                                    <td>Deposit, withdraw, and check balance.</td>

                                    <td>Classes, Functions, Files</td>

                                </tr>

                                <tr>

                                    <td>School Management System</td>

                                    <td>Manage students, teachers, and courses.</td>

                                    <td>OOP, File Handling, Classes</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Skills -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Skills You Will Practice</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Variables and Data Types</li>

                        <li>Operators and Expressions</li>

                        <li>Conditional Statements</li>

                        <li>Loops</li>

                        <li>Functions</li>

                        <li>Arrays</li>

                        <li>Pointers</li>

                        <li>Structures</li>

                        <li>Classes and Objects</li>

                        <li>File Handling</li>

                        <li>Object-Oriented Programming (OOP)</li>

                        <li>Problem Solving and Debugging</li>

                    </ul>

                </div>

            </div>

            <!-- Development Steps -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Project Development Steps</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Understand the project requirements.</li>

                        <li>Design the program flow.</li>

                        <li>Create classes, functions, and data structures.</li>

                        <li>Implement the program step by step.</li>

                        <li>Test every feature carefully.</li>

                        <li>Fix errors and optimize the code.</li>

                        <li>Save project data using file handling if required.</li>

                    </ol>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Tips for Building Projects</h4>

                <ul class="mb-0">

                    <li>Start with small projects before moving to complex ones.</li>

                    <li>Write clean and well-commented code.</li>

                    <li>Use meaningful variable and function names.</li>

                    <li>Test your program regularly.</li>

                    <li>Practice object-oriented programming concepts.</li>

                    <li>Keep improving your projects by adding new features.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Building projects is one of the most effective ways to master
                    C++ programming. Start with beginner-level applications such
                    as calculators and grading systems, then gradually build
                    larger software like management systems. Every project
                    strengthens your understanding of C++ and prepares you for
                    professional software development.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Interview Questions",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-10">

            <!-- Heading -->

            <div class="text-center mb-4">

                <h1 class="fw-bold text-primary">Top C++ Interview Questions</h1>

                <p class="lead">
                    This section contains the most frequently asked C++ interview
                    questions for beginners, students, and job seekers. These
                    questions cover fundamental and object-oriented programming
                    concepts commonly asked in technical interviews.
                </p>

            </div>

            <!-- Basic Questions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Basic C++ Interview Questions</h3>

                </div>

                <div class="card-body">

                    <div class="accordion" id="basicQuestions">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
                                    1. What is C++?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#basicQuestions">
                                <div class="accordion-body">
                                    C++ is a general-purpose, object-oriented programming language developed by Bjarne Stroustrup. It is an extension of the C programming language and is widely used for software development, games, operating systems, and embedded systems.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
                                    2. Who developed C++?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#basicQuestions">
                                <div class="accordion-body">
                                    C++ was developed by <strong>Bjarne Stroustrup</strong> at Bell Laboratories in 1979.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">
                                    3. What are the features of C++?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#basicQuestions">
                                <div class="accordion-body">
                                    Features include object-oriented programming, portability, high performance, inheritance, polymorphism, encapsulation, abstraction, templates, exception handling, and the Standard Template Library (STL).
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4">
                                    4. What is the difference between C and C++?
                                </button>
                            </h2>
                            <div id="a4" class="accordion-collapse collapse" data-bs-parent="#basicQuestions">
                                <div class="accordion-body">
                                    C is a procedural programming language, whereas C++ supports both procedural and object-oriented programming. C++ provides classes, objects, inheritance, polymorphism, and many other advanced features.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5">
                                    5. What is Object-Oriented Programming (OOP)?
                                </button>
                            </h2>
                            <div id="a5" class="accordion-collapse collapse" data-bs-parent="#basicQuestions">
                                <div class="accordion-body">
                                    OOP is a programming paradigm based on objects and classes. It focuses on data security, reusability, and modular programming.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- OOP -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Object-Oriented Programming Questions</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li><strong>What is a class?</strong><br>
                        A class is a blueprint for creating objects.</li>

                        <li class="mt-3"><strong>What is an object?</strong><br>
                        An object is an instance of a class.</li>

                        <li class="mt-3"><strong>What is encapsulation?</strong><br>
                        Encapsulation is wrapping data and functions into a single unit.</li>

                        <li class="mt-3"><strong>What is inheritance?</strong><br>
                        Inheritance allows one class to inherit properties and methods from another class.</li>

                        <li class="mt-3"><strong>What is polymorphism?</strong><br>
                        Polymorphism allows one interface to perform different tasks.</li>

                        <li class="mt-3"><strong>What is abstraction?</strong><br>
                        Abstraction hides implementation details and shows only essential features.</li>

                    </ol>

                </div>

            </div>

            <!-- Programming -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Programming Questions</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>What is a function?</li>

                        <li>What is recursion?</li>

                        <li>What is a pointer?</li>

                        <li>What is an array?</li>

                        <li>What is a structure?</li>

                        <li>What is a constructor?</li>

                        <li>What is a destructor?</li>

                        <li>What is function overloading?</li>

                        <li>What is operator overloading?</li>

                        <li>What is a virtual function?</li>

                    </ol>

                </div>

            </div>

            <!-- STL -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">STL Questions</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>What is the Standard Template Library (STL)?</li>

                        <li>What are vectors?</li>

                        <li>What is a map?</li>

                        <li>What is a queue?</li>

                        <li>What is a stack?</li>

                        <li>What is an iterator?</li>

                    </ol>

                </div>

            </div>

            <!-- Coding -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Coding Interview Programs</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Hello World Program</li>

                        <li>Swap Two Numbers</li>

                        <li>Find Largest Number</li>

                        <li>Palindrome Number</li>

                        <li>Prime Number Check</li>

                        <li>Factorial Program</li>

                        <li>Fibonacci Series</li>

                        <li>Reverse a String</li>

                        <li>Reverse an Array</li>

                        <li>Linear Search</li>

                        <li>Binary Search</li>

                        <li>Bubble Sort</li>

                    </ul>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Interview Preparation Tips</h4>

                <ul class="mb-0">

                    <li>Understand C++ fundamentals thoroughly.</li>

                    <li>Practice object-oriented programming concepts.</li>

                    <li>Write and execute small programs daily.</li>

                    <li>Practice data structures and algorithms.</li>

                    <li>Learn STL containers and functions.</li>

                    <li>Be able to explain your code clearly.</li>

                    <li>Practice solving coding problems on online platforms.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    C++ interviews typically focus on language fundamentals,
                    object-oriented programming, memory management, pointers,
                    functions, arrays, file handling, STL, and problem-solving
                    skills. Regular coding practice and a solid understanding of
                    concepts will greatly improve your interview performance.
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