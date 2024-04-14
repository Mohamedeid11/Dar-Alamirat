@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
    </script>
@endif

@if(session('error'))
    <div class="alert alert-danger fade in m-b-15">
        <strong>Error!</strong>
        {{ session('error') }}
        <span class="close" data-dismiss="alert">&times;</span>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info fade in m-b-15">
        <strong>Info!</strong>
        {{ session('info') }}
        <span class="close" data-dismiss="alert">&times;</span>
    </div>
@endif

@if(session('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            text: '{{ session('warning') }}',
        });
    </script>
@endif

