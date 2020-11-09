@extends('layouts.master')

@section('title') User Management @endsection

@section('content')





<div class="row">
    <div class="col-lg-12 ">
        <div class="card overflow-hidden ">



            <div class="bg-soft-primary">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">
                                Back</a>
                        </div>
                    </div>
                    <div class="avatar-xl profile-user-wid mb-1">

                    </div>
                </div>
            </div>


            <div class="card-body pt-0">

                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2">

                        <div class="col-center">

                            <div class="text-center">
                                <div class="avatar-xl profile-user-wid mb-2">
                                    <img src="
                                {{ URL::asset('assets/images/users/avatar-4.jpg') }} "
                                        class=" img-thumbnail rounded-circle">
                                </div>
                                <div>
                                    <strong>{{ $user->firstname }}</strong>
                                    <strong>{{ $user->lastname }}</strong>
                                    </br>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                    </br>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        </br>
                        <h4>Details</h4>

                        Username : <strong>{{ $user->username }}</strong>
                        </br>
                        E-mail : <strong>{{ $user->email }}</strong>
                        </br>
                        Phone number : <strong>{{ $user->phone }}</strong>
                        </br>
                        Desciption : <strong>{{ $user->desciption }}</strong>
                    </div>

                    <div class="col-lg-4">
                        </br>
                        <h4>Status</h4>

                        User Status : <strong>{{ $user->status }}</strong>
                        </br>
                        ID Card Verified Status : <strong>{{ $user->id_verified_status }}</strong>
                        </br>
                        Bookbank Verified Status : <strong>{{ $user->id_verified_status }}</strong>
                        </br>
                        Created at : <strong>{{ $user->created_at }}</strong>
                        </br>
                        Updated at : <strong>{{ $user->updated_at }}</strong>
                        </br>
                        Last active at : <strong>{{ $user->last_active_at }}</strong>
                    </div>
                </div>
                {{-- <div class="text-right">
                    <strong>Contact this user</strong>
                </div> --}}
            </div>



        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div data-repeater-list="outer-group" class="outer">
                    <h4 class="card-title mb-4">User Post</h4>
                    <div data-repeater-item class="outer">


                        <div class="text-right">
                            <button type="button" class="btn btn-success btn-sm">Apply   </button>
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

                <div data-repeater-list="outer-group" class="outer">
                    <h4 class="card-title mb-4">User Post</h4>
                    <div data-repeater-item class="outer">

                        <div class="tab-content">
                            <div class="tab-pane show active" id="chat">
                                <div>
                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Post ID</th>
                                                        <th width="700px">Post Title </th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th width="200px">Date Craete</th>
                                                        <th width="200px">Date Update</th>
                                                        <th width="200px">Action</th>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck3">
                                                                <label class="custom-control-label"
                                                                    for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            </br>
                                                            @if(!empty($user->getRoleNames()))
                                                                @foreach($user->getRoleNames() as $v)
                                                                    Role : <label
                                                                        class="badge badge-success">{{ $v }}</label>
                                                                @endforeach
                                                            @endif
                                                            </br>
                                                        </td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>{{ $user->updated_at }}</td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="mr-3 text-primary"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Edit"><i
                                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Delete"><i
                                                                    class="mdi mdi-close font-size-18"></i></a>
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>


                                            </table>
                                        </div>
                                        </thead>






                                    </ul>
                                </div>
                            </div>




                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary btn-sm">Approve Selected</button>
                            <button type="button" class="btn btn-secondary btn-sm">Reject Selected</button>
                            <button type="button" class="btn btn-secondary btn-sm">Delete Selected</button>
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
                <h4 class="card-title mb-4">User Chat</h4>
                <div data-repeater-list="outer-group" class="outer">
                    <div data-repeater-item class="outer">

                        <div class="tab-content py-0">
                            <div class="tab-pane show active" id="chat">
                                <div>
                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 400px;">
                                        <li class="active">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center mr-3">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>

                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                                        <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                    </div>
                                                    <div class="font-size-11">05 min</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center mr-3">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                                        <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                    </div>
                                                    <div class="font-size-11">12 min</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="avatar-xs align-self-center mr-3">
                                                        <span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            K
                                                        </span>
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                        <p class="text-truncate mb-0">This theme is awesome!</p>
                                                    </div>
                                                    <div class="font-size-11">24 min</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle text-warning font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center mr-3">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                                        <p class="text-truncate mb-0">Nice to meet you</p>
                                                    </div>
                                                    <div class="font-size-11">1 hr</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle font-size-10"></i>
                                                    </div>

                                                    <div class="avatar-xs align-self-center mr-3">
                                                        <span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            M
                                                        </span>
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                                        <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                    </div>
                                                    <div class="font-size-11">3 hrs</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center mr-3">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                                        <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                    </div>
                                                    <div class="font-size-11">5hrs</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center mr-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="avatar-xs align-self-center mr-3">
                                                        <span
                                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            K
                                                        </span>
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                        <p class="text-truncate mb-0">This theme is awesome!</p>
                                                    </div>
                                                    <div class="font-size-11">24 min</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
