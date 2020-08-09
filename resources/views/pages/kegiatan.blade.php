@extends('layouts.page_master')
@section('title', 'Kegiatan | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
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
                        <li class="active">Kegiatan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER -->

    <!-- LIST KEGIATAN -->
    <section class="section bg-light section-no-border m-0">
        <div class="container my-2">
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                @forelse ($activities as $activity)
                <div class="col-lg-4 mb-4">
                    <article class="post post-large pb-5">
                        <div class="post-image">
                            <a href="/kegiatan/{{ $activity->slug }}">
                                <img src="{{ $activity->takeImg }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    title="Foto  {{ $activity->name }}" />
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="day">{{ $activity->created_at->format('d') }}</span>
                            <span class="month">{{ $activity->created_at->format('M-y') }}</span>
                        </div>
                        <div class="post-content">
                            <h4>
                                <a href="/kegiatan/{{ $activity->slug }}"
                                    class="text-decoration-none">{{ $activity->name }}
                                </a>
                            </h4>
                            <div class="mb-1">{!! Str::limit($activity->description, 50) !!}</div>
                            <a href="/kegiatan/{{ $activity->slug }}"
                                class="read-more text-color-dark font-weight-bold text-2">
                                Selengkapnya
                                <i class="fas fa-chevron-right text-1 ml-1"></i>
                            </a>
                        </div>
                    </article>
                </div>
                @empty
                <div class="col-lg-4 mb-4">
                    <p class="alert alert-info">Data Kegiatan Belum Ada</p>
                </div>
                @endforelse
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    <div class="float-right">
                        {{ $activities->links() }}
                    </div>
                </div>
            </div>
            <!-- Pagination -->
        </div>
    </section>
    <!-- LIST KEGIATAN END -->
</div>
@stop