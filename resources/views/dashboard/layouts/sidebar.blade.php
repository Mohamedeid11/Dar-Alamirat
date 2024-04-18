<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ asset('admin-panel/assets/img/user/user-13.jpg') }}" alt="" />
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                Sean Ngu
                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>Frontend developer</small>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>
            <!-- item -->
            <div class="menu-item active">
                <a href="/dashboard" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="menu-text">Statistics</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/products" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <div class="menu-text">Products</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/orders" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                    <div class="menu-text">Orders</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/categories" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-sitemap"></i>
                    </div>
                    <div class="menu-text">Categories</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/clients" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="menu-text">Clients</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/reports" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div class="menu-text">Reports</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="i/dashboard/pages" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-regular fa-newspaper"></i>
                    </div>
                    <div class="menu-text">Pages</div>
                </a>
            </div>
            <!-- ./item -->

            <!-- item -->
            <div class="menu-item">
                <a href="/dashboard/settings" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="menu-text">Settings</div>
                </a>
            </div>
            <!-- ./item -->


            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->
