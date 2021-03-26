<?php

namespace Database\Seeders;

use App\Models\Cab;
use Illuminate\Database\Seeder;

class CabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cab::create([
            'cab-type'=>'bus',
            'cab-Number'=>'1',
            'seat-num'=>'50',
            'license'=>'4325',
            'insurance'=>'678',
            'driver_id'=>'9',
            'machineNumber'=>'11234',
        ]);
        Cab::create([
            'cab-type'=>'van',
            'cab-Number'=>'1',
            'seat-num'=>'7',
            'license'=>'45456',
            'insurance'=>'890',
            'driver_id'=>'8',
            'machineNumber'=>'14564',
        ]);
        Cab::create([
            'cab-type'=>'bus',
            'cab-Number'=>'4',
            'seat-num'=>'50',
            'license'=>'4325',
            'insurance'=>'345',
            'driver_id'=>'7',
            'machineNumber'=>'11234',
        ]);
        Cab::create([
            'cab-type'=>'taxi',
            'cab-Number'=>'3',
            'seat-num'=>'2',
            'license'=>'2225',
            'insurance'=>'123',
            'driver_id'=>'6',
            'machineNumber'=>'11234',
        ]);
    }
}
