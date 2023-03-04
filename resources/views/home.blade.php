



@extends('header')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@section('content')

    <!-- start services section -->
    <div class="services margin-bottom">
        <div class="container">
            <div class="box">
                <div class="services-title text-center">
                    <h1 data-lang="explore"></h1>
                    <p data-lang="textPrag"></p>
                </div>
                <!-- swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/jefferson-santos-9SoCnyQmkzI-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research"></span>
                                <p class="card_text" data-lang="provides"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/ian-battaglia-9drS5E_Rguc-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research2"></span>
                                <p class="card_text" data-lang="provides2"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/jeshoots-com-xGtHjC_QNJM-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research3"></span>
                                <p class="card_text" data-lang="provides3"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/jadon-kelly-Qo_2hhoqC3k-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research4"></span>
                                <p class="card_text" data-lang="provides4"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/lukas-hND1OG3q67k-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research5"></span>
                                <p class="card_text" data-lang="provides5"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/milan-malkomes-a40akJxBhT8-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research6"></span>
                                <p class="card_text" data-lang="provides6"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/moritz-kindler-PBtfsP3eEZ4-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research7"></span>
                                <p class="card_text" data-lang="provides7"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/bence-boros-anapPhJFRhM-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research8"></span>
                                <p class="card_text" data-lang="provides8"></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="card_image">
                                <img src="{{asset('assets/imgs/home/towfiqu-barbhuiya-FnA5pAzqhMM-unsplash.jpg')}}" alt="">
                            </div>
                            <div class="card_content">
                                <span class="card_title" data-lang="research9"></span>
                                <p class="card_text" data-lang="provides9"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="ourServices.html" class="d-flex justify-content-center mt-4">
                    <div class="btn" data-lang="swiperBtn"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- end services section -->




    <!-- start solutions section -->
    <div class="solutions margin-bottom">
        <div class="container">
            <div class="title text-center">
                <h4 class="fw-bold" data-lang="solutionTitle"></h4>
            </div>
            <div class="row row-solutions">
                <div class="col-lg-4 col-md-6 col-sm-12 col-solutions">
                    <div class="tabs"><!-- -->
                        <h5 data-lang="digitalExperience"></h5>
                        <p class="text-capitalize active" data-content=".solutions1" data-lang="solutions1"></p>
                        <p class="text-capitalize" data-content=".solutions2" data-lang="solutions2"></p>
                        <p class="text-capitalize" data-content=".solutions3" data-lang="solutions3"></p>
                        <p class="text-capitalize" data-content=".solutions4" data-lang="solutions4"></p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-sm-12 tabs-content">

                    <div class="solution solutions1">
                        <div class="d-flex">
                            <div class="content-right">
                                <div class="content-box">
                                    <h5 data-lang="h1"></h5>
                                    <p data-lang="p1"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h2"></h5>
                                    <p data-lang="p2"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h3"></h5>
                                    <p data-lang="p3"></p>
                                </div>
                            </div>
                            <div class="content-left">
                                <div class="content-box">
                                    <h5 data-lang="h4"></h5>
                                    <p data-lang="p4"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h5"></h5>
                                    <p data-lang="p5"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h6"></h5>
                                    <p data-lang="p6"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solution solutions2">
                        <div class="d-flex">
                            <div class="content-right">
                                <div class="content-box">
                                    <h5 data-lang="h7"></h5>
                                    <p data-lang="p7"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h8"></h5>
                                    <p data-lang="p8"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h9"></h5>
                                    <p data-lang="p9"></p>
                                </div>
                            </div>
                            <div class="content-left">
                                <div class="content-box">
                                    <h5 data-lang="h10"></h5>
                                    <p data-lang="p10"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h11"></h5>
                                    <p data-lang="p11"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h12"></h5>
                                    <p data-lang="p12"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solution solutions3">
                        <div class="d-flex">
                            <div class="content-right">
                                <div class="content-box">
                                    <h5 data-lang="h13"></h5>
                                    <p data-lang="p13"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h14"></h5>
                                    <p data-lang="p14"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h15"></h5>
                                    <p data-lang="p15"></p>
                                </div>
                            </div>
                            <div class="content-left">
                                <div class="content-box">
                                    <h5 data-lang="h16"></h5>
                                    <p data-lang="p16"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h17"></h5>
                                    <p data-lang="p17"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h18"></h5>
                                    <p data-lang="p18"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solution solutions4">
                        <div class="d-flex">
                            <div class="content-right">
                                <div class="content-box">
                                    <h5 data-lang="h19"></h5>
                                    <p data-lang="p19"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h20"></h5>
                                    <p data-lang="p20"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h21"></h5>
                                    <p data-lang="p21"></p>
                                </div>
                            </div>
                            <div class="content-left">
                                <div class="content-box">
                                    <h5 data-lang="h22"></h5>
                                    <p data-lang="p22"></p>
                                </div>
                                <div class="content-box">
                                    <h5 data-lang="h23"></h5>
                                    <p data-lang="p23"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end solutions section -->





    <!-- start ourProcess section -->
    <div class="ourProcess  margin-bottom">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p data-lang="ourProcessP"></p>
                        <h1 data-lang="ourProcessH"></h1>
                        <h3 data-lang="ourProcessH3"></h3>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="ourProcessContainer">
                            <div class="icon">
                                <div class="iBx active" data-class=".content1" style="--i:1;">
                                    <i class="fa-solid fa-1"></i>
                                </div>
                                <div class="iBx" data-class=".content2" style="--i:2;">
                                    <i class="fa-solid fa-2"></i>
                                </div>
                                <div class="iBx" data-class=".content3" style="--i:3;">
                                    <i class="fa-solid fa-3"></i>
                                </div>
                                <div class="iBx" data-class=".content4" style="--i:4;">
                                    <i class="fa-solid fa-4"></i>
                                </div>
                                <div class="iBx" data-class=".content5" style="--i:5;">
                                    <i class="fa-solid fa-5"></i>
                                </div>
                                <div class="iBx" data-class=".content6" style="--i:6;">
                                    <i class="fa-solid fa-6"></i>
                                </div>
                                <div class="iBx" data-class=".content7" style="--i:7;">
                                    <i class="fa-solid fa-7"></i>
                                </div>
                                <div class="iBx" data-class=".content8" style="--i:8;">
                                    <i class="fa-solid fa-8"></i>
                                </div>
                            </div>
                            <div class="content">
                                <div class="contentBx active content1">
                                    <p data-lang="processContent1"></p>
                                </div>
                                <div class="contentBx content2">
                                    <p data-lang="processContent2"></p>
                                </div>
                                <div class="contentBx content3">
                                    <p data-lang="processContent3">Design</p>
                                </div>
                                <div class="contentBx content4">
                                    <p data-lang="processContent4">Development</p>
                                </div>
                                <div class="contentBx content5">
                                    <p data-lang="processContent5">Testing</p>
                                </div>
                                <div class="contentBx content6">
                                    <p data-lang="processContent6"></p>
                                </div>
                                <div class="contentBx content7">
                                    <p data-lang="processContent7"></p>
                                </div>
                                <div class="contentBx content8">
                                    <p data-lang="processContent8"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ourProcess section -->





    <!-- start statisTics section -->
    <div class="statisTics margin-bottom">
        <div class="container">
            <div class="box">
                <h1><span>statis</span> <span>tics</span></h1>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                30k
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <p data-lang="statisTicsP1"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                30
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <p data-lang="statisTicsP2"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                05
                            </div>
                            <p data-lang="statisTicsP3"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                2.5k
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <p data-lang="statisTicsP4"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                50
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <p data-lang="statisTicsP5"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="statisTics-box">
                            <div class="statisTics-num">
                                03
                            </div>
                            <p data-lang="statisTicsP6"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end statisTics section -->
    <!-- satrt WhyChoose section -->
    <div class="WhyChoose margin-bottom">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="WhyChoose-text">
                            <h1 data-lang="WhyChooseH"></h1>
                            <p data-lang="WhyChooseP"></p>
                            <ol>
                                <li>
                                    <h4 data-lang="listChooseH4"></h4>
                                    <p data-lang="listChooseP"></p>
                                </li>
                                <li>
                                    <h4 data-lang="listChooseH2"></h4>
                                    <p data-lang="listChooseP2"></p>
                                </li>
                                <li>
                                    <h4 data-lang="listChooseH3"></h4>
                                    <p data-lang="listChooseP3"></p>
                                </li>
                                <li>
                                    <h4 data-lang="listChooseH4"></h4>
                                    <p data-lang="listChooseP4"></p>
                                </li>
                                <li>
                                    <h4 data-lang="listChooseH5"></h4>
                                    <p data-lang="listChooseP5"></p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="WhyChoose-img">
                            <img src="{{asset('assets/imgs/home/owen-beard-K21Dn4OVxNw-unsplash.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end WhyChoose section -->
    @endsection