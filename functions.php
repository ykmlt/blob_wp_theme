<?php
function register_menus()
{
    register_nav_menus(array('main-menu'=>__('Menu principal'), 'side-menu'=>__('Menu laréral')));
}


add_action('init', 'register_menus');