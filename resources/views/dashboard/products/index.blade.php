@extends('dashboard.layouts.app')

@section('content')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">{{__('dashboard.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product.index')}}">{{__('dashboard.products')}}</a></li>
                </ol>
                <h1 class="page-header"> {{__('dashboard.products')}} </h1>
            </div>
            <div class="ms-auto">
                <a href="{{route('product.create')}}" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Product</a>
            </div>
        </div>

        <div class="mb-3 d-sm-flex fw-bold">
            <div class="mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-download fa-fw me-1 text-dark text-opacity-50"></i> Export</a></div>
            <div class="ms-sm-4 ps-sm-1 mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-upload fa-fw me-1 text-dark text-opacity-50"></i> Import</a></div>
            <div class="ms-sm-4 ps-sm-1 mt-sm-0 mt-2 dropdown-toggle">
                <a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-cog fa-fw me-1 text-dark text-opacity-50"></i> More Actions <b class="caret"></b></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>

        <div class="card border-0">
            <ul class="nav nav-tabs nav-tabs-v2 px-3">
                <li class="nav-item me-2"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
                <li class="nav-item me-2"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Published</a></li>
                <li class="nav-item me-2"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">Expired</a></li>
                <li class="nav-item me-2"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Deleted</a></li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane fade show active" id="allTab">
                    <!-- BEGIN input-group -->
                    <div class="input-group mb-3">
                        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter products <b class="caret"></b></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                        <div class="flex-fill position-relative">
                            <div class="input-group">
                                <div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 pe-0" style="z-index: 1;">
                                    <i class="fa fa-search opacity-5"></i>
                                </div>
                                <input type="text" class="form-control ps-35px bg-light" placeholder="Search products..." />
                            </div>
                        </div>
                    </div>
                    <!-- END input-group -->

                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th class="pt-0 pb-2"></th>
                                <th class="pt-0 pb-2">Product</th>
                                <th class="pt-0 pb-2">Inventory</th>
                                <th class="pt-0 pb-2">action</th>
{{--                                <th class="pt-0 pb-2">Vendor</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                <tr>
                                <td class="w-10px align-middle">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="{{$product->id}}">
                                        <label class="form-check-label" for="product1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
                                            <img alt="" class="mw-100 mh-100" src="{{ $product->thumbnail }}" />
                                        </div>
                                        <div class="ms-3">
                                            <a href="{{route('product.show' , $product->id)}}" class="text-dark text-decoration-none">{{$product->title}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">{{$product->inventory->count()}} in stock for {{$product->variants->count()}} variants</td>
                                <td class="text-center">
                                    <div class="btn-group me-1 mb-1">
                                        <a href="javascript:;" class="btn btn-default">{{__('dashboard.action')}}</a>
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="fa fa-caret-down"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            @adminCan('categories.edit')
                                            <a href="{{route('product.edit' , $product->id)}}" class="dropdown-item">{{__('dashboard.product.edit')}}</a>
                                            @endadminCan
                                            @adminCan('categories.delete')
                                            <div class="dropdown-divider"></div>
                                            <form id="deleteForm{{$product->id}}" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item delete-btn" style="background-color: transparent; border: none;" data-id="{{$product->id}}">{{__('dashboard.product.delete')}}</button>
                                            </form>
                                            @endadminCan
                                        </div>
                                    </div>
                                </td>
{{--                                <td class="align-middle">Cotton</td>--}}
{{--                                <td class="align-middle">Force Majeure</td>--}}

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->

                    <div class="d-md-flex align-items-center">
                        <div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
                            Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
                        </div>
                        <ul class="pagination mb-0 justify-content-center">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
    <!-- END #content -->

@endsection
