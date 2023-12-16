<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $data = Student::all();
        return view('student.home', compact('data'));
    }

    // public function show($id){
    //     $data = Student::find($id);
    //     $datas = $data::all(); 

    //     return view('student.detail', compact('datas'));
    // }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
       $student = new Student;
       $student->first_name = $request->first_name;
       $student->last_name = $request->last_name;
       $student->email = $request->email;

        $student->save();

        return redirect('/');
    }

    public function delete($id) {
        $data = Student::find($id);
        $data->delete();

        return redirect('/');
    }

    // public function deleteall() {
    //     $data = Student::all();
    //     $data->deleteall();

    //     return redirect('/');
    // }

  

}
