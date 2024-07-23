<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
use HasFactory;

public function getAll(){
    $products = DB::table('products')

    ->join('categories','products.category_id', '=', 'categories.id')
    ->select('products.*','categories.name' )
    ->orderBy('products.id','DESC')
    ->get();
    return $products;
}

public function variant(){
    return $this->hasMany(Variant::class,'product_id');
}
}
