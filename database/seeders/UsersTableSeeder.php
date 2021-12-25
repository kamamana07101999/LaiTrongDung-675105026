<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make('12345678')
            
        ]);
        User::create([
            'name'=>'Sinh vien ',
            'username'=>'Sinhvien',
            'masv'=>'675105026',
            'tenkhoa'=>'Công Nghệ Thông Tin',
            'email'=>'Sinhvien1@gmail.com',
            'role_id'=>2,
            'password'=>Hash::make('12345678')
        ]);
        
        User::create([
            'name'=>'giang vien 1',
            'username'=>'giangvien1',
            'masv'=>'675105026',
            'tenkhoa'=>'Công Nghệ Thông Tin',
            'email'=>'giangvien1@gmail.com',
            'role_id'=>3,
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'giang vien 2',
            'username'=>'giangvien2',
            'masv'=>'675105026',
            'tenkhoa'=>'Công Nghệ Thông Tin',
            'email'=>'giangvien2@gmail.com',
            'role_id'=>3,
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'giang vien 3',
            'username'=>'giangvien3',
            'masv'=>'675105026',
            'tenkhoa'=>'Công Nghệ Thông Tin',
            'email'=>'giangvien3@gmail.com',
            'role_id'=>3,
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'thu ky',
            'username'=>'thuky',
            'masv'=>'675105026',
            'tenkhoa'=>'Công Nghệ Thông Tin',
            'email'=>'thuky@gmail.com',
            'role_id'=>4,
            'password'=>Hash::make('12345678')
        ]);
        
    }
}
