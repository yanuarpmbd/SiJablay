<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'SIJABLAY-DPMPTSP',

    'title_prefix' => '',

    'title_postfix' => '',

     /*
    |--------------------------------------------------------------------------
    | Custom DS-LandLord
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>SIJABLAY</b> DPMPTSP',

    'logo_mini' => '<b>PT</b>SP',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'landlord',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    // 'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'MAIN NAVIGATION',
        [
            'text' => 'Dashboard',
            'url'  => '/dashboard',
            'icon' => 'tachometer',
        ],

        [
            'text'    => 'Data Master',
            'icon'    => 'laptop',
            'can'     => 'userman',
            'submenu' => [
                [
                    'text' => 'Pegawai',
                    'url'  => '/pegawai/list',
                    'icon' => 'group',
                ],
                [
                    'text'    => 'Users',
                    'icon'    => 'user',
                    'url'     => '/users',
                    'can'     => 'userman',
                ],

                
            ],
        ],

        [
            'text'    => 'SPT',
            'icon'    => 'file',
            'can'     => 'userman',
            'submenu' => [
                [
                    'text' => 'Matriks SPT',
                    'url'  => '/spt/add',
                    'icon' => 'plus',
                ],
                [
                    'text' => 'Data List All',
                    'url'  => '/spt/list',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Import',
                    'url'  => '/spt/import',
                    'icon' => 'file',
                ],
                [
                    'text' => 'Eksport',
                    'url'  => '/spt/eksport',
                    'icon' => 'download',
                ],
            ],
        ],


        // [
        //     'text'    => 'Land', /*certificates*/
        //     'icon'    => 'tags',
        //     'submenu' => [
        //         [
        //             'text' => 'Add New',
        //             'url'  => '/certificates/add',
        //             'icon' => 'plus',
        //         ],
        //         [
        //             'text' => 'Data List All',
        //             'url'  => '/certificates/list',
        //             'icon' => 'list',
        //         ],
                
        //         [
        //             'text' => 'Data Filter',
        //             'url'  => '/certificates/filter',
        //             'icon' => 'list',
        //         ],
        //         [
        //             'text' => 'Import',
        //             'url'  => '/certificates/import',
        //             'icon' => 'file',
        //         ],
        //         [
        //             'text' => 'Eksport',
        //             'url'  => '/certificates/eksport',
        //             'icon' => 'file',
        //         ],
        //     ],
        // ],
        // [
        //     'text'    => 'NOP',
        //     'icon'    => 'money',
        //     'submenu' => [
        //         [
        //             'text' => 'Add New NOP',
        //             'url'  => '/taxes/add',
        //             'icon' => 'plus',
        //         ],

        //         [
        //             'text' => 'NOP List',
        //             'url'  => '/taxes/list',
        //             'icon' => 'list',
        //         ],

        //         [
        //             'text' => 'Import 1 Sert',
        //             'url'  => '/taxes/import',
        //             'icon' => 'file-text',
        //         ],
        //         [
        //             'text' => 'Import 1 PBB',
        //             'url'  => '/taxes/importsert',
        //             'icon' => 'file-text',
        //         ],
        //         [
        //             'text' => 'Eksport',
        //             'url'  => '/taxes/eksport',
        //             'icon' => 'download',
        //         ],
        //     ],
        // ],
        // [
        //     'text'    => 'PBB',
        //     'icon'    => 'money',
        //     'submenu' => [
        //         [
        //             'text' => '2017',
        //             'url'  => '/pbb/2017',
        //             'icon' => 'plus',
        //         ],
        //         [
        //             'text' => '2018',
        //             'url'  => '/pbb/2018',
        //             'icon' => 'plus',
        //         ],
        //         [
        //             'text' => '2019',
        //             'url'  => '/pbb/2019',
        //             'icon' => 'plus',
        //         ],
                
        //     ],
        // ],
        // [
        //     'text'    => 'Property',
        //     'icon'    => 'home',
        //     'can'     => 'userall',
        //     'submenu' => [
        //         [
        //             'text' => 'Add New',
        //             'url'  => '/properties/add',
        //             'icon' => 'plus',
        //         ],
        //         [
        //             'text' => 'Data List',
        //             'url'  => '/properties/list',
        //             'icon' => 'list',
        //         ],
        //         [
        //             'text' => 'Import',
        //             'url'  => '/properties/import',
        //             'icon' => 'file',
        //         ],
        //         [
        //             'text' => 'Eksport',
        //             'url'  => '/properties/eksport',
        //             'icon' => 'download',
        //         ],
        //     ],
        // ],
        
        // [
        //     'text'    => 'Lease',
        //     'icon'    => 'dollar',
        //     'can'     => 'userall',
        //     'submenu' => [
        //         [
        //             'text' => 'Add New',
        //             'url'  => '/leases/add',
        //             'icon' => 'plus',
        //         ],
        //         [
        //             'text' => 'To Do List',
        //             'url'  => '/leases/todolist',
        //             'icon' => 'calendar',
        //         ],
        //         [
        //             'text' => 'Data List',
        //             'url'  => '/leases/list',
        //             'icon' => 'list',
        //         ],
        //         [
        //             'text' => 'Drafts',
        //             'url'  => '/leases/drafts',
        //             'icon' => 'file',
        //         ],
        //         [
        //             'text' => 'Import',
        //             'url'  => '/leases/import',
        //             'icon' => 'file',
        //         ],
        //         [
        //             'text' => 'Eksport',
        //             'url'  => '/leases/eksport',
        //             'icon' => 'download',
        //         ],
        //     ],
        // ],
        // [
        //     'text'    => 'Land Maps',
        //     'icon'    => 'globe',
        //     'url'     => '/land/maps'
        //     'can'     => 'user-manager',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        // 'chartjs'    => true,
    ],
];
