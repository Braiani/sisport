<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:14',
                'updated_at' => '2018-02-24 20:08:14',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
            ),
        ));
        
        
    }
}