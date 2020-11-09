@extends('layouts.master')

@section('title')
Register
@endsection

@section('body')

<body>
    @endsection

    @section('content')
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
    <br>

    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
  <form class="outer-repeater">


      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title mb-4">Fill in information</h4>
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
                                          {!! Form::select('roles[]', $roles,[], array('class' =>
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
