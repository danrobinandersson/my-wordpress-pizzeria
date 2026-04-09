<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/header.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/front-page.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/single.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/page-booking.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/footer.css" />
</head>

<body>

    <header>
        <nav>
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/pizza-logo.svg" class="logo" alt="pizza-logo">
            </a>

            <div class="nav-links">
                <a href="<?php echo esc_url(home_url('#story')); ?>">Story</a>
                <span>/</span>
                <a href="<?php echo esc_url(home_url('#pizzas')); ?>">Pizzas</a>
            </div>

            <a href="/booking">Book now</a>
        </nav>
    </header>