@extends('layouts.page_master')
@section('title', 'Detail-Produk | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <!-- BANNER -->
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="active">Produk <strong>Detail</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li><a href="/produk">Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- DETAIL PRODUK -->
    <div class="container py-4">
        <div class="row pb-4">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-lg-4 mx-auto">
                        <!-- IMAGE -->
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="300">
                            <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden"
                                data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}">
                                @forelse ($product->productsImgs as $productsImg)
                                <div>
                                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                        <img src="{{ url($productsImg->takeImg) }}" class="img-fluid border-radius-0"
                                            alt="" style="height: 500px">
                                    </div>
                                </div>
                                @empty
                                <h4>Gambar Belum Ditambahkan</h4>
                                @endforelse
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                    <div class="col-lg-8 mx-auto appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="row pt-4 mt-2 mb-5">
                            <div class="col-md-7 mb-4 mb-md-0">
                                <h2 class="text-color-dark font-weight-normal text-5 mb-2">
                                    <strong class="font-weight-extra-bold">{{ $product->name }}</strong>
                                </h2>
                                <p>{!! Str::limit($product->description) !!}</p>
                            </div>
                            <div class="col-md-5">
                                <h2 class="text-color-dark font-weight-normal text-5 mb-2">Detail
                                    <strong class="font-weight-extra-bold">Produk</strong>
                                </h2>
                                <ul class="list list-icons list-primary list-borders text-2">
                                    <li><i class="fas fa-caret-right left-10"></i>
                                        <strong class="text-color-primary">Oleh:</strong>
                                        <a href="/anggota/{{ $product->member->slug }}">
                                            {{ $product->member->name }}
                                        </a>
                                    </li>
                                    <li><i class="fas fa-caret-right left-10"></i>
                                        <strong class="text-color-primary">Harga:</strong> {{ $product->price }}
                                    </li>
                                    <li><i class="fas fa-caret-right left-10"></i>
                                        <strong class="text-color-primary">Kategori:</strong>
                                        {{ $product->product_category->name }}
                                    </li>
                                </ul>
                                <hr class="solid my-5">
                                <a href="https://api.whatsapp.com/send?phone=+6289517206301" target="_blank"
                                    class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Pesan
                                    sekarang</a>
                                <hr class="solid my-5">
                                <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">
                                    Bagikan
                                </strong>
                                <ul class="social-icons">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                            title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                            title="Linkedin"><i class="fab icon-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DETAIL PRODUK END -->

    <!-- PRODUK LAIN -->
    <section class="section section-height-3 bg-color-light m-0">
        <div class="container py-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <h4 class="mb-3 text-4 text-uppercase">Produk <strong class="font-weight-extra-bold">Lainnya</strong></h4>
            <div class="row">
                @forelse ($products as $product)
                <div class="col-12 col-sm-6 col-lg-3">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            @forelse ($product->productsImgs()->take(1)->get() as $productImg)
                            <img src="{{ $productImg->takeImg }}" class="img-fluid" alt="" title="Produk Alam" />
                            @empty
                            <h4>Tidak memiliki gambar</h4>
                            @endforelse
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">{{ $product->name }}</span>
                                <span class="thumb-info-type">{{ $product->address }}</span>
                            </span>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">
                                <a href="/produk/{{ $product->slug }}"
                                    class="read-more text-color-primary font-weight-semibold text-2">Selengkapnya
                                    <i class="fas fa-angle-right position-relative top-1 ml-1"></i>
                                </a>
                            </span>
                        </span>
                    </span>
                </div>
                @empty
                <h6>Produk Belum Ada</h6>
                @endforelse
            </div>
        </div>
    </section>
    <!-- END -->
</div>
@stop