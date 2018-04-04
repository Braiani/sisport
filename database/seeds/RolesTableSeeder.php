<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrador',
                'display_name' => 'Administrador',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:24:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Usuário',
                'display_name' => 'Servidor',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:23:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'DIRGE',
                'display_name' => 'Direção Geral',
                'created_at' => '2018-02-24 21:24:07',
                'updated_at' => '2018-02-24 21:24:07',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2018-03-24 00:45:01',
                'updated_at' => '2018-03-24 00:45:01',
            ),
        ));
        
        
    }
}