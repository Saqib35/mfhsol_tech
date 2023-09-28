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
                $title = "Add Sub Category";
                ?>
                 @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Sub Category Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('panel/admin/add-sub-category') }}" enctype='multipart/form-data' method="post" class="drozone">
                                @csrf
                                  
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="productname">Select Category</label>
                                            <select class="form-control" name="category_slug">
                                                @foreach($cate as $cates)
                                                <option value="{{$cates['slug']}}">{{$cates['category_name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="sub_cate_name">Sub Category Name</label>
                                            <input id="sub_cate_name" onkeyup="createSlug(this.value)"  required="" name="sub_cate_name" type="text" class="form-control">
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
                                            <label for="sub_cate_img">Sub Category Img</label>
                                            <input id="sub_cate_img" required="" name="sub_cate_img" type="file" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="alt_img">Img Alt Tag</label>
                                            <input id="alt_img" required="" name="alt_img" type="text" class="form-control">
                                        </div>                                            
                                    </div> -->
                                    <br>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="add-sub-category" class="btn btn-primary waves-effect waves-light">Add Sub Category</button>
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

