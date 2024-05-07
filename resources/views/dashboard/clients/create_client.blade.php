@extends('dashboard.layouts.app')


@section('customcss')
    <link href="{{ asset('admin-panel/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endsection


@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Clients</a></li>
            <li class="breadcrumb-item active">add client</li>
        </ol>
        <!-- END breadcrumb -->

        <!-- BEGIN page-header -->
        <h1 class="page-header">Add Clients</h1>
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
                            <h4 class="panel-title">Add Client in English</h4>
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
                                    <label class="form-label col-form-label col-md-3">First Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="First Name"  />
                                    </div>
                                </div>

                                <div class="row mb-15px">
                                    <label class="form-label col-form-label col-md-3">Last Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Last Name"  />
                                    </div>
                                </div>

                                <div class="row mb-15px">
                                    <label class="form-label col-form-label col-md-3">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" placeholder="Email"  />
                                    </div>
                                </div>

                                <div class="row mb-15px">
                                    <label class="form-label col-form-label col-md-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="masked-input-phone" placeholder="(999) 999-9999">
                                    </div>
                                </div>

                                <div class="row mb-15px">
                                    <label class="form-label col-form-label col-md-3">Birthday</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="datepicker-autoClose" />
                                    </div>
                                </div>

                                <div class="row mb-15px">
                                    <label class="form-label col-form-label col-md-3">Inline Radios</label>
                                    <div class="col-md-9 pt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="genderMale" name="gender" />
                                            <label class="form-check-label" for="genderMale">male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="genderFemale" name="gender" />
                                            <label class="form-check-label" for="genderFemale">Female</label>
                                        </div>
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

                    <div class="panel panel-inverse" data-sortable-id="form-stuff-2">
                        <!-- BEGIN panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Add Client in Arabic</h4>
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
                            <div class="row mb-15px flex-row-reverse">
                                <label class="form-label col-form-label col-md-3 text-end">First Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="First Name"  />
                                </div>
                            </div>

                            <div class="row mb-15px flex-row-reverse">
                                <label class="form-label col-form-label col-md-3 text-end">Last Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Last Name"  />
                                </div>
                            </div>
                        </div>
                        <!-- END panel-body -->

                        <div class="panel-body">
                            <div class="row mb-15px">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary d-block w-100"><i class="fa-regular fa-floppy-disk"></i> Save</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- END col-6 -->
            </div>
            <!-- ./row -->

        </form>

    </div>
    <!-- END #content -->

@endsection

@section('scripts')
    <script src="{{ asset('admin-panel/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $("#datepicker-autoClose").datepicker({
            todayHighlight: true,
            autoclose: true
        });
    </script>
@endsection
