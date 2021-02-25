<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function display($page){
        return view('shop',["abc"=>$page]);
    }
}
