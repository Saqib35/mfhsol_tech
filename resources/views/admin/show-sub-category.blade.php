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
                $title = "Show Category";
                ?>
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap" id="users-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Slug</th>
                                                <th>Sub Category Name</th>
                                                <th>Sub Category Slug</th>
                                                <!-- <th>Sub Category Img</th> -->
                                                <!-- <th>Alt Img</th> -->
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        $(function () {
            $('#users-table').DataTable({
                // processing: true,
                // serverSide: true,
                ajax: "{{ route('panel.admin.show-sub-category') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'category_slug', name: 'category_slug'},
                    {data: 'sub_cate_name', name: 'sub_cate_name'},
                    {data: 'slug', name: 'slug'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                ],
                order: [0, 'desc'],
               
            });

        
        });

         function delDegree(id){
            var buttonId = 'delDegree' + id;
            $('#' + buttonId).closest('tr').remove();
             
              $.ajax({
                url: "{{ route('del-sub-cate') }}",
                type: "GET",
                data: {
                    // Include any data you want to send to the server
                    id: id, 
                },
                dataType: "json",
                success: function(response) {
                    // Handle the response from the server
                   
                    if(response.success==true){
                        toastr.success('Sub Category Deleted Successfully', 'success');
                    }else if(response.success==false){
                        toastr.error('Something went wrong', 'error');
                    }else{
                        toastr.error('Something went wrong', 'error');
                    }
            
                },
                error: function(xhr, status, error) {
            
                toastr.error('Something went wrong', 'error');

                }
            });
            


         }  

    </script>
@endsection
