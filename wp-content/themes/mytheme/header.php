<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Custom Theme</title>
    
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_nav_menu( array( 
    'theme_location' => 'header-menu', 
    'container' => 'nav', 
    'container_class' => 'nav-menu' ) ) ; 
    ?>