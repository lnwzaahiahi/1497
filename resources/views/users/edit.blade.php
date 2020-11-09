@extends('layouts.master')

@section('title') User Management @endsection

@section('content')


@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="text-left">
            <h2>Edit New User</h2>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="text-right">
            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<form class="outer-repeater">


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Nested</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Username">Username:</label>
                                        {!! Form::text('username', null, array('placeholder' =>
                                        'username','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Email">Email:</label>
                                        {!! Form::text('email', null, array('placeholder' =>
                                        'Email','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Password">Password:</label>
                                        {!! Form::password('password', array('placeholder' =>
                                        'Password','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Confirm">Confirm Password:</label>
                                        {!! Form::password('confirm-password', array('placeholder' =>
                                        'Confirm Password','class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Role">Role:</label>
                                        {!! Form::select('roles[]', $roles,$userRole, array('class' =>
                                        'form-control','multiple')) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Nested</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        {!! Form::text('firstname', null, array('placeholder' =>
                                        'firstname','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Lastname">Lastname</label>
                                        {!! Form::text('lastname', null, array('placeholder' =>
                                        'lastname','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        {!! Form::text('phone', null, array('placeholder' =>
                                        'phone','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Birthdate">Birthdate</label>
                                        {!! Form::date('birthdate', null, array('placeholder' =>
                                        'birthdate','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        {!! Form::text('country', null, array('placeholder' =>
                                        'country','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="portal_code">Portal Code</label>
                                        {!! Form::text('portal_code', null, array('placeholder' =>
                                        'portal_code','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        {!! Form::textarea('address', null, array('placeholder' =>
                                        'address','class' => 'form-control','rows' => 4, 'cols' =>
                                        54, 'style' => 'resize:none')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        {!! Form::textarea('description', null, array('placeholder'
                                        => 'description','class' => 'form-control','rows' => 4,
                                        'cols' => 54, 'style' => 'resize:none')) !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Nested</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        {!! Form::text('website', null, array('placeholder' =>
                                        'website','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="video_intro">Video Intro</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_card_url">ID Card</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_card_selfie_url">ID Card Selfie</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bookbank_url">Bookbank</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Nested</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>

</form>


{!! Form::close() !!}
@endsection
