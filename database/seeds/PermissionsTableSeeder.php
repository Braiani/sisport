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
                'permission_group_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'permission_group_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:14',
                'updated_at' => '2018-02-24 20:08:14',
                'permission_group_id' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
                'permission_group_id' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
                'permission_group_id' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
                'permission_group_id' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
                'permission_group_id' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_periodicidades',
                'table_name' => 'periodicidades',
                'created_at' => '2018-02-24 20:34:21',
                'updated_at' => '2018-02-24 20:34:21',
                'permission_group_id' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_pessoas_portarias',
                'table_name' => 'pessoas_portarias',
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_convites',
                'table_name' => 'convites',
                'created_at' => '2019-08-04 14:07:14',
                'updated_at' => '2019-08-04 14:07:14',
                'permission_group_id' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_convites',
                'table_name' => 'convites',
                'created_at' => '2019-08-04 14:07:14',
                'updated_at' => '2019-08-04 14:07:14',
                'permission_group_id' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_convites',
                'table_name' => 'convites',
                'created_at' => '2019-08-04 14:07:14',
                'updated_at' => '2019-08-04 14:07:14',
                'permission_group_id' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_convites',
                'table_name' => 'convites',
                'created_at' => '2019-08-04 14:07:14',
                'updated_at' => '2019-08-04 14:07:14',
                'permission_group_id' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_convites',
                'table_name' => 'convites',
                'created_at' => '2019-08-04 14:07:14',
                'updated_at' => '2019-08-04 14:07:14',
                'permission_group_id' => NULL,
            ),
        ));
        
        
    }
}