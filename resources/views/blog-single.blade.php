@extends('layouts.master')
@section('css')

@endsection

@section('main')
        @include('includes.header')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Details</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Blog Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-md-12">
                    <p> Created at: {{  $blogs->created_at  }}</p>
                   {!!  $blogs->content !!}
								
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('js')

@endsection
