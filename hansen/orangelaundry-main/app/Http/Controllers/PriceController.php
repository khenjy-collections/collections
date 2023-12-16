<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function show() 
    {
        $item = Item::all();
        return view('application.price', 
        [
            'title' => 'Price',
            'active' => 'Price',
            'item_list' => $item
        ]);
    }
}
