<?php

namespace App\Http\Controllers;

// Import Class ProductCategoryRequest
use App\Http\Requests\ProductCategoryRequest;
// Import Model ProductCategory
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    // READ
    public function index()
    {
        $productCategories = ProductCategory::with('user')->latest()->get();
        return view('dashboard.product_category', compact('productCategories'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.product_category_create');
    }

    // STORE
    public function store(ProductCategoryRequest $request)
    {
        $data = $request->all();
        $request->user()->product_categories()->create($data);
        return redirect('/product-category')->with('msg', 'Data Produk Kategoti Berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $this->authorize('isOwner', $productCategory);
        return view('dashboard_edit.product_category_edit', compact('productCategory'));
    }

    // UPDATE
    public function update(ProductCategoryRequest $request, $id)
    {
        $data = $request->all();
        ProductCategory::findOrFail($id)->update($data);
        return redirect('/product-category')->with('msg', 'Data Produk Kategoti Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $this->authorize('isOwner', $productCategory);
        ProductCategory::destroy($id);
        return redirect('/product-category')->with('msg', 'Data Produk Kategoti Berhasil dihapus');
    }
}
