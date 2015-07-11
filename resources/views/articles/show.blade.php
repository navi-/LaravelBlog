@extends ('layout')

@section('pagename')
	Show Article
@stop

@section ('content')

<h1> {{ $article->title }} </h1>

<hr>
	<article> 
		<h2> <a href="">  </a> </h2>
		<div class = "body"> {{ $article->body }} </div>
	</article>

@stop

@section('footer')

<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>


@stop