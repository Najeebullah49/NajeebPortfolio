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
        C Language
    </h3>
    <a href="#" onclick="showLesson(0); return false;">C Home</a>
    <a href="#" onclick="showLesson(1); return false;">Introduction</a>
    <a href="#" onclick="showLesson(2); return false;">History</a>
     <a href="#" onclick="showLesson(3); return false;">Software for C Programming </a>
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

    <div class="mt-4 mb-5">

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
title:"C Home",
content:`
<div class="container-fluid py-4">

    <div class="row justify-content-center">

        <div class="col-12 col-xl-10">

            <!-- Heading -->

            <div class="text-center mb-5">

                <h1 class="display-4 fw-bold text-primary">
                    Learn C Programming
                </h1>

                <p class="lead">
                    C is one of the world's most popular and powerful programming
                    languages. It is fast, efficient, portable, and forms the
                    foundation of many modern programming languages such as C++,
                    Java, C#, and Objective-C.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is C Programming?</h3>

                </div>

                <div class="card-body">

                    <p>
                        C is a <strong>general-purpose, procedural programming
                        language</strong> developed to build system software and
                        application software. It provides low-level memory access,
                        making it suitable for operating systems, embedded
                        systems, compilers, and high-performance applications.
                    </p>

                    <p>
                        For more than 50 years, C has remained one of the most
                        widely used programming languages because of its speed,
                        simplicity, and efficiency.
                    </p>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Your First C Program</h3>

                </div>

                <div class="card-body">

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;stdio.h&gt;

int main() {

    printf("Hello, World!");

    return 0;

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello, World!
</code></pre>

                </div>

            </div>

            <!-- What You'll Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">What You'll Learn</h3>

                </div>

                <div class="card-body">

                    <p>
                        This complete C Programming course will teach you from
                        beginner to advanced level with practical examples.
                    </p>

                    <ul>

                        <li>C syntax and program structure.</li>

                        <li>Variables and data types.</li>

                        <li>Constants and operators.</li>

                        <li>Input and output functions.</li>

                        <li>Decision-making statements.</li>

                        <li>Loops and control statements.</li>

                        <li>Functions and recursion.</li>

                        <li>Arrays and strings.</li>

                        <li>Pointers and memory management.</li>

                        <li>Structures and unions.</li>

                        <li>File handling.</li>

                        <li>Real-world C projects.</li>

                    </ul>

                </div>

            </div>

            <!-- Applications -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Applications of C</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Operating Systems</li>

                                <li>Compilers</li>

                                <li>Embedded Systems</li>

                                <li>Device Drivers</li>

                                <li>Database Systems</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Game Development</li>

                                <li>Networking Software</li>

                                <li>IoT Devices</li>

                                <li>System Utilities</li>

                                <li>Scientific Applications</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Why Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Why Learn C?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Easy to learn for beginners.</li>

                        <li>Builds a strong programming foundation.</li>

                        <li>Very fast and memory efficient.</li>

                        <li>Used in system and embedded programming.</li>

                        <li>Helps in learning C++, Java, and other languages.</li>

                        <li>Frequently asked in programming interviews.</li>

                    </ul>

                </div>

            </div>

            <!-- Track Progress -->

            <div class="alert alert-success">

                <h4>Track Your Progress</h4>

                <ul class="mb-0">

                    <li>✔ Complete each lesson step by step.</li>

                    <li>✔ Practice every example yourself.</li>

                    <li>✔ Solve exercises after each chapter.</li>

                    <li>✔ Build mini projects using C.</li>

                    <li>✔ Prepare for coding interviews.</li>

                </ul>

            </div>

            <!-- Reference -->

            <div class="alert alert-primary mt-4">

                <h4>C Reference</h4>

                <p>
                    During this course, you will also learn about important C
                    libraries, keywords, functions, and concepts, including:
                </p>

                <ul class="mb-0">

                    <li>C Keywords</li>

                    <li><code>stdio.h</code> Library</li>

                    <li><code>stdlib.h</code> Library</li>

                    <li><code>string.h</code> Functions</li>

                    <li><code>math.h</code> Functions</li>

                    <li><code>ctype.h</code> Functions</li>

                    <li><code>time.h</code> Functions</li>

                    <li>Standard Input and Output Functions</li>

                </ul>

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

                <h1 class="display-4 fw-bold text-primary">
                    Introduction to C Programming
                </h1>

                <p class="lead">
                    C is one of the oldest, fastest, and most influential
                    programming languages. It is the foundation of many modern
                    programming languages and is widely used in software
                    development around the world.
                </p>

            </div>

            <!-- What is C -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">What is C?</h3>

                </div>

                <div class="card-body">

                    <p>
                        C is a <strong>general-purpose, procedural programming
                        language</strong> developed by
                        <strong>Dennis Ritchie</strong> at
                        <strong>Bell Laboratories</strong> in
                        <strong>1972</strong>.
                    </p>

                    <p>
                        It is one of the most popular programming languages
                        because it is simple, fast, efficient, and gives
                        programmers direct access to computer memory.
                    </p>

                    <p>
                        C is considered the foundation of computer programming.
                        Many modern programming languages such as
                        <strong>C++, Java, C#, Objective-C, PHP, and Python</strong>
                        have borrowed concepts and syntax from C.
                    </p>

                    <p>
                        The UNIX operating system was largely written in C,
                        making it one of the most important languages in the
                        history of computing.
                    </p>

                </div>

            </div>

            <!-- Uses -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">What is C Used For?</h3>

                </div>

                <div class="card-body">

                    <p>
                        C is commonly used for developing software that requires
                        high performance and direct interaction with computer
                        hardware.
                    </p>

                    <ol>

                        <li>Operating systems such as Linux and UNIX.</li>

                        <li>Embedded systems used in cars, TVs, washing machines, and IoT devices.</li>

                        <li>Compilers and interpreters.</li>

                        <li>Database management systems.</li>

                        <li>Game engines and graphics software.</li>

                        <li>Network applications.</li>

                        <li>Device drivers.</li>

                        <li>Scientific and engineering applications.</li>

                    </ol>

                </div>

            </div>

            <!-- Why Learn -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Why Learn C?</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>One of the most widely used programming languages.</li>

                        <li>Provides a strong foundation for learning other programming languages.</li>

                        <li>Helps you understand memory management and computer architecture.</li>

                        <li>Produces very fast and efficient programs.</li>

                        <li>Frequently used in technical interviews.</li>

                        <li>Required for embedded systems and system programming.</li>

                        <li>Improves problem-solving and logical thinking.</li>

                    </ul>

                </div>

            </div>

            <!-- Difference -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Difference Between C and C++</h3>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">

                            <thead class="table-light">

                                <tr>

                                    <th>C</th>

                                    <th>C++</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>Procedural Programming Language</td>

                                    <td>Object-Oriented Programming Language</td>

                                </tr>

                                <tr>

                                    <td>Uses functions</td>

                                    <td>Uses classes and objects</td>

                                </tr>

                                <tr>

                                    <td>No inheritance or polymorphism</td>

                                    <td>Supports inheritance and polymorphism</td>

                                </tr>

                                <tr>

                                    <td>Simpler syntax</td>

                                    <td>More advanced features</td>

                                </tr>

                                <tr>

                                    <td>Suitable for system programming</td>

                                    <td>Suitable for application and game development</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Example -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">Example Program</h3>

                </div>

                <div class="card-body">

                    <p>
                        The following C program displays a greeting message using
                        the <code>printf()</code> function.
                    </p>

<pre class="bg-light border rounded p-3 overflow-auto"><code>#include &lt;stdio.h&gt;

int main() {

    char name[] = "John";

    printf("Hello %s", name);

    return 0;

}
</code></pre>

                    <h5 class="mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Hello John
</code></pre>

                </div>

            </div>

            <!-- Advantages -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">Advantages of C</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Simple and easy to learn.</li>

                        <li>Fast execution speed.</li>

                        <li>Portable across different platforms.</li>

                        <li>Supports structured programming.</li>

                        <li>Rich standard library.</li>

                        <li>Direct memory access using pointers.</li>

                        <li>Efficient use of system resources.</li>

                    </ul>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    C is a powerful, efficient, and versatile programming
                    language that forms the basis of many modern languages.
                    Learning C helps you understand programming fundamentals,
                    memory management, algorithms, and system-level development.
                    It is an excellent first language for anyone who wants to
                    become a software engineer or computer programmer.
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

                <h3 class="display-4 fw-bold text-primary">
                    History of C Programming Language
                </h3>

                <p class="lead">
                    The C programming language is one of the most influential
                    programming languages in computer science. It laid the
                    foundation for many modern programming languages and is still
                    widely used for system programming, embedded systems, and
                    software development.
                </p>

            </div>

            <!-- Introduction -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Introduction</h3>

                </div>

                <div class="card-body">

                    <p>
                        C was developed by
                        <strong>Dennis Ritchie</strong> between
                        <strong>1972 and 1973</strong> at
                        <strong>Bell Laboratories (Bell Labs)</strong>.
                        It was designed as a general-purpose programming
                        language for developing system software,
                        operating systems, and application software.
                    </p>

                    <p>
                        C combines the efficiency of low-level programming
                        with the simplicity of high-level programming,
                        making it one of the most powerful programming
                        languages ever created.
                    </p>

                </div>

            </div>

            <!-- Before C -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">Programming Languages Before C</h3>

                </div>

                <div class="card-body">

                    <p>
                        Before C was introduced, programmers mainly used:
                    </p>

                    <ul>

                        <li>Machine Language</li>

                        <li>Assembly Language</li>

                        <li>BCPL (Basic Combined Programming Language)</li>

                        <li>B Programming Language</li>

                    </ul>

                    <p>
                        These languages had several limitations such as poor
                        portability, difficult syntax, and limited features.
                    </p>

                </div>

            </div>

            <!-- Why C -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-info text-white">

                    <h3 class="mb-0">Why Was C Created?</h3>

                </div>

                <div class="card-body">

                    <ol>

                        <li>To replace Assembly Language for system programming.</li>

                        <li>To make software development easier.</li>

                        <li>To create portable programs that run on different computers.</li>

                        <li>To develop the UNIX operating system.</li>

                        <li>To improve program speed and performance.</li>

                    </ol>

                </div>

            </div>

            <!-- Dennis Ritchie -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-warning">

                    <h3 class="mb-0">Dennis Ritchie's Contribution</h3>

                </div>

                <div class="card-body">

                    <p>
                        Dennis Ritchie improved the B Programming Language by
                        introducing several advanced features including:
                    </p>

                    <ul>

                        <li>Data Types</li>

                        <li>Pointers</li>

                        <li>Structures</li>

                        <li>Functions</li>

                        <li>Rich Standard Library</li>

                    </ul>

                    <p>
                        These improvements resulted in the creation of the
                        C programming language.
                    </p>

                </div>

            </div>

            <!-- UNIX -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-secondary text-white">

                    <h3 class="mb-0">C and UNIX</h3>

                </div>

                <div class="card-body">

                    <p>
                        One of the biggest achievements of C was rewriting
                        the UNIX operating system in 1973.
                    </p>

                    <p>
                        Before this, UNIX was written mainly in Assembly
                        Language. After being rewritten in C, UNIX became
                        portable, easier to maintain, and much easier to
                        modify, leading to its widespread adoption.
                    </p>

                </div>

            </div>

            <!-- Timeline -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-dark text-white">

                    <h3 class="mb-0">History Timeline</h3>

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

                                    <td>1972</td>

                                    <td>C language was created by Dennis Ritchie.</td>

                                </tr>

                                <tr>

                                    <td>1973</td>

                                    <td>UNIX operating system was rewritten in C.</td>

                                </tr>

                                <tr>

                                    <td>1978</td>

                                    <td>The famous K&R C Programming book was published.</td>

                                </tr>

                                <tr>

                                    <td>1989</td>

                                    <td>ANSI released the ANSI C (C89) standard.</td>

                                </tr>

                                <tr>

                                    <td>1990</td>

                                    <td>ISO adopted the C90 standard.</td>

                                </tr>

                                <tr>

                                    <td>1999</td>

                                    <td>C99 introduced new language features.</td>

                                </tr>

                                <tr>

                                    <td>2011</td>

                                    <td>C11 added multithreading and other improvements.</td>

                                </tr>

                                <tr>

                                    <td>2018</td>

                                    <td>C17 was released with bug fixes and improvements.</td>

                                </tr>

                                <tr>

                                    <td>2024</td>

                                    <td>C23 became the latest major C language standard.</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- Features -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-danger text-white">

                    <h3 class="mb-0">Why C Became So Popular</h3>

                </div>

                <div class="card-body">

                    <ul>

                        <li>Simple syntax</li>

                        <li>High execution speed</li>

                        <li>Portable across platforms</li>

                        <li>Structured programming support</li>

                        <li>Direct memory access using pointers</li>

                        <li>Rich standard library</li>

                        <li>Efficient memory management</li>

                    </ul>

                </div>

            </div>

            <!-- Applications -->

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">Applications of C</h3>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <ul>

                                <li>Operating Systems</li>

                                <li>Embedded Systems</li>

                                <li>Database Systems</li>

                                <li>Compilers</li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li>Device Drivers</li>

                                <li>Networking Software</li>

                                <li>Game Engines</li>

                                <li>Scientific Applications</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Summary -->

            <div class="alert alert-primary mt-4">

                <h4>Summary</h4>

                <p class="mb-0">
                    The C programming language revolutionized software
                    development and became the foundation of many modern
                    programming languages, including C++, Java, C#,
                    Objective-C, PHP, and many others. Even today, C
                    remains one of the most important languages for
                    operating systems, embedded systems, compilers,
                    networking software, and high-performance applications.
                </p>

            </div>

        </div>

    </div>

</div>
`
},



{
title: "Software for C Programming",
content:`

<div class="lesson-content">

    <h1 class="mb-4 text-primary fw-bold">Software for C Programming</h1>

    <p>
        To write, compile, and run C programs, you need a <strong>C compiler</strong>.
        A compiler converts the C source code into machine code so that the computer
        can understand and execute it. Most programmers use an <strong>IDE (Integrated Development Environment)</strong>,
        which provides a code editor, compiler, debugger, and other useful tools in one application.
    </p>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">1. Visual Studio Code (VS Code)</h2>
    <p>
        <strong>Visual Studio Code</strong> is one of the most popular code editors for C programming.
        It is lightweight, fast, and supports many programming languages.
        To run C programs, you need to install a C compiler such as <strong>MinGW (GCC)</strong>
        and the <strong>C/C++ Extension</strong>.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Free and open-source.</li>
        <li>Available for Windows, Linux, and macOS.</li>
        <li>Supports syntax highlighting and IntelliSense.</li>
        <li>Built-in debugging support.</li>
        <li>Extensions for C, C++, Java, Python, PHP, and many more.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">2. Code::Blocks</h2>
    <p>
        <strong>Code::Blocks</strong> is a free Integrated Development Environment (IDE)
        specially designed for C and C++ programming. It is easy to install and is
        widely used by students and beginners.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Free and open-source.</li>
        <li>Simple and user-friendly interface.</li>
        <li>Supports C and C++.</li>
        <li>Built-in debugger.</li>
        <li>Available with the GCC compiler included.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">3. Dev-C++</h2>
    <p>
        <strong>Dev-C++</strong> is a lightweight IDE for C and C++ programming.
        It is suitable for beginners who want to write and run simple C programs.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Easy to use.</li>
        <li>Supports GCC compiler.</li>
        <li>Fast and lightweight.</li>
        <li>Ideal for learning C programming.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">4. Microsoft Visual Studio</h2>
    <p>
        <strong>Microsoft Visual Studio</strong> is a powerful IDE developed by Microsoft.
        It supports C, C++, C#, and many other programming languages.
        It is mainly used for professional software development.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Professional development tools.</li>
        <li>Advanced debugging.</li>
        <li>IntelliSense code completion.</li>
        <li>Project management tools.</li>
        <li>Supports Windows desktop applications.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">5. Turbo C</h2>
    <p>
        <strong>Turbo C</strong> is an old C programming IDE developed by Borland.
        It was widely used in schools and colleges many years ago.
        Today, it is considered outdated and is not recommended for modern C programming.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Simple interface.</li>
        <li>Runs on DOS environment.</li>
        <li>Useful only for learning old C programs.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">6. CLion</h2>
    <p>
        <strong>CLion</strong> is a modern IDE developed by JetBrains.
        It provides advanced tools for writing, compiling, debugging, and managing C projects.
    </p>

    <h5>Features:</h5>
    <ul>
        <li>Smart code completion.</li>
        <li>Powerful debugger.</li>
        <li>Cross-platform support.</li>
        <li>Integrated version control.</li>
        <li>Suitable for professional developers.</li>
    </ul>

    <hr>

    <h2 class="mb-4 text-primary fw-bold">7. Online C Compilers</h2>
    <p>
        If you do not want to install any software, you can use an online C compiler.
        These websites allow you to write, compile, and run C programs directly in your web browser.
    </p>

    <h5>Examples:</h5>
    <ul>
        <li>Programiz Online Compiler</li>
        <li>OnlineGDB</li>
        <li>Replit</li>
        <li>OneCompiler</li>
    </ul>

    <hr>

    <h3>Difference Between a Compiler and an IDE</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Compiler</th>
                <th>IDE (Integrated Development Environment)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Converts C source code into machine code.</td>
                <td>Provides a complete environment to write, compile, run, and debug programs.</td>
            </tr>
            <tr>
                <td>Example: GCC Compiler</td>
                <td>Example: Visual Studio Code, Code::Blocks, Visual Studio</td>
            </tr>
        </tbody>
    </table>

    <hr>

    <h3>Most Recommended Software</h3>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Software</th>
                <th>Best For</th>
                <th>Compiler Included</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Visual Studio Code</td>
                <td>Beginners & Professionals</td>
                <td>No (Requires GCC/MinGW)</td>
            </tr>
            <tr>
                <td>Code::Blocks</td>
                <td>Students & Beginners</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Dev-C++</td>
                <td>Beginners</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Visual Studio</td>
                <td>Professional Development</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>CLion</td>
                <td>Professional Development</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Turbo C</td>
                <td>Old Educational Software</td>
                <td>Yes</td>
            </tr>
        </tbody>
    </table>

    <div class="alert alert-success mt-4">
        <strong>Recommendation:</strong>
        For modern C programming, <strong>Visual Studio Code</strong> with the
        <strong>GCC (MinGW)</strong> compiler is the best choice. It is free,
        fast, easy to use, and suitable for both beginners and professional developers.
    </div>

</div>

`
},



{
title:"Features",
content:`
<h2 class="text-primary fw-bold mb-3">Features of C Programming Language</h2>

<p>
The C programming language is one of the most powerful and widely used programming
languages. Its features make it suitable for developing operating systems,
embedded systems, compilers, databases, games, and high-performance applications.
Below are the major features of C in detail.
</p>

<h4 class="mt-4 text-primary">1. Simple and Easy to Learn</h4>
<p>
C has a simple syntax with a small set of keywords. It is easy for beginners
to understand the basic concepts of programming such as variables, loops,
functions, and conditions.
</p>

<h4 class="mt-4 text-primary">2. Portable</h4>
<p>
C programs can run on different operating systems with little or no changes.
A program written on Windows can usually be compiled on Linux or macOS using
the appropriate compiler.
</p>

<h4 class="mt-4 text-primary">3. Fast Execution</h4>
<p>
C is a compiled language that generates highly efficient machine code.
Programs written in C execute much faster than many interpreted languages,
making it suitable for performance-critical applications.
</p>

<h4 class="mt-4 text-primary">4. Structured Programming</h4>
<p>
C supports structured programming through functions. Large programs can be
divided into smaller modules, making the code easier to read, test, and maintain.
</p>

<h4 class="mt-4 text-primary">5. Rich Standard Library</h4>
<p>
C provides many built-in library functions for input/output, mathematical
operations, string handling, memory management, and file processing, reducing
development time.
</p>

<h4 class="mt-4 text-primary">6. Pointer Support</h4>
<p>
Pointers allow direct access to memory addresses. They make C powerful for
developing operating systems, device drivers, data structures, and embedded
systems.
</p>

<h4 class="mt-4 text-primary">7. Dynamic Memory Allocation</h4>
<p>
C allows memory to be allocated and released during program execution using
functions such as <code>malloc()</code>, <code>calloc()</code>,
<code>realloc()</code>, and <code>free()</code>.
</p>

<h4 class="mt-4 text-primary">8. Recursion</h4>
<p>
Functions in C can call themselves. This technique, known as recursion, is
useful for solving problems like factorials, tree traversal, and mathematical
calculations.
</p>

<h4 class="mt-4 text-primary">9. Extensible Language</h4>
<p>
Programmers can create their own functions and reuse them throughout the
program, making the code modular and reusable.
</p>

<h4 class="mt-4 text-primary">10. Efficient Memory Usage</h4>
<p>
C gives programmers complete control over memory management, allowing efficient
use of system resources and better performance.
</p>

<h4 class="mt-4 text-primary">11. Mid-Level Language</h4>
<p>
C combines features of both high-level and low-level programming languages.
It allows hardware interaction while also providing high-level programming
constructs.
</p>

<h4 class="mt-4 text-primary">12. Case Sensitive</h4>
<p>
C treats uppercase and lowercase letters as different identifiers. For example,
<code>sum</code>, <code>Sum</code>, and <code>SUM</code> are considered three
different variable names.
</p>

<h4 class="mt-4 text-primary">13. Compiler Based Language</h4>
<p>
C source code is translated into machine code by a compiler before execution.
This improves execution speed and helps detect errors during compilation.
</p>

<h4 class="mt-4 text-primary">14. Supports Bitwise Operations</h4>
<p>
C provides bitwise operators that allow direct manipulation of binary data.
These operators are commonly used in embedded systems and hardware programming.
</p>

<h4 class="mt-4 text-primary">15. Highly Efficient</h4>
<p>
Because of its speed, low memory consumption, and direct hardware access, C
is widely used for operating systems, compilers, embedded systems, databases,
and real-time applications.
</p>

<h4 class="mt-4 text-primary">Summary</h4>

<ul>
    <li>Simple and easy to learn</li>
    <li>Portable across multiple platforms</li>
    <li>Very fast execution speed</li>
    <li>Structured programming support</li>
    <li>Rich standard library</li>
    <li>Pointer support</li>
    <li>Dynamic memory allocation</li>
    <li>Recursion support</li>
    <li>Efficient memory management</li>
    <li>Mid-level programming language</li>
    <li>Compiler-based execution</li>
    <li>Supports bitwise operations</li>
    <li>Highly efficient and reliable</li>
</ul>
`
},

{
title:"Structure",
content:`
<h2 class="text-primary fw-bold mb-3">Structure of a C Program</h2>

<p>
Every C program follows a specific structure. Although simple programs may
contain only a few lines of code, almost every C program is built using the
same basic components. Understanding the structure of a C program helps
beginners write, read, and understand C code more easily.
</p>

<h4 class="mt-4 text-primary">Basic Structure of a C Program</h4>

<pre class="bg-light p-3 rounded border"><code>
#include &lt;stdio.h&gt;

int main()
{
    printf("Hello, World!");

    return 0;
}
</code></pre>

<h4 class="mt-4 text-primary">Explanation of Each Part</h4>

<h5 class="mt-3">1. Documentation Section</h5>

<p>
The documentation section contains comments that describe the program.
Comments help programmers understand the purpose of the code. The compiler
ignores comments during compilation.
</p>

<pre class="bg-light p-3 rounded border"><code>
// This program prints Hello, World!
</code></pre>

<h5 class="mt-3">2. Preprocessor Directives</h5>

<p>
Preprocessor directives begin with the <code>#</code> symbol. They are processed
before the program is compiled. The most common directive is
<code>#include</code>, which includes header files.
</p>

<pre class="bg-light p-3 rounded border"><code>
#include &lt;stdio.h&gt;
</code></pre>

<p>
The <code>stdio.h</code> header file provides standard input and output
functions such as <code>printf()</code> and <code>scanf()</code>.
</p>

<h5 class="mt-3">3. Main Function</h5>

<p>
Every C program starts execution from the <code>main()</code> function. It is
the entry point of every C program.
</p>

<pre class="bg-light p-3 rounded border"><code>
int main()
{
    // Program statements
}
</code></pre>

<h5 class="mt-3">4. Variable Declaration</h5>

<p>
Variables are declared inside functions before they are used. They store
data that can be used throughout the program.
</p>

<pre class="bg-light p-3 rounded border"><code>
int age;
float salary;
char grade;
</code></pre>

<h5 class="mt-3">5. Program Statements</h5>

<p>
This section contains the instructions that perform the actual work of the
program, such as calculations, input, output, loops, and conditions.
</p>

<pre class="bg-light p-3 rounded border"><code>
printf("Welcome to C Programming");
</code></pre>

<h5 class="mt-3">6. Return Statement</h5>

<p>
The <code>return 0;</code> statement indicates that the program finished
successfully and returns control to the operating system.
</p>

<pre class="bg-light p-3 rounded border"><code>
return 0;
</code></pre>

<h4 class="mt-4 text-primary">Complete Example</h4>

<pre class="bg-light p-3 rounded border"><code>
#include &lt;stdio.h&gt;

int main()
{
    printf("Welcome to C Programming");

    return 0;
}
</code></pre>

<h4 class="mt-4 text-primary">Flow of Execution</h4>

<ol>
    <li>The preprocessor processes the <code>#include</code> directives.</li>
    <li>The compiler compiles the source code.</li>
    <li>The program starts execution from the <code>main()</code> function.</li>
    <li>Program statements execute one by one.</li>
    <li><code>return 0;</code> ends the program successfully.</li>
</ol>

<h4 class="mt-4 text-primary">Important Points</h4>

<ul>
    <li>Every C program must contain a <code>main()</code> function.</li>
    <li>Program execution always begins from <code>main()</code>.</li>
    <li>Each statement should end with a semicolon (<code>;</code>).</li>
    <li>Header files provide built-in library functions.</li>
    <li>Comments improve code readability but are ignored by the compiler.</li>
    <li>The <code>return 0;</code> statement indicates successful program execution.</li>
</ul>

<h4 class="mt-4 text-primary">Summary</h4>

<p>
A standard C program consists of comments, preprocessor directives, the
<code>main()</code> function, variable declarations, executable statements,
and a return statement. Learning this structure is the first step toward
writing correct and organized C programs.
</p>
`
},

{
title:"First Program",
content:`
<h2 class="text-primary fw-bold mb-3">First C Program</h2>

<p>
The first program that every beginner learns in C is the
<strong>Hello, World!</strong> program. It introduces the basic structure of
a C program and demonstrates how to display output on the screen using the
<code>printf()</code> function.
</p>

<h4 class="mt-4 text-primary">Example 1: Hello, World!</h4>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    printf("Hello, World!");

    return 0;
}
</code></pre>

<h4 class="mt-4 text-primary">Output</h4>

<pre class="bg-dark text-white rounded p-3"><code>Hello, World!</code></pre>

<h4 class="mt-4 text-primary">Explanation</h4>

<ul>
<li><code>#include &lt;stdio.h&gt;</code> includes the Standard Input/Output library.</li>
<li><code>int main()</code> is the entry point of every C program.</li>
<li><code>printf()</code> displays text on the screen.</li>
<li><code>return 0;</code> ends the program successfully.</li>
</ul>

<h4 class="mt-4 text-primary">Program Execution Flow</h4>

<ol>
<li>The preprocessor reads the header file.</li>
<li>The compiler compiles the program.</li>
<li>Execution starts from <code>main()</code>.</li>
<li><code>printf()</code> prints the message.</li>
<li><code>return 0;</code> terminates the program.</li>
</ol>

<h4 class="mt-4 text-primary">Important Notes</h4>

<ul>
<li>Every C program must have a <code>main()</code> function.</li>
<li>Each statement ends with a semicolon (<code>;</code>).</li>
<li>C is case-sensitive.</li>
<li>The program starts execution from <code>main()</code>.</li>
</ul>

<h4 class="mt-4 text-primary">Summary</h4>

<p>
The Hello World program is the first step in learning C. It teaches the
basic structure of a C program and how to display output using
<code>printf()</code>.
</p>
`
},

{
title:"Variables",
content:`
<h2 class="text-primary fw-bold mb-3">Variables in C Programming</h2>

<p>
A <strong>variable</strong> is a named memory location used to store data in a
program. The value stored in a variable can change during program execution,
which is why it is called a <strong>variable</strong>.
</p>

<p>
Variables allow programmers to store numbers, characters, text, and other
types of data that can be used throughout the program.
</p>

<h4 class="mt-4 text-primary">Why Do We Use Variables?</h4>

<p>
Variables make programs flexible and dynamic. Instead of using fixed values,
we can store data in variables and change it whenever needed.
</p>

<ul>
    <li>Store user input.</li>
    <li>Perform calculations.</li>
    <li>Store temporary results.</li>
    <li>Reuse data multiple times.</li>
    <li>Make programs easier to understand.</li>
</ul>

<h4 class="mt-4 text-primary">Variable Declaration</h4>

<p>
Before using a variable, it must be declared by specifying its data type
followed by the variable name.
</p>

<pre class="bg-light border rounded p-3"><code>data_type variable_name;</code></pre>

<h5 class="mt-3">Examples</h5>

<pre class="bg-light border rounded p-3"><code>int age;
float salary;
char grade;</code></pre>

<h4 class="mt-4 text-primary">Variable Initialization</h4>

<p>
Initialization means assigning a value to a variable when it is declared.
</p>

<pre class="bg-light border rounded p-3"><code>int age = 22;
float salary = 2500.50;
char grade = 'A';</code></pre>

<h4 class="mt-4 text-primary">Rules for Naming Variables</h4>

<ol>
    <li>Variable names can contain letters, digits, and underscores.</li>
    <li>The first character must be a letter or underscore.</li>
    <li>Variable names cannot begin with a number.</li>
    <li>Spaces are not allowed.</li>
    <li>Special characters such as @, #, %, &, and ! are not allowed.</li>
    <li>C keywords cannot be used as variable names.</li>
    <li>C is case-sensitive. <code>age</code> and <code>Age</code> are different variables.</li>
</ol>

<h4 class="mt-4 text-primary">Valid Variable Names</h4>

<pre class="bg-light border rounded p-3"><code>age
studentName
salary
_marks
total1</code></pre>

<h4 class="mt-4 text-primary">Invalid Variable Names</h4>

<pre class="bg-light border rounded p-3"><code>1age
student name
float
total-price
@marks</code></pre>

<h4 class="mt-4 text-primary">Example 1: Integer Variable</h4>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    int age = 25;

    printf("Age = %d", age);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Age = 25</code></pre>

<h4 class="mt-4 text-primary">Example 2: Float Variable</h4>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    float salary = 4500.75;

    printf("Salary = %.2f", salary);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Salary = 4500.75</code></pre>

<h4 class="mt-4 text-primary">Example 3: Character Variable</h4>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    char grade = 'A';

    printf("Grade = %c", grade);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Grade = A</code></pre>

<h4 class="mt-4 text-primary">Example 4: Multiple Variables</h4>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    int age = 22;
    float marks = 89.5;
    char grade = 'A';

    printf("Age = %d\\n", age);
    printf("Marks = %.1f\\n", marks);
    printf("Grade = %c", grade);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Age = 22
Marks = 89.5
Grade = A</code></pre>

<h4 class="mt-4 text-primary">Changing the Value of a Variable</h4>

<p>
The value stored in a variable can be changed during program execution.
</p>

<pre class="bg-light border rounded p-3"><code>int age = 20;

age = 25;</code></pre>

<h4 class="mt-4 text-primary">Memory Representation</h4>

<p>
Each variable occupies a specific location in the computer's memory. When a
new value is assigned, the old value is replaced with the new one.
</p>

<pre class="bg-light border rounded p-3"><code>Variable Name      Stored Value

age                25
salary             4500.75
grade              A</code></pre>

<h4 class="mt-4 text-primary">Best Practices</h4>

<ul>
    <li>Use meaningful variable names.</li>
    <li>Initialize variables before using them.</li>
    <li>Keep variable names short but descriptive.</li>
    <li>Follow a consistent naming convention.</li>
    <li>Avoid using single-letter variable names except in loops.</li>
</ul>

<h4 class="mt-4 text-primary">Common Mistakes</h4>

<ul>
    <li>Using a variable before declaring it.</li>
    <li>Using invalid variable names.</li>
    <li>Forgetting the semicolon (<code>;</code>).</li>
    <li>Using reserved keywords as variable names.</li>
    <li>Assigning the wrong type of value to a variable.</li>
</ul>

<h4 class="mt-4 text-primary">Summary</h4>

<p>
Variables are one of the most important concepts in C programming. They are
used to store data that can change during program execution. Every variable
must be declared with an appropriate data type before use, and choosing
meaningful variable names makes programs easier to read and maintain.
</p>
`
},

{
title:"Data Types",
content:`
<h2 class="text-primary fw-bold mb-3">Data Types in C Programming</h2>

<p>
A <strong>data type</strong> defines the type of data a variable can store.
When you declare a variable, you must specify its data type so that the
compiler knows how much memory to allocate and what kind of values the
variable can hold.
</p>

<p>
For example, if you want to store a whole number, you use an
<code>int</code>. If you want to store decimal values, you use
<code>float</code> or <code>double</code>. If you want to store a single
character, you use <code>char</code>.
</p>

<h4 class="mt-4 text-primary">Why Are Data Types Important?</h4>

<ul>
    <li>Allocate the correct amount of memory.</li>
    <li>Improve program performance.</li>
    <li>Prevent invalid data from being stored.</li>
    <li>Help the compiler detect programming errors.</li>
    <li>Make programs easier to understand and maintain.</li>
</ul>

<h4 class="mt-4 text-primary">Categories of Data Types</h4>

<ol>
    <li><strong>Basic (Primitive) Data Types</strong></li>
    <li><strong>Derived Data Types</strong></li>
    <li><strong>User-defined Data Types</strong></li>
</ol>

<h4 class="mt-4 text-primary">1. Basic (Primitive) Data Types</h4>

<p>
These are the built-in data types provided by the C language.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Data Type</th>
<th>Description</th>
<th>Typical Size</th>
<th>Format Specifier</th>
</tr>
</thead>

<tbody>

<tr>
<td><code>int</code></td>
<td>Stores whole numbers</td>
<td>4 Bytes</td>
<td><code>%d</code></td>
</tr>

<tr>
<td><code>float</code></td>
<td>Stores decimal numbers</td>
<td>4 Bytes</td>
<td><code>%f</code></td>
</tr>

<tr>
<td><code>double</code></td>
<td>Stores large decimal numbers</td>
<td>8 Bytes</td>
<td><code>%lf</code></td>
</tr>

<tr>
<td><code>char</code></td>
<td>Stores a single character</td>
<td>1 Byte</td>
<td><code>%c</code></td>
</tr>

</tbody>
</table>
</div>

<hr>

<h3 class="text-primary mt-4">Integer (int)</h3>

<p>
The <code>int</code> data type stores whole numbers (integers). It cannot
store decimal values.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    int age = 22;

    printf("Age = %d", age);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Age = 22</code></pre>

<hr>

<h3 class="text-primary mt-4">Float</h3>

<p>
The <code>float</code> data type stores decimal (floating-point) numbers.
It provides approximately 6 to 7 decimal digits of precision.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    float price = 99.95;

    printf("Price = %.2f", price);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Price = 99.95</code></pre>

<hr>

<h3 class="text-primary mt-4">Double</h3>

<p>
The <code>double</code> data type stores decimal values with higher precision
than <code>float</code>. It is commonly used in scientific and mathematical
applications.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    double pi = 3.1415926535;

    printf("PI = %lf", pi);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>PI = 3.141593</code></pre>

<hr>

<h3 class="text-primary mt-4">Character (char)</h3>

<p>
The <code>char</code> data type stores a single character enclosed in single
quotation marks.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    char grade = 'A';

    printf("Grade = %c", grade);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Grade = A</code></pre>

<hr>

<h3 class="text-primary mt-4">Derived Data Types</h3>

<p>
Derived data types are created from the basic data types.
</p>

<ul>
<li>Arrays</li>
<li>Pointers</li>
<li>Functions</li>
</ul>

<h4 class="mt-4 text-primary">Example of Array</h4>

<pre class="bg-light border rounded p-3"><code>int numbers[5];</code></pre>

<h4 class="mt-4 text-primary">Example of Pointer</h4>

<pre class="bg-light border rounded p-3"><code>int *ptr;</code></pre>

<hr>

<h3 class="text-primary mt-4">User-defined Data Types</h3>

<p>
C also allows programmers to create their own data types.
</p>

<ul>
<li>struct</li>
<li>union</li>
<li>enum</li>
<li>typedef</li>
</ul>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>struct Student
{
    int id;
    char grade;
};</code></pre>

<hr>

<h3 class="text-primary mt-4">Format Specifiers</h3>

<div class="table-responsive">
<table class="table table-bordered table-hover">

<thead class="table-primary">
<tr>
<th>Data Type</th>
<th>Format Specifier</th>
</tr>
</thead>

<tbody>

<tr>
<td>int</td>
<td><code>%d</code></td>
</tr>

<tr>
<td>float</td>
<td><code>%f</code></td>
</tr>

<tr>
<td>double</td>
<td><code>%lf</code></td>
</tr>

<tr>
<td>char</td>
<td><code>%c</code></td>
</tr>

<tr>
<td>string (Character Array)</td>
<td><code>%s</code></td>
</tr>

</tbody>
</table>
</div>

<hr>

<h3 class="text-primary mt-4">Comparison of Basic Data Types</h3>

<div class="table-responsive">
<table class="table table-bordered">

<thead class="table-primary">
<tr>
<th>Type</th>
<th>Stores</th>
<th>Example</th>
</tr>
</thead>

<tbody>

<tr>
<td>int</td>
<td>Whole Numbers</td>
<td>25</td>
</tr>

<tr>
<td>float</td>
<td>Decimal Numbers</td>
<td>25.75</td>
</tr>

<tr>
<td>double</td>
<td>Large Decimal Numbers</td>
<td>3.1415926535</td>
</tr>

<tr>
<td>char</td>
<td>Single Character</td>
<td>'A'</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Choose the correct data type for the value you want to store.</li>
<li>Use <code>int</code> for whole numbers.</li>
<li>Use <code>float</code> or <code>double</code> for decimal values.</li>
<li>Use <code>char</code> for a single character.</li>
<li>Use meaningful variable names.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Using <code>int</code> to store decimal values.</li>
<li>Using double quotes instead of single quotes for <code>char</code>.</li>
<li>Using the wrong format specifier in <code>printf()</code>.</li>
<li>Choosing an inappropriate data type.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Data types are one of the most fundamental concepts in C programming. They
determine what kind of values a variable can store and how much memory is
allocated. The four most commonly used basic data types are
<strong>int</strong>, <strong>float</strong>, <strong>double</strong>, and
<strong>char</strong>. Understanding data types is essential before learning
operators, input/output, arrays, functions, and other advanced topics.
</p>
`
},

{
title:"Constants",
content:`
<h2 class="text-primary fw-bold mb-3">Constants in C Programming</h2>

<p>
A <strong>constant</strong> is a fixed value that cannot be changed during the
execution of a program. Unlike variables, whose values can change at any time,
constants always remain the same throughout the program.
</p>

<p>
Constants improve program readability, prevent accidental modification of
important values, and make programs easier to maintain.
</p>

<h4 class="mt-4 text-primary">Why Use Constants?</h4>

<ul>
    <li>Store fixed values.</li>
    <li>Improve program readability.</li>
    <li>Prevent accidental changes.</li>
    <li>Make programs easier to maintain.</li>
    <li>Avoid using the same value repeatedly.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Types of Constants</h3>

<ol>
    <li>Integer Constants</li>
    <li>Floating-Point Constants</li>
    <li>Character Constants</li>
    <li>String Constants</li>
    <li>Enumeration Constants</li>
    <li>Symbolic Constants (<code>#define</code>)</li>
    <li>Constant Variables (<code>const</code>)</li>
</ol>

<hr>

<h3 class="text-primary mt-4">1. Integer Constants</h3>

<p>
Integer constants are whole numbers without decimal points.
</p>

<h5>Examples</h5>

<pre class="bg-light border rounded p-3"><code>10
250
-75
0
1000</code></pre>

<h5>Program Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    printf("%d", 100);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>100</code></pre>

<hr>

<h3 class="text-primary mt-4">2. Floating-Point Constants</h3>

<p>
Floating-point constants contain decimal values.
</p>

<h5>Examples</h5>

<pre class="bg-light border rounded p-3"><code>3.14
12.75
99.99
0.5
-8.25</code></pre>

<h5>Program Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    printf("%.2f", 45.75);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>45.75</code></pre>

<hr>

<h3 class="text-primary mt-4">3. Character Constants</h3>

<p>
Character constants contain a single character enclosed in
<strong>single quotation marks</strong>.
</p>

<h5>Examples</h5>

<pre class="bg-light border rounded p-3"><code>'A'
'B'
'7'
'#'
'x'</code></pre>

<h5>Program Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    printf("%c", 'A');

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>A</code></pre>

<hr>

<h3 class="text-primary mt-4">4. String Constants</h3>

<p>
A string constant is a sequence of characters enclosed in
<strong>double quotation marks</strong>.
</p>

<h5>Examples</h5>

<pre class="bg-light border rounded p-3"><code>"Hello"
"C Programming"
"Najeeb"
"Computer"
"12345"</code></pre>

<h5>Program Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    printf("Welcome to C Programming");

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>Welcome to C Programming</code></pre>

<hr>

<h3 class="text-primary mt-4">5. Enumeration Constants</h3>

<p>
Enumeration constants are created using the <code>enum</code> keyword.
Each value represents an integer constant.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>enum Days
{
    MON,
    TUE,
    WED
};</code></pre>

<hr>

<h3 class="text-primary mt-4">6. Symbolic Constants (#define)</h3>

<p>
A symbolic constant is created using the <code>#define</code> preprocessor
directive. It replaces a name with a fixed value before compilation.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>#define PI 3.14159</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

#define PI 3.14159

int main()
{
    printf("%.2f", PI);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>3.14</code></pre>

<hr>

<h3 class="text-primary mt-4">7. Constant Variables (const)</h3>

<p>
The <code>const</code> keyword creates a variable whose value cannot be changed
after initialization.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>const int age = 20;</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>#include &lt;stdio.h&gt;

int main()
{
    const int age = 20;

    printf("%d", age);

    return 0;
}</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>20</code></pre>

<hr>

<h3 class="text-primary mt-4">Difference Between Variables and Constants</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
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
<td>Uses normal declaration.</td>
<td>Uses <code>const</code> or <code>#define</code>.</td>
</tr>

<tr>
<td>Can be modified anytime.</td>
<td>Cannot be modified after creation.</td>
</tr>

<tr>
<td>Example: <code>int age = 20;</code></td>
<td>Example: <code>const int age = 20;</code></td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Rules for Constants</h3>

<ul>
    <li>A constant value cannot be modified.</li>
    <li>Character constants use single quotes.</li>
    <li>String constants use double quotes.</li>
    <li><code>#define</code> constants are usually written in uppercase.</li>
    <li><code>const</code> variables must be initialized when declared.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
    <li>Trying to change a constant value.</li>
    <li>Using double quotes for character constants.</li>
    <li>Using single quotes for strings.</li>
    <li>Forgetting to initialize a <code>const</code> variable.</li>
    <li>Adding a semicolon after a <code>#define</code> statement.</li>
</ul>

<h5>Incorrect</h5>

<pre class="bg-light border rounded p-3"><code>#define PI 3.14;</code></pre>

<h5>Correct</h5>

<pre class="bg-light border rounded p-3"><code>#define PI 3.14</code></pre>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
    <li>Use meaningful names for constants.</li>
    <li>Write symbolic constants in uppercase letters.</li>
    <li>Use <code>const</code> whenever a value should not change.</li>
    <li>Replace repeated numeric values with named constants.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Constants are fixed values that remain unchanged during program execution.
C provides several types of constants, including integer, floating-point,
character, string, enumeration, symbolic constants using
<code>#define</code>, and constant variables using the
<code>const</code> keyword. Using constants makes programs safer, more readable,
and easier to maintain.
</p>
`
},

{
title:"Operators",
content:`
<h2 class="text-primary fw-bold mb-3">Operators in C Programming</h2>

<p>
An <strong>operator</strong> is a symbol that tells the compiler to perform a
specific operation on one or more operands (values or variables). Operators
are used to perform mathematical calculations, compare values, assign data,
and make logical decisions in a program.
</p>

<p>
For example, in the expression <code>a + b</code>, the <code>+</code> symbol is
an operator, while <code>a</code> and <code>b</code> are operands.
</p>

<h4 class="mt-4 text-primary">Types of Operators in C</h4>

<ol>
    <li>Arithmetic Operators</li>
    <li>Relational Operators</li>
    <li>Logical Operators</li>
    <li>Assignment Operators</li>
    <li>Increment and Decrement Operators</li>
    <li>Bitwise Operators</li>
    <li>Conditional (Ternary) Operator</li>
    <li>Special Operators</li>
</ol>

<hr>

<h3 class="text-primary mt-4">1. Arithmetic Operators</h3>

<p>
Arithmetic operators are used to perform mathematical calculations.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Operator</th>
<th>Description</th>
<th>Example</th>
</tr>
</thead>

<tbody>
<tr><td>+</td><td>Addition</td><td>a + b</td></tr>
<tr><td>-</td><td>Subtraction</td><td>a - b</td></tr>
<tr><td>*</td><td>Multiplication</td><td>a * b</td></tr>
<tr><td>/</td><td>Division</td><td>a / b</td></tr>
<tr><td>%</td><td>Modulus (Remainder)</td><td>a % b</td></tr>
</tbody>

</table>
</div>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int a = 20, b = 10;

printf("%d", a + b);
</code></pre>

<p><strong>Output:</strong> 30</p>

<hr>

<h3 class="text-primary mt-4">2. Relational Operators</h3>

<p>
Relational operators compare two values and return either true (1) or false (0).
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Operator</th>
<th>Description</th>
</tr>
</thead>

<tbody>
<tr><td>==</td><td>Equal To</td></tr>
<tr><td>!=</td><td>Not Equal To</td></tr>
<tr><td>></td><td>Greater Than</td></tr>
<tr><td><</td><td>Less Than</td></tr>
<tr><td>>=</td><td>Greater Than or Equal To</td></tr>
<tr><td><=</td><td>Less Than or Equal To</td></tr>
</tbody>

</table>
</div>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int a = 15, b = 20;

printf("%d", a < b);
</code></pre>

<p><strong>Output:</strong> 1</p>

<hr>

<h3 class="text-primary mt-4">3. Logical Operators</h3>

<p>
Logical operators combine two or more conditions.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Operator</th>
<th>Description</th>
</tr>
</thead>

<tbody>
<tr><td>&&</td><td>Logical AND</td></tr>
<tr><td>||</td><td>Logical OR</td></tr>
<tr><td>!</td><td>Logical NOT</td></tr>
</tbody>

</table>
</div>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int age = 22;

printf("%d", age >= 18 && age <= 60);
</code></pre>

<p><strong>Output:</strong> 1</p>

<hr>

<h3 class="text-primary mt-4">4. Assignment Operators</h3>

<p>
Assignment operators assign values to variables.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Operator</th>
<th>Meaning</th>
</tr>
</thead>

<tbody>
<tr><td>=</td><td>Assign</td></tr>
<tr><td>+=</td><td>Add and Assign</td></tr>
<tr><td>-=</td><td>Subtract and Assign</td></tr>
<tr><td>*=</td><td>Multiply and Assign</td></tr>
<tr><td>/=</td><td>Divide and Assign</td></tr>
<tr><td>%=</td><td>Modulus and Assign</td></tr>
</tbody>

</table>
</div>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int x = 10;

x += 5;

printf("%d", x);
</code></pre>

<p><strong>Output:</strong> 15</p>

<hr>

<h3 class="text-primary mt-4">5. Increment and Decrement Operators</h3>

<p>
These operators increase or decrease a variable by one.
</p>

<ul>
<li><code>++</code> Increment Operator</li>
<li><code>--</code> Decrement Operator</li>
</ul>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int a = 5;

a++;

printf("%d", a);
</code></pre>

<p><strong>Output:</strong> 6</p>

<hr>

<h3 class="text-primary mt-4">6. Bitwise Operators</h3>

<p>
Bitwise operators perform operations directly on binary bits.
They are mainly used in system programming and embedded systems.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
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
<tr><td><<</td><td>Left Shift</td></tr>
<tr><td>>></td><td>Right Shift</td></tr>
</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">7. Conditional (Ternary) Operator</h3>

<p>
The conditional operator is a shorthand form of the if...else statement.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
condition ? expression1 : expression2;
</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
int age = 20;

(age >= 18) ? printf("Adult") : printf("Minor");
</code></pre>

<p><strong>Output:</strong> Adult</p>

<hr>

<h3 class="text-primary mt-4">8. Special Operators</h3>

<p>
C also provides some special operators for specific purposes.
</p>

<ul>
<li><code>sizeof</code> – Returns the size of a data type or variable.</li>
<li><code>&</code> – Address Operator.</li>
<li><code>*</code> – Pointer Operator.</li>
<li><code>,</code> – Comma Operator.</li>
</ul>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
printf("%d", sizeof(int));
</code></pre>

<p><strong>Output:</strong> 4</p>

<hr>

<h3 class="text-primary mt-4">Operator Precedence</h3>

<p>
When an expression contains multiple operators, C follows operator precedence
to determine which operation is performed first. Parentheses <code>()</code>
have the highest priority and should be used whenever necessary to make
expressions clear.
</p>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Use parentheses to improve readability.</li>
<li>Choose the correct operator for each task.</li>
<li>Avoid overly complex expressions.</li>
<li>Understand operator precedence before writing expressions.</li>
<li>Test logical conditions carefully.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Operators are one of the most important parts of C programming. They allow
programs to perform calculations, compare values, make decisions, assign
values, manipulate bits, and execute many other operations. Understanding
operators is essential before learning control statements, loops, arrays,
functions, and pointers.
</p>
`
},

{
title:"Input Output",
content:`
<h2 class="text-primary fw-bold mb-3">Input and Output in C Programming</h2>

<p>
Input and Output (I/O) are fundamental operations in every programming
language. <strong>Input</strong> means taking data from the user, while
<strong>Output</strong> means displaying information on the screen.
</p>

<p>
The C language provides the <code>stdio.h</code> (Standard Input/Output)
library, which contains built-in functions such as
<code>printf()</code> and <code>scanf()</code>.
</p>

<hr>

<h3 class="text-primary mt-4">Input and Output Functions</h3>

<ul>
    <li><code>printf()</code> - Displays output on the screen.</li>
    <li><code>scanf()</code> - Reads input from the keyboard.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">The printf() Function</h3>

<p>
The <code>printf()</code> function is used to display text, numbers,
characters, and variable values on the screen.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
printf("message");
</code></pre>

<h5>Example 1: Display Text</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    printf("Welcome to C Programming");

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Welcome to C Programming
</code></pre>

<hr>

<h3 class="text-primary mt-4">Printing Variables</h3>

<p>
The <code>printf()</code> function can also display variable values using
format specifiers.
</p>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 22;

    printf("Age = %d", age);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Age = 22
</code></pre>

<hr>

<h3 class="text-primary mt-4">The scanf() Function</h3>

<p>
The <code>scanf()</code> function is used to receive input from the user.
It stores the entered value into a variable.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
scanf("format_specifier", &variable);
</code></pre>

<p>
The <code>&</code> symbol is called the <strong>address operator</strong>.
It tells the compiler where the value should be stored in memory.
</p>

<hr>

<h3 class="text-primary mt-4">Example: Reading an Integer</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age;

    printf("Enter your age: ");
    scanf("%d", &age);

    printf("Your age is %d", age);

    return 0;
}
</code></pre>

<h5>Sample Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Enter your age: 22
Your age is 22
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example: Reading a Float</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    float salary;

    printf("Enter your salary: ");
    scanf("%f", &salary);

    printf("Salary = %.2f", salary);

    return 0;
}
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example: Reading a Character</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    char grade;

    printf("Enter your grade: ");
    scanf(" %c", &grade);

    printf("Grade = %c", grade);

    return 0;
}
</code></pre>

<p>
Notice the space before <code>%c</code>. It skips any previous whitespace
or newline characters.
</p>

<hr>

<h3 class="text-primary mt-4">Common Format Specifiers</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Data Type</th>
<th>Format Specifier</th>
</tr>
</thead>

<tbody>

<tr>
<td>int</td>
<td><code>%d</code></td>
</tr>

<tr>
<td>float</td>
<td><code>%f</code></td>
</tr>

<tr>
<td>double</td>
<td><code>%lf</code></td>
</tr>

<tr>
<td>char</td>
<td><code>%c</code></td>
</tr>

<tr>
<td>String</td>
<td><code>%s</code></td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Using Multiple Inputs</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int a, b;

    printf("Enter two numbers: ");
    scanf("%d %d", &a, &b);

    printf("First Number = %d\\n", a);
    printf("Second Number = %d", b);

    return 0;
}
</code></pre>

<h5>Sample Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Enter two numbers: 10 20
First Number = 10
Second Number = 20
</code></pre>

<hr>

<h3 class="text-primary mt-4">Difference Between printf() and scanf()</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>printf()</th>
<th>scanf()</th>
</tr>
</thead>

<tbody>

<tr>
<td>Displays output.</td>
<td>Reads user input.</td>
</tr>

<tr>
<td>Sends data to the screen.</td>
<td>Receives data from the keyboard.</td>
</tr>

<tr>
<td>Does not require <code>&</code> for variables.</td>
<td>Usually requires <code>&</code> before variable names.</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Forgetting to include <code>stdio.h</code>.</li>
<li>Using the wrong format specifier.</li>
<li>Forgetting the <code>&</code> symbol in <code>scanf()</code> (except for strings).</li>
<li>Using <code>%d</code> for decimal numbers.</li>
<li>Using <code>%f</code> for integers.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Always display a message before taking input.</li>
<li>Use the correct format specifier.</li>
<li>Give variables meaningful names.</li>
<li>Check user input whenever possible.</li>
<li>Keep input and output statements simple and readable.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Input and Output are essential parts of every C program.
The <code>printf()</code> function is used to display information, while
the <code>scanf()</code> function is used to receive input from the user.
Learning these two functions is the first step toward creating interactive
C programs.
</p>
`
},

{
title:"If Else",
content:`
<h2 class="text-primary fw-bold mb-3">If Else Statement in C Programming</h2>

<p>
Decision-making is one of the most important concepts in programming.
Sometimes a program needs to perform different actions based on certain
conditions. In C, the <strong>if...else</strong> statement is used to make
decisions.
</p>

<p>
The <code>if</code> statement checks whether a condition is true or false.
If the condition is true, the statements inside the <code>if</code> block
are executed. Otherwise, the statements inside the <code>else</code> block
are executed.
</p>

<hr>

<h3 class="text-primary mt-4">Types of Decision Making Statements</h3>

<ul>
<li>if Statement</li>
<li>if...else Statement</li>
<li>else if Ladder</li>
<li>Nested if</li>
<li>Switch Statement</li>
</ul>

<hr>

<h3 class="text-primary mt-4">1. Simple if Statement</h3>

<p>
The <code>if</code> statement executes a block of code only when the condition
is true.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
if(condition)
{
    // statements
}
</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 20;

    if(age >= 18)
    {
        printf("You are eligible to vote.");
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
You are eligible to vote.
</code></pre>

<hr>

<h3 class="text-primary mt-4">2. if...else Statement</h3>

<p>
The <code>if...else</code> statement provides two possible execution paths.
If the condition is true, the <code>if</code> block executes. Otherwise,
the <code>else</code> block executes.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
if(condition)
{
    // True block
}
else
{
    // False block
}
</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int number = 7;

    if(number % 2 == 0)
    {
        printf("Even Number");
    }
    else
    {
        printf("Odd Number");
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Odd Number
</code></pre>

<hr>

<h3 class="text-primary mt-4">3. else if Ladder</h3>

<p>
When there are multiple conditions to check, the
<code>else if</code> ladder is used.
Only the first true condition is executed.
</p>

<h5>Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
if(condition1)
{
    ...
}
else if(condition2)
{
    ...
}
else
{
    ...
}
</code></pre>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int marks = 82;

    if(marks >= 90)
        printf("Grade A+");
    else if(marks >= 80)
        printf("Grade A");
    else if(marks >= 70)
        printf("Grade B");
    else
        printf("Fail");

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Grade A
</code></pre>

<hr>

<h3 class="text-primary mt-4">4. Nested if Statement</h3>

<p>
A nested if means placing one <code>if</code> statement inside another
<code>if</code> statement.
</p>

<h5>Example</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 25;
    int salary = 4000;

    if(age >= 18)
    {
        if(salary >= 3000)
        {
            printf("Loan Approved");
        }
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Loan Approved
</code></pre>

<hr>

<h3 class="text-primary mt-4">Flow Chart of if...else</h3>

<pre class="bg-light border rounded p-3"><code>
        Condition
            |
      +-----+-----+
      |           |
    True        False
      |           |
   If Block   Else Block
      |           |
      +-----+-----+
            |
          End
</code></pre>

<hr>

<h3 class="text-primary mt-4">Comparison of Decision Statements</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Statement</th>
<th>Purpose</th>
</tr>
</thead>

<tbody>
<tr>
<td>if</td>
<td>Executes code when a condition is true.</td>
</tr>

<tr>
<td>if...else</td>
<td>Chooses between two blocks of code.</td>
</tr>

<tr>
<td>else if</td>
<td>Checks multiple conditions.</td>
</tr>

<tr>
<td>Nested if</td>
<td>Checks conditions inside another condition.</td>
</tr>

<tr>
<td>switch</td>
<td>Selects one block from multiple choices.</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Applications of if...else</h3>

<ul>
<li>Checking even or odd numbers.</li>
<li>Finding the largest number.</li>
<li>Checking voting eligibility.</li>
<li>Student grading system.</li>
<li>Password verification.</li>
<li>ATM applications.</li>
<li>Banking systems.</li>
<li>Login authentication.</li>
<li>Online shopping discounts.</li>
<li>Traffic signal systems.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Using <code>=</code> instead of <code>==</code>.</li>
<li>Forgetting curly braces <code>{ }</code> for multiple statements.</li>
<li>Writing incorrect logical conditions.</li>
<li>Missing the <code>else</code> block when required.</li>
<li>Using unnecessary nested if statements.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Write clear and meaningful conditions.</li>
<li>Use proper indentation.</li>
<li>Avoid deeply nested if statements.</li>
<li>Use <code>else if</code> instead of multiple separate <code>if</code> statements when appropriate.</li>
<li>Always test all possible conditions.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
The <strong>if...else</strong> statement is one of the most widely used
decision-making statements in C programming. It allows programs to make
decisions based on conditions. C provides several forms of decision-making,
including <strong>if</strong>, <strong>if...else</strong>,
<strong>else if ladder</strong>, and <strong>nested if</strong>. Mastering
these statements is essential before learning loops, functions, arrays,
and advanced programming concepts.
</p>
`
},

{
title:"Loops",
content:`
<h2 class="text-primary fw-bold mb-3">Loops in C Programming</h2>

<p>
A <strong>loop</strong> is a control structure that allows a block of code to
be executed repeatedly until a specified condition becomes false. Instead of
writing the same statements multiple times, programmers use loops to automate
repetitive tasks, making programs shorter, cleaner, and more efficient.
</p>

<p>
Loops are widely used in mathematics, games, banking systems, operating
systems, data processing, and almost every software application.
</p>

<hr>

<h3 class="text-primary mt-4">Why Do We Use Loops?</h3>

<ul>
<li>Reduce repetitive code.</li>
<li>Save programming time.</li>
<li>Improve code readability.</li>
<li>Execute the same task multiple times automatically.</li>
<li>Make programs more efficient and easier to maintain.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Types of Loops in C</h3>

<ol>
<li><strong>for Loop</strong></li>
<li><strong>while Loop</strong></li>
<li><strong>do...while Loop</strong></li>
</ol>

<hr>

<h2 class="text-success mt-5">1. for Loop</h2>

<p>
The <strong>for loop</strong> is used when the number of iterations is known
before the loop starts. It is the most commonly used loop in C programming.
</p>

<h4 class="text-primary mt-4">Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
for(initialization; condition; increment/decrement)
{
    // statements
}
</code></pre>

<h4 class="text-primary mt-4">How It Works</h4>

<ol>
<li>Initialization executes only once.</li>
<li>The condition is checked.</li>
<li>If the condition is true, the loop body executes.</li>
<li>The increment/decrement statement executes.</li>
<li>The process repeats until the condition becomes false.</li>
</ol>

<h4 class="text-primary mt-4">Example 1: Print Numbers 1 to 5</h4>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int i;

    for(i=1; i<=5; i++)
    {
        printf("%d\\n", i);
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
1
2
3
4
5
</code></pre>

<hr>

<h4 class="text-primary mt-4">Example 2: Print Even Numbers</h4>

<pre class="bg-light border rounded p-3"><code>
for(int i=2; i<=10; i+=2)
{
    printf("%d ", i);
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
2 4 6 8 10
</code></pre>

<hr>

<h4 class="text-primary mt-4">Example 3: Print Table of 5</h4>

<pre class="bg-light border rounded p-3"><code>
for(int i=1; i<=10; i++)
{
    printf("5 x %d = %d\\n", i, 5*i);
}
</code></pre>

<hr>

<h2 class="text-success mt-5">2. while Loop</h2>

<p>
The <strong>while loop</strong> is used when the number of iterations is not
known in advance. It checks the condition before executing the loop body.
</p>

<h4 class="text-primary mt-4">Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
while(condition)
{
    // statements
}
</code></pre>

<h4 class="text-primary mt-4">Example 1: Print Numbers 1 to 5</h4>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int i=1;

    while(i<=5)
    {
        printf("%d\\n", i);
        i++;
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
1
2
3
4
5
</code></pre>

<hr>

<h4 class="text-primary mt-4">Example 2: Countdown</h4>

<pre class="bg-light border rounded p-3"><code>
int i=5;

while(i>=1)
{
    printf("%d ", i);
    i--;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
5 4 3 2 1
</code></pre>

<hr>

<h2 class="text-success mt-5">3. do...while Loop</h2>

<p>
The <strong>do...while</strong> loop executes the loop body first and then
checks the condition. Therefore, it always executes at least one time.
</p>

<h4 class="text-primary mt-4">Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
do
{
    // statements
}
while(condition);
</code></pre>

<h4 class="text-primary mt-4">Example 1</h4>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int i=1;

    do
    {
        printf("%d\\n", i);
        i++;
    }
    while(i<=5);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
1
2
3
4
5
</code></pre>

<hr>

<h4 class="text-primary mt-4">Example 2: Executes At Least Once</h4>

<pre class="bg-light border rounded p-3"><code>
int i=10;

do
{
    printf("%d", i);
}
while(i<5);
</code></pre>

<hh5>Output</hh5>

<pre class="bg-dark text-white rounded p-3"><code>
10
</code></pre>

<hr>

<h3 class="text-primary mt-4">Comparison of Loops</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Feature</th>
<th>for</th>
<th>while</th>
<th>do...while</th>
</tr>
</thead>

<tbody>

<tr>
<td>Condition Checked</td>
<td>Before Execution</td>
<td>Before Execution</td>
<td>After Execution</td>
</tr>

<tr>
<td>Minimum Executions</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>

<tr>
<td>Best Used</td>
<td>Known Iterations</td>
<td>Unknown Iterations</td>
<td>Menu Driven Programs</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Nested Loops</h3>

<p>
A loop inside another loop is called a <strong>nested loop</strong>.
Nested loops are commonly used for printing patterns, working with matrices,
and creating tables.
</p>

<h4>Example</h4>

<pre class="bg-light border rounded p-3"><code>
for(int i=1; i<=3; i++)
{
    for(int j=1; j<=3; j++)
    {
        printf("* ");
    }

    printf("\\n");
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
* * *
* * *
* * *
</code></pre>

<hr>

<h3 class="text-primary mt-4">Infinite Loop</h3>

<p>
An infinite loop never ends because its condition always remains true.
</p>

<pre class="bg-light border rounded p-3"><code>
while(1)
{
    printf("Hello");
}
</code></pre>

<hr>

<h3 class="text-primary mt-4">Applications of Loops</h3>

<ul>
<li>Printing tables.</li>
<li>Displaying menus.</li>
<li>Reading multiple inputs.</li>
<li>Searching and sorting data.</li>
<li>Pattern printing.</li>
<li>Games and animations.</li>
<li>Repeating calculations.</li>
<li>File processing.</li>
<li>Database records processing.</li>
<li>Generating reports.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Forgetting to update the loop variable.</li>
<li>Creating an infinite loop accidentally.</li>
<li>Using the wrong loop type.</li>
<li>Writing incorrect loop conditions.</li>
<li>Missing braces for multiple statements.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Use meaningful loop variable names.</li>
<li>Choose the appropriate loop.</li>
<li>Avoid unnecessary nested loops.</li>
<li>Keep loop conditions simple.</li>
<li>Always test boundary conditions.</li>
<li>Indent loop bodies properly.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Loops are one of the most powerful features of C programming. They allow
programmers to execute a block of code repeatedly without writing duplicate
statements. C provides three looping statements:
<strong>for</strong>, <strong>while</strong>, and
<strong>do...while</strong>. Choosing the right loop depends on the problem
being solved. Mastering loops is essential before learning arrays, functions,
strings, and advanced programming concepts.
</p>
`
},

{
title:"Functions",
content:`
<h2 class="text-primary fw-bold mb-3">Functions in C Programming</h2>

<p>
A <strong>function</strong> is a block of code that performs a specific task.
Functions help programmers divide large programs into smaller, reusable, and
manageable parts. Instead of writing the same code multiple times, a function
can be written once and called whenever needed.
</p>

<p>
Functions improve code readability, reduce duplication, simplify debugging,
and make programs easier to maintain.
</p>

<hr>

<h3 class="text-primary mt-4">Why Use Functions?</h3>

<ul>
<li>Reduce code repetition.</li>
<li>Improve code readability.</li>
<li>Make programs modular.</li>
<li>Simplify debugging.</li>
<li>Allow code reusability.</li>
<li>Make large programs easier to maintain.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Types of Functions in C</h3>

<ol>
<li>Library (Built-in) Functions</li>
<li>User-defined Functions</li>
</ol>

<hr>

<h2 class="text-success mt-5">1. Library Functions</h2>

<p>
Library functions are predefined functions provided by the C Standard Library.
These functions are already written and can be used by including the required
header file.
</p>

<h4 class="text-primary mt-4">Common Library Functions</h4>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Function</th>
<th>Header File</th>
<th>Purpose</th>
</tr>
</thead>

<tbody>

<tr>
<td>printf()</td>
<td>stdio.h</td>
<td>Displays output.</td>
</tr>

<tr>
<td>scanf()</td>
<td>stdio.h</td>
<td>Reads user input.</td>
</tr>

<tr>
<td>strlen()</td>
<td>string.h</td>
<td>Returns string length.</td>
</tr>

<tr>
<td>sqrt()</td>
<td>math.h</td>
<td>Calculates square root.</td>
</tr>

<tr>
<td>pow()</td>
<td>math.h</td>
<td>Calculates power.</td>
</tr>

<tr>
<td>toupper()</td>
<td>ctype.h</td>
<td>Converts to uppercase.</td>
</tr>

</tbody>

</table>
</div>

<h4 class="text-primary mt-4">Example</h4>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    printf("Welcome to C Programming");

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Welcome to C Programming
</code></pre>

<hr>

<h2 class="text-success mt-5">2. User-defined Functions</h2>

<p>
A user-defined function is created by the programmer to perform a specific
task. These functions can be called from anywhere in the program.
</p>

<hr>

<h3 class="text-primary mt-4">Parts of a Function</h3>

<ol>
<li>Function Declaration (Prototype)</li>
<li>Function Definition</li>
<li>Function Call</li>
</ol>

<hr>

<h3 class="text-primary mt-4">Function Declaration</h3>

<p>
A function declaration tells the compiler about the function's name, return
type, and parameters before it is used.
</p>

<pre class="bg-light border rounded p-3"><code>
return_type functionName(parameters);
</code></pre>

<h4>Example</h4>

<pre class="bg-light border rounded p-3"><code>
int add(int, int);
</code></pre>

<hr>

<h3 class="text-primary mt-4">Function Definition</h3>

<p>
The function definition contains the actual code that performs the task.
</p>

<pre class="bg-light border rounded p-3"><code>
int add(int a, int b)
{
    return a + b;
}
</code></pre>

<hr>

<h3 class="text-primary mt-4">Function Call</h3>

<p>
A function call executes the function whenever it is needed.
</p>

<pre class="bg-light border rounded p-3"><code>
sum = add(10,20);
</code></pre>

<hr>

<h2 class="text-success mt-5">Complete Example</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int add(int a, int b);

int main()
{
    int result;

    result = add(10,20);

    printf("Sum = %d", result);

    return 0;
}

int add(int a, int b)
{
    return a+b;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Sum = 30
</code></pre>

<hr>

<h2 class="text-success mt-5">Categories of User-defined Functions</h2>

<p>
Based on parameters and return values, user-defined functions are divided
into four categories.
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Type</th>
<th>Arguments</th>
<th>Return Value</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>No</td>
<td>No</td>
</tr>

<tr>
<td>2</td>
<td>Yes</td>
<td>No</td>
</tr>

<tr>
<td>3</td>
<td>No</td>
<td>Yes</td>
</tr>

<tr>
<td>4</td>
<td>Yes</td>
<td>Yes</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">1. No Arguments, No Return Value</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

void display()
{
    printf("Hello World");
}

int main()
{
    display();

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Hello World
</code></pre>

<hr>

<h3 class="text-primary mt-4">2. Arguments, No Return Value</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

void square(int n)
{
    printf("%d", n*n);
}

int main()
{
    square(5);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
25
</code></pre>

<hr>

<h3 class="text-primary mt-4">3. No Arguments, Return Value</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int number()
{
    return 100;
}

int main()
{
    printf("%d", number());

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
100
</code></pre>

<hr>

<h3 class="text-primary mt-4">4. Arguments with Return Value</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int multiply(int a,int b)
{
    return a*b;
}

int main()
{
    printf("%d", multiply(4,5));

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
20
</code></pre>

<hr>

<h3 class="text-primary mt-4">Function Syntax</h3>

<pre class="bg-light border rounded p-3"><code>
return_type function_name(parameters)
{
    // statements

    return value;
}
</code></pre>

<hr>

<h3 class="text-primary mt-4">Advantages of Functions</h3>

<ul>
<li>Code reusability.</li>
<li>Modular programming.</li>
<li>Easy debugging.</li>
<li>Easy testing.</li>
<li>Reduces program size.</li>
<li>Improves readability.</li>
<li>Simplifies maintenance.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Difference Between Library and User-defined Functions</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Library Function</th>
<th>User-defined Function</th>
</tr>
</thead>

<tbody>

<tr>
<td>Already provided by C.</td>
<td>Created by the programmer.</td>
</tr>

<tr>
<td>No need to write its code.</td>
<td>Programmer writes the code.</td>
</tr>

<tr>
<td>Available through header files.</td>
<td>Declared and defined inside the program.</td>
</tr>

<tr>
<td>Example: printf()</td>
<td>Example: add()</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Forgetting to declare the function before calling it.</li>
<li>Using the wrong return type.</li>
<li>Passing the wrong number of arguments.</li>
<li>Forgetting the return statement in non-void functions.</li>
<li>Using incorrect parameter data types.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Use meaningful function names.</li>
<li>Keep each function focused on one task.</li>
<li>Avoid writing very long functions.</li>
<li>Write comments for complex functions.</li>
<li>Reuse functions whenever possible.</li>
<li>Choose appropriate return types.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Functions are one of the most powerful features of C programming. They make
programs modular, reusable, and easier to understand. C provides
<strong>library functions</strong> such as <code>printf()</code> and
<code>scanf()</code>, while programmers can also create
<strong>user-defined functions</strong> to perform specific tasks. Learning
functions is essential before studying recursion, arrays, pointers, and file
handling.
</p>
`
},

{
title:"Arrays",
content:`
<h2 class="text-primary fw-bold mb-3">Arrays in C Programming</h2>

<p>
An <strong>array</strong> is a collection of elements of the same data type stored
under a single variable name. Arrays allow programmers to store multiple values
without creating separate variables for each value.
</p>

<p>
Each element in an array has an <strong>index</strong>. In C programming,
array indexing always starts from <strong>0</strong>.
</p>

<hr>

<h3 class="text-primary mt-4">Why Use Arrays?</h3>

<ul>
<li>Store multiple values using one variable.</li>
<li>Reduce code repetition.</li>
<li>Access data quickly using indexes.</li>
<li>Easy to use with loops.</li>
<li>Improve program readability.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Types of Arrays</h3>

<ol>
<li>One-Dimensional Array</li>
<li>Two-Dimensional Array</li>
<li>Multi-Dimensional Array</li>
</ol>

<hr>

<h2 class="text-success mt-5">1. One-Dimensional Array</h2>

<p>
A one-dimensional array stores elements in a single row.
Each element is accessed using one index.
</p>

<h4 class="text-primary mt-4">Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
data_type array_name[size];
</code></pre>

<h4 class="text-primary mt-4">Example</h4>

<pre class="bg-light border rounded p-3"><code>
int marks[5];
</code></pre>

<p>
This array can store five integer values.
</p>

<hr>

<h3 class="text-primary mt-4">Initializing an Array</h3>

<pre class="bg-light border rounded p-3"><code>
int marks[5] = {10,20,30,40,50};
</code></pre>

<p>
Array Layout:
</p>

<pre class="bg-light border rounded p-3"><code>
Index : 0   1   2   3   4
Value :10  20  30  40  50
</code></pre>

<hr>

<h3 class="text-primary mt-4">Accessing Array Elements</h3>

<p>
Use the index number to access an array element.
</p>

<pre class="bg-light border rounded p-3"><code>
printf("%d", marks[2]);
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
30
</code></pre>

<hr>

<h3 class="text-primary mt-4">Changing an Array Value</h3>

<pre class="bg-light border rounded p-3"><code>
marks[1] = 100;
</code></pre>

<p>
Now the array becomes:
</p>

<pre class="bg-light border rounded p-3"><code>
10 100 30 40 50
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example 1: Print Array Elements</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int marks[5]={10,20,30,40,50};

    for(int i=0;i&lt;5;i++)
    {
        printf("%d\\n",marks[i]);
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
10
20
30
40
50
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example 2: Input Array Values</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int marks[5];

    for(int i=0;i&lt;5;i++)
    {
        scanf("%d",&marks[i]);
    }

    for(int i=0;i&lt;5;i++)
    {
        printf("%d ",marks[i]);
    }

    return 0;
}
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example 3: Calculate Sum</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int arr[5]={10,20,30,40,50};
    int sum=0;

    for(int i=0;i&lt;5;i++)
    {
        sum=sum+arr[i];
    }

    printf("Sum = %d",sum);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Sum = 150
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example 4: Find Largest Element</h3>

<pre class="bg-light border rounded p-3"><code>
int arr[5]={25,70,15,90,40};
int largest=arr[0];

for(int i=1;i&lt;5;i++)
{
    if(arr[i]&gt;largest)
    {
        largest=arr[i];
    }
}

printf("%d",largest);
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
90
</code></pre>

<hr>

<h2 class="text-success mt-5">2. Two-Dimensional Array</h2>

<p>
A two-dimensional array stores data in rows and columns.
It is commonly used to represent tables and matrices.
</p>

<h4 class="text-primary mt-4">Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
data_type matrix[row][column];
</code></pre>

<h4>Example</h4>

<pre class="bg-light border rounded p-3"><code>
int matrix[2][3];
</code></pre>

<hr>

<h3 class="text-primary mt-4">Initialization</h3>

<pre class="bg-light border rounded p-3"><code>
int matrix[2][3]=
{
    {1,2,3},
    {4,5,6}
};
</code></pre>

<hr>

<h3 class="text-primary mt-4">Display Matrix</h3>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int matrix [2] [3]= { {1,2,3}, {4,5,6} };

    for(int i=0;i&lt;2;i++)
    {
        for(int j=0;j&lt;3;j++)
        {
            printf("%d ",matrix[i][j]);
        }

        printf("\\n");
    }

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
1 2 3
4 5 6
</code></pre>

<hr>

<h2 class="text-success mt-5">3. Multi-Dimensional Array</h2>

<p>
A multi-dimensional array contains more than two dimensions.
These arrays are mainly used in graphics, games, scientific
calculations, and image processing.
</p>

<h4>Example</h4>

<pre class="bg-light border rounded p-3"><code>
int cube[3][3][3];
</code></pre>

<hr>

<h3 class="text-primary mt-4">Advantages of Arrays</h3>

<ul>
<li>Store multiple values efficiently.</li>
<li>Easy data access.</li>
<li>Works perfectly with loops.</li>
<li>Improves program organization.</li>
<li>Fast processing of similar data.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Disadvantages of Arrays</h3>

<ul>
<li>Fixed size after declaration.</li>
<li>Stores only one data type.</li>
<li>Insertion and deletion are difficult.</li>
<li>Memory may be wasted if the array is larger than needed.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Difference Between Variables and Arrays</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Variable</th>
<th>Array</th>
</tr>
</thead>

<tbody>

<tr>
<td>Stores one value.</td>
<td>Stores multiple values.</td>
</tr>

<tr>
<td>No index.</td>
<td>Uses indexes.</td>
</tr>

<tr>
<td>Single memory location.</td>
<td>Multiple contiguous memory locations.</td>
</tr>

<tr>
<td>Example: int age;</td>
<td>Example: int age[10];</td>
</tr>

</tbody>

</table>
</div>

<hr>

<h3 class="text-primary mt-4">Applications of Arrays</h3>

<ul>
<li>Student Management Systems.</li>
<li>Employee Records.</li>
<li>Searching Algorithms.</li>
<li>Sorting Algorithms.</li>
<li>Matrices.</li>
<li>Image Processing.</li>
<li>Game Development.</li>
<li>Scientific Calculations.</li>
<li>Database Applications.</li>
<li>Statistical Analysis.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Using an invalid index.</li>
<li>Accessing an array beyond its size.</li>
<li>Forgetting that indexing starts from 0.</li>
<li>Using an uninitialized array.</li>
<li>Declaring an array with insufficient size.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Use meaningful array names.</li>
<li>Initialize arrays whenever possible.</li>
<li>Use loops to process arrays.</li>
<li>Always check array boundaries.</li>
<li>Keep array sizes appropriate.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Arrays are one of the most useful data structures in C programming.
They allow programmers to store multiple values using a single variable.
C supports one-dimensional, two-dimensional, and multi-dimensional arrays.
Arrays are widely used in searching, sorting, games, databases, and scientific applications.
Mastering arrays is essential before learning strings, pointers, structures, and dynamic memory allocation.
</p>
`
},

{
title:"Pointers",
content:`
<h2 class="text-primary fw-bold mb-3">Pointers in C Programming</h2>

<p>
A <strong>pointer</strong> is a special variable that stores the
<strong>memory address</strong> of another variable instead of storing the actual value.
Pointers are one of the most powerful features of the C programming language and
are widely used for memory management, arrays, functions, strings, structures,
and dynamic memory allocation.
</p>

<hr>

<h3 class="text-primary mt-4">Why Use Pointers?</h3>

<ul>
<li>Store memory addresses of variables.</li>
<li>Access and modify variables indirectly.</li>
<li>Pass large data to functions efficiently.</li>
<li>Support dynamic memory allocation.</li>
<li>Work efficiently with arrays and strings.</li>
<li>Create linked lists, trees, and other data structures.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Pointer Declaration</h3>

<p>The syntax for declaring a pointer is:</p>

<pre class="bg-light border rounded p-3"><code>
data_type *pointer_name;
</code></pre>

<h4>Example</h4>

<pre class="bg-light border rounded p-3"><code>
int *ptr;
float *price;
char *letter;
</code></pre>

<hr>

<h3 class="text-primary mt-4">Address Operator (&amp;)</h3>

<p>
The <strong>&amp;</strong> operator returns the memory address of a variable.
</p>

<pre class="bg-light border rounded p-3"><code>
int age = 20;

printf("%p",&amp;age);
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
0x61FF08
</code></pre>

<p>
The address will be different on every computer.
</p>

<hr>

<h3 class="text-primary mt-4">Assigning Address to a Pointer</h3>

<pre class="bg-light border rounded p-3"><code>
int age = 20;
int *ptr;

ptr = &amp;age;
</code></pre>

<p>
Now <strong>ptr</strong> stores the address of the variable
<strong>age</strong>.
</p>

<hr>

<h3 class="text-primary mt-4">Dereference Operator (*)</h3>

<p>
The <strong>*</strong> operator is called the
<strong>dereference operator</strong>. It is used to access the value stored
at the memory address.
</p>

<pre class="bg-light border rounded p-3"><code>
printf("%d", *ptr);
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
20
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 1: Basic Pointer</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int number = 50;
    int *ptr = &amp;number;

    printf("Value = %d\\n", number);
    printf("Address = %p\\n", &amp;number);
    printf("Pointer = %p\\n", ptr);
    printf("Pointer Value = %d", *ptr);

    return 0;
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 2: Change Value Using Pointer</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int number = 10;
    int *ptr = &amp;number;

    *ptr = 100;

    printf("%d", number);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
100
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 3: Pointer with Float</h2>

<pre class="bg-light border rounded p-3"><code>
float price = 99.5;
float *ptr = &amp;price;

printf("%.2f", *ptr);
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 4: Pointer with Character</h2>

<pre class="bg-light border rounded p-3"><code>
char grade = 'A';
char *ptr = &amp;grade;

printf("%c", *ptr);
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 5: Pointer Arithmetic</h2>

<p>
Pointers can move from one memory location to another.
</p>

<pre class="bg-light border rounded p-3"><code>
int numbers[3] = {10,20,30};

int *ptr = numbers;

printf("%d\\n", *ptr);

ptr++;

printf("%d", *ptr);
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
10
20
</code></pre>

<hr>

<h2 class="text-success mt-5">Pointers and Arrays</h2>

<p>
The name of an array represents the address of its first element.
Therefore, arrays and pointers are closely related.
</p>

<pre class="bg-light border rounded p-3"><code>
int marks[3]={70,80,90};

printf("%d", marks[0]);

printf("%d", *(marks));
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
70
70
</code></pre>

<hr>

<h2 class="text-success mt-5">Pointers and Functions</h2>

<p>
Pointers allow functions to modify original variables by passing their addresses.
</p>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

void changeValue(int *x)
{
    *x = 500;
}

int main()
{
    int number = 100;

    changeValue(&amp;number);

    printf("%d", number);

    return 0;
}
</code></pre>

<h5>Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
500
</code></pre>

<hr>

<h2 class="text-success mt-5">NULL Pointer</h2>

<p>
A NULL pointer does not point to any valid memory location.
</p>

<pre class="bg-light border rounded p-3"><code>
int *ptr = NULL;
</code></pre>

<hr>

<h2 class="text-success mt-5">Void Pointer</h2>

<p>
A void pointer can store the address of any data type.
</p>

<pre class="bg-light border rounded p-3"><code>
void *ptr;
</code></pre>

<hr>

<h3 class="text-primary mt-4">Advantages of Pointers</h3>

<ul>
<li>Efficient memory usage.</li>
<li>Pass data to functions without copying.</li>
<li>Support dynamic memory allocation.</li>
<li>Useful for arrays and strings.</li>
<li>Create advanced data structures.</li>
<li>Improve program performance.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Disadvantages of Pointers</h3>

<ul>
<li>Difficult for beginners.</li>
<li>Can cause memory leaks.</li>
<li>Invalid pointers may crash a program.</li>
<li>Dereferencing NULL pointers causes errors.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Using an uninitialized pointer.</li>
<li>Dereferencing a NULL pointer.</li>
<li>Accessing invalid memory.</li>
<li>Returning pointers to local variables.</li>
<li>Forgetting to initialize pointers.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Always initialize pointers.</li>
<li>Use NULL when a pointer has no valid address.</li>
<li>Check pointers before dereferencing.</li>
<li>Free dynamically allocated memory.</li>
<li>Use meaningful pointer names.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Real-Life Applications</h3>

<ul>
<li>Dynamic memory allocation.</li>
<li>Operating systems.</li>
<li>Compilers.</li>
<li>Database systems.</li>
<li>Game development.</li>
<li>Embedded systems.</li>
<li>Linked lists.</li>
<li>Stacks and queues.</li>
<li>Trees and graphs.</li>
<li>File handling.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Pointers are variables that store memory addresses. They are one of the most
powerful features of C programming and are essential for arrays, functions,
strings, structures, dynamic memory allocation, and advanced data structures.
Understanding pointers is necessary for becoming an efficient C programmer.
</p>
`
},

{
title:"Structures",
content:`
<h2 class="text-primary fw-bold mb-3">Structures in C Programming</h2>

<p>
A <strong>structure</strong> (struct) is a user-defined data type in C that allows
you to store different types of data under a single name. Unlike arrays, which
can store only one type of data, a structure can store integers, floating-point
numbers, characters, strings, arrays, and even other structures together.
</p>

<hr>

<h3 class="text-primary mt-4">Why Use Structures?</h3>

<ul>
<li>Store different types of data in one variable.</li>
<li>Represent real-world objects such as students, employees, books, and cars.</li>
<li>Improve code organization.</li>
<li>Reduce the number of separate variables.</li>
<li>Make programs easier to understand and maintain.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Structure Syntax</h3>

<pre class="bg-light border rounded p-3"><code>
struct StructureName
{
    data_type member1;
    data_type member2;
    data_type member3;
};
</code></pre>

<hr>

<h3 class="text-primary mt-4">Example</h3>

<pre class="bg-light border rounded p-3"><code>
struct Student
{
    int rollNo;
    char name[30];
    float marks;
};
</code></pre>

<p>
The above structure stores three different types of data:
</p>

<ul>
<li>Roll Number (Integer)</li>
<li>Name (Character Array)</li>
<li>Marks (Float)</li>
</ul>

<hr>

<h2 class="text-success mt-5">Creating Structure Variables</h2>

<pre class="bg-light border rounded p-3"><code>
struct Student s1;
struct Student s2;
</code></pre>

<hr>

<h2 class="text-success mt-5">Accessing Structure Members</h2>

<p>
The <strong>dot (.) operator</strong> is used to access members of a structure.
</p>

<pre class="bg-light border rounded p-3"><code>
s1.rollNo = 101;

strcpy(s1.name,"Najeeb");

s1.marks = 92.5;
</code></pre>

<hr>

<h2 class="text-success mt-5">Displaying Structure Data</h2>

<pre class="bg-light border rounded p-3"><code>
printf("%d", s1.rollNo);

printf("%s", s1.name);

printf("%.2f", s1.marks);
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 1: Student Record</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

struct Student
{
    int rollNo;
    char name[30];
    float marks;
};

int main()
{
    struct Student s1;

    s1.rollNo = 1;

    strcpy(s1.name,"Ali");

    s1.marks = 88.5;

    printf("Roll No : %d\\n", s1.rollNo);
    printf("Name : %s\\n", s1.name);
    printf("Marks : %.2f", s1.marks);

    return 0;
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 2: Taking Input</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

struct Student
{
    int rollNo;
    char name[30];
    float marks;
};

int main()
{
    struct Student s;

    printf("Enter Roll No: ");
    scanf("%d",&amp;s.rollNo);

    printf("Enter Name: ");
    scanf("%s",s.name);

    printf("Enter Marks: ");
    scanf("%f",&amp;s.marks);

    printf("\\nStudent Information\\n");

    printf("%d\\n",s.rollNo);
    printf("%s\\n",s.name);
    printf("%.2f",s.marks);

    return 0;
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 3: Employee Structure</h2>

<pre class="bg-light border rounded p-3"><code>
struct Employee
{
    int id;
    char name[30];
    float salary;
};
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 4: Book Structure</h2>

<pre class="bg-light border rounded p-3"><code>
struct Book
{
    int id;
    char title[50];
    float price;
};
</code></pre>

<hr>

<h2 class="text-success mt-5">Array of Structures</h2>

<p>
A structure can also be used to create an array.
</p>

<pre class="bg-light border rounded p-3"><code>
struct Student students[50];
</code></pre>

<p>
This creates an array capable of storing information of 50 students.
</p>

<hr>

<h2 class="text-success mt-5">Example: Array of Structures</h2>

<pre class="bg-light border rounded p-3"><code>
struct Student
{
    int rollNo;
    char name[30];
};

struct Student students[2];
</code></pre>

<hr>

<h2 class="text-success mt-5">Nested Structures</h2>

<p>
A structure can contain another structure as a member.
</p>

<pre class="bg-light border rounded p-3"><code>
struct Address
{
    char city[30];
    char country[30];
};

struct Student
{
    int id;
    char name[30];
    struct Address address;
};
</code></pre>

<hr>

<h2 class="text-success mt-5">Pointer to Structure</h2>

<p>
Pointers can also point to structures.
</p>

<pre class="bg-light border rounded p-3"><code>
struct Student s;

struct Student *ptr;

ptr = &amp;s;
</code></pre>

<p>
Access members using the arrow operator.
</p>

<pre class="bg-light border rounded p-3"><code>
ptr-&gt;rollNo = 10;
</code></pre>

<hr>

<h2 class="text-success mt-5">Structure vs Array</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Array</th>
<th>Structure</th>
</tr>
</thead>

<tbody>

<tr>
<td>Stores same data type.</td>
<td>Stores different data types.</td>
</tr>

<tr>
<td>Uses indexes.</td>
<td>Uses member names.</td>
</tr>

<tr>
<td>All elements have same type.</td>
<td>Members can have different types.</td>
</tr>

<tr>
<td>Example: int marks[5];</td>
<td>Example: struct Student;</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h3 class="text-primary mt-4">Advantages of Structures</h3>

<ul>
<li>Store multiple data types together.</li>
<li>Represent real-world objects.</li>
<li>Improve code readability.</li>
<li>Reduce program complexity.</li>
<li>Easy to pass to functions.</li>
<li>Support nested structures.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Disadvantages of Structures</h3>

<ul>
<li>Require more memory than simple variables.</li>
<li>Operations on structures are slower than basic variables.</li>
<li>Large structures increase memory usage.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Real-Life Applications</h3>

<ul>
<li>Student Management System.</li>
<li>Employee Management System.</li>
<li>Hospital Management System.</li>
<li>Library Management System.</li>
<li>Banking Applications.</li>
<li>Inventory Systems.</li>
<li>Online Shopping Applications.</li>
<li>School Management Software.</li>
<li>Game Development.</li>
<li>Database Record Management.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Forgetting the semicolon after structure definition.</li>
<li>Using dot operator with a structure pointer instead of arrow operator.</li>
<li>Accessing uninitialized members.</li>
<li>Not including &lt;string.h&gt; when using strcpy().</li>
<li>Using incorrect data types for members.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Use meaningful structure names.</li>
<li>Keep related data in one structure.</li>
<li>Initialize members before use.</li>
<li>Use typedef for cleaner code.</li>
<li>Use pointers when passing large structures to functions.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Structures are user-defined data types that allow programmers to group different
types of data into a single unit. They are widely used in real-world software
development to represent objects such as students, employees, books, products,
customers, and many other entities. Structures make programs more organized,
readable, and easier to maintain.
</p>
`
},



{
title:"File Handling",
content:`
<h2 class="text-primary fw-bold mb-3">File Handling in C Programming</h2>

<p>
File Handling is a feature of the C programming language that allows programs
to store data permanently in files. Normally, variables lose their values when
a program terminates because they are stored in RAM (temporary memory). Files
allow data to be saved on secondary storage such as a hard disk so it can be
used again later.
</p>

<hr>

<h3 class="text-primary mt-4">Why Use File Handling?</h3>

<ul>
<li>Store data permanently.</li>
<li>Read previously saved information.</li>
<li>Save large amounts of data.</li>
<li>Create reports and logs.</li>
<li>Exchange data between programs.</li>
<li>Manage records such as students and employees.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">What is a File?</h3>

<p>
A file is a collection of related information stored permanently on a storage
device. Examples include text files, images, videos, documents, and databases.
</p>

<hr>

<h3 class="text-primary mt-4">Types of Files</h3>

<ol>
<li><strong>Text Files</strong> (.txt)</li>
<li><strong>Binary Files</strong> (.dat, .bin)</li>
</ol>

<p>
Text files store data in readable form, while binary files store data in machine
format and are generally faster.
</p>

<hr>

<h2 class="text-success mt-5">File Pointer</h2>

<p>
Every file operation in C uses a file pointer.
</p>

<pre class="bg-light border rounded p-3"><code>
FILE *fp;
</code></pre>

<p>
The file pointer points to the file being opened.
</p>

<hr>

<h2 class="text-success mt-5">Opening a File - fopen()</h2>

<p>
The <strong>fopen()</strong> function is used to open or create a file.
</p>

<h4>Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
FILE *fp;

fp = fopen("student.txt","w");
</code></pre>

<hr>

<h3 class="text-primary mt-4">File Opening Modes</h3>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Mode</th>
<th>Description</th>
</tr>
</thead>

<tbody>

<tr>
<td>r</td>
<td>Open existing file for reading.</td>
</tr>

<tr>
<td>w</td>
<td>Create a new file for writing. Existing data is deleted.</td>
</tr>

<tr>
<td>a</td>
<td>Append new data at the end of the file.</td>
</tr>

<tr>
<td>r+</td>
<td>Read and write.</td>
</tr>

<tr>
<td>w+</td>
<td>Read and write. Existing data is erased.</td>
</tr>

<tr>
<td>a+</td>
<td>Read and append.</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h2 class="text-success mt-5">Closing a File - fclose()</h2>

<p>
Always close a file after completing file operations.
</p>

<pre class="bg-light border rounded p-3"><code>
fclose(fp);
</code></pre>

<hr>

<h2 class="text-success mt-5">Writing Data - fprintf()</h2>

<p>
The <strong>fprintf()</strong> function writes formatted data into a file.
</p>

<h4>Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
fprintf(fp,"Hello World");
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 1: Write to a File</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    FILE *fp;

    fp = fopen("student.txt","w");

    fprintf(fp,"Welcome to C Programming");

    fclose(fp);

    return 0;
}
</code></pre>

<p>
This program creates a file named <strong>student.txt</strong> and writes text into it.
</p>

<hr>

<h2 class="text-success mt-5">Reading Data - fscanf()</h2>

<p>
The <strong>fscanf()</strong> function reads formatted data from a file.
</p>

<h4>Syntax</h4>

<pre class="bg-light border rounded p-3"><code>
fscanf(fp,"%s",name);
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 2: Read from a File</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    FILE *fp;

    char text[100];

    fp = fopen("student.txt","r");

    fscanf(fp,"%s",text);

    printf("%s",text);

    fclose(fp);

    return 0;
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Writing Characters - fputc()</h2>

<pre class="bg-light border rounded p-3"><code>
fputc('A',fp);
</code></pre>

<p>
Writes a single character into a file.
</p>

<hr>

<h2 class="text-success mt-5">Reading Characters - fgetc()</h2>

<pre class="bg-light border rounded p-3"><code>
char ch;

ch = fgetc(fp);
</code></pre>

<p>
Reads one character from a file.
</p>

<hr>

<h2 class="text-success mt-5">Writing Strings - fputs()</h2>

<pre class="bg-light border rounded p-3"><code>
fputs("Hello World",fp);
</code></pre>

<p>
Writes an entire string into a file.
</p>

<hr>

<h2 class="text-success mt-5">Reading Strings - fgets()</h2>

<pre class="bg-light border rounded p-3"><code>
char text[100];

fgets(text,100,fp);
</code></pre>

<p>
Reads an entire line from a file.
</p>

<hr>

<h2 class="text-success mt-5">Append Data to a File</h2>

<pre class="bg-light border rounded p-3"><code>
FILE *fp;

fp = fopen("student.txt","a");

fprintf(fp,"\\nNew Record");

fclose(fp);
</code></pre>

<hr>

<h2 class="text-success mt-5">Checking File Open Success</h2>

<pre class="bg-light border rounded p-3"><code>
FILE *fp;

fp = fopen("student.txt","r");

if(fp == NULL)
{
    printf("File not found.");
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 3: Store Student Information</h2>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    FILE *fp;

    fp = fopen("student.txt","w");

    fprintf(fp,"Name : Ali\\n");
    fprintf(fp,"Age : 20\\n");
    fprintf(fp,"Marks : 90");

    fclose(fp);

    return 0;
}
</code></pre>

<hr>

<h2 class="text-success mt-5">Example 4: Copy File Contents</h2>

<p>
Open one file for reading and another file for writing. Read each character
using <strong>fgetc()</strong> and write it into the second file using
<strong>fputc()</strong>.
</p>

<hr>

<h2 class="text-success mt-5">Common File Functions</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Function</th>
<th>Purpose</th>
</tr>
</thead>

<tbody>

<tr>
<td>fopen()</td>
<td>Open a file.</td>
</tr>

<tr>
<td>fclose()</td>
<td>Close a file.</td>
</tr>

<tr>
<td>fprintf()</td>
<td>Write formatted data.</td>
</tr>

<tr>
<td>fscanf()</td>
<td>Read formatted data.</td>
</tr>

<tr>
<td>fgetc()</td>
<td>Read one character.</td>
</tr>

<tr>
<td>fputc()</td>
<td>Write one character.</td>
</tr>

<tr>
<td>fgets()</td>
<td>Read one line.</td>
</tr>

<tr>
<td>fputs()</td>
<td>Write one line.</td>
</tr>

<tr>
<td>remove()</td>
<td>Delete a file.</td>
</tr>

<tr>
<td>rename()</td>
<td>Rename a file.</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h3 class="text-primary mt-4">Advantages of File Handling</h3>

<ul>
<li>Permanent data storage.</li>
<li>Large amount of data can be stored.</li>
<li>Easy data sharing.</li>
<li>Useful for reports and records.</li>
<li>Supports text and binary files.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Disadvantages of File Handling</h3>

<ul>
<li>Slower than memory operations.</li>
<li>Files may become corrupted.</li>
<li>Improper closing may lose data.</li>
<li>Requires error handling.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Real-Life Applications</h3>

<ul>
<li>Student Management Systems.</li>
<li>Employee Records.</li>
<li>Banking Software.</li>
<li>Hospital Management Systems.</li>
<li>Library Management.</li>
<li>Inventory Systems.</li>
<li>Online Shopping Applications.</li>
<li>Attendance Systems.</li>
<li>Log Files.</li>
<li>Configuration Files.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Common Mistakes</h3>

<ul>
<li>Forgetting to close the file.</li>
<li>Opening a file in the wrong mode.</li>
<li>Not checking whether fopen() returns NULL.</li>
<li>Reading from a closed file.</li>
<li>Writing to a file opened in read mode.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Best Practices</h3>

<ul>
<li>Always check if the file opened successfully.</li>
<li>Always close files after use.</li>
<li>Use meaningful file names.</li>
<li>Choose the correct file mode.</li>
<li>Handle file errors properly.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
File Handling in C allows programs to permanently store and retrieve data using
files. The most commonly used functions are <strong>fopen()</strong>,
<strong>fclose()</strong>, <strong>fprintf()</strong>,
<strong>fscanf()</strong>, <strong>fgetc()</strong>,
<strong>fputc()</strong>, <strong>fgets()</strong>, and
<strong>fputs()</strong>. File handling is widely used in real-world applications
such as banking systems, school management systems, hospital software, and
database applications.
</p>
`
},


{
title:"Projects",
content:`
<h2 class="text-primary fw-bold mb-3">C Programming Projects</h2>

<p>
Projects are the best way to practice and improve your C programming skills.
After learning variables, operators, loops, arrays, functions, pointers,
structures, and file handling, you should build real-world projects.
Projects help you understand problem-solving techniques, improve logical
thinking, and prepare you for interviews and software development.
</p>

<hr>

<h3 class="text-primary mt-4">Why Build Projects?</h3>

<ul>
<li>Improve programming logic.</li>
<li>Understand real-world applications.</li>
<li>Gain hands-on experience.</li>
<li>Practice debugging skills.</li>
<li>Strengthen problem-solving abilities.</li>
<li>Prepare for job interviews.</li>
<li>Build a programming portfolio.</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 1: Simple Calculator</h2>

<p>
Create a calculator that performs basic arithmetic operations.
</p>

<h4>Concepts Used</h4>

<ul>
<li>Variables</li>
<li>Operators</li>
<li>Switch Statement</li>
<li>User Input</li>
<li>Functions (Optional)</li>
</ul>

<h4>Features</h4>

<ul>
<li>Addition</li>
<li>Subtraction</li>
<li>Multiplication</li>
<li>Division</li>
<li>Modulus</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 2: Student Management System</h2>

<p>
A Student Management System stores and manages student records.
</p>

<h4>Concepts Used</h4>

<ul>
<li>Structures</li>
<li>Arrays</li>
<li>Functions</li>
<li>Loops</li>
<li>File Handling</li>
</ul>

<h4>Features</h4>

<ul>
<li>Add Student</li>
<li>View Students</li>
<li>Search Student</li>
<li>Update Student</li>
<li>Delete Student</li>
<li>Store Data in File</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 3: Library Management System</h2>

<p>
Manage books and library records.
</p>

<h4>Features</h4>

<ul>
<li>Add Book</li>
<li>View Books</li>
<li>Search Book</li>
<li>Issue Book</li>
<li>Return Book</li>
<li>Delete Book</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 4: Employee Management System</h2>

<p>
Store employee information using structures and files.
</p>

<h4>Features</h4>

<ul>
<li>Add Employee</li>
<li>Display Employees</li>
<li>Update Employee</li>
<li>Delete Employee</li>
<li>Search Employee</li>
<li>Calculate Salary</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 5: Bank Management System</h2>

<p>
Simulate a banking application using C.
</p>

<h4>Features</h4>

<ul>
<li>Create Account</li>
<li>Deposit Money</li>
<li>Withdraw Money</li>
<li>Check Balance</li>
<li>Transfer Money</li>
<li>Store Data in Files</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 6: Hospital Management System</h2>

<p>
Maintain patient records efficiently.
</p>

<h4>Features</h4>

<ul>
<li>Add Patient</li>
<li>View Patient</li>
<li>Doctor Information</li>
<li>Search Patient</li>
<li>Delete Patient</li>
<li>Generate Reports</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 7: Inventory Management System</h2>

<p>
Track products and stock information.
</p>

<h4>Features</h4>

<ul>
<li>Add Product</li>
<li>Update Stock</li>
<li>Delete Product</li>
<li>Search Product</li>
<li>Calculate Total Price</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 8: Hotel Management System</h2>

<p>
Manage hotel rooms and customer records.
</p>

<h4>Features</h4>

<ul>
<li>Book Room</li>
<li>Cancel Booking</li>
<li>Customer Details</li>
<li>Room Availability</li>
<li>Generate Bill</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 9: Payroll Management System</h2>

<p>
Calculate employee salaries and maintain payroll records.
</p>

<h4>Features</h4>

<ul>
<li>Add Employee</li>
<li>Calculate Salary</li>
<li>Bonus Calculation</li>
<li>Tax Calculation</li>
<li>Monthly Reports</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 10: Quiz Management System</h2>

<p>
Create a multiple-choice quiz application.
</p>

<h4>Features</h4>

<ul>
<li>Multiple Questions</li>
<li>Score Calculation</li>
<li>Timer (Optional)</li>
<li>Result Display</li>
<li>Save Scores</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 11: ATM Simulation</h2>

<p>
Develop an ATM machine application.
</p>

<h4>Features</h4>

<ul>
<li>PIN Verification</li>
<li>Balance Inquiry</li>
<li>Deposit</li>
<li>Withdraw</li>
<li>Mini Statement</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 12: Voting System</h2>

<p>
Allow users to vote and display election results.
</p>

<h4>Features</h4>

<ul>
<li>Candidate List</li>
<li>Vote Casting</li>
<li>Vote Counting</li>
<li>Winner Declaration</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 13: Bus Reservation System</h2>

<p>
Book and manage bus seats.
</p>

<h4>Features</h4>

<ul>
<li>Seat Booking</li>
<li>Cancel Booking</li>
<li>Passenger Details</li>
<li>Seat Availability</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 14: Online Examination System</h2>

<p>
Conduct simple computer-based exams.
</p>

<h4>Features</h4>

<ul>
<li>Login</li>
<li>Question Paper</li>
<li>Automatic Result</li>
<li>Marks Calculation</li>
</ul>

<hr>

<h2 class="text-success mt-5">Project 15: Contact Management System</h2>

<p>
Store and manage contact information.
</p>

<h4>Features</h4>

<ul>
<li>Add Contact</li>
<li>Search Contact</li>
<li>Update Contact</li>
<li>Delete Contact</li>
<li>Save to File</li>
</ul>

<hr>

<h2 class="text-success mt-5">Programming Concepts Used in These Projects</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Concept</th>
<th>Usage</th>
</tr>
</thead>

<tbody>

<tr>
<td>Variables</td>
<td>Store program data.</td>
</tr>

<tr>
<td>Operators</td>
<td>Perform calculations.</td>
</tr>

<tr>
<td>If-Else</td>
<td>Decision making.</td>
</tr>

<tr>
<td>Switch</td>
<td>Create menu-driven programs.</td>
</tr>

<tr>
<td>Loops</td>
<td>Repeat operations.</td>
</tr>

<tr>
<td>Functions</td>
<td>Divide programs into modules.</td>
</tr>

<tr>
<td>Arrays</td>
<td>Store multiple records.</td>
</tr>

<tr>
<td>Pointers</td>
<td>Manage memory efficiently.</td>
</tr>

<tr>
<td>Structures</td>
<td>Store related information.</td>
</tr>

<tr>
<td>File Handling</td>
<td>Save and retrieve data permanently.</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h3 class="text-primary mt-4">Project Development Steps</h3>

<ol>
<li>Understand the problem.</li>
<li>Identify required features.</li>
<li>Create an algorithm.</li>
<li>Draw a flowchart (optional).</li>
<li>Write the C program.</li>
<li>Compile and run the program.</li>
<li>Test with different inputs.</li>
<li>Fix errors and improve the program.</li>
<li>Save data using file handling if required.</li>
<li>Document your project.</li>
</ol>

<hr>

<h3 class="text-primary mt-4">Tips for Beginners</h3>

<ul>
<li>Start with small projects.</li>
<li>Write clean and readable code.</li>
<li>Use meaningful variable names.</li>
<li>Break programs into functions.</li>
<li>Comment important sections of code.</li>
<li>Test every feature individually.</li>
<li>Practice regularly.</li>
</ul>

<hr>

<h3 class="text-primary mt-4">Summary</h3>

<p>
Building projects is one of the most effective ways to master C programming.
Projects combine all the concepts learned throughout the course, including
variables, operators, decision-making, loops, functions, arrays, pointers,
structures, and file handling. Completing these projects will strengthen your
programming skills, improve logical thinking, and prepare you for advanced
programming languages such as C++, Java, Python, and software development in general.
</p>
`
},

{
title:"Interview Questions",
content:`
<h5>C Programming Interview Questions</h5>
<hr>

<h3 class="text-success">Question 1: What is C Programming?</h3>

<p><strong>Answer:</strong></p>

<p>
<strong>C</strong> is a <strong>general-purpose, procedural, and middle-level programming language</strong>
developed by <strong>Dennis Ritchie</strong> in <strong>1972</strong> at
<strong>Bell Laboratories (Bell Labs)</strong>. It was originally designed to
develop the <strong>UNIX operating system</strong>.
</p>

<p>
C is one of the most popular programming languages because it is simple, fast,
portable, and efficient. It allows programmers to write programs that can run
on different computer systems with little or no modification.
</p>

<p>
Many modern programming languages such as <strong>C++</strong>,
<strong>Java</strong>, <strong>C#</strong>, <strong>Objective-C</strong>, and
<strong>Python</strong> are influenced by C. For this reason, C is often called
the <strong>"Mother of Programming Languages."</strong>
</p>

<hr>

<h5 class="text-primary mt-3">Key Features of C</h5>

<ul>
    <li>General-purpose programming language.</li>
    <li>Procedural (function-oriented) programming language.</li>
    <li>Middle-level programming language.</li>
    <li>Fast and efficient execution.</li>
    <li>Portable across different operating systems.</li>
    <li>Supports structured programming.</li>
    <li>Provides direct memory access using pointers.</li>
    <li>Rich collection of built-in library functions.</li>
    <li>Supports dynamic memory allocation.</li>
    <li>Easy to learn and widely used.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Applications of C Programming</h5>

<ul>
    <li>Operating Systems (Windows, Linux, UNIX).</li>
    <li>Embedded Systems.</li>
    <li>Device Drivers.</li>
    <li>Database Management Systems.</li>
    <li>Compilers and Interpreters.</li>
    <li>Game Development.</li>
    <li>Networking Applications.</li>
    <li>Scientific and Engineering Software.</li>
    <li>Microcontrollers and IoT Devices.</li>
    <li>System Utilities.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Example Program</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    printf("Welcome to C Programming!");

    return 0;
}
</code></pre>

<h5 class="text-primary mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Welcome to C Programming!
</code></pre>

<hr>

<h5 class="text-primary mt-3">Advantages of C Programming</h5>

<ul>
    <li>Simple and easy to learn.</li>
    <li>High execution speed.</li>
    <li>Portable across platforms.</li>
    <li>Efficient memory management.</li>
    <li>Supports modular programming using functions.</li>
    <li>Provides low-level memory access through pointers.</li>
    <li>Ideal for system programming.</li>
    <li>Foundation for learning other programming languages.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
A common interview question is: <strong>"Why is C called the Mother of Programming Languages?"</strong><br><br>

The answer is that many modern programming languages such as <strong>C++, Java, C#, Objective-C,</strong> and others are based on or heavily influenced by C. Learning C also makes it easier to understand advanced programming concepts like memory management, pointers, and data structures.
</div>


<hr>

<h3 class="text-success">Question 2: Who Developed the C Programming Language?</h3>

<p><strong>Answer:</strong></p>

<p>
The <strong>C programming language</strong> was developed by
<strong>Dennis Ritchie</strong> in <strong>1972</strong> at
<strong>Bell Laboratories (Bell Labs)</strong>, which was part of
<strong>AT&amp;T (American Telephone &amp; Telegraph)</strong>.
</p>

<p>
Dennis Ritchie created C to improve the <strong>B programming language</strong>,
which had been developed by <strong>Ken Thompson</strong>. The primary purpose
of creating C was to develop the <strong>UNIX Operating System</strong>. Due to
its speed, efficiency, and portability, C quickly became one of the world's most
popular programming languages.
</p>

<hr>

<h5 class="text-primary mt-3">Quick Facts</h5>

<ul>
    <li><strong>Developer:</strong> Dennis Ritchie</li>
    <li><strong>Year Developed:</strong> 1972</li>
    <li><strong>Organization:</strong> Bell Laboratories (Bell Labs)</li>
    <li><strong>Company:</strong> AT&amp;T</li>
    <li><strong>Based On:</strong> B Programming Language</li>
    <li><strong>Main Purpose:</strong> Develop the UNIX Operating System</li>
</ul>

<hr>

<h5 class="text-primary mt-3">About Dennis Ritchie</h5>

<p>
Dennis MacAlistair Ritchie was an American computer scientist who made
significant contributions to computer science. He is best known for developing
the C programming language and co-developing the UNIX operating system with
Ken Thompson.
</p>

<hr>

<h5 class="text-primary mt-3">Timeline</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Year</th>
<th>Event</th>
</tr>
</thead>

<tbody>

<tr>
<td>1969</td>
<td>Development of the UNIX Operating System began.</td>
</tr>

<tr>
<td>1970</td>
<td>The B Programming Language was developed by Ken Thompson.</td>
</tr>

<tr>
<td>1972</td>
<td>Dennis Ritchie developed the C Programming Language.</td>
</tr>

<tr>
<td>1973</td>
<td>Most of the UNIX kernel was rewritten in C.</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Why Was C Developed?</h5>

<ul>
    <li>To overcome the limitations of the B programming language.</li>
    <li>To write the UNIX Operating System more efficiently.</li>
    <li>To provide better performance and portability.</li>
    <li>To support low-level memory access and system programming.</li>
    <li>To create a language that could run on different computer architectures.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Major Contributions of C</h5>

<ul>
    <li>Made operating system development easier.</li>
    <li>Introduced portable system programming.</li>
    <li>Became the foundation of many modern programming languages.</li>
    <li>Influenced languages such as C++, Java, C#, Objective-C, and others.</li>
    <li>Is still widely used in operating systems, embedded systems, and software development.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
This is one of the most frequently asked C interview questions. Remember these points:
<ul class="mb-0 mt-2">
    <li><strong>Developer:</strong> Dennis Ritchie</li>
    <li><strong>Year:</strong> 1972</li>
    <li><strong>Organization:</strong> Bell Laboratories (Bell Labs)</li>
    <li><strong>Purpose:</strong> Develop the UNIX Operating System</li>
</ul>
</div>




<hr>

<h3 class="text-success">Question 3: What are the Features of C Programming?</h3>

<p><strong>Answer:</strong></p>

<p>
C is one of the most popular programming languages because it provides many
powerful features. These features make C fast, efficient, portable, and suitable
for developing system software, embedded systems, and application software.
</p>

<p>
The following are the major features of the C programming language:
</p>

<hr>

<h5 class="text-primary mt-3">1. Simple and Easy to Learn</h5>

<p>
C has a simple syntax with a limited number of keywords. Beginners can learn
the language easily and understand programming concepts quickly.
</p>

<hr>

<h5 class="text-primary mt-3">2. General-Purpose Language</h5>

<p>
C is a general-purpose programming language that can be used to develop
different types of software such as operating systems, desktop applications,
embedded systems, databases, games, and networking applications.
</p>

<hr>

<h5 class="text-primary mt-3">3. Fast Execution Speed</h5>

<p>
C programs are compiled into machine code before execution. As a result,
they execute much faster than interpreted languages.
</p>

<hr>

<h5 class="text-primary mt-3">4. Portable</h5>

<p>
Programs written in C can run on different operating systems and hardware
platforms with little or no modification. This feature is known as portability.
</p>

<hr>

<h5 class="text-primary mt-3">5. Structured Programming Language</h5>

<p>
C follows a structured programming approach by dividing a large program into
smaller functions. This makes programs easier to understand, debug, test,
and maintain.
</p>

<hr>

<h5 class="text-primary mt-3">6. Rich Standard Library</h5>

<p>
C provides a large collection of built-in library functions for performing
mathematical operations, input/output, string handling, memory management,
file handling, and many other tasks.
</p>

<hr>

<h5 class="text-primary mt-3">7. Supports Pointers</h5>

<p>
Pointers allow direct access to memory addresses. They improve program
performance and are widely used in dynamic memory allocation, arrays,
functions, and data structures.
</p>

<hr>

<h5 class="text-primary mt-3">8. Dynamic Memory Allocation</h5>

<p>
C allows memory to be allocated and released during program execution using
functions such as <code>malloc()</code>, <code>calloc()</code>,
<code>realloc()</code>, and <code>free()</code>.
</p>

<hr>

<h5 class="text-primary mt-3">9. Efficient Memory Management</h5>

<p>
The programmer has direct control over memory, making C highly efficient and
suitable for developing high-performance applications.
</p>

<hr>

<h5 class="text-primary mt-3">10. Middle-Level Language</h5>

<p>
C combines the features of both low-level and high-level programming
languages. It supports direct hardware interaction while also providing
high-level programming constructs.
</p>

<hr>

<h5 class="text-primary mt-3">11. Extensible</h5>

<p>
Programmers can create their own functions and libraries, making C an
extensible programming language.
</p>

<hr>

<h5 class="text-primary mt-3">12. Modular Programming</h5>

<p>
Large programs can be divided into smaller modules using functions. This
improves code reusability and simplifies maintenance.
</p>

<hr>

<h5 class="text-primary mt-3">13. Recursion Support</h5>

<p>
C allows a function to call itself, which is known as recursion. This is
useful for solving complex mathematical and logical problems.
</p>

<hr>

<h5 class="text-primary mt-3">14. Case-Sensitive Language</h5>

<p>
C treats uppercase and lowercase letters differently. For example,
<code>age</code> and <code>Age</code> are considered two different variables.
</p>

<hr>

<h5 class="text-primary mt-3">15. Wide Range of Applications</h5>

<p>
C is used in operating systems, compilers, embedded systems, databases,
device drivers, networking software, game engines, scientific applications,
and many other fields.
</p>

<hr>

<h5 class="text-primary mt-3">Summary of Features</h5>

<ul>
    <li>Simple and easy to learn.</li>
    <li>General-purpose programming language.</li>
    <li>Fast execution speed.</li>
    <li>Portable across different platforms.</li>
    <li>Structured programming language.</li>
    <li>Rich standard library.</li>
    <li>Supports pointers.</li>
    <li>Dynamic memory allocation.</li>
    <li>Efficient memory management.</li>
    <li>Middle-level programming language.</li>
    <li>Extensible.</li>
    <li>Supports modular programming.</li>
    <li>Supports recursion.</li>
    <li>Case-sensitive language.</li>
    <li>Widely used in real-world applications.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Example Program</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

void welcome()
{
    printf("Welcome to C Programming!");
}

int main()
{
    welcome();

    return 0;
}
</code></pre>

<p>
The above program demonstrates one of the important features of C:
<strong>modular programming</strong>. The task is divided into functions,
making the program easier to read and maintain.
</p>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
This is one of the most frequently asked interview questions. Instead of
memorizing all the features, remember the most important ones:
<strong>Simple, Fast, Portable, Structured, Rich Library, Pointers, Dynamic Memory Allocation, Efficient Memory Management, Modular Programming, and Middle-Level Language.</strong>
If asked to explain any feature, provide a short definition with a practical example.
</div>





<hr>

<h3 class="text-success">Question 4: Why is C Called a Middle-Level Language?</h3>

<p><strong>Answer:</strong></p>

<p>
C is called a <strong>middle-level programming language</strong> because it
combines the features of both <strong>high-level</strong> and
<strong>low-level</strong> programming languages. It provides the simplicity
and readability of a high-level language while also allowing direct interaction
with computer hardware like a low-level language.
</p>

<p>
This unique combination makes C suitable for developing both
<strong>system software</strong> (such as operating systems and device drivers)
and <strong>application software</strong> (such as business applications,
games, and databases).
</p>

<hr>

<h5 class="text-primary mt-3">What is a High-Level Language?</h5>

<p>
A high-level language is easy for humans to read, write, and understand.
It provides simple syntax and many built-in features that make programming
easier.
</p>

<p><strong>Examples:</strong></p>

<ul>
    <li>Python</li>
    <li>Java</li>
    <li>C#</li>
    <li>JavaScript</li>
</ul>

<p><strong>Features of High-Level Languages:</strong></p>

<ul>
    <li>Easy to learn and understand.</li>
    <li>English-like syntax.</li>
    <li>Machine-independent.</li>
    <li>Faster software development.</li>
    <li>Less control over hardware.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">What is a Low-Level Language?</h5>

<p>
A low-level language is closer to the computer's hardware and machine language.
It gives programmers direct access to memory and hardware resources.
</p>

<p><strong>Examples:</strong></p>

<ul>
    <li>Assembly Language</li>
    <li>Machine Language</li>
</ul>

<p><strong>Features of Low-Level Languages:</strong></p>

<ul>
    <li>Direct hardware access.</li>
    <li>Fast execution speed.</li>
    <li>Efficient memory usage.</li>
    <li>Difficult to write and understand.</li>
    <li>Machine-dependent.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Why is C Considered a Middle-Level Language?</h5>

<p>
C combines the advantages of both high-level and low-level languages.
It offers user-friendly syntax like a high-level language while providing
low-level capabilities such as pointer manipulation and direct memory access.
</p>

<ul>
    <li>Supports functions, loops, and decision-making statements.</li>
    <li>Allows direct memory access through pointers.</li>
    <li>Supports bitwise operations.</li>
    <li>Can interact directly with hardware.</li>
    <li>Produces fast and efficient programs.</li>
    <li>Can be used for both system programming and application development.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Comparison of High-Level, Low-Level, and Middle-Level Languages</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Feature</th>
<th>High-Level Language</th>
<th>Low-Level Language</th>
<th>C Language</th>
</tr>
</thead>

<tbody>

<tr>
<td>Ease of Learning</td>
<td>Easy</td>
<td>Difficult</td>
<td>Easy to Moderate</td>
</tr>

<tr>
<td>Hardware Access</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
</tr>

<tr>
<td>Execution Speed</td>
<td>Moderate</td>
<td>Very Fast</td>
<td>Fast</td>
</tr>

<tr>
<td>Portability</td>
<td>High</td>
<td>Low</td>
<td>High</td>
</tr>

<tr>
<td>Memory Access</td>
<td>Limited</td>
<td>Direct</td>
<td>Direct (Using Pointers)</td>
</tr>

<tr>
<td>Used For</td>
<td>Applications</td>
<td>Hardware Programming</td>
<td>Both Applications and System Software</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Example Showing High-Level Features</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int number = 10;

    if(number > 5)
    {
        printf("Number is greater than 5");
    }

    return 0;
}
</code></pre>

<p>
The above program uses variables, an <code>if</code> statement, and a function,
which are examples of high-level programming features.
</p>

<hr>

<h5 class="text-primary mt-3">Example Showing Low-Level Features</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int number = 50;
    int *ptr = &number;

    printf("Value = %d\n", *ptr);
    printf("Address = %p", ptr);

    return 0;
}
</code></pre>

<p>
This program demonstrates the use of a <strong>pointer</strong>, which provides
direct access to a memory address. This is considered a low-level programming feature.
</p>

<hr>

<h5 class="text-primary mt-3">Advantages of Being a Middle-Level Language</h5>

<ul>
    <li>Easy to understand and write.</li>
    <li>Provides direct memory access.</li>
    <li>Produces fast and efficient programs.</li>
    <li>Suitable for both system and application development.</li>
    <li>Supports hardware programming.</li>
    <li>Portable across different platforms.</li>
    <li>Provides better control over system resources.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
One of the most common interview questions is:
<strong>"Why is C called a middle-level language?"</strong>

<br><br>

<strong>Best Answer:</strong>

C is called a middle-level language because it combines the features of both
high-level and low-level programming languages. It provides easy-to-understand
syntax, functions, and loops like a high-level language, while also supporting
direct memory access, pointers, and hardware interaction like a low-level language.
</div>




<h3 class="text-success">Question 5: What is the Difference Between a Compiler and an Interpreter?</h3>

<p><strong>Answer:</strong></p>

<p>
A <strong>compiler</strong> translates the entire source code into machine code
before the program is executed. After successful compilation, it generates an
executable file that can be run multiple times without recompiling the source code.
</p>

<p>
An <strong>interpreter</strong> translates and executes the source code
<strong>line by line</strong>. It executes each statement immediately and stops
when it encounters an error.
</p>

<h5 class="text-primary mt-3">Compiler</h5>

<ul>
    <li>Translates the entire program at once.</li>
    <li>Generates an executable (.exe) file.</li>
    <li>Program execution is faster.</li>
    <li>Reports all compilation errors after compiling the program.</li>
    <li>Source code is compiled before execution.</li>
    <li>Examples: GCC, Clang, Microsoft Visual C Compiler.</li>
</ul>

<h5 class="text-primary mt-3">Interpreter</h5>

<ul>
    <li>Translates and executes one statement at a time.</li>
    <li>Does not generate an executable file.</li>
    <li>Program execution is slower.</li>
    <li>Stops execution immediately when an error is found.</li>
    <li>Each execution requires interpretation of the source code.</li>
    <li>Examples: Python Interpreter, JavaScript Engine.</li>
</ul>

<h5 class="text-primary mt-3">Comparison Table</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Compiler</th>
<th>Interpreter</th>
</tr>
</thead>

<tbody>

<tr>
<td>Translates the whole program.</td>
<td>Translates one line at a time.</td>
</tr>

<tr>
<td>Produces an executable file.</td>
<td>Does not produce an executable file.</td>
</tr>

<tr>
<td>Execution is faster.</td>
<td>Execution is slower.</td>
</tr>

<tr>
<td>Reports errors after compilation.</td>
<td>Reports errors line by line.</td>
</tr>

<tr>
<td>Suitable for large applications.</td>
<td>Suitable for scripting and testing.</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
A compiler translates the entire program before execution and creates an executable file, whereas an interpreter translates and executes the program one line at a time without creating an executable file.
</div>

Answer:


<hr>

<h3 class="text-success">Question 6: What is a Token in C?</h3>

<p><strong>Answer:</strong></p>

<p>
A <strong>token</strong> is the smallest meaningful unit in a C program that is
recognized by the compiler. Every C program is made up of different types of
tokens. The compiler reads these tokens to understand and execute the program.
</p>

<p>
For example, keywords, variable names, constants, operators, and special symbols
are all considered tokens in C programming.
</p>

<h5 class="text-primary mt-3">Types of Tokens in C</h5>

<ul>
    <li>Keywords</li>
    <li>Identifiers</li>
    <li>Constants</li>
    <li>String Literals</li>
    <li>Operators</li>
    <li>Special Symbols (Separators)</li>
</ul>

<h5 class="text-primary mt-3">Example</h5>

<pre class="bg-light border rounded p-3"><code>
int age = 20;
</code></pre>

<h5 class="text-primary mt-3">Tokens in the Above Example</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Token</th>
<th>Type</th>
</tr>
</thead>

<tbody>

<tr>
<td>int</td>
<td>Keyword</td>
</tr>

<tr>
<td>age</td>
<td>Identifier</td>
</tr>

<tr>
<td>=</td>
<td>Assignment Operator</td>
</tr>

<tr>
<td>20</td>
<td>Constant</td>
</tr>

<tr>
<td>;</td>
<td>Special Symbol</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Explanation of Each Token</h5>

<ul>
    <li><strong>Keyword:</strong> Reserved word that has a predefined meaning in C.</li>
    <li><strong>Identifier:</strong> Name given to a variable, function, or other user-defined item.</li>
    <li><strong>Constant:</strong> A fixed value that does not change during program execution.</li>
    <li><strong>Operator:</strong> Performs operations on variables and values.</li>
    <li><strong>Special Symbol:</strong> Characters such as <code>;</code>, <code>{ }</code>, <code>( )</code>, and <code>,</code> used by the compiler.</li>
</ul>

<h5 class="text-primary mt-3">Common Examples of Tokens</h5>

<pre class="bg-light border rounded p-3"><code>
float salary = 5000.50;
char grade = 'A';
printf("Hello");
</code></pre>

<p>The tokens in the above statements include:</p>

<ul>
    <li><strong>Keywords:</strong> float, char</li>
    <li><strong>Identifiers:</strong> salary, grade, printf</li>
    <li><strong>Constants:</strong> 5000.50, 'A'</li>
    <li><strong>String Literal:</strong> "Hello"</li>
    <li><strong>Operators:</strong> =</li>
    <li><strong>Special Symbols:</strong> ; ( )</li>
</ul>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
Remember the six main types of tokens in C:
<strong>Keywords, Identifiers, Constants, String Literals, Operators, and Special Symbols.</strong>
This is one of the most frequently asked basic C interview questions.
</div>

<hr>

<h3 class="text-success">Question 7: What are Keywords in C?</h3>

<p><strong>Answer:</strong></p>

<p>
<strong>Keywords</strong> are reserved words in the C programming language that
have predefined meanings. These words are recognized by the C compiler and are
used to perform specific operations. Since keywords have special meanings, they
cannot be used as variable names, function names, or identifiers.
</p>

<p>
The C language has <strong>32 standard keywords</strong> (according to ANSI C).
Each keyword serves a specific purpose in writing C programs.
</p>

<h5 class="text-primary mt-3">Common Keywords in C</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Keyword</th>
<th>Description</th>
</tr>
</thead>

<tbody>

<tr>
<td>int</td>
<td>Declares an integer variable.</td>
</tr>

<tr>
<td>float</td>
<td>Declares a floating-point variable.</td>
</tr>

<tr>
<td>char</td>
<td>Declares a character variable.</td>
</tr>

<tr>
<td>double</td>
<td>Declares a double-precision floating-point variable.</td>
</tr>

<tr>
<td>if</td>
<td>Used for decision making.</td>
</tr>

<tr>
<td>else</td>
<td>Executes an alternative block of code.</td>
</tr>

<tr>
<td>for</td>
<td>Creates a for loop.</td>
</tr>

<tr>
<td>while</td>
<td>Creates a while loop.</td>
</tr>

<tr>
<td>do</td>
<td>Creates a do-while loop.</td>
</tr>

<tr>
<td>switch</td>
<td>Selects one of many code blocks.</td>
</tr>

<tr>
<td>case</td>
<td>Defines a case inside a switch statement.</td>
</tr>

<tr>
<td>break</td>
<td>Terminates a loop or switch statement.</td>
</tr>

<tr>
<td>continue</td>
<td>Skips the current loop iteration.</td>
</tr>

<tr>
<td>return</td>
<td>Returns a value from a function.</td>
</tr>

<tr>
<td>void</td>
<td>Represents no return value or no data type.</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Example</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 20;

    if(age >= 18)
    {
        printf("Adult");
    }
    else
    {
        printf("Minor");
    }

    return 0;
}
</code></pre>

<h5 class="text-primary mt-3">Keywords Used in the Above Program</h5>

<ul>
    <li><strong>int</strong> – Declares integer variables and the return type of <code>main()</code>.</li>
    <li><strong>if</strong> – Checks whether a condition is true.</li>
    <li><strong>else</strong> – Executes when the condition is false.</li>
    <li><strong>return</strong> – Ends the function and returns a value.</li>
</ul>

<h5 class="text-primary mt-3">Important Rules</h5>

<ul>
    <li>Keywords are predefined by the C language.</li>
    <li>Keywords cannot be used as variable names.</li>
    <li>Keywords cannot be used as function names.</li>
    <li>Keywords are written in lowercase.</li>
    <li>C is a case-sensitive language, so <code>int</code> and <code>INT</code> are different.</li>
</ul>

<h5 class="text-primary mt-3">Invalid Examples</h5>

<pre class="bg-light border rounded p-3"><code>
int if = 10;      // Invalid
float return;     // Invalid
char while;       // Invalid
</code></pre>

<p>
The above examples are invalid because <strong>if</strong>,
<strong>return</strong>, and <strong>while</strong> are reserved keywords.
</p>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
Remember that keywords are reserved words with predefined meanings. They cannot
be used as identifiers such as variable names or function names. A common
interview question is to ask how many keywords are in ANSI C—the answer is
<strong>32 keywords</strong>.
</div>

<hr>

<h3 class="text-success">Question 8: What is an Identifier?</h3>

<p><strong>Answer:</strong></p>

<p>
An <strong>identifier</strong> is a user-defined name used to identify variables,
functions, arrays, structures, unions, labels, and other user-defined elements
in a C program. Identifiers make the program easy to read and understand by
giving meaningful names to different program components.
</p>

<p>
Unlike keywords, identifiers are created by the programmer and must follow
specific naming rules defined by the C language.
</p>

<h5 class="text-primary mt-3">Examples of Identifiers</h5>

<ul>
    <li>age</li>
    <li>studentName</li>
    <li>salary</li>
    <li>marks</li>
    <li>calculateSum</li>
    <li>total_amount</li>
    <li>employeeID</li>
</ul>

<h5 class="text-primary mt-3">Example Program</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 20;
    float salary = 35000.50;
    char grade = 'A';

    printf("Age = %d\n", age);
    printf("Salary = %.2f\n", salary);
    printf("Grade = %c", grade);

    return 0;
}
</code></pre>

<h5 class="text-primary mt-3">Identifiers Used in the Above Program</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Identifier</th>
<th>Purpose</th>
</tr>
</thead>

<tbody>

<tr>
<td>main</td>
<td>Function name</td>
</tr>

<tr>
<td>age</td>
<td>Integer variable</td>
</tr>

<tr>
<td>salary</td>
<td>Float variable</td>
</tr>

<tr>
<td>grade</td>
<td>Character variable</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Rules for Naming Identifiers</h5>

<ul>
    <li>An identifier can contain letters (A-Z, a-z), digits (0-9), and underscores (_).</li>
    <li>The first character must be a letter or an underscore (_).</li>
    <li>An identifier cannot begin with a digit.</li>
    <li>Spaces are not allowed.</li>
    <li>Special characters such as @, #, %, &, ! are not allowed.</li>
    <li>Keywords cannot be used as identifiers.</li>
    <li>C is case-sensitive, so <code>Age</code> and <code>age</code> are different identifiers.</li>
</ul>

<h5 class="text-primary mt-3">Valid Identifiers</h5>

<ul>
    <li>age</li>
    <li>studentName</li>
    <li>total_marks</li>
    <li>_count</li>
    <li>salary2025</li>
    <li>empID</li>
</ul>

<h5 class="text-primary mt-3">Invalid Identifiers</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-danger">
<tr>
<th>Identifier</th>
<th>Reason</th>
</tr>
</thead>

<tbody>

<tr>
<td>2age</td>
<td>Starts with a digit.</td>
</tr>

<tr>
<td>student name</td>
<td>Contains a space.</td>
</tr>

<tr>
<td>float</td>
<td>Keyword cannot be used.</td>
</tr>

<tr>
<td>@salary</td>
<td>Contains a special character.</td>
</tr>

<tr>
<td>total-price</td>
<td>Hyphen (-) is not allowed.</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Difference Between Keywords and Identifiers</h5>

<div class="table-responsive">
<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Keyword</th>
<th>Identifier</th>
</tr>
</thead>

<tbody>

<tr>
<td>Predefined by the C language.</td>
<td>Created by the programmer.</td>
</tr>

<tr>
<td>Has a special meaning.</td>
<td>Represents variables, functions, arrays, etc.</td>
</tr>

<tr>
<td>Cannot be used as a variable name.</td>
<td>Can be used to name program elements.</td>
</tr>

<tr>
<td>Examples: int, if, while</td>
<td>Examples: age, marks, totalSalary</td>
</tr>

</tbody>

</table>
</div>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
A common interview question is: <strong>Can an identifier start with a number?</strong><br><br>
<strong>Answer:</strong> No. An identifier must begin with a letter or an underscore (_). It cannot start with a digit.
</div>

<hr>

<h3 class="text-success">Question 9: What are Variables?</h3>

<p><strong>Answer:</strong></p>

<p>
A <strong>variable</strong> is a named memory location used to store data in a
program. Variables allow programmers to store, modify, and retrieve values
during program execution. The value of a variable can change while the program
is running, which is why it is called a <strong>variable</strong>.
</p>

<p>
Before using a variable in C, it must be declared with an appropriate
<strong>data type</strong>. The data type determines the type of data the
variable can store and how much memory is allocated for it.
</p>

<hr>

<h5 class="text-primary mt-3">Syntax</h5>

<pre class="bg-light border rounded p-3"><code>
data_type variable_name;
</code></pre>

<h5 class="text-primary mt-3">Examples</h5>

<pre class="bg-light border rounded p-3"><code>
int age;
float salary;
char grade;
double percentage;
</code></pre>

<hr>

<h5 class="text-primary mt-3">Variable Initialization</h5>

<p>
Initialization means assigning a value to a variable at the time of declaration.
</p>

<pre class="bg-light border rounded p-3"><code>
int age = 20;
float salary = 35000.50;
char grade = 'A';
</code></pre>

<hr>

<h5 class="text-primary mt-3">Example Program</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 22;
    float salary = 45000.75;
    char grade = 'A';

    printf("Age = %d\n", age);
    printf("Salary = %.2f\n", salary);
    printf("Grade = %c", grade);

    return 0;
}
</code></pre>

<h5 class="text-primary mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Age = 22
Salary = 45000.75
Grade = A
</code></pre>

<hr>

<h5 class="text-primary mt-3">Types of Variables in C</h5>

<ul>
    <li>Local Variables</li>
    <li>Global Variables</li>
    <li>Static Variables</li>
    <li>Register Variables</li>
    <li>External Variables</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Common Data Types Used with Variables</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
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
<td>45.75</td>
</tr>

<tr>
<td>double</td>
<td>Stores large decimal values.</td>
<td>12345.6789</td>
</tr>

<tr>
<td>char</td>
<td>Stores a single character.</td>
<td>'A'</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Rules for Declaring Variables</h5>

<ul>
    <li>A variable name must begin with a letter or an underscore (_).</li>
    <li>It cannot begin with a number.</li>
    <li>Spaces are not allowed.</li>
    <li>Special characters such as @, #, %, &, and ! are not allowed.</li>
    <li>Keywords cannot be used as variable names.</li>
    <li>C is case-sensitive. For example, <code>age</code> and <code>Age</code> are different variables.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Valid Variable Names</h5>

<ul>
    <li>age</li>
    <li>studentName</li>
    <li>totalMarks</li>
    <li>salary2025</li>
    <li>_count</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Invalid Variable Names</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-danger">
<tr>
<th>Variable Name</th>
<th>Reason</th>
</tr>
</thead>

<tbody>

<tr>
<td>2age</td>
<td>Starts with a number.</td>
</tr>

<tr>
<td>student name</td>
<td>Contains a space.</td>
</tr>

<tr>
<td>float</td>
<td>It is a keyword.</td>
</tr>

<tr>
<td>@salary</td>
<td>Contains a special character.</td>
</tr>

<tr>
<td>total-price</td>
<td>Hyphen (-) is not allowed.</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Advantages of Variables</h5>

<ul>
    <li>Store data efficiently.</li>
    <li>Allow values to change during program execution.</li>
    <li>Improve code readability.</li>
    <li>Reduce code repetition.</li>
    <li>Make programs dynamic and flexible.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
Remember that a <strong>variable</strong> is a named memory location used to store data, while a <strong>constant</strong> stores a fixed value that cannot be changed during program execution.
</div>

<hr>

<h3 class="text-success">Question 10: What are Data Types in C?</h3>

<p><strong>Answer:</strong></p>

<p>
A <strong>data type</strong> specifies the type of data that a variable can
store in a C program. It tells the compiler how much memory to allocate for
the variable and what type of values the variable can hold.
</p>

<p>
For example, if you want to store a whole number, you use the
<strong>int</strong> data type. If you want to store decimal values, you use
<strong>float</strong> or <strong>double</strong>. For storing a single
character, you use the <strong>char</strong> data type.
</p>

<hr>

<h5 class="text-primary mt-3">Why Are Data Types Important?</h5>

<ul>
    <li>Determine the type of data a variable can store.</li>
    <li>Specify the amount of memory allocated.</li>
    <li>Improve memory management.</li>
    <li>Help the compiler detect errors.</li>
    <li>Increase program efficiency.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Types of Data Types in C</h5>

<ul>
    <li>Basic (Primary) Data Types</li>
    <li>Derived Data Types</li>
    <li>User-Defined Data Types</li>
    <li>Void Data Type</li>
</ul>

<hr>

<h5 class="text-primary mt-3">1. Basic (Primary) Data Types</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
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
<td>Stores decimal numbers (single precision).</td>
<td>15.75</td>
</tr>

<tr>
<td>double</td>
<td>Stores large decimal numbers (double precision).</td>
<td>12345.6789</td>
</tr>

<tr>
<td>char</td>
<td>Stores a single character.</td>
<td>'A'</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Example Program</h5>

<pre class="bg-light border rounded p-3"><code>
#include &lt;stdio.h&gt;

int main()
{
    int age = 22;
    float salary = 45000.50;
    double pi = 3.1415926535;
    char grade = 'A';

    printf("Age = %d\n", age);
    printf("Salary = %.2f\n", salary);
    printf("Pi = %lf\n", pi);
    printf("Grade = %c\n", grade);

    return 0;
}
</code></pre>

<hr>

<h5 class="text-primary mt-3">Output</h5>

<pre class="bg-dark text-white rounded p-3"><code>
Age = 22
Salary = 45000.50
Pi = 3.141593
Grade = A
</code></pre>

<hr>

<h5 class="text-primary mt-3">2. Derived Data Types</h5>

<p>
Derived data types are created from the basic data types.
</p>

<ul>
    <li>Arrays</li>
    <li>Pointers</li>
    <li>Functions</li>
</ul>

<h6 class="text-success">Example</h6>

<pre class="bg-light border rounded p-3"><code>
int marks[5];
int *ptr;
</code></pre>

<hr>

<h5 class="text-primary mt-3">3. User-Defined Data Types</h5>

<p>
User-defined data types are created by the programmer according to the
requirements of the program.
</p>

<ul>
    <li>struct</li>
    <li>union</li>
    <li>enum</li>
    <li>typedef</li>
</ul>

<h6 class="text-success">Example</h6>

<pre class="bg-light border rounded p-3"><code>
struct Student
{
    int id;
    char name[20];
};
</code></pre>

<hr>

<h5 class="text-primary mt-3">4. Void Data Type</h5>

<p>
The <strong>void</strong> data type represents the absence of a value. It is
commonly used when a function does not return any value or when a function
accepts no arguments.
</p>

<h6 class="text-success">Example</h6>

<pre class="bg-light border rounded p-3"><code>
void display()
{
    printf("Hello");
}
</code></pre>

<hr>

<h5 class="text-primary mt-3">Memory Size of Common Data Types</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>Data Type</th>
<th>Typical Size</th>
</tr>
</thead>

<tbody>

<tr>
<td>char</td>
<td>1 Byte</td>
</tr>

<tr>
<td>int</td>
<td>4 Bytes</td>
</tr>

<tr>
<td>float</td>
<td>4 Bytes</td>
</tr>

<tr>
<td>double</td>
<td>8 Bytes</td>
</tr>

</tbody>

</table>

</div>

<p class="text-muted">
<strong>Note:</strong> The actual size may vary depending on the compiler and operating system.
</p>

<hr>

<h5 class="text-primary mt-3">Difference Between float and double</h5>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">
<tr>
<th>float</th>
<th>double</th>
</tr>
</thead>

<tbody>

<tr>
<td>4 Bytes</td>
<td>8 Bytes</td>
</tr>

<tr>
<td>Single Precision</td>
<td>Double Precision</td>
</tr>

<tr>
<td>Less Accurate</td>
<td>More Accurate</td>
</tr>

<tr>
<td>Consumes Less Memory</td>
<td>Consumes More Memory</td>
</tr>

</tbody>

</table>

</div>

<hr>

<h5 class="text-primary mt-3">Advantages of Data Types</h5>

<ul>
    <li>Efficient memory utilization.</li>
    <li>Improves program performance.</li>
    <li>Helps prevent invalid data storage.</li>
    <li>Makes programs easier to understand.</li>
    <li>Improves code reliability.</li>
</ul>

<hr>

<h5 class="text-primary mt-3">Interview Tip</h5>

<div class="alert alert-info">
Interviewers often ask:
<ul class="mb-0 mt-2">
    <li>What is a data type?</li>
    <li>What is the difference between <strong>float</strong> and <strong>double</strong>?</li>
    <li>What is the size of <strong>int</strong>, <strong>char</strong>, and <strong>double</strong>?</li>
    <li>What is the purpose of the <strong>void</strong> data type?</li>
</ul>
Be prepared to answer these basic questions confidently.
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