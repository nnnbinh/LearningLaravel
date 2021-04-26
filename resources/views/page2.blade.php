<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
    <link href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}" rel=stylesheet>
    <link href="{{asset('assets/css/style.css')}}" rel=stylesheet> 
</head>
<body>


    @foreach ($features as $item)
    {{$loop->iteration}}
        @if ($loop->even)
            @php
                $order = "first";
            @endphp
        @else
            @php
                $order = "last";
            @endphp
        @endif
        <x-page2 :title="$item['title']" :describe="$item['describe']" :image="$item['img']" :order="$order"/>
    @endforeach
    
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>