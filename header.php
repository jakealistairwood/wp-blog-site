<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title>Haven</title>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header container">
            <div class="header__logo">
                <h4 class="logo">
                    <a href="<?php echo site_url('/') ?>">Haven</a>
                </h4>
                <p class="logo-subheader">A wellbeing space dedicated to Introverts.</p>
            </div>
            <div class="header__links">
                <a href="">Home</a>
                <a href="">About</a>
                <button class="nav-btn">Sign Up</button>
            </div>
        </header>
        <nav class="navbar">
            <ul class="navbar__nav-links">
                <li><a href="#">Self-Development</a></li>
                <li><a href="<?php echo site_url('/category/mental-health') ?>">Mental Health</a></li>
                <li><a href="#">Health & Wellbeing</a></li>
                <li><a href="#">Personality</a></li>
                <li><a href="#">Psychology</a></li>
                <li><a href="#">Creativity</a></li>
                <li><a href="#">Nutrition</a></li>
            <ul>
        </nav>