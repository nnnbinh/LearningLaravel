<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <link href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}" rel=stylesheet>
    <link href="{{asset('assets/css/style.css')}}" rel=stylesheet> 
</head>
<body>

    <x-alert :type="$type" :message="$message"/>

    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>