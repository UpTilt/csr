<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            //==============
            // Escalations

            [ // Beats
                'weight' => '2',
                'group_id' => '1',
                'label_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Covert
                'weight' => '2',
                'group_id' => '1',
                'label_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Geek Squad City
                'weight' => '2',
                'group_id' => '1',
                'label_id' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Missing Unit
                'weight' => '1',
                'group_id' => '1',
                'label_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony
                'weight' => '3.33',
                'group_id' => '1',
                'label_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Training
                'weight' => '1',
                'group_id' => '1',
                'label_id' => '7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //==============
            // Follow-ups

            [ // Beats
                'weight' => '0.5',
                'group_id' => '2',
                'label_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Geek Squad City
                'weight' => '0.5',
                'group_id' => '2',
                'label_id' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Missing Unit
                'weight' => '0.5',
                'group_id' => '2',
                'label_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony
                'weight' => '3.33',
                'group_id' => '2',
                'label_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //==============
            // Calls

            [ // Proactive
                'weight' => '1',
                'group_id' => '3',
                'label_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Covert Proactive
                'weight' => '1',
                'group_id' => '3',
                'label_id' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony Proactive
                'weight' => '1',
                'group_id' => '3',
                'label_id' => '9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony Escalation
                'weight' => '3.33',
                'group_id' => '3',
                'label_id' => '10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //==============
            // Research

            [ // Proactive
                'weight' => '1',
                'group_id' => '4',
                'label_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Covert Proactive
                'weight' => '1',
                'group_id' => '4',
                'label_id' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony Proactive
                'weight' => '1',
                'group_id' => '4',
                'label_id' => '9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //==============
            // Box Kits

            [ // Covert
                'weight' => '1',
                'group_id' => '5',
                'label_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [ // Sony
                'weight' => '1',
                'group_id' => '5',
                'label_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            //==============
            // Email

            [ // Sony Proactive
                'weight' => '1',
                'group_id' => '6',
                'label_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
