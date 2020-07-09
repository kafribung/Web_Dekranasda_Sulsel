<?php

namespace App\Http\Controllers;

// Import Class ProductRequest
use App\Http\Requests\ProductImgRequest;

// Impoer Model
use App\Models\Product;
USE App\Models\ProductImg;

class ProductImgController extends Controller
{
    // CREATE
    public function create($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product->isOwner()) {
            return redirect('/product-img/'. $product->slug)->with('msg', 'Anda tidak memiliki akses');
        }

        return view('dashboard_create.product_img_create', compact('product'));
    }

    // STORE
    public function store(ProductImgRequest $request, $id)
    {
        $model = Product::findOrFail($id);

        if (ProductImg::where('product_id', $id)->count() >= 5) {
            return redirect('/product-img/'. $model->slug)->with('msg', 'Data Galeri Max 5');
        }

        $data = $request->all();

        if ($img = $request->file('img')) {
            $name= time(). '.'. $img->getClientOriginalExtension();
            $img->move(public_path('img_products'), $name);

            $data['img'] = $name;
        }

        $data['product_id'] = $id;

        $request->user()->productsImgs()->create($data);

        return redirect('/product-img/'. $model->slug)->with('msg', 'Data Galeri Produk Berhasil ditambahkan');
    }

    // SHOW
    public function show($slug)
    {
        $product = Product::with('user')->where('slug', $slug)->latest()->first();

        return view('dashboard.product_img', compact('product'));
    }

    // EDIT
    public function edit($id)
    {
        $productImg = ProductImg::with('product', 'user')->findOrFail($id);

        if (!$productImg->isOwner()) {
            return redirect('/product-img/'. $productImg->product->slug)->with('msg', 'Anda tidak memiliki akses');
        }

        return view('dashboard_edit.product_img_edit', compact('productImg'));
    }

    // UPDATE
    public function update(ProductImgRequest $request, $id)
    {
        $model = ProductImg::findOrFail(5);
        
        $data = $request->all();

        if ($img = $request->file('img')) {
            $name= time(). '.'. $img->getClientOriginalExtension();
            $img->move(public_path('img_products'), $name);

            $data['img'] = $name;
        }

        ProductImg::findOrFail($id)->update($data);

        return redirect('/product-img/'. $model->product->slug)->with('msg', 'Data Galeri Produk Berhasil diedit');
    }

    // DESTOY
    public function destroy($id)
    {
        $model = ProductImg::findOrFail($id);

        ProductImg::destroy($id);

        return redirect('/product-img/'. $model->product->slug)->with('msg', 'Data Galeri Produk Berhasil dihapus');
    }
}
