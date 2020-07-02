@extends('layouts.master')
@section('title', 'Edit Admin | Dekranasda SULSEL')
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
                            <strong class="card-title">Edit Data Admin</strong>
                        </div>
                        <div class="card-body">
                            <form action="/admin/{{$admin->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="img" class="control-label mb-1">Foto</label>
                                    <img src="{{url($admin->img)}}" alt="Error" title="Gambar  {{$admin->name}}" width="80" width="80">
                                    <input id="img" name="img" type="file" accept="image/*" class="form-control @error('img') is-invalid @enderror" autofocus placeholder="Input Foto">

                                    @error('img')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Nama</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"   autocomplete="off" placeholder="Input Nama" value="{{old('name') ? old('name') : $admin->name}}">

                                    @error('name')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label mb-1">Email</label>
                                    <input id="email" name="email" email="email" class="form-control @error('email') is-invalid @enderror"   autocomplete="off" placeholder="Input Email" value="{{old('email') ? old('email') : $admin->email}}">

                                    @if ($errors->has('email'))
                                        <p class="alert alert-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password" class="control-label mb-1">Password</label>
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"   autocomplete="off" placeholder="Input Password" value="{{old('password')}}">

                                    @error('password')
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
    
@endsection

