<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carts;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Checkout($id){
        $cart = Carts::where('id_user',1)->get();
        $quantity = Carts::where('id_user',1)->sum('quantity');
        $total = Carts::where('id_user',1)->sum('total');
        return view('user.checkout',compact('cart','quantity','total'));

    }
}
