@extends('layout.home')
@section('content')
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a style="color: white" type="button" class="btn btn-success" href="{{route("staffs.create")}}"> Thêm mới</a>
        <form class="form-inline" method="get" action="{{route("search")}}">
            <input class="form-control mr-sm-2 input-search" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
<div class="card">
    <h5 class="card-header">Danh sách nhân viên</h5>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Nhóm nhân viên</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col" colspan="2">Chức năng</th>
            </tr>
            </thead>
            <tbody class="body">
            @foreach($staffs as $staff)
                <tr class="staff-{{$staff->id}}">
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->group}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->gender}}</td>
                    <td>{{$staff->phone}}</td>
                    <td><a href="{{route("staffs.edit",$staff->id)}}" class="btn btn-warning"><i class="fal fa-pencil-alt"></i></a></td>
                    <td><a data-id="{{$staff->id}}" class="btn btn-danger delete" ><i class="fal fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("body").on("click",".delete",function () {
            let url = origin;
            let id = $(this).attr("data-id");
            $.ajax({
                url: url + '/staffs/delete/'+id,
                type: "GET",
                success: function () {
                    console.log("oke")
                    $(".staff-"+id).remove();
                }
            })
        })
    </script>
@endsection
