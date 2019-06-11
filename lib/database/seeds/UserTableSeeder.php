<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin'),
                'name'=>'admin',
                'level'=>1
            ],
             [
                'email'=>'nhanvien@gmail.com',
                'password'=>bcrypt('123123'),
                'name'=>'Nhân viên',
                'level'=>1
            ]
        ];
        DB::table('ss_users')->insert($data);
    }
}
