@extends('layouts.master')
@section('title', 'Tambah Produk | Dekranasda SULSEL')
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
                            <strong class="card-title">Tambah Data Produk</strong>
                        </div>
                        <div class="card-body">
                            <form action="/product" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Nama</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"   autocomplete="off" placeholder="Input Nama" value="{{old('name')}}">

                                    @error('name')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price" class="control-label mb-1">Harga</label>
                                    <input id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror"   autocomplete="off" placeholder="Input Harga" value="{{old('price')}}">

                                    @if ($errors->has('price'))
                                        <p class="alert alert-danger">{{$errors->first('price')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label mb-1">Asal Daerah</label>
                                    <input id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror"   autocomplete="off" placeholder="Input Asal Daerah" value="{{old('address')}}">

                                    @error('address')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="member_id" class="control-label mb-1">Anggota</label>

                                    <select name="member_id" id="member_id" class="form-control @error('member_id') is-invalid @enderror">
                                        <option value="" selected disabled>~Pilih Anggota~</option>
                                        @foreach ($members as $member)
                                            <option {{old('member_id') == $member->id ? 'selected' : ''}} value="{{$member->id}}">{{$member->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('member_id')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product_category_id" class="control-label mb-1">Kategori</label>

                                    <select name="product_category_id" id="product_category_id" class="form-control @error('product_category_id') is-invalid @enderror">
                                        <option value="" selected disabled>~Pilih Kategori~</option>
                                        
                                        @foreach ($productCategories as $category)
                                            <option {{old('product_category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('product_category_id')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="control-label mb-1">Deskripsi</label>
                                    <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror" placeholder="Input Deskripsi">{{old('description')}}</textarea>

                                    @error('description')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-info btn-block">Tambah Data</button>
                                </div>

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
@push('after_script')
<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
</script>
@endpush
@endsection

