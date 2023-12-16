<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class OnlineOrderController extends Controller
{
    public function show() {
        $item = Item::all();
        return view('application.online-order', [
            'title' => 'Order Online',
            'active' => 'Order Online',
            'item_list' => $item
        ]);
    }
}
