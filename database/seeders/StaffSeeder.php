<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Staff();
        $user->name = "Nga";
        $user->group = "Quản trị hệ thống";
        $user->birthday = "1995/1/5";
        $user->gender = "Nữ";
        $user->phone = "0964277125";
        $user->cmnd = "254886145634";
        $user->email = "nga@gmail.com";
        $user->address = "Hà nội";
        $user->save();

        $user = new Staff();
        $user->name = "Hoa";
        $user->group = "Quản lý nhân sự";
        $user->birthday = "1995/5/8";
        $user->gender = "Nữ";
        $user->phone = "0589647821";
        $user->cmnd = "5687412863";
        $user->email = "hoa@gmail.com";
        $user->address = "Đà Nẵng";
        $user->save();

        $user = new Staff();
        $user->name = "Lê";
        $user->group = "Lễ tân";
        $user->birthday = "1997/6/8";
        $user->gender = "Nam";
        $user->phone = "0258796354";
        $user->cmnd = "25879643587";
        $user->email = "le@gmail.com";
        $user->address = "Quảng Nam";
        $user->save();

        $user = new Staff();
        $user->name = "Hoài";
        $user->group = "Quản lý dịch vụ";
        $user->birthday = "1999/6/25";
        $user->gender = "Nữ";
        $user->phone = "0875632418";
        $user->cmnd = "36587492541";
        $user->email = "hoai@gmail.com";
        $user->address = "Quảng Bình";
        $user->save();

    }
}
