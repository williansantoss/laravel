<?php

use Illuminate\Database\Seeder;

class RespostasUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respostas_user')->insert([
	    	'user_id'=> 1,
	        'curso_id'     => 1,
	        'questao_id'     => 3,
	        'alternativa_id' => 4,	        
	    ]);
    }
}
