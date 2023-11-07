<div class="page-sidebar custom-scrollbar page-sidebar-open print-d-none">
    <!--Page Sidebar Start-->
    <script>
        function toggle_menu(){
            let parent_li = event.currentTarget.parentNode;
            parent_li.classList.toggle('active');
            let child_ul = parent_li.childNodes[5];
            child_ul.classList.toggle('menu-open');
        }
    </script>
    <div class="sidebar-user text-center">
        <div><img class="img-50 rounded-circle" src="/assets/backend/1.jpg" alt="#" /></div>
        <h6 class="mt-3 f-12">Admin</h6>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="/dashboard" class="sidebar-header" aria-current="page">
                <i class="icon-pie-chart"></i>
                <span>Analytics</span>
            </a>
        </li>

        <li class="">
            <div class="sidebar-title">Management</div>
            {{-- <a href="javascript:void(0)" onclick="toggle_menu()" class="sidebar-header">
                <i class="icon-desktop"></i>
                <span>User</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('dashboard.user.create') }}"><i class="fa fa-angle-right"></i>Create User</a></li>
                <li><a href="{{ route('dashboard.user.view') }}" class=""><i class="fa fa-angle-right"></i>All User</a>
                </li>
            </ul> --}}
        </li>

        <li class="">
            <a href="javascript:void(0)" onclick="toggle_menu()" class="sidebar-header">
                <i class="icon-desktop"></i><span>Product</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('dashboard.product_category.view') }}" class="">
                        <i class="fa fa-angle-right"></i>
                        Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.product.view') }}" class="">
                        <i class="fa fa-angle-right"></i>
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.product_tag.view') }}" class="">
                        <i class="fa fa-angle-right"></i>
                        Tags
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" onclick="toggle_menu()" class="sidebar-header">
                <i class="icon-desktop"></i><span>Order</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('dashboard.order.all') }}" class="">
                        <i class="fa fa-angle-right"></i>
                        All
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.order.all') }}?type=pending" class="">
                        <i class="fa fa-angle-right"></i>
                        Pending
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.order.all') }}?type=accepted" class="">
                        <i class="fa fa-angle-right"></i>
                        Accepted
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.order.all') }}?type=processing" class="">
                        <i class="fa fa-angle-right"></i>
                        Processing
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.order.all') }}?type=delivered" class="">
                        <i class="fa fa-angle-right"></i>
                        Delivered
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="">
            <a href="javascript:void(0)" onclick="toggle_menu()" class="sidebar-header">
                <i class="icon-desktop"></i> <span>Frontend</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('dashboard.banner.view') }}" class="active">
                        <i class="fa fa-angle-right"></i>
                        Banners
                    </a>
                </li>
            </ul>
        </li> --}}

    </ul>
    <!--Page Sidebar Ends-->
</div>
