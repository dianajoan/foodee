@extends('layouts.admin-master')
@section('title') Edit User @endsection

@section('content')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('admin') }}">Admin</a></li>
                            <li><a href="{{ route('users.index') }}">All Users</a></li>
                            <li class="active">Edit User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="content">
        <div class="animated fadeIn">


            <div class="row">

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit User</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">

                                @csrf
                                {{ method_field('PATCH') }}

                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                        
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Full Name" class="form-control" value="{{ $user->name }}" autofocus requiired></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control"></div>
                                </div>

                                <input type="hidden" name="password" value="{{ bcrypt('dollar') }}">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox1" value="Male" name="gender" class="form-check-input" @if ($user->gender == 'Male') checked @endif>
                                                Male
                                            </label>
                                            <label for="inline-checkbox2" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox2" value="Female" name="gender" class="form-check-input" @if ($user->gender == 'Female') checked @endif>Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date of Birth</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="date_of_birth" placeholder="Date of Birth" value="{{ $user->date_of_birth }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telephone</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="telephone" placeholder="Telephone" value="{{ $user->telephone }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nationality</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="nationality" placeholder="Nationality" value="{{ $user->nationality }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Occupation</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="occupation" placeholder="Occupation" value="{{ $user->occupation }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Place of Work</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="place_of_work" placeholder="place_of_work" value="{{ $user->place_of_work }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Privillages</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                            <option value="{{ $user->role }}">Please select</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->name }}">
                                                    <b>{{  $role->display_name . ' - ' . $role->description }}</b>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Work Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="work_address" placeholder="Work Address" value="{{ $user->work_address }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Home Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="home_address" placeholder="Home Address" value="{{ $user->home_address }}" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Bio</label></div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="bio" id="textarea-input" rows="9" placeholder="Content..." class="form-control">
                                            
                                            {{ $user->bio }}

                                        </textarea>{{ $user->name }}</div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Account Status</label></div>
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="active" class="form-check-input" @if ($user->status == 'active') checked @endif>Active
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="not active" class="form-check-input" @if ($user->status == 'not active') checked @endif>Not Active
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="available" class="form-check-input" @if ($user->status == 'available') checked @endif>Available
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="pending" class="form-check-input" @if ($user->status == 'pending') checked @endif>Pending
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="status" value="blocked" class="form-check-input" @if ($user->status == 'blocked') checked @endif>Blocked
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <a href="{{ route ('users.index') }}" class="btn btn-danger btn-sm">
                                    <i class="fa-angle-left fa"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->

    <div class="clearfix"></div>

 @endsection

 @section('scripts') @endsection