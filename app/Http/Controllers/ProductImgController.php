<?php

namespace App\Http\Controllers;

// Import Class ProductRequest
use App\Http\Requests\ProductImgRequest;

// Impoer Model
use App\Models\{ProductImg, Product};
use Illuminate\Support\Facades\Storage;

class ProductImgController extends Controller
{
    // CREATE
    public function create($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $this->authorize('isOwner', $product);
        return view('dashboard_create.product_img_create', compact('product'));
    }

    // STORE
    public function store(ProductImgRequest $request, $id)
    {
        $model = Product::findOrFail($id);
        if (ProductImg::where('product_id', $id)->count() >= 5) {
            return redirect('/product-img/' . $model->slug)->with('msg', 'Data Galeri Max 5');
        }
        $data = $request->all();
        if ($img = $request->file('img')) {
            $data['img'] = $request->file('img')->storeAs('img_products', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['product_id'] = $id;
        $request->user()->productsImgs()->create($data);
        return redirect('/product-img/' . $model->slug)->with('msg', 'Data Galeri Produk Berhasil ditambahkan');
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
        $this->authorize('isOwner', $productImg);
        return view('dashboard_edit.product_img_edit', compact('productImg'));
    }

    // UPDATE
    public function update(ProductImgRequest $request, $id)
    {
        $productImg = ProductImg::findOrFail($id);
        $data = $request->all();
        if ($img = $request->file('img')) {
            Storage::delete($productImg->img);
            $data['img'] = $request->file('img')->storeAs('img_products', time() . '.' . $img->getClientOriginalExtension());
        }
        $productImg->update($data);
        return redirect('/product-img/' . $productImg->product->slug)->with('msg', 'Data Galeri Produk Berhasil diedit');
    }

    // DESTOY
    public function destroy($id)
    {
        $productImg = ProductImg::findOrFail($id);
        $this->authorize('isOwner', $productImg);
        Storage::delete($productImg->img);
        ProductImg::destroy($id);
        return redirect('/product-img/' . $productImg->product->slug)->with('msg', 'Data Galeri Produk Berhasil dihapus');
    }
}
