<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Painel Administrativo',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2018-02-24 20:08:09',
                'updated_at' => '2018-02-27 03:47:17',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-02-24 20:08:09',
                'updated_at' => '2018-02-24 20:08:09',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 20:08:10',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:16:13',
                'route' => NULL,
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 2,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:06:52',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 3,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:06:52',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 4,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:06:52',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:16:13',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 5,
                'created_at' => '2018-02-24 20:08:14',
                'updated_at' => '2018-02-24 21:06:52',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Status',
                'url' => '/admin/status',
                'target' => '_self',
                'icon_class' => 'voyager-activity',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2018-02-24 20:35:46',
                'updated_at' => '2018-02-24 21:10:52',
                'route' => NULL,
                'parameters' => '',
            ),
            10 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Coordenações',
                'url' => '/admin/coordenacoes',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2018-02-24 20:37:18',
                'updated_at' => '2018-02-24 21:07:30',
                'route' => NULL,
                'parameters' => '',
            ),
            11 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Pessoas',
                'url' => '/admin/pessoas',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2018-02-24 21:01:34',
                'updated_at' => '2018-02-24 21:07:46',
                'route' => NULL,
                'parameters' => '',
            ),
            12 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Portarias',
                'url' => '/admin/portarias',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2018-02-24 21:15:38',
                'updated_at' => '2018-02-24 21:16:25',
                'route' => NULL,
                'parameters' => '',
            ),
            13 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 1,
                'created_at' => '2018-02-24 20:08:10',
                'updated_at' => '2018-02-24 21:06:52',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}