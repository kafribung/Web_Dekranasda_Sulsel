@extends('layouts.master')
@section('title', 'Edit Galeri Produk | Dekranasda SULSEL')
@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card-body ">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Data Galeri {{$productImg->product->name}}</strong>
                        </div>
                        <div class="card-body">
                            <form action="/product-img/{{$productImg->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Foto</label>
                                    <img src="{{url($productImg->takeImg)}}" alt="Error"
                                        title="Gambar {{$productImg->product->name}}" width="150">
                                    <input id="img" name="img" type="file" accept="image/*"
                                        class="form-control @error('img') is-invalid @enderror" autofocus
                                        placeholder="Input Foto">

                                    @error('img')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-md btn-warning btn-block">Edit Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
@endsection