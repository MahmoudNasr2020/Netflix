
        <!-- $frontEnd =>this is  global variable ,it define in appServiceProvider To use in all pages -->

        <!-- start js include path -->
        <script src="{{ $frontEnd }}/plugins/jquery/jquery.min.js"></script>
        <script src="{{ $frontEnd }}/plugins/popper/popper.js"></script>
        <script src="{{ $frontEnd }}/plugins/jquery-blockui/jquery.blockui.min.js"></script>
        <script src="{{ $frontEnd }}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- bootstrap -->
        <script src="{{ $frontEnd }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ $frontEnd }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <script src="{{ $frontEnd }}/plugins/sparkline/jquery.sparkline.js"></script>
        <script src="{{ $frontEnd }}/js/pages/sparkline/sparkline-data.js"></script>
        <!-- Common js-->
        <script src="{{ $frontEnd }}/js/app.js"></script>
        <script src="{{ $frontEnd }}/js/layout.js"></script>
        <script src="{{ $frontEnd }}/js/theme-color.js"></script>
        <!-- material -->
        <script src="{{ $frontEnd }}/plugins/material/material.min.js"></script>
        <!-- chart js -->
        <script src="{{ $frontEnd }}/plugins/chart-js/Chart.bundle.js"></script>
        <script src="{{ $frontEnd }}/plugins/chart-js/utils.js"></script>
        <script src="{{ $frontEnd }}/js/pages/chart/chartjs/home-data.js"></script>
        <!-- summernote -->
        <script src="{{ $frontEnd }}/plugins/summernote/summernote.js"></script>
        <script src="{{ $frontEnd }}/js/pages/summernote/summernote-data.js"></script>
        <!-- end js include path -->
         <!-- notiy Scripts -->

        @yield('script')
