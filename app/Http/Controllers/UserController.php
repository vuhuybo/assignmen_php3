<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Carts;
use App\Models\Category;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
         $product = Product::all();
         $banner = Banner::all();
         $cart = Carts::where('id_user',1)->get();
        return view('user.home',compact('product','banner','cart'));
    }

    public function detail($name_product) {
        $cart = Carts::where('id_user',1)->get();

        $product = Product::with('variant')->where('name_product', $name_product)->first();
        // return response()->json($product);
        return view('user.detail',compact('product','cart'));

    }

    public function viewcart(){
        $cart = Carts::where('id_user',1)->get();
        return view('user.viewcart',compact('cart'));
    }


}
