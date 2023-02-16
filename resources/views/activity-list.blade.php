@extends('layouts.landing.master')
@section('content')

<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="home-title">
                            <h5 class="mb-3 text-white-50">Discover Volunfis Today</h5>
                            <h2 class="mb-4 text-white">Make your CV Amazing & Unique with Volunfis</h2>
                            <p class="text-white-50 home-desc font-16 mb-5">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.</p>
                            <div class="watch-video mt-5">
                                <a href="#" class="btn btn-custom me-4">About Volunfis<i
                                        class="mdi mdi-chevron-right ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-sm-6">
                        <div class="home-img mo-mt-20">
                            <img src="{{ asset('landing') }}/images/home-img.png" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>

@endsection