<?php

use Illuminate\Database\Seeder;

class CatSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::query()->insert([
            "name" => "เบ็ดเตล็ด"
        ]);
        \App\Models\Category::query()->insert([
            "name" => "ปรัชญา"
        ]);
        \App\Models\Category::query()->insert([
            "name" => "สังคมศาสตร์"
        ]); \App\Models\Category::query()->insert([
        "name" => "วิทยาศาสตร์"
    ]);
        \App\Models\Category::query()->insert([
            "name" => "ศิลปกรรมเเละการบันเทิง"
        ]); \App\Models\Category::query()->insert([
        "name" => "วรรณคดี"
    ]); \App\Models\Category::query()->insert([
        "name" => "ประวัติศาสตร์เเละภูมิศาสตร์"
    ]);
    }
}
