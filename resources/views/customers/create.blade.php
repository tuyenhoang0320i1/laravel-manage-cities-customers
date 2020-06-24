@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('customers.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputBirthday">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tỉnh thành</label>
                        <select name="city_id" id="" class="form-control">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1);return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
