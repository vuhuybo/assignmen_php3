<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $products;

    public function __construct()
    {
        $this->products = new Product();
    }



    public function index()
    {
        $product = $this->products->getAll();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // lấy danh mục sản phẩm
        // sử dụng query builder
        $categories = DB::table('categories')->get();
        return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $product = new Product();
        $product->name_product = $data['name_product'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->date_time = $data['date_time'];
        $product->describe = $data['describe'];
        $product->category_id = $data['category_id'];
        $path = 'uploads/product/';

        $name_file = $request->file('image');
        $name_image = $name_file->getClientOriginalName();
        $name = current(explode('.', $name_image));
        $real_name = $name . '_' . rand(1, 1000) . '.' . $name_file->getClientOriginalExtension();
        $name_file->move($path, $real_name);
        $product->image = $real_name;
        $product->save();

        //Biến thể

        $file = $data['product_variant'];

        foreach ($file as $var) {
            $variant = new Variant();
            $variant->product_id = $product->id;
            $variant->quantity = $var['quantity'];
            $variant->color = $var['color'];
            $name_files = $var['image'];
            $name_img = $name_files->getClientOriginalName();
            $img = current(explode('.', $name_img));
            $real_names = $img . '_' . rand(1, 1000) . '.' . $name_files->getClientOriginalExtension();
            $name_files->move($path, $real_names);
            $variant->image = $real_names;
            $variant->save();
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();
        $detail = Product::find($id);
        return view('admin.product.update', compact('detail', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $file =$request->file('image');
        $product = Product::find($id);
        $product->name_product = $data['name_product'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->date_time = $data['date_time'];
        $product->describe = $data['describe'];
        $product->category_id = $data['category_id'];

        $real_name = $data['file'];

        if ($file) {
            $size = $file->getSize();
            if ($size > 0) {
                if (file_exists('uploads/product/' . $product->image)) {
                    unlink('uploads/product/' . $product->image);
                }
                $path = 'uploads/product/';

                $name_file = $file->getClientOriginalName();
                $name_image = current(explode('.', $name_file));
                $real_name = $name_image . '_' . rand(1, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $real_name);
            }
        }

        $product->image = $real_name;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (file_exists('uploads/product/' . $product->image)) {
            unlink('uploads/product/' . $product->image);
        }
        $product->delete();
        return redirect()->route('product.index');
    }
}
