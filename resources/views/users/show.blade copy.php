@extends('layouts.master')

@section('title') User Management @endsection

@section('content')


<!-- 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div> -->


<div class="row justify-content-md-center">
    <div class="col-lg-12 ">
        <div class="card overflow-hidden ">



            <div class="bg-soft-primary">
                <div class="row">

                    <div class="avatar-xl profile-user-wid mb-1">

                    </div>
                </div>
            </div>


            <div class="card-body pt-0">

                <div class="row justify-content-center">


                    <div class="col-centered">

                        <div class="text-center">
                            <div class="avatar-xl profile-user-wid mb-1">
                                <img src="
                                {{ URL::asset('assets/images/users/avatar-4.jpg') }} "
                                    class=" img-thumbnail rounded-circle">
                            </div>
                            <div>
                                <strong>{{ $user->firstname }}</strong>
                                <strong>{{ $user->lastname }}</strong>

                            </div>
                            </br>
                            {{ $user->email }}
                            </br>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    Role : <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                            </br>

                            Status:{{ $user->status }}
                            <!-- </br>
                                Create At : {{ $user->created_at }} </br>Last Active At :
                                {{ $user->last_active_at }} -->
                        </div>

                    </div>


                </div>
                <div class="text-right">
                    <strong>Contact this user</strong>
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
                    <h4 class="card-title mb-4">Relate User Post</h4>
                    <div data-repeater-item class="outer">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="chat">
                                <div>
                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">

                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        <li class="active">
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Multimedia/Graphic design
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Multimedia/Graphic design
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช
                                                            รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Programming/Game
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช
                                                            รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Programming/Game
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช
                                                            รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Programming/Game
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช
                                                            รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">


                                                    <div class="media-body overflow-hidden">
                                                        <h6 class="text-truncate font-size-14 mb-1">
                                                            <h5 class="text-truncate font-size-14 mb-1 ">
                                                                Programming/Game
                                                            </h5>
                                                        </h6>
                                                        <h5 class="text-truncate font-size-14 mb-1">ไดคัท รีทัช
                                                            รูปเครื่องประดับ คุณภาพมืออาชีพ พิเศษ
                                                            ถ่ายรูปพร้อมแต่งภาพ
                                                        </h5>
                                                        <p class="text-truncate mb-0">ไดคัท รีทัช
                                                            รูปเครื่องประดับ
                                                            ลงเว็บไซต์ และสื่อออนไลน์
                                                            สามารถถ่ายภาพสินค้าตามที่ลูกค้าต้องการพร้อมแต่ง</p>
                                                    </div>
                                                    <div class="font-size-11">

                                                        <script>
                                                            document.write(new Date().toLocaleDateString());
                                                        </script>
                                                    </div>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Relate User Chat</h4>
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