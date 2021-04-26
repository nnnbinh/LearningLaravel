<!DOCTYPE html>
<html>

<head>
    <title>Shops</title>
    <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/css/style.css') }}" rel=stylesheet>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <ul>
                    <li>id: {{$shop->id}}</li>
                    <li>{{$shop->name}}</li>
                    <li>Sản phẩm:
                        <ul>
                            @foreach ($shop->products as $product)
                                <li>{{$product->name}}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
