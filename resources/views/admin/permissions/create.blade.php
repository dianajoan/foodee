@extends('admin.app')
@section('title') Create Permission @endsection

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
                            <li><a href="{{ route('permissions.index') }}">Permission</a></li>
	                        <li class="active">Create Permission</li>
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
                            <strong>Create Permission</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('permissions.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">

                            	@csrf

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
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name" class="form-control" autofocus requiired></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Display Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="display_name" placeholder="Display Name" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                    <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                </div>

		                        <div class="card-footer">
		                            <button type="submit" class="btn btn-primary btn-sm">
		                                <i class="fa fa-dot-circle-o"></i> Submit
		                            </button>
		                            <a href="{{ route ('permissions.index') }}" class="btn btn-danger btn-sm">
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