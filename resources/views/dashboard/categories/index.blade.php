@extends('dashboard.layouts.app')
@section('meta')
    <meta charset="utf-8" />
    <title> {{__('dashboard.categories')}} </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@endsection

@section('customcss')

    <link href="{{ asset('admin-panel/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-panel/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{__('dashboard.home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">{{__('dashboard.categories')}}</a></li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header"> {{__('dashboard.categories')}} </h1>
        <!-- END page-header -->
        @include('dashboard.layouts.alerts')
        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">{{__('dashboard.categories') . ' - '  .__('dashboard.table')}}</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-tطoggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <a href="{{route('category.create')}}" class="btn btn-primary btn-lg m-2" > {{__('dashboard.category.add')}}</a>
                <table id="data-table-default" class="table table-striped table-bordered align-middle">
                    <thead>
                    <tr>
                        <th width="1%"></th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Slug</th>
                        <th class="text-nowrap">icon</th>
                        <th class="text-nowrap">Priority</th>
                        <th class="text-nowrap">status</th>
                        <th class="text-nowrap">created At</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold text-dark">{{ $loop->iteration }}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td width="1%" class="with-img">
                                <img src="{{storage_asset($category->icon)}}" class="rounded h-30px my-n1 mx-n1" />
                            </td>
                            <td>{{$category->priority}}</td>
                            <td>{{$category->status}}</td>
                            <td>{{$category->created_at->format('Y-m-d')}}</td>
                            <td class="text-center">
                                <div class="btn-group me-1 mb-1">
                                    <a href="javascript:;" class="btn btn-default">{{__('dashboard.action')}}</a>
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @adminCan('categories.edit')
                                        <a href="{{route('category.edit' , $category->id)}}" class="dropdown-item">{{__('dashboard.category.edit')}}</a>
                                        @endadminCan
                                        @adminCan('categories.delete')
                                        <div class="dropdown-divider"></div>
                                        <form id="deleteForm{{$category->id}}" action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item delete-btn" style="background-color: transparent; border: none;" data-id="{{$category->id}}">{{__('dashboard.category.delete')}}</button>
                                        </form>
                                        @endadminCan
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END panel-body -->
        </div>
        <!-- END panel -->
    </div>
    <!-- END #content -->

@endsection


@section('scripts')

    <script src="{{ asset('admin-panel/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-panel/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin-panel/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin-panel/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

    <script>
        $('#data-table-default').DataTable({
            responsive: true
        });
    </script>

@endsection
