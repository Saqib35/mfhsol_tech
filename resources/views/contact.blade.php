@extends('layouts.master')
@section('css')

@endsection

@section('main')
        @include('includes.header')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
      Contact Form Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="contact-box">
                        <h3 class="contact-box__title h4">Germany Office Address</h3>
                        <p class="contact-box__text">Completely recaptiualize 24/7 communities via standards compliant metrics whereas web-enabled content</p>
                        <?php for ($i=1; $i <= 3 ; $i++) { 
                            ?>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <h4 class="contact-box__label">Phone Number & Email<?=$i?></h4>
                                        <p class="contact-box__info"><a href="tel:+310259121563">+(310) 2591 2156<?=$i?></a><a href="mailto:info@example.com">info@example.com<?=$i?></a></p>
                                    </div>
                                </div>
                            <?php
                        } ?>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="contact-box">
                        <h3 class="contact-box__title h4">Leave a Message</h3>
                        <p class="contact-box__text">We’re Ready To Help You</p>
                        <form class="contact-box__form ajax-contact" action="mail.php" method="POST">
                            <div class="row gx-20">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name" />
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" name="email" id="email" placeholder="Email Address" />
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <select name="subject" id="subject">
                                        <option selected disabled hidden>Select subject</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="UI Design">UI Design</option>
                                        <option value="CMS Development">CMS Development</option>
                                        <option value="Theme Development">Theme Development</option>
                                        <option value="Wordpress Development">Wordpress Development</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="message" id="message" placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="vs-btn">Submit Message<i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('js')

@endsection
                        