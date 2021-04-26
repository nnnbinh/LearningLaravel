<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}" rel=stylesheet>
    <link href="{{asset('assets/css/style.css')}}" rel=stylesheet> 
</head>
<body>

  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
            <x-alert 
                :type="$msg" 
                :message="Session::get($msg)"
            />
            @endif
        @endforeach

    <div class="col-12">
        <form  action="{{ route('authenticate') }}" method="post">
          {!! csrf_field() !!}
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Chúng tôi sẽ không chia sẻ thông tin của bạn với bất kỳ ai.</div>
            </div>
            <div class="mb-3">
              <label for="InputPassword" class="form-label">Mật khẩu</label>
              <input type="password" name="password" class="form-control" id="InputPassword">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Ghi nhớ</label>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
          </form>              
    </div>

    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>