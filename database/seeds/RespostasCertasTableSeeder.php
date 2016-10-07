<?php

use Illuminate\Database\Seeder;

class RespostasCertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respostas_certas')->insert([
	        'curso_id'     => 1,
	        'questao_id'     => 3,
	        'alternativa_id' => 4,	        
	    ]);
    }
}
