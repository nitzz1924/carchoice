
{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'My Profile')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row mb-4">
            <div class="col-xl-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            {{-- <div class="dropdown float-end">
                                <a class="text-body dropdown-toggle font-size-18" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="uil uil-ellipsis-v"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                </div>
                            </div> --}}
                            <div class="clearfix"></div>
                            <div>
                                <img src="{{asset('assets/backend-assets/images/logowhite.jpg')}}" alt=""
                                    class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1">{{$user->name}}</h5>
                            <p class="text-muted">CarzChoice</p>
                        </div>
                        <hr class="my-4">
                        <div class="text-muted">
                            <h5 class="font-size-16">About</h5>
                            <p>Hi I'm {{$user->name}},has been the industry's standard dummy text To an English person,
                                it will
                                seem like simplified English, as a skeptical Cambridge.</p>
                            <div class="table-responsive mt-4">
                                <div>
                                    <p class="mb-1">Name :</p>
                                    <h5 class="font-size-16">{{$user->name}}</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">Mobile :</p>
                                    <h5 class="font-size-16">012-234-5678</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">Email :</p>
                                    <h5 class="font-size-16">{{$user->name}}@gmail.com</h5>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-1">Location :</p>
                                    <h5 class="font-size-16">California, United States</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card mb-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                <i class="uil uil-user-circle font-size-20"></i>
                                <span class="d-none d-sm-block">About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                <i class="uil uil-user font-size-20"></i>
                                <span class="d-none d-sm-block">Registered Users</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                <i class="uil-lock-open-alt font-size-20"></i>
                                <span class="d-none d-sm-block">Change Password</span>
                            </a>
                        </li> --}}
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4">
                        <div class="tab-pane active" id="about" role="tabpanel">
                            <div>
                                <div>
                                    <h5 class="font-size-16 mb-4">Experience</h5>

                                    <ul class="activity-feed mb-0 ps-2">
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <p class="text-muted mb-1">2019 - 2020</p>
                                                <h5 class="font-size-16">UI/UX Designer</h5>
                                                <p>Abc Company</p>
                                                <p class="text-muted">To achieve this, it would be necessary to have
                                                    uniform grammar, pronunciation and more common words. If several
                                                    languages coalesce, the grammar of the resulting language is more
                                                    simple and regular than that of the individual</p>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <p class="text-muted mb-1">2017 - 2019</p>
                                                <h5 class="font-size-16">Graphic Designer</h5>
                                                <p>xyz Company</p>
                                                <p class="text-muted">It will be as simple as occidental in fact, it
                                                    will be Occidental. To an English person, it will seem like
                                                    simplified English, as a skeptical Cambridge friend of mine told me
                                                    what Occidental </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tasks" role="tabpanel">
                            <div>
                                <div class="table-responsive ">
                                    <table class="table table-nowrap table-hover mb-0 table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">User Type</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registeredusers as $index => $users)
                                            <tr>
                                                <th scope="row">{{$index + 1}}</th>
                                                <td><a href="#" class="text-reset ">{{$users->fullname}}</a></td>
                                                <td>{{$users->contactno}}</td>
                                                <td>{{$users->usertype}}</td>
                                                <td>
                                                    @if($users->verifystatus == 1)
                                                        <span class="badge bg-success-subtle text-success font-size-12">Verified</span>
                                                    @else
                                                        <span class="badge bg-danger-subtle text-danger font-size-12">Not Verified</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <h5 class="d-none d-sm-block p-3">Change Password</h5>
                    <div class="" id="" role="">
                        @if ($message = Session::get('success'))
                        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <form action="{{ route('changepassword') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Old
                                                    Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" placeholder="enter your old password"
                                                        type="password" value="" id="example-text-input"
                                                        name="oldpassword">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">New
                                                    Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" placeholder="enter your new password"
                                                        type="password" value="" id="example-text-input"
                                                        name="newpassword">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Confirm
                                                    Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" placeholder="Confirm password"
                                                        type="password" value="" id="example-text-input"
                                                        name="confirmpassword">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Change
                                                    Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 5000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 5000);
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
