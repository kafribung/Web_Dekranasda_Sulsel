<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $popular = Product::with('user', 'member', 'product_category', 'productsImgs')->where('popular', 1)->first();
        $alam    = ProductCategory::with('user', 'products')->where('name', 'Asli Alam')->first();
        $batu    = ProductCategory::with('user', 'products')->where('name', 'Batu-batuan')->first();
        $kayu    = ProductCategory::with('user', 'products')->where('name', 'Kayu')->first();
        $keramik = ProductCategory::with('user', 'products')->where('name', 'Keramik')->first();
        $logam   = ProductCategory::with('user', 'products')->where('name', 'Logam')->first();
        $serat   = ProductCategory::with('user', 'products')->where('name', 'Serat')->first();
        $tekstil = ProductCategory::with('user', 'products')->where('name', 'Tekstil')->first();
        return view('pages.produk', compact('popular', 'alam', 'batu', 'kayu', 'keramik', 'logam', 'serat', 'tekstil'));
    }

    public function show($slug)
    {
        $product  = Product::with('user', 'member', 'product_category', 'productsImgs')->where('slug', $slug)->first();
        $products = Product::with('user', 'member', 'product_category', 'productsImgs')->inRandomOrder()->limit(4)->get();
        return view('pages.produk_singel', compact('product', 'products'));
    }
}
