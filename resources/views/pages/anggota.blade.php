@extends('layouts.page_master')
@section('title', 'Anggota | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <!-- BANNER -->
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Anggota</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- LIST ANGGOTA -->
    <section class="section bg-light section-no-border m-0">
        <div class="container">
            <div class="row mb-5 pb-3">
                @forelse ($members as $member)
                <div class="col-md-6 col-lg-3 mt-4 mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card">
                        <img class="card-img-top" src="{{ url($member->takeImg) }}" alt="Card Image"
                            title="Foto {{$member->name  }}">
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
                <div class="col-md-6 col-lg-3 mt-4 mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <p class="alert alert-info">Data Anggota Belum ditambahakan</p>
                </div>
                @endforelse
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    <div class="float-right">
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="row mb-5">
                <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <a href="registrasi.html" class="btn btn-outline btn-primary mb-2">BERGABUNGLAH BERSAMA
                        KAMI!</a>
                </div>
            </div>
    </section>
    <!-- LIST ANGGOTA END -->

    <!-- SECTION -->
    <section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0 appear-animation"
        data-appear-animation="fadeIn">
        <div class="container">
            <div class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-normal text-6 mb-5">Manfaat Menjadi Mitra<strong
                            class="font-weight-extra-bold"> Kami</strong></h2>
                </div>
            </div>
            <div class="row mb-5 pb-3">
                <div class="col-md-6 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div
                        class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                        <div class="card-body">
                            <p class="card-text transition-2ms">Anda bisa mendapatkan banyak informasi beserta
                                relasi yang dapat digunakan untuk meningkatkan kualitas produk kerajinan.
                                Melalui acara Dekranasda, usaha dan produk kerajinan Anda memiliki kesempatan
                                untuk dilihat oleh lebih banyak calon pelanggan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div
                        class="card bg-color-grey card-text-color-hover-light border-0 bg-color-hover-primary transition-2ms box-shadow-1 box-shadow-1-primary box-shadow-1-hover">
                        <div class="card-body">
                            <p class="card-text transition-2ms">Kami juga mendukung penuh perluasan jaringan
                                pemasaran produk kerajinan Anda untuk mendapatkan audiens dan calon pelanggan di
                                dalam maupun luar negeri. Dengan begitu produk asli Indonesia dapat lebih
                                dikenal oleh pasar mancanegara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION END -->
</div>
@stop