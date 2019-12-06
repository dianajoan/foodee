<div class="card-body">
	{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('title', 'Title', ['class' => 'awesome']) !!}
		{!! Form::text('title', $task->title, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body', ['class' => 'awesome']) !!}
		{!! Form::textarea('body', $task->body, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Edit Task', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
</div>