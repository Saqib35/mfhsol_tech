@extends('layouts.master')
@section('css')

@endsection

@section('main')
        @include('includes.header')
        <div class="container">
            <div class="row">
                <div class="col-12 mt-0 mt-lg-3 mt-md-3 mt-sm-0 mt-xs-0"></div>
            </div>
        </div>
        <div class="container-fluid men-al-bg mt-3 mt-lg-5 mt-md-4 mt-sm-2 mt-xs-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-0 mt-lg-5 mt-md-5 mt-sm-0 tm-xs-0"></div>
                    <div class="col-12 mt-5 mt-0 mt-lg-5 mt-md-5 mt-sm-0 tm-xs-0"></div>
                    <div class="col-12 mt-0 mt-lg-4 mt-md-0 mt-sm-4 tm-xs-0"></div>
                    <div class="col-12">
                        <h1 class="subtitleh1 m-0 p-0 text-white mx-auto text-center">
                            Android App Development Services
                        </h1>
                        <h5 class="subtitlehh5 text-white mx-auto text-center">
                            Transforming Businesses Through Mobile App Development Services To Drive Business Growth
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mt-lg-5 mt-md-5 mt-sm-0 tm-xs-5"></div>
                <div class="col-12 col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <p class="sub-title theme-color h4">
                        Web Development Company.
                    </p>
                    <p>
                        Welcome to Matrix Bricks, your premier destination for top-notch web development services. We are a trusted digital agency that specializes in building custom websites and web applications that empower businesses and drive online success. With our expertise and cutting-edge technologies, we bring your digital ideas to life and deliver exceptional user experiences.
                    </p>
                    <p>
                        As one of the renowned web development companies, we understand that a well-developed website is the backbone of your online presence. It not only represents your brand but also serves as a powerful tool to engage your target audience and achieve your business goals. Our team of skilled developers works closely with you to understand your unique requirements and deliver tailor-made web solutions that elevate your digital presence.
                    </p>
                    <p>
                        Our web development process begins with a comprehensive consultation to gain insights into your business objectives, target market, and desired functionalities. This enables us to create a strategic development plan that aligns with your specific needs and delivers maximum value. We utilize the latest technologies and programming languages to build robust, scalable, and future-proof websites that are optimized for performance and user engagement.
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-md-12 mx-auto text-center col-xs-12 col-sm-12">
                    <div>
                        <img src="android-app-development.png" alt="">
                    </div>
                </div>
                <!-- According to requirement -->
                <div class="col-12">
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <span class="sectitileh2 h2 theme-color">
                        Technologies We Use
                    </span>
                </div>
                <?php
                for ($i=1; $i <= 4 ; $i++) { 
                    ?>
                    <div class="col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-3 mt-lg-5 mt-md-4 mt-sm-3 mt-xs-3">
                        <div class="row myy-container shadow m-1">
                            <div class="cust-high mx-auto text-center p-3">
                                <div class="circle-bg">
                                    <img src="html-5.png" class="p-2" alt="">
                                </div>
                                <span class="on-text-white sec-subtitle text-center">
                                    Web Development for Linux Platform<?= $i ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    <!--==============================
			Growth plan
	==============================-->
    @include('includes.growth-plan  ')
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5"></div>
            </div>
        </div>
    <!--==============================
			Why Choose Our Website
	==============================-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h4 class="theme-color subtitleh4 h4">
                    Why Choose Matrix Bricks For Android App Development?
                </h4>
            </div>
        </div>
        <div class="row">
            <?php
            for ($i=1; $i <= 5 ; $i++) { 
                ?>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-white">
                    <div style="background:#0E59F2;border-radius:10px;" class="p-2 m-2">
                        <i style="color:#0E59F2;" class="fa fa-arrow-right bg-white p-1 rounded-circle"></i> Scalable solutions: Our experts build user-friendly and high-performance applications that engage target customers and help a business grow with scalable solutions.
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="p-2">
                    We are the best Android app development company because we have the expertise, experience, and cutting-edge technology to deliver custom solutions that meet and exceed our client’s requirements.
                </p>
            </div>
        </div>
    </div>
    <!--==============================
	Why Choose Matrix Bricks For Web Design?
	==============================-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="sec-subtitleh3 h3 theme-color">Why Choose Matrix Bricks For Android App Development?</p>
            </div>
        </div>
        <div class="row">
            <?php
            for ($i=1; $i <= 10 ; $i++) { 
                ?>
                <div class="col-12 col-lg-6 col-md-12 col-xs-12">
                <p class="sec-subtitle">Striking Visual Appeal<?= $i ?></p>
                <p class="text-justify">At Matrix Bricks, we understand the importance of creating a visually appealing website that captures the attention of your visitors. Our talented team of designers combines aesthetics and functionality to deliver stunning web designs that reflect your brand identity and leave a lasting impression.<?= $i ?></p>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
    <!--==============================
			FAQs
	==============================-->
        <div class="container space-top space-extra-bottom">
            <!-- FAQ Area -->
            <div class="row">
            <div class="col-12">
                <h3 class="subtitleh1 h3 theme-color">FAQs</h3>
            </div>
        </div>
            <div class="accordion accordion-style1 layout2   wow fadeInUp" data-wow-delay="0.2s" id="faqVersion2">
                <?php
                for ($i=1; $i <=12 ; $i++) { 
                    ?>
                    <div class="accordion-item">
                    <div class="accordion-header" id="headingOne<?=$i?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$i?>" aria-expanded="false" aria-controls="collapseOne<?=$i?>">
                            Contrary to popular belief simply random text?<?=$i?>
                        </button>
                    </div>
                    <div id="collapseOne<?=$i?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?=$i?>" data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p> Assertively communicate multidisciplinary content through emerging skills for intermandated e-tailers. Rapidiously revolutionize emerging supply for interdependent portals. Monotonectally restore 24/365 leadership for high quality niche markets transform emerging mindshare...<?=$i?></p>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
        @endsection
@section('js')

@endsection


