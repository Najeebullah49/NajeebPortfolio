<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HTMLController extends Controller
{
      public function HTMLCourse()
    {
        return view('HTML.html-course');
    }

}
