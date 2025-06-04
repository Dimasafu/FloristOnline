<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(12); // ambil data dengan relasi kategori, 8 per halaman
        return view('product.index', compact('products'));
    }
}
