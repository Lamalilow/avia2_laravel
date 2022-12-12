@extends('welcome')
@section('title', "Главная")

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <img src="public/assets/img/bg.webp" alt="">
            </div>
            <div class="col"></div>
        </div>
    </div>
    <form action="" method="post">

    </form>
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Город вылета</th>
                        <th>Город прилета</th>
                        <th>Дата вылета</th>
                        <th>Дата прилета</th>
                        <th>Самолет</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->start_city() }}</td>
                            <td>{{ $flight->end_city() }}</td>
                            <td>{{ $flight->start_time }}</td>
                            <td>{{ $flight->end_time }}</td>
                            <td>{{ $flight->airplane() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>


@endsection
