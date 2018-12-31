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
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-02-24 20:08:11',
                'updated_at' => '2018-02-24 20:08:11',
                'permission_group_id' => NULL,
            ),
            19 => 
            array (
                'id' => 35,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            20 => 
            array (
                'id' => 36,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            21 => 
            array (
                'id' => 37,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            22 => 
            array (
                'id' => 38,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            23 => 
            array (
                'id' => 39,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-02-24 20:08:12',
                'updated_at' => '2018-02-24 20:08:12',
                'permission_group_id' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-02-24 20:08:14',
                'updated_at' => '2018-02-24 20:08:14',
                'permission_group_id' => NULL,
            ),
            25 => 
            array (
                'id' => 46,
                'key' => 'browse_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            26 => 
            array (
                'id' => 47,
                'key' => 'read_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            27 => 
            array (
                'id' => 48,
                'key' => 'edit_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            28 => 
            array (
                'id' => 49,
                'key' => 'add_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            29 => 
            array (
                'id' => 50,
                'key' => 'delete_status',
                'table_name' => 'status',
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 20:35:46',
                'permission_group_id' => NULL,
            ),
            30 => 
            array (
                'id' => 51,
                'key' => 'browse_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            31 => 
            array (
                'id' => 52,
                'key' => 'read_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            32 => 
            array (
                'id' => 53,
                'key' => 'edit_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            33 => 
            array (
                'id' => 54,
                'key' => 'add_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            34 => 
            array (
                'id' => 55,
                'key' => 'delete_coordenacoes',
                'table_name' => 'coordenacoes',
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 20:37:18',
                'permission_group_id' => NULL,
            ),
            35 => 
            array (
                'id' => 56,
                'key' => 'browse_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            36 => 
            array (
                'id' => 57,
                'key' => 'read_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            37 => 
            array (
                'id' => 58,
                'key' => 'edit_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            38 => 
            array (
                'id' => 59,
                'key' => 'add_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            39 => 
            array (
                'id' => 60,
                'key' => 'delete_pessoas',
                'table_name' => 'pessoas',
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:01:34',
                'permission_group_id' => NULL,
            ),
            40 => 
            array (
                'id' => 61,
                'key' => 'browse_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            41 => 
            array (
                'id' => 62,
                'key' => 'read_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            42 => 
            array (
                'id' => 63,
                'key' => 'edit_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            43 => 
            array (
                'id' => 64,
                'key' => 'add_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            44 => 
            array (
                'id' => 65,
                'key' => 'delete_portarias',
                'table_name' => 'portarias',
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:15:38',
                'permission_group_id' => NULL,
            ),
            45 => 
            array (
                'id' => 71,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-02-27 02:42:48',
                'updated_at' => '2018-02-27 02:42:48',
                'permission_group_id' => NULL,
            ),
        ));
        
        
    }
}