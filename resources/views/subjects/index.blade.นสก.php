


@extends('layouts.master')

@section('title') Dashboard @endsection

@section('css') 
        <link rel="nofollow" type="text/css"  href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
@endsection

@section('content')
<style>
    .mfp-inline-holder .mfp-content,
    .mfp-ajax-holder .mfp-content {
        width: 20% !important;
        cursor: auto;
    }
</style>


@component('common-components.breadcrumb')
    @slot('title') Dashboard  @endslot
        @slot('li_1') Welcome to Hyphen Plus Dashboard @endslot
        @endcomponent

        <link rel="stylesheet" type="text/css"
            href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.css') }}">
           

        <!-- เพื่มวัน -->

        <div class="col-lg-12">
            <div class="text-right">
                <a class="popup-form btn btn-success btn-sm" href="#subject-form">
                    <i class="material-icons">+</i> <span>Add New Subject</span></a>

            </div>
        </div>

        <div class="card mfp-hide mfp-popup-form mx-auto " id="subject-form">
            <div class="card-body ml-5 mr-5">

                <h4 class="mt-0 mb-4 text-center">Add Subject </h4>
                {!! Form::open(array('route' => 'subject.store','method'=>'POST')) !!}
                @csrf
                <div class="row text-center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4>Input Date</h4>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">

                            <input type="date" id="inputdate" name="sub_date">
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4>Input Subject</h4>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">

                            <input type="text" id="inputdate" name="sub_name">
                        </div>
                    </div>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
                {!! Form::close() !!}

            </div>
        </div>

        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Buttons example</h4>
                                        <p class="card-title-desc">The Buttons extension for DataTables
                                            provides a common set of options, API methods and styling to display
                                            buttons on a page that will interact with a DataTable. The core library
                                            provides the based framework upon which plug-ins can built.
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Subject ID</th>
                                                <th>Subject Name</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $subject)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$subject->sub_date}}</td>
                                                <td>{{$subject->sub_time}}</td>
                                                <td>{{$subject->sub_id}}</td>
                                                <td>{{$subject->sub_name}}</td>
                                               
                                            </tr>
                                            @endforeach
                                            </tbody>
</table>

        </div></div></div></div>
            @endsection

            @section('script')

            <!-- Magnific Popup -->
            <script
                src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js') }}">
            </script>


            <script src="{{ URL::asset('assets/js/pages/lightbox.init.js') }}"></script>
            <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script> 
        
            @endsection