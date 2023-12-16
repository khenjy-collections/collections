<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){  
        $nama = 'Laravel';  
        return view('student', ['nama' => $nama]);
    }
}
