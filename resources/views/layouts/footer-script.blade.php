        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
        @section('script')
    <!-- twitter-bootstrap-wizard js -->
    <script
        src="{{ URL::asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}">
    </script>

    <!-- form mask -->
    <script src="{{ URL::asset('assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form mask init -->
    <script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>

  <!-- Magnific Popup -->
  <script src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js')}}"></script>

        <!-- Lightbox init js -->
        <script src="{{ URL::asset('assets/js/pages/lightbox.init.js')}}"></script> 
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>

    @endsection
        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
        
        @yield('script-bottom')