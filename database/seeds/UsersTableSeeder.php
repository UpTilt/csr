<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'emp_number'    => 'GroundControl',
            'emp_name'      => 'GroundControl',
            'password'      => bcrypt('gsc1320'),
            'admin'         => 1,
            'root'          => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
