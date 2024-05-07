@extends('dashboard.layouts.app')


@section('customcss')
    <link href="{{ asset('admin-panel/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" />
@endsection


@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Paages</li>
                </ul>
                <h1 class="page-header mb-0">Pages</h1>
            </div>
        </div>

        <!-- panel -->
        <div class="panel panel-inverse">
            <!-- panel heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">Create Page</h4>
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
                <form action="{{ route('page.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="m-3">
                                <label class="form-label mb-3">Page Name</label>
                                <input class="form-control" type="text" name="name" />
                            </div>
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div class="m-3 text-end">
                                <label class="form-label mb-3">اسم الصفحة</label>
                                <input class="form-control" type="text" name="name" />
                            </div>
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="m-3">
                                <label class="fs-5 fw-bold form-label mb-3">Priority:</label>
                                <select class="form-control" name="priority" required>
                                    <option disabled selected>Select Priority</option>
                                    @for ($i = 0; $i <= 10; $i++)
                                        <option value="{{$i}}" @if(old('priority') == $i) selected @endif>{{$i}}</option>
                                    @endfor
                                </select>
                                @error('priority')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-3">
                                <label class="form-label mb-3">content in English</label>
                                <div class="form-control p-0 overflow-hidden">
                                        <textarea class="textarea form-control wysihtml5" name="" placeholder="Enter text ..." rows="12"></textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-3 text-end">
                                <label class="form-label mb-3">المحتوي بالعربية</label>
                                <div class="form-control p-0 overflow-hidden">
                                        <textarea class="textarea form-control wysihtml5" name="" placeholder="Enter text ..." rows="12"></textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center m-3">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin-panel/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
        $('.wysihtml5').wysihtml5();
    </script>
@endsection
