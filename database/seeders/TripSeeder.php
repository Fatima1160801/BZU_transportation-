<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'cab-type'=>'taxi',
            'pickup-date'=>'2021-03-24',
            'pickup-time'=>'21:42:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'passenger-counter'=>'1',
            'driver_id'=>'6',
            'admin_id'=>'1',

        ]);
        Trip::create([
            'cab-type'=>'taxi',
            'pickup-date'=>'2021-03-23',
            'pickup-time'=>'11:12:19',
            'pickup'=>'Birziet',
            'dropoff'=>'Ramalla',
            'price'=>'5',
            'passenger-counter'=>'2',
            'driver_id'=>'7',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cab-type'=>'van',
            'pickup-date'=>'2020-03-4',
            'pickup-time'=>'12:24:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'passenger-counter'=>'5',
            'driver_id'=>'9',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cab-type'=>'bus',
            'pickup-date'=>'2021-02-10',
            'pickup-time'=>'02:02:19',
            'pickup'=>'Ramalla',
            'dropoff'=>'Birziet',
            'price'=>'5',
            'passenger-counter'=>'20',
            'driver_id'=>'7',
            'admin_id'=>'1',

        ]);  Trip::create([
            'cab-type'=>'van',
            'pickup-date'=>'2020-03-24',
            'pickup-time'=>'21:42:19',
            'pickup'=>'Al-Ersal',
            'dropoff'=>'Birziet',
            'price'=>'4.5',
            'passenger-counter'=>'5',
            'driver_id'=>'1',
            'admin_id'=>'3',

        ]);
    }
}
