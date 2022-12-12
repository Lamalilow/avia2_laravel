@extends('user.admins.admin_panel')
@section('title', 'Добавить самолет')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название самолета</label>
                        <input type="text" name="name" placeholder="N390HA" class="form-control" id="exampleFormControlInput1">
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
            <div class="col-12">
                <table>
                    <thead>
                        <tr>
                            <th>Номер</th>
                            <th>Название</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
