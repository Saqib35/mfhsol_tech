@extends('layouts.master')
@section('css')

@endsection

@section('main')
        @include('includes.header')
        <section class="">
            <div class="vs-carousel hero-layout2" data-slide-show="1" data-fade="true">
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="assets/img/hero/hero-1-1.jpg"></div>
                        <div class="hero-shape1"><img src="assets/img/hero/hero-shape-2-1.png" alt="bg shape" /></div>
                        <div class="hero-shape2"><img src="assets/img/hero/hero-shape-2-2.png" alt="bg shape" /></div>
                        <span class="hero-bg-text">Solution</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">SUCCESS YOUR BUSINESS</span>
                                <h1 class="hero-title">Excellent IT services for your success</h1>
                                <div class="hero-btns">
                                    <a href="about.php" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="contact.php" class="vs-btn style2 ls-hero-btn">GROWTH PLAN<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="assets/img/hero/hero-1-2.jpg"></div>
                        <div class="hero-shape1"><img src="assets/img/hero/hero-shape-2-1.png" alt="bg shape" /></div>
                        <div class="hero-shape2"><img src="assets/img/hero/hero-shape-2-2.png" alt="bg shape" /></div>
                        <span class="hero-bg-text">Support</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">CONVERY YOU BRAND ESSENCE</span>
                                <h1 class="hero-title">Take Service from Expert IT Professinal</h1>
                                <div class="hero-btns">
                                    <a href="about.php" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="blog.php" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="assets/img/hero/hero-1-3.jpg"></div>
                        <div class="hero-shape1"><img src="assets/img/hero/hero-shape-2-1.png" alt="bg shape" /></div>
                        <div class="hero-shape2"><img src="assets/img/hero/hero-shape-2-2.png" alt="bg shape" /></div>
                        <span class="hero-bg-text">Consult</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">DEDICATED SUPPORT TEAM</span>
                                <h1 class="hero-title">Take Free Consultaion For Your Brand</h1>
                                <div class="hero-btns">
                                    <a href="about.php" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="blog.php" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==== Features Area ====-->
        <section class="z-index-common space-top" data-sec-pos="bottom" data-pos-amount="30px" data-pos-for="#aboutv2">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xxl-3 text-center text-xxl-start">
                        <div class="title-area">
                            <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Why Choose Us</span>
                            <h2 class="sec-title3 h1">Why People Choose Our Services</h2>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="row vs-carousel feature-slide2 text-center text-xxl-start" data-slide-show="3" data-md-slide-show="2">
                            <?php
                            for ($i=1; $i <= 3 ; $i++) { 
                            ?>
                            <div class="col-xl-4">
                                <div class="feature-style2">
                                    <div class="feature-icon"><img src="assets/img/icon/fe-2-2.png" alt="Features" /></div>
                                    <h3 class="feature-title h5"><a class="text-inherit" href="service-details.php">IT Solution<?= $i ?></a></h3>
                                    <p class="feature-text">Seize magnetic before visa alignment network wireless whereas frictionless<?= $i ?></p>
                                    <a href="service-details.php" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <?php
                            }                           
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    About Us
    ==============================-->
        <section class="space" data-bg-src="assets/img/bg/ab-bg-2-1.jpg" id="aboutv2">
            <div class="container">
                <div class="row gx-60">
                    <div class="col-xl-6 mb-50 mb-xl-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box3">
                            <div class="img-1"><img src="assets/img/about/ab-2-1.jpg" alt="About image" /></div>
                            <div class="img-2"><img src="assets/img/about/ab-2-2.jpg" alt="About image" /></div>
                            <div class="award-box">
                                <div class="award-box__shape"></div>
                                <div class="award-box__icon"><i class="fal fa-award"></i></div>
                                <div class="media-body">
                                    <p class="award-box__number">100+</p>
                                    <div class="award-box__text">Awards we won</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 align-self-center text-center text-xl-start">
                            <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>ABOUT OUR COMPANY</span>
                            <h2 class="sec-title3 h1">Connecting people & technology</h2>
                            <p class="mb-4 pb-2 pe-xl-5">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation laboris.</p>
                        <div class="row gx-60 mb-4 pb-1 gy-2 text-start justify-content-center justify-content-xl-start">
                            <?php
                            for ($i=1; $i <= 4 ; $i++) { 
                                ?>
                            <div class="col-auto">
                                <div class="about-media">
                                    <div class="about-media__icon"><img src="assets/img/icon/ab-ic-2-1.png" alt="icon" /></div>
                                    <div class="media-body">
                                        <h3 class="about-media__title h6">
                                            Provide Skills <?=$i ?><br />
                                            Services<?=$i ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                                <?php
                            }
                            ?>
                        </div>
                        <a href="about.php" class="vs-btn">About Us<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    Technologies We Use
    ==============================-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="fw-bold text-center fs-4 mt-3 text-dark">Technologies We Use</p>
                </div>
            </div>
            <div class="row guttter">
                <!-- 1st -->
                <?php
                for ($i=1; $i <= 12 ; $i++) { 
                    ?>
                    <div class="filter-grayscale col-3 col-lg-2 col-md-3 col-sm-3 col-xs-3">
                        <div class="w-100 guttterr">
                            <img src="https://picsum.photos/400/300" alt="" class="h-100 w-100 img-fluid p-2" />
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <!--==============================
    Team Area
    ==============================-->
        <section class="space">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Great Team Members</span>
                            <h2 class="sec-title3 h1">We Have Expert Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                    <!-- 1st Expert Team -->
                    <?php
                    for ($i=1; $i<= 6 ; $i++) { 
                        ?>
                            <div class="col-xl-4">
                                <div class="team-style2">
                                    <div class="team-img">
                                        <div class="team-shape1"></div>
                                        <div class="team-shape2"></div>
                                        <a href="team-details.php"><img src="assets/img/team/t-2-1.jpg" alt="image" /></a>
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="team-title h5"><a class="text-inherit" href="team-details.php">Grayson Gabriel<?= $i ?></a></h3>
                                        <p class="team-degi">Cheif Expert<?= $i ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                    <!-- Add Teams As needed -->
                </div>
            </div>
        </section>
        <!--==============================
    Counter Area
    ==============================-->
        <div class="space" data-bg-src="assets/img/bg/counter-bg-2-1.jpg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-1.png" alt="icon" /></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">858</span>
                                <p class="counter-media__title text-white">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-2.png" alt="icon" /></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">650</span>
                                <p class="counter-media__title text-white">Media Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-3.png" alt="icon" /></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">567</span>
                                <p class="counter-media__title text-white">Skilled Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-4.png" alt="icon" /></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">28k</span>
                                <p class="counter-media__title text-white">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
    About Features
    ==============================-->
        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box4">
                            <div class="img-1"><img src="assets/img/about/ab-3-1.jpg" alt="about image" /></div>
                            <div class="img-2"><img src="assets/img/about/ab-3-2.jpg" alt="about image" /></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30 pt-10 pt-lg-0 text-center text-md-start">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                        <h2 class="sec-title3 h1 mb-3 pb-3">Ready To Get Our Best Quality Services</h2>
                        <!-- 1st -->
                        <div class="media-order">
                            <div class="media-order__number">01</div>
                            <div class="media-body">
                                <h3 class="media-order__title h6">We Deliver Perfect Solution</h3>
                                <p class="media-order__text">Rapidiously leverage existing quality services with wireless bandwidth seize functionalized methods...</p>
                            </div>
                        </div>
                        <!-- add upto 3 and as needed -->
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    Service Area
    ==============================-->
        <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-2-1.jpg">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">WHAT WE’RE OFFERING</span>
                            <h2 class="sec-title3 h1">Available Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- 1st Service -->
                    <?php
                    for ($i=1; $i <= 6 ; $i++) { 
                        ?>
                            <div class="col-lg-6">
                                <div class="service-style2">
                                    <div class="service-img">
                                        <span class="service-number">0<?= $i ?></span>
                                        <img src="assets/img/service/sr-2-1.jpg" alt="image" />
                                    </div>
                                    <div class="service-content">
                                        <div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
                                        <h3 class="service-title h5"><a href="service-details.php">Digital Marketing<?= $i ?></a></h3>
                                        <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and revolutionary quality...<?= $i ?></p>
                                        <a href="service-details.php" class="link-btn">Read Details<?= $i ?><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                    <!-- Add the services We Provide -->
                </div>
            </div>
        </section>
        <!--==============================
                Banners
    ==============================-->
     @include('includes.growth-plan')
        <!--==============================
    Project Area
    ==============================-->
        <section class="space-top">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between">
                    <div class="col-lg-auto text-center text-lg-start">
                        <div class="title-area">
                            <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our LATEST PROJECTS</span>
                            <h2 class="sec-title3 h1">Our Successful Projects</h2>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="sec-btns">
                            <button class="vs-btn style4" data-slick-prev="#projectslide1"><i class="far fa-arrow-left"></i>Prev</button>
                            <button class="vs-btn style4" data-slick-next="#projectslide1">Next<i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid overflow-hidden px-xxl-0">
                <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" id="projectslide1">
                    <!-- 1st project-->
                    <?php
                        for ($i = 1; $i <= 5; $i++) {
                        ?>
                            <div class="col-xl-3">
                                <div class="project-style2">
                                    <div class="project-img">
                                        <img src="assets/img/gallery/gal-1-<?= $i ?>.jpg" alt="project" />
                                        <div class="project-shape"></div>
                                        <a href="assets/img/gallery/gal-<?= $i ?>-1.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                                    </div>
                                    <div class="project-content">
                                        <span class="project-label">IT Solution <?= $i ?></span>
                                        <h3 class="project-title h5"><a href="project-details.php" class="text-reset">Digital Marketing <?= $i ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    <!-- add more projects as we done -->
                </div>
            </div>
        </section>
        <!--==============================
    Why Choose Us
    ==============================-->
        <section class="space-extra">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">END TO END SOLUTION</span>
                            <h2 class="sec-title3 h1">See How We Build Brands</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-center-mode="true">
                    <!-- 1st Building Brand -->
                    <?php
                        for ($i = 1; $i <= 5; $i++) {
                        ?>
                            <div class="col-xl-4">
                                <div class="price-style1">
                                    <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                                    <div class="price-amount h1">Analysis And Research<?= $i ?></div>
                                    <div class="price-features">
                                        <ul>
                                            <li><i class="far fa-check-circle"></i>Competitive Audit<?= $i ?></li>
                                            <li><i class="far fa-check-circle"></i>Data Analytics<?= $i ?></li>
                                            <li><i class="far fa-check-circle"></i>Big Data<?= $i ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </div>
            </div>
        </section>
 
        <section data-bg-src="assets/img/bg/appoin-bg-1-1.jpg">
            <div class="container">
                <div class="row gx-60">
                    <div class="col-xl-6 align-self-center space wow fadeInUp" data-wow-delay="0.2s">
                        <span class="sec-subtitle text-white">Make An Appointment</span>
                        <h2 class="sec-title3 h1 text-white">We Provide Best Advice For Your Future</h2>
                        <hr class="hr-style1" />
                        <p class="mb-4 mt-1 pb-3 text-white">
                            Compellingly mesh cross-platform portals through functional human capital world-class architectures for orthogonal initiatives. Assertively benchmark visionary quality vectors after covalent e-tailers.
                            Intrinsicly
                        </p>
                        <div class="row gy-30">
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">24/7 Call Available</span>
                                        <p class="contact-media__info"><a href="tel:+0423565446789">+042356 5446 (789)</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-envelope"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Write a Quick mail</span>
                                        <p class="contact-media__info"><a href="mailto:support@example.com">support@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Visite America Office</span>
                                        <p class="contact-media__info">
                                            3401 Ladera Dr NW, <br />
                                            New York
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Visite German Office</span>
                                        <p class="contact-media__info">
                                            Kaiserbleek 4 Goslar<br />
                                            Lower Saxony
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-wrap1">
                        <form action="#" class="form-style1">
                            <h2 class="form-title h4">Make An Appointment</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Full Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address" />
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Appointment Subject" />
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="mm/dd/yyyy" />
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Write a short message..."></textarea>
                            </div>
                            <div class="form-btn">
                                <button class="vs-btn style5">Make An Appointment<i class="far fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!--==============================
    News Updates
    ==============================-->
        <section class="vs-blog-wrapper space-top space-extra-bottom">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">News Updates</span>
                            <h2 class="sec-title3 h1">Weekly News Updates</h2>
                        </div>
                    </div>
                </div>
                @include('includes.blogs')
            </div>
        </section>
    <!--==============================
    Testinomials
    ==============================-->
    @include('includes.testinomials')
    <!--==============================
    Our Clients
    ==============================-->
        <div class="space" data-bg-src="assets/img/bg/brand-bg-2-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-dark mb-5 fw-bold fs-1 text-center">Our Clients</p>
                    </div>
                </div>
                <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                   <?php
                   for ($i=1; $i <= 9 ; $i++) { 
                    ?>
                     <div class="col-auto">
                        <div class="custtt">
                            <img src="assets/img/about/ab-1-1.jpg" class="" alt="Brand" />
                        </div>
                    </div>
                    <?php
                   }
                   ?>
                </div>
            </div>
        </div>

    <!--==============================
			News Letter
	==============================-->
        <div class="container-fluid newsletter-bg p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                        <span class="sec subtitle text-white d-inline-block">Newsletter</span>
                        <div class="mx-2 mb-1 d-inline-block newsletter-line"></div>
                        <p class="sec-title3 mt-1 text-white h3">Join Our Mailing List</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                        <form action="">
                            <div class="newsletter-srch-bar">
                                <i class="fa fa-envelope"></i>
                                <input type="text" placeholder="Email Address" />
                                <button type="submit" class="signup-button">Sign Up Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')

@endsection

