@extends('layouts.master')
@section('css')
<title>{{   $service->meta_title	 }}</title>
    <meta name="description" content="{{   $service->meta_description	 }}"/>
    <meta name="keywords" content="{{   $service->meta_keywords	 }}">
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{   $service->meta_title	 }}"/>
    <meta property="og:description" content="{{   $service->meta_description	 }}"/>
    <meta property="og:url" content="{{  Request::fullUrl() }}"/>
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:secure_url" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:width" content="512"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:image:alt" content="{{ $service->alt_tag }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
@endsection

@section('main')
        @include('includes.header')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                {!!  $service->content !!}      
                </div>
              
            </div>
        </div>
    </section>

    @endsection

@section('js')

@endsection
                        