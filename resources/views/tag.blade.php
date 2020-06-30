@extends('layouts.master')

@section('title') Post Management @endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Post Tag	 @endslot
         @slot('li_1') Post Management @endslot
         @slot('li_2') Post Tag @endslot
     @endcomponent

                        

                        

                        
<h1>Hi Freelance User	  </h1>
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
@endsection