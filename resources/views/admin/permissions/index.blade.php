@extends('layouts.admin-master')
@section('title') All Permissions @endsection

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
                            <li class="active">All Permissions</li>
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
            <strong class="card-title">All Permissions</strong><a href="{{ route('permissions.create') }}" style="float: right;" class="btn btn-sm btn-info"> <i class="fa-plus fa"></i>Add New</a>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th>Date Added</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php $i=0; ?>
                    @foreach($permissions as $permission)

                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->display_name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>{{ $permission->created_at  }}</td>
                        <td>
                            <div class="row text-center" style="margin-left: 3px;">
                                <a href="{{ route('permissions.show', $permission->id) }}" class="col-5 btn btn-sm btn-success" title="Permissions Details" style="margin: 2px;"><i class="fa fa-info-circle"></i></a>
                                <a href="{{ route('permissions.edit', $permission->id) }}" class=" col-5 btn btn-sm btn-primary" style="margin: 2px;"><i class="fa fa-edit" title="Edit Permissions"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $permissions->links() }}
        </div> <!-- /.table-stats -->
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