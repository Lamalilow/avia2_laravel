@extends('welcome')
@section('title', "Главная")

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img style="height: 600px" src="public/assets/img/bg.webp" class="d-block w-100" alt="фон">
                <div class=" mt-4 p-5 bg-primary text-white rounded">
                    <h1>Jumbotron Example</h1>
                    <p>Lorem ipsum...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img src="" alt="">
    </div>
    <form action="" method="post">

    </form>
    @foreach($flights as $flight)
        <div class="col">

        </div>
    @endforeach
@endsection
