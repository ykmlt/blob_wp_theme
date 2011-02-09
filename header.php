<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?><?php wp_title(' - ') ?></title>

        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/reset/reset-min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />

        <?php wp_head() ?>
    </head>

    <body <?php body_class() ?>>
        <div id="header">
            <h1>
                <a href="<?php echo home_url( '/' ) ?>" title="<?php esc_attr_e(get_bloginfo('name', 'display')) ?>" rel="home"><?php bloginfo('name') ?></a>
            </h1>
        </div>