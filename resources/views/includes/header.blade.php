
<style>

.translated-ltr{margin-top:-40px;}
.translated-ltr{margin-top:-40px;}
.goog-te-banner-frame {display: none;margin-top:-20px;}

.goog-logo-link {
   display:none !important;
} 

.goog-te-gadget{
   color: transparent !important;
}

 #google_translate_element select{
   background-color:;
   color:#383ffa;
   border: none;
   border-radius:none;
   color:black;
   
  
 }
.VIpgJd-ZVi9od-l4eHX-hSRGPd{
    display:none !important;
}
.VIpgJd-ZVi9od-ORHb-OEVmcd{
    display:none !important;
}
</style>
   

<script>

 function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        { pageLanguage: 'en', includedLanguages: 'nl,en', defaultLanguage: 'nl' },
        'google_translate_element'
    );
}

    
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img src="{{ asset('assets/img/logo.png')}}" alt="TechBiz" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                                        <li class=" ">
                                            <a href="index.php">Home</a>
                                        </li>
                                      <li>
                                            <a href="about.php" class="aboveNo">About</a>
                                        </li>

                                        @foreach (\App\Models\Categories::all() as $Categories)
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="{{ url('service/'.$Categories['slug']) }}">{{ $Categories['category_name'] }} </a>
                                                @php
                                                    $sub_cate=\App\Models\SubCategories::where('category_slug' , $Categories->slug)->get();
                                                @endphp
                                                @if(count($sub_cate))
                                              <ul class="mega-menu">
                                              @foreach ($sub_cate as $sub_cate)
                                                <li><a href="{{ url('service/'.$sub_cate['slug']) }}">{{ $sub_cate['sub_cate_name'] }} </a>
                                                    @php
											        $sub_cate_extra=\App\Models\Extra::where('sub_cate_slug' , $sub_cate['slug'])->get();
                                                    @endphp
                                                    @if(count($sub_cate_extra))
                                                    <ul>
                                                       @foreach ($sub_cate_extra as $sub_cate_extra)
                                                        <li><a href="{{ url('service/'.$sub_cate_extra['slug']) }}">{{ $sub_cate_extra['extra_name'] }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                       

                    <li class="menu-item-has-children">
                        <a href="blog.php">Blog</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
    <!--===== Sidemenu ===== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="vs-widget-about">
                    <div class="footer-logo">
                        <a href="index.php"><img src="{{ asset('assets/img/logo.png')}}" alt="TechBiz" class="logo"></a>
                    </div>
                    <p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine future-proof e-markets demand line</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h4 class="widget_title">Gallery Posts</h4>
                <div class="sidebar-gallery">
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-1.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-2.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-3.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-4.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-5.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/img/widget/gal-1-6.jpg')}}" alt="Gallery Image" class="w-100">
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Office Maps</h3>
                <div class="footer-map">
                    <iframe title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd" width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--==== Header Area ====-->
    <header class="vs-header header-layout2">
        <div class="header-shape"></div>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between text-center text-lg-start">
                    <div class="col-md-auto text-center text-md-start">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-phone-alt"></i><a href="tel:+25632542598">(+256) 3254 2598</a></li>
                                <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>121 King St. Melbourne VIC 3000, Australia</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:example@TechBiz.com">example@TechBiz.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="header-social">
                            
                            <div id="google_translate_element" class="d-inline"></div>
          
                        </div>
                    </div>
                    
                    
                    
                  
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container-fluid">
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="logo-style1">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo-white.png')}}" alt="TechBiz" class="logo"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu menu-style2 d-none d-lg-block">
                                    <ul class="margin:5px;">
                                        @foreach (\App\Models\Categories::all() as $Categories)
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('service/'.$Categories['slug']) }}"> {{ $Categories['category_name'] }} </a>
                                                @php
                                                    $sub_cate=\App\Models\SubCategories::where('category_slug' , $Categories->slug)->get();
                                                @endphp
                                                @if(count($sub_cate))
                                                <ul class="sub-menu">   
                                                    @foreach ($sub_cate as $sub_cate)
                                                    <li><a href="{{ url('service/'.$sub_cate['slug']) }}">{{ $sub_cate['sub_cate_name'] }} </a>
                                                    @php
											        $sub_cate_extra=\App\Models\Extra::where('sub_cate_slug' , $sub_cate['slug'])->get();
                                                    @endphp
                                                    @if(count($sub_cate_extra))
                                                    <ul class="sub-menu">
                                                     @foreach ($sub_cate_extra as $sub_cate_extra)
                                                    <li><a href="{{ url('service/'.$sub_cate_extra['slug']) }}">{{ $sub_cate_extra['extra_name'] }}</a></li>
                                                    @endforeach
                                                    </ul>
                                                    @endif
                                                
                                                
                                                
                                                </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="{{ url('blogs') }}" class="aboveNo">Blogs</a>
                                        </li>   
                                        
                                    </ul>
                                </nav>
                                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <div class="header-btns">
                                    <!-- <a href="#" class="vs-btn d-none d-xxl-inline-block">Contact Us<i class="far fa-arrow-right"></i></a> -->
                                    <button class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==== Hero Area ====-->