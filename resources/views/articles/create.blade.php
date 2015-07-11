@extends ('layout')

@section('pagename')
	Create Article
@stop

@section ('content')

	<h1> Write a New Article </h1>

	<hr>
	{{--	<article> 
			<h2> <a href="">  </a> </h2>
			<div class = "body"> {{ $article->body }} </div>
		</article>
	--}}

	{!! Form::open(['url' => 'articles'])!!}
		<div class="form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title',null, ['class' => 'form-control'])!!}
		</div>

		<div class="form-group">
		{!! Form::label('body', 'Article Body:')!!}
		{!! Form::textarea('body', null, ['class' => 'form-control'])!!}
		</div>
		
		<div class="form-group">
		{!! Form::label('published_at', 'Publish On:')!!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control'])!!}
		</div>

		<div class="form-group">
		{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control'])!!}
		</div>

	{!! Form::close()!!}

@stop

@section('footer')
	
	<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>


@stop