
<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('dashboard/assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('dashboard/assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{asset('dashboard/assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('dashboard/assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('dashboard/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('dashboard/assets/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/morris/morris.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('dashboard/assets/js/dashboard-v2.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        DashboardV2.init();
    });
</script>
