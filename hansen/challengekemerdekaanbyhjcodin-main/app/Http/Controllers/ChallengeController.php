<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChallengeController extends Controller
{
    public function index() {
        $challenges = Challenge::all();
        return view('applications.challenge',  compact('challenges'));
    }

    public function create() {
        return view('applications.create');
    }

    public function submit (Request $request) {
      

        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $challenge = new Challenge();
        $challenge->title = $request->title;
        $challenge->desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Simpan gambar ke direktori penyimpanan
           $image->move(public_path('images'), $imageName);
            
            $challenge->image = $imageName;
        }

        $challenge->save();

        return redirect()->to('/challenge');
    }
}
