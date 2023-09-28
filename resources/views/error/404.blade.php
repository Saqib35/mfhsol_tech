<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
@include('includes.css')

</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">     
    <!-- Section: home -->
    <section id="home" class="fullscreen bg-lightest">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h1 class="text-theme-colored font-weight-600 font-100">404</h1>
                <h3 class="mt-0 mb-5">Oops! Page Not Found</h3>
                <p>The page you were looking for could not be found.</p>
                <a class="btn btn-default smooth-scroll" href="index-mp-layout1.php"><i class="fa fa-hand-o-left font-16 mr-10"></i>Return Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  @include('includes.footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

@include('includes.js')
</body>

<!-- Mirrored from kodesolution.com/html/2017/konsultplus-html/demo/page-404-style3.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 08:45:11 GMT -->
</html>