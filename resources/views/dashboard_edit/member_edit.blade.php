@extends('layouts.master')
@section('title', 'Edit Anggota | Dekranasda SULSEL')
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
                            <strong class="card-title">Edit Data Anggota</strong>
                        </div>
                        <div class="card-body">
                            <form action="/member/{{$member->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Foto</label>
                                    <img src="{{url($member->img)}}" alt="Error" title="Gambar {{$member->name}}" width="80" height="80" >
                                    <input id="img" name="img" type="file" accept="image/*" class="form-control @error('img') is-invalid @enderror" autofocus placeholder="Input Foto">

                                    @error('img')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Nama</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"   autocomplete="off" placeholder="Input Nama" value="{{old('name') ? old('name') : $member->name}}">

                                    @error('name')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="product" class="control-label mb-1">Produk</label>
                                    <input id="product" name="product" type="text" class="form-control @error('product') is-invalid @enderror"   autocomplete="off" placeholder="Input Produk" value="{{old('product') ? old('product') : $member->product}}">

                                    @if ($errors->has('product'))
                                        <p class="alert alert-danger">{{$errors->first('product')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="contact" class="control-label mb-1">Kontak</label>
                                    <input id="contact" name="contact" type="number" class="form-control @error('contact') is-invalid @enderror"   autocomplete="off" placeholder="Input Kontak" value="{{old('contact') ? old('contact') : $member->contact}}">

                                    @error('contact')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="website" class="control-label mb-1">Website</label>
                                    <input id="website" name="website" type="url" class="form-control @error('website') is-invalid @enderror"   autocomplete="off" placeholder="Input Website (Boleh Kosong)" value="{{old('website') ? old('website') : $member->website}}">

                                    @error('website')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label mb-1">Alamat</label>
                                    <textarea id="address" name="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Input Alamat">{{old('address') ? old('address') : $member->address}}</textarea>

                                    @error('address')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="control-label mb-1">Deskripsi</label>
                                    <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror" placeholder="Input Deskripsi">{{old('description') ? old('description') : $member->description}}</textarea>

                                    @error('description')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-warning btn-block">Edit Data</button>
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

