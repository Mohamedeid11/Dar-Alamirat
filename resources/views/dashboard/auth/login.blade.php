<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@section('meta')
    <meta charset="utf-8" />
    <title> {{__('dashboard.login_page')}}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@endsection

@include('dashboard.layouts.head')
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<div class="login-cover">
    <div class="login-cover-image"><img src="{{asset('admin-panel/assets/img/login-bg/bg-1.jpg')}}" data-id="login-cover-image" alt="" /></div>
    <div class="login-cover-bg"></div>
</div>
<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-v2" data-pageload-addclass="animated fadeIn">
        @include('dashboard.layouts.alerts')
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> Dar Alamirat
                <small>responsive bootstrap 3 admin template</small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>

        <!-- end brand -->
        <div class="login-content">
            <form action="{{route('dashboard.auth.postLogin')}}" method="POST" class="margin-bottom-0">
                @csrf
                <div class="form-group m-b-20">
                    <input type="text" name="userName" class="form-control input-lg" value="{{ old('userName') }}" placeholder="User Name" />
                </div>
                @error('userName')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group m-b-20">
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                </div>
                @error('password')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember"/> Remember Me
                    </label>
                </div>
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                </div>
                <div class="m-t-20">
                    Not a member yet? Click <a href="{{route('dashboard.auth.register')}}">here</a> to register.
                </div>
            </form>
        </div>
    </div>
    <!-- end login -->

    <ul class="login-bg-list">
        <li class="active"><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-1.jpg')}}" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-2.jpg')}}" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-3.jpg')}}" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-4.jpg')}}" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-5.jpg')}}" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="{{asset('admin-panel/assets/img/login-bg/bg-6.jpg')}}" alt="" /></a></li>
    </ul>

    @include('dashboard.layouts.them-panel')

</div>
<!-- end page container -->
@include('dashboard.layouts.foot')

@section('scripts')
    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>
@endsection
</body>>
