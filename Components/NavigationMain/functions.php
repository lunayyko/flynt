<?php

namespace Flynt\Components\NavigationMain;

use Timber\Menu;
use Flynt\Utils\Asset;

add_action('init', function () {
    register_nav_menus([
        'navigation_main' => __('Navigation Main', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationMain', function ($data) {
    $data['maxLevel'] = 0;
    $data['menu'] = new Menu('navigation_main');

    $data['siteTitle'] = get_bloginfo('name');
    $data['logo'] = Asset::requireUrl('Components/NavigationMain/Assets/logo.svg');

    return $data;
});
