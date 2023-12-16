<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class BatamShuttleController extends Controller
{
    public function show() {
        $service = Service::all();
        return view('application.batam-shuttle', [
            'title' => 'Batam Shuttle Laundry',
            'active' => 'Batam Shuttle Laundry',
            'service_list' => $service
        ]);
}}