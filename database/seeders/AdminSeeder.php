<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Ahmad',
            'ssn'=>'098765',
            'phone'=>'059911',
            'email'=>'Ahmad@gmail',
            'password'=>Hash::make('1234'),
            'bank-num'=>'567890',
            'role_id'=>'1',


        ]);
        Admin::create([
            'name'=>'Mohammad',
            'ssn'=>'0954325',
            'phone'=>'052311',
            'email'=>'Mohammad@gmail',
            'password'=>Hash::make('9870'),
            'bank-num'=>'562830',
            'role_id'=>'3',


        ]);
        Admin::create([
            'name'=>'Harb',
            'ssn'=>'765098',
            'phone'=>'059123',
            'email'=>'Harb@gmail',
            'password'=>Hash::make('3421'),
            'bank-num'=>'890345',
            'role_id'=>'2',


        ]);
    }
}
