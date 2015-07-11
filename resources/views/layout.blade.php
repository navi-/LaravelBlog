<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <title>
    	@yield('pagename')
    </title>
    <!--<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    </head>

    <body>
    	<div class="container">
    		@yield('content')
    	</div>
    	<hr>
        @yield('footer')
    </body>
 </html>