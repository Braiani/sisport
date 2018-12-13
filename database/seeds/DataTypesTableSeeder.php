<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-02-24 20:08:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-02-24 20:08:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'UserTempController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-08-30 02:13:12',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-02-24 20:08:07',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-02-24 20:08:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:08:07',
                'updated_at' => '2018-02-24 20:08:07',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'periodicidades',
                'slug' => 'periodicidades',
                'display_name_singular' => 'Periodicidade',
                'display_name_plural' => 'Periodicidades',
                'icon' => 'voyager-refresh',
                'model_name' => 'App\\Periodicidade',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'status',
                'slug' => 'status',
                'display_name_singular' => 'Status',
                'display_name_plural' => 'Statuses',
                'icon' => 'voyager-activity',
                'model_name' => 'App\\Status',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'coordenacoes',
                'slug' => 'coordenacoes',
                'display_name_singular' => 'Coordenacao',
                'display_name_plural' => 'Coordenacoes',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Coordenacao',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-04-03 01:03:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'pessoas',
                'slug' => 'pessoas',
                'display_name_singular' => 'Pessoa',
                'display_name_plural' => 'Pessoas',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Pessoa',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-12-11 02:49:48',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'portarias',
                'slug' => 'portarias',
                'display_name_singular' => 'Portaria',
                'display_name_plural' => 'Portarias',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Portaria',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-12-13 01:38:28',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'pessoas_portarias',
                'slug' => 'pessoas-portarias',
                'display_name_singular' => 'Pessoas Portaria',
                'display_name_plural' => 'Pessoas Portarias',
                'icon' => 'voyager-data',
                'model_name' => 'App\\PessoasPortaria',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:43:23',
            ),
        ));
        
        
    }
}