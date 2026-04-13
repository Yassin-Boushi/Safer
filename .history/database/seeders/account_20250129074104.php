<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            [
                'user_name'=>'ahmad',
                'email'=> 'yassinboushi@gmail.com',
                'password'=> '12345',
                'is_employee'=> '1'
            ],
            [
                'user_name'=>'mohammed',
                'email'=> 'yboushe@gmail.com',
                'password'=> '4210291',
                'is_employee'=> '1'
            ],
        ]
        DB::table('users')->insert($users);

    }
}
