
<!-- ================== BEGIN core-js ================== -->
<script src="{{ asset('admin-panel/assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('admin-panel/assets/js/app.min.js') }}"></script>
<script src="{{asset('admin-panel/assets/js/demo/login-v2.demo.js')}}"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN page-js ================== -->
<script src="{{asset('admin-panel/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/plugins/@highlightjs/cdn-assets/highlight.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/js/demo/render.highlight.js')}}"></script>
<!-- ================== END page-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
    </script>
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

@yield('scripts')
