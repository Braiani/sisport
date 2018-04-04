<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'avatar' => 'users/February2018/6BrjwUzkRf96v5hwgvst.png',
                'password' => '$2y$10$Q0UzZlyK9Y1wPcjXkXLmrewTFQxIlQO7WK3JlnseLeG2N0NrnCXRa',
                'remember_token' => 'C2qLgOwsrua3dQWpF0zlO5SSyYcHwvLpBgG8BfUh7wGqd9aU14sRIK6qtI8Y',
                'settings' => NULL,
                'created_at' => '2018-02-24 20:09:25',
                'updated_at' => '2018-04-03 02:22:38',
                'siape' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Usuário',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$/4S3lKd/J8sU7EgnV2kJtu9u97cpD2YJnYUfj2wV5lt93nzXpBVZq',
                'remember_token' => 'DhHhA9fHotlVw1uAzmASzAxKZmdejct4VPQXTx9rWcBHigAX9UpU3KPZjnDf',
                'settings' => NULL,
                'created_at' => '2018-02-24 21:21:43',
                'updated_at' => '2018-02-24 21:21:43',
                'siape' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Direção Geral',
                'email' => 'dirge@dirge.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$MvYD9NwNagD/E5b08nzsZuzG62d8BOyWpdlEw6G.pmOVf1EtdGRQC',
                'remember_token' => 'nHymUzPfYEdklV5TRaByFggCrR9cJKmhCyu9P6KuZMMa5Ppv04R4tsTzFw51',
                'settings' => NULL,
                'created_at' => '2018-02-24 21:28:33',
                'updated_at' => '2018-02-24 21:28:33',
                'siape' => NULL,
            ),
        ));
        
        
    }
}