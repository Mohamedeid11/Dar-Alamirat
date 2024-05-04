@extends('dashboard.layouts.app')

@section('meta')
    <meta charset="utf-8" />
    <title>{{__('dashboard.category.edit')}}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@endsection

@section('customcss')
    <style>
        .custom-file-upload {
            border: solid;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 10px;
            cursor: pointer;
        }

        .upload-area {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-input {
            width: 100%;
            height: 100%;
            opacity: 0; /* Hide the default file input */
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        .icon-upload::before {
            content: '\f093'; /* FontAwesome upload icon */
            font-family: 'FontAwesome';
            font-size: 24px;
            color: #999;
        }

        .preview-area {
            position: relative;
            display: block;
            justify-content: center;
            align-items: center;
            width: 200px; /* Width of the preview area */
            height: 200px; /* Height of the preview area */
            overflow: inherit; /* Hide the overflow to maintain the area size */
        }

        #imagePreview {
            max-width: 100%;
            max-height: 100%;
            display: none; /* Hide until an image is selected */
        }

        .clear-image {
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 24px;
            color: #999;
            cursor: pointer;
        }

        /* Styling when user hovers over the upload area */
        .custom-file-upload:hover .icon-upload::before {
            color: #333;
        }

    </style>
@endsection

@section('content')
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">{{__('dashboard.dashboard')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">{{__('dashboard.categories')}}</a></li>
            <li class="breadcrumb-item active">
                @if($method == 'PUT')
                    {{__('dashboard.category.edit')}}
                @else
                    {{__('dashboard.category.add')}}
                @endif
            </li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">{{__('dashboard.categories')}}</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method($method)
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <div class="row">
                    @foreach (Config('language') as $key => $lang)
                        <div class="col-6 mt-5">
                            <label class="fs-5 fw-bold form-label mb-5">Name In {{ $lang }} :</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ old('name.'.$key) ?? $category->getTranslation('name',$key)}}" placeholder="{{ 'name-'.$lang }}" name="name[{{ $key}}]" />
                            @error('name.'.$key)
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    @endforeach
                        <div class="col-6 mt-5">
                            <label class="fs-5 fw-bold form-label mb-5">priority :</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-control" name="priority" id="" required>
                                <option disabled selected>Select Priority</option>
                                @for ($i = 0; $i <= 10; $i++)
                                    <option value="{{$i}}" @if($category->priority == $i) selected @endif>{{$i}}</option>
                                @endfor
                            </select>
                            @error('priority')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    <div class="col-12">
                        <div class="col-6 mt-5">
                            <div class="custom-file-upload">
                                <label for="formFile" class="upload-area">
                                    <div class="icon-upload"> <span class="p-1">Upload Image </span></div>
                                    <input class="file-input" name="icon" type="file" id="formFile" accept=".png, .jpg, .jpeg ,.svg ,.webp" onchange="previewImage();" />
                                </label>
                            </div>
                            @error('icon')
                            <span class="text-danger" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3 mt-5">
                            <div class="preview-area">
                                <img id="imagePreview" src="{{  storage_asset($category->icon) ?? ''}}" alt="Image preview" style="display: {{isset($category->icon) ?'block' : 'none'}};" width="200" height="200">
                                <div class="clear-image" onclick="clearImage();" style="display: none;">&times;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Input group-->

            <!--begin::Actions-->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Save</span>
                </button>
            </div>
            <!--end::Actions-->
        </form>

        <!-- END row -->

    </div>

@endsection

@section('scripts')


    <script>
        function previewImage() {
            var file = document.getElementById('formFile').files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgElement = document.getElementById('imagePreview');
                var clearBtn = document.querySelector('.clear-image');
                imgElement.src = e.target.result;
                imgElement.style.display = 'block';
                clearBtn.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }

        function clearImage() {
            var fileInput = document.getElementById('formFile');
            var imgElement = document.getElementById('imagePreview');
            var clearBtn = document.querySelector('.clear-image');
            fileInput.value = ''; // Clear the file input
            imgElement.src = '';
            imgElement.style.display = 'none';
            clearBtn.style.display = 'none';
        }
    </script>

@endsection
