@extends('layouts.page_master')
@section('title', 'Home | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <!-- SLIDER -->
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
            data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay slide-overlay-level-6" data-transition="fade">
                    <img src="{{ asset('asset/img/home.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-55','-55','-55','-55']"
                        data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
                        data-letterspacing="-1">DEKRANASDA SULSEL</h1>

                    <div class="tp-caption font-weight-light text-color-light"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-5','-5','-5','15']"
                        data-fontsize="['18','18','18','35']" data-lineheight="['20','20','20','40']">DEWAN
                        KERAJINAN NASIONAL DAERAH <strong>PROVINSI SULAWESI SELATAN </strong></div>

                </li>
                <li class="slide-overlay slide-overlay-level-6" data-transition="fade">
                    <img src="{{ asset('asset/img/Dekra.JPG') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-55','-55','-55','-55']"
                        data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"
                        data-letterspacing="-1">DEKRANASDA SULSEL</h1>

                    <div class="tp-caption font-weight-light text-color-light"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-5','-5','-5','15']"
                        data-fontsize="['18','18','18','35']" data-lineheight="['20','20','20','40']">Dukung
                        Pengrajin Sulsel.</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="home-intro mb-0 bg-color-light" id="home-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="text-color-dark">
                        Ayo kembangkan bisnis Anda bersama kami!
                        <span class="text-color-dark">Bergabung bersama kami dan dapatkan kemudahan mendapatkan
                            informasi untuk mengembangkan bisnis Anda.</span>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="get-started text-left text-lg-right">
                        <a href="/registrasi"
                            class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Gabung
                            sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER END -->

    <!-- TENTANG -->
    <section class="section section-primary section-no-border section-height-4 my-0 appear-animation"
        data-appear-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <h2 class="font-weight-normal text-6 mb-5">Sekilas Tentang <strong
                            class="font-weight-extra-bold">Kami</strong></h2>
                    <p class="text-color-light">Dekranasda Sulawesi Selatan adalah wadah pengembangan produk
                        kerajinan unggulan yang
                        <br>berkualitas sebagai ikon Sulawesi Selatan. Kami mengajak para pengrajin serta
                        pengusaha untuk<br>
                        bergabung di dalam komunitas dibawah bimbingan kami dan mengembangkan potensi Anda
                        <br>bersama kami.</p>
                    <!-- <p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">Selengkapnya</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p> -->
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-1">
                        <div class="box-content box-content-border-0 p-5">
                            <i class="icon-featured far icon-handbag icons mt-0"></i>
                            <h4 class="font-weight-normal text-5 text-dark">Produk <strong
                                    class="font-weight-extra-bold">Kami</strong></h4>
                            <p class="text-color-dark">Menawarkan berbagai macam kerajinan khas Sulawesi Selatan
                                yang beraneka ragam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-1">
                        <div class="box-content box-content-border-0 p-5">
                            <i class="icon-featured far icon-book-open icons mt-0"></i>
                            <h4 class="font-weight-normal text-5 text-dark">Pembinaan <strong
                                    class="font-weight-extra-bold">Anggota</strong></h4>
                            <p class="text-color-dark">Meningkatkan kemampuan anggota melalui pembinaan
                                kewirausahaan dan peningkatan mutu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-1">
                        <div class="box-content box-content-border-0 p-5">
                            <i class="icon-featured far icon-people icons mt-0"></i>
                            <h4 class="font-weight-normal text-5 text-dark">Daftar <strong
                                    class="font-weight-extra-bold">Anggota</strong></h4>
                            <p class="text-color-dark">Anggota Dekranasda Sulsel terdiri dari pengusaha
                                kerajinan tangan dan pengrajin Sulsel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TENTANG END -->

    <!-- KEGIATAN -->
    <section class="section bg-light section-no-border m-0">
        <div class="container my-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-normal text-6 mb-5">Kegiatan
                        <strong class="font-weight-extra-bold">Kami</strong>
                    </h2>
                </div>
            </div>
            <div class="row">
                @forelse ($activities as $activity)
                <div class="col-lg-4 mb-4">
                    <article class="post post-large pb-5">
                        <div class="post-image">
                            <a href="/kegiatan/{{ $activity->slug }}">
                                <img src="{{ $activity->takeImg }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    title="Foto  {{ $activity->name }}" style="height: 250px; " />
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="day">{{ date("d", strtotime($activity->tgl)) }}</span>
                            <span class="month">{{ date("M-y", strtotime($activity->tgl)) }}</span>
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
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <a href="/kegiatan" class="btn btn-modern btn-primary mb-2">LIHAT LEBIH BANYAK</a>
                </div>
            </div>
        </div>
    </section>
    <!-- KEGIATAN END -->

    <!-- MITRA -->
    <section class="section section-primary section-no-border section-height-2 my-0 appear-animation"
        data-appear-animation="fadeIn">

        <div class="container py-2">
            <div class="row pt-4 mt-5">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-normal text-6">Lembaga Kedinasan yang Menaungi <strong
                            class="font-weight-extra-bold">Dekranasda Provinsi Sulawesi Selatan</strong></h2>
                </div>
            </div>

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
                data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <!-- <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
				<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
				<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
				<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
				<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li> -->
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                    <div class="row pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">

                        <div class="colmd-6 col-lg-1-5 mb-5 mb-lg-0 isotope-item websites">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders-rounded">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('asset/img/koperasidanumkm.png') }}" class="img-fluid"
                                            alt="">
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="colmd-6 col-lg-1-5 mb-5 mb-lg-0 isotope-item websites">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders-rounded">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('asset/img/dinasperdagangan.png') }}" class="img-fluid"
                                            alt="">
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="colmd-6 col-lg-1-5 mb-5 mb-lg-0 isotope-item websites">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders-rounded">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('asset/img/dinaspariwisata.png') }}" class="img-fluid"
                                            alt="">
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="colmd-6 col-lg-1-5 mb-5 mb-lg-0 isotope-item websites">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders-rounded">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('asset/img/dinasperindustrian.png') }}" class="img-fluid"
                                            alt="">
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="colmd-6 col-lg-1-5 mb-5 mb-lg-0 isotope-item websites">
                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders-rounded">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('asset/img/dinaspenanamanmodal.png') }}" class="img-fluid"
                                            alt="">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- KEGIATAN END -->

    <!-- BLOG -->
    <section class="section section-height-3 bg-color-grey-scale-1 section-no-border m-0 appear-animation"
        data-appear-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-normal text-6 mb-5">Blog <strong class="font-weight-extra-bold">Kami</strong>
                    </h2>
                </div>
            </div>
            <div class="row">
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
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="/blogs" class="btn btn-modern btn-primary mb-2">KUNJUNGI BLOG</a>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG END -->
</div>
@endsection