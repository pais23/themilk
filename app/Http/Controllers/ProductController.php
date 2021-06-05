<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view("admin.addproduct");
    }

    public function store(Request $request)
    {
        if ($request->hasFile("image")) {
            $name = $request->file("image")->getClientOriginalName();
            $file = $request->file("image");

            $file->move(public_path()."/product",$name);
        }
        Product::create([
            "product_name" => $request->nama,
            "price" => $request->price,
            "image" => $name
        ]);
        return redirect()->to("/admin");
    }

    public function edit($id)
    {
        $dt = Product::findorfail($id);
        return view('.admin.editproduct', compact('dt'));
    }

    public function update(Request $request,$id)
    {
        $ubah = Product::findorfail($id);
        $awal = $ubah->image;

        $dt = [
            'product_name' => $request['nama'],
            'price' => $request['price'],
            'image' => $awal,
        ];

        if($request->hasFile('image'))
        {
            $request->image->move(\public_path().'/product', $awal);
        }

        $ubah->update($dt);
        return redirect('/admin');
    }

    public function delete($id)
    {
        $hapus = Product::find($id);
        $hapus->delete();
        return redirect('/admin');
    }
}
