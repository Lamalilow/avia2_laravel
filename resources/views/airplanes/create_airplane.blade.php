@extends('user.admins.admin_panel')
@section('title', 'Добавить самолет')
@section('content')
    <div class="container">
        <div class="row m-lg-5">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название самолета</label>
                        <input type="text" name="name" placeholder="N390HA"  class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb3">
                        <button type="submit" class="btn btn-primary mb-3">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                @if(session()->has('errorPlanePlane'))
                    <div class="alert alert-danger">{{ session()->get('errorPlanePlane') }}</div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Номер</th>
                            <th>Название</th>
                            <th>Удаление</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($planes as $plane)
                        <tr>
                            <td>{{$plane->id}}</td>
                            <td>{{$plane->name}}</td>
                            <td>
                                <form action="{{ route('deletePlane', $plane->id) }}" method="post">
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
