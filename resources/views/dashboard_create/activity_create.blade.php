@extends('layouts.master')
@section('title', 'Tambah Aktivitas | Dekranasda SULSEL')
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
                            <strong class="card-title">Tambah Data Aktivitas</strong>
                        </div>
                        <div class="card-body">
                            <form action="/activity" method="POST" enctype="multipart/form-data">
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
                                        placeholder="Input Nama Kegiatan" value="{{old('name')}}">

                                    @error('name')
                                    <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tgl" class="control-label mb-1">Tgl Kegiatan</label>
                                    <input id="tgl" name="tgl" type="date"
                                        class="form-control @error('tgl') is-invalid @enderror" value="{{old('tgl')}}">

                                    @if ($errors->has('tgl'))
                                    <p class="alert alert-danger">{{$errors->first('tgl')}}</p>
                                    @endif
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