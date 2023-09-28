@extends('admin.layouts.master')


@section('css')

@endsection


@section('main')

<div id="layout-wrapper">    
    @include ('admin.layouts.sidebar');
    @include ('admin.layouts.topbar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <?php
                $maintitle = "Hawks Forex ";
                $title = "Welcome !";
                ?>
                @include ('admin.layouts.breadcrumb')
               
                <!-- end page title -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Categories</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('categories')->count()}}">
                                              {{DB::table('categories')->count()}}
                                              </span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Sub Categories</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('sub_categories')->count()}}">
                                              {{DB::table('sub_categories')->count()}}
                                              </span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                  

                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Extra Sub Categories</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('extras_cate')->count()}}">
                                              {{DB::table('extras_cate')->count()}}
                                              </span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Services</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('news')->count()}}">
                                              {{DB::table('news')->count()}}
                                              </span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->


                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Blogs</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('blogs')->count()}}">
                                              {{DB::table('blogs')->count()}}
                                              </span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div><!-- end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
        @include ('admin.layouts.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
@endsection

@section('js')

@endsection


