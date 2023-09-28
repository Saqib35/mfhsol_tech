@extends('layouts.master')
@section('css')

@endsection

@section('main')
        @include('includes.header')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <?php for ($i=1; $i <= 5 ; $i++) { 
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1 layout3">
                            <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                            <div class="service-top">
                                <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                                <span class="service-number">0<?=$i?></span>
                            </div>
                            <h3 class="service-title h5"><a href="service-details.php">Cloud Services<?=$i?></a></h3>
                            <p class="service-text">Cardinate premier technology without sustainable leadership work...<?=$i?></p>
                            <a href="service-details.php" class="link-btn">Read More<?=$i?><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </section>
    <!--==============================
    About Us
    ==============================-->
    <section data-bg-src="assets/img/bg/about-bg-5-1.jpg">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-70">
                <div class="col-lg-6 col-xl">
                    <img src="assets/img/about/ab-7-1.jpg" alt="about image">
                </div>
                <div class="col-lg-6 col-xl-auto  wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-box2">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                        <h2 class="sec-title3 h1">Inspiring Tech Needs for Business</h2>
                        <p>Dynamically monetize web-enabled processes through client-based action items. Authoritatively grow goal is oriented markets through ompletely generate technically sound content without robust users.</p>
                        <div class="row gx-0 align-items-center flex-row-reverse justify-content-end mt-sm-3 pt-sm-3 mb-30 pb-10">
                            <div class="col-sm-auto">
                                <p class="author-degi">Founder & CEO</p>
                                <h3 class="h5 author-name">Adam Smith</h3>
                            </div>
                            <div class="col-sm-auto">
                                <div class="about-call">
                                    <div class="about-call__icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="about-call__label">Call To Ask Any Queary</span>
                                        <p class="about-call__number"><a href="tel:+25821562154">+(258) 2156 2154</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.php" class="vs-btn">About Us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Team Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Great Team Members</span>
                        <h2 class="sec-title3 h1">We Have Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <?php for ($i=1; $i <= 6 ; $i++) { 
                    ?>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.php"><img src="assets/img/team/t-2-1.jpg" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.php">Grayson Gabriel<?=$i?></a></h3>
                                <p class="team-degi">Cheif Expert<?=$i?></p>
                            </div>
                        </div>
                    </div>                    
                    <?php
                } ?>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/testi-bg-4-1.jpg">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="title-area">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Best Review’s</span>
                        <h2 class="sec-title3 h1">Inspiring Tech Needs for Business</h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns2">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn popup-video">Watch Video<i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2">
                <?php for ($i=1; $i <= 4 ; $i++) { 
                    ?>
                        <div class="col-xl-6">
                            <div class="testi-style2">
                                <div class="testi-body">
                                    <div class="author-img"><img src="assets/img/testimonial/auth-4-1.jpg" alt="Testimonial"></div>
                                    <div class="media-body">
                                        <p class="testi-text">“Quickly formulate high yield web services before functional process improvements enable premier with e-business customer service.<?=$i?>”</p>
                                    </div>
                                </div>
                                <h3 class="testi-name">William Benjamin<?=$i?></h3>
                                <div class="testi-degi">IT Customer<?=$i?></div>
                            </div>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="assets/img/bg/cta-bg-1-2.jpg">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="contact.php" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Weekly Updates</span>
                        <h2 class="sec-title3 h1">Weekly Latest Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <?php for ($i=1; $i <= 5 ; $i++) { 
                    ?>
                        <div class="col-xl-4">
                            <div class="vs-blog blog-style1">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-1-1.jpg" alt="Blog Image" class="w-100">
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <a href="blog.php"><i class="far fa-calendar"></i>2<?=$i?> Feb, 202<?=$i?></a>
                                            <a href="blog.php"><i class="fal fa-user"></i>by admin<?=$i?></a>
                                        </div>
                                        <h3 class="blog-title h5"><a href="blog-details.php">Contrary to popular belief ipsum is not simply </a></h3>
                                        <a href="blog-details.php" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                } ?>
            </div>
        </div>
    </section>
    @endsection
@section('js')

@endsection

