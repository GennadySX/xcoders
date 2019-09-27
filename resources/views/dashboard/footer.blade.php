
@section('footer')
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('tim/dash/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('tim/dash/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('tim/dash/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('tim/dash/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('tim/dash/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('tim/dash/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('tim/dash/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('tim/dash/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('tim/dash/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('tim/dash/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('tim/dash/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('tim/dash/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('tim/dash/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('tim/dash/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('tim/dash/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('tim/dash/build/js/custom.min.js')}}"></script>
    <script>
        function update() {
            $('.xtime').html(moment().format(' H:mm:ss'));
        }

        setInterval(update, 1000);
    </script>
    <script>
        $(document).ready(function () {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });


            $('.table-striped ins').click(function () {

            alert(12312);
            });




        });






    </script>
    </body>
    </html>
@endsection