@guest
	@if($message = Session::get('danger'))
		<div class="alert alert-danger" style="margin: 10px;">
			 Abbort <i class="fa fa-times-circle"></i> : {{ $message }}
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('warning'))
		<div class="alert alert-warning" style="margin: 10px;">
			 Warning <i class="fa fa-info-circle"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('success'))
		<div class="alert alert-success" style="margin: 10px;">
			 Success <i class="fa fa-check"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('info'))
		<div class="alert alert-info" style="margin: 10px;">  
			 Notice <i class="fa fa-lightbulb"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	{{-- end of unauthenticated --}}
@else
	@if($message = Session::get('danger'))
		<div class="alert alert-danger" style="margin: 10px;"> 
			<img src="{{ Auth::user()->profile_image ? asset('files/profile/images/' . Auth::user()->profile_image) : asset('files/defaults/images/profile.jpg') }}" width="30" class="rounded-circle" alt="img"> 
			 Abbort <i class="fa fa-times-circle"></i> : {{ $message }}
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('warning'))
		<div class="alert alert-warning" style="margin: 10px;"> 
			<img src="{{ Auth::user()->profile_image ? asset('files/profile/images/' . Auth::user()->profile_image) : asset('files/defaults/images/profile.jpg') }}" width="30" class="rounded-circle" alt="img"> 
			 Warning <i class="fa fa-info-circle"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('success'))
		<div class="alert alert-success" style="margin: 10px;"> 
			<img src="{{ Auth::user()->profile_image ? asset('files/profile/images/' . Auth::user()->profile_image) : asset('files/defaults/images/profile.jpg') }}" width="30" class="rounded-circle" alt="img"> 
			 Success <i class="fa fa-check"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
	@if($message = Session::get('info'))
		<div class="alert alert-info" style="margin: 10px;"> 
			<img src="{{ Auth::user()->profile_image ? asset('files/profile/images/' . Auth::user()->profile_image) : asset('files/defaults/images/profile.jpg') }}" width="30" class="rounded-circle" alt="img"> 
			 Notice <i class="fa fa-lightbulb"></i> : <b>{{ $message }}</b>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
		    	<span aria-hidden="true">&times;</span> 
		    </button>
		</div>
	@endif
@endguest