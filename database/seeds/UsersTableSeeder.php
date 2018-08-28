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
                'avatar' => 'users/August2018/nG8pIBxmNHLit7ZVIWX2.png',
                'password' => '$2y$10$Q0UzZlyK9Y1wPcjXkXLmrewTFQxIlQO7WK3JlnseLeG2N0NrnCXRa',
                'siape' => NULL,
                'remember_token' => 'GIQSdzjuDj8SZ8MfJeDHkCqCS1DMO3Yqj5D3FJjgSe2xkaK4ABI5nQGb4t8l',
                'settings' => NULL,
                'created_at' => '2018-02-24 20:09:25',
                'updated_at' => '2018-08-25 21:28:40',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Usuário',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$/4S3lKd/J8sU7EgnV2kJtu9u97cpD2YJnYUfj2wV5lt93nzXpBVZq',
                'siape' => NULL,
                'remember_token' => 'DhHhA9fHotlVw1uAzmASzAxKZmdejct4VPQXTx9rWcBHigAX9UpU3KPZjnDf',
                'settings' => NULL,
                'created_at' => '2018-02-24 21:21:43',
                'updated_at' => '2018-02-24 21:21:43',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Direção Geral',
                'email' => 'dirge@dirge.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$MvYD9NwNagD/E5b08nzsZuzG62d8BOyWpdlEw6G.pmOVf1EtdGRQC',
                'siape' => NULL,
                'remember_token' => 'BOKi0FaNkoZw0Pp3JEoW7laLb747YvlLySdRyFJ7L7Qwbj9FXjhan2M1ozha',
                'settings' => NULL,
                'created_at' => '2018-02-24 21:28:33',
                'updated_at' => '2018-02-24 21:28:33',
            ),
            3 => 
            array (
                'id' => 6,
                'role_id' => 5,
                'name' => 'Felipe Gustavo Braiani Santos',
                'email' => 'felipe.santos@ifms.edu.br',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$/7lMVwWXmz2LLWUOaW6tEO4AEHWo3LeBxSF5V/QBtYH2EqXlsrwKG',
                'siape' => '2310754',
                'remember_token' => 'Ie82A4iW0YW2eM7TWqRMphqCZvsETL0ygVJOMvzrthjhjJWRtZ9m2EcYByZZ',
                'settings' => NULL,
                'created_at' => '2018-08-26 17:42:53',
                'updated_at' => '2018-08-26 17:52:02',
            ),
        ));
        
        
    }
}