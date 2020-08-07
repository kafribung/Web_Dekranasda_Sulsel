@extends('layouts.master')
@section('title', 'Edit Galeri Anggota | Dekranasda SULSEL')
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
                            <strong class="card-title">Edit Data Galeri {{$memberImg->member->name}}</strong>
                        </div>
                        <div class="card-body">
                            <form action="/member-img/{{$memberImg->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Foto</label>
                                    <img src="{{url($memberImg->takeImg)}}" alt="Error"
                                        title="Gambar {{$memberImg->member->name}}" width="150">
                                    <input id="img" name="img" type="file" accept="image/*"
                                        class="form-control @error('img') is-invalid @enderror" autofocus
                                        placeholder="Input Foto">

                                    @error('img')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-md btn-info btn-block">Edit Data</button>
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