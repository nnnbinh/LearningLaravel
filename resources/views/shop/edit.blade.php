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
                <form action="{{ route('shops.update', $shop->id) }}" method="post">
                    {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên shop</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$shop->name}}">
                        @foreach ($products as $product)
                            @if ($plucked->contains($product->id))
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $product->id }}"
                                        id="{{$product->id}}" name="shop_product[]" checked>
                                    <label class="form-check-label" for="{{$product->id}}">
                                        {{ $product->name }}
                                    </label>
                                </div>
                            @else
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $product->id }}"
                                        id="{{$product->id}}" name="shop_product[]">
                                    <label class="form-check-label" for="{{$product->id}}">
                                        {{ $product->name }}
                                    </label>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
