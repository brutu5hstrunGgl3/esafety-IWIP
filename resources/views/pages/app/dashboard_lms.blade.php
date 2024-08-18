@extends('layouts.app')

@section('title', 'e-safety IWIP')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>PT.Indonesia Weda Bay Industrial Park</h1>
                <div class="section-header-breadcrumb">
                    
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title"></h2>
                

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Albums</h4>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-theme slider"
                                    id="slider1">
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image1.jpg') }}"></div>
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image2.jpg') }}"></div>
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image3.jpg') }}"></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-theme slider"
                                    id="slider2">
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image2.jpg') }}">
                                        <div class="slider-caption">

                                            <!-- <div class="slider-title active"><a href =""></a>Image 1</div> -->
                                            
                                        </div>
                                    </div>
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image2.jpg') }}">
                                        <div class="slider-caption">
                                        <div class="breadcrumb-item active"><a href=""> Kampus Panca Sakti Cikarang </a></div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                    <div><img alt="image"
                                            src="{{ asset('img/iwip/image3.jpg') }}">
                                        <div class="slider-caption">
                                            <div class="slider-title">Image 3</div>
                                            <div class="slider-description">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-slider.js') }}"></script>
@endpush
