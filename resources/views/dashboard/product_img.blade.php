@extends('layouts.master')
@section('title', 'Galeri Produk | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Galeri {{$product->name}}</h4>

                            @if ($product->isOwner())
                                <a href="/product-img/create/{{$product->slug}}" class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                            @endif
                        </div>

                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal =  1
                                    @endphp
                                    @forelse ($product->productsImgs as $productImg)
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>
                                            <img src="{{url($productImg->img)}}" alt="Error" title="Gambar {{$productImg->product->name}}" width="800px" height="100px">
                                        </td>
                                        <td>{{$productImg->product->name}}</td>
                            
                                        <td>
                                            @if ($product->isOwner())
                                                <a href="/product-img/{{$productImg->id}}/edit" class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                                
                                                <form action="/product-img/{{$productImg->id}}" method="POST" class="d-inline-flex">
                                                    @csrf
                                                    @method('DELETE')
                                
                                                    <button type="submit" onclick="return confirm('Hapus Data {{$productImg->img}}?')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @empty
                                        <td class="text-center">Gallery {{$product->name}} masih kosong</td>
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
