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
                <form action="{{ route('shops.store') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên shop</label>
                        <input type="text" class="form-control" id="name" name="name">
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
