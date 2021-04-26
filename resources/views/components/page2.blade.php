<div class="container">
    <div class="row d-flex flex-nowrap bd-highlight">
        <div class="col-6">
            <h1 class="text-primary">{{$title}}</h1>
            <p>{{$describe}}</p>
        </div>
        <div class="col-6 order-xl-{{$order}} p-2 bd-highlight" >
            <img src="{{ asset('assets/img/'.$image) }}" alt="anh minh hoa">
        </div>
    </div>
</div>