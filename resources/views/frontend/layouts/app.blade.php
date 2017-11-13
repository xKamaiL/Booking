<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Material Design for Bootstrap fonts and icons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="{{ url("assets/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/bootstrap-material-design.min.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    @stack("css")
    <style>
        *{
            font-family: 'Kanit', sans-serif;
        }
        body{
            background: url("{{ url("assets/css/bg.jpg") }}");
            margin-right: -14px;
        }
    </style>
    <title>Book</title>
</head>
<body>
<div class="row">
    @if(\Illuminate\Support\Facades\Auth::check())
        @include("frontend.layouts.menu")
    @endif
</div>
<div style="margin-top: 50px" class="row">
    @yield("content")
</div>
<hr>
<script src="{{ url("assets/js/jquery-3.2.1.slim.min.js") }}"></script>
<script src="{{ url("assets/js/popper.js") }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ url("assets/js/bootstrap-material-design.min.js") }}"></script>
<script src="{{ url("engine.js") }}"></script>
<script>
    var $get_url = "{{ route("book.search") }}";
    var $base_url = "{{ url("/") }}";
    $(document).ready(function() { $('body').bootstrapMaterialDesign(); });
</script>
</body>
</html>