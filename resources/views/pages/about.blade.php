@extends ('layout')


@section('pagename')
	About Me
@stop

@section ('content')

<h1> About me </h1>

@if (count(@people) > 0)
<h3>People I like: </h3>
<ul>
	@foreach ($people as $person)
		<li> {{ $person }} </li>
	@endforeach
</ul>
@endif


<p>To begin with, almost all our tools were GUI based software. Only in ... In Windows parlance the command line is done via Command Prompt</p>

@stop