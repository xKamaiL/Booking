<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Member::query()->insert([
            "student_id" => "06679",
            "real_name" => "ด.ช.ปกรณ์ เเสงเพชร",
            "number" => "14",
            "classroom" => "3/1",
            "consult" => "Not Found.",
        ]);
    }
}
