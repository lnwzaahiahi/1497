@extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')

                 
   @component('common-components.breadcrumb')
         @slot('title') Dashboard  @endslot
         @slot('li_1') Welcome to Hyphen Plus Dashboard @endslot
     @endcomponent
          

                        

                        

                        
<h1>Hi bro  </h1>
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
@endsection