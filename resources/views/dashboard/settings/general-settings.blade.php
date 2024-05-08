@extends('dashboard.layouts.app')

@section('customcss')
    <link href="{{ asset('admin-panel/assets/plugins/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
@endsection

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

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
            <li class="breadcrumb-item active">Base Settings</li>
        </ol>
        <!-- END breadcrumb -->

        <!-- BEGIN page-header -->
        <h1 class="page-header">Base Settings</h1>
        <!-- END page-header -->

        <form>
            <!-- BEGIN row -->
            <div class="row mb-3">
                <!-- BEGIN col-6 -->
                <div class="col-xl-6">

                    <!-- BEGIN panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <!-- BEGIN panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Website Info</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- END panel-heading -->

                        <!-- BEGIN panel-body -->
                        <div class="panel-body">
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Website Logo</label>
                                <div class="col-sm-9">
                                    <div id="dropzone">
                                        <div action="/upload" class="dropzone needsclick" id="demo-upload">
                                            <div class="dz-message needsclick">
                                                Drop files <b>here</b> or <b>click</b> to upload.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Website Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Website Name"  />
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Website Description</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Website Description"  />
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Website Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Website Address"  />
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Website Icon</label>
                                <div class="col-sm-9">
                                    <div id="dropzone">
                                        <div action="/upload" class="dropzone needsclick" id="demo-upload2">
                                            <div class="dz-message needsclick">
                                                Drop files <b>here</b> or <b>click</b> to upload.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary d-block w-100"><i class="fa-regular fa-floppy-disk"></i> Save</button>
                                </div>
                            </div>

                        </div>
                        <!-- END panel-body -->

                    </div>
                    <!-- END panel -->

                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-xl-6">

                    <!-- BEGIN panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <!-- BEGIN panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Spcial Media</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- END panel-heading -->

                        <!-- BEGIN panel-body -->
                        <div class="panel-body">
                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-facebook-f"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><span class="fab fa-twitter"></span></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-instagram"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-youtube"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-whatsapp"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-tiktok"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <div class="input-group input-group-lg mb-10px">
                                    <div class="input-group-text"><i class="fa-brands fa-snapchat"></i></div>
                                    <input type="text" class="form-control" placeholder="facebook">
                                </div>
                            </div>

                        </div>
                        <!-- END panel-body -->

                    </div>
                    <!-- END panel -->

                </div>
                <!-- END col-6 -->

            </div>
            <!-- ./row -->

        </form>

    </div>
    <!-- END #content -->

@endsection

@section('scripts')
    <script src="{{ asset('admin-panel/assets/plugins/dropzone/dist/min/dropzone.min.js') }}"></script>
@endsection
