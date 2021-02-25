<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dienthoai;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $req){
        $id = $req->id;
        $a = dienthoai::find($id);
        $phone = new Product($a->id,$a->name,$a->price);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }
        else{
            $cart[$id] = [
                'id' => $phone->id,
                'name' => $phone->name,
                'price' => $phone->price,
                'quantity' => 1
            ];
        }
       
        session()->put('cart',$cart);
        echo session()->get("cart")[$id]['name'];
        
    }
    public function remove(Request $req){
        $id = $req->id;
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart',$cart);
        return 0;
    }
}
