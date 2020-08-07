@extends('layouts.master')
@section('title', 'Produk | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Data Produk</h4>
                            <a href="/product/create" class="btn btn-outline-primary btn-sm float-right"><i
                                    class="fa fa-plus"></i></a>
                        </div>

                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Asal Daerah</th>
                                        <th>Pemilik</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $angkaAwal = 1
                                    @endphp
                                    @forelse ($products as $product)
                                    <tr>
                                        <td>{{$angkaAwal++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->address}}</td>
                                        <td>{{$product->member->name}}</td>
                                        <td>{{$product->product_category->name}}</td>
                                        <td>{!! Str::limit($product->description, 10) !!}</td>

                                        <td>
                                            <a href="/product-img/{{$product->slug}}"
                                                class="btn btn-outline-success btn-sm "><i class="fa fa-picture-o"></i>
                                            </a>

                                            @can('isOwner', $product)
                                            @if ($product->popular == 0)
                                            <a href="/product/{{$product->slug}}/popular"
                                                class="btn btn-outline-dark btn-sm"><i class="fa fa-star"></i>
                                            </a>
                                            @else
                                            <a href="/product/{{$product->slug}}/no-popular"
                                                class="btn btn-outline-secondary btn-sm"><i class="fa fa-star"></i>
                                            </a>
                                            @endif

                                            <a href="/product/{{$product->slug}}/edit"
                                                class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i>
                                            </a>
                                            <form action="/product/{{$product->id}}" method="POST"
                                                class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Hapus Data {{$product->name}}?')"
                                                    class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @empty
                                    <td class="text-center">Data produk masih kosong</td>
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