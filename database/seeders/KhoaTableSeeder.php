<?php

namespace Database\Seeders;

use App\Models\khoa;
use Illuminate\Database\Seeder;

class KhoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        khoa::create(['tenkhoa'=>'Công nghệ thôn tin']);
        khoa::create(['tenkhoa'=>'Khoa Toán']);
        khoa::create(['tenkhoa'=>'Khoa văn']);
        khoa::create(['tenkhoa'=>'Khoa sinh']);
    }
}
