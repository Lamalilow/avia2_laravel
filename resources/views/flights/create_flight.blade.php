@extends('user.admins.admin_panel')
@section('title', 'Добавить рейс')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                @if(session()->has('errorDate'))
                    <div class="alert alert-danger">{{ session()->get('errorDate') }}</div>
                @endif
                @if(session()->has('errorCity'))
                    <div class="alert alert-danger">{{ session()->get('errorCity') }}</div>
                @endif
                @if(session()->has('errorPlaneFlight'))
                    <div class="alert alert-danger">{{ session()->get('errorPlaneFlight') }}</div>
                @endif
                    <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Город отправления</label>
                        <input class="form-control @error('start_city_id') is-invalid @enderror" name="start_city_id"   list="datalistOptions" id="exampleDataList" placeholder="Выберите город">
                        <datalist id="datalistOptions" >
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </datalist>

                        @error('start_city_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Город назначения</label>
                        <input class="form-control @error('end_city_id') is-invalid @enderror" name="end_city_id"   list="datalistOptions" id="exampleDataList" placeholder="Выберите город">
                        <datalist id="datalistOptions" >
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </datalist>
                        @error('end_city_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Время вылета</label>
                        <input type="datetime-local" name="start_time"   class="form-control @error('start_time') is-invalid @enderror" id="exampleFormControlInput1">
                        @error('start_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Время прилета</label>
                        <input type="datetime-local" name="end_time"   class="form-control @error('end_time') is-invalid @enderror" id="exampleFormControlInput1">
                        @error('end_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название самолета</label>
                        <select class="form-select @error('airplane_id') is-invalid @enderror" name="airplane_id" id="">
                            <option value="">Выберите самолет</option>
                            @foreach($planes as $plane)
                                @if(!\Illuminate\Support\Facades\DB::table('flights')->where('airplane_id', $plane->id)->exists())
                                    <option value="{{ $plane->id }}">{{ $plane->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('airplane_id')
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
    </div>
@endsection
