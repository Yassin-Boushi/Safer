<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights= [
            [
                'name'=>'landan',
                'description'=> 'gsdg',
                'desination'=>'fadsf',
                'date'=>'2000-12-12',
                'price'=> 1111,
                'all_rider_numbers'=>222,
                'number'=>1,
            ],
            [
                'name'=>'dubai',
                'description'=> 'gsdg',
                'desination'=>'fadsf',
                'date'=>'2000-12-12',
                'price'=> 1111,
                'all_rider_numbers'=>222,
                'number'=>1,
            ],
            [
                'name'=>'paris',
                'description'=> 'gsdg',
                'desination'=>'fadsf',
                'date'=>'2000-12-12',
                'price'=> 1111,
                'all_rider_numbers'=>222,
                'number'=>1,
            ]
         
        ];
        DB::table('accounts')->insert($flights);

    }
}
