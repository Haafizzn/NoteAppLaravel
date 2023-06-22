<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteApps</title>

    {{--* Start Bootstrap css *--}}
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{--* End Boostrap CSS*--}}

    {{--* Start Boostrap js*--}}
    <link href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" rel="stylesheet">
    {{--* End Bootstrap js *--}}
    
</head>

<body>

@include('layouts.app.header')

<div class="container my-4">

    @yield('content')

</div>

@include('layouts.app.footer')
    
</body>
</html>