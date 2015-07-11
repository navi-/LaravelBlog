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

		@include('articles.partials.form', ['submitbuttontext' => 'Add Article'])

	{!! Form::close()!!}

	@include('errors.list')
	{{--{{var_dump($errors)}} // Dumps all errors in the form validation--}} 
@stop

@section('footer')
	
	<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>


@stop