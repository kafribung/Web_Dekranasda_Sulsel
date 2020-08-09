@extends('layouts.page_master')
@section('title', 'Search | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Cari</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 mt-3">

        <div class="row">
            <div class="col">
                <h2 class="font-weight-normal text-7 mb-0">Menampilkan hasil untuk
                    <strong class="font-weight-extra-bold">{{ request('search') }}</strong>
                </h2>
                <p class="lead mb-0">{{ $products->count() }} hasil ditemukan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col pt-2 mt-1">
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="simple-post-list m-0">
                    @forelse ($products as $product)
                    <li>
                        <div class="post-info">
                            <a href="/produk/{{ $product->slug }}">{{ $product->name }}</a>
                            <div class="post-meta">
                                <span class="text-dark text-uppercase font-weight-semibold"></span> |
                                {{ $product->created_at->format('m d, Y : h.a.i') }}
                            </div>
                        </div>
                    </li>
                    @empty
                    <h3>Tidak ada hasil</h3>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@stop