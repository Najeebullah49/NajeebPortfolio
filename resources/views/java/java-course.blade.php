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
        Java
    </h3>
   <a href="#" onclick="showLesson(0); return false;">Java Home</a>
<a href="#" onclick="showLesson(1); return false;">Introduction</a>
<a href="#" onclick="showLesson(2); return false;">History</a>
<a href="#" onclick="showLesson(3); return false;">Software for Java Programming</a>
<a href="#" onclick="showLesson(4); return false;">Features</a>
<a href="#" onclick="showLesson(5); return false;">Java Program Structure</a>
<a href="#" onclick="showLesson(6); return false;">First Java Program</a>
<a href="#" onclick="showLesson(7); return false;">Variables</a>
<a href="#" onclick="showLesson(8); return false;">Data Types</a>
<a href="#" onclick="showLesson(9); return false;">Constants (final Keyword)</a>
<a href="#" onclick="showLesson(10); return false;">Operators</a>
<a href="#" onclick="showLesson(11); return false;">Input Output (Scanner)</a>
<a href="#" onclick="showLesson(12); return false;">If Else</a>
<a href="#" onclick="showLesson(13); return false;">Loops</a>
<a href="#" onclick="showLesson(14); return false;">Methods</a>
<a href="#" onclick="showLesson(15); return false;">Arrays</a>
<a href="#" onclick="showLesson(16); return false;">Strings</a>
<a href="#" onclick="showLesson(17); return false;">Classes and Objects</a>
<a href="#" onclick="showLesson(18); return false;">Constructors</a>
<a href="#" onclick="showLesson(19); return false;">Inheritance</a>
<a href="#" onclick="showLesson(20); return false;">Polymorphism</a>
<a href="#" onclick="showLesson(21); return false;">Abstraction</a>
<a href="#" onclick="showLesson(22); return false;">Encapsulation</a>
<a href="#" onclick="showLesson(23); return false;">Interfaces</a>
<a href="#" onclick="showLesson(24); return false;">Packages</a>
<a href="#" onclick="showLesson(25); return false;">Exception Handling</a>
<a href="#" onclick="showLesson(26); return false;">Collections Framework</a>
<a href="#" onclick="showLesson(27); return false;">File Handling</a>
<a href="#" onclick="showLesson(28); return false;">Multithreading</a>
<a href="#" onclick="showLesson(29); return false;">Projects</a>
<a href="#" onclick="showLesson(30); return false;">Interview Questions</a>

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
title:"Java Home",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Learn Java Programming
                </h1>

                <p class="lead">
                    Java is one of the world's most popular and widely used
                    programming languages. It is simple, secure, object-oriented,
                    platform-independent, and used to build desktop applications,
                    web applications, mobile applications, enterprise software,
                    cloud applications, and much more.
                </p>

            </div>

            <!-- About Java -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Java?</h3>

                </div>

                <div class="card-body">

                    <p>
                        <strong>Java</strong> is a high-level, object-oriented,
                        class-based programming language developed by
                        <strong>James Gosling</strong> at Sun Microsystems in 1995.
                        Today, Java is owned by Oracle Corporation.
                    </p>

                    <p>
                        Java follows the principle of
                        <strong>"Write Once, Run Anywhere (WORA)"</strong>,
                        meaning a Java program can run on any operating system
                        that has the Java Virtual Machine (JVM) installed.
                    </p>

                    <p>
                        Java is free, reliable, secure, and one of the most
                        demanded programming languages in the software industry.
                    </p>

                </div>

            </div>

            <!-- Why Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Why Learn Java?</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Easy to learn and use.</li>

                                <li>Object-Oriented Programming language.</li>

                                <li>Platform Independent.</li>

                                <li>Secure and Robust.</li>

                                <li>High Performance.</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Large developer community.</li>

                                <li>Excellent job opportunities.</li>

                                <li>Rich Standard Library.</li>

                                <li>Supports Multithreading.</li>

                                <li>Free and Open Source tools.</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Applications -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Applications of Java</h3>

                </div>

                <div class="card-body">

                    <div class="row text-center">

                        <div class="col-sm-6 col-lg-3 mb-3">

                            <div class="border rounded p-3 h-100">

                                <h5>Desktop Applications</h5>

                                <p class="mb-0">
                                    Calculator, Notepad, Media Player
                                </p>

                            </div>

                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">

                            <div class="border rounded p-3 h-100">

                                <h5>Web Applications</h5>

                                <p class="mb-0">
                                    Banking, E-Commerce, ERP Systems
                                </p>

                            </div>

                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">

                            <div class="border rounded p-3 h-100">

                                <h5>Android Apps</h5>

                                <p class="mb-0">
                                    Mobile Applications using Java
                                </p>

                            </div>

                        </div>

                        <div class="col-sm-6 col-lg-3 mb-3">

                            <div class="border rounded p-3 h-100">

                                <h5>Enterprise Software</h5>

                                <p class="mb-0">
                                    Large Scale Business Applications
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- First Program -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Your First Java Program</h3>

                </div>

                <div class="card-body">

                    <p>
                        Every Java application starts execution from the
                        <strong>main()</strong> method.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main
{
    public static void main(String[] args)
    {
        System.out.println("Hello World");
    }
}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello World
</code></pre>

                </div>

            </div>

            <!-- What You'll Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">What You'll Learn</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Java Syntax</li>

                                <li>Program Structure</li>

                                <li>Variables</li>

                                <li>Data Types</li>

                                <li>Operators</li>

                                <li>Input and Output</li>

                                <li>Conditional Statements</li>

                                <li>Loops</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Methods</li>

                                <li>Arrays</li>

                                <li>Strings</li>

                                <li>Classes and Objects</li>

                                <li>Inheritance</li>

                                <li>Polymorphism</li>

                                <li>Exception Handling</li>

                                <li>File Handling</li>

                                <li>Collections Framework</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Java Editions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Java Editions</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Edition</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Java SE</td>

                                    <td>Standard Edition used for desktop and general-purpose applications.</td>

                                </tr>

                                <tr>

                                    <td>Java EE (Jakarta EE)</td>

                                    <td>Enterprise Edition used for large-scale web and enterprise applications.</td>

                                </tr>

                                <tr>

                                    <td>Java ME</td>

                                    <td>Micro Edition used for embedded and IoT devices.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Java</h4>

                <ul class="mb-0">

                    <li>Simple and easy to learn.</li>

                    <li>Object-Oriented Programming language.</li>

                    <li>Platform Independent (Write Once, Run Anywhere).</li>

                    <li>Secure and Reliable.</li>

                    <li>Automatic Memory Management.</li>

                    <li>Supports Multithreading.</li>

                    <li>Rich Standard Library.</li>

                    <li>Large Developer Community.</li>

                    <li>Excellent Career Opportunities.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java is one of the most popular programming languages in the
                    world. It is object-oriented, platform-independent, secure,
                    and widely used in desktop applications, web development,
                    Android applications, enterprise software, cloud computing,
                    and embedded systems. This course will teach you Java from
                    the basics to advanced concepts through easy explanations,
                    practical examples, and real-world projects.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Introduction",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Introduction to Java
                </h1>

                <p class="lead">
                    Java is a high-level, object-oriented, class-based programming
                    language designed to be simple, secure, portable, and powerful.
                    It is one of the most popular programming languages used for
                    developing desktop, web, mobile, enterprise, and cloud
                    applications.
                </p>

            </div>

            <!-- What is Java -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Java?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java is a programming language developed by
                        <strong>James Gosling</strong> and his team at
                        <strong>Sun Microsystems</strong> in <strong>1995</strong>.
                        It was created with the goal of allowing programs to run on
                        different operating systems without modification.
                    </p>

                    <p>
                        Java follows the principle of
                        <strong>"Write Once, Run Anywhere (WORA)"</strong>,
                        meaning that Java programs can run on any device that has
                        the Java Virtual Machine (JVM) installed.
                    </p>

                </div>

            </div>

            <!-- Why Java -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Why Learn Java?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Easy to learn and understand.</li>

                        <li>Object-Oriented Programming language.</li>

                        <li>Platform Independent.</li>

                        <li>Secure and reliable.</li>

                        <li>Supports Multithreading.</li>

                        <li>Large standard library.</li>

                        <li>Excellent job opportunities.</li>

                        <li>Used by millions of developers worldwide.</li>

                    </ul>

                </div>

            </div>

            <!-- Java Platforms -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Where is Java Used?</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Desktop Applications</li>

                                <li>Android Mobile Applications</li>

                                <li>Web Applications</li>

                                <li>Enterprise Software</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Cloud Computing</li>

                                <li>Banking Systems</li>

                                <li>E-commerce Applications</li>

                                <li>Embedded Systems</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Java Components -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Java Components</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Component</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>JDK</td>

                                    <td>Java Development Kit used to develop Java applications.</td>

                                </tr>

                                <tr>

                                    <td>JRE</td>

                                    <td>Java Runtime Environment used to run Java applications.</td>

                                </tr>

                                <tr>

                                    <td>JVM</td>

                                    <td>Java Virtual Machine executes Java bytecode.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Java Workflow -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">How Java Works</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Write Java source code (<code>.java</code>).</li>

                        <li>Compile the program using the Java Compiler (<code>javac</code>).</li>

                        <li>The compiler generates Bytecode (<code>.class</code>).</li>

                        <li>The JVM executes the bytecode.</li>

                        <li>The program runs on any operating system with a JVM.</li>

                    </ol>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Java</h4>

                <ul class="mb-0">

                    <li>Simple and easy to learn.</li>

                    <li>Object-Oriented Programming.</li>

                    <li>Platform Independent.</li>

                    <li>Highly Secure.</li>

                    <li>Portable across different operating systems.</li>

                    <li>Automatic Garbage Collection.</li>

                    <li>Supports Multithreading.</li>

                    <li>Rich API and libraries.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java is a powerful, secure, and platform-independent programming
                    language that is widely used in modern software development.
                    It enables developers to create applications that can run on
                    multiple operating systems without changing the source code.
                    Learning Java provides a strong foundation for web development,
                    Android development, enterprise software, and many other
                    programming careers.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"History",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    History of Java
                </h1>

                <p class="lead">
                    Java has become one of the most successful programming
                    languages in the world. It was designed to be simple,
                    secure, portable, and platform-independent, making it
                    suitable for developing software that can run on different
                    operating systems.
                </p>

            </div>

            <!-- Origin -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Origin of Java</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java was developed by
                        <strong>James Gosling</strong> and his team at
                        <strong>Sun Microsystems</strong>.
                    </p>

                    <p>
                        Development of Java began in <strong>1991</strong> as part
                        of the <strong>Green Project</strong>, whose goal was to
                        create software for consumer electronic devices such as
                        televisions and set-top boxes.
                    </p>

                    <p>
                        The first public version of Java was officially released
                        in <strong>1995</strong>.
                    </p>

                </div>

            </div>

            <!-- Why Java -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Why Was Java Created?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Before Java, software often had to be rewritten for
                        different operating systems. Java solved this problem by
                        introducing the concept of
                        <strong>"Write Once, Run Anywhere (WORA)"</strong>.
                    </p>

                    <p>
                        This means a Java program can run on Windows, Linux, and
                        macOS without changing the source code, as long as the
                        Java Virtual Machine (JVM) is installed.
                    </p>

                </div>

            </div>

            <!-- Name History -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">How Java Got Its Name</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java was originally called
                        <strong>"Oak"</strong>, named after an oak tree outside
                        James Gosling's office.
                    </p>

                    <p>
                        Since the name "Oak" was already trademarked, the language
                        was renamed <strong>"Java"</strong>, inspired by Java
                        coffee from Indonesia.
                    </p>

                </div>

            </div>

            <!-- Timeline -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Java Timeline</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Year</th>

                                    <th>Event</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>1991</td>

                                    <td>Green Project started by James Gosling and his team.</td>

                                </tr>

                                <tr>

                                    <td>1991</td>

                                    <td>Language was initially named <strong>Oak</strong>.</td>

                                </tr>

                                <tr>

                                    <td>1995</td>

                                    <td>Java 1.0 was officially released by Sun Microsystems.</td>

                                </tr>

                                <tr>

                                    <td>1996</td>

                                    <td>Java Development Kit (JDK 1.0) became available.</td>

                                </tr>

                                <tr>

                                    <td>2006</td>

                                    <td>Java became open source through the OpenJDK project.</td>

                                </tr>

                                <tr>

                                    <td>2010</td>

                                    <td>Oracle Corporation acquired Sun Microsystems and became the owner of Java.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Versions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Popular Java Versions</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead class="table-light">

                                <tr>

                                    <th>Version</th>

                                    <th>Release Year</th>

                                    <th>Highlights</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Java 5</td>

                                    <td>2004</td>

                                    <td>Generics, Enhanced for-loop, Autoboxing</td>

                                </tr>

                                <tr>

                                    <td>Java 8</td>

                                    <td>2014</td>

                                    <td>Lambda Expressions, Stream API</td>

                                </tr>

                                <tr>

                                    <td>Java 11</td>

                                    <td>2018</td>

                                    <td>Long-Term Support (LTS)</td>

                                </tr>

                                <tr>

                                    <td>Java 17</td>

                                    <td>2021</td>

                                    <td>LTS Version with modern language improvements</td>

                                </tr>

                                <tr>

                                    <td>Java 21</td>

                                    <td>2023</td>

                                    <td>Latest Long-Term Support (LTS) release</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Importance -->

            <div class="alert alert-success">

                <h4>Importance of Java</h4>

                <ul class="mb-0">

                    <li>Used in enterprise software development.</li>

                    <li>Primary language for Android development for many years.</li>

                    <li>Widely used in banking and financial systems.</li>

                    <li>Supports web, desktop, cloud, and distributed applications.</li>

                    <li>One of the most popular programming languages worldwide.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java was created by James Gosling and his team at Sun
                    Microsystems. Development started in 1991, and the first
                    official release came in 1995. Since then, Java has evolved
                    into one of the world's leading programming languages,
                    powering millions of applications across desktops, web
                    servers, mobile devices, cloud platforms, and enterprise
                    systems.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Software for Java Programming",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Software for Java Programming
                </h1>

                <p class="lead">
                    Before writing and running Java programs, you need to install
                    a few software tools. These tools help you write, compile,
                    execute, and debug Java applications efficiently.
                </p>

            </div>

            <!-- Required Software -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Software Required for Java Programming</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Software</th>

                                    <th>Purpose</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Java Development Kit (JDK)</td>

                                    <td>Contains the Java compiler, libraries, and tools required to develop Java applications.</td>

                                </tr>

                                <tr>

                                    <td>Java Runtime Environment (JRE)</td>

                                    <td>Runs Java applications using the Java Virtual Machine (JVM).</td>

                                </tr>

                                <tr>

                                    <td>Java Virtual Machine (JVM)</td>

                                    <td>Executes Java bytecode and makes Java platform independent.</td>

                                </tr>

                                <tr>

                                    <td>Code Editor / IDE</td>

                                    <td>Used to write, edit, compile, and debug Java programs.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Popular IDEs -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Popular Java IDEs</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead class="table-light">

                                <tr>

                                    <th>IDE</th>

                                    <th>Description</th>

                                    <th>Recommended For</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Visual Studio Code</td>

                                    <td>Lightweight editor with Java Extension Pack.</td>

                                    <td>Beginners & Professionals</td>

                                </tr>

                                <tr>

                                    <td>IntelliJ IDEA</td>

                                    <td>Powerful IDE with intelligent code completion and debugging.</td>

                                    <td>Professional Developers</td>

                                </tr>

                                <tr>

                                    <td>Eclipse IDE</td>

                                    <td>Free and open-source Java IDE with many plugins.</td>

                                    <td>Students & Professionals</td>

                                </tr>

                                <tr>

                                    <td>Apache NetBeans</td>

                                    <td>Easy-to-use IDE supporting Java desktop and web applications.</td>

                                    <td>Beginners</td>

                                </tr>

                                <tr>

                                    <td>BlueJ</td>

                                    <td>Educational IDE specially designed for learning Java.</td>

                                    <td>Students</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Installation Steps -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Steps to Start Java Programming</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Download and install the Java Development Kit (JDK).</li>

                        <li>Set the JAVA_HOME environment variable (if required).</li>

                        <li>Add the JDK <code>bin</code> folder to the system PATH.</li>

                        <li>Install an IDE such as IntelliJ IDEA, Eclipse, NetBeans, or Visual Studio Code.</li>

                        <li>Create your first Java project.</li>

                        <li>Write, compile, and run your Java program.</li>

                    </ol>

                </div>

            </div>

            <!-- Java Commands -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Useful Java Commands</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Command</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>java -version</code></td>

                                    <td>Displays the installed Java version.</td>

                                </tr>

                                <tr>

                                    <td><code>javac Main.java</code></td>

                                    <td>Compiles a Java source file.</td>

                                </tr>

                                <tr>

                                    <td><code>java Main</code></td>

                                    <td>Runs the compiled Java program.</td>

                                </tr>

                                <tr>

                                    <td><code>javac *.java</code></td>

                                    <td>Compiles all Java files in the current folder.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Compilation Process -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Java Compilation Process</h3>

                </div>

                <div class="card-body">

                    <p>The Java program follows these steps:</p>

                    <div class="alert alert-light border">

                        <strong>Write Code</strong>
                        (<code>Main.java</code>)
                        <br><br>

                        ↓
                        <br><br>

                        <strong>Compile</strong> using
                        <code>javac Main.java</code>
                        <br><br>

                        ↓
                        <br><br>

                        <strong>Bytecode</strong>
                        (<code>Main.class</code>)
                        <br><br>

                        ↓
                        <br><br>

                        <strong>Run</strong> using
                        <code>java Main</code>
                        <br><br>

                        ↓
                        <br><br>

                        <strong>Output on Screen</strong>

                    </div>

                </div>

            </div>

            <!-- Minimum Requirements -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Minimum System Requirements</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Windows, Linux, or macOS</li>

                        <li>Java Development Kit (JDK 17 or later recommended)</li>

                        <li>2 GB RAM minimum (4 GB or more recommended)</li>

                        <li>Code Editor or Java IDE</li>

                        <li>Command Prompt or Terminal</li>

                    </ul>

                </div>

            </div>

            <!-- Best IDE -->

            <div class="alert alert-success">

                <h4>Recommended IDEs</h4>

                <ul class="mb-0">

                    <li><strong>Visual Studio Code</strong> – Best for beginners and lightweight development.</li>

                    <li><strong>IntelliJ IDEA</strong> – Best for professional Java development.</li>

                    <li><strong>Eclipse</strong> – Popular in enterprise software development.</li>

                    <li><strong>Apache NetBeans</strong> – Easy to learn and use.</li>

                    <li><strong>BlueJ</strong> – Excellent for students learning Java.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    To develop Java applications, you need the Java Development
                    Kit (JDK), which includes the compiler and essential tools.
                    You can write Java code using editors like Visual Studio Code
                    or professional IDEs such as IntelliJ IDEA, Eclipse, or
                    NetBeans. Once installed, you can compile Java programs with
                    <code>javac</code> and run them using the
                    <code>java</code> command.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Features",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Features of Java
                </h1>

                <p class="lead">
                    Java is one of the most popular programming languages because
                    it offers many powerful features that make software
                    development easier, safer, and more efficient. These
                    features allow Java applications to run on different
                    platforms with high performance and reliability.
                </p>

            </div>

            <!-- Main Features -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Main Features of Java</h3>

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

                                    <td>Java has a clean and easy-to-understand syntax, making it suitable for beginners.</td>

                                </tr>

                                <tr>

                                    <td>Object-Oriented</td>

                                    <td>Everything in Java is based on classes and objects, encouraging code reusability and modularity.</td>

                                </tr>

                                <tr>

                                    <td>Platform Independent</td>

                                    <td>Java follows the principle of "Write Once, Run Anywhere (WORA)" through the Java Virtual Machine (JVM).</td>

                                </tr>

                                <tr>

                                    <td>Secure</td>

                                    <td>Java provides strong security features such as bytecode verification, exception handling, and automatic memory management.</td>

                                </tr>

                                <tr>

                                    <td>Robust</td>

                                    <td>Java includes exception handling and garbage collection to reduce runtime errors.</td>

                                </tr>

                                <tr>

                                    <td>Portable</td>

                                    <td>Java programs can run on Windows, Linux, macOS, and other operating systems without modification.</td>

                                </tr>

                                <tr>

                                    <td>Multithreaded</td>

                                    <td>Java supports multiple threads running simultaneously, improving application performance.</td>

                                </tr>

                                <tr>

                                    <td>High Performance</td>

                                    <td>The Just-In-Time (JIT) compiler improves execution speed.</td>

                                </tr>

                                <tr>

                                    <td>Distributed</td>

                                    <td>Java makes it easier to build distributed and network-based applications.</td>

                                </tr>

                                <tr>

                                    <td>Dynamic</td>

                                    <td>Java can load classes dynamically during program execution.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Detailed Features -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Explanation of Important Features</h3>

                </div>

                <div class="card-body">

                    <h5>1. Simple</h5>

                    <p>
                        Java syntax is similar to C and C++ but removes many
                        complex features such as pointers and manual memory
                        management.
                    </p>

                    <hr>

                    <h5>2. Object-Oriented</h5>

                    <p>
                        Java organizes programs using classes and objects,
                        making software easier to maintain and reuse.
                    </p>

                    <hr>

                    <h5>3. Platform Independent</h5>

                    <p>
                        Java programs are compiled into bytecode, which can run
                        on any operating system with a Java Virtual Machine
                        (JVM).
                    </p>

                    <hr>

                    <h5>4. Secure</h5>

                    <p>
                        Java avoids direct memory access and includes built-in
                        security features that protect applications from
                        malicious code.
                    </p>

                    <hr>

                    <h5>5. Robust</h5>

                    <p>
                        Exception handling and garbage collection help Java
                        programs run reliably with fewer crashes.
                    </p>

                    <hr>

                    <h5>6. Multithreading</h5>

                    <p>
                        Multiple tasks can run simultaneously, improving the
                        responsiveness of applications.
                    </p>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Advantages of Java</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Easy to learn and use.</li>

                        <li>Free and open-source development tools.</li>

                        <li>Large developer community.</li>

                        <li>Excellent documentation.</li>

                        <li>Supports desktop, web, Android, cloud, and enterprise applications.</li>

                        <li>Automatic garbage collection.</li>

                        <li>Rich Standard Library.</li>

                        <li>Excellent career opportunities.</li>

                    </ul>

                </div>

            </div>

            <!-- Real-world Uses -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Where Java is Used</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Android Applications</li>

                                <li>Desktop Applications</li>

                                <li>Web Applications</li>

                                <li>Enterprise Software</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Cloud Applications</li>

                                <li>Banking Systems</li>

                                <li>E-commerce Websites</li>

                                <li>Scientific Applications</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Feature Summary -->

            <div class="alert alert-success">

                <h4>Key Features at a Glance</h4>

                <ul class="mb-0">

                    <li>✔ Simple</li>

                    <li>✔ Object-Oriented</li>

                    <li>✔ Platform Independent</li>

                    <li>✔ Secure</li>

                    <li>✔ Robust</li>

                    <li>✔ Portable</li>

                    <li>✔ Multithreaded</li>

                    <li>✔ High Performance</li>

                    <li>✔ Distributed</li>

                    <li>✔ Dynamic</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java is a simple, secure, object-oriented, and
                    platform-independent programming language. Its powerful
                    features such as automatic memory management,
                    multithreading, portability, and robustness make it one of
                    the best choices for developing modern desktop, web,
                    Android, and enterprise applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Java Program Structure",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Program Structure
                </h1>

                <p class="lead">
                    Every Java program follows a specific structure. Understanding
                    this structure is essential because every Java application
                    starts execution from the <code>main()</code> method. A Java
                    program is organized using classes, methods, statements, and
                    packages.
                </p>

            </div>

            <!-- Basic Structure -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Basic Structure of a Java Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main
{
    public static void main(String[] args)
    {
        System.out.println("Hello, World!");
    }
}
</code></pre>

                </div>

            </div>

            <!-- Structure Explanation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Explanation of Each Part</h3>

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

                                    <td><code>public</code></td>

                                    <td>An access modifier that allows the class to be accessed from anywhere.</td>

                                </tr>

                                <tr>

                                    <td><code>class</code></td>

                                    <td>Keyword used to define a class.</td>

                                </tr>

                                <tr>

                                    <td><code>Main</code></td>

                                    <td>The name of the class. It should match the filename (<code>Main.java</code>).</td>

                                </tr>

                                <tr>

                                    <td><code>main()</code></td>

                                    <td>The entry point of every Java application.</td>

                                </tr>

                                <tr>

                                    <td><code>String[] args</code></td>

                                    <td>Stores command-line arguments passed to the program.</td>

                                </tr>

                                <tr>

                                    <td><code>System.out.println()</code></td>

                                    <td>Prints output to the console.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Execution Flow -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Program Execution Flow</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Create a Java source file (<code>Main.java</code>).</li>

                        <li>Write Java code inside a class.</li>

                        <li>Compile the program using <code>javac Main.java</code>.</li>

                        <li>The compiler creates <code>Main.class</code> (bytecode).</li>

                        <li>Run the program using <code>java Main</code>.</li>

                        <li>The JVM executes the bytecode and displays the output.</li>

                    </ol>

                </div>

            </div>

            <!-- Program Components -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Components of a Java Program</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Package Declaration (Optional)</li>

                                <li>Import Statements (Optional)</li>

                                <li>Class Declaration</li>

                                <li>Variables (Fields)</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Methods</li>

                                <li>Main Method</li>

                                <li>Statements</li>

                                <li>Comments</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Example with Comments -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Example with Comments</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>// This is a simple Java program

public class Main
{
    // Main method
    public static void main(String[] args)
    {
        // Print a message
        System.out.println("Welcome to Java Programming");
    }
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

<pre class="bg-dark text-white rounded p-3"><code>Welcome to Java Programming
</code></pre>

                </div>

            </div>

            <!-- Naming Rules -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Java Naming Rules</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>The class name should start with a capital letter.</li>

                        <li>The filename must exactly match the public class name.</li>

                        <li>Java is case-sensitive.</li>

                        <li>Every statement ends with a semicolon (<code>;</code>).</li>

                        <li>Code blocks are enclosed in curly braces <code>{ }</code>.</li>

                    </ul>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful class and method names.</li>

                    <li>Follow Java naming conventions.</li>

                    <li>Write comments for better readability.</li>

                    <li>Indent your code properly.</li>

                    <li>Keep one public class in one file.</li>

                    <li>Always save the file with the <code>.java</code> extension.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Every Java program is built around a class and begins execution
                    from the <code>main()</code> method. Understanding the structure
                    of a Java program is the first step toward writing organized,
                    readable, and maintainable Java applications. By following the
                    standard structure and naming conventions, you can develop
                    reliable Java programs for any platform.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"First Java Program",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    First Java Program
                </h1>

                <p class="lead">
                    The first program that every Java learner writes is the
                    <strong>Hello World</strong> program. It introduces the basic
                    structure of a Java program and shows how to display output on
                    the screen.
                </p>

            </div>

            <!-- Program -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Hello World Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main
{
    public static void main(String[] args)
    {
        System.out.println("Hello, World!");
    }
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

<pre class="bg-dark text-white rounded p-3"><code>Hello, World!
</code></pre>

                </div>

            </div>

            <!-- Explanation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Program Explanation</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Code</th>

                                    <th>Explanation</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>public class Main</code></td>

                                    <td>Defines a public class named <strong>Main</strong>. The filename must be <code>Main.java</code>.</td>

                                </tr>

                                <tr>

                                    <td><code>public static void main(String[] args)</code></td>

                                    <td>The main method is the starting point of every Java application.</td>

                                </tr>

                                <tr>

                                    <td><code>System.out.println()</code></td>

                                    <td>Prints text to the console and moves the cursor to the next line.</td>

                                </tr>

                                <tr>

                                    <td><code>"Hello, World!"</code></td>

                                    <td>A string literal displayed as output.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Steps -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Steps to Run the Program</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Open your Java IDE or text editor.</li>

                        <li>Create a new file named <code>Main.java</code>.</li>

                        <li>Copy and paste the Java code.</li>

                        <li>Save the file.</li>

                        <li>Compile the program using:
<pre class="bg-light border rounded p-2 mt-2 overflow-auto"><code>javac Main.java</code></pre>
                        </li>

                        <li>Run the program using:
<pre class="bg-light border rounded p-2 mt-2 overflow-auto"><code>java Main</code></pre>
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

                    <div class="alert alert-light border">

                        <strong>Main.java</strong>

                        <br><br>

                        ↓ Compile using <code>javac</code>

                        <br><br>

                        <strong>Main.class</strong>

                        <br><br>

                        ↓ Execute using <code>java</code>

                        <br><br>

                        <strong>Hello, World!</strong>

                    </div>

                </div>

            </div>

            <!-- Common Errors -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Common Beginner Mistakes</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Filename does not match the public class name.</li>

                        <li>Missing semicolon (<code>;</code>).</li>

                        <li>Missing opening or closing curly braces (<code>{ }</code>).</li>

                        <li>Typing <code>main()</code> incorrectly.</li>

                        <li>Using incorrect capitalization (Java is case-sensitive).</li>

                        <li>Forgetting to install the JDK.</li>

                    </ul>

                </div>

            </div>

            <!-- Print Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Printing Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>System.out.print("Hello");
System.out.print(" World");

System.out.println("Hello");
System.out.println("World");
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello World
Hello
World
</code></pre>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Tips for Beginners</h4>

                <ul class="mb-0">

                    <li>Always save your file with the <code>.java</code> extension.</li>

                    <li>The class name and filename must be the same.</li>

                    <li>Start learning by writing small programs.</li>

                    <li>Practice compiling and running programs from the command line.</li>

                    <li>Read compiler error messages carefully.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    The Hello World program is the foundation of Java programming.
                    It introduces the basic structure of a Java application,
                    demonstrates how to print output, and teaches the process of
                    compiling and running Java code. Mastering this simple program
                    will prepare you for writing more advanced Java applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Variables",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Variables
                </h1>

                <p class="lead">
                    A variable is a named memory location used to store data.
                    Variables allow a program to store, update, and manipulate
                    information while the program is running.
                </p>

            </div>

            <!-- What is a Variable -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Variable?</h3>

                </div>

                <div class="card-body">

                    <p>
                        In Java, a variable stores a value such as a number,
                        character, text, or boolean value. Before using a
                        variable, you must declare its data type and name.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType variableName = value;</code></pre>

                    <p><strong>Example:</strong></p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 20;
double salary = 35000.50;
char grade = 'A';
boolean passed = true;
String name = "Ali";
</code></pre>

                </div>

            </div>

            <!-- Rules -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Rules for Naming Variables</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Variable names are case-sensitive.</li>

                        <li>They must begin with a letter, underscore (_) or dollar sign ($).</li>

                        <li>They cannot begin with a number.</li>

                        <li>Spaces are not allowed.</li>

                        <li>Java keywords cannot be used as variable names.</li>

                        <li>Use meaningful names such as <code>studentName</code> or <code>totalMarks</code>.</li>

                    </ul>

                </div>

            </div>

            <!-- Declaration -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Declaring and Initializing Variables</h3>

                </div>

                <div class="card-body">

                    <h5>Declaration</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age;</code></pre>

                    <h5>Initialization</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>age = 22;</code></pre>

                    <h5>Declaration and Initialization Together</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 22;</code></pre>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Types of Variables</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Type</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Local Variable</td>

                                    <td>Declared inside a method and accessible only within that method.</td>

                                </tr>

                                <tr>

                                    <td>Instance Variable</td>

                                    <td>Declared inside a class but outside methods. Each object has its own copy.</td>

                                </tr>

                                <tr>

                                    <td>Static Variable</td>

                                    <td>Declared with the <code>static</code> keyword and shared by all objects of the class.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        String name = "John";
        int age = 25;
        double salary = 45000.75;
        char grade = 'A';
        boolean passed = true;

        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Salary: " + salary);
        System.out.println("Grade: " + grade);
        System.out.println("Passed: " + passed);

    }

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

<pre class="bg-dark text-white rounded p-3"><code>Name: John
Age: 25
Salary: 45000.75
Grade: A
Passed: true
</code></pre>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Use meaningful variable names.</li>

                    <li>Follow camelCase naming convention.</li>

                    <li>Initialize variables before using them.</li>

                    <li>Choose the appropriate data type.</li>

                    <li>Avoid single-letter variable names except in loops.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Variables are fundamental building blocks of Java programs.
                    They store different types of data and allow programs to
                    perform calculations, make decisions, and manage information.
                    Understanding variable declaration, initialization, naming
                    rules, and types is essential for writing effective Java
                    programs.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Data Types",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Data Types
                </h1>

                <p class="lead">
                    Data types specify the type of data that a variable can store.
                    Every variable in Java must have a data type before it can be
                    used. Choosing the correct data type helps save memory and
                    improves program performance.
                </p>

            </div>

            <!-- What is a Data Type -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Data Type?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A data type defines the kind of value a variable can hold,
                        such as numbers, characters, text, or logical values.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 20;
double salary = 45000.75;
char grade = 'A';
boolean passed = true;
String name = "John";
</code></pre>

                </div>

            </div>

            <!-- Categories -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Categories of Data Types</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="border rounded p-3 h-100">

                                <h5>1. Primitive Data Types</h5>

                                <p>
                                    Built-in data types used to store simple values.
                                </p>

                                <ul>

                                    <li>byte</li>

                                    <li>short</li>

                                    <li>int</li>

                                    <li>long</li>

                                    <li>float</li>

                                    <li>double</li>

                                    <li>char</li>

                                    <li>boolean</li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="border rounded p-3 h-100">

                                <h5>2. Non-Primitive Data Types</h5>

                                <p>
                                    Created by programmers or provided by Java libraries.
                                </p>

                                <ul>

                                    <li>String</li>

                                    <li>Arrays</li>

                                    <li>Classes</li>

                                    <li>Objects</li>

                                    <li>Interfaces</li>

                                    <li>Collections</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Primitive Table -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Primitive Data Types</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Data Type</th>

                                    <th>Size</th>

                                    <th>Description</th>

                                    <th>Example</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>byte</td>

                                    <td>1 Byte</td>

                                    <td>Small integer</td>

                                    <td><code>byte a = 100;</code></td>

                                </tr>

                                <tr>

                                    <td>short</td>

                                    <td>2 Bytes</td>

                                    <td>Short integer</td>

                                    <td><code>short b = 2000;</code></td>

                                </tr>

                                <tr>

                                    <td>int</td>

                                    <td>4 Bytes</td>

                                    <td>Integer numbers</td>

                                    <td><code>int age = 25;</code></td>

                                </tr>

                                <tr>

                                    <td>long</td>

                                    <td>8 Bytes</td>

                                    <td>Large integer</td>

                                    <td><code>long pop = 8000000000L;</code></td>

                                </tr>

                                <tr>

                                    <td>float</td>

                                    <td>4 Bytes</td>

                                    <td>Decimal numbers</td>

                                    <td><code>float pi = 3.14f;</code></td>

                                </tr>

                                <tr>

                                    <td>double</td>

                                    <td>8 Bytes</td>

                                    <td>High precision decimal</td>

                                    <td><code>double salary = 35000.75;</code></td>

                                </tr>

                                <tr>

                                    <td>char</td>

                                    <td>2 Bytes</td>

                                    <td>Single character</td>

                                    <td><code>char grade = 'A';</code></td>

                                </tr>

                                <tr>

                                    <td>boolean</td>

                                    <td>1 Bit (logical)</td>

                                    <td>True or False value</td>

                                    <td><code>boolean pass = true;</code></td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        byte age = 20;
        short marks = 500;
        int number = 10000;
        long population = 8000000000L;

        float price = 25.5f;
        double salary = 45000.75;

        char grade = 'A';

        boolean passed = true;

        String name = "John";

        System.out.println(name);
        System.out.println(age);
        System.out.println(price);
        System.out.println(grade);
        System.out.println(passed);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>John
20
25.5
A
true
</code></pre>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Primitive vs Non-Primitive</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead class="table-light">

                                <tr>

                                    <th>Primitive</th>

                                    <th>Non-Primitive</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Built into Java</td>

                                    <td>Created by programmers or Java libraries</td>

                                </tr>

                                <tr>

                                    <td>Stores actual values</td>

                                    <td>Stores references to objects</td>

                                </tr>

                                <tr>

                                    <td>Fixed size</td>

                                    <td>Size depends on the object</td>

                                </tr>

                                <tr>

                                    <td>Cannot call methods</td>

                                    <td>Can call methods</td>

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

                    <li>Use <code>int</code> for most whole numbers.</li>

                    <li>Use <code>double</code> instead of <code>float</code> for better precision.</li>

                    <li>Use <code>boolean</code> for true/false values.</li>

                    <li>Use <code>char</code> for a single character.</li>

                    <li>Use <code>String</code> for text.</li>

                    <li>Select the smallest suitable data type to optimize memory.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java provides two categories of data types: primitive and
                    non-primitive. Primitive data types store simple values,
                    while non-primitive data types store objects and more
                    complex data. Understanding data types is essential because
                    they determine how data is stored, processed, and managed
                    in Java applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Constants",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Constants in Java
                </h1>

                <p class="lead">
                    A constant is a variable whose value cannot be changed after it
                    has been assigned. In Java, constants are created using the
                    <code>final</code> keyword.
                </p>

            </div>

            <!-- What is a Constant -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Constant?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Normally, the value of a variable can be changed during
                        program execution. However, if you want a value to remain
                        fixed throughout the program, you should declare it as a
                        constant using the <code>final</code> keyword.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>final dataType CONSTANT_NAME = value;</code></pre>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Syntax</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>final int AGE = 20;
final double PI = 3.14159;
final String COUNTRY = "Pakistan";
</code></pre>

                    <p>
                        After a value is assigned to a <code>final</code> variable,
                        it cannot be modified.
                    </p>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        final double PI = 3.14159;
        final int MAX_STUDENTS = 40;
        final String UNIVERSITY = "ABC University";

        System.out.println("PI = " + PI);
        System.out.println("Maximum Students = " + MAX_STUDENTS);
        System.out.println("University = " + UNIVERSITY);

    }

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

<pre class="bg-dark text-white rounded p-3"><code>PI = 3.14159
Maximum Students = 40
University = ABC University
</code></pre>

                </div>

            </div>

            <!-- Error Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Trying to Change a Constant</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>final int AGE = 20;

AGE = 25;    // Compilation Error
</code></pre>

                    <div class="alert alert-danger mt-3">

                        <strong>Error:</strong> A final variable cannot be assigned a
                        new value after initialization.

                    </div>

                </div>

            </div>

            <!-- Naming Convention -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Naming Convention for Constants</h3>

                </div>

                <div class="card-body">

                    <p>
                        By Java convention, constant names are written in
                        <strong>UPPERCASE</strong> with words separated by
                        underscores.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Correct</th>

                                    <th>Incorrect</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>MAX_SIZE</code></td>

                                    <td><code>maxSize</code></td>

                                </tr>

                                <tr>

                                    <td><code>PI</code></td>

                                    <td><code>Pi</code></td>

                                </tr>

                                <tr>

                                    <td><code>MAX_SPEED</code></td>

                                    <td><code>max_speed</code></td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Common Examples of Constants</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Mathematical values (PI, E)</li>

                        <li>Maximum or minimum limits</li>

                        <li>Company names</li>

                        <li>Country names</li>

                        <li>Application configuration values</li>

                        <li>Tax percentages</li>

                        <li>Discount rates</li>

                    </ul>

                </div>

            </div>

            <!-- Benefits -->

            <div class="alert alert-success">

                <h4>Advantages of Using Constants</h4>

                <ul class="mb-0">

                    <li>Prevents accidental modification of values.</li>

                    <li>Makes programs more secure and reliable.</li>

                    <li>Improves code readability.</li>

                    <li>Makes maintenance easier.</li>

                    <li>Reduces programming errors.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Constants are fixed values that remain unchanged during the
                    execution of a Java program. They are declared using the
                    <code>final</code> keyword and are commonly used for values
                    such as PI, limits, configuration settings, and other data
                    that should never change. Following Java naming conventions
                    makes constants easy to identify and improves code quality.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Operators",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Operators
                </h1>

                <p class="lead">
                    Operators are special symbols that perform operations on
                    variables and values. Java provides different types of
                    operators for performing arithmetic calculations,
                    comparisons, logical decisions, assignments, and more.
                </p>

            </div>

            <!-- What is an Operator -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an Operator?</h3>

                </div>

                <div class="card-body">

                    <p>
                        An operator tells the Java compiler to perform a specific
                        operation on one or more operands (variables or values).
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 10;
int b = 5;

int sum = a + b;
</code></pre>

                    <p>
                        In the above example, <code>+</code> is an arithmetic
                        operator used to add two numbers.
                    </p>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Types of Java Operators</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Operator Type</th>

                                    <th>Examples</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Arithmetic Operators</td>

                                    <td>+, -, *, /, %</td>

                                </tr>

                                <tr>

                                    <td>Assignment Operators</td>

                                    <td>=, +=, -=, *=, /=, %=</td>

                                </tr>

                                <tr>

                                    <td>Relational Operators</td>

                                    <td>==, !=, >, <, >=, <=</td>

                                </tr>

                                <tr>

                                    <td>Logical Operators</td>

                                    <td>&&, ||, !</td>

                                </tr>

                                <tr>

                                    <td>Increment / Decrement</td>

                                    <td>++, --</td>

                                </tr>

                                <tr>

                                    <td>Bitwise Operators</td>

                                    <td>&, |, ^, ~, <<, >></td>

                                </tr>

                                <tr>

                                    <td>Ternary Operator</td>

                                    <td>? :</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Arithmetic -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">1. Arithmetic Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 10;
int b = 3;

System.out.println(a + b); // 13
System.out.println(a - b); // 7
System.out.println(a * b); // 30
System.out.println(a / b); // 3
System.out.println(a % b); // 1
</code></pre>

                </div>

            </div>

            <!-- Assignment -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">2. Assignment Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int x = 10;

x += 5;
x -= 2;
x *= 3;
x /= 2;
x %= 4;
</code></pre>

                </div>

            </div>

            <!-- Relational -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">3. Relational Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 10;
int b = 20;

System.out.println(a == b);
System.out.println(a != b);
System.out.println(a > b);
System.out.println(a < b);
System.out.println(a >= b);
System.out.println(a <= b);
</code></pre>

                </div>

            </div>

            <!-- Logical -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">4. Logical Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>boolean x = true;
boolean y = false;

System.out.println(x && y);
System.out.println(x || y);
System.out.println(!x);
</code></pre>

                </div>

            </div>

            <!-- Increment -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">5. Increment and Decrement Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 5;

a++;
System.out.println(a);

a--;
System.out.println(a);
</code></pre>

                </div>

            </div>

            <!-- Bitwise -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">6. Bitwise Operators</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int a = 5;
int b = 3;

System.out.println(a & b);
System.out.println(a | b);
System.out.println(a ^ b);
System.out.println(~a);
System.out.println(a << 1);
System.out.println(a >> 1);
</code></pre>

                    <p class="mt-3">
                        Bitwise operators perform operations on the binary
                        representation of integers.
                    </p>

                </div>

            </div>

            <!-- Ternary -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">7. Ternary Operator</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 18;

String result = (age >= 18) ? "Adult" : "Minor";

System.out.println(result);
</code></pre>

                </div>

            </div>

            <!-- Precedence -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Operator Precedence</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Priority</th>

                                    <th>Operators</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Highest</td>

                                    <td>(), ++, --, !</td>

                                </tr>

                                <tr>

                                    <td>High</td>

                                    <td>*, /, %</td>

                                </tr>

                                <tr>

                                    <td>Medium</td>

                                    <td>+, -</td>

                                </tr>

                                <tr>

                                    <td>Low</td>

                                    <td>&lt;, &gt;, &lt;=, &gt;=</td>

                                </tr>

                                <tr>

                                    <td>Lower</td>

                                    <td>==, !=</td>

                                </tr>

                                <tr>

                                    <td>Lowest</td>

                                    <td>&&, ||, ?:</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Summary Table -->

            <div class="alert alert-success">

                <h4>Quick Summary</h4>

                <ul class="mb-0">

                    <li>Arithmetic Operators → Perform mathematical calculations.</li>

                    <li>Assignment Operators → Assign values to variables.</li>

                    <li>Relational Operators → Compare two values.</li>

                    <li>Logical Operators → Combine or invert boolean expressions.</li>

                    <li>Increment/Decrement → Increase or decrease values by one.</li>

                    <li>Bitwise Operators → Work directly with binary bits.</li>

                    <li>Ternary Operator → A shorthand form of the <code>if...else</code> statement.</li>

                </ul>

            </div>

            <!-- Final Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java operators are essential for performing calculations,
                    comparisons, decision-making, and manipulating data. By
                    understanding the different types of operators and their
                    precedence, you can write efficient, readable, and accurate
                    Java programs.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Input and Output",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Input and Output
                </h1>

                <p class="lead">
                    Input and Output (I/O) are essential concepts in Java programming.
                    <strong>Input</strong> means receiving data from the user, while
                    <strong>Output</strong> means displaying information on the screen.
                    Java uses the <code>Scanner</code> class for input and
                    <code>System.out.print()</code> or
                    <code>System.out.println()</code> for output.
                </p>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Displaying Output</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java provides three methods to display output:
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>System.out.print()</code></td>

                                    <td>Prints output without moving to the next line.</td>

                                </tr>

                                <tr>

                                    <td><code>System.out.println()</code></td>

                                    <td>Prints output and moves the cursor to the next line.</td>

                                </tr>

                                <tr>

                                    <td><code>System.out.printf()</code></td>

                                    <td>Prints formatted output.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Print Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Example: print() and println()</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        System.out.print("Hello ");
        System.out.print("World");

        System.out.println();

        System.out.println("Welcome to Java");

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello World
Welcome to Java
</code></pre>

                </div>

            </div>

            <!-- printf -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example: printf()</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        String name = "Ali";
        int age = 20;
        double marks = 89.75;

        System.out.printf("Name: %s%n", name);
        System.out.printf("Age: %d%n", age);
        System.out.printf("Marks: %.2f%n", marks);

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Name: Ali
Age: 20
Marks: 89.75
</code></pre>

                </div>

            </div>

            <!-- Input -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Taking Input using Scanner</h3>

                </div>

                <div class="card-body">

                    <p>
                        To receive input from the keyboard, Java uses the
                        <code>Scanner</code> class located in the
                        <code>java.util</code> package.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter your name: ");
        String name = input.nextLine();

        System.out.println("Hello " + name);

        input.close();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Scanner Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Common Scanner Methods</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Reads</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>next()</code></td>

                                    <td>One word</td>

                                </tr>

                                <tr>

                                    <td><code>nextLine()</code></td>

                                    <td>Complete line</td>

                                </tr>

                                <tr>

                                    <td><code>nextInt()</code></td>

                                    <td>Integer value</td>

                                </tr>

                                <tr>

                                    <td><code>nextDouble()</code></td>

                                    <td>Double value</td>

                                </tr>

                                <tr>

                                    <td><code>nextFloat()</code></td>

                                    <td>Float value</td>

                                </tr>

                                <tr>

                                    <td><code>nextLong()</code></td>

                                    <td>Long integer</td>

                                </tr>

                                <tr>

                                    <td><code>nextBoolean()</code></td>

                                    <td>Boolean value</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Complete Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Complete Input Example</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter your name: ");
        String name = input.nextLine();

        System.out.print("Enter your age: ");
        int age = input.nextInt();

        System.out.print("Enter your marks: ");
        double marks = input.nextDouble();

        System.out.println();

        System.out.println("Name  : " + name);
        System.out.println("Age   : " + age);
        System.out.println("Marks : " + marks);

        input.close();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Output -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Sample Output</h3>

                </div>

                <div class="card-body">

<pre class="bg-dark text-white rounded p-3"><code>Enter your name: Ali
Enter your age: 20
Enter your marks: 89.5

Name  : Ali
Age   : 20
Marks : 89.5
</code></pre>

                </div>

            </div>

            <!-- Common Errors -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Common Beginner Mistakes</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Forgetting to import <code>java.util.Scanner</code>.</li>

                        <li>Not creating a Scanner object.</li>

                        <li>Using <code>next()</code> instead of <code>nextLine()</code> for full sentences.</li>

                        <li>Forgetting to close the Scanner using <code>input.close()</code>.</li>

                        <li>Entering text when Java expects a number.</li>

                    </ul>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-success">

                <h4>Quick Summary</h4>

                <ul class="mb-0">

                    <li><strong>print()</strong> → Prints without a new line.</li>

                    <li><strong>println()</strong> → Prints and moves to the next line.</li>

                    <li><strong>printf()</strong> → Prints formatted output.</li>

                    <li><strong>Scanner</strong> → Reads user input from the keyboard.</li>

                    <li><strong>nextInt(), nextDouble(), nextLine()</strong> → Read different types of data.</li>

                </ul>

            </div>

            <!-- Final Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Input and Output are fundamental concepts in Java programming.
                    Java uses <code>System.out.print()</code>,
                    <code>System.out.println()</code>, and
                    <code>System.out.printf()</code> to display output, while the
                    <code>Scanner</code> class is used to receive input from the user.
                    Mastering these concepts allows you to create interactive Java
                    applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"If Else",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java If Else Statements
                </h1>

                <p class="lead">
                    Decision-making statements allow a program to execute different
                    blocks of code based on whether a condition is true or false.
                    Java provides <code>if</code>, <code>if...else</code>,
                    <code>else if</code>, and nested <code>if</code> statements
                    for making decisions.
                </p>

            </div>

            <!-- What is If Else -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an If Statement?</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>if</code> statement checks a condition. If the
                        condition is <strong>true</strong>, the code inside the
                        <code>if</code> block executes. If the condition is
                        <strong>false</strong>, the block is skipped.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>if (condition) {

    // Code to execute

}
</code></pre>

                </div>

            </div>

            <!-- If Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Example: if Statement</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 20;

if (age >= 18) {

    System.out.println("You are eligible to vote.");

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>You are eligible to vote.
</code></pre>

                </div>

            </div>

            <!-- If Else -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">If...Else Statement</h3>

                </div>

                <div class="card-body">

                    <p>
                        Use <code>if...else</code> when there are two possible
                        outcomes.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>if (condition) {

    // Executes if condition is true

} else {

    // Executes if condition is false

}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 16;

if (age >= 18) {

    System.out.println("You can drive.");

} else {

    System.out.println("You cannot drive.");

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>You cannot drive.
</code></pre>

                </div>

            </div>

            <!-- Else If -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Else If Statement</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>else if</code> statement is used when multiple
                        conditions need to be checked.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int marks = 82;

if (marks >= 90) {

    System.out.println("Grade A");

} else if (marks >= 80) {

    System.out.println("Grade B");

} else if (marks >= 70) {

    System.out.println("Grade C");

} else {

    System.out.println("Fail");

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Grade B
</code></pre>

                </div>

            </div>

            <!-- Nested -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Nested If Statement</h3>

                </div>

                <div class="card-body">

                    <p>
                        A nested <code>if</code> statement means placing one
                        <code>if</code> statement inside another.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int age = 22;
boolean hasLicense = true;

if (age >= 18) {

    if (hasLicense) {

        System.out.println("You can drive.");

    } else {

        System.out.println("Get a driving license.");

    }

} else {

    System.out.println("You are under age.");

}
</code></pre>

                </div>

            </div>

            <!-- Comparison Operators -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Comparison Operators Used with If</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Operator</th>

                                    <th>Meaning</th>

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

                                    <td>a &gt; b</td>

                                </tr>

                                <tr>

                                    <td>&lt;</td>

                                    <td>Less than</td>

                                    <td>a &lt; b</td>

                                </tr>

                                <tr>

                                    <td>&gt;=</td>

                                    <td>Greater than or equal to</td>

                                    <td>a &gt;= b</td>

                                </tr>

                                <tr>

                                    <td>&lt;=</td>

                                    <td>Less than or equal to</td>

                                    <td>a &lt;= b</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Real Life -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Real-Life Example</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>double balance = 5000;

if (balance >= 1000) {

    System.out.println("Transaction Approved");

} else {

    System.out.println("Insufficient Balance");

}
</code></pre>

                </div>

            </div>

            <!-- Best Practices -->

            <div class="alert alert-success">

                <h4>Best Practices</h4>

                <ul class="mb-0">

                    <li>Keep conditions simple and readable.</li>

                    <li>Use <code>else if</code> when checking multiple conditions.</li>

                    <li>Avoid unnecessary nested <code>if</code> statements.</li>

                    <li>Use proper indentation for better readability.</li>

                    <li>Use logical operators (<code>&&</code>, <code>||</code>, <code>!</code>) when combining conditions.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    The <code>if</code>, <code>if...else</code>,
                    <code>else if</code>, and nested <code>if</code> statements
                    are the primary decision-making tools in Java. They allow
                    programs to execute different blocks of code based on
                    conditions, making applications intelligent and interactive.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Loops",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Loops
                </h1>

                <p class="lead">
                    Loops are used to execute a block of code repeatedly until a
                    specified condition becomes false. Instead of writing the same
                    code multiple times, loops make programs shorter, cleaner, and
                    more efficient.
                </p>

            </div>

            <!-- What is a Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Loop?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A loop repeatedly executes a set of statements as long as
                        the loop condition evaluates to <strong>true</strong>.
                        Java provides three main looping statements:
                    </p>

                    <ul>

                        <li><strong>for loop</strong></li>

                        <li><strong>while loop</strong></li>

                        <li><strong>do...while loop</strong></li>

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
                        The <code>for</code> loop is used when the number of
                        iterations is known.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(initialization; condition; update)
{
    // Code
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        for(int i = 1; i <= 5; i++) {

            System.out.println("Number: " + i);

        }

    }

}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Number: 1
Number: 2
Number: 3
Number: 4
Number: 5
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
                        The <code>while</code> loop executes as long as the
                        condition remains true. It is useful when the number of
                        iterations is unknown.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>while(condition)
{
    // Code
}
</code></pre>

                    <h5>Example</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int i = 1;

while(i <= 5) {

    System.out.println(i);

    i++;

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

            <!-- Do While -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">3. do...while Loop</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>do...while</code> loop executes the code at
                        least once because the condition is checked after the loop
                        body executes.
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

do {

    System.out.println(i);

    i++;

}
while(i <= 5);
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

            <!-- Enhanced For Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">4. Enhanced for Loop (for-each)</h3>

                </div>

                <div class="card-body">

                    <p>
                        The enhanced <code>for</code> loop is used to iterate
                        through arrays and collections.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String[] fruits = {"Apple", "Mango", "Orange"};

for(String fruit : fruits) {

    System.out.println(fruit);

}
</code></pre>

                    <h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Apple
Mango
Orange
</code></pre>

                </div>

            </div>

            <!-- Loop Control -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Loop Control Statements</h3>

                </div>

                <div class="card-body">

                    <h5>break Statement</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(int i = 1; i <= 10; i++) {

    if(i == 6)
        break;

    System.out.println(i);

}
</code></pre>

                    <h5 class="mt-4">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>1
2
3
4
5
</code></pre>

                    <hr>

                    <h5>continue Statement</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>for(int i = 1; i <= 5; i++) {

    if(i == 3)
        continue;

    System.out.println(i);

}
</code></pre>

                    <h5 class="mt-4">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>1
2
4
5
</code></pre>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Comparison of Loops</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Loop</th>

                                    <th>Condition Checked</th>

                                    <th>Minimum Execution</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>for</td>

                                    <td>Before execution</td>

                                    <td>0 times</td>

                                </tr>

                                <tr>

                                    <td>while</td>

                                    <td>Before execution</td>

                                    <td>0 times</td>

                                </tr>

                                <tr>

                                    <td>do...while</td>

                                    <td>After execution</td>

                                    <td>1 time</td>

                                </tr>

                                <tr>

                                    <td>for-each</td>

                                    <td>Each array element</td>

                                    <td>Depends on array size</td>

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

                    <li>Use <strong>for</strong> loops when the number of iterations is known.</li>

                    <li>Use <strong>while</strong> loops when the stopping condition is unknown.</li>

                    <li>Use <strong>do...while</strong> when the loop must execute at least once.</li>

                    <li>Use <strong>for-each</strong> for arrays and collections.</li>

                    <li>Avoid infinite loops unless intentionally required.</li>

                    <li>Use <code>break</code> and <code>continue</code> carefully.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Loops are one of the most important concepts in Java. They
                    allow repetitive execution of code, reducing duplication and
                    improving efficiency. Java provides <strong>for</strong>,
                    <strong>while</strong>, <strong>do...while</strong>, and
                    <strong>for-each</strong> loops to handle different programming
                    scenarios. Understanding when to use each loop is essential
                    for writing effective Java programs.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Methods",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Methods
                </h1>

                <p class="lead">
                    A method is a block of code that performs a specific task.
                    Instead of writing the same code repeatedly, you can place it
                    inside a method and call it whenever needed. Methods improve
                    code readability, reusability, and maintainability.
                </p>

            </div>

            <!-- What is a Method -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Method?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A method contains a set of statements that execute when
                        the method is called. Every Java application contains at
                        least one method:
                        <code>public static void main(String[] args)</code>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>returnType methodName(parameters)
{
    // Code
}
</code></pre>

                </div>

            </div>

            <!-- Parts -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Parts of a Method</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li><strong>Access Modifier</strong> (public, private, protected)</li>

                        <li><strong>Return Type</strong> (void, int, double, String, etc.)</li>

                        <li><strong>Method Name</strong></li>

                        <li><strong>Parameters</strong></li>

                        <li><strong>Method Body</strong></li>

                        <li><strong>Return Statement</strong> (optional)</li>

                    </ul>

                </div>

            </div>

            <!-- Void Method -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Method Without Return Value</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    static void welcome() {

        System.out.println("Welcome to Java!");

    }

    public static void main(String[] args) {

        welcome();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Welcome to Java!
</code></pre>

                </div>

            </div>

            <!-- Return Method -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Method with Return Value</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    static int add(int a, int b) {

        return a + b;

    }

    public static void main(String[] args) {

        int result = add(10, 20);

        System.out.println(result);

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>30
</code></pre>

                </div>

            </div>

            <!-- Parameters -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Method Parameters</h3>

                </div>

                <div class="card-body">

                    <p>
                        Parameters allow values to be passed into a method.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>static void greet(String name) {

    System.out.println("Hello " + name);

}

public static void main(String[] args) {

    greet("Ali");
    greet("Ahmed");

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello Ali
Hello Ahmed
</code></pre>

                </div>

            </div>

            <!-- Method Overloading -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Method Overloading</h3>

                </div>

                <div class="card-body">

                    <p>
                        Method overloading allows multiple methods to have the
                        same name but different parameter lists.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Main {

    static int add(int a, int b) {

        return a + b;

    }

    static double add(double a, double b) {

        return a + b;

    }

    public static void main(String[] args) {

        System.out.println(add(5, 10));
        System.out.println(add(5.5, 3.2));

    }

}
</code></pre>

                </div>

            </div>

            <!-- Built-in Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Built-in (Library) Methods</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java provides many predefined methods through its standard
                        library.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>Math.sqrt()</code></td>

                                    <td>Calculates square root.</td>

                                </tr>

                                <tr>

                                    <td><code>Math.max()</code></td>

                                    <td>Returns the larger value.</td>

                                </tr>

                                <tr>

                                    <td><code>Math.min()</code></td>

                                    <td>Returns the smaller value.</td>

                                </tr>

                                <tr>

                                    <td><code>Math.random()</code></td>

                                    <td>Generates a random number.</td>

                                </tr>

                                <tr>

                                    <td><code>String.length()</code></td>

                                    <td>Returns string length.</td>

                                </tr>

                                <tr>

                                    <td><code>String.toUpperCase()</code></td>

                                    <td>Converts text to uppercase.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

<pre class="bg-light border rounded p-3 overflow-auto"><code>System.out.println(Math.sqrt(25));
System.out.println(Math.max(15, 20));
System.out.println("java".toUpperCase());
</code></pre>

                </div>

            </div>

            <!-- Recursive -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Recursive Method</h3>

                </div>

                <div class="card-body">

                    <p>
                        A recursive method is a method that calls itself.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    static int factorial(int n) {

        if(n == 1)
            return 1;

        return n * factorial(n - 1);

    }

    public static void main(String[] args) {

        System.out.println(factorial(5));

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>120
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Methods</h4>

                <ul class="mb-0">

                    <li>Reduce code duplication.</li>

                    <li>Improve code readability.</li>

                    <li>Make programs easier to maintain.</li>

                    <li>Support code reusability.</li>

                    <li>Simplify debugging and testing.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Methods are one of the most important features of Java.
                    They organize code into reusable blocks, making programs
                    easier to read, maintain, and expand. Java supports
                    user-defined methods, built-in library methods, method
                    overloading, parameter passing, return values, and recursion,
                    all of which are fundamental concepts in Java programming.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Arrays",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Arrays
                </h1>

                <p class="lead">
                    An array is a collection of elements of the same data type
                    stored in contiguous memory locations. Arrays allow you to
                    store multiple values in a single variable instead of creating
                    many separate variables.
                </p>

            </div>

            <!-- What is an Array -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an Array?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Arrays are useful when you need to store a list of similar
                        values such as marks, ages, prices, or names. Every
                        element in an array is accessed using its index. In Java,
                        array indexing starts from <strong>0</strong>.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>dataType[] arrayName;</code></pre>

                </div>

            </div>

            <!-- Declaration -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Declaring and Initializing Arrays</h3>

                </div>

                <div class="card-body">

                    <h5>Declaration</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[] numbers;</code></pre>

                    <h5>Initialization</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>numbers = new int[5];</code></pre>

                    <h5>Declaration and Initialization Together</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[] numbers = {10, 20, 30, 40, 50};</code></pre>

                </div>

            </div>

            <!-- Access -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Accessing Array Elements</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>String[] fruits = {"Apple", "Mango", "Orange"};

System.out.println(fruits[0]);
System.out.println(fruits[1]);
System.out.println(fruits[2]);
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Apple
Mango
Orange
</code></pre>

                </div>

            </div>

            <!-- Modify -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Changing Array Elements</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>String[] fruits = {"Apple", "Mango", "Orange"};

fruits[1] = "Banana";

System.out.println(fruits[1]);
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Banana
</code></pre>

                </div>

            </div>

            <!-- Loop -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Traversing Arrays</h3>

                </div>

                <div class="card-body">

                    <h5>Using a for Loop</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[] numbers = {10, 20, 30, 40, 50};

for(int i = 0; i < numbers.length; i++) {

    System.out.println(numbers[i]);

}
</code></pre>

                    <hr>

                    <h5>Using Enhanced for Loop</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[] numbers = {10, 20, 30, 40, 50};

for(int number : numbers) {

    System.out.println(number);

}
</code></pre>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Types of Arrays</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Array Type</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Single-Dimensional Array</td>

                                    <td>Stores elements in one row.</td>

                                </tr>

                                <tr>

                                    <td>Multidimensional Array</td>

                                    <td>Stores data in rows and columns.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Multi -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Multidimensional Arrays</h3>

                </div>

                <div class="card-body">

                    <p>
                        A multidimensional array is an array of arrays. The most
                        common type is a two-dimensional (2D) array.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[][] marks = {

    {80, 85, 90},
    {70, 75, 78}

};

System.out.println(marks[0][2]);
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>90
</code></pre>

                </div>

            </div>

            <!-- Length -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Array Length</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java provides the <code>length</code> property to find the
                        number of elements in an array.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>int[] numbers = {5, 10, 15, 20};

System.out.println(numbers.length);
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>4
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Arrays</h4>

                <ul class="mb-0">

                    <li>Store multiple values using one variable.</li>

                    <li>Easy access using index numbers.</li>

                    <li>Reduce code duplication.</li>

                    <li>Easy to process using loops.</li>

                    <li>Improve program organization.</li>

                </ul>

            </div>

            <!-- Disadvantages -->

            <div class="alert alert-warning mt-4">

                <h4>Limitations of Arrays</h4>

                <ul class="mb-0">

                    <li>Array size is fixed after creation.</li>

                    <li>Can store only one type of data.</li>

                    <li>Insertion and deletion are not flexible.</li>

                    <li>Cannot grow dynamically like an ArrayList.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Arrays are one of the most commonly used data structures in
                    Java. They store multiple values of the same data type,
                    support fast access using indexes, and work efficiently with
                    loops. Java supports both single-dimensional and
                    multidimensional arrays, making them useful for solving a
                    wide variety of programming problems.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Strings",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Strings
                </h1>

                <p class="lead">
                    A String is a sequence of characters used to store text in Java.
                    Unlike primitive data types, <code>String</code> is a class in
                    the Java Standard Library. Strings are widely used for storing
                    names, messages, addresses, emails, passwords, and other textual
                    information.
                </p>

            </div>

            <!-- What is a String -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a String?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A String is an object that contains one or more characters.
                        In Java, strings are enclosed in double quotation marks
                        (<code>" "</code>).
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String name = "John";
String city = "London";
String message = "Welcome to Java";
</code></pre>

                </div>

            </div>

            <!-- Creating Strings -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Creating Strings</h3>

                </div>

                <div class="card-body">

                    <h5>Method 1: String Literal</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String language = "Java";
</code></pre>

                    <h5 class="mt-3">Method 2: Using the new Keyword</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String language = new String("Java");
</code></pre>

                </div>

            </div>

            <!-- Common Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Common String Methods</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>length()</code></td>

                                    <td>Returns the number of characters.</td>

                                </tr>

                                <tr>

                                    <td><code>charAt()</code></td>

                                    <td>Returns a character at a specific index.</td>

                                </tr>

                                <tr>

                                    <td><code>toUpperCase()</code></td>

                                    <td>Converts the string to uppercase.</td>

                                </tr>

                                <tr>

                                    <td><code>toLowerCase()</code></td>

                                    <td>Converts the string to lowercase.</td>

                                </tr>

                                <tr>

                                    <td><code>equals()</code></td>

                                    <td>Compares two strings.</td>

                                </tr>

                                <tr>

                                    <td><code>equalsIgnoreCase()</code></td>

                                    <td>Compares strings ignoring letter case.</td>

                                </tr>

                                <tr>

                                    <td><code>contains()</code></td>

                                    <td>Checks whether a string contains text.</td>

                                </tr>

                                <tr>

                                    <td><code>substring()</code></td>

                                    <td>Extracts part of a string.</td>

                                </tr>

                                <tr>

                                    <td><code>replace()</code></td>

                                    <td>Replaces characters or words.</td>

                                </tr>

                                <tr>

                                    <td><code>trim()</code></td>

                                    <td>Removes spaces from both ends.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        String name = "Programming";

        System.out.println(name.length());
        System.out.println(name.charAt(0));
        System.out.println(name.toUpperCase());
        System.out.println(name.toLowerCase());
        System.out.println(name.substring(0, 7));

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>11
P
PROGRAMMING
programming
Program
</code></pre>

                </div>

            </div>

            <!-- Concatenation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">String Concatenation</h3>

                </div>

                <div class="card-body">

                    <p>
                        Concatenation means joining two or more strings together.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String firstName = "John";
String lastName = "Smith";

String fullName = firstName + " " + lastName;

System.out.println(fullName);
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>John Smith
</code></pre>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Comparing Strings</h3>

                </div>

                <div class="card-body">

                    <p>
                        In Java, always use <code>equals()</code> instead of
                        <code>==</code> to compare string contents.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String a = "Java";
String b = "Java";

System.out.println(a.equals(b));
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>true
</code></pre>

                </div>

            </div>

            <!-- Immutable -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">String Immutability</h3>

                </div>

                <div class="card-body">

                    <p>
                        Strings in Java are <strong>immutable</strong>, meaning
                        once a String object is created, its value cannot be
                        changed. Operations like <code>replace()</code> or
                        <code>toUpperCase()</code> create a new String instead of
                        modifying the original one.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>String text = "Java";

text = text.toUpperCase();

System.out.println(text);
</code></pre>

                </div>

            </div>

            <!-- String vs StringBuilder -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">String vs StringBuilder</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>String</th>

                                    <th>StringBuilder</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Immutable</td>

                                    <td>Mutable</td>

                                </tr>

                                <tr>

                                    <td>Slower for frequent modifications</td>

                                    <td>Faster for repeated modifications</td>

                                </tr>

                                <tr>

                                    <td>Used for normal text</td>

                                    <td>Used for building large strings efficiently</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Strings</h4>

                <ul class="mb-0">

                    <li>Easy to store and manipulate text.</li>

                    <li>Provides many built-in methods.</li>

                    <li>Supports comparison and searching.</li>

                    <li>Secure because Strings are immutable.</li>

                    <li>Widely used in real-world Java applications.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Strings are one of the most frequently used classes in Java.
                    They are used to represent text and provide many built-in
                    methods for searching, comparing, modifying, and formatting
                    text. Understanding Strings is essential because almost every
                    Java application works with textual data.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Classes and Objects",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Classes and Objects
                </h1>

                <p class="lead">
                    Classes and Objects are the foundation of Object-Oriented
                    Programming (OOP) in Java. A class is a blueprint for creating
                    objects, while an object is a real-world instance of a class.
                    Almost everything in Java revolves around classes and objects.
                </p>

            </div>

            <!-- Class -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Class?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A class is a user-defined blueprint that defines the
                        properties (variables) and behaviors (methods) of an
                        object. It does not occupy memory until an object is
                        created.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class ClassName {

    // Variables

    // Methods

}
</code></pre>

                </div>

            </div>

            <!-- Object -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">What is an Object?</h3>

                </div>

                <div class="card-body">

                    <p>
                        An object is an instance of a class. When an object is
                        created, memory is allocated for the variables and methods
                        defined in the class.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>ClassName objectName = new ClassName();
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example: Creating a Class and Object</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    String name = "Ali";
    int age = 20;

    void display() {

        System.out.println("Name: " + name);
        System.out.println("Age: " + age);

    }

}

public class Main {

    public static void main(String[] args) {

        Student s1 = new Student();

        s1.display();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Name: Ali
Age: 20
</code></pre>

                </div>

            </div>

            <!-- Members -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Members of a Class</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Member</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Fields (Variables)</td>

                                    <td>Store data about an object.</td>

                                </tr>

                                <tr>

                                    <td>Methods</td>

                                    <td>Define the behavior of an object.</td>

                                </tr>

                                <tr>

                                    <td>Constructors</td>

                                    <td>Initialize objects when they are created.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Multiple Objects -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Creating Multiple Objects</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Car {

    String brand = "Toyota";

}

public class Main {

    public static void main(String[] args) {

        Car car1 = new Car();
        Car car2 = new Car();

        System.out.println(car1.brand);
        System.out.println(car2.brand);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Constructor -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Constructors</h3>

                </div>

                <div class="card-body">

                    <p>
                        A constructor is a special method that is automatically
                        called when an object is created. It is used to initialize
                        object values.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    String name;

    Student() {

        name = "John";

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student();

        System.out.println(s.name);

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>John
</code></pre>

                </div>

            </div>

            <!-- Real Life -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Real-Life Example</h3>

                </div>

                <div class="card-body">

                    <p>
                        Think of a class as a blueprint and an object as the real
                        product created from that blueprint.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Class</th>

                                    <th>Object</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Car</td>

                                    <td>Toyota Corolla</td>

                                </tr>

                                <tr>

                                    <td>Student</td>

                                    <td>Ali</td>

                                </tr>

                                <tr>

                                    <td>Book</td>

                                    <td>Java Programming Book</td>

                                </tr>

                                <tr>

                                    <td>Mobile</td>

                                    <td>Samsung Galaxy</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Classes and Objects</h4>

                <ul class="mb-0">

                    <li>Support Object-Oriented Programming (OOP).</li>

                    <li>Improve code organization.</li>

                    <li>Promote code reusability.</li>

                    <li>Make applications easier to maintain.</li>

                    <li>Model real-world entities effectively.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Classes and objects are the core concepts of Java programming.
                    A class defines the structure and behavior of objects, while
                    objects represent real-world entities created from that class.
                    Mastering classes, objects, fields, methods, and constructors
                    is essential before learning advanced OOP concepts such as
                    inheritance, polymorphism, abstraction, and encapsulation.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Constructors",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Constructors
                </h1>

                <p class="lead">
                    A constructor is a special method in Java that is automatically
                    called when an object is created. Constructors are mainly used
                    to initialize the object's data members and prepare the object
                    for use.
                </p>

            </div>

            <!-- What is Constructor -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Constructor?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A constructor has the same name as the class and does not
                        have any return type, not even <code>void</code>. It is
                        executed automatically whenever an object is created using
                        the <code>new</code> keyword.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class ClassName {

    ClassName() {

        // Initialization code

    }

}
</code></pre>

                </div>

            </div>

            <!-- Default Constructor -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Default Constructor</h3>

                </div>

                <div class="card-body">

                    <p>
                        A default constructor is a constructor that does not accept
                        any parameters. If you do not create any constructor, Java
                        automatically provides a default constructor.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    Student() {

        System.out.println("Object Created");

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Object Created
</code></pre>

                </div>

            </div>

            <!-- Parameterized Constructor -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Parameterized Constructor</h3>

                </div>

                <div class="card-body">

                    <p>
                        A parameterized constructor accepts parameters and allows
                        different values to be assigned when objects are created.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    String name;
    int age;

    Student(String n, int a) {

        name = n;
        age = a;

    }

    void display() {

        System.out.println(name + " " + age);

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student("Ali", 20);

        s.display();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Ali 20
</code></pre>

                </div>

            </div>

            <!-- Constructor Overloading -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Constructor Overloading</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java allows multiple constructors in the same class as
                        long as they have different parameter lists.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    Student() {

        System.out.println("Default Constructor");

    }

    Student(String name) {

        System.out.println(name);

    }

}

public class Main {

    public static void main(String[] args) {

        Student s1 = new Student();

        Student s2 = new Student("John");

    }

}
</code></pre>

                </div>

            </div>

            <!-- this Keyword -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Using the this Keyword</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>this</code> keyword refers to the current object.
                        It is commonly used to distinguish instance variables from
                        constructor parameters.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    String name;

    Student(String name) {

        this.name = name;

    }

    void display() {

        System.out.println(name);

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student("Ahmed");

        s.display();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Constructor Chaining -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Constructor Chaining</h3>

                </div>

                <div class="card-body">

                    <p>
                        Constructor chaining means calling one constructor from
                        another constructor using the <code>this()</code> keyword.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    Student() {

        this("Ali");

    }

    Student(String name) {

        System.out.println(name);

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Ali
</code></pre>

                </div>

            </div>

            <!-- Constructor vs Method -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Constructor vs Method</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Constructor</th>

                                    <th>Method</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Same name as class</td>

                                    <td>Can have any valid name</td>

                                </tr>

                                <tr>

                                    <td>No return type</td>

                                    <td>Has a return type or <code>void</code></td>

                                </tr>

                                <tr>

                                    <td>Called automatically</td>

                                    <td>Called explicitly</td>

                                </tr>

                                <tr>

                                    <td>Initializes objects</td>

                                    <td>Performs specific tasks</td>

                                </tr>

                                <tr>

                                    <td>Runs once during object creation</td>

                                    <td>Can be called multiple times</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Constructors</h4>

                <ul class="mb-0">

                    <li>Automatically initialize object data.</li>

                    <li>Reduce repetitive initialization code.</li>

                    <li>Support constructor overloading.</li>

                    <li>Improve object creation and readability.</li>

                    <li>Ensure objects are created with valid values.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Constructors are an essential part of Java programming. They
                    initialize objects when they are created and help ensure that
                    every object starts with valid data. Java supports default,
                    parameterized, overloaded constructors and constructor
                    chaining, making object creation flexible and efficient.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Inheritance",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Inheritance
                </h1>

                <p class="lead">
                    Inheritance is one of the most important concepts of
                    Object-Oriented Programming (OOP). It allows one class to
                    inherit the properties (fields) and behaviors (methods) of
                    another class. Inheritance promotes code reusability,
                    extensibility, and better program organization.
                </p>

            </div>

            <!-- What is Inheritance -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Inheritance?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Inheritance is the process by which one class acquires the
                        properties and methods of another class.
                    </p>

                    <p>
                        The existing class is called the
                        <strong>Parent Class</strong>, <strong>Base Class</strong>,
                        or <strong>Superclass</strong>. The new class is called
                        the <strong>Child Class</strong>, <strong>Derived
                        Class</strong>, or <strong>Subclass</strong>.
                    </p>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Syntax</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Parent {

    // Parent members

}

class Child extends Parent {

    // Child members

}
</code></pre>

                    <p>
                        The <code>extends</code> keyword is used to inherit one
                        class from another.
                    </p>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example of Inheritance</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Animal {

    void sound() {

        System.out.println("Animals make sounds.");

    }

}

class Dog extends Animal {

    void bark() {

        System.out.println("Dog barks.");

    }

}

public class Main {

    public static void main(String[] args) {

        Dog d = new Dog();

        d.sound();
        d.bark();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Animals make sounds.
Dog barks.
</code></pre>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Types of Inheritance in Java</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Type</th>

                                    <th>Supported</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Single Inheritance</td>

                                    <td>✔ Yes</td>

                                </tr>

                                <tr>

                                    <td>Multilevel Inheritance</td>

                                    <td>✔ Yes</td>

                                </tr>

                                <tr>

                                    <td>Hierarchical Inheritance</td>

                                    <td>✔ Yes</td>

                                </tr>

                                <tr>

                                    <td>Multiple Inheritance (Classes)</td>

                                    <td>❌ No</td>

                                </tr>

                                <tr>

                                    <td>Multiple Inheritance (Interfaces)</td>

                                    <td>✔ Yes</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Multilevel -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Multilevel Inheritance Example</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Animal {

    void eat() {

        System.out.println("Eating");

    }

}

class Dog extends Animal {

    void bark() {

        System.out.println("Barking");

    }

}

class Puppy extends Dog {

    void weep() {

        System.out.println("Weeping");

    }

}

public class Main {

    public static void main(String[] args) {

        Puppy p = new Puppy();

        p.eat();
        p.bark();
        p.weep();

    }

}
</code></pre>

                </div>

            </div>

            <!-- super -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">The super Keyword</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>super</code> keyword refers to the parent class.
                        It can be used to call parent constructors and methods.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Animal {

    void display() {

        System.out.println("Animal Class");

    }

}

class Dog extends Animal {

    void show() {

        super.display();

        System.out.println("Dog Class");

    }

}

public class Main {

    public static void main(String[] args) {

        Dog d = new Dog();

        d.show();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Animal Class
Dog Class
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Advantages of Inheritance</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Promotes code reusability.</li>

                        <li>Reduces code duplication.</li>

                        <li>Makes programs easier to maintain.</li>

                        <li>Supports method overriding.</li>

                        <li>Provides the foundation for polymorphism.</li>

                    </ul>

                </div>

            </div>

            <!-- Real-Life Example -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <div class="table-responsive">

                    <table class="table table-bordered table-striped mb-0">

                        <thead class="table-light">

                            <tr>

                                <th>Parent Class</th>

                                <th>Child Class</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Vehicle</td>

                                <td>Car</td>

                            </tr>

                            <tr>

                                <td>Animal</td>

                                <td>Dog</td>

                            </tr>

                            <tr>

                                <td>Person</td>

                                <td>Student</td>

                            </tr>

                            <tr>

                                <td>Employee</td>

                                <td>Manager</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Inheritance is a powerful feature of Java that allows one
                    class to inherit the members of another class using the
                    <code>extends</code> keyword. It improves code reuse,
                    simplifies maintenance, and is one of the four fundamental
                    principles of Object-Oriented Programming. Java supports
                    single, multilevel, and hierarchical inheritance, while
                    multiple inheritance is achieved through interfaces.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Polymorphism",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Polymorphism
                </h1>

                <p class="lead">
                    Polymorphism is one of the four fundamental principles of
                    Object-Oriented Programming (OOP). The word
                    <strong>Polymorphism</strong> means
                    <strong>"many forms"</strong>. It allows one method or object
                    to behave differently depending on the situation.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Polymorphism?</h3>

                </div>

                <div class="card-body">

                    <p>
                        In Java, polymorphism allows a child class to provide its
                        own implementation of a method that already exists in the
                        parent class. It also allows methods with the same name
                        but different parameters.
                    </p>

                    <p>
                        Java supports two types of polymorphism:
                    </p>

                    <ul>

                        <li><strong>Compile-Time Polymorphism (Method Overloading)</strong></li>

                        <li><strong>Run-Time Polymorphism (Method Overriding)</strong></li>

                    </ul>

                </div>

            </div>

            <!-- Compile Time -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">1. Compile-Time Polymorphism (Method Overloading)</h3>

                </div>

                <div class="card-body">

                    <p>
                        Method overloading occurs when multiple methods have the
                        same name but different parameter lists.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Calculator {

    int add(int a, int b) {

        return a + b;

    }

    double add(double a, double b) {

        return a + b;

    }

}

public class Main {

    public static void main(String[] args) {

        Calculator c = new Calculator();

        System.out.println(c.add(10, 20));
        System.out.println(c.add(5.5, 4.5));

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>30
10.0
</code></pre>

                </div>

            </div>

            <!-- Runtime -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">2. Run-Time Polymorphism (Method Overriding)</h3>

                </div>

                <div class="card-body">

                    <p>
                        Method overriding occurs when a child class provides its
                        own implementation of a method already defined in the
                        parent class.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Animal {

    void sound() {

        System.out.println("Animal makes a sound");

    }

}

class Dog extends Animal {

    @Override
    void sound() {

        System.out.println("Dog barks");

    }

}

public class Main {

    public static void main(String[] args) {

        Animal obj = new Dog();

        obj.sound();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Dog barks
</code></pre>

                </div>

            </div>

            <!-- Dynamic Binding -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Dynamic Method Dispatch</h3>

                </div>

                <div class="card-body">

                    <p>
                        Dynamic Method Dispatch is Java's mechanism for
                        implementing run-time polymorphism. The method that gets
                        executed is determined at run time based on the actual
                        object.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>Animal a;

a = new Dog();

a.sound();
</code></pre>

                </div>

            </div>

            <!-- Rules -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Rules for Method Overriding</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>The parent and child methods must have the same name.</li>

                        <li>The parameter list must be identical.</li>

                        <li>The return type should be the same or compatible.</li>

                        <li>The overriding method cannot reduce the access level.</li>

                        <li>Use the <code>@Override</code> annotation for better readability.</li>

                    </ul>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Method Overloading vs Method Overriding</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method Overloading</th>

                                    <th>Method Overriding</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Compile-Time Polymorphism</td>

                                    <td>Run-Time Polymorphism</td>

                                </tr>

                                <tr>

                                    <td>Same method name</td>

                                    <td>Same method name</td>

                                </tr>

                                <tr>

                                    <td>Different parameters</td>

                                    <td>Same parameters</td>

                                </tr>

                                <tr>

                                    <td>Same class</td>

                                    <td>Parent and child classes</td>

                                </tr>

                                <tr>

                                    <td>No inheritance required</td>

                                    <td>Requires inheritance</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Advantages of Polymorphism</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Improves code flexibility.</li>

                        <li>Supports code reusability.</li>

                        <li>Reduces code complexity.</li>

                        <li>Makes applications easier to maintain.</li>

                        <li>Supports dynamic method execution.</li>

                    </ul>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Consider a class named <strong>Animal</strong> with a
                    <code>sound()</code> method. Different animals make different
                    sounds:
                </p>

                <ul class="mb-0">

                    <li>Dog → Bark</li>

                    <li>Cat → Meow</li>

                    <li>Cow → Moo</li>

                    <li>Lion → Roar</li>

                </ul>

                <p class="mt-3 mb-0">
                    Although each object uses the same
                    <code>sound()</code> method, the output changes depending on
                    the object's type. This is polymorphism.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Polymorphism is one of Java's most powerful OOP features. It
                    allows the same method name to perform different tasks through
                    method overloading and method overriding. Polymorphism makes
                    Java programs more flexible, reusable, scalable, and easier
                    to maintain, making it an essential concept for every Java
                    developer.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Abstraction",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Abstraction
                </h1>

                <p class="lead">
                    Abstraction is one of the four fundamental principles of
                    Object-Oriented Programming (OOP). It means hiding the
                    implementation details and showing only the essential
                    functionality to the user. Abstraction helps make programs
                    simpler, more secure, and easier to maintain.
                </p>

            </div>

            <!-- What is Abstraction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Abstraction?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Abstraction allows programmers to focus on
                        <strong>what an object does</strong> rather than
                        <strong>how it does it</strong>. Users interact with
                        methods without knowing the internal implementation.
                    </p>

                    <p>
                        In Java, abstraction is achieved using:
                    </p>

                    <ul>

                        <li><strong>Abstract Classes</strong></li>

                        <li><strong>Interfaces</strong></li>

                    </ul>

                </div>

            </div>

            <!-- Abstract Class -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Abstract Class</h3>

                </div>

                <div class="card-body">

                    <p>
                        An abstract class is declared using the
                        <code>abstract</code> keyword. It cannot be instantiated
                        directly and may contain both abstract and normal methods.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>abstract class Animal {

    abstract void sound();

}
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example of Abstract Class</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>abstract class Animal {

    abstract void sound();

    void sleep() {

        System.out.println("Animal is sleeping");

    }

}

class Dog extends Animal {

    void sound() {

        System.out.println("Dog barks");

    }

}

public class Main {

    public static void main(String[] args) {

        Dog d = new Dog();

        d.sound();
        d.sleep();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Dog barks
Animal is sleeping
</code></pre>

                </div>

            </div>

            <!-- Interface -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        An interface is a blueprint of a class. It contains
                        abstract methods that must be implemented by the class
                        using the <code>implements</code> keyword.
                    </p>

                    <h5>Syntax</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface Vehicle {

    void start();

}
</code></pre>

                </div>

            </div>

            <!-- Interface Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Example of Interface</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface Vehicle {

    void start();

}

class Car implements Vehicle {

    public void start() {

        System.out.println("Car Started");

    }

}

public class Main {

    public static void main(String[] args) {

        Car c = new Car();

        c.start();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Car Started
</code></pre>

                </div>

            </div>

            <!-- Abstract vs Interface -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Abstract Class vs Interface</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Abstract Class</th>

                                    <th>Interface</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Uses <code>extends</code></td>

                                    <td>Uses <code>implements</code></td>

                                </tr>

                                <tr>

                                    <td>Can contain abstract and normal methods</td>

                                    <td>Mainly contains abstract methods</td>

                                </tr>

                                <tr>

                                    <td>Can have constructors</td>

                                    <td>Cannot have constructors</td>

                                </tr>

                                <tr>

                                    <td>Supports single inheritance</td>

                                    <td>Supports multiple inheritance</td>

                                </tr>

                                <tr>

                                    <td>Can contain instance variables</td>

                                    <td>Variables are public, static and final</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Real Life -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Real-Life Example</h3>

                </div>

                <div class="card-body">

                    <p>
                        Consider a car. A driver knows how to use the steering
                        wheel, accelerator, and brakes, but does not need to know
                        how the engine works internally. This is abstraction:
                        exposing only the necessary functionality while hiding
                        the implementation.
                    </p>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Abstraction</h4>

                <ul class="mb-0">

                    <li>Hides unnecessary implementation details.</li>

                    <li>Improves code security.</li>

                    <li>Makes programs easier to maintain.</li>

                    <li>Supports code reusability.</li>

                    <li>Reduces program complexity.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Abstraction is a key concept of Object-Oriented Programming
                    that hides implementation details and exposes only the
                    essential features of an object. Java provides abstraction
                    through abstract classes and interfaces. Mastering
                    abstraction helps developers write clean, secure, reusable,
                    and maintainable applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Encapsulation",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Encapsulation
                </h1>

                <p class="lead">
                    Encapsulation is one of the four fundamental principles of
                    Object-Oriented Programming (OOP). It is the process of
                    wrapping data (variables) and methods (functions) into a
                    single unit called a class while restricting direct access to
                    the data. This helps protect the object's state and improves
                    security.
                </p>

            </div>

            <!-- What is Encapsulation -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is Encapsulation?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Encapsulation means hiding the internal data of an object
                        and allowing access to it only through public methods.
                        This is usually achieved by:
                    </p>

                    <ul>

                        <li>Declaring variables as <code>private</code>.</li>

                        <li>Providing public <strong>getter</strong> and
                        <strong>setter</strong> methods.</li>

                    </ul>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Basic Syntax</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    private String name;

    public void setName(String name) {

        this.name = name;

    }

    public String getName() {

        return name;

    }

}
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    private String name;
    private int age;

    public void setName(String name) {

        this.name = name;

    }

    public String getName() {

        return name;

    }

    public void setAge(int age) {

        this.age = age;

    }

    public int getAge() {

        return age;

    }

}

public class Main {

    public static void main(String[] args) {

        Student s = new Student();

        s.setName("Ali");
        s.setAge(20);

        System.out.println("Name: " + s.getName());
        System.out.println("Age: " + s.getAge());

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Name: Ali
Age: 20
</code></pre>

                </div>

            </div>

            <!-- Getters and Setters -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Getter and Setter Methods</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Purpose</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>getVariable()</code></td>

                                    <td>Returns the value of a private variable.</td>

                                </tr>

                                <tr>

                                    <td><code>setVariable()</code></td>

                                    <td>Updates the value of a private variable.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Access Modifiers -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Access Modifiers</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Modifier</th>

                                    <th>Access Level</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>private</td>

                                    <td>Accessible only within the same class.</td>

                                </tr>

                                <tr>

                                    <td>default</td>

                                    <td>Accessible within the same package.</td>

                                </tr>

                                <tr>

                                    <td>protected</td>

                                    <td>Accessible within the package and subclasses.</td>

                                </tr>

                                <tr>

                                    <td>public</td>

                                    <td>Accessible from anywhere.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Why -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Why Use Encapsulation?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Protects object data from unauthorized access.</li>

                        <li>Prevents accidental modification of variables.</li>

                        <li>Allows validation before updating data.</li>

                        <li>Improves security and maintainability.</li>

                        <li>Makes code easier to manage.</li>

                    </ul>

                </div>

            </div>

            <!-- Validation Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Validation Using Setter Methods</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Student {

    private int age;

    public void setAge(int age) {

        if(age > 0) {

            this.age = age;

        }

    }

    public int getAge() {

        return age;

    }

}
</code></pre>

                    <p>
                        Here, invalid values cannot be assigned because the setter
                        method checks the data before storing it.
                    </p>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Think of an ATM machine. You cannot directly access the money
                    stored inside the machine. Instead, you interact with it using
                    buttons, a PIN, and banking operations. The internal data is
                    hidden, while only the necessary operations are exposed. This
                    is a real-world example of encapsulation.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Encapsulation is the practice of hiding an object's internal
                    data and controlling access through public methods. It is
                    achieved using private variables and getter/setter methods.
                    Encapsulation improves security, protects data integrity,
                    supports validation, and makes Java applications more robust
                    and maintainable.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Interfaces",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Interfaces
                </h1>

                <p class="lead">
                    An <strong>Interface</strong> in Java is a blueprint of a class.
                    It defines a set of methods that a class must implement.
                    Interfaces are mainly used to achieve <strong>abstraction</strong>
                    and <strong>multiple inheritance</strong> in Java.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an Interface?</h3>

                </div>

                <div class="card-body">

                    <p>
                        An interface contains method declarations that are
                        implemented by other classes. A class uses the
                        <code>implements</code> keyword to implement an interface.
                    </p>

                    <p>
                        Unlike classes, an interface cannot be instantiated
                        directly.
                    </p>

                </div>

            </div>

            <!-- Syntax -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Syntax</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface InterfaceName {

    void display();

}

class MyClass implements InterfaceName {

    public void display() {

        System.out.println("Hello Java");

    }

}
</code></pre>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface Animal {

    void sound();

}

class Dog implements Animal {

    public void sound() {

        System.out.println("Dog barks");

    }

}

public class Main {

    public static void main(String[] args) {

        Dog d = new Dog();

        d.sound();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Dog barks
</code></pre>

                </div>

            </div>

            <!-- Multiple Interfaces -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Multiple Interface Implementation</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java does not support multiple inheritance through
                        classes, but it supports multiple inheritance through
                        interfaces.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface Printer {

    void print();

}

interface Scanner {

    void scan();

}

class Machine implements Printer, Scanner {

    public void print() {

        System.out.println("Printing...");

    }

    public void scan() {

        System.out.println("Scanning...");

    }

}

public class Main {

    public static void main(String[] args) {

        Machine m = new Machine();

        m.print();
        m.scan();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Interface vs Abstract -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Interface vs Abstract Class</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Interface</th>

                                    <th>Abstract Class</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Implemented using <code>implements</code></td>

                                    <td>Inherited using <code>extends</code></td>

                                </tr>

                                <tr>

                                    <td>Supports multiple inheritance</td>

                                    <td>Supports single inheritance</td>

                                </tr>

                                <tr>

                                    <td>No constructors</td>

                                    <td>Can have constructors</td>

                                </tr>

                                <tr>

                                    <td>Methods are public by default</td>

                                    <td>Methods can have any access modifier</td>

                                </tr>

                                <tr>

                                    <td>Variables are <code>public static final</code></td>

                                    <td>Can contain instance variables</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Default and Static Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Default and Static Methods (Java 8+)</h3>

                </div>

                <div class="card-body">

                    <p>
                        Since Java 8, interfaces can contain
                        <strong>default</strong> and <strong>static</strong>
                        methods with implementations.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>interface Demo {

    default void show() {

        System.out.println("Default Method");

    }

    static void display() {

        System.out.println("Static Method");

    }

}
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Advantages of Interfaces</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Achieves abstraction.</li>

                        <li>Supports multiple inheritance.</li>

                        <li>Promotes loose coupling between classes.</li>

                        <li>Improves code flexibility and scalability.</li>

                        <li>Makes applications easier to maintain and extend.</li>

                    </ul>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Consider a USB port on a computer. Any USB device such as a
                    keyboard, mouse, printer, or flash drive follows the same
                    interface standard. Each device works differently internally,
                    but all communicate with the computer through the same
                    interface.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Interfaces are an essential part of Java's Object-Oriented
                    Programming model. They provide abstraction, support multiple
                    inheritance, and define a common contract that implementing
                    classes must follow. Interfaces make Java applications more
                    modular, reusable, and easier to maintain.
                </p>

            </div>

        </div>

    </div>

</div>
`
},




{
title:"Packages",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Packages
                </h1>

                <p class="lead">
                    A <strong>Package</strong> in Java is a collection of related
                    classes, interfaces, enums, and sub-packages. Packages help
                    organize Java programs, avoid naming conflicts, improve code
                    reusability, and make applications easier to maintain.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Package?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A package works like a folder in an operating system. It
                        groups related Java files together so they can be managed
                        more efficiently.
                    </p>

                    <p>
                        Java provides two types of packages:
                    </p>

                    <ul>

                        <li><strong>Built-in Packages</strong> (Java API Packages)</li>

                        <li><strong>User-Defined Packages</strong></li>

                    </ul>

                </div>

            </div>

            <!-- Built-in Packages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Built-in Packages</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java includes many built-in packages that provide
                        ready-made classes and methods.
                    </p>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Package</th>

                                    <th>Purpose</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>java.lang</code></td>

                                    <td>Core classes like String, Math, System, Object.</td>

                                </tr>

                                <tr>

                                    <td><code>java.util</code></td>

                                    <td>Collections, Scanner, Date, Random.</td>

                                </tr>

                                <tr>

                                    <td><code>java.io</code></td>

                                    <td>File handling and input/output classes.</td>

                                </tr>

                                <tr>

                                    <td><code>java.net</code></td>

                                    <td>Networking classes.</td>

                                </tr>

                                <tr>

                                    <td><code>java.sql</code></td>

                                    <td>Database connectivity (JDBC).</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Import -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Importing Packages</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>import</code> keyword is used to access classes
                        from another package.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter your name: ");

        String name = input.nextLine();

        System.out.println(name);

    }

}
</code></pre>

                </div>

            </div>

            <!-- User Defined -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Creating a User-Defined Package</h3>

                </div>

                <div class="card-body">

                    <h5>Step 1: Create the Package</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>package mypackage;

public class Student {

    public void display() {

        System.out.println("Welcome to Java");

    }

}
</code></pre>

                    <h5 class="mt-4">Step 2: Use the Package</h5>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import mypackage.Student;

public class Main {

    public static void main(String[] args) {

        Student s = new Student();

        s.display();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Advantages of Packages</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Organize related classes together.</li>

                        <li>Avoid class name conflicts.</li>

                        <li>Improve code readability.</li>

                        <li>Increase code reusability.</li>

                        <li>Provide better access control.</li>

                        <li>Make large projects easier to maintain.</li>

                    </ul>

                </div>

            </div>

            <!-- Common Packages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Commonly Used Java Packages</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Package</th>

                                    <th>Common Classes</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>java.lang</td>

                                    <td>String, Math, System, Object</td>

                                </tr>

                                <tr>

                                    <td>java.util</td>

                                    <td>Scanner, ArrayList, HashMap, Random</td>

                                </tr>

                                <tr>

                                    <td>java.io</td>

                                    <td>File, FileReader, FileWriter, BufferedReader</td>

                                </tr>

                                <tr>

                                    <td>java.time</td>

                                    <td>LocalDate, LocalTime, LocalDateTime</td>

                                </tr>

                                <tr>

                                    <td>java.sql</td>

                                    <td>Connection, Statement, ResultSet</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Imagine a library where books are organized into different
                    sections such as Science, Mathematics, Literature, and
                    History. Finding a book becomes much easier because each book
                    belongs to a specific category. Java packages organize classes
                    in the same way, making programs cleaner and easier to
                    navigate.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Packages are an essential feature of Java that help organize
                    related classes and interfaces into logical groups. They
                    improve code organization, prevent naming conflicts, provide
                    better access control, and simplify the development of large
                    applications. Every professional Java project uses packages
                    extensively.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Exception Handling",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Exception Handling
                </h1>

                <p class="lead">
                    Exception Handling is a mechanism in Java used to handle
                    runtime errors gracefully. Instead of terminating the program,
                    Java allows developers to catch and handle exceptions so the
                    application can continue running smoothly.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is an Exception?</h3>

                </div>

                <div class="card-body">

                    <p>
                        An <strong>exception</strong> is an unexpected event that
                        occurs during program execution and disrupts the normal
                        flow of the program.
                    </p>

                    <p>Examples include:</p>

                    <ul>

                        <li>Dividing a number by zero.</li>

                        <li>Accessing an invalid array index.</li>

                        <li>Opening a file that does not exist.</li>

                        <li>Using a null object reference.</li>

                    </ul>

                </div>

            </div>

            <!-- Types -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Types of Exceptions</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Type</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Checked Exception</td>

                                    <td>Checked by the compiler (e.g., IOException).</td>

                                </tr>

                                <tr>

                                    <td>Unchecked Exception</td>

                                    <td>Occurs during runtime (e.g., ArithmeticException).</td>

                                </tr>

                                <tr>

                                    <td>Error</td>

                                    <td>Serious system-level problems (e.g., OutOfMemoryError).</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- try-catch -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">The try-catch Block</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>try</code> block contains code that may throw an
                        exception, while the <code>catch</code> block handles the
                        exception.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        try {

            int result = 10 / 0;

            System.out.println(result);

        }
        catch (ArithmeticException e) {

            System.out.println("Cannot divide by zero.");

        }

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Cannot divide by zero.
</code></pre>

                </div>

            </div>

            <!-- finally -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">The finally Block</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>finally</code> block is always executed,
                        regardless of whether an exception occurs or not. It is
                        commonly used to close files, database connections, and
                        release resources.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>try {

    System.out.println("Inside Try");

}
catch(Exception e) {

    System.out.println("Exception");

}
finally {

    System.out.println("Finally Block");

}
</code></pre>

                </div>

            </div>

            <!-- throw -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">throw Keyword</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>throw</code> keyword is used to manually create
                        and throw an exception.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>public class Main {

    public static void main(String[] args) {

        throw new ArithmeticException("Invalid Operation");

    }

}
</code></pre>

                </div>

            </div>

            <!-- throws -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">throws Keyword</h3>

                </div>

                <div class="card-body">

                    <p>
                        The <code>throws</code> keyword declares that a method may
                        throw one or more exceptions. The caller of the method is
                        responsible for handling them.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.IOException;

class Demo {

    void readFile() throws IOException {

        // File reading code

    }

}
</code></pre>

                </div>

            </div>

            <!-- Common Exceptions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Common Java Exceptions</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Exception</th>

                                    <th>Cause</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>ArithmeticException</td>

                                    <td>Division by zero.</td>

                                </tr>

                                <tr>

                                    <td>NullPointerException</td>

                                    <td>Using a null object.</td>

                                </tr>

                                <tr>

                                    <td>ArrayIndexOutOfBoundsException</td>

                                    <td>Invalid array index.</td>

                                </tr>

                                <tr>

                                    <td>NumberFormatException</td>

                                    <td>Invalid number conversion.</td>

                                </tr>

                                <tr>

                                    <td>IOException</td>

                                    <td>Input/output operations.</td>

                                </tr>

                                <tr>

                                    <td>FileNotFoundException</td>

                                    <td>File does not exist.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Exception Handling</h4>

                <ul class="mb-0">

                    <li>Prevents unexpected program termination.</li>

                    <li>Improves application reliability.</li>

                    <li>Makes debugging easier.</li>

                    <li>Separates error-handling code from normal code.</li>

                    <li>Provides meaningful error messages to users.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Exception Handling is an essential feature of Java that
                    allows developers to detect, handle, and recover from runtime
                    errors. Using <code>try</code>, <code>catch</code>,
                    <code>finally</code>, <code>throw</code>, and
                    <code>throws</code>, developers can build robust,
                    maintainable, and user-friendly applications that continue to
                    operate even when unexpected errors occur.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Collections Framework",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Collections Framework
                </h1>

                <p class="lead">
                    The <strong>Java Collections Framework (JCF)</strong> is a
                    unified architecture for storing, organizing, and manipulating
                    groups of objects. It provides ready-made classes and
                    interfaces that make it easy to work with collections of data
                    such as lists, sets, queues, and maps.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is the Collections Framework?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Before the Collections Framework, programmers had to
                        create their own data structures. Java Collections
                        provides efficient and reusable classes for storing and
                        managing data.
                    </p>

                    <p>
                        The framework contains:
                    </p>

                    <ul>

                        <li>Interfaces</li>

                        <li>Classes</li>

                        <li>Algorithms</li>

                        <li>Iterators</li>

                    </ul>

                </div>

            </div>

            <!-- Hierarchy -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Collections Hierarchy</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>Iterable
    |
Collection
    |
------------------------------------------------
|              |               |
List          Set            Queue
|
ArrayList
LinkedList
Vector

Map (Separate Interface)
|
HashMap
LinkedHashMap
TreeMap
Hashtable
</code></pre>

                </div>

            </div>

            <!-- List -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">1. List Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>List</strong> stores ordered elements and allows
                        duplicate values.
                    </p>

                    <h5>Common List Classes</h5>

                    <ul>

                        <li>ArrayList</li>

                        <li>LinkedList</li>

                        <li>Vector</li>

                    </ul>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.ArrayList;

public class Main {

    public static void main(String[] args) {

        ArrayList<String> fruits = new ArrayList<>();

        fruits.add("Apple");
        fruits.add("Mango");
        fruits.add("Orange");

        System.out.println(fruits);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Set -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">2. Set Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>Set</strong> stores unique elements. Duplicate
                        values are not allowed.
                    </p>

                    <h5>Common Set Classes</h5>

                    <ul>

                        <li>HashSet</li>

                        <li>LinkedHashSet</li>

                        <li>TreeSet</li>

                    </ul>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.HashSet;

public class Main {

    public static void main(String[] args) {

        HashSet<String> names = new HashSet<>();

        names.add("Ali");
        names.add("Ahmed");
        names.add("Ali");

        System.out.println(names);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Queue -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">3. Queue Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>Queue</strong> follows the
                        <strong>FIFO (First In, First Out)</strong> principle.
                    </p>

                    <h5>Common Queue Classes</h5>

                    <ul>

                        <li>PriorityQueue</li>

                        <li>LinkedList</li>

                        <li>ArrayDeque</li>

                    </ul>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.LinkedList;
import java.util.Queue;

public class Main {

    public static void main(String[] args) {

        Queue<Integer> q = new LinkedList<>();

        q.add(10);
        q.add(20);
        q.add(30);

        System.out.println(q);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Map -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">4. Map Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>Map</strong> stores data as
                        <strong>key-value pairs</strong>. Keys must be unique.
                    </p>

                    <h5>Common Map Classes</h5>

                    <ul>

                        <li>HashMap</li>

                        <li>LinkedHashMap</li>

                        <li>TreeMap</li>

                        <li>Hashtable</li>

                    </ul>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.HashMap;

public class Main {

    public static void main(String[] args) {

        HashMap<Integer, String> students = new HashMap<>();

        students.put(1, "Ali");
        students.put(2, "Ahmed");
        students.put(3, "John");

        System.out.println(students);

    }

}
</code></pre>

                </div>

            </div>

            <!-- Comparison -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Collections Comparison</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Collection</th>

                                    <th>Duplicates</th>

                                    <th>Ordered</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>ArrayList</td>

                                    <td>✔ Yes</td>

                                    <td>✔ Yes</td>

                                </tr>

                                <tr>

                                    <td>LinkedList</td>

                                    <td>✔ Yes</td>

                                    <td>✔ Yes</td>

                                </tr>

                                <tr>

                                    <td>HashSet</td>

                                    <td>❌ No</td>

                                    <td>❌ No</td>

                                </tr>

                                <tr>

                                    <td>TreeSet</td>

                                    <td>❌ No</td>

                                    <td>✔ Sorted</td>

                                </tr>

                                <tr>

                                    <td>HashMap</td>

                                    <td>Keys ❌ / Values ✔</td>

                                    <td>❌ No</td>

                                </tr>

                                <tr>

                                    <td>TreeMap</td>

                                    <td>Keys ❌ / Values ✔</td>

                                    <td>✔ Sorted</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Iterator -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Iterator</h3>

                </div>

                <div class="card-body">

                    <p>
                        An <code>Iterator</code> is used to traverse the elements
                        of a collection one by one.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.util.ArrayList;
import java.util.Iterator;

ArrayList<String> list = new ArrayList<>();

list.add("Java");
list.add("Python");
list.add("C++");

Iterator<String> it = list.iterator();

while(it.hasNext()) {

    System.out.println(it.next());

}
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of Collections Framework</h4>

                <ul class="mb-0">

                    <li>Provides ready-made data structures.</li>

                    <li>Reduces programming effort.</li>

                    <li>Improves code reusability.</li>

                    <li>Offers efficient searching and sorting.</li>

                    <li>Supports dynamic data storage.</li>

                    <li>Easy to maintain and extend applications.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    The Java Collections Framework is one of the most important
                    parts of Java programming. It provides powerful interfaces
                    such as <strong>List</strong>, <strong>Set</strong>,
                    <strong>Queue</strong>, and <strong>Map</strong>, along with
                    many useful classes like ArrayList, HashSet, LinkedList, and
                    HashMap. Mastering collections is essential for building
                    efficient, scalable, and professional Java applications.
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

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java File Handling
                </h1>

                <p class="lead">
                    File Handling in Java allows programs to create, read, write,
                    update, and delete files stored on a computer. It is commonly
                    used for saving application data, reading configuration files,
                    generating reports, and managing user information.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is File Handling?</h3>

                </div>

                <div class="card-body">

                    <p>
                        Java provides the <code>java.io</code> and
                        <code>java.nio.file</code> packages for working with files.
                        The <code>File</code> class represents file and directory
                        pathnames, while classes such as
                        <code>FileReader</code>, <code>FileWriter</code>,
                        <code>BufferedReader</code>, and
                        <code>BufferedWriter</code> are used to read and write
                        file data.
                    </p>

                </div>

            </div>

            <!-- Create File -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Creating a File</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.File;
import java.io.IOException;

public class Main {

    public static void main(String[] args) {

        try {

            File file = new File("student.txt");

            if(file.createNewFile()) {

                System.out.println("File Created Successfully.");

            }
            else {

                System.out.println("File Already Exists.");

            }

        }
        catch(IOException e) {

            System.out.println(e);

        }

    }

}
</code></pre>

                </div>

            </div>

            <!-- Write -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Writing to a File</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.FileWriter;
import java.io.IOException;

public class Main {

    public static void main(String[] args) {

        try {

            FileWriter writer = new FileWriter("student.txt");

            writer.write("Welcome to Java File Handling.");

            writer.close();

            System.out.println("Data Written Successfully.");

        }
        catch(IOException e) {

            System.out.println(e);

        }

    }

}
</code></pre>

                </div>

            </div>

            <!-- Read -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Reading from a File</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.File;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        try {

            File file = new File("student.txt");

            Scanner input = new Scanner(file);

            while(input.hasNextLine()) {

                System.out.println(input.nextLine());

            }

            input.close();

        }
        catch(Exception e) {

            System.out.println(e);

        }

    }

}
</code></pre>

                </div>

            </div>

            <!-- Delete -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Deleting a File</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.File;

public class Main {

    public static void main(String[] args) {

        File file = new File("student.txt");

        if(file.delete()) {

            System.out.println("File Deleted Successfully.");

        }
        else {

            System.out.println("Unable to Delete File.");

        }

    }

}
</code></pre>

                </div>

            </div>

            <!-- Useful Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Useful File Class Methods</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>createNewFile()</code></td>

                                    <td>Creates a new file.</td>

                                </tr>

                                <tr>

                                    <td><code>exists()</code></td>

                                    <td>Checks whether the file exists.</td>

                                </tr>

                                <tr>

                                    <td><code>delete()</code></td>

                                    <td>Deletes the file.</td>

                                </tr>

                                <tr>

                                    <td><code>getName()</code></td>

                                    <td>Returns the file name.</td>

                                </tr>

                                <tr>

                                    <td><code>getAbsolutePath()</code></td>

                                    <td>Returns the complete file path.</td>

                                </tr>

                                <tr>

                                    <td><code>length()</code></td>

                                    <td>Returns the file size in bytes.</td>

                                </tr>

                                <tr>

                                    <td><code>canRead()</code></td>

                                    <td>Checks if the file is readable.</td>

                                </tr>

                                <tr>

                                    <td><code>canWrite()</code></td>

                                    <td>Checks if the file is writable.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- BufferedReader -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">BufferedReader Example</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>import java.io.BufferedReader;
import java.io.FileReader;

public class Main {

    public static void main(String[] args) {

        try {

            BufferedReader br =
                new BufferedReader(new FileReader("student.txt"));

            String line;

            while((line = br.readLine()) != null) {

                System.out.println(line);

            }

            br.close();

        }
        catch(Exception e) {

            System.out.println(e);

        }

    }

}
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="alert alert-success">

                <h4>Advantages of File Handling</h4>

                <ul class="mb-0">

                    <li>Stores data permanently.</li>

                    <li>Allows reading and writing data efficiently.</li>

                    <li>Useful for reports, logs, and configuration files.</li>

                    <li>Supports data sharing between applications.</li>

                    <li>Essential for desktop and enterprise applications.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    File Handling is an important feature of Java that enables
                    applications to work with files stored on a computer. Using
                    classes from the <code>java.io</code> package, developers can
                    create, read, write, update, and delete files. Understanding
                    file handling is essential for building real-world Java
                    applications such as student management systems, banking
                    software, inventory systems, and desktop applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},

{
title:"Multithreading",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Multithreading
                </h1>

                <p class="lead">
                    <strong>Multithreading</strong> is the ability of a Java
                    program to execute multiple threads simultaneously. It allows
                    different parts of a program to run concurrently, improving
                    application performance and responsiveness.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is a Thread?</h3>

                </div>

                <div class="card-body">

                    <p>
                        A <strong>thread</strong> is the smallest unit of execution
                        within a process. A Java application always starts with one
                        thread called the <strong>Main Thread</strong>. Additional
                        threads can be created to perform tasks simultaneously.
                    </p>

                    <p>
                        Examples of multithreading include downloading files while
                        playing music, processing background tasks, and handling
                        multiple client requests on a server.
                    </p>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Advantages of Multithreading</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Improves application performance.</li>

                        <li>Allows multiple tasks to run at the same time.</li>

                        <li>Makes applications more responsive.</li>

                        <li>Efficient CPU utilization.</li>

                        <li>Ideal for games, servers, and GUI applications.</li>

                    </ul>

                </div>

            </div>

            <!-- Extending Thread -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Creating a Thread by Extending the Thread Class</h3>

                </div>

                <div class="card-body">

                    <p>
                        One way to create a thread is by extending the
                        <code>Thread</code> class and overriding the
                        <code>run()</code> method.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class MyThread extends Thread {

    public void run() {

        System.out.println("Thread is Running");

    }

}

public class Main {

    public static void main(String[] args) {

        MyThread t = new MyThread();

        t.start();

    }

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Thread is Running
</code></pre>

                </div>

            </div>

            <!-- Runnable -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Creating a Thread Using Runnable Interface</h3>

                </div>

                <div class="card-body">

                    <p>
                        Another common approach is implementing the
                        <code>Runnable</code> interface.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>class MyTask implements Runnable {

    public void run() {

        System.out.println("Runnable Thread");

    }

}

public class Main {

    public static void main(String[] args) {

        Thread t = new Thread(new MyTask());

        t.start();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Life Cycle -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Thread Life Cycle</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>State</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>New</td>

                                    <td>Thread object is created.</td>

                                </tr>

                                <tr>

                                    <td>Runnable</td>

                                    <td>Thread is ready to run.</td>

                                </tr>

                                <tr>

                                    <td>Running</td>

                                    <td>Thread is currently executing.</td>

                                </tr>

                                <tr>

                                    <td>Blocked / Waiting</td>

                                    <td>Thread waits for a resource or another thread.</td>

                                </tr>

                                <tr>

                                    <td>Terminated</td>

                                    <td>Thread finishes execution.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Methods -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Common Thread Methods</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>Method</th>

                                    <th>Description</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td><code>start()</code></td>

                                    <td>Starts a new thread.</td>

                                </tr>

                                <tr>

                                    <td><code>run()</code></td>

                                    <td>Contains the thread's task.</td>

                                </tr>

                                <tr>

                                    <td><code>sleep()</code></td>

                                    <td>Pauses the thread for a specified time.</td>

                                </tr>

                                <tr>

                                    <td><code>join()</code></td>

                                    <td>Waits for another thread to finish.</td>

                                </tr>

                                <tr>

                                    <td><code>isAlive()</code></td>

                                    <td>Checks whether a thread is running.</td>

                                </tr>

                                <tr>

                                    <td><code>setName()</code></td>

                                    <td>Assigns a name to a thread.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Sleep Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Example Using sleep()</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>class Demo extends Thread {

    public void run() {

        for(int i = 1; i <= 5; i++) {

            System.out.println(i);

            try {

                Thread.sleep(1000);

            }
            catch(Exception e) {

                System.out.println(e);

            }

        }

    }

}

public class Main {

    public static void main(String[] args) {

        Demo t = new Demo();

        t.start();

    }

}
</code></pre>

                </div>

            </div>

            <!-- Synchronization -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Synchronization</h3>

                </div>

                <div class="card-body">

                    <p>
                        When multiple threads access the same resource at the same
                        time, inconsistent results may occur. Java provides the
                        <code>synchronized</code> keyword to ensure that only one
                        thread accesses a shared resource at a time.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>synchronized void display() {

    System.out.println("Shared Resource");

}
</code></pre>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Consider a web browser. While downloading a file, you can
                    still browse websites, play videos, and listen to music.
                    These tasks run simultaneously using multiple threads.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Multithreading is one of Java's most powerful features. It
                    enables applications to perform multiple tasks concurrently,
                    improving performance and responsiveness. Java provides the
                    <code>Thread</code> class, the <code>Runnable</code>
                    interface, synchronization mechanisms, and several built-in
                    methods to create efficient and reliable multithreaded
                    applications.
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

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Projects
                </h1>

                <p class="lead">
                    Building projects is the best way to improve your Java
                    programming skills. Projects help you understand programming
                    concepts, Object-Oriented Programming (OOP), file handling,
                    collections, databases, multithreading, and graphical user
                    interfaces (GUI).
                </p>

            </div>

            <!-- Why Build Projects -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Why Build Java Projects?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Improve problem-solving skills.</li>

                        <li>Gain practical programming experience.</li>

                        <li>Understand real-world software development.</li>

                        <li>Build a professional portfolio.</li>

                        <li>Prepare for technical interviews.</li>

                    </ul>

                </div>

            </div>

            <!-- Beginner -->

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

                                    <th>Concepts Covered</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Calculator</td>

                                    <td>Operators, Methods, Switch Statement</td>

                                </tr>

                                <tr>

                                    <td>Student Grade Calculator</td>

                                    <td>Variables, Conditions, Loops</td>

                                </tr>

                                <tr>

                                    <td>Number Guessing Game</td>

                                    <td>Random Class, Loops</td>

                                </tr>

                                <tr>

                                    <td>Temperature Converter</td>

                                    <td>Methods, Arithmetic Operators</td>

                                </tr>

                                <tr>

                                    <td>Simple Banking System</td>

                                    <td>Classes, Objects, Methods</td>

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

                                    <th>Concepts Covered</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Library Management System</td>

                                    <td>OOP, Arrays, File Handling</td>

                                </tr>

                                <tr>

                                    <td>Student Management System</td>

                                    <td>Collections, Classes, CRUD Operations</td>

                                </tr>

                                <tr>

                                    <td>Inventory Management System</td>

                                    <td>Collections, File Handling</td>

                                </tr>

                                <tr>

                                    <td>ATM Simulation</td>

                                    <td>Methods, Exception Handling</td>

                                </tr>

                                <tr>

                                    <td>Employee Payroll System</td>

                                    <td>Inheritance, Polymorphism</td>

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

                            <thead class="table-light">

                                <tr>

                                    <th>Project</th>

                                    <th>Technologies Used</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Hospital Management System</td>

                                    <td>Java, MySQL, JDBC</td>

                                </tr>

                                <tr>

                                    <td>Online Banking System</td>

                                    <td>Java, JDBC, MySQL</td>

                                </tr>

                                <tr>

                                    <td>Hotel Management System</td>

                                    <td>Swing, MySQL</td>

                                </tr>

                                <tr>

                                    <td>Online Examination System</td>

                                    <td>Java GUI, File Handling</td>

                                </tr>

                                <tr>

                                    <td>E-Commerce Management System</td>

                                    <td>Java, Collections, Database</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Java Technologies -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Technologies Used in Java Projects</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Core Java</li>

                        <li>Object-Oriented Programming (OOP)</li>

                        <li>Collections Framework</li>

                        <li>Exception Handling</li>

                        <li>File Handling</li>

                        <li>Multithreading</li>

                        <li>JDBC (Java Database Connectivity)</li>

                        <li>MySQL Database</li>

                        <li>Swing or JavaFX (GUI Development)</li>

                        <li>Maven or Gradle</li>

                    </ul>

                </div>

            </div>

            <!-- Project Development Steps -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Steps to Build a Java Project</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>Understand the project requirements.</li>

                        <li>Design the classes and objects.</li>

                        <li>Create the project structure.</li>

                        <li>Implement Java classes and methods.</li>

                        <li>Add exception handling.</li>

                        <li>Connect the database if required.</li>

                        <li>Test all features thoroughly.</li>

                        <li>Fix bugs and optimize the code.</li>

                        <li>Document the project.</li>

                        <li>Upload the project to GitHub.</li>

                    </ol>

                </div>

            </div>

            <!-- Skills -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Skills You Will Gain</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Problem-solving skills.</li>

                        <li>Object-Oriented Programming.</li>

                        <li>Database integration.</li>

                        <li>GUI development.</li>

                        <li>Debugging and testing.</li>

                        <li>Code organization and maintenance.</li>

                        <li>Version control using Git and GitHub.</li>

                    </ul>

                </div>

            </div>

            <!-- Real Life -->

            <div class="alert alert-success">

                <h4>Real-Life Example</h4>

                <p>
                    Most real-world applications such as banking software,
                    hospital management systems, airline reservation systems,
                    online shopping platforms, and desktop applications are built
                    using Java technologies. Developing these projects helps you
                    understand how professional software is created.
                </p>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Java projects are essential for mastering programming
                    concepts and preparing for software development careers.
                    Start with simple console-based applications, then progress
                    to GUI and database-driven projects. Building projects
                    strengthens your coding skills, improves your confidence,
                    and creates a portfolio that demonstrates your abilities to
                    employers.
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

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-5 fw-bold text-primary">
                    Java Interview Questions
                </h1>

                <p class="lead">
                    Java is one of the most popular programming languages used in
                    enterprise applications, Android development, web
                    applications, and backend systems. This chapter covers the
                    most commonly asked Java interview questions for beginners
                    and intermediate-level developers.
                </p>

            </div>

            <!-- Basic Questions -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Basic Java Interview Questions</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li><strong>What is Java?</strong></li>

                        <p>
                            Java is a high-level, object-oriented, platform-independent
                            programming language developed by Sun Microsystems in
                            1995. It follows the principle "Write Once, Run Anywhere
                            (WORA)".
                        </p>

                        <li><strong>Who developed Java?</strong></li>

                        <p>
                            Java was developed by James Gosling and his team at
                            Sun Microsystems.
                        </p>

                        <li><strong>What are the main features of Java?</strong></li>

                        <ul>

                            <li>Simple</li>
                            <li>Object-Oriented</li>
                            <li>Platform Independent</li>
                            <li>Secure</li>
                            <li>Robust</li>
                            <li>Portable</li>
                            <li>Multithreaded</li>
                            <li>Distributed</li>

                        </ul>

                        <li><strong>Why is Java platform independent?</strong></li>

                        <p>
                            Because Java programs are compiled into bytecode,
                            which runs on the Java Virtual Machine (JVM) available
                            on different operating systems.
                        </p>

                        <li><strong>What is JVM?</strong></li>

                        <p>
                            JVM (Java Virtual Machine) executes Java bytecode and
                            enables Java programs to run on different platforms.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- OOP -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Object-Oriented Programming Questions</h3>

                </div>

                <div class="card-body">

                    <ol start="6">

                        <li><strong>What is a Class?</strong></li>

                        <p>
                            A class is a blueprint for creating objects.
                        </p>

                        <li><strong>What is an Object?</strong></li>

                        <p>
                            An object is an instance of a class.
                        </p>

                        <li><strong>What are the four pillars of OOP?</strong></li>

                        <ul>

                            <li>Encapsulation</li>
                            <li>Inheritance</li>
                            <li>Polymorphism</li>
                            <li>Abstraction</li>

                        </ul>

                        <li><strong>What is Inheritance?</strong></li>

                        <p>
                            Inheritance allows one class to acquire properties and
                            methods of another class using the
                            <code>extends</code> keyword.
                        </p>

                        <li><strong>What is Polymorphism?</strong></li>

                        <p>
                            Polymorphism allows one interface to have multiple
                            implementations through method overloading and method
                            overriding.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- Programming -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Programming Questions</h3>

                </div>

                <div class="card-body">

                    <ol start="11">

                        <li><strong>Difference between == and equals()?</strong></li>

                        <p>
                            <code>==</code> compares object references, whereas
                            <code>equals()</code> compares object values.
                        </p>

                        <li><strong>Difference between String and StringBuilder?</strong></li>

                        <p>
                            String is immutable, whereas StringBuilder is mutable
                            and faster for modifying strings.
                        </p>

                        <li><strong>What is Method Overloading?</strong></li>

                        <p>
                            Creating multiple methods with the same name but
                            different parameters.
                        </p>

                        <li><strong>What is Method Overriding?</strong></li>

                        <p>
                            Providing a new implementation of an inherited method.
                        </p>

                        <li><strong>What is a Constructor?</strong></li>

                        <p>
                            A constructor initializes objects when they are
                            created.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- Exception -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Exception Handling Questions</h3>

                </div>

                <div class="card-body">

                    <ol start="16">

                        <li><strong>What is an Exception?</strong></li>

                        <p>
                            An exception is a runtime error that interrupts the
                            normal flow of a program.
                        </p>

                        <li><strong>Difference between throw and throws?</strong></li>

                        <p>
                            <code>throw</code> explicitly throws an exception,
                            while <code>throws</code> declares exceptions in a
                            method signature.
                        </p>

                        <li><strong>What is the finally block?</strong></li>

                        <p>
                            The <code>finally</code> block always executes,
                            regardless of whether an exception occurs.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- Collections -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Collections Framework Questions</h3>

                </div>

                <div class="card-body">

                    <ol start="19">

                        <li><strong>What is the Collections Framework?</strong></li>

                        <p>
                            A framework that provides classes and interfaces to
                            store and manipulate groups of objects.
                        </p>

                        <li><strong>Difference between ArrayList and LinkedList?</strong></li>

                        <p>
                            ArrayList is faster for searching, while LinkedList is
                            faster for inserting and deleting elements.
                        </p>

                        <li><strong>Difference between HashMap and TreeMap?</strong></li>

                        <p>
                            HashMap stores data in random order, while TreeMap
                            stores data in sorted order.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- Advanced -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Advanced Java Questions</h3>

                </div>

                <div class="card-body">

                    <ol start="22">

                        <li><strong>What is Multithreading?</strong></li>

                        <p>
                            Running multiple threads concurrently within a single
                            process.
                        </p>

                        <li><strong>What is Synchronization?</strong></li>

                        <p>
                            Synchronization prevents multiple threads from
                            accessing shared resources simultaneously.
                        </p>

                        <li><strong>What is JDBC?</strong></li>

                        <p>
                            JDBC (Java Database Connectivity) is an API used to
                            connect Java applications with databases.
                        </p>

                        <li><strong>What is Garbage Collection?</strong></li>

                        <p>
                            Garbage Collection automatically removes unused
                            objects from memory.
                        </p>

                    </ol>

                </div>

            </div>

            <!-- Tips -->

            <div class="alert alert-success">

                <h4>Interview Tips</h4>

                <ul class="mb-0">

                    <li>Understand Core Java concepts thoroughly.</li>

                    <li>Practice writing Java programs daily.</li>

                    <li>Learn Object-Oriented Programming concepts.</li>

                    <li>Understand Collections Framework and Exception Handling.</li>

                    <li>Practice coding problems on arrays, strings, and loops.</li>

                    <li>Build small Java projects to gain practical experience.</li>

                    <li>Review commonly asked interview questions regularly.</li>

                </ul>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    Preparing Java interview questions is an excellent way to
                    strengthen your programming knowledge and improve your
                    confidence during technical interviews. Focus on Core Java,
                    Object-Oriented Programming, Exception Handling, Collections,
                    Multithreading, File Handling, and practical coding problems.
                    Consistent practice and project development will greatly
                    increase your chances of success in Java developer
                    interviews.
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