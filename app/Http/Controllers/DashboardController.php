<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view("admin.dashboard",[
            "product" => $product
        ]);
    }

    public function home()
    {
        return view("home");
    }

    public function produk()
    {
        $product = Product::all();
        return view("produk",[
            "product" => $product
        ]);
    }

    public function about()
    {
        return view("main.about");
    }


}
