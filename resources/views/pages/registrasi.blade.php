@extends('layouts.page_master')
@section('title', 'Daftar | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Jadi Mitra <strong>Kami</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Daftar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h3>Daftar Sekarang!</h3>
        <p>Untuk menjadi anggota UMKM binaan Dekranasda Sulsel, silakan ikuti donwload dokumen dibawah ini untuk
            mendapatkan penjelasan rule pendaftaran.</p>
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="col-lg-12">
                <section class="call-to-action with-borders button-centered mb-5">
                    <div class="col-12">
                        <div class="call-to-action-content">
                            <h3>Download Dokumen</h3>
                            <p class="mb-0">Download untuk mendapatkan informasi Dekranasda dan link registrasi</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="call-to-action-btn">
                            <a href="/registrasi/donwload" target="_blank"
                                class="btn btn-modern text-2 btn-primary">Download</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@stop