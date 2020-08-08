@extends('layouts.page_master')
@section('title', 'Kontak | Dekranasda Sulsel')
@section('content')
<div role="main" class="main">
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
                        <li class="active">Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row py-4">
            <div class="col-lg-6">
                <!-- google maps -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127159.34895336424!2d119.4524668!3d-5.1471536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d58d6ddfd51%3A0xbef406f893775b67!2sDekranasda%20Provinsi%20Sulsel!5e0!3m2!1sen!2sid!4v1594688018064!5m2!1sen!2sid"
                    width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1">Kantor <strong>Kami</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Alamat:</strong> Jl.
                            Jend. Sudirman No. 48, Sawerigading, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan
                            90115</a></p>
                        </li>
                        </li>
                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (+62)
                            821-9446-1749 / (+62) 821-8944-2365 </li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                            dekranasdasulsel19@gmail.com</li>
                    </ul>
                    <h4 class="pt-5">Jam <strong>Kerja</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Senin - Jumat - 08.00 sampai 17.00 </li>
                        <li><i class="far fa-clock top-6"></i> Sabtu - Minggu - Tutup </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop