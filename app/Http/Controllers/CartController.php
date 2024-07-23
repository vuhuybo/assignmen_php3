<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Variant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addCart(){
                $name = $_GET['name'];
                $price = $_GET['price'];
                $user_id = $_GET['user_id'];
                $idProduct = $_GET['idProduct'];
                $dataColor = $_GET['dataColor'];
                $dataQuantity = $_GET['dataQuantity'];
                $dataImage = $_GET['dataImage'];
                  $variant = $_GET['variant'];

                $total = intval($dataQuantity) * intval($price);

                $cart = new Carts();
                $cart->name = $name;
                $cart->price = $price;
                $cart->id_user = 1;
                $cart->id_product = $idProduct;
                $cart->color = $dataColor;
                $cart->quantity = intval($dataQuantity);
                $cart->image = $dataImage;
                $cart->id_variant = intval($variant);
                $cart->total = $total;
                $cart->save();
                return response()->json([
                    'quantity'=>$dataQuantity,
                    'quantity'=>$dataQuantity,
                    'quantity'=>$dataQuantity

                ]);


    }
    public function CheckCard(){
        $variant = $_GET['variant'];
        $data = Carts::where('id_variant',$variant)->where('id_user',1)->first();
        if($data){
            return $data;
        }
    }
    public function UpdateCard(){
        $id = $_GET['id'];
        $quantity = $_GET['quantitys'];
        $price = $_GET['price'];
        $total = intval($price) * intval($quantity);
        $cart = Carts::find($id);
        $cart->quantity = $quantity;
        $cart->total=$total;
        $cart->save();
    }

    public function destroy($id)
    {
        // Find the cart item by ID
        $cartItem = Carts::find($id);

        // Check if the cart item exists
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        }

    }

    public function quantityCart(){

        $id = $_GET['id'];
        $total = $_GET['total'];
        $quantity = $_GET['quantity'];

        $cart = Carts::find($id);
        $cart->quantity = $quantity;
        $cart->total = $total;
        $cart->save();

    }


    public function checkCart(){

        $variant = $_GET['checkVariant'];

        $data  = Variant::where('id',$variant)->first();
        if($data){
            return $data;
        }
    }
}
