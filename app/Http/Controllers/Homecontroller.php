<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    
    public function index()
    {
        $latestProducts = Product::latest()->take(4)->get(); // Ambil 4 produk terbaru
        return view('home', compact('latestProducts'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function cart()
    {
        return view('cart');
    }
}
