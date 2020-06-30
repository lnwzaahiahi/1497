@extends('layouts.master')

@section('title') Chat Management @endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Message Filtering	 @endslot
         @slot('li_1') Chat Management @endslot
         @slot('li_2') Message Filtering	 @endslot
     @endcomponent

                        

                        

                        
<h1>Hi</h1>
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
@endsection