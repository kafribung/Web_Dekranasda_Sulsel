@extends('layouts.master')
@section('title', 'Tambah Kategori Produk | Dekranasda SULSEL')
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
                            <strong class="card-title">Tambah Produk Kategori</strong>
                        </div>
                        <div class="card-body">
                            <form action="/product-category" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Kategori</label>
                                    <input id="name" name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" autofocus
                                        autocomplete="off" placeholder="Input Kategori" value="{{old('name')}}">

                                    @error('name')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-md btn-info btn-block">Tambah Data</button>
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