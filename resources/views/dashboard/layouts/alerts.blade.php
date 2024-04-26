

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong>
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info alert-dismissible fade show">
        <strong>Error!</strong>
        {{session('info')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif




