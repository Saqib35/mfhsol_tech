<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        
                        <li>
                            <a href="{{ url('panel/admin/home') }}">
                                <i data-feather="home"></i>
                                <span class="badge rounded-pill bg-soft-success text-success float-end">New</span>
                                <span data-key="t-dashboard">Dashboard </span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="flag"></i>
                                <span data-key="t-ecommerce">Category Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('panel/admin/add-category') }}" key="t-products">Add Category</a></li>
                                <li><a href="{{ url('panel/admin/show-category') }}" key="t-products">Show Category</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="layers"></i>
                                <span data-key="t-ecommerce">Subcate Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('panel/admin/add-sub-category') }}" key="t-products">Add Sub Category</a></li>
                                <li><a href="{{ url('panel/admin/show-sub-category')  }}" key="t-products">Show Sub Category</a></li>
                        
                         
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="layers"></i>
                                <span data-key="t-ecommerce">Extra Subcate Manag...</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('panel/admin/add-extra-sub-category') }}" key="t-products">Add Extra Sub Category</a></li>
                                <li><a href="{{ url('panel/admin/show-extra-sub-category')  }}" key="t-products">Show Extra Sub Category</a></li>
                        
                         
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="eye"></i>
                                <span data-key="t-ecommerce">Services Manage...</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{  url('panel/admin/add-news') }}" key="t-products">Add Service</a></li>
                                <li><a href="{{ url('panel/admin/show-news') }}" key="t-products">Show Service</a></li>
                            </ul>
                        </li>
                       

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="eye"></i>
                                <span data-key="t-ecommerce">Blog Manage...</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{  url('panel/admin/add-blog') }}" key="t-products">Add Blog</a></li>
                                <li><a href="{{ url('panel/admin/show-blog') }}" key="t-products">Show Blog</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{ url('panel/admin/indexing-api-google') }}" class="has-arrow">
                                <i class="fa fa-google" style="font-size: 17px;"></i>
                                <span data-key="t-user">indexing Api</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" style="font-size:24px"></i> <span data-key="t-authentication">Logout </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>