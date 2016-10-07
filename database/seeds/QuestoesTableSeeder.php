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
	        'curso_id'     => 1,
	        'descricao_pergunta' => 'Segundo a CLT, qual o documento obrigatória para o exercício de qualquer emprego, inclusive de natureza rural, ainda que em caráter temporário, e para o exercício por conta própria de atividade profissional remunerada?',	        
	    ]);
    }
}
