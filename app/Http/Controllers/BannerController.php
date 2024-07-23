<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $banner = new Banner();
        $banner->title = $data['title'];
        $banner->content = $data['content'];
        $banner->image = $data['image'];
        $banner->link = $data['link'];

        $path = 'uploads/banner/';

        $name_file = $request->file('image');
        $name_image = $name_file->getClientOriginalName();
        $name = current(explode('.', $name_image));
        $real_name = $name . '_' . rand(1, 1000) . '.' . $name_file->getClientOriginalExtension();
        $name_file->move($path, $real_name);
        $banner->image = $real_name;
        $banner->save();

        return redirect()->route('banner.index');


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
        $detailban = Banner::find($id);
        return view('admin.banner.update',compact('detailban'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request -> all();
        $banner = Banner::find($id);
        $banner->title = $data['title'];
        $file =$request->file('image');
        $banner->content = $data['content'];
        $banner->link = $data['link'];

        $real_name = $data['file'];

        if ($file) {
            $size = $file->getSize();
            if ($size > 0) {
                if (file_exists('uploads/banner/' . $banner->image)) {
                    unlink('uploads/banner/' . $banner->image);
                }
                $path = 'uploads/banner/';

                $name_file = $file->getClientOriginalName();
                $name_image = current(explode('.', $name_file));
                $real_name = $name_image . '_' . rand(1, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $real_name);
            }
        }

        $banner->image = $real_name;
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        if(file_exists('uploads/banner/'.$banner->image)){
            unlink('uploads/banner/'.$banner->image);
        }
        $banner->delete();
        return redirect()->route('banner.index');

    }
}
