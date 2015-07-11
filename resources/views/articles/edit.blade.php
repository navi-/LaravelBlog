@extends ('layout')

@section('pagename')
	Edit the Article
@stop

@section ('content')

<h1> Edit: {{ $article->title }} </h1>

<hr>
	{{--{!! Form::model($article, ['method' => 'PATCH','url' => 'artciles/'.$article->id])!!} --}}

	{!! Form::model($article, ['method' => 'PATCH','action' => ['ArticlesCntlr@update', $article->id]])!!}
		
		@include('articles.partials.form', ['submitbuttontext' => 'Update Article'])

	{!! Form::close()!!}

	@include('errors.list')
@stop

@section('footer')

<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>


@stop