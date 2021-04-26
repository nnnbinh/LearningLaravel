<!DOCTYPE html>
<html>

<head>
    <title>Shops</title>
    <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/css/style.css') }}" rel=stylesheet>
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <a href="{{ route('shops.create') }}" class="btn btn-primary">Tạo bài viết mới</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table talbe-striped">
                    <thead>
                        <td>#</td>
                        <td>Tên shop</td>
                        <td></td>
                    </thead>
                    <tbody>
                        @foreach ($shops as $shop)
                            <td>{{$shop->id}}</td>
                            <td><a href="{{route('shops.show',$shop->id)}}">{{$shop->name}}</a></td>
                            <td>
                                <a href="{{route('shops.edit',$shop->id)}}" class="btn btn-warning">Cập nhật</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
