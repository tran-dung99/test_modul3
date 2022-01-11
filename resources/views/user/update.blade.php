@extends("layout.home")
@section('content')

    <div class="card">
        <form action="{{route("staffs.update")}}" method="post">
            @csrf
            <div class="card-header">
                Chỉnh sửa nhân viên
            </div>
            <input type="hidden" class="form-control" id="name" name="id"
                   value="{{$staff->id}}">
            <div class="card-body">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tên nhân viên</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$staff->name}}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nhóm nhân viên</label>
                                <select name="group" class="form-control" id="exampleFormControlSelect1">
                                    <option>Lễ tân</option>
                                    <option>Quản lý dịch vụ</option>
                                    <option>Quản lý hệ thống</option>
                                    <option>Quản lý nhân sự</option>
                                    <option>Quản lý dịch vụ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthday">Ngày sinh</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" value="{{$staff->birthday}}">
                                @error('birthday')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$staff->phone}}">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="cmnd">Số CMND</label>
                                <input type="text" class="form-control" id="cmnd" name="cmnd" value="{{$staff->cmnd}}">
                            </div>
                            @error('cmnd')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div>
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$staff->email}}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <textarea name="address" id="address" class="form-control">{{$staff->address}}</textarea>
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <legend class="col-form-label pt-0">Giới tính</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2"
                                       value="option2" {{$staff->gender == "Nữ"?"checked":''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Nữ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2"
                                       value="option2" {{$staff->gender == "Nam"?"checked":''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Nam
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div style="text-align: center; margin-left: 500px" >
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{route("staffs.list")}}" type="button" class="btn btn-light">Cancle</a>
                </div>
            </div>
        </form>
    </div>
@endsection
