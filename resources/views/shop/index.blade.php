<!DOCTYPE html>
<html>

<head>
    <title>Shops</title>
    <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/css/style.css') }}" rel=stylesheet>
</head>

<body>

    @if (session('warning'))
        <x-alert type="danger" :message="session('warning')"/>
    @endif


    <div class="container">
        <div class="row my-5">
            <div class="col">
                <a href="{{ route('shops.create') }}" class="btn btn-primary">Tạo shop mới</a>
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
                        <tr>
                            <td>{{$shop->id}}</td>
                            <td><a href="{{route('shops.show',$shop->id)}}">{{$shop->name}}</a></td>
                            <td>
                                <a href="{{route('shops.edit',$shop->id)}}" class="btn btn-warning">Cập nhật</a>
                                <form action="{{route('shops.destroy',$shop->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có muốn xóa không?')">
                                    {!!csrf_field()!!}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
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
