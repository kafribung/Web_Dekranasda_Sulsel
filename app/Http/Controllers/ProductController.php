<?php

namespace App\Http\Controllers;

// Import Class ProductRequest
use App\Http\Requests\ProductReqeust;
// Import Class STR
use Illuminate\Support\Str;
// Import Model 
use App\Models\{ProductCategory, Member, Product};

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

    // Store
    public function store(ProductReqeust $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $request->user()->products()->create($data);
        return redirect('/product')->with('msg', 'Data Produk Berhasil ditambakan');
    }

    // Show
    public function show($id)
    {
        return abort('404');
    }

    // Edit
    public function edit($slug)
    {
        $members = Member::latest()->get();
        $productCategories = ProductCategory::latest()->get();
        $product = Product::with('user', 'member', 'product_category')->where('slug', $slug)->first();
        $this->authorize('isOwner', $product);
        return view('dashboard_edit.product_edit', compact('product', 'members', 'productCategories'));
    }

    // Update
    public function update(ProductReqeust $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Product::findOrFail($id)->update($data);
        return redirect('/product')->with('msg', 'Data Produk Berhasil diedit');
    }

    // Delete
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $this->authorize('isOwner', $product);
        Product::destroy($id);
        return redirect('/product')->with('msg', 'Data Produk Berhasil dihapus');
    }

    public function popular($slug)
    {

        $data = Product::where('slug', $slug)->first();
        // Seleksi Popular Max 1
        if (Product::where('popular', 1)->count() >= 1) {
            return redirect('/product')->with('msg', 'Data Produk Popular MAX 1');
        }
        $data->popular = 1;
        $data->save();
        return redirect('/product')->with('msg', 'Data Produk ' . $data->name . ' diset Popular');
    }

    public function nopopular($slug)
    {
        $data = Product::where('slug', $slug)->first();
        $data->popular = 0;
        $data->save();
        return redirect('/product')->with('msg', 'Data Produk ' . $data->name . ' diset Not Popular');
    }
}
