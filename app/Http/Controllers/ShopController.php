<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //return the data from model
    public function Shop(){
        return view('shop',
        [
            'title'     =>  'Products',
            'heading'   =>  'Books',
            'shops' => Shop::all()
        ]
    );
    }
}