@extends('layouts.master')

@section('title') User Management @endsection



@section('content')

    <div class="col-lg-6">
        <div class="text-right">
            <a class="btn btn-success btn-sm" href="{{ route('roles.index') }}">
                <i class="material-icons">
                    <-< /i> <span>Back</span></a>
            
        </div>



    </div>
</div>




{!! Form::open(array('route' => 'permission.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}



@endsection