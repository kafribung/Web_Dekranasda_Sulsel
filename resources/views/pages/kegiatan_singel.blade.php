@extends('layouts.page_master')
@section('title', 'Detail-Kegiatan | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">

    @if (session('msg'))
    <p class="alert alert-info">{{ session('msg') }}</p>
    @endif
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
                        <li><a href="/kegiatan">Kegiatan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- POST BLOG -->
    <div class="container py-4">
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light"
                                data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
                                <div>
                                    <div class="img-thumbnail border-0 p-0 d-block">
                                        <img class="img-fluid border-radius-0" src="{{ url($activity->takeImg) }}"
                                            alt="" style="height: 500px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-date ml-0">
                            <span class="day">{{ $activity->created_at->format('d') }}</span>
                            <span class="month">{{ $activity->created_at->format('M-y') }}</span>
                        </div>

                        <div class="post-content ml-0">
                            <h2 class="font-weight-bold">{{ $activity->name }}</h2>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Oleh {{ $activity->user->name }} </span>
                                <span>
                                    <i class="far fa-comments"></i>{{ $activity->comments()->count() }} Komentar
                                </span>
                            </div>
                            <p>{!! $activity->description !!}</p>
                            <div class="post-block mt-5 post-share">
                                <strong
                                    class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Bagikan</strong>
                                <ul class="social-icons">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                            title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                            title="Linkedin"><i class="fab icon-social-instagram"></i></a></li>
                                </ul>
                            </div>

                            <!-- KOMENTAR -->
                            <div id="comments" class="post-block mt-5 post-comments">
                                <h4 class="mb-3">Komentar ({{ $activity->comments()->count() }})</h4>
                                <ul class="comments">
                                    @forelse ($activity->comments as $comment)
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                <img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong>{{ $comment->name }}</strong>
                                                </span>
                                                <p>{{ $comment->description }}</p>
                                                <span class="date float-right">
                                                    {{ $comment->created_at->format('d-M-Y : h:i a') }}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    <h6>Komentar Belum Ada</h6>
                                    @endforelse
                                </ul>
                            </div>

                            <div class="post-block mt-5 post-leave-comment">
                                <h4 class="mb-3">Tinggalkan Komentar</h4>
                                <form class="p-4 rounded bg-color-grey" action="/kegiatan/komentar/{{ $activity->id }}"
                                    method="POST">
                                    @csrf
                                    <div class="p-2">
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Nama Lengkap</label>
                                                <input type="text" value="{{ old('name') }}" class="form-control"
                                                    placeholder="Silahkan masukkan nama" name="name" id="name">
                                                @error('name')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Alamat Email</label>
                                                <input type="email" value="{{ old('email') }}"
                                                    placeholder="contoh: example@mail.com" class="form-control"
                                                    name="email" id="email">
                                                @error('email')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark">Komentar</label>
                                                <textarea placeholder="Silahkan masukkan komentar" rows="8"
                                                    class="form-control" name="description"
                                                    id="message">{{ old('description') }}</textarea>
                                                @error('description')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col mb-0">
                                                <button type="submit" class="btn btn-primary btn-modern">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION TWO END -->
</div>
@stop