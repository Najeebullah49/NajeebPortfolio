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
            overflow:hidden;
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

    <a href="#" onclick="showLesson(0); return false;">Introduction</a>
    <a href="#" onclick="showLesson(1); return false;">History</a>
    <a href="#" onclick="showLesson(2); return false;">Features</a>
    <a href="#" onclick="showLesson(3); return false;">Structure</a>
    <a href="#" onclick="showLesson(4); return false;">First Program</a>
    <a href="#" onclick="showLesson(5); return false;">Variables</a>
    <a href="#" onclick="showLesson(6); return false;">Data Types</a>
    <a href="#" onclick="showLesson(7); return false;">Constants</a>
    <a href="#" onclick="showLesson(8); return false;">Operators</a>
    <a href="#" onclick="showLesson(9); return false;">Input Output</a>
    <a href="#" onclick="showLesson(10); return false;">If Else</a>
    <a href="#" onclick="showLesson(11); return false;">Loops</a>
    <a href="#" onclick="showLesson(12); return false;">Functions</a>
    <a href="#" onclick="showLesson(13); return false;">Arrays</a>
    <a href="#" onclick="showLesson(14); return false;">Pointers</a>
    <a href="#" onclick="showLesson(15); return false;">Structures</a>
    <a href="#" onclick="showLesson(16); return false;">File Handling</a>
    <a href="#" onclick="showLesson(17); return false;">Projects</a>
    <a href="#" onclick="showLesson(18); return false;">Interview Questions</a>

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
title:"Introduction",
content:`
<h2>Introduction to C</h2>
<p>C is a general purpose programming language.</p>
`
},

{
title:"History",
content:`
<h2>History</h2>
<p>C language was developed by Dennis Ritchie in 1972.</p>
`
},

{
title:"Features",
content:`
<h2>Features</h2>
<ul>
<li>Simple</li>
<li>Portable</li>
<li>Fast</li>
</ul>
`
},

{
title:"Structure",
content:`
<h2>Structure of C Program</h2>
<p>Basic structure of a C program.</p>
`
},

{
title:"First Program",
content:`
<h2>First Program</h2>
<p>This chapter explains the first C program.</p>
`
},

{
title:"Variables",
content:`
<h2>Variables</h2>
<p>Variables store data.</p>
`
},

{
title:"Data Types",
content:`
<h2>Data Types</h2>
<p>int, float, char, double</p>
`
},

{
title:"Constants",
content:`
<h2>Constants</h2>
<p>Constants are fixed values.</p>
`
},

{
title:"Operators",
content:`
<h2>Operators</h2>
<p>Arithmetic, Logical, Assignment, Relational, Bitwise</p>
`
},

{
title:"Input Output",
content:`
<h2>Input Output</h2>
<p>scanf() and printf()</p>
`
},

{
title:"If Else",
content:`
<h2>If Else</h2>
<p>Decision making statements.</p>
`
},

{
title:"Loops",
content:`
<h2>Loops</h2>
<p>for, while, do while</p>
`
},

{
title:"Functions",
content:`
<h2>Functions</h2>
<p>User defined and library functions.</p>
`
},

{
title:"Arrays",
content:`
<h2>Arrays</h2>
<p>Single and multidimensional arrays.</p>
`
},

{
title:"Pointers",
content:`
<h2>Pointers</h2>
<p>Pointers store memory addresses.</p>
`
},

{
title:"Structures",
content:`
<h2>Structures</h2>
<p>Group different data types.</p>
`
},

{
title:"File Handling",
content:`
<h2>File Handling</h2>
<p>fopen(), fclose(), fprintf(), fscanf()</p>
`
},

{
title:"Projects",
content:`
<h2>Projects</h2>
<p>Create calculator, student management system, etc.</p>
`
},

{
title:"Interview Questions",
content:`
<h2>Interview Questions</h2>
<p>Top C language interview questions.</p>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection