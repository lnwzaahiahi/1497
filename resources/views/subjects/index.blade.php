@extends('layouts.master')

@section('title') Dashboard @endsection

@section('css')
<link rel="nofollow" type="text/css"
    href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
@endsection

@section('content')

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/bootstrap-timepicker.min.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    <style>
        .mfp-inline-holder .mfp-content,
        .mfp-ajax-holder .mfp-content {
            width: 20% !important;
            cursor: auto;
        }
    </style>
</head>

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
            <div class="card-body ml-5 mr-5 text-center">

                <h4 class="mt-0 mb-4 text-center">Add Subject </h4>
                {!! Form::open(array('route' => 'subject.store','method'=>'POST')) !!}
                @csrf

                <div class="row center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h5>Input Subject</h5>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="form-group ">
                            <input type="text" class="form-control" id="inputdate" name="sub_name">
                        </div>
                    </div>
                </div>
                
                <div class="row center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h5>Input Subject ID</h5>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="form-group ">
                            <input type="text" class="form-control" name="sub_id">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-6">
                    <div class="form-group text-right">
                        <h5>Input Date</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group text-left mr-3">
                        <select name = "sub_date" class="form-control">
                            <option value="mon">Monday</option>
                            <option value="tue">Tuesday</option>
                            <option value="wed">Wednesday</option>
                            <option value="thu">Thursday</option>
                            <option value="fri">Friday</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="md-form md-outline mr-3 ml-3">
                <label for="default-picker">Start Time </label>
                <input type="time" id="default-picker" name="start_time" class="form-control" placeholder="Select time">
            </div>

            <div class="md-form md-outline mr-3 ml-3 mb-3">
                <label for="default-picker">End Time </label>
                <input type="time" id="default-picker" name="end_time" class="form-control" placeholder="Select time">
            </div>

            <div class="text-center mb-3"><button type="submit" class="btn btn-primary">Submit</button></div>
            {!! Form::close() !!}

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

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th width="20px">id</th>
                                    <th width="200px">Date</th>
                                    <th width="40px">Start Time</th>
                                    <th width="40px">End Time</th>
                                    <th>Subject ID</th>
                                    <th>Subject Name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $subject)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $subject->sub_date }}</td>
                                        <td>{{ $subject->start_time }}</td>
                                        <td>{{ $subject->end_time }}</td>
                                        <td>{{ $subject->sub_id }}</td>
                                        <td>{{ $subject->sub_name }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('script')

        <!-- Magnific Popup -->
        <script src="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.min.js') }}">
        </script>


        <script src="{{ URL::asset('assets/js/pages/lightbox.init.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>

        @endsection