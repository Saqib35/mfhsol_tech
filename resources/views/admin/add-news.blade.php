@extends('admin.layouts.master')

@section('css')

  <script src="https://cdn.ckeditor.com/4.17.1/full-all/ckeditor.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

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
                $title = "Add Service";
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
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Service Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('panel/admin/add-news') }}" enctype='multipart/form-data' method="post" id="myForm" class="drozone">
                                 @csrf
                                        <div class="col-md-12">
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
                                                <label for="meta_keywords">Meta Keyworld</label>
                                                <input id="meta_keywords" required="" name="meta_keywords" type="text" class="form-control">
                                            </div>
                                        </div>
                    
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="news_title">News Title</label>
                                                <input id="news_title" onkeyup="createSlug(this.value)" required="" name="news_title" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!--<div class="col-md-12">-->
                                        <!--    <div class="mb-3">-->
                                        <!--        <label for="slug">Slug</label>-->
                                                <input id="slug" hidden required="" value="" name="slug" type="text" class="form-control">
                                        <!--    </div>-->
                                        <!--</div>-->
                                        

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarCountry">Category</label>
                                                <select class="form-control" name="category_slug" required="" id="categorySelect" >
                                                    <option selected disabled value="">Select category</option>  
                                                    @foreach($cate as $cate)
                                                        <option value="{{ $cate['slug'] }}">{{ $cate['category_name'] }}</option>
                                                    @endforeach
                                                    @foreach($subcate as $subcate)
                                                        <option value="{{ $subcate['slug'] }}">{{ $subcate['category_slug'] }} - {{ $subcate['sub_cate_name'] }}</option>
                                                    @endforeach
                                                    @foreach($extra as $extra)
                                                        <option value="{{ $extra['slug'] }}">{{ $extra['category_slug'] }} - {{ $extra['sub_cate_slug'] }} - {{ $extra['extra_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarCountry">Subcategory</label>
                                                <select class="form-control"  required=""  name="sub_cate_slug" id="subcategorySelect">
                                               

                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarCountry">Extra category</label>
                                                <select class="form-control"  required=""  name="extra_sub_cate_slug" id="subcategorySelect2">
                                               

                                                </select>
                                            </div>
                                        </div>
                                     -->
                                       <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="short_description">Short Description</label>
                                                <input id="short_description" required="" name="short_description" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="new_thumbnail">New thumbnail</label>
                                                <input id="new_thumbnail" required="" name="new_thumbnail" type="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="alt_tag"> Alt Tag</label>
                                                <input id="alt_tag" required="" name="alt_tag" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarDetails">Content Details</label>
                                                <textarea name="content" required="" id="editor1" class="form-control"></textarea>
                                            </div>
                                        </div>
                                       
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
  
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        
    });


    function createSlug(inputString) {

        // Remove special characters and convert to lowercase
        const cleanedString = inputString
            .replace(/[^\w\s]/gi, '')
            .toLowerCase();
        const slug = cleanedString.replace(/\s+/g, '-');
         $('#slug').val(slug);

    }

    $(document).ready(function() {
        $('#countrySelect').select2();
    });


    $(document).ready(function() {
    $('#categorySelect').change(function() {
        var category_slug = $(this).val();

            $.ajax({
                url: '/get-subcategories', // Update with your route URL
                type: 'GET',
                data: { category_slug: category_slug },
                success: function(data) {
                    var subcategorySelect = $('#subcategorySelect');
                    subcategorySelect.empty(); // Clear previous options

                    // Append new subcategory options
                    subcategorySelect.append(
                        $('<option>', {
                            value: '',
                            text: 'Selected Subcategory'
                        })
                    );
                    
                    $.each(data.subcategories, function(index, subcategory) {
                        subcategorySelect.append(
                            $('<option>', {
                                value: subcategory.slug,
                                text: subcategory.sub_cate_name
                            })
                        );
                    });
                }
            });
        });

        $('#subcategorySelect').change(function() {
        var category_slug = $(this).val();

            $.ajax({
                url: '/get-subcategories-extra', // Update with your route URL
                type: 'GET',
                data: { category_slug: category_slug },
                success: function(data) {
                    var subcategorySelect = $('#subcategorySelect2');
                    subcategorySelect.empty(); // Clear previous options

                    // Append new subcategory options
                    subcategorySelect.append(
                        $('<option>', {
                            value: '',
                            text: 'Selected Extra category'
                        })
                    );
                    
                    $.each(data.subcategories, function(index, subcategory) {
                        subcategorySelect.append(
                            $('<option>', {
                                value: subcategory.slug,
                                text: subcategory.extra_name
                            })
                        );
                    });
                }
            });
        });
        
    });


</script>

@endsection

