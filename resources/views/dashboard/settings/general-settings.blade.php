@extends('dashboard.layouts.app')

@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <div class="row">

            <!-- BEGIN col-3 -->
            <div class="col-xl-3 col-md-6">
                <!-- BEGIN widget-card -->
                <a href="#" class="widget-card rounded mb-20px" data-id="widget">
                    <div class="widget-card-cover rounded"></div>
                    <div class="widget-card-content">
                        <h5 class="fs-12px text-black text-opacity-75" data-id="widget-elm"
                            data-light-class="fs-12px text-black text-opacity-75"
                            data-dark-class="fs-12px text-white text-opacity-75"><b>Edit Store Info</b></h5>
                        <h4 class="mb-10px text-success"><b>Basic Settings</b></h4>
                        <i class="fa-solid fa-shop fa-5x text-success text-opacity-50"></i>
                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black text-opacity-75" data-id="widget-elm"
                           data-light-class="fs-12px text-black text-opacity-75"
                           data-dark-class="fs-12px text-white text-opacity-75">Logo, Links, Name, Addresses</b>
                    </div>
                </a>
                <!-- END widget-card -->
            </div>
            <!-- END col-3 -->

            <!-- BEGIN col-3 -->
            <div class="col-xl-3 col-md-6">
                <!-- BEGIN widget-card -->
                <a href="#" class="widget-card rounded mb-20px" data-id="widget">
                    <div class="widget-card-cover rounded"></div>
                    <div class="widget-card-content">
                        <h5 class="fs-12px text-black text-opacity-75" data-id="widget-elm"
                            data-light-class="fs-12px text-black text-opacity-75"
                            data-dark-class="fs-12px text-white text-opacity-75"><b>Edit Store Options</b></h5>
                        <h4 class="mb-10px text-success"><b>Store Options</b></h4>
                        <i class="fa-solid fa-list-ul fa-5x text-success text-opacity-50"></i>
                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black text-opacity-75" data-id="widget-elm"
                           data-light-class="fs-12px text-black text-opacity-75"
                           data-dark-class="fs-12px text-white text-opacity-75">Control your Store Options</b>
                    </div>
                </a>
                <!-- END widget-card -->
            </div>
            <!-- END col-3 -->

            <!-- BEGIN col-3 -->
            <div class="col-xl-3 col-md-6">
                <!-- BEGIN widget-card -->
                <a href="#" class="widget-card rounded mb-20px" data-id="widget">
                    <div class="widget-card-cover rounded"></div>
                    <div class="widget-card-content">
                        <h5 class="fs-12px text-black text-opacity-75" data-id="widget-elm"
                            data-light-class="fs-12px text-black text-opacity-75"
                            data-dark-class="fs-12px text-white text-opacity-75"><b>Shipping & Delivery</b></h5>
                        <h4 class="mb-10px text-success"><b>Shipping Option</b></h4>
                        <i class="fa-solid fa-truck fa-5x text-success text-opacity-50"></i>
                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black text-opacity-75" data-id="widget-elm"
                           data-light-class="fs-12px text-black text-opacity-75"
                           data-dark-class="fs-12px text-white text-opacity-75">Add, Edit, Shipping Info</b>
                    </div>
                </a>
                <!-- END widget-card -->
            </div>
            <!-- END col-3 -->

            <!-- BEGIN col-3 -->
            <div class="col-xl-3 col-md-6">
                <!-- BEGIN widget-card -->
                <a href="#" class="widget-card rounded mb-20px" data-id="widget">
                    <div class="widget-card-cover rounded"></div>
                    <div class="widget-card-content">
                        <h5 class="fs-12px text-black text-opacity-75" data-id="widget-elm"
                            data-light-class="fs-12px text-black text-opacity-75"
                            data-dark-class="fs-12px text-white text-opacity-75"><b>Payments Option</b></h5>
                        <h4 class="mb-10px text-success"><b>Payments Option</b></h4>
                        <i class="fa-solid fa-wallet fa-5x text-success text-opacity-50"></i>
                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black text-opacity-75" data-id="widget-elm"
                           data-light-class="fs-12px text-black text-opacity-75"
                           data-dark-class="fs-12px text-white text-opacity-75">Add, Edit, Payments Info</b>
                    </div>
                </a>
                <!-- END widget-card -->
            </div>
            <!-- END col-3 -->

            <!-- BEGIN col-3 -->
            <div class="col-xl-3 col-md-6">
                <!-- BEGIN widget-card -->
                <a href="#" class="widget-card rounded mb-20px" data-id="widget">
                    <div class="widget-card-cover rounded"></div>
                    <div class="widget-card-content">
                        <h5 class="fs-12px text-black text-opacity-75" data-id="widget-elm"
                            data-light-class="fs-12px text-black text-opacity-75"
                            data-dark-class="fs-12px text-white text-opacity-75"><b>Payments Option</b></h5>
                        <h4 class="mb-10px text-success"><b>Payments Option</b></h4>
                        <i class="fa-solid fa-wallet fa-5x text-success text-opacity-50"></i>
                    </div>
                    <div class="widget-card-content bottom">
                        <b class="text-black text-opacity-75" data-id="widget-elm"
                           data-light-class="fs-12px text-black text-opacity-75"
                           data-dark-class="fs-12px text-white text-opacity-75">Add, Edit, Payments Info</b>
                    </div>
                </a>
                <!-- END widget-card -->
            </div>
            <!-- END col-3 -->

        </div>
        <!-- END row -->

    </div>
    <!-- END #content -->

@endsection
