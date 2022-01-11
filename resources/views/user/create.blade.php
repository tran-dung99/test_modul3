@extends('layout.home')
@section('content')
<form method="post" action="{{route("staffs.store")}}">
    @csrf
    <div class="form-group">
        <label for="name">Tên</label>
        <input type="text" name="name"  id="name" placeholder="Nguyễn Văn A" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="group">Tên Nhóm</label>
        <input type="text" name="group" class="form-control" id="group" placeholder="Lễ tân">
        @error('group')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="birthday">Ngày sinh</label>
        <input type="date" class="form-control" id="birthday" name="birthday">
        @error('birthday')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="text" class="form-control" id="phone" name="phone">
        @error('phone')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="cmnd">Số chứng minh nhân dân</label>
        <input type="text" class="form-control" id="cmnd" name="cmnd">
        @error('cmnd')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" class="form-control" id="address" name="address">
        @error('address')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Nữ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Nam
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
            <a type="button" class="btn btn-light">Cancle</a>
        </div>
    </div>
</form>
@endsection
