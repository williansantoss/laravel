<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('cursos')->insert([
            'nome' => 'Direito Processual do Trabalho',           
        ]);
    }
}
