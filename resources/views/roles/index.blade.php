@extends('layouts.master')

@section('title') User Management @endsection

@section('content')


            @section('content')
            <div class="row">
                <div class="col-lg-6 margin-tb">
                    <div class="pull-left">
                        <h4>Roles Management</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-right">
                        <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}">
                            <i class="material-icons">+</i> <span>Add Roles</span></a>
                    </div>
                </div>
            </div>

            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($roles as $key => $role)
                    <tr>
                        
                        <td>{{ ++$j }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm"
                                href="{{ route('roles.show',$role->id) }}">Show</a>

                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('roles.edit',$role->id) }}">Edit</a>


                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </table>


            {!! $roles->render() !!}


            @endsection