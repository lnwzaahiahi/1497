@extends('layouts.master')

@section('title') User Management @endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Freelancer	 @endslot
         @slot('li_1') User Management @endslot
         @slot('li_2') Freelancer @endslot
     @endcomponent

                        

                        

                        
<h1>Hi Freelance User	  </h1>
@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
@endsection