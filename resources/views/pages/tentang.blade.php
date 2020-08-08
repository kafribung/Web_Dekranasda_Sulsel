@extends('layouts.page_master')
@section('title', 'Tentang | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
    <!-- SECTION ONE -->
    <section
        class="page-header page-header-modern bg-color-light-scale-1 page-header-sm overlay overlay-color-dark overlay-show overlay-op-8"
        style="background-image: url({{ asset("asset/img/patterns/toraja.jpg") }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Tentang</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION ONE END -->

    <!-- SECTION TWO -->
    <div class="container-fluid">
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="col-lg-6 p-0">
                <section class="section section-primary pl-4 pr-4 match-height border-top-0">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-normal text-6">Tentang <strong>Kami</strong></h2>
                            <p class="mb-0">Bangsa Indonesia di karuniai Tuhan Yang Maha Esa dengan beragam macam aneka
                                kekayaan khasanah budaya dan limpahan kekayaan alam yang dapat diolah untuk
                                mengungkapkan nilai budaya dalam bentuk barang kerajinan.<br><br>
                                Penduduk Indonesia sebagian besar hidup di daerah pedesaan, menempati ribuan pulau
                                Nusantara dan sudah mengenal adanya usaha kerajinan untuk mendukung kehidupan mereka
                                seperti membuat keris, kapak, tombak, panah, kain tenun, batik, anyaman dan berbagai
                                kerajinan khas masing-masing suku bangsa.<br><br>
                                Pada sisi lain, keberadaan para pengrajin dari waktu ke waktu tidak mengalami perubahan,
                                baik dalam hal keterampilan, pengetahuan maupun tingkat kesejahteraannya. Dengan semakin
                                pentingnya keberadaan industri kerajinan sebagai sarana pencarian pendapatan, tokoh
                                masyarakat seni budaya dan kerajinan harus menggugah untuk mengembangkan bidang
                                kerajinan yang bersifat nasional selagi mewujudkan organisasi yang diberi nama Dewan
                                Kerajinan Nasional.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 p-0">
                <section class="parallax section section-parallax match-height border-top-0" data-plugin-parallax
                    data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset("asset/img/tentang.jpeg") }}"
                    style="min-height: 260px;">
                </section>
            </div>
        </div>
    </div>

    <!-- SECTION TWO END -->
    <section class="section section-height-3 border-0 mb-0">
        <div class="container container-lg">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="pr-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="font-weight-normal text-6 mb-5"><strong>Visi</strong></h2>
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <li class="text-1 text-color-primary mb-3"><i
                                            class="fa fa-check text-primary text-4 mr-1"></i> Mewujudkan Dekranasda
                                        Sulawesi Selatan sebagai wadah pengembangan produk kerajinan unggulan yang
                                        berkualitas sebagai ikon Provinsi Sulawesi Selatan
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h2 class="font-weight-normal text-6 mb-5"><strong>Misi</strong></h2>
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <li class="text-1 text-color-primary mb-3"><i
                                            class="fa fa-check text-primary text-4 mr-1"></i> Menggali dan mengembangkan
                                        potensi kerajinan Sulawesi Selatan</li>
                                    <li class="text-1 text-color-primary mb-3"><i
                                            class="fa fa-check text-primary text-4 mr-1"></i> Meningkatkan kemampuan
                                        usaha pengrajin Sulawesi Selatan</li>
                                    <li class="text-1 text-color-primary mb-3"><i
                                            class="fa fa-check text-primary text-4 mr-1"></i> Meningkatkan kualitas dan
                                        desain produk kerajinan Sulawesi Selatan</li>
                                    <li class="text-1 text-color-primary mb-3"><i
                                            class="fa fa-check text-primary text-4 mr-1"></i> Memperluas jaringan
                                        pemasaran produk kerajinan Sulawesi Selatan baik dalam dan luar negeri</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pt-5">
        <div class="row py-4 mb-2">
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="{{ asset("asset/img/BUGUB.jpg") }}" class="img-fluid mb-2" alt="">
            </div>
            <div class="col-md-4 order-2 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="800">
                <div class="overflow-hidden">
                    <h2 class="font-weight-normal text-6"><strong>Ketua Dekranasda Sulsel</strong></h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="500">Ibu Lies</p>
                </div>
                <p class="pb-3"><strong>DATA PRIBADI </strong><br>
                    <strong> Nama </strong>: Ir. Liestiaty Fachrudin Nurdin, M.Fish<br>
                    <strong>TTL</strong> : Ujung Pandang/ 17 Juni 1964<br>
                    <strong>JK</strong> : Perempuan <br>
                    <strong>Alamat</strong> : Perdos Unhas Tamalanrea Blok GB/76 Makassar.<br>
                    <strong>Kebangsaan</strong> : Indonesia <br>
                    <strong>Agama </strong>: Islam <br>
                    <strong>Pend Terakhir</strong> : S2 Univercity of Fukuoka Japan <br>
                    <strong>Pekerjaan</strong> : Dosen Fak Perikanan & Kelautan Unhas Makassar <br>
                </p>
                <p class="pb-3"><strong>RIWAYAT PENDIDIKAN </strong><br>
                    1. SD Pembangunan Makassar<br>
                    2. SMPN V Makassar<br>
                    3. SMA Kartika Chandra Kirana Makassar<br>
                    4. S1 - Fak Perikanan & Kelautan Unhas<br>
                    5. S2 - Faculty of Fisheries Kyushu Univercity Japan
                </p>

            </div>
            <div class="col-md-3 order-2 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="800">
                <p class="pb-3"><strong> BIDANG USAHA </strong><br>
                    1. Owner PT. Hakata Tour & Travel - Makassar<br>
                    2. Owner/ Ketua Yayasan Pendidikan TK & PAUD Kartini - Makassar<br>
                    3. Owner Rumah Cantik Kenanga Muslimah- Makassar<br>
                    4. Owner Liesta Healty Food - Makassar<br>
                </p>
                <p class="pb-3"><strong> ORGANISASI </strong><br>
                    1. Ketua Dekranasda Sulsel<br>
                    2. Ketua TP PKK Prov.Suls<br>
                    3. Ketua Perwosi Prov.Sulsel<br>
                    4. Bunda PAUD Prov.Sulsel<br>
                    5. Ketua YKI Prov.Sulsel<br>
                </p>
            </div>
        </div>
    </div>
    <section class="section section-height-3 border-0 mb-0">
        <div class="container container-lg">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-normal text-6">Mars <strong>Dekranasda</strong></h2>
                    <div class="embed-responsive-borders appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/oExmDP4auh4"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-normal text-6">Hymne <strong>Dekranasda</strong></h2>
                    <div class="embed-responsive-borders appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zFD1g6EpgHI"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-normal text-6 mb-5">Struktur <strong>Organisasi</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}"
                    style="height: 510px;">
                    <div>
                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                            <img src="{{ asset("asset/img/Drawing1.png") }}" class="img-fluid border-radius-0" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop