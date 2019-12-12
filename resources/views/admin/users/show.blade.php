@extends('admin.app')
@section('title') User Details @endsection

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
                            <li class="active">Show Users</li>
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
            <strong class="card-title">View {{ $user->name }} Details</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Attribute</th>
                        <th>Value</th>
                        <th>Relevance</th>
                    </tr>
                </thead>

                <?php $i=0; ?>
                <tbody>

                    @if($user->name)

                        <tr>
                            <th>{{ ++$i }}</th>
                            <td>Full Name</td>
                            <td>{{ $user->name }}</td>
                            <td>Required</td>
                        </tr>
                    @endif

                    @if($user->email)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->telephone)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Telephone</td>
                        <td>{{ $user->telephone }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->date_of_birth)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Date of Birth</td>
                        <td>{{ $user->date_of_birth }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->place_of_work)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Place of Work</td>
                        <td>{{ $user->place_of_work }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->nationality)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Nationality</td>
                        <td>{{ $user->nationality }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->occupation)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Occupation</td>
                        <td>{{ $user->occupation }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->work_address)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Work Address</td>
                        <td>{{ $user->work_address }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->home_address)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Home Address</td>
                        <td>{{ $user->home_address }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->date_of_birth)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Date of Birth</td>
                        <td>{{ $user->date_of_birth }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->gender)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Gender</td>
                        <td>{{ $user->gender }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->bio)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Bio</td>
                        <td>{{ $user->bio }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->role)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Role</td>
                        <td>
                        {{ App\Models\Role::where('name',$user->role)->get()->first()->display_name }}
                        </td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($user->status)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Account Status</td>
                        <td>
                            @if($user->status == 'active')
                                <span class="btn-xs btn-rounded badge badge-success">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @elseif($user->status == 'away')
                                <span class="btn-xs btn-rounded badge badge-primary">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @elseif($user->status == 'busy')
                                <span class="btn-xs btn-rounded badge badge-danger">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @elseif($user->status == 'blocked')
                                <span class="btn-xs btn-rounded badge badge-danger">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @elseif($user->status == 'inactive')
                                <span class="btn-xs btn-rounded badge badge-info">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @else
                                <span class="btn-xs btn-rounded badge badge-warning">{{ $user->status }} | {{  $user->email_verified_at ? 'Verified' : 'Not Verified'  }}</span>
                            @endif
                        </td>
                        <td>Required</td>
                    </tr>
                    @endif


                </tbody>
            </table>
        </div> <!-- /.table-stats -->

        <div class="row text-center" style="margin: 5px; padding: 10px;">
            
            <a href="{{ route ('users.index') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Back
            </a>

            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="tools">
                    <button type="submit" class="btn btn-danger btn-rounded btn-block"
                        @if(Auth::user()->role != 'super-admin') disabled @endif onclick="return confirm('You are about to delete!\nThis is not reversible!')" title="You can not delete your profile"> Delete </button>
                </div>
            </form>
        </div>

    </div>
</div>


</div>
</div><!-- .animated -->
</div><!-- .content -->

@endsection

@section('scripts')
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@endsection

