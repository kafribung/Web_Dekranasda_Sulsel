@extends('layouts.page_master')
@section('title', 'Blog | Dekranasda Sulsel')
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
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- LIST BLOG -->
    <section class="section bg-light section-no-border m-0">
        <div class="container my-2">
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                @forelse ($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    <article class="post post-medium border-0 pb-0 mb-5">
                        <div class="post-image">
                            <a href="/blogs/{{ $blog->slug }}">
                                <img src="{{ $blog->takeImg }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    style="height: 250px; " alt="" title="Foto {{ $blog->name }}" />
                            </a>
                        </div>
                        <div class="post-content">
                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                <a href="/blogs/{{ $blog->slug }}">{{ $blog->name }}</a>
                            </h2>
                            <p>{!! Str::limit($blog->description, 50) !!}</p>
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i>{{ $blog->created_at->diffForHumans() }}</span>
                                <span><i class="far fa-user"></i> Oleh {{ $blog->user->name }} </span>
                                <span>
                                    <i class="far fa-comments"></i> {{ $blog->comments()->count() }}
                                    Komentar
                                </span>
                                <span class="d-block mt-2">
                                    <a href="/blogs/{{ $blog->slug }}"
                                        class="btn btn-xs btn-light text-1 text-uppercase">Selengkapnya</a>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
                @empty
                <div class="col-lg-4 mb-4">
                    <p class="alert alert-info">Data Blogs Belum Ada</p>
                </div>
                @endforelse
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    <div class="float-right">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
            <!-- Pagination -->
        </div>
    </section>
    <!-- LIST BLOG END -->
</div>
@stop