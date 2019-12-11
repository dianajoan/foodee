@extends('admin.app')
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
                            <li><a href="{{ route('roles.index') }}">Roles</a></li>
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
            <strong class="card-title">All Permissions</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th class="avatar">Avatar</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="serial">1.</td>
                        <td class="avatar">
                            <div class="round-img">
                                <a href="#"><img class="rounded-circle" src="{{ asset('backend/images/avatar/1.jpg') }}" alt=""></a>
                            </div>
                        </td>
                        <td> #5469 </td>
                        <td>  <span class="name">Louis Stanley</span> </td>
                        <td> <span class="product">iMax</span> </td>
                        <td><span class="count">231</span></td>
                        <td>
                            <span class="badge badge-complete">Complete</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">2.</td>
                        <td class="avatar">
                            <div class="round-img">
                                <a href="#"><img class="rounded-circle" src="{{ asset('backend/images/avatar/2.jpg') }}" alt=""></a>
                            </div>
                        </td>
                        <td> #5468 </td>
                        <td>  <span class="name">Gregory Dixon</span> </td>
                        <td> <span class="product">iPad</span> </td>
                        <td><span class="count">250</span></td>
                        <td>
                            <span class="badge badge-complete">Complete</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">3.</td>
                        <td class="avatar">
                            <div class="round-img">
                                <a href="#"><img class="rounded-circle" src="{{ asset('backend/images/avatar/3.jpg') }}" alt=""></a>
                            </div>
                        </td>
                        <td> #5467 </td>
                        <td>  <span class="name">Catherine Dixon</span> </td>
                        <td> <span class="product">SSD</span> </td>
                        <td><span class="count">250</span></td>
                        <td>
                            <span class="badge badge-complete">Complete</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">4.</td>
                        <td class="avatar">
                            <div class="round-img">
                                <a href="#"><img class="rounded-circle" src="{{ asset('backend/images/avatar/4.jpg') }}" alt=""></a>
                            </div>
                        </td>
                        <td> #5466 </td>
                        <td>  <span class="name">Mary Silva</span> </td>
                        <td> <span class="product">Magic Mouse</span> </td>
                        <td><span class="count">250</span></td>
                        <td>
                            <span class="badge badge-pending">Pending</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div>


</div>
</div><!-- .animated -->
</div><!-- .content -->

@endsection