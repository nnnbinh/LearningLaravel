<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
    <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/css/style.css') }}" rel=stylesheet>
</head>

<body>
    <h2 class="text-center text-primary fw-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
        unde exercitationem dolore sapiente soluta. Provident id accusamus quae nemo quam! Quas, similique blanditiis
        mollitia voluptatibus quis nihil dolorem et aperiam?</h2>
    @for ($i = 0; $i < 3; $i++)
        <div class="row text-center">
            @for ($j = $i*3; $j < $i*3+3; $j++)
                <x-item :img="$items[$j]['img']" :title="$items[$j]['title']" :describe="$items[$j]['describe']" />
            @endfor
        </div>
    @endfor

    @endforeach
    
        

    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
