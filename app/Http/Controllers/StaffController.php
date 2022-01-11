<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view("user.list",compact("staffs"));

    }

    public function creat()
    {
        return view("user.create");
    }

    public function store(CreateStaffRequest $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->group = $request->group;
        $staff->gender = $request->gender;
        $staff->birthday = $request->birthday;
        $staff->phone = $request->phone;
        $staff->cmnd = $request->cmnd;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route("staffs.list");
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view("user.update",compact("staff"));
    }

    public function update(UpdateStaffRequest $request)
    {
        $staff = Staff::find($request->id);
        $staff->name = $request->name;
        $staff->group = $request->group;
        $staff->gender = $request->gender;
        $staff->birthday = $request->birthday;
        $staff->phone = $request->phone;
        $staff->cmnd = $request->cmnd;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route("staffs.list");

    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return response()->json();
    }

    public function search(Request $request)
    {
        $staffs = Staff::where("name","LIKE",'%'.$request->search.'%')->get();
        return view("user.list",compact("staffs"));
    }
}
