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
                        <li><a href="index.php">Home</a></li>
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
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog-s-1-5.jpg" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.php"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                <a href="blog.php"><i class="fal fa-user"></i>by admin</a>
                            </div>
                            <h2 class="blog-title">Global Business Goal Make Life Easy From Tech</h2>
                            <p>Quickly predominate enabled technology and web-enabled schemas. Completely evisculate diverse communities whereas pandemic data. Quickly build covalent data after turnkey content. Distinctively reconceptualize customized growth strategies via prospective potentialities. Professionally pursue cutting-edge web-readiness vis-a-vis just in time infrastructures.</p>
                            <p>Conveniently target client-based systems with turnkey sources. Collaboratively syndicate focused opportunities for interactive deliverables. Assertively initiate client-based infomediaries through collaborative mindshare. Completely create bleeding-edge meta-services through compelling functionalities. Distinctively redefine timely initiatives rather than resource maximizing value.</p>
                            <blockquote class="vs-quote">
                                <p>Holisticly build technologies expanded array relationships productize professional tailers rather mesh stand</p>
                                <cite>William Benjamin</cite>
                                <span class="quote-author">Top Author</span>
                            </blockquote>
                            <p>Professionally pursue cutting-edge web-readiness vis-a-vis just in time infrastructures. Conveniently target client-based systems with turnkey sources. Collaboratively syndicate focused opportunities for interactive deliverables. Assertively initiate client-based infomediaries through collaborative mindshare. Completely create bleeding-edge meta-services through compelling functionalities.</p>
                            <div class="row mt-30">
                                <?php for ($i=1; $i <= 2 ; $i++) { 
                                    ?>
                                    <div class="col-md-6 mb-30">
                                        <img src="assets/img/blog/blog-s-1-6.jpg" alt="Blog image">
                                    </div>
                                    <?php
                                } ?>
                            </div>
                            <p>Quickly build covalent data after turnkey content. Distinctively reconceptualize customized growth strategies via prospective potentialities. Professionally pursue cutting-edge web-readiness vis-a-vis just in time infrastructures. Conveniently target client-based systems with turnkey sources.</p>
                            <p>Collaboratively syndicate focused opportunities for interactive deliverables. Assertively initiate client-based infomediaries through collaborative mindshare create bleeding-edge meta-services</p>
                        </div>
                        <div class="share-links clearfix  ">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <span class="share-links-title">Tags</span>
                                    <div class="tagcloud">
                                        <a href="blog.php">Lawyer</a>
                                        <a href="blog.php">Experts</a>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <span class="share-links-title">Social Icon</span>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    </ul><!-- End Social Share -->
                                </div><!-- Share Links Area end -->
                            </div>
                        </div> <!-- Post Pagination Style -->
                        <div class="post-pagination  ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <div class="post-pagi-box prev">
                                        <a href="blog-details.php"><img src="assets/img/blog/page-1-1.jpg" alt="pagi"></a>
                                        <a href="blog-details.php">Previous Post</a>
                                    </div>
                                </div>
                                <div class="col-auto d-none d-sm-block">
                                    <a href="blog.php" class="pagi-icon"><i class="fas fa-th"></i></a>
                                </div>
                                <div class="col">
                                    <div class="post-pagi-box next">
                                        <a href="blog-details.php"><img src="assets/img/blog/page-1-2.jpg" alt="pagi"></a>
                                        <a href="blog-details.php">Next Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author  ">
                            <div class="media-img">
                                <img src="assets/img/blog/blog-author.jpg" alt="Blog Author Image">
                            </div>
                            <div class="media-body">
                                <h3 class="author-name h4">William Benjamin</h3>
                                <p class="author-degi">Author</p>
                                <p class="author-text">Re-engineer multimedia based internal or "organic" sources for progressive vortals. Assertively leverage existing economically sound total linkage whereas global best practices. </p>
                            </div>
                        </div>
                        <div class="vs-comments-wrap   ">
                            <h2 class="blog-inner-title">3 Comments</h2>
                            <ul class="comment-list">
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on">22 April, 2022</span>
                                            <h4 class="name h4">Rosalina Kelian</h4>
                                            <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug-and-play markets whereas synergistic scenarios.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.php" class="replay-btn"><i class="fas fa-reply"></i>Replay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="vs-comment-item">
                                            <div class="vs-post-comment">
                                                <div class="comment-avater">
                                                    <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <span class="commented-on">23 April, 2022</span>
                                                    <h4 class="name h4">John Deo</h4>
                                                    <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets.</p>
                                                    <div class="reply_and_edit">
                                                        <a href="blog-details.php" class="replay-btn"><i class="fas fa-reply"></i>Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on">26 April, 2022</span>
                                            <h4 class="name h4">Tara sing</h4>
                                            <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets whereas 2.0 users. Enthusiastically seize team.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.php" class="replay-btn"><i class="fas fa-reply"></i>Replay</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment Form -->
                        <div class="vs-comment-form  ">
                            <div id="respond" class="comment-respond">
                                <div class="form-title">
                                    <h3 class="blog-inner-title">Leave a Comment</h3>
                                    <p class="form-text">Your email address will not be published. Required fields are marked*</p>
                                </div>
                                <div class="form-inner">
                                    <div class="row gx-20">
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                            <i class="fal fa-user"></i>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea class="form-control" placeholder="Comment"></textarea>
                                            <i class="fal fa-pencil"></i>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="custom-checkbox notice">
                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="vs-btn">Post Comment<i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <?php for ($i=1; $i <= 5 ; $i++) { 
                                    ?>
                                    <li>
                                        <a href="blog.php">IT Solution<?=$i?></a>
                                    </li>
                                    <?php
                                } ?>
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <?php for ($i=1; $i <= 3 ; $i++) { 
                                    ?>
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.php"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="blog-details.php">Richard McClintock, a Latin scholar from Hampden<?=$i?></a></h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.php">0<?=$i?> Aug, 202<?=$i?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <?php for ($i=1; $i <= 8 ; $i++) { 
                                    ?>
                                        <a href="blog.php">Tech<?=$i?></a>
                                    <?php
                                } ?>
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
