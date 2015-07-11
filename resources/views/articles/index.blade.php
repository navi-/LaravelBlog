@extends ('layout')

@section('pagename')
	Articles
@stop

@section ('content')

<h1> Articles </h1>

<hr>
	@foreach ($articles as $article)
		<article> 
			<!--<h2> <a href="/articles/{{$article->id}}"> {{ $article->title }} </a> </h2> -->
			<!-- <h2> <a href="{{ action('ArticlesCntlr@show', [$article->id]) }}"> {{ $article->title }} </a> </h2>-->
			<h2> <a href="{{ url('/articles', $article->id) }}"> {{ $article->title }} </a> </h2>
			<div class = "body"> {{ $article->body }} </div>
		</article>
	@endforeach

@stop

@section ('footer')

<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>

@stop