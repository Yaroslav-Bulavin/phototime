<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phototime
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phototime</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/fonts.css">
    <script src="https://kit.fontawesome.com/6a89a444bb.js" crossorigin="anonymous"></script>
    <link rel="manifest" href="/manifest.json">
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
            .register('sw.js')
            .then(function () {
                console.log("Service Worker registered!");
            });
        }
    </script>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <nav class="nav">
                    <a href="" class="nav__link" data-scroll="#community"><?php the_field('first_nav_link');?></a>
                    <a href="" class="nav__link" data-scroll="#start"><?php the_field('second_nav_link');?></a>
                    <div class="logo" data-scroll="#intro">
                        <img src="<?php the_field('logo');?>" alt="">
                    </div>
                    <a href="" class="nav__link nav__link--third" data-scroll="#design"><?php the_field('third_nav_link');?></a>
                    <a href="" class="nav__link" data-scroll="#download"><?php the_field('fourth_nav_link');?></a>
                </nav>
                <button class="burger" type="button" id="burger">
                    <span class="burger__item">Menu</span>
                </button>
            </div>
        </div>
    </header>
