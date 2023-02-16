@extends('layouts.landing.master')
@section('content')

    <!-- home start -->
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
    <!-- home end -->

    <!-- features start -->
    <section class="features" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code"
                                role="tab" aria-controls="pills-code" aria-selected="true">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-notebook tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Community Service</h5>
                                        <p>At vero eos et accusam et</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-customize-tab" data-bs-toggle="pill"
                                href="#pills-customize" role="tab" aria-controls="pills-customize"
                                aria-selected="false">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-edit tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Research</h5>
                                        <p>Sed ut unde iste error sit</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-support-tab" data-bs-toggle="pill" href="#pills-support"
                                role="tab" aria-controls="pills-support" aria-selected="false">
                                <div class="features-icon float-end">
                                    <h1><i class="pe-7s-headphones tab-icon"></i></h1>
                                </div>
                                <div class="d-none d-lg-block me-4">
                                    <h5 class="tab-title">Competition</h5>
                                    <p>It will be as simple as fact</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/features-img/img-1.png" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <h1><i class="pe-7s-notebook text-primary"></i>
                                                <h1>
                                        </div>
                                        <h5 class="mb-3">Community Service</h5>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book</p>
                                        <p class="text-muted">If several languages coalesce the grammar of the
                                            resulting language </p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Learn More <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane fades how active" id="pills-customize" role="tabpanel"
                            aria-labelledby="pills-customize-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/features-img/img-2.png" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <h1><i class="pe-7s-edit text-primary"></i></h1>
                                        </div>
                                        <h5 class="mb-3">Research</h5>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen bookt</p>
                                        <p class="text-muted">If several languages coalesce the grammar of the
                                            resulting language </p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Learn More <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane fade" id="pills-support" role="tabpanel"
                            aria-labelledby="pills-support-tab">

                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/features-img/img-3.png"
                                            alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <i class="pe-7s-headphones h1 text-primary"></i>
                                        </div>
                                        <h5 class="mb-3">Competition</h5>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.</p>
                                        <p class="text-muted">If several languages coalesce the grammar of the
                                            resulting language </p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Learn More <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end tab-content -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- features end -->

    <!-- Testimoni start -->
    <section class="section bg-light" id="clients">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Testimoni</h6>
                        <h4>What our Users Says</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" The designer of this theme delivered a quality product. I am not a
                            front-end developer and I hate when the theme I download has glitches or needs minor tweaks
                            here and there. This worked for my needs just out of the boxes. Also, it is fast and
                            elegant."</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-1.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">Xpanta</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" Extremely well designed and the documentation is very well done.
                            Super happy with the purchase and definitely recommend this! "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-2.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">G_Sam</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" We used this theme to save some design time but... wow it has
                            everything you didn't realize you would need later. I highly recommend this landing to get
                            your web design headed in the right direction quickly. "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-3.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">Isaacfab</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- Testimoni end -->

    <!-- counter start -->
    <section class="section bg-gradient">
        <div class="container-fluid">
            <div class="row" id="counter">
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-add-user display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="1200">0</h2>
                            <h5 class="counter-name text-white">Fans</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-cart display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="mb-3 text-white"><span class="counter_value" data-target="1500">10</span> +
                            </h2>
                            <h5 class="counter-name text-white">Total Sales</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-smile display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="6931">608</h2>
                            <h5 class="counter-name text-white">Happy Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-medal display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="counter_value mb-3 text-white" data-target="800">2</h2>
                            <h5 class="counter-name text-white">Won Prices</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- counter end -->

    <!-- contact start -->
    <section class="section" id="contact">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h4>FAQ?</h4>
                        <p class="text-muted">Frequently Asked Question</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            {{-- disini pertanyaan --}}

            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->

@endsection