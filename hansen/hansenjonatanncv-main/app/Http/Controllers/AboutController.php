<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('application.about', ['title' => 'About', 'active' => 'about']);
    }
}
