<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('application.contact' , ['title'=> 'Contact', 'active' => 'Contact']);
    }
}
