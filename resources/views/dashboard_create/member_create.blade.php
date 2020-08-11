@extends('layouts.master')
@section('title', 'Tambah Anggota | Dekranasda SULSEL')
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
                            <strong class="card-title">Tambah Data Anggota</strong>
                        </div>
                        <div class="card-body">
                            <form action="/member" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Foto</label>
                                    <input id="img" name="img" type="file"
                                        class="form-control @error('img') is-invalid @enderror" autofocus
                                        accept="image/*">
                                    @error('img')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Nama</label>
                                    <input id="name" name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" autocomplete="off"
                                        placeholder="Input Nama" value="{{old('name')}}">

                                    @error('name')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="contact" class="control-label mb-1">Kontak</label>
                                    <input id="contact" name="contact" type="number"
                                        class="form-control @error('contact') is-invalid @enderror" autocomplete="off"
                                        placeholder="Input Kontak" value="{{old('contact')}}">

                                    @error('contact')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="website" class="control-label mb-1">Website</label>
                                    <input id="website" name="website" type="url"
                                        class="form-control @error('website') is-invalid @enderror" autocomplete="off"
                                        placeholder="Input Website (FB, IG, atau yg Lainnya)"
                                        value="{{old('website')}}">

                                    @error('website')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label mb-1">Alamat</label>
                                    <textarea id="address" name="address"
                                        class="form-control  @error('address') is-invalid @enderror"
                                        placeholder="Input Alamat">{{old('address')}}</textarea>

                                    @error('address')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="control-label mb-1">Deskripsi</label>
                                    <textarea id="description" name="description"
                                        class="form-control ckeditor @error('description') is-invalid @enderror"
                                        placeholder="Input Deskripsi">{{old('description')}}</textarea>

                                    @error('description')
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