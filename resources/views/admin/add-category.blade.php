@extends('admin.layouts.master')

@section('css')

@endsection

@section('main')
<!-- Begin page -->
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
                $maintitle = "Hawks Forex";
                $title = "Add Category";
                ?>
                
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Category Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('panel/admin/add-category'); }}" enctype='multipart/form-data' method="post" id="myForm" class="drozone">
                                     @csrf
                                        <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input id="meta_title" required="" name="meta_title" type="text" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <input id="meta_description" required="" name="meta_description" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_keywords">Meta Keywords</label>
                                                <input id="meta_keywords" required="" name="meta_keywords" type="text" class="form-control">
                                            </div>
                                        </div> -->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="category_name">Category Name</label>
                                                <input id="category_name" required="" onkeyup="createSlug(this.value)" name="category_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="slug">Slug</label>
                                                <input id="slug"  required="" name="slug" type="text" class="form-control">
                                            </div>
                                        </div>
                                       <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="category_img">Category Img</label>
                                                <input id="category_img" required="" name="category_img" type="file" class="form-control">
                                            </div>
                                            
                                        </div>-->

                                        <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="alt_tag">Img Alt Tag</label>
                                                <input id="alt_tag" required="" name="alt_tag" type="text" class="form-control">
                                            </div>                                            
                                        </div> -->
                                    <br>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="add-category" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>

                                </form>
                            </div>

                        </div> <!-- end card-->

                    </div>
                </div>
                <!-- end row -->
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

<script>
    function createSlug(inputString) {

        // Remove special characters and convert to lowercase
        const cleanedString = inputString
            .replace(/[^\w\s]/gi, '')
            .toLowerCase();
        const slug = cleanedString.replace(/\s+/g, '-');
         $('#slug').val(slug);

    }  
</script>

@endsection

