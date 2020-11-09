@extends('layouts.master')

@section('title') User Management @endsection

@section('content')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
<div class="row justify-content-md-center">
    <div class="pt-12">
        <div class="col-lg-20">
            <div class="col-rg-20">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Nested</h4>
                                <form class="outer-repeater">
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
                                </form>


                            </div>


                            <div class="tab-pane" id="progress-user-info">
                                <div>
                                    <form>
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

                                            <div class="col-lg-6\">
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
                                    </form>
                                </div>
                            </div>


                            <div class="tab-pane" id="progress-pending-detail">
                                <div>
                                    <form>
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
                                                    {!! Form::text('video_intro', null, array('placeholder' =>
                                                    'Video Intro','class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="id_card_url">ID Card</label>
                                                    {!! Form::text('id_card_url', null, array('placeholder' =>
                                                    'ID Card URL','class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="id_card_selfie_url">ID Card Selfie</label>
                                                    {!! Form::text('id_card_selfie_url', null,
                                                    array('placeholder' => 'ID Card Selfie','class' =>
                                                    'form-control')) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="bookbank_url">Bookbank</label>
                                                    {!! Form::text('bookbank_url', null, array('placeholder' =>
                                                    'Bookbank','class' => 'form-control')) !!}
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="tab-pane" id="progress-status-detail">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="id_verified_status">ID Verified Status</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            {!! Form::select('id_verified_status', ['Pending' =>
                                            'Pending','Approve' => 'Approve', 'Reject' => 'Reject'], null,) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="bookbank_verified_status">Bookbank Verified
                                                Status</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            {!! Form::select('bookbank_verified_status', ['Pending' =>
                                            'Pending','Approve' => 'Approve', 'Reject' => 'Reject'], null,) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="status">User status</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {!! Form::select('status', ['Active' => 'Active','Inactive' =>
                                            'Inactive'], null,) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="created_at">Created At</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {!! Form::text('created_at', null, array('placeholder' => 'Created
                                            At','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="updated_at">Updated At</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {!! Form::text('updated_at', null, array('placeholder' => 'Created
                                            At','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="last_active_at">Last Active At</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {!! Form::text('last_active_at', null, array('placeholder' =>
                                            'Created
                                            At','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="progress-confirm-detail">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                            </div>
                                            <div>
                                                <h5>Confirm Detail</h5>

                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{!! Form::close() !!}
@endsection
