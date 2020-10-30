<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php the_title()?></title> 
<?php wp_head();?>
</head>
<body>


<!-- GETS ALL HERO FIELDS  -->
<?php $hero = get_field('hero'); ?>

<div class="hero-menu">
        <img class="logo-top float-left" src="<?php echo $hero['logo']; ?>" alt="audBook logo">
<?php
wp_nav_menu( array( 
    'theme_location' => 'hero-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</div>

    <!------------- audBook Logo & Menu ------------->