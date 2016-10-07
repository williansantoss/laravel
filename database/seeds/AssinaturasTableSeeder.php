<?php

use Illuminate\Database\Seeder;

class AssinaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assinaturas')->insert([
            'curso_id' => 1, 
            'user_id' => 1,          
        ]);
    }
}
