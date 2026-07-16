<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CLanguageController extends Controller
{
     public function CLanguageCourse()
    {
        return view('C_Language.c-course');
    }
}
