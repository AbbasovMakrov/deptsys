<!DOCTYPE html>
<html >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>ادارة الديون</title>
</head>
<body>
@include('includs.navbar')
<div class="container">
    @include('includs.msgs')
    @yield('content')
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>