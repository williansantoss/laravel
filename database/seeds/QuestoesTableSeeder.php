<?php

use Illuminate\Database\Seeder;

class QuestoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 
        DB::table('questoes')->insert([	    
	        'curso_id'     => 2,
	        'descricao_pergunta' => 'Constitui prerrogativa processual dos Municípios, no processo do trabalho: ',	        
	    ]);
    }
}
