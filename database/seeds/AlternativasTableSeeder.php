<?php

use Illuminate\Database\Seeder;

class AlternativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternativas')->insert([
            'questao_id' => 5,
            'curso_id' => 2, 
            'descricao_alternativa' => 'O prazo em dobro para a interposição dos recursos, à exceção dos embargos de declaração que não possuam efeitos modificativos, os quais terão prazo simples.',          
        ]);
       DB::table('alternativas')->insert([
            'questao_id' => 5, 
            'curso_id' => 2, 
            'descricao_alternativa' => 'O prazo de 20 dias entre a notificação inicial e a data da audiência.
',          
        ]);
        DB::table('alternativas')->insert([
            'questao_id' => 5, 
            'curso_id' => 2, 
            'descricao_alternativa' => 'O prazo em dobro para impetrar mandado de segurança.',
        ]);
        DB::table('alternativas')->insert([
            'questao_id' => 5, 
            'curso_id' => 2, 
            'descricao_alternativa' => 'A dispensa de depósito para interposição de recurso, sendo as custas recolhidas apenas ao final, caso mantida a sucumbência.',          
        ]);
        DB::table('alternativas')->insert([
            'questao_id' => 5,
            'curso_id' => 2,  
            'descricao_alternativa' => 'O prazo em quádruplo para contestar.',          
        ]);
    }
}
