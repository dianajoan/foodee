@extends('admin.app')
@section('title') Role Details @endsection

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
                            <li><a href="{{ route('roles.index') }}">All Roles</a></li>
                            <li class="active">Show Roles</li>
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
            <strong class="card-title">View {{ $role->name }} Details</strong>
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

                    @if($role->name)

                        <tr>
                            <th>{{ ++$i }}</th>
                            <td>DataBase Name</td>
                            <td>{{ $role->name }}</td>
                            <td>Required</td>
                        </tr>
                    @endif

                    @if($role->display_name)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Display Name</td>
                        <td>{{ $role->display_name }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                    @if($role->description)

                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>Description</td>
                        <td>{{ $role->description }}</td>
                        <td>Required</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div> <!-- /.table-stats -->

        <div class="row text-center" style="margin: 5px; padding: 10px;">
            
            <a href="{{ route ('roles.index') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Back
            </a>

            <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
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

