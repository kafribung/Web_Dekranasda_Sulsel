@extends('layouts.page_master')
@section('title', 'Detail-Anggota | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <!-- BANNER -->
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="active">{{ $member->name }}<strong></strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li><a href="/anggota">Anggota</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER -->

    <!-- DETAIL ANGGOTA -->
    <div class="container py-4">
        <div class="row">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}">
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="{{ url($member->takeImg) }}" class="img-fluid border-radius-0" alt=""
                                style="height: 500px">
                        </div>
                    </div>
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="{{ url($member->takeImg) }}" class="img-fluid border-radius-0" alt=""
                                style="height: 500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4 mt-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-5 mb-2">
                    <strong class="font-weight-extra-bold">{{ $member->name }}</strong>
                </h2>
                <div>{!! $member->description !!} </div>
                <hr class="solid my-5">
                <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Bagikan</strong>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                            title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab icon-social-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-5">
                <h2 class="text-color-dark font-weight-normal text-5 mb-2">
                    Detail <strong class="font-weight-extra-bold">Toko</strong>
                </h2>
                <ul class="list list-icons list-primary list-borders text-2">
                    <li><i class="fas fa-caret-right left-10"></i>
                        <strong class="text-color-primary">Alamat: {{ $member->address }}</strong>
                    </li>
                    <li><i class="fas fa-caret-right left-10"></i>
                        <strong class="text-color-primary">Produk:</strong>
                        <ul>
                            @forelse ($member->products as $product)
                            <li><a href="/produk/{{ $product->slug }}">{{ $product->name }}</a></li>
                            @empty
                            <li>Produk belum ada</li>
                            @endforelse
                        </ul>
                    </li>
                    <li><i class="fas fa-caret-right left-10"></i>
                        <strong class="text-color-primary">Kontak:</strong>
                        <a href="tel:{{ $member->contact }}" target="_blank"> {{ $member->contact }}</a>
                    </li>
                    <li><i class="fas fa-caret-right left-10"></i>
                        <strong class="text-color-primary">Website:</strong>
                        <a href=" {{ $member->website }}" target="_blank" class="text-dark">{{ $member->website }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--DETAIL AM+NGGGOTA END -->

    <!-- ANGGOTA LAIN -->
    <section class="section section-height-3 bg-color-grey m-0">
        <div class="container py-4">
            <h4 class="mb-3 text-4 text-uppercase">Anggota <strong class="font-weight-extra-bold">Lainnya</strong></h4>
            <div class="row mb-5 pb-3">
                @forelse ($members as $member)
                <div class="col-md-6 col-lg-3 mt-4 mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card">
                        <img class="card-img-top" src="{{ url($member->takeImg) }}" alt="Card Image">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $member->name }}</h4>
                            <p class="card-text">{!! Str::limit($member->description, 30) !!}</p>
                            <a href="/anggota/{{ $member->slug }}"
                                class="read-more text-color-primary font-weight-semibold text-2">Selengkapnya
                                <i class="fas fa-angle-right position-relative top-1 ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="alert alert-info">Data Anggota Belum ditambahakan</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- ANGGOTA LAIN END -->
</div>
@endsection