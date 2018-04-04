<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('status')->delete();
        
        \DB::table('status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descricao' => 'Ativo',
            ),
            1 => 
            array (
                'id' => 2,
                'descricao' => 'Revogado',
            ),
            2 => 
            array (
                'id' => 3,
                'descricao' => 'Cancelado',
            ),
        ));
        
        
    }
}