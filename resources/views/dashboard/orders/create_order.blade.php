@extends('dashboard.layouts.app')

@section('customcss')
    <link href="{{ asset('admin-panel/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-panel/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endsection


@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Extra</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ul>
                <h1 class="page-header mb-0">Orders</h1>
            </div>
        </div>

        <!-- panel -->
        <div class="panel panel-inverse">
            <!-- panel heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">Create Order</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- ./panel heading -->

            <!-- panel body -->
            <div class="panel-body p-0">
                <form action="">
                    <div class="row">
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Order Number</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Choose a Product</label>
                                <select class="multiple-select2 form-control" multiple>
                                    <optgroup label="body-care">
                                        <option value="AK">Spray</option>
                                        <option value="HI">loutions</option>
                                    </optgroup>
                                    <optgroup label="skin-care">
                                        <option value="AK">Spray</option>
                                        <option value="HI">loutions</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Choose a Date</label>
                                <input type="text" class="form-control" id="datepicker-autoClose" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Choose a Customer</label>
                                <select class="multiple-select2 form-control" multiple>
                                    <optgroup label="customer-name">
                                        <option value="AK">haitham abdallah</option>
                                        <option value="HI">mohamed zaki</option>
                                        <option value="AK">Ahmed awad</option>
                                        <option value="HI">Amr dalny</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Shipping method</label>
                                <select class="form-select">
                                    <option>Fast Shipping</option>
                                    <option>Local Shipping</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-3">
                                <label class="form-label">Total Amount</label>
                                <br>
                                <label class="form-label mt-3">$398.00</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center m-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ./panel body -->
        </div>
        <!-- ./panel -->

    </div>
    <!-- END #content -->


@endsection

@section('scripts')
    <script src="{{ asset('admin-panel/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin-panel/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
    <script>

        $(".multiple-select2").select2({ placeholder: "Select a product" });

        $("#datepicker-autoClose").datepicker({
            todayHighlight: true,
            autoclose: true
        });

    </script>
@endsection
