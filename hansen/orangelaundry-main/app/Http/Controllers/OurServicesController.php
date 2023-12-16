<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function show() {
        return view('application.our-services', [
            "title"=>'Our Services',
            "active" => 'Our Services'
        ]);
    }
}
