<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NonogramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nonograms')->insert([
            'title' => 'eye',
            'rows' => 5,
            'cols' => 10,
            'solution' => '1,0,1,0,1,0,1,0,1,0;0,1,1,1,1,1,1,1,0,1;1,1,0,0,1,1,0,0,1,0;1,0,0,0,1,1,0,0,1,1;0,1,1,1,1,1,1,1,0,0'
        ]);
    }
}
