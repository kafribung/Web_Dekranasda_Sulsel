@extends('layouts.page_master')
@section('title', 'Produk | Dekranasda Sulsel')
@section('content')
<div role="main" class="main ">
    <!-- BANNER -->
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER END -->

    <!-- PRODUK POPULER -->
    <section class="section section-height-3 border-0 appear-animation" data-appear-animation="fadeInUpShorter"
        data-appear-animation-delay="200">
        <div class="container container-lg">
            <div class="row align-items-center">
                <div class="col-lg-6 fluid-col-lg-6" style="min-height: 33vw;">
                    <div class="fluid-col fluid-col-left">
                        @forelse ($popular->productsImgs()->take(1)->get() as $productImg)
                        <img src="{{ $productImg->takeImg }}" class="img-fluid" alt="" title="Produk Terpopuler"
                            style="height: 500px" />
                        @empty
                        <h6>Produk Terpopuler Belum di set</h6>
                        @endforelse
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pr-5">
                        <h2 class="font-weight-normal text-6 mb-5">Produk
                            <strong class="font-weight-extra-bold">Terpopuler</strong>
                        </h2>
                        <span class="d-block alternative-font text-color-primay text-5 mb-4 pb-2">
                            <strong>{{ $popular->name }}</strong>
                        </span>
                        <p class="lead mb-4 pb-2">Oleh: {{ $popular->member->name }}</p>
                        <p class="lead mb-4 pb-2">{!! Str::limit($popular->description, 200) !!}</p>
                        <p class="lead mb-4 pb-2 text-color-dark">
                            <strong>Harga: {{ number_format($popular->price, 2)  }} </strong>
                        </p>
                        <p>
                            <a href="/produk/{{ $popular->slug }}"
                                class="read-more text-color-primary font-weight-semibold text-2">
                                Selengkapnya
                                <i class="fas fa-angle-right position-relative top-1 ml-1"> </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- LIST PRODUK -->
    <div class="container py-2">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="font-weight-normal text-6 mb-5">Produk
                            <strong class="font-weight-extra-bold">Lainnya</strong>
                        </h2>
                    </div>
                </div>
                <!-- PRODUK 1 -->
                <h4>Asli Alam</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($alam->products as $product)
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
                    <h6>Produk Asli Alam Belum Ada</h6>
                    @endforelse
                </div>

                <hr class="solid my-5">
                <!-- PRODUK 2 -->
                <h4>Batu-batuan</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($batu->products as $product)
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
                    <h6>Produk Batu-batuan Belum Ada</h6>
                    @endforelse
                </div>
                <hr class="solid my-5">
                <!-- PRODUK 3 -->
                <h4>Kayu</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($kayu->products as $product)
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
                    <h6>Produk Kayu Belum Ada</h6>
                    @endforelse
                </div>
                <hr class="solid my-5">
                <!-- PRODUK 4 -->
                <h4>Keramik</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($keramik->products as $product)
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
                    <h6>Produk Kayu Belum Ada</h6>
                    @endforelse
                </div>
                <hr class="solid my-5">
                <!-- PRODUK 5 -->
                <h4>Logam</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($logam->products as $product)
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
                    <h6>Produk Logam Belum Ada</h6>
                    @endforelse
                </div>
                <hr class="solid my-5">
                <!-- PRODUK 6 -->
                <h4>Serat</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($serat->products as $product)
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
                    <h6>Produk Serat Belum Ada</h6>
                    @endforelse
                </div>
                <hr class="solid my-5">
                <!-- PRODUK 7 -->
                <h4>Tekstil</h4>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    @forelse ($tekstil->products as $product)
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
                    <h6>Produk Tekstil Belum Ada</h6>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- LIST PRODUK END -->
</div>
@stop