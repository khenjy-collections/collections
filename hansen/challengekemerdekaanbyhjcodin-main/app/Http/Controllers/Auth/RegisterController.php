<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function regist (Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        if($validate) {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password
            ]);
            $user->save();
            return redirect()->to('/masuk');
        }
        echo('Error');


    }
}
