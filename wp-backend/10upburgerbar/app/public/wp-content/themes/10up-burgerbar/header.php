<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>10up Eats.</h1>
    <nav class="eats__main-navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'headerLocation'
            ));
        ?>
    </nav>