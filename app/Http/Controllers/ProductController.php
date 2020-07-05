<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class ProductRequest
use App\Http\Requests\ProductReqeust;
// Import Class STR
use Illuminate\Support\Str;

// Import Model Product
use App\Models\Product;
// Import Model Member
use App\Models\Member;
// Import Model ProductCategory
use App\Models\ProductCategory;

class ProductController extends Controller
{
    // READ
    public function index()
    {
        $products = Product::with('user', 'member', 'product_category')->latest()->get();

        return view('dashboard.product', compact('products'));
    }

    // CREATE
    public function create()
    {
        $members = Member::latest()->get();
        $productCategories = ProductCategory::latest()->get();

        return view('dashboard_create.product_create', compact('members', 'productCategories'));
    }

    public function store(ProductReqeust $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $request->user()->products()->create($data);

        return redirect('/product')->with('msg', 'Data Produk Berhasil ditambakan');
    }

    public function show($id)
    {
        return abort('404');
    }

    public function edit($slug) 
    {
        $members = Member::latest()->get();
        $productCategories = ProductCategory::latest()->get();
        $product = Product::with('user', 'member', 'product_category')->where('slug', $slug)->first();

        return view('dashboard_edit.product_edit', compact('product', 'members', 'productCategories'));
    }

    public function update(ProductReqeust $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        Product::findOrFail($id)->update($data);

        return redirect('/product')->with('msg', 'Data Produk Berhasil diedit');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/product')->with('msg', 'Data Produk Berhasil dihapus');   
    }
}
