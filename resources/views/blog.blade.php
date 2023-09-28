@extends('layouts.master')
@section('css')
  
<style>

.pagination {
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-item {
    display: inline-block;
    margin: 0 2px;
}

.pagination .page-item.disabled .page-link {
    background-color: transparent;
    border-color: #ddd;
    color: #777;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    padding: 6px 12px;
    border: 1px solid #ddd;
    color: #333;
    background-color: #fff;
}

.pagination .page-link:hover {
    background-color: #eee;
}
.hidden{
    display:none;
}

</style>

 

@endsection

@section('main')
        @include('includes.header')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog List</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                  

                      @foreach($blogs as $blogss)
                        <div class="vs-blog blog-single">
                            <div class="blog-img">
                                <a href="{{ url('blog-detail/'.$blogss['slug']) }}"><img src="{{ $blogss['new_thumbnail']; }}" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a><i class="far fa-calendar"></i>{{ $blogss['created_at']; }}</a>
                                    <a><i class="fal fa-user"></i>by admin</a>
                                    
                                </div>
                                <h2 class="blog-title"><a href="{{ url('blog-detail/'.$blogss['slug']) }}">{{ $blogss['news_title']; }}</a></h2>
                                <p>{{  $blogss['short_description'] }}</p>
                                <a href="{{ url('blog-detail/'.$blogss['slug']) }}" class="link-btn">Read Detail<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach


                  
                    <div class="row">
                        {{ $blogs->appends(request()->query())->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                    
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                    @php
                                    $tenDaysAgo =  \Carbon\Carbon::now()->subDays(10);
                                    $blogs_related = DB::table('blogs')
                                    ->inRandomOrder()
                                    ->limit(6)
                                    ->get();
                                    @endphp
                                    @foreach($blogs_related as $blogs_relate)
                                     <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('blog-detail/'.$blogs_relate->slug) }}"><img src="{{ $blogs_relate->new_thumbnail; }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ url('blog-detail/'.$blogs_relate->slug) }}">{{  $blogs_relate->short_description }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a>{{ $blogs_relate->created_at; }}</a>
                                        </div>
                                    </div>
                                </div>
                               @endforeach 
                            </div>
                        </div>  
                    </aside>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('js')

@endsection
