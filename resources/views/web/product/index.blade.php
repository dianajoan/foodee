@extends('layouts.app')
@section('content')

<div class="container">    
	<div class="row justify-content-center">        
		<div class="col-md-8">            
			<div class="card">                
				<div class="card-header">Task Page</div>                
				<div class="card-body">                    

					@foreach($tasks as $task)                    
					<a href="/tasks/{{ $task->id }}">                        
						{{ $task->title }}                    
					</a>                    
					<p></p>                   

					 @endforeach                
					</div>            
				</div>        
			</div>    
		</div>
	</div>

@endsection