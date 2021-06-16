<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="未来を創り続ける事業今までにないテクノロジーを">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" type="" href="">
    <?php wp_head(); ?>
</head>

<body class="drawer drawer--right" <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- drawer.js　使用 -->
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
    </button>

    <!-- sp時にdrawer.js -->
    <nav class="drawer-nav">
        <ul class="drawer-menu">
        <?php
                $args = array(
                'menu' => 'global-navigation',
                'menu_class' => '',
                'container' => false, 
                );
                wp_nav_menu($args);
                ?>
            </nav><!-- /header__nav -->
        </ul>
    </nav>

    <!-- header -->
    <header class="header">
        <div class="header__contents inner">
            <nav class="header__nav">
            <?php
                $args = array(
                'menu' => 'global-navigation',
                'menu_class' => '',
                'container' => false, 
                );
                wp_nav_menu($args);
                ?>
            </nav><!-- /header__nav -->
        </div><!-- /header__contents -->

    </header><!-- /header -->