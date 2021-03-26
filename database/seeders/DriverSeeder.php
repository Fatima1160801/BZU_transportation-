<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'name'=>'Adam',
            'phone'=>'052346',
            'ssn'=>'1234',
            'available'=>'yes',
            'busy'=>'no',
            'bank-num'=>'98765',
            'admin_id'=>'2',

        ]);
        Driver::create([
            'name'=>'Ahamd',
            'phone'=>'05276',
            'ssn'=>'2222',
            'available'=>'yes',
            'busy'=>'no',
            'bank-num'=>'98765',
            'admin_id'=>'2',

        ]);
        Driver::create([
            'name'=>'Adham',
            'phone'=>'05476',
            'ssn'=>'3333',
            'available'=>'yes',
            'busy'=>'no',
            'bank-num'=>'98765',
            'admin_id'=>'2',

        ]);Driver::create([
            'name'=>'Ashraf',
            'phone'=>'051346',
            'ssn'=>'4444',
            'available'=>'yes',
            'busy'=>'no',
            'bank-num'=>'98765',
            'admin_id'=>'2',

        ]);Driver::create([
            'name'=>'abed',
            'phone'=>'05376',
            'ssn'=>'5555',
            'available'=>'yes',
            'busy'=>'no',
            'bank-num'=>'98765',
            'admin_id'=>'2',

        ]);
    }
}
