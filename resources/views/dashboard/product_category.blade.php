@extends('layouts.master')
@section('title', 'Kategori Produk | Dekranasda SULSEL')
@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="box-title text-center">Kategori Produk </h4>
                            <a href="/product-category/create" class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                        </div>

                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal =  1
                                    @endphp
                                    @forelse ($productCategories as $category)
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="/product-category/{{$category->id}}/edit" class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                            
                                            <form action="/product-category/{{$category->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                            
                                                <button type="submit" onclick="return confirm('Hapus Data {{$category->name}}?')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @empty
                                        <td class="text-center">Kategori Produk Masih Kosong</td>
                                    @endforelse
                            
                                </tbody>
                            </table>
                           
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
